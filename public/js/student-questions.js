
document.addEventListener("DOMContentLoaded", function () {
    const searchForm = document.getElementById("iqSearchForm");
    const searchInput = document.getElementById("iqSearchInput");
    const questionList = document.getElementById("iqQuestionList");
    const resultsCount = document.getElementById("iqResultsCount");
    const categoryButtons = document.querySelectorAll(".iq-category-card");
    const sortButtons = document.querySelectorAll(".iq-sort-btn");

    if (!questionList) return;

    const currentUrl = new URL(window.location.href);

    let selectedCategory =
        currentUrl.searchParams.get("category") || "all";

    let selectedSort =
        currentUrl.searchParams.get("sort") || "latest";

    function applyFilters() {
        const url = new URL(window.location.href);
        const search = searchInput ? searchInput.value.trim() : "";

        if (search) {
            url.searchParams.set("search", search);
        } else {
            url.searchParams.delete("search");
        }

        if (selectedCategory !== "all") {
            url.searchParams.set("category", selectedCategory);
        } else {
            url.searchParams.delete("category");
        }

        if (selectedSort !== "latest") {
            url.searchParams.set("sort", selectedSort);
        } else {
            url.searchParams.delete("sort");
        }

        // Reset pagination when filters change.
        url.searchParams.delete("page");

        window.location.href = url.toString();
    }

    function updateActiveButtons() {
        categoryButtons.forEach(function (button) {
            button.classList.toggle(
                "iq-category-active",
                (button.dataset.category || "all") === selectedCategory
            );
        });

        sortButtons.forEach(function (button) {
            button.classList.toggle(
                "iq-sort-active",
                (button.dataset.sort || "latest") === selectedSort
            );
        });
    }

    // Restore the search value from the URL.
    if (searchInput) {
        searchInput.value =
            currentUrl.searchParams.get("search") || "";
    }

    // Restore active category and sort buttons.
    updateActiveButtons();

    // Search form.
    if (searchForm) {
        searchForm.addEventListener("submit", function (event) {
            event.preventDefault();
            applyFilters();
        });
    }

    // Category filters.
    categoryButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            selectedCategory = button.dataset.category || "all";
            applyFilters();
        });
    });

    // Sort filters.
    sortButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            selectedSort = button.dataset.sort || "latest";
            applyFilters();
        });
    });

    // Update the visible question count.
    // The controller remains responsible for filtering and pagination.
    if (resultsCount) {
        const questionCards =
            questionList.querySelectorAll(".iq-question-card");

        const totalFromServer = Number(
            resultsCount.dataset.total || 0
        );

        if (totalFromServer > 0) {
            resultsCount.textContent =
                totalFromServer + " questions";
        } else {
            resultsCount.textContent =
                questionCards.length + " questions on this page";
        }
    }
});
