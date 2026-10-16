<x-frontend-header />
<x-study-india-header/>
<link rel="stylesheet" href="{{ asset('css/student-questions.css') }}?v=3">

<main class="iq-main">

    {{-- HERO SECTION --}}
    <section class="iq-hero">
        <div class="iq-hero-content">
            <span class="iq-eyebrow"><i class="bi bi-people-fill"></i> IGNITION STUDENT COMMUNITY</span>
            <h1>Ask. Answer. <span>Help Students.</span></h1>
            <p>Have a question about a college or university? Connect with students, share your experience and help
                each other make better decisions.</p>

            <form class="iq-search-form" id="iqSearchForm">
                <i class="bi bi-search"></i>
                <input type="search" id="iqSearchInput" placeholder="Search questions, colleges or universities..."
                    aria-label="Search questions">
                <button type="submit">Search</button>
            </form>

            <div class="iq-hero-bottom">
                <span><i class="bi bi-check-circle-fill"></i> Real student discussions</span>
                <span><i class="bi bi-chat-dots-fill"></i> Community answers</span>
            </div>
        </div>

        <div class="iq-hero-visual" aria-hidden="true">
            <div class="iq-visual-circle iq-circle-one"></div>
            <div class="iq-visual-circle iq-circle-two"></div>
            <div class="iq-visual-icon iq-icon-one"><i class="bi bi-mortarboard-fill"></i></div>
            <div class="iq-visual-icon iq-icon-two"><i class="bi bi-chat-square-text-fill"></i></div>
            <div class="iq-visual-icon iq-icon-three"><i class="bi bi-lightbulb-fill"></i></div>

            <div class="iq-visual-card">
                <div class="iq-visual-card-top">
                    <span class="iq-avatar">S</span>
                    <div><strong>Student Community</strong><small>Learn from each other</small></div>
                </div>
                <div class="iq-visual-question">Every question can help another student.</div>
                <div class="iq-visual-card-bottom">
                    <span><i class="bi bi-chat-left-text"></i> Ask</span>
                    <span><i class="bi bi-reply"></i> Answer</span>
                    <span><i class="bi bi-heart"></i> Help</span>
                </div>
            </div>
        </div>
    </section>

    {{-- TOPIC CATEGORIES --}}
    <section class="iq-section iq-categories-section">
        <div class="iq-section-heading">
            <div>
                <span class="iq-section-kicker">EXPLORE DISCUSSIONS</span>
                <h2>Browse by Topic</h2>
                <p>Find answers to the things students want to know.</p>
            </div>
        </div>

        <div class="iq-category-grid">
            <button type="button" class="iq-category-card iq-category-active" data-category="all" id="#iqQuestionList">
                <span class="iq-category-icon iq-color-orange"><i class="bi bi-grid-fill"></i></span>
                <span class="iq-category-name">All Questions</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
            <button type="button" class="iq-category-card" data-category="Admissions" id="#iqQuestionList">
                <span class="iq-category-icon iq-color-blue"><i class="bi bi-file-earmark-text-fill"></i></span>
                <span class="iq-category-name">Admissions</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
            <button type="button" class="iq-category-card" data-category="College Fees" id="#iqQuestionList">
                <span class="iq-category-icon iq-color-green"><i class="bi bi-wallet2"></i></span>
                <span class="iq-category-name">College Fees</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
            <button type="button" class="iq-category-card" data-category="Placements" id="#iqQuestionList">
                <span class="iq-category-icon iq-color-purple"><i class="bi bi-briefcase-fill"></i></span>
                <span class="iq-category-name">Placements</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
            <button type="button" class="iq-category-card" data-category="Campus Life" id="#iqQuestionList">
                <span class="iq-category-icon iq-color-pink"><i class="bi bi-buildings-fill"></i></span>
                <span class="iq-category-name">Campus Life</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
            <button type="button" class="iq-category-card" data-category="Faculty" id="#iqQuestionList">
                <span class="iq-category-icon iq-color-yellow"><i class="bi bi-person-workspace"></i></span>
                <span class="iq-category-name">Faculty</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
            <button type="button" class="iq-category-card" data-category="Hostel & Accommodation" id="#iqQuestionList" >
                <span class="iq-category-icon iq-color-teal"><i class="bi bi-house-door-fill"></i></span>
                <span class="iq-category-name">Hostel & Accommodation</span>
                <i class="bi bi-arrow-up-right iq-category-arrow"></i>
            </button>
        </div>
    </section>

    {{-- QUESTIONS AND SIDEBAR --}}
    <section class="iq-section iq-discussions-section">
        <div class="iq-discussions-layout">
            <div class="iq-question-column">
                <div class="iq-discussions-heading">
                    <div>
                        <span class="iq-section-kicker">STUDENT DISCUSSIONS</span>
                        <h2>Community Questions</h2>
                        <p>Explore questions and share what you know.</p>
                    </div>
                    <a href="{{ url('/questions/ask') }}" class="iq-ask-btn">
                        <i class="bi bi-plus-lg"></i> Ask a Question
                    </a>
                </div>

                <div class="iq-question-toolbar">
                    <div class="iq-question-tabs">
                        <button type="button" class="iq-sort-btn iq-sort-active" data-sort="latest">Latest</button>
                        <button type="button" class="iq-sort-btn" data-sort="unanswered">Unanswered</button>
                        <button type="button" class="iq-sort-btn" data-sort="most-answered">Most
                            Answered</button>
                    </div>
                    <span class="iq-results-count" id="iqResultsCount">6 questions</span>
                </div>

                <div class="iq-question-list" id="iqQuestionList">
                    @forelse ($questions as $question)
                        <article class="iq-question-card" data-category="{{ $question->category }}"
                            data-answers="{{ $question->answers_count }}"
                            data-date="{{ $question->created_at?->timestamp ?? 0 }}"
                            data-title="{{ strtolower($question->title) }}"
                            data-college="{{ strtolower($question->college_name ?? '') }}">
                            <div class="iq-question-card-top">
                                <span class="iq-question-category iq-tag-orange">
                                    {{ $question->category }}
                                </span>
                                <span class="iq-question-time">
                                    {{ $question->created_at?->diffForHumans() }}
                                </span>
                            </div>

                            <a href="{{ route('questions.show', $question->slug) }}" class="iq-question-title">
                                {{ $question->title }}
                            </a>

                            <p class="iq-question-description">
                                {{ \Illuminate\Support\Str::limit($question->description, 180) }}
                            </p>

                            <div class="iq-question-meta">
                                <span>
                                    <i class="bi bi-building"></i>
                                    {{ $question->college_name ?: 'College not specified' }}
                                </span>
                                <span>
                                    <i class="bi bi-person-circle"></i>
                                    {{ $question->user->name ?? 'Student' }}
                                </span>
                            </div>

                            <div class="iq-question-card-bottom">
                                <span class="iq-answer-count">
                                    <i class="bi bi-chat-left-text"></i>
                                    {{ $question->answers_count }}
                                    {{ $question->answers_count === 1 ? 'Answer' : 'Answers' }}
                                </span>
                                <a href="{{ route('questions.show', $question->slug) }}" class="iq-view-link">
                                    View Discussion <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="iq-empty-state">
                            <i class="bi bi-chat-square-text"></i>
                            <h3>No questions found</h3>
                            <p>Be the first to ask a question and help the student community.</p>
                            <a href="{{ route('questions.create') }}" class="iq-ask-btn">
                                <i class="bi bi-plus-lg"></i> Ask a Question
                            </a>
                        </div>
                    @endforelse
                </div>

                <div class="iq-database-pagination">
                    {{ $questions->links() }}
                </div>

                <div class="iq-pagination">
                    <button type="button" disabled aria-label="Previous page"><i
                            class="bi bi-chevron-left"></i></button>
                    <button type="button" class="iq-page-active" aria-current="page">1</button>
                    <button type="button" disabled>2</button>
                    <button type="button" disabled>3</button>
                    <span>...</span>
                    <button type="button" disabled>Next <i class="bi bi-chevron-right"></i></button>
                </div>
            </div>

            {{-- SIDEBAR --}}
            <aside class="iq-sidebar">
                <div class="iq-sidebar-card iq-sidebar-ask">
                    <span class="iq-sidebar-icon"><i class="bi bi-chat-square-dots-fill"></i></span>
                    <h3>Have a Question?</h3>
                    <p>Don't hesitate to ask. Someone in the community may have the answer you need.</p>
                    <a href="{{ url('/questions/ask') }}">Ask Your Question <i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="iq-sidebar-card iq-guidelines">
                    <h3><i class="bi bi-shield-check"></i> Community Guidelines</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Be respectful to everyone.</li>
                        <li><i class="bi bi-check-circle"></i> Share helpful and honest information.</li>
                        <li><i class="bi bi-check-circle"></i> Keep questions clear and relevant.</li>
                        <li><i class="bi bi-check-circle"></i> Respect others' privacy.</li>
                    </ul>
                </div>

                <div class="iq-sidebar-card iq-sidebar-help">
                    <div class="iq-help-icon"><i class="bi bi-heart-fill"></i></div>
                    <h3>Know the Answer?</h3>
                    <p>Your experience can make another student's college journey easier.</p>
                    <a href="#iqQuestionList">Help a Student <i class="bi bi-arrow-right"></i></a>
                </div>
            </aside>
        </div>
    </section>

    {{-- BOTTOM CTA --}}
    <section class="iq-bottom-cta">
        <div>
            <span class="iq-cta-kicker">YOUR EXPERIENCE MATTERS</span>
            <h2>Every answer can make a difference.</h2>
            <p>Join the conversation and help students make informed decisions about their future.</p>
        </div>
        <a href="{{ url('/questions/ask') }}" class="iq-cta-button">Join the Conversation <i
                class="bi bi-arrow-right"></i></a>
    </section>
</main>

<script src="{{ asset('js/student-questions.js') }}?v=3"></script>

<x-frontend-footer />
