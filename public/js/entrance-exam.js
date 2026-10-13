

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    const exams = Array.isArray(window.entranceExamData) ? window.entranceExamData : [];

    const examGrid = document.getElementById('ignEeExamGrid');
    const popularGrid = document.getElementById('ignEePopularGrid');
    const directorySearch = document.getElementById('ignEeDirectorySearch');
    const categoryFilter = document.getElementById('ignEeCategoryFilter');
    const qualificationFilter = document.getElementById('ignEeQualificationFilter');
    const resultsCount = document.getElementById('ignEeResultsCount');
    const emptyState = document.getElementById('ignEeEmptyState');
    const searchForm = document.getElementById('ignEeSearchForm');
    const heroSearch = document.getElementById('ignEeSearchInput');
    const resetButton = document.getElementById('ignEeResetFilters');
    const emptyResetButton = document.getElementById('ignEeEmptyReset');
    const examList = document.getElementById('ign-ee-exam-list');

    if (!examGrid || !popularGrid || !directorySearch || !categoryFilter || !qualificationFilter) {
        console.error('Entrance exam page: Required HTML elements are missing.');
        return;
    }
   

    if (!exams.length) {
        console.error('Entrance exam data is empty. Check window.entranceExamData.');
        examGrid.replaceChildren();
        popularGrid.replaceChildren();
        if (resultsCount) resultsCount.textContent = 'No exam data is available.';
        if (emptyState) emptyState.hidden = false;
        examGrid.hidden = true;
        return;
    }

    const normalize = value => String(value ?? '').trim().toLowerCase();

    function text(value, fallback = '') {
        if (value === null || value === undefined) return fallback;
        const result = String(value).trim();
        return result || fallback;
    }


    function matchesCategory(exam, selected) {
    if (!selected) return true;

    const category = normalize(exam.category);
    const filter = normalize(selected);

    const aliases = {
        engineering: ['engineering'],
        medical: ['medical', 'medicine'],
        management: ['management', 'mba'],
        law: ['law'],
        design: ['design', 'design & fashion', 'fashion'],
        architecture: ['architecture'],
        university: ['university', 'university entrance', 'university admissions'],
        'university entrance': ['university', 'university entrance', 'university admissions'],
        government: ['government', 'government & defence', 'government & defense', 'defence', 'defense']
    };

    return (aliases[filter] || [filter]).includes(category);
}

  function matchesQualification(exam, selected) {
    if (!selected) return true;

    const qualification = normalize(exam.qualification);
    const filter = normalize(selected);

    const aliases = {
        'after 12th': ['after 12th', 'after class 12', 'class 12', '12th', '10+2'],
        graduation: ['graduation', 'after graduation', 'graduate', 'graduated'],
        postgraduation: ['postgraduation', 'post-graduation', 'post graduation', 'postgraduate', 'after postgraduation']
    };

    const allowedValues = aliases[filter] || [filter];

    return allowedValues.includes(qualification);
}

    function createExamCard(exam) {
        const card = document.createElement('article');
        card.className = 'ign-ee-exam-card';

        const top = document.createElement('div');
        top.className = 'ign-ee-exam-card-top';

        const icon = document.createElement('span');
        icon.className = 'ign-ee-exam-card-icon';

        const iconElement = document.createElement('i');
        const iconClass = text(exam.icon, 'bi-mortarboard')
            .split(/\s+/)
            .filter(className => /^[a-zA-Z0-9_-]+$/.test(className));

        iconElement.classList.add('bi');
        iconClass.forEach(className => {
            if (className !== 'bi') iconElement.classList.add(className);
        });
        iconElement.setAttribute('aria-hidden', 'true');
        icon.appendChild(iconElement);

        const tag = document.createElement('span');
        tag.className = 'ign-ee-exam-badge';
        tag.textContent = text(exam.category, 'Entrance Exam');

        top.append(icon, tag);

        const title = document.createElement('h3');
        title.textContent = text(exam.name, 'Entrance Exam');

        const shortName = text(exam.shortName, text(exam.full_name));
        if (shortName && normalize(shortName) !== normalize(exam.name)) {
            const shortNameElement = document.createElement('span');
            shortNameElement.className = 'ign-ee-exam-short-name';
            shortNameElement.textContent = shortName;
            title.appendChild(shortNameElement);
        }

        const description = document.createElement('p');
        description.textContent = text(
            exam.card_description,
            text(exam.description, 'Explore exam details and eligibility requirements.')
        );

        const meta = document.createElement('div');
        meta.className = 'ign-ee-exam-meta';

        const qualification = document.createElement('span');
        const qualificationIcon = document.createElement('i');
        qualificationIcon.className = 'bi bi-mortarboard';
        qualificationIcon.setAttribute('aria-hidden', 'true');
        qualification.append(
            qualificationIcon,
            document.createTextNode(' ' + text(exam.qualification, 'Check eligibility'))
        );

        const category = document.createElement('span');
        const categoryIcon = document.createElement('i');
        categoryIcon.className = 'bi bi-bookmark';
        categoryIcon.setAttribute('aria-hidden', 'true');
        category.append(
            categoryIcon,
            document.createTextNode(' ' + text(exam.category, 'Entrance Exam'))
        );

        meta.append(qualification, category);

        const link = document.createElement('a');
        link.className = 'ign-ee-exam-link';

        const slug = text(exam.slug);
        link.href = slug
            ? '/entrance-exams-details/' + encodeURIComponent(slug)
            : '#ign-ee-exam-list';

        link.setAttribute('aria-label', 'Explore ' + text(exam.name, 'exam') + ' details');
        link.append(document.createTextNode('Explore exam details '));

        const arrow = document.createElement('i');
        arrow.className = 'bi bi-arrow-right';
        arrow.setAttribute('aria-hidden', 'true');
        link.appendChild(arrow);

        card.append(top, title, description, meta, link);

        return card;
    }

    function renderPopularExams() {
        popularGrid.replaceChildren();

        const popularExams = exams.filter(exam =>
            [true, 1, '1', 'true'].includes(exam.popular)
        );

        popularExams.slice(0, 6).forEach(exam => {
            popularGrid.appendChild(createExamCard(exam));
        });

        if (!popularExams.length) {
            const message = document.createElement('p');
            message.className = 'ign-ee-empty-popular';
            message.textContent = 'Popular exams will be displayed here soon.';
            popularGrid.appendChild(message);
        }
    }

    function renderExams() {
        const query = normalize(directorySearch.value);
        const selectedCategory = categoryFilter.value;
        const selectedQualification = qualificationFilter.value;

        const filtered = exams.filter(exam => {
            const searchableText = [
                exam.name,
                exam.shortName,
                exam.full_name,
                exam.slug,
                exam.category,
                exam.qualification,
                exam.card_description,
                exam.description,
                exam.conducting_authority,
                exam.level
            ].map(normalize).join(' ');

            return (!query || searchableText.includes(query)) &&
                matchesCategory(exam, selectedCategory) &&
                matchesQualification(exam, selectedQualification);
        });

        examGrid.replaceChildren();

        filtered.forEach(exam => {
            examGrid.appendChild(createExamCard(exam));
        });

        if (resultsCount) {
            resultsCount.textContent = 'Showing ' + filtered.length + ' of ' + exams.length + ' exams';
        }

        if (emptyState) {
            emptyState.hidden = filtered.length > 0;
        }

        examGrid.hidden = filtered.length === 0;
    }

    function scrollToDirectory() {
        if (examList) {
            examList.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    function resetFilters() {
        directorySearch.value = '';
        if (heroSearch) heroSearch.value = '';
        categoryFilter.value = '';
        qualificationFilter.value = '';
        renderExams();
    }

    directorySearch.addEventListener('input', renderExams);
    categoryFilter.addEventListener('change', renderExams);
    qualificationFilter.addEventListener('change', renderExams);

    if (resetButton) {
        resetButton.addEventListener('click', resetFilters);
    }

    if (emptyResetButton) {
        emptyResetButton.addEventListener('click', resetFilters);
    }

    if (searchForm && heroSearch) {
        searchForm.addEventListener('submit', function (event) {
            event.preventDefault();
            directorySearch.value = heroSearch.value.trim();
            renderExams();
            scrollToDirectory();
        });
    }

    if (heroSearch) {
        heroSearch.addEventListener('input', function () {
            directorySearch.value = heroSearch.value;
            renderExams();
        });
    }

    document.querySelectorAll('.ign-ee-page .ign-ee-popular-searches [data-search]').forEach(button => {
        button.addEventListener('click', function () {
            const searchTerm = button.dataset.search || '';

            if (heroSearch) heroSearch.value = searchTerm;
            directorySearch.value = searchTerm;

            renderExams();
            scrollToDirectory();
        });
    });

    document.querySelectorAll('.ign-ee-page .ign-ee-category-card[data-category]').forEach(button => {
        button.addEventListener('click', function () {
            const category = button.dataset.category || '';

            const matchingOption = Array.from(categoryFilter.options).find(option =>
                normalize(option.value) === normalize(category)
            );

            categoryFilter.value = matchingOption ? matchingOption.value : '';
            renderExams();
            scrollToDirectory();
        });
    });

    renderPopularExams();
    renderExams();
});
