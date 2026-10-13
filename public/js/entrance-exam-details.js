
document.addEventListener('DOMContentLoaded', function () {
    const page = document.querySelector('.ee-details-page');
    if (!page) return;

    const sidebarLinks = page.querySelectorAll('.ee-details-sidebar a[href^="#"]');
    const sections = Array.from(sidebarLinks)
        .map(link => page.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    sidebarLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            const target = page.querySelector(this.getAttribute('href'));
            if (!target) return;

            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            history.replaceState(null, '', this.getAttribute('href'));
        });
    });

    function updateActiveSection() {
        let activeSection = null;

        sections.forEach(section => {
            if (section.getBoundingClientRect().top <= 150) {
                activeSection = section;
            }
        });

        if (!activeSection) activeSection = sections[0];
        if (!activeSection) return;

        sidebarLinks.forEach(link => {
            const isActive = link.getAttribute('href') === `#${activeSection.id}`;
            link.classList.toggle('ee-nav-active', isActive);

            if (isActive) {
                link.setAttribute('aria-current', 'location');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    }

    window.addEventListener('scroll', updateActiveSection, { passive: true });
    updateActiveSection();

    const faqItems = page.querySelectorAll('#ee-faq details');

    faqItems.forEach(item => {
        item.addEventListener('toggle', function () {
            if (!this.open) return;

            faqItems.forEach(otherItem => {
                if (otherItem !== this) otherItem.open = false;
            });
        });
    });
});
