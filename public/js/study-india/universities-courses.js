
// IGNITION UNIVERSITY DIRECTORY START
document.addEventListener('DOMContentLoaded', function () {
    const ignUnivDirectorySearchInput = document.getElementById('ign-univ-directory-search-input');
    const ignUnivDirectorySearchButton = document.getElementById('ign-univ-directory-search-button');
    const ignUnivDirectorySliders = document.querySelectorAll('[data-ign-univ-directory-slider]');

    // Scroll to the matching university.
    function ignUnivDirectoryScrollToMatch(card) {
        if (!card) return;

        const slider = card.closest('[data-ign-univ-directory-slider]');
        const track = card.closest('.ign-univ-directory-slider-track');

        if (!slider || !track) return;

        // Pause the slider animation.
        track.style.animationPlayState = 'paused';

        // Find the position of the matching card.
        const sliderRect = slider.getBoundingClientRect();
        const cardRect = card.getBoundingClientRect();
        const currentTransform = new DOMMatrixReadOnly(getComputedStyle(track).transform);
        const currentX = currentTransform.m41;

        // Calculate the horizontal movement needed.
        const cardLeft = card.offsetLeft;
        const sliderCenter = slider.clientWidth / 2;
        const cardCenter = cardLeft + card.offsetWidth / 2;
        const targetX = sliderCenter - cardCenter;

        // Stop the CSS animation and position the matching card.
        track.style.animation = 'none';
        track.style.transform = 'translateX(' + targetX + 'px)';

        // Remove old highlights and highlight the selected card.
        document.querySelectorAll('.ign-univ-directory-card.ign-univ-directory-search-match').forEach(function (item) {
            item.classList.remove('ign-univ-directory-search-match');
        });

        card.classList.add('ign-univ-directory-search-match');

        // Scroll vertically to the matching section.
        window.setTimeout(function () {
            const updatedRect = slider.getBoundingClientRect();
            const pagePosition = window.scrollY + updatedRect.top - (window.innerHeight / 2) + (updatedRect.height / 2);

            window.scrollTo({
                top: Math.max(0, pagePosition),
                behavior: 'smooth'
            });
        }, 100);
    }

    // UNIVERSITY SEARCH
    function ignUnivDirectoryPerformSearch() {
        if (!ignUnivDirectorySearchInput) return;

        const searchTerm = ignUnivDirectorySearchInput.value.trim().toLowerCase();
        let firstMatch = null;

        // Clear previous results and restore slider animation when search is cleared.
        if (!searchTerm) {
            document.querySelectorAll('.ign-univ-directory-card').forEach(function (card) {
                card.classList.remove('ign-univ-directory-search-hidden', 'ign-univ-directory-search-match');
            });

            ignUnivDirectorySliders.forEach(function (slider) {
                const track = slider.querySelector('.ign-univ-directory-slider-track');
                if (track) {
                    track.style.animation = '';
                    track.style.transform = '';
                    track.style.animationPlayState = '';
                }

                slider.classList.remove('ign-univ-directory-search-empty', 'ign-univ-directory-search-active');

                const message = slider.querySelector('.ign-univ-directory-no-results');
                if (message) message.remove();
            });

            return;
        }

        ignUnivDirectorySliders.forEach(function (slider) {
            const track = slider.querySelector('.ign-univ-directory-slider-track');
            if (!track) return;

            const cards = track.querySelectorAll('.ign-univ-directory-card');
            let visibleCount = 0;

            cards.forEach(function (card) {
                const cardText = card.textContent.toLowerCase();
                const matched = cardText.includes(searchTerm);

                card.classList.toggle('ign-univ-directory-search-hidden', !matched);
                card.classList.remove('ign-univ-directory-search-match');

                if (matched) {
                    visibleCount++;

                    if (!firstMatch) firstMatch = card;
                }
            });

            slider.classList.toggle('ign-univ-directory-search-empty', visibleCount === 0);
            slider.classList.add('ign-univ-directory-search-active');

            let emptyMessage = slider.querySelector('.ign-univ-directory-no-results');

            if (visibleCount === 0) {
                if (!emptyMessage) {
                    emptyMessage = document.createElement('div');
                    emptyMessage.className = 'ign-univ-directory-no-results';
                    emptyMessage.textContent = 'No matching university found in this section.';
                    slider.appendChild(emptyMessage);
                }
            } else if (emptyMessage) {
                emptyMessage.remove();
            }

            track.style.animationPlayState = 'paused';
        });

        // Scroll to the first matching university.
        if (firstMatch) {
            ignUnivDirectoryScrollToMatch(firstMatch);
        }
    }

    // Search while typing.
    if (ignUnivDirectorySearchInput) {
        ignUnivDirectorySearchInput.addEventListener('input', ignUnivDirectoryPerformSearch);

        ignUnivDirectorySearchInput.addEventListener('keydown', function (event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                ignUnivDirectoryPerformSearch();
            }
        });
    }

    // Search button.
    if (ignUnivDirectorySearchButton) {
        ignUnivDirectorySearchButton.addEventListener('click', ignUnivDirectoryPerformSearch);
    }

    // Pause sliders during touch interaction.
    ignUnivDirectorySliders.forEach(function (slider) {
        const track = slider.querySelector('.ign-univ-directory-slider-track');
        if (!track) return;

        slider.addEventListener('touchstart', function () {
            track.style.animationPlayState = 'paused';
        }, { passive: true });

        slider.addEventListener('touchend', function () {
            window.setTimeout(function () {
                if (!ignUnivDirectorySearchInput.value.trim()) {
                    track.style.animationPlayState = '';
                }
            }, 1200);
        }, { passive: true });

        slider.addEventListener('touchcancel', function () {
            if (!ignUnivDirectorySearchInput.value.trim()) {
                track.style.animationPlayState = '';
            }
        }, { passive: true });
    });
});
// IGNITION UNIVERSITY DIRECTORY END
