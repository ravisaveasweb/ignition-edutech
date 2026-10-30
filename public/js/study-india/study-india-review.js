
// Shared Helper Functions
const $ = (selector, root = document) => root.querySelector(selector);
const $$ = (selector, root = document) => [...root.querySelectorAll(selector)];

// Shared Toast Notification
function showToast(message) {
    const toastElement = $("#toast");

    if (!toastElement) {
        return;
    }

    toastElement.textContent = message;
    toastElement.classList.add("show");

    clearTimeout(window._toastTimer);

    window._toastTimer = setTimeout(() => {
        toastElement.classList.remove("show");
    }, 3200);
}

// Homepage Initialization
function initReviewHomepage() {
    const menuToggle = $("#menuToggle");
    const mainNav = $("#mainNav");

    if (menuToggle && mainNav) {
        menuToggle.addEventListener("click", () => {
            const isOpen = mainNav.classList.toggle("open");

            menuToggle.setAttribute(
                "aria-expanded",
                String(isOpen)
            );
        });

        mainNav.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                mainNav.classList.remove("open");

                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );
            });
        });
    }

    // Course Search
    const courseSearch = $("#courseSearch");

    if (courseSearch) {
        courseSearch.addEventListener("submit", (event) => {
            const searchInput = $("#searchTerm");

            if (!searchInput || !searchInput.value.trim()) {
                event.preventDefault();

                showToast(
                    "Enter a course, college or program to get started."
                );
            }
        });
    }

    // Homepage Star Rating
    let chosenRating = 0;

    $$(".stars button").forEach((button) => {
        button.addEventListener("click", () => {
            chosenRating = Number(button.dataset.score);

            $$(".stars button").forEach((star) => {
                star.classList.toggle(
                    "active",
                    Number(star.dataset.score) <= chosenRating
                );
            });

            const ratingLabel = $("#ratingLabel");

            if (ratingLabel) {
                ratingLabel.textContent =
                    `${chosenRating} out of 5`;

                ratingLabel.style.color = "#b16b21";
            }
        });
    });

    // Legacy Homepage Review Form
    const legacyReviewForm = $("#reviewForm");

    if (legacyReviewForm) {
        legacyReviewForm.addEventListener("submit", (event) => {
            event.preventDefault();

            if (!legacyReviewForm.reportValidity()) {
                return;
            }

            const data = new FormData(legacyReviewForm);
            const formMessage = $("#formMessage");

            if (formMessage) {
                formMessage.textContent =
                    `Preview ready for ${data.get("college")}. ` +
                    `Rating: ${chosenRating ? chosenRating + "/5" : "not selected"}. ` +
                    "Nothing has been sent or saved.";

                formMessage.classList.add("success");
            }

            showToast("Review preview ready — no data was sent.");
        });
    }

    // Newsletter Form
    const newsletterForm = $("#newsletterForm");

    if (newsletterForm) {
        newsletterForm.addEventListener("submit", (event) => {
            event.preventDefault();

            const newsletterMessage = $("#newsletterMessage");

            if (newsletterMessage) {
                newsletterMessage.textContent =
                    "Thanks! Newsletter signup is not connected in this demo.";
            }

            newsletterForm.reset();
        });
    }

    // Leaderboard Information
    const leaderboardInfo = $("#leaderboardInfo");

    if (leaderboardInfo) {
        leaderboardInfo.addEventListener("click", () => {
            showToast(
                "This leaderboard is illustrative; connect approved review data to make it live."
            );
        });
    }

    // Quick Guide
    const quickGuide = $("#quickGuide");

    if (quickGuide) {
        quickGuide.addEventListener("click", () => {
            const guidelines = $("#guidelines");

            if (guidelines) {
                guidelines.scrollIntoView({
                    behavior: "smooth"
                });
            }

            showToast(
                "Use the checklist above to prepare your review."
            );
        });
    }

    // FAQ Accordion
    $$(".faq-list details").forEach((item) => {
        item.addEventListener("toggle", () => {
            const mark = $("summary span", item);

            if (mark) {
                mark.textContent = item.open ? "−" : "＋";
            }
        });
    });
}

// Review Form Initialization
function initCollegeReviewForm() {
    const form = $("#collegeReviewForm");

    if (!form) {
        return;
    }

    // Overall Star Rating
    let overallRating = 0;
    let reviewConfirmed = false;

    const ratingButtons = $$(".rating-star", form);
    const ratingValue = $("#overallRatingValue", form);
    const ratingLabel = $("#overallRatingLabel", form);
    const ratingTitle = $("#overallRatingTitle", form);

    function paintRating(score) {
        overallRating = score;

        ratingButtons.forEach((button) => {
            const active = Number(button.dataset.rating) <= score;

            button.classList.toggle("active", active);

            button.setAttribute(
                "aria-checked",
                String(Number(button.dataset.rating) === score)
            );
        });

        if (ratingValue) {
            ratingValue.value = String(score);
        }

        if (ratingLabel) {
            ratingLabel.textContent = `${score} out of 5 stars`;
            ratingLabel.style.color = "#b16b21";
        }
    }

    ratingButtons.forEach((button) => {
        button.addEventListener("click", () => {
            paintRating(Number(button.dataset.rating));
        });

        button.addEventListener("mouseenter", () => {
            const score = Number(button.dataset.rating);

            ratingButtons.forEach((star) => {
                star.classList.toggle(
                    "hovered",
                    Number(star.dataset.rating) <= score
                );
            });
        });

        button.addEventListener("mouseleave", () => {
            ratingButtons.forEach((star) => {
                star.classList.remove("hovered");
            });
        });

        button.addEventListener("keydown", (event) => {
            if (
                event.key === "ArrowRight" ||
                event.key === "ArrowUp"
            ) {
                event.preventDefault();

                const next = Math.min(
                    5,
                    Number(button.dataset.rating) + 1
                );

                const nextButton = $(
                    `[data-rating="${next}"]`,
                    form
                );

                if (nextButton) {
                    nextButton.focus();
                    paintRating(next);
                }
            } else if (
                event.key === "ArrowLeft" ||
                event.key === "ArrowDown"
            ) {
                event.preventDefault();

                const next = Math.max(
                    1,
                    Number(button.dataset.rating) - 1
                );

                const nextButton = $(
                    `[data-rating="${next}"]`,
                    form
                );

                if (nextButton) {
                    nextButton.focus();
                    paintRating(next);
                }
            }
        });
    });

    // Admission Year Dropdown
    const yearSelect = $("#admissionYear", form);

    if (yearSelect && yearSelect.options.length <= 1) {
        const currentYear = new Date().getFullYear();

        for (
            let year = currentYear;
            year >= currentYear - 35;
            year--
        ) {
            const option = document.createElement("option");

            option.value = String(year);
            option.textContent = String(year);

            yearSelect.appendChild(option);
        }
    }

    // Referral Code
    const applyReferral = $("#applyReferral", form);

    if (applyReferral) {
        applyReferral.addEventListener("click", () => {
            const referralInput = $("#referralCode", form);
            const referralMessage = $("#referralMessage", form);

            if (!referralInput || !referralMessage) {
                return;
            }

            referralMessage.textContent = referralInput.value.trim()
                ? "Referral code entered; it can be verified when a backend is connected."
                : "Enter a referral code first.";
        });
    }

    // Conditional Form Fields
    function updateConditionalField(group, target) {
        const selected = $(
            `input[name="${group}"]:checked`,
            form
        );

        const element = $("#" + target, form);

        if (!element) {
            return;
        }

        const shouldShow = Boolean(
            selected && selected.value === "Yes"
        );

        element.hidden = !shouldShow;

        element.querySelectorAll("input, select, textarea").forEach((field) => {
            field.disabled = !shouldShow;
        });
    }

    function updateConditionalFields() {
        updateConditionalField("reservation", "reservationWrap");
        updateConditionalField("hostel", "hostelWrap");
        updateConditionalField("placements", "packageWrap");
    }

    $$(
        'input[name="reservation"], input[name="hostel"], input[name="placements"]',
        form
    ).forEach((input) => {
        input.addEventListener("change", updateConditionalFields);
    });

    updateConditionalFields();

    // Add Another College
    const addCollegeButton = $("#addCollege", form);
    const otherColleges = $("#otherColleges", form);

    if (addCollegeButton && otherColleges) {
        addCollegeButton.addEventListener("click", () => {
            const row = document.createElement("div");

            row.className = "other-row";

            const collegeLabel = document.createElement("label");
            collegeLabel.className = "field";
            collegeLabel.append("College / University Name");

            const collegeInput = document.createElement("input");
            collegeInput.name = "otherCollege[]";
            collegeInput.placeholder = "Other college name";

            collegeLabel.appendChild(collegeInput);

            const courseLabel = document.createElement("label");
            courseLabel.className = "field";
            courseLabel.append("Select Course");

            const courseInput = document.createElement("input");
            courseInput.name = "otherCourse[]";
            courseInput.placeholder = "Course or program";

            courseLabel.appendChild(courseInput);

            row.append(collegeLabel, courseLabel);
            otherColleges.appendChild(row);
        });
    }

    // Build a Preview Item
    function addPreviewItem(container, label, value) {
        const item = document.createElement("div");
        item.className = "preview-item";

        const bold = document.createElement("b");
        bold.textContent = label;

        const span = document.createElement("span");
        span.textContent = value || "Not provided";

        item.append(bold, span);
        container.appendChild(item);
    }

    // Create or Reuse an Inline Preview Section
    function getPreviewContainer() {
        let preview = $("#reviewPreviewSection");

        if (preview) {
            return preview;
        }

        preview = document.createElement("section");
        preview.id = "reviewPreviewSection";
        preview.className = "review-preview-section";
        preview.hidden = true;

        const heading = document.createElement("h2");
        heading.textContent = "Review Preview";

        const description = document.createElement("p");
        description.textContent =
            "Please check your details before submitting your review.";

        const content = document.createElement("div");
        content.id = "reviewPreviewContent";
        content.className = "preview-content";

        const actions = document.createElement("div");
        actions.className = "form-actions";

        const editButton = document.createElement("button");
        editButton.type = "button";
        editButton.id = "editReviewButton";
        editButton.className = "outline-button";
        editButton.textContent = "Edit Review";

        const submitButton = document.createElement("button");
        submitButton.type = "button";
        submitButton.id = "confirmReviewButton";
        submitButton.className = "orange-button";
        submitButton.textContent = "Submit Review";

        actions.append(editButton, submitButton);
        preview.append(heading, description, content, actions);

        form.insertAdjacentElement("afterend", preview);

        editButton.addEventListener("click", () => {
            preview.hidden = true;

            form.hidden = false;

            form.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });

       submitButton.addEventListener("click", () => {
    if (!form.reportValidity()) {
        return;
    }

    if (!overallRating) {
        if (ratingLabel) {
            ratingLabel.textContent = "Please select a star rating";
            ratingLabel.style.color = "#c43d36";
        }

        if (ratingButtons[0]) {
            ratingButtons[0].focus();
        }

        return;
    }

    reviewConfirmed = true;
    form.requestSubmit();
});

        return preview;
    }

    // Review Form Submission and Preview
    form.addEventListener("submit", (event) => {
        // Allow the confirmed review to submit to Laravel
    if (reviewConfirmed) {
        return;
    }

    // Otherwise, prevent submission and show the preview
    event.preventDefault();

    if (!form.reportValidity()) {
        return;
    }

        if (!overallRating) {
            if (ratingLabel) {
                ratingLabel.textContent =
                    "Please select a star rating";

                ratingLabel.style.color = "#c43d36";
            }

            if (ratingTitle) {
                ratingTitle.scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
            }

            if (ratingButtons[0]) {
                ratingButtons[0].focus();
            }

            return;
        }

        const data = new FormData(form);
        const preview = getPreviewContainer();
        const output = $("#reviewPreviewContent", preview);

        output.replaceChildren();

        [
            ["College / University", data.get("college")],
            ["Course", data.get("course")],
            ["Name", data.get("name")],
            ["Email", data.get("email")],
            [
                "Mobile",
                `${data.get("countryCode") || ""} ${data.get("mobile") || ""}`.trim()
            ],
            ["Gender", data.get("gender")],
            ["Admission year", data.get("admissionYear")],
            [
                "Course fees",
                data.get("courseFees")
                    ? `₹${data.get("courseFees")}`
                    : "Not provided"
            ],
            ["Class size", data.get("classSize")],
            ["12th board / university", data.get("board12")],
            ["12th score", data.get("score12")],
            ["10th board / university", data.get("board10")],
            ["10th score", data.get("score10")],
            ["Graduation course", data.get("graduationCourse")],
            ["Graduation score", data.get("graduationScore")],
            ["Reservation benefits", data.get("reservation")],
            ["Reservation type", data.get("reservationType")],
            ["GD / PI for admission", data.get("gdpi")],
            ["Hostel", data.get("hostel")],
            ["Hostel fees", data.get("hostelFees")],
            ["Placements", data.get("placements")],
            ["Average package", data.get("averagePackage")],
            ["Internship opportunities", data.get("internships")],
            ["Other colleges", data.getAll("otherCollege[]").join(", ")],
            ["Other courses", data.getAll("otherCourse[]").join(", ")],
            ["Reason for not choosing another college", data.get("reasonNotChosen")],
            ["Overall college rating", `${overallRating} out of 5 stars`],
            ["Review", data.get("review")]
        ].forEach(([label, value]) => {
            addPreviewItem(output, label, value);
        });

        const consentItem = document.createElement("p");
        consentItem.textContent =
            "You confirmed that this review reflects your genuine experience.";

        output.appendChild(consentItem);

        form.hidden = true;
        preview.hidden = false;

        preview.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
}

// Initialize Both Page Sections Safely
document.addEventListener("DOMContentLoaded", () => {
    initReviewHomepage();
    initCollegeReviewForm();


    
    // Review Submission Success Popup
    const successModal = $("#reviewSuccessModal");
    const closeSuccessButton = $("#closeReviewSuccess");

    if (successModal && closeSuccessButton) {
        closeSuccessButton.addEventListener("click", () => {
            successModal.remove();
        });

        closeSuccessButton.focus();
    }

    // progress baar start 

    const form = document.getElementById('collegeReviewForm');
    const progressBar = document.getElementById('formProgressBar');
    const progressText = document.getElementById('formProgressText');
    const progressTrack = document.getElementById('formProgressTrack');
    const progressHelper = document.getElementById('formProgressHelper');

    if (!form || !progressBar || !progressText || !progressTrack) {
        return;
    }

    let userInteracted = false;

    function updateFormProgress() {
        // Always start at 0% until the user interacts.
        if (!userInteracted) {
            progressBar.style.width = '0%';
            progressText.textContent = '0% completed';
            progressTrack.setAttribute('aria-valuenow', '0');

            if (progressHelper) {
                progressHelper.textContent =
                    'Complete your details to track your progress.';
            }

            return;
        }

        // Get all enabled form fields.
        const fields = Array.from(
            form.querySelectorAll('input, select, textarea')
        ).filter(function (field) {
            return (
                !field.disabled &&
                field.type !== 'hidden' &&
                field.type !== 'submit' &&
                field.type !== 'button' &&
                field.type !== 'reset' &&
                field.type !== 'file'
            );
        });

        let total = 0;
        let completed = 0;

        // Prevent radio groups from being counted multiple times.
        const processedGroups = new Set();

        fields.forEach(function (field) {
            // Radio buttons: count each group as one field.
            if (field.type === 'radio') {
                if (processedGroups.has(field.name)) {
                    return;
                }

                processedGroups.add(field.name);

                const group = fields.filter(function (item) {
                    return (
                        item.type === 'radio' &&
                        item.name === field.name
                    );
                });

                total++;

                if (group.some(function (radio) {
                    return radio.checked;
                })) {
                    completed++;
                }

                return;
            }

            total++;

            // Checkboxes count only when checked.
            if (field.type === 'checkbox') {
                if (field.checked) {
                    completed++;
                }

                return;
            }

            const value = field.value.trim();

            // Empty fields receive no completion credit.
            if (value === '') {
                return;
            }

            // Ignore invalid entered values.
            if (!field.validity.valid) {
                return;
            }

            // Overall rating counts only after a valid rating is selected.
            if (
                field.id === 'overallRatingValue' ||
                field.name === 'overallRating'
            ) {
                const rating = Number(value);

                if (rating >= 1 && rating <= 5) {
                    completed++;
                }

                return;
            }

            completed++;
        });

        // Calculate completion percentage.
        const percentage = total > 0
            ? Math.round((completed / total) * 100)
            : 0;

        // Update progress bar and accessible progress value.
        progressBar.style.width = percentage + '%';
        progressText.textContent = percentage + '% completed';

        progressTrack.setAttribute(
            'aria-valuenow',
            String(percentage)
        );

        // Update helper text.
        if (progressHelper) {
            if (percentage === 100) {
                progressHelper.textContent =
                    'Excellent! All form fields are complete.';
            } else if (percentage >= 75) {
                progressHelper.textContent =
                    'Almost finished! Review the remaining details.';
            } else if (percentage >= 40) {
                progressHelper.textContent =
                    'Good progress! Keep adding your details.';
            } else {
                progressHelper.textContent =
                    'Complete your details to track your progress.';
            }
        }
    }

    // Start tracking after the user interacts with a field.
    form.addEventListener('input', function () {
        userInteracted = true;
        updateFormProgress();
    });

    form.addEventListener('change', function () {
        userInteracted = true;
        updateFormProgress();
    });

    // Observe dynamically added fields from the Add More button.
    const observer = new MutationObserver(function () {
        updateFormProgress();
    });

    observer.observe(form, {
        childList: true,
        subtree: true
    });

    // Initial page load: always 0%.
    updateFormProgress();
    // progress bar end 
});




