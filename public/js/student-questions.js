document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.getElementById("iqSearchForm");
    const searchInput = document.getElementById("iqSearchInput");
    const questionList = document.getElementById("iqQuestionList");
    const resultsCount = document.getElementById("iqResultsCount");
    const emptyState = document.getElementById("iqEmptyState");
    const resetButton = document.getElementById("iqResetFilters");
    const menuToggle = document.getElementById("iqMenuToggle");
    const navigation = document.getElementById("iqNavigation");
    const categoryButtons = document.querySelectorAll(".iq-category-card");
    const sortButtons = document.querySelectorAll(".iq-sort-btn");

    if (!questionList) return;

    const currentUrl = new URL(window.location.href);
    let selectedCategory = currentUrl.searchParams.get("category") || "all";
    let selectedSort = currentUrl.searchParams.get("sort") || "latest";

    function applyFilters() {
        const url = new URL(window.location.href);
        const search = searchInput ? searchInput.value.trim() : "";

        if (search) {
            url.searchParams.set("search", search);
        } else {
            url.searchParams.delete("search");
        }

        if (selectedCategory && selectedCategory !== "all") {
            url.searchParams.set("category", selectedCategory);
        } else {
            url.searchParams.delete("category");
        }

        if (selectedSort && selectedSort !== "latest") {
            url.searchParams.set("sort", selectedSort);
        } else {
            url.searchParams.delete("sort");
        }

        // Return to the first page when filters change.
        url.searchParams.delete("page");
        window.location.href = url.toString();
    }

    function updateActiveButtons() {
        categoryButtons.forEach(function (button) {
            button.classList.toggle(
                "iq-category-active",
                (button.dataset.category || "all") === selectedCategory,
            );
        });

        sortButtons.forEach(function (button) {
            button.classList.toggle(
                "iq-sort-active",
                (button.dataset.sort || "latest") === selectedSort,
            );
        });
    }

    if (searchInput) {
        searchInput.value = currentUrl.searchParams.get("search") || "";
    }

    updateActiveButtons();

    if (searchForm) {
        searchForm.addEventListener("submit", function (event) {
            event.preventDefault();
            applyFilters();
        });
    }

    if (searchInput) {
        searchInput.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                applyFilters();
            }
        });
    }

    categoryButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            selectedCategory = button.dataset.category || "all";
            applyFilters();
        });
    });

    sortButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            selectedSort = button.dataset.sort || "latest";

            // Match the controller's supported sort values.
            if (selectedSort === "most-answered") {
                selectedSort = "most-answered";
            }

            applyFilters();
        });
    });

    if (resetButton) {
        resetButton.addEventListener("click", function () {
            window.location.href = window.location.pathname;
        });
    }

    if (menuToggle && navigation) {
        menuToggle.addEventListener("click", function () {
            const isOpen = navigation.classList.toggle("iq-menu-open");

            menuToggle.setAttribute("aria-expanded", String(isOpen));
            menuToggle.innerHTML = isOpen
                ? '<i class="bi bi-x-lg"></i>'
                : '<i class="bi bi-list"></i>';
        });
    }

    // Keep the displayed result count aligned with Laravel pagination.
    if (resultsCount) {
        const pagination = document.querySelector(".iq-database-pagination");
        const visibleCards =
            questionList.querySelectorAll(".iq-question-card").length;

        if (pagination) {
            resultsCount.textContent = visibleCards + " questions on this page";
        } else {
            resultsCount.textContent = visibleCards + " questions";
        }
    }

    if (
        emptyState &&
        questionList.querySelectorAll(".iq-question-card").length === 0
    ) {
        emptyState.hidden = false;
    }
});
