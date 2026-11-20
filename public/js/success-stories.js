(function () {
    "use strict";

    /* Initialize Success Stories Page */
    function ignSsInitPage() {
        const ignSsPage = document.querySelector(".ign-ss-page");

        if (!ignSsPage || ignSsPage.dataset.ignSsInitialized === "true") {
            return;
        }

        ignSsPage.dataset.ignSsInitialized = "true";

        ignSsInitCounters(ignSsPage);
        ignSsInitStoryFilters(ignSsPage);
    }

    /* Statistics Counter Animation */
    function ignSsInitCounters(ignSsPage) {
        const ignSsNumbers = ignSsPage.querySelectorAll(".ign-ss-stat-number");

        if (!ignSsNumbers.length) return;

        const ignSsAnimate = (ignSsElement) => {
            if (ignSsElement.dataset.ignSsAnimated === "true") return;

            ignSsElement.dataset.ignSsAnimated = "true";

            const ignSsText = ignSsElement.textContent.trim();
            const ignSsTarget = parseInt(
                ignSsText.replace(/,/g, "").replace(/\D/g, ""),
                10,
            );

            if (!Number.isFinite(ignSsTarget)) return;

            const ignSsSuffix = ignSsText.replace(/[\d,\s]/g, "");
            const ignSsStart = performance.now();
            const ignSsDuration = 1600;

            const ignSsUpdate = (ignSsTime) => {
                const ignSsProgress = Math.min(
                    (ignSsTime - ignSsStart) / ignSsDuration,
                    1,
                );

                const ignSsEase = 1 - Math.pow(1 - ignSsProgress, 3);
                const ignSsValue = Math.floor(ignSsTarget * ignSsEase);

                ignSsElement.textContent =
                    ignSsValue.toLocaleString("en-IN") + ignSsSuffix;

                if (ignSsProgress < 1) {
                    requestAnimationFrame(ignSsUpdate);
                }
            };

            requestAnimationFrame(ignSsUpdate);
        };

        if ("IntersectionObserver" in window) {
            const ignSsObserver = new IntersectionObserver(
                (ignSsEntries, ignSsCurrentObserver) => {
                    ignSsEntries.forEach((ignSsEntry) => {
                        if (!ignSsEntry.isIntersecting) return;

                        ignSsAnimate(ignSsEntry.target);
                        ignSsCurrentObserver.unobserve(ignSsEntry.target);
                    });
                },
                { threshold: 0.4 },
            );

            ignSsNumbers.forEach((ignSsElement) => {
                ignSsObserver.observe(ignSsElement);
            });
        } else {
            ignSsNumbers.forEach(ignSsAnimate);
        }
    }

    /* Story Search, Category Filter and View All */
    function ignSsInitStoryFilters(ignSsPage) {
        const ignSsSearch = ignSsPage.querySelector("#ign-ss-story-search");
        const ignSsCategory = ignSsPage.querySelector(
            "#ign-ss-category-filter",
        );
        const ignSsGrid = ignSsPage.querySelector("#ign-ss-story-grid");
        const ignSsNoResults = ignSsPage.querySelector("#ign-ss-no-results");
        const ignSsButton = ignSsPage.querySelector("#ign-ss-view-all-btn");
        const ignSsButtonWrap = ignSsPage.querySelector(
            "#ign-ss-view-all-wrap",
        );

        if (!ignSsGrid) return;

        const ignSsCards = Array.from(
            ignSsGrid.querySelectorAll(".ign-ss-story-card"),
        );

        if (!ignSsCards.length) return;

        const ignSsInitialLimit = 3;
        let ignSsShowAll = false;

        /* Filter Stories */
        function ignSsFilterStories() {
            const ignSsSearchValue = ignSsSearch
                ? ignSsSearch.value.trim().toLowerCase()
                : "";

            const ignSsCategoryValue = ignSsCategory
                ? ignSsCategory.value.trim().toLowerCase()
                : "all";

            let ignSsVisibleCount = 0;

            ignSsCards.forEach((ignSsCard, ignSsIndex) => {
                const ignSsCardText = ignSsCard.textContent
                    .toLowerCase()
                    .replace(/\s+/g, " ")
                    .trim();

                const ignSsCardCategory = (ignSsCard.dataset.category || "")
                    .trim()
                    .toLowerCase();

                const ignSsMatchSearch =
                    !ignSsSearchValue ||
                    ignSsCardText.includes(ignSsSearchValue);

                const ignSsMatchCategory =
                    ignSsCategoryValue === "all" ||
                    ignSsCardCategory === ignSsCategoryValue;

                const ignSsMatchFilter = ignSsMatchSearch && ignSsMatchCategory;

                const ignSsWithinLimit =
                    ignSsShowAll || ignSsIndex < ignSsInitialLimit;

                const ignSsShouldShow = ignSsMatchFilter && ignSsWithinLimit;

                ignSsCard.hidden = !ignSsShouldShow;

                if (ignSsShouldShow) {
                    ignSsVisibleCount++;
                }
            });

            /* No Results Message */
            if (ignSsNoResults) {
                ignSsNoResults.hidden = ignSsVisibleCount > 0;
            }

            /* View All and Show Less Button */
            if (ignSsButtonWrap) {
                const ignSsHasMoreStories =
                    ignSsCards.length > ignSsInitialLimit;

                const ignSsHasMatchingExtraStories = ignSsCards.some(
                    (ignSsCard, ignSsIndex) => {
                        if (ignSsIndex < ignSsInitialLimit) return false;

                        const ignSsText = ignSsCard.textContent
                            .toLowerCase()
                            .replace(/\s+/g, " ")
                            .trim();

                        const ignSsCardCategory = (
                            ignSsCard.dataset.category || ""
                        )
                            .trim()
                            .toLowerCase();

                        const ignSsSearchMatch =
                            !ignSsSearchValue ||
                            ignSsText.includes(ignSsSearchValue);

                        const ignSsCategoryMatch =
                            ignSsCategoryValue === "all" ||
                            ignSsCardCategory === ignSsCategoryValue;

                        return ignSsSearchMatch && ignSsCategoryMatch;
                    },
                );

                ignSsButtonWrap.hidden =
                    !ignSsHasMoreStories ||
                    (!ignSsShowAll && !ignSsHasMatchingExtraStories);

                if (ignSsButton) {
                    ignSsButton.innerHTML = ignSsShowAll
                        ? 'Show Less <i class="bi bi-arrow-up"></i>'
                        : 'View All Stories <i class="bi bi-arrow-right"></i>';
                }
            }
        }

        /* Search Event */
        ignSsSearch?.addEventListener("input", ignSsFilterStories);

        /* Category Filter Event */
        ignSsCategory?.addEventListener("change", ignSsFilterStories);

        /* View All / Show Less Event */
        ignSsButton?.addEventListener("click", function () {
            ignSsShowAll = !ignSsShowAll;

            ignSsFilterStories();

            if (!ignSsShowAll) {
                ignSsGrid.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });

        /* Initial Display */
        ignSsFilterStories();
    }

    /* DOM Ready */
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", ignSsInitPage, {
            once: true,
        });
    } else {
        ignSsInitPage();
    }
})();
