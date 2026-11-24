
(function () {
    "use strict";

    function initIgnExamDirectory() {
        const ignExamDirectorySearchButton = document.getElementById("ignExamDirectorySearchButton");
        const ignExamDirectorySearch = document.getElementById("ignExamDirectorySearch");
        const ignExamDirectorySearchClear = document.getElementById("ignExamDirectorySearchClear");
        const ignExamDirectoryFilter = document.getElementById("ignExamDirectoryFilter");
        const ignExamDirectoryGrid = document.getElementById("ignExamDirectoryGrid");
        const ignExamDirectoryCount = document.getElementById("ignExamDirectoryCount");
        const ignExamDirectoryNoResults = document.getElementById("ignExamDirectoryNoResults");
        const ignExamDirectoryReset = document.getElementById("ignExamDirectoryReset");

        if (!ignExamDirectoryGrid || !ignExamDirectoryFilter) return;

        const ignExamDirectoryCards = Array.from(
            ignExamDirectoryGrid.querySelectorAll(".ign-exam-directory-card")
        );

        const ignExamDirectoryButtons = Array.from(
            ignExamDirectoryFilter.querySelectorAll(".ign-exam-directory-filter-button")
        );

        let ignExamDirectoryActiveCategory = "all";
        let ignExamDirectoryScrollTimeout = null;

        function filterIgnExamDirectory(shouldScroll = false) {
            const searchValue = ignExamDirectorySearch ?
                ignExamDirectorySearch.value.trim().toLowerCase() : "";

            let visibleCount = 0;
            let firstMatchingCard = null;

            ignExamDirectoryCards.forEach(function (card) {
                const category = card.dataset.category || "";
                const examName = (card.dataset.examName || "").toLowerCase();
                const cardText = card.textContent.toLowerCase();

                const matchesCategory =
                    ignExamDirectoryActiveCategory === "all" ||
                    category === ignExamDirectoryActiveCategory;

                const matchesSearch = !searchValue ||
                    examName.includes(searchValue) ||
                    cardText.includes(searchValue);

                const isVisible = matchesCategory && matchesSearch;

                card.hidden = !isVisible;

                if (isVisible) {
                    visibleCount++;
                    if (!firstMatchingCard) firstMatchingCard = card;
                }
            });

            if (ignExamDirectoryCount)
                ignExamDirectoryCount.textContent = visibleCount;

            if (ignExamDirectoryNoResults)
                ignExamDirectoryNoResults.hidden = visibleCount > 0;

            ignExamDirectoryGrid.hidden = visibleCount === 0;

            if (ignExamDirectorySearchClear)
                ignExamDirectorySearchClear.hidden = !searchValue;

            // Auto scroll to matching exam or no-results message
            if (shouldScroll && searchValue) {
                clearTimeout(ignExamDirectoryScrollTimeout);

                ignExamDirectoryScrollTimeout = setTimeout(function () {
                    const target = firstMatchingCard || ignExamDirectoryNoResults;

                    if (target) {
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        });
                    }
                }, 300);
            }
        }

        function resetIgnExamDirectory() {
            if (ignExamDirectorySearch)
                ignExamDirectorySearch.value = "";

            ignExamDirectoryActiveCategory = "all";

            ignExamDirectoryButtons.forEach(function (button) {
                const isActive = button.dataset.category === "all";
                button.classList.toggle("active", isActive);
                button.setAttribute("aria-pressed", String(isActive));
            });

            filterIgnExamDirectory();
        }

        // Category filters
        ignExamDirectoryButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                ignExamDirectoryActiveCategory = button.dataset.category || "all";

                ignExamDirectoryButtons.forEach(function (item) {
                    const isActive = item === button;
                    item.classList.toggle("active", isActive);
                    item.setAttribute("aria-pressed", String(isActive));
                });

                filterIgnExamDirectory();
            });
        });

        // Search exams
        if (ignExamDirectorySearch) {
            ignExamDirectorySearch.addEventListener("input", function () {
                filterIgnExamDirectory(false);
            });

            // Search button
            if (ignExamDirectorySearchButton) {
                ignExamDirectorySearchButton.addEventListener("click", function () {
                    filterIgnExamDirectory(true);
                });
            }

            ignExamDirectorySearch.addEventListener("keydown", function (event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    filterIgnExamDirectory(true);
                }
            });
        }

        // Clear search
        if (ignExamDirectorySearchClear) {
            ignExamDirectorySearchClear.addEventListener("click", function () {
                if (ignExamDirectorySearch) {
                    ignExamDirectorySearch.value = "";
                    ignExamDirectorySearch.focus();
                }

                filterIgnExamDirectory();
            });
        }

        // Reset filters
        if (ignExamDirectoryReset) {
            ignExamDirectoryReset.addEventListener("click", resetIgnExamDirectory);
        }

        // Category links
        document.querySelectorAll("[data-category-link]").forEach(function (button) {
            button.addEventListener("click", function () {
                const category = button.dataset.categoryLink;
                const targetButton = ignExamDirectoryButtons.find(function (item) {
                    return item.dataset.category === category;
                });

                if (targetButton) {
                    targetButton.click();
                    ignExamDirectoryGrid.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });

        filterIgnExamDirectory();
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initIgnExamDirectory, {
            once: true
        });
    } else {
        initIgnExamDirectory();
    }
})();
