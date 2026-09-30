
// Codes for Dropdown and Serach Functionality

document.addEventListener('DOMContentLoaded', function () {

    const drawer = document.getElementById('courseList');
    const explore = document.querySelector('.explore-stream-menu');
    const trigger = document.querySelector('.explore-stream-trigger');
    const subpages = document.querySelectorAll('.menu-page.sub-page');
    const search = document.getElementById('courseSearch');

    // Explore Stream
    if (explore && trigger && drawer) {

        trigger.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();
            explore.classList.toggle('explore-stream-open');
        });

        explore.addEventListener('mouseenter', () =>
            explore.classList.add('explore-stream-open')
        );

        explore.addEventListener('mouseleave', () => {
            explore.classList.remove('explore-stream-open');
            drawer.classList.remove('slide-active');
        });

        document.addEventListener('click', e => {
            if (!explore.contains(e.target)) {
                explore.classList.remove('explore-stream-open');
                drawer.classList.remove('slide-active');
            }
        });
    }

    // Open Subpage
    document.querySelectorAll('.open-subpage').forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();

            const page = document.getElementById(
                btn.getAttribute('data-target')
            );

            if (page) {
                subpages.forEach(p => p.classList.remove('active'));
                page.classList.add('active');
                drawer.classList.add('slide-active');
                drawer.scrollTop = 0;
            }
        });
    });

    // Back to Main
    document.querySelectorAll('.back-to-main').forEach(btn => {
        btn.addEventListener('click', () => {
            drawer.classList.remove('slide-active');
            drawer.scrollTop = 0;
        });
    });

    // Search
    if (search) {
        search.addEventListener('keyup', function () {

            const value = this.value.toLowerCase().trim();

            document.querySelectorAll(
                '.tp-submenu-drawer .drawer-list li'
            ).forEach(item => {

                if (
                    item.classList.contains('ignition-search-item') ||
                    item.classList.contains('submenu-header')
                ) return;

                item.style.display =
                    item.textContent.toLowerCase().includes(value) ?
                        '' :
                        'none';
            });
        });
    }

});



// Study Abroad Dropdown


const studyMenu = document.querySelector('.study-abroad-menu');
const studyTrigger = document.querySelector('.study-abroad-trigger');
const studyDrawer = document.getElementById('studyAbroadList');

if (studyMenu && studyTrigger && studyDrawer) {

    // Open / close dropdown
    studyTrigger.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        studyMenu.classList.toggle('study-abroad-open');
    });

    // Open dropdown on hover
    studyMenu.addEventListener('mouseenter', function () {
        studyMenu.classList.add('study-abroad-open');
    });

    studyMenu.addEventListener('mouseleave', function () {
        studyMenu.classList.remove('study-abroad-open');
    });

    // Close when clicking outside
    document.addEventListener('click', function (e) {
        if (!studyMenu.contains(e.target)) {
            studyMenu.classList.remove('study-abroad-open');
        }
    });
}


// Open Study Abroad Subpage
document.querySelectorAll('.study-open-page').forEach(function (btn) {

    btn.addEventListener('click', function (e) {

        e.preventDefault();
        e.stopPropagation();

        const target = btn.getAttribute('data-target');
        const targetPage = document.getElementById(target);

        if (!targetPage) {
            console.log('Study Abroad page not found:', target);
            return;
        }

        // Hide all Study Abroad pages
        document.querySelectorAll('#studyAbroadList .study-page').forEach(function (page) {
            page.classList.remove('active');
        });

        // Show selected page
        targetPage.classList.add('active');

        // Keep dropdown open
        if (studyMenu) {
            studyMenu.classList.add('study-abroad-open');
        }

        // Scroll to top
        targetPage.scrollTop = 0;
    });

});


// Back to Countries
document.querySelectorAll('.study-back-countries').forEach(function (btn) {

    btn.addEventListener('click', function (e) {

        e.preventDefault();
        e.stopPropagation();

        document.querySelectorAll('#studyAbroadList .study-page').forEach(function (page) {
            page.classList.remove('active');
        });

        const countriesPage = document.getElementById('studyAbroadCountries');

        if (countriesPage) {
            countriesPage.classList.add('active');
            countriesPage.scrollTop = 0;
        }

    });

});


// Back to Country
document.querySelectorAll('.study-back-country').forEach(function (btn) {

    btn.addEventListener('click', function (e) {

        e.preventDefault();
        e.stopPropagation();

        const target = btn.getAttribute('data-target');
        const targetPage = document.getElementById(target);

        if (!targetPage) {
            console.log('Country page not found:', target);
            return;
        }

        document.querySelectorAll('#studyAbroadList .study-page').forEach(function (page) {
            page.classList.remove('active');
        });

        targetPage.classList.add('active');
        targetPage.scrollTop = 0;

    });

});

// Study Abroad Dropdown End 

