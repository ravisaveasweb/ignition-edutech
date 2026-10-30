/* public/js/study-abroad/study-abroad-review-form.js */
(() => {
    "use strict";

    const $ = (selector, root = document) => root.querySelector(selector);
    const $$ = (selector, root = document) => [...root.querySelectorAll(selector)];
    const form = $("#sa-review-form");
    if (!form) return;

    const currentYear = new Date().getFullYear();
    const ratings = { academics: 0, overall: 0 };
    let toastTimer = null;
    let previewConfirmed = false;
    let previousFocus = null;

    const enrollmentYear = $("#sa-review-form-enrollment-year", form);
    if (enrollmentYear && enrollmentYear.options.length <= 1) {
        for (let year = currentYear; year >= currentYear - 35; year--) {
            const option = document.createElement("option");
            option.value = String(year);
            option.textContent = String(year);
            enrollmentYear.append(option);
        }
    }

    // Restore old input values after server-side validation redirects.
    ["academics", "overall"].forEach(key => {
        const input = $(`#sa-review-${key === "academics" ? "academics" : "overall"}-rating`, form);
        const oldValue = Number(input?.value || 0);
        if (oldValue >= 1 && oldValue <= 5) ratings[key] = oldValue;
    });

    function setRating(key, value) {
        if (!Object.prototype.hasOwnProperty.call(ratings, key)) return;
        const rating = Number(value);
        if (!Number.isInteger(rating) || rating < 1 || rating > 5) return;
        ratings[key] = rating;

        const hidden = key === "academics"
            ? $("#sa-review-academics-rating", form)
            : $("#sa-review-overall-rating", form);
        if (hidden) hidden.value = String(rating);

        const group = $(`.sa-review-form-stars[data-rating="${key}"]`, form);
        if (!group) return;

        $$("button", group).forEach(button => {
            const valueNumber = Number(button.dataset.value);
            button.classList.toggle("sa-review-form-star-active", valueNumber <= rating);
            button.setAttribute("aria-pressed", String(valueNumber === rating));
        });

        const error = group.parentElement?.querySelector(".sa-review-form-rating-error")
            || group.closest(".sa-review-form-rating-block")?.querySelector(".sa-review-form-rating-error");
        if (error) error.textContent = "";
        updateProgress();
    }

    // Generate exactly five stars once per rating group.
    $$(".sa-review-form-stars", form).forEach(group => {
        const key = group.dataset.rating;
        if (!["academics", "overall"].includes(key)) return;
        group.replaceChildren();

        for (let value = 1; value <= 5; value++) {
            const button = document.createElement("button");
            button.type = "button";
            button.className = "sa-review-form-star";
            button.textContent = "★";
            button.dataset.value = String(value);
            button.setAttribute("aria-label", `${value} out of 5 stars`);
            button.setAttribute("aria-pressed", "false");
            button.addEventListener("click", () => setRating(key, value));
            button.addEventListener("keydown", event => {
                if (!["ArrowRight", "ArrowUp", "ArrowLeft", "ArrowDown"].includes(event.key)) return;
                event.preventDefault();
                const delta = ["ArrowRight", "ArrowUp"].includes(event.key) ? 1 : -1;
                const nextValue = Math.max(1, Math.min(5, Number(button.dataset.value) + delta));
                setRating(key, nextValue);
                $(`[data-value="${nextValue}"]`, group)?.focus();
            });
            group.append(button);
        }
        if (ratings[key]) setRating(key, ratings[key]);
    });

    function setError(element, message) {
        element.classList.toggle("sa-review-form-invalid", Boolean(message));
        if (message) element.setAttribute("aria-invalid", "true");
        else element.removeAttribute("aria-invalid");

        const label = element.closest("label");
        const error = label?.querySelector(".sa-review-form-error");
        if (error && !error.id?.includes("consent")) error.textContent = message || "";
    }

    function validateField(element) {
        if (element.type === "checkbox" || element.type === "hidden") return true;
        const value = element.value.trim();
        let message = "";

        if (element.required && !value) message = "This field is required.";
        else if (value && element.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) message = "Enter a valid email address.";
        else if (value && element.type === "tel" && !/^[0-9]{10}$/.test(value)) message = "Enter exactly 10 digits.";
        else if (value && element.type === "number" && element.min !== "" && Number(value) < Number(element.min)) message = `Enter ${element.min} or more.`;
        else if (value && element.minLength > 0 && value.length < element.minLength) message = `Please enter at least ${element.minLength} characters.`;
        else if (value && element.maxLength > 0 && value.length > element.maxLength) message = `Please enter no more than ${element.maxLength} characters.`;
        else if (element.validity?.patternMismatch) message = "Please enter a value in the required format.";

        setError(element, message);
        return !message;
    }

    $$("input, select, textarea", form).forEach(element => {
        if (element.type === "checkbox" || element.type === "hidden") return;
        element.addEventListener("blur", () => validateField(element));
        element.addEventListener("input", () => {
            if (element.classList.contains("sa-review-form-invalid")) validateField(element);
            updateCounter(element);
            updateProgress();
        });
        element.addEventListener("change", () => {
            validateField(element);
            updateProgress();
        });
    });

    function updateCounter(element) {
        if (!element.matches("textarea[minlength]")) return;
        const counter = element.closest("label")?.querySelector(".sa-review-form-count");
        if (counter) counter.textContent = `${element.value.trim().length} / ${element.minLength} characters minimum`;
    }
    $$("textarea[minlength]", form).forEach(updateCounter);

    function quietValid(element) {
        const value = element.value.trim();
        if (element.required && !value) return false;
        if (value && element.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) return false;
        if (value && element.type === "tel" && !/^[0-9]{10}$/.test(value)) return false;
        if (value && element.minLength > 0 && value.length < element.minLength) return false;
        if (value && element.maxLength > 0 && value.length > element.maxLength) return false;
        if (element.validity?.patternMismatch) return false;
        return true;
    }

    function updateProgress() {
        const requiredFields = $$("[required]", form).filter(element =>
            element.type !== "checkbox" && element.type !== "hidden"
        );
        const completedFields = requiredFields.filter(quietValid).length;
        const completedRatings = ["academics", "overall"].filter(key => ratings[key] > 0).length;
        const total = requiredFields.length + 2;
        const percent = Math.round(((completedFields + completedRatings) / Math.max(total, 1)) * 100);
        const bar = $("#sa-review-form-progress-bar");
        const text = $("#sa-review-form-progress-text");
        if (bar) bar.style.width = `${percent}%`;
        if (text) text.textContent = `${percent}% complete`;
    }

    function showToast(message) {
        const toast = $("#sa-review-form-toast");
        if (!toast) return;
        toast.textContent = message;
        toast.classList.add("sa-review-form-show");
        window.clearTimeout(toastTimer);
        toastTimer = window.setTimeout(() => toast.classList.remove("sa-review-form-show"), 3500);
    }

    function validateAll() {
        let firstInvalid = null;
        $$("input, select, textarea", form).forEach(element => {
            if (element.type === "checkbox" || element.type === "hidden") return;
            if (!validateField(element) && !firstInvalid) firstInvalid = element;
        });

        ["academics", "overall"].forEach(key => {
            const group = $(`.sa-review-form-stars[data-rating="${key}"]`, form);
            const error = group?.parentElement?.querySelector(".sa-review-form-rating-error")
                || group?.closest(".sa-review-form-rating-block")?.querySelector(".sa-review-form-rating-error");
            if (!ratings[key]) {
                if (error) error.textContent = "Please select a rating.";
                if (!firstInvalid && group) firstInvalid = group;
            } else if (error) error.textContent = "";
        });

        const consent = $('[name="consent"]', form);
        const consentError = $("#sa-review-form-consent-error");
        if (consentError) consentError.textContent = consent?.checked ? "" : "Please confirm before continuing.";
        if (consent && !consent.checked && !firstInvalid) firstInvalid = consent;

        if (firstInvalid) {
            firstInvalid.scrollIntoView({ behavior: "smooth", block: "center" });
            firstInvalid.focus?.({ preventScroll: true });
            return false;
        }
        return true;
    }

    function addPreview(container, label, value) {
        const item = document.createElement("div");
        item.className = "sa-review-form-preview-item";
        const heading = document.createElement("b");
        heading.textContent = label;
        const content = document.createElement("span");
        content.textContent = value === null || value === undefined || value === "" ? "Not provided" : String(value);
        item.append(heading, content);
        container.append(item);
    }

    function openPreview() {
        const items = $("#sa-review-form-preview-items");
        const modal = $("#sa-review-form-preview-modal");
        if (!items || !modal) {
            showToast("The review preview could not be opened.");
            return;
        }

        const data = new FormData(form);
        items.replaceChildren();
        const previewData = [
            ["Name", data.get("fullName")],
            ["Email", data.get("email")],
            ["Mobile", data.get("mobile")],
            ["University", data.get("university")],
            ["Country", data.get("country")],
            ["Course", data.get("course")],
            ["Enrollment year", data.get("enrollmentYear")],
            ["Annual tuition fees", data.get("fees")],
            ["Why you chose this university", data.get("reason")],
            ["What you liked", data.get("likes")],
            ["What could improve", data.get("improvements")],
            ["Advice to future students", data.get("advice")],
            ["Academic rating", ratings.academics ? `${ratings.academics}/5 stars` : ""],
            ["Career / placement support", data.get("placements")],
            ["Accommodation", data.get("accommodation")],
            ["Campus jobs", data.get("campusJobs")],
            ["Review headline", data.get("headline")],
            ["Overall rating", ratings.overall ? `${ratings.overall}/5 stars` : ""]
        ];
        previewData.forEach(([label, value]) => addPreview(items, label, value));

        previousFocus = document.activeElement;
        modal.hidden = false;
        document.body.style.overflow = "hidden";
        $("#sa-review-form-close-modal")?.focus();
    }

    function closeModal() {
        const modal = $("#sa-review-form-preview-modal");
        if (!modal || modal.hidden) return;
        modal.hidden = true;
        document.body.style.overflow = "";
        (previousFocus && previousFocus.isConnected ? previousFocus : $('button[type="submit"]', form))?.focus();
    }

    form.addEventListener("submit", event => {
        if (previewConfirmed) {
            previewConfirmed = false;
            return; // Submit normally to Laravel after confirmation.
        }
        event.preventDefault();
        if (!validateAll()) {
            showToast("Please complete the highlighted required fields.");
            return;
        }
        openPreview();
    });

    $("#sa-review-form-close-modal")?.addEventListener("click", closeModal);
 $("#sa-review-form-done-button")?.addEventListener("click", () => {
    // Validate all required fields before submitting.
    if (!validateAll()) {
        closeModal();
        showToast("Please correct the highlighted fields before submitting.");
        return;
    }

    // Close the preview modal.
    const modal = $("#sa-review-form-preview-modal");

    if (modal) {
        modal.hidden = true;
    }

    document.body.style.overflow = "";

    // Submit directly to Laravel after custom validation succeeds.
    HTMLFormElement.prototype.submit.call(form);
});

    $("#sa-review-form-preview-modal")?.addEventListener("click", event => {
        if (event.target === $("#sa-review-form-preview-modal")) closeModal();
    });

    document.addEventListener("keydown", event => {
        const modal = $("#sa-review-form-preview-modal");
        if (event.key === "Escape" && modal && !modal.hidden) closeModal();
    });

    // Avoid accidental navigation away while preview is open; preserve keyboard operation.
    updateProgress();
})();
