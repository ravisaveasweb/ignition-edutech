<link rel="stylesheet" href="{{ asset('css/question-details.css') }}?v=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<main class="iqd-page">
    <div class="iqd-container">

        {{-- Breadcrumb --}}
        <nav class="iqd-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <i class="bi bi-chevron-right"></i>
            <a href="{{ route('questions.index') }}">Student Q&amp;A</a>
            <i class="bi bi-chevron-right"></i>
            <span>Question Details</span>
        </nav>

        <div class="iqd-layout">

            {{-- Main Content --}}
            <section class="iqd-main">

                {{-- Question Details --}}
                <div class="iqd-question-card">

                    <div class="iqd-question-top">
                        <span class="iqd-category">
                            <i class="bi bi-mortarboard-fill"></i>
                            {{ $question->category }}
                        </span>

                        <span class="iqd-status">
                            <i class="bi bi-chat-square-text"></i>
                            {{ $question->status === 'open' ? 'Open for answers' : ucfirst($question->status) }}
                        </span>
                    </div>

                    <h1 class="iqd-question-title">
                        {{ $question->title }}
                    </h1>

                    <div class="iqd-question-meta">
                        <span>
                            <i class="bi bi-person-circle"></i>
                            {{ $question->author?->full_name ?? ($question->author?->name ?? ($question->user?->name ?? 'Student')) }}
                        </span>

                        <span>
                            <i class="bi bi-clock"></i>
                            {{ $question->created_at?->diffForHumans() }}
                        </span>

                        <span>
                            <i class="bi bi-eye"></i>
                            {{ $question->views ?? 0 }} views
                        </span>
                    </div>

                    <div class="iqd-question-description">
                        <p>{{ $question->description }}</p>
                    </div>

                    @if ($question->college_name)
                        <div class="iqd-question-tags">
                            <span>{{ $question->college_name }}</span>
                            <span>{{ $question->category }}</span>
                        </div>
                    @endif

                    {{-- Question Actions --}}
                    <div class="iqd-question-actions">
                        <button type="button" class="iqd-action-btn" id="iqdShareQuestion">
                            <i class="bi bi-share"></i>
                            Share question
                        </button>

                        <button type="button" class="iqd-action-btn iqd-report-btn" id="iqdReportQuestion">
                            <i class="bi bi-flag"></i>
                            Report
                        </button>
                    </div>

                </div>

                {{-- Answers Section --}}
                <section class="iqd-answers-section" id="iqdAnswers">

                    <div class="iqd-section-heading">
                        <div>
                            <span class="iqd-eyebrow">COMMUNITY RESPONSES</span>
                            <h2>{{ $question->answers_count ?? $question->answers->count() }} Answers</h2>
                        </div>

                        <select id="iqdAnswerSort" class="iqd-sort-select" aria-label="Sort answers">
                            <option value="helpful">Most helpful</option>
                            <option value="latest">Latest first</option>
                        </select>
                    </div>

                    <div class="iqd-answer-list" id="iqdAnswerList">

                        @forelse ($question->answers->sortByDesc('helpful_count')->values() as $answer)
                            @php
                                $answerAuthorName =
                                    $answer->author?->full_name ??
                                    ($answer->author?->name ?? ($answer->user?->name ?? 'Student'));
                            @endphp

                            <article class="iqd-answer-card" data-helpful="{{ $answer->helpful_count ?? 0 }}"
                                data-order="{{ $loop->index }}"
                                data-date="{{ $answer->created_at?->timestamp ?? 0 }}">

                                {{-- Answer Header --}}
                                <div class="iqd-answer-header">

                                    <div class="iqd-answer-avatar">
                                        {{ strtoupper(substr($answerAuthorName, 0, 1)) }}
                                    </div>

                                    <div class="iqd-answer-author">
                                        <h3>{{ $answerAuthorName }}</h3>
                                        <span>
                                            {{ $answer->created_at?->diffForHumans() }}
                                        </span>
                                    </div>

                                    @if ($answer->is_accepted)
                                        <span class="iqd-accepted">
                                            <i class="bi bi-patch-check-fill"></i>
                                            Accepted Answer
                                        </span>
                                    @endif

                                </div>

                                {{-- Answer Body --}}
                                <p class="iqd-answer-text">{{ $answer->body }}</p>

                                {{-- Answer Actions --}}
                                <div class="iqd-answer-actions">

                                    <button type="button" class="iqd-helpful-btn" data-helpful-button>
                                        <i class="bi bi-hand-thumbs-up"></i>
                                        Helpful
                                        <span data-helpful-count>
                                            {{ $answer->helpful_count ?? 0 }}
                                        </span>
                                    </button>

                                    <button type="button" class="iqd-answer-reply"
                                        data-reply-name="{{ $answerAuthorName }}">
                                        <i class="bi bi-reply"></i>
                                        Reply
                                    </button>

                                </div>

                            </article>

                        @empty

                            <p class="iqd-no-answers">
                                No answers yet. Be the first to answer this question!
                            </p>
                        @endforelse

                    </div>
                </section>

                {{-- Success Message --}}
                @if (session('success'))
                    <div class="iq-answer-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Answer Form --}}
                @if (session()->has('study_india_user_id') || session()->has('study_abroad_user_id'))

                    @if ($question->status === 'open')
                        <form action="{{ route('questions.answers.store', $question->slug) }}" method="POST"
                            class="iq-answer-form">
                            @csrf

                            <label for="iq-answer-body">
                                Write your answer
                            </label>

                            <textarea id="iq-answer-body" name="body" rows="5" maxlength="10000"
                                placeholder="Share your knowledge or experience..." required>{{ old('body') }}</textarea>

                            @error('body')
                                <p class="iq-answer-error">
                                    {{ $message }}
                                </p>
                            @enderror

                            <button type="submit">
                                Post Answer
                            </button>
                        </form>
                    @else
                        <p>
                            This question is closed and is no longer accepting answers.
                        </p>
                    @endif
                @else
                    @php
                        $isStudyAbroad = session()->has('study_abroad_user_id');

                        $loginRoute = $isStudyAbroad ? 'study-abroad.login' : 'study-india.login';

                        $registerRoute = $isStudyAbroad ? 'study-abroad.register' : 'study-india.register';
                    @endphp

                    <p>
                        Please
                        <a href="{{ route($loginRoute) }}">log in</a>
                        or
                        <a href="{{ route($registerRoute) }}">register</a>
                        to post an answer.
                    </p>

                @endif

            </section>

            {{-- Sidebar --}}
            <aside class="iqd-sidebar">

                {{-- Community Card --}}
                <div class="iqd-sidebar-card iqd-community-card">

                    <div class="iqd-sidebar-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h2>Learn Together</h2>

                    <p>
                        Get practical advice from students who have been through
                        the same college journey.
                    </p>

                    <a href="{{ route('questions.index') }}" class="iqd-sidebar-link">
                        Explore Questions
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

                {{-- Answering Tips --}}
                <div class="iqd-sidebar-card">

                    <h3>
                        <i class="bi bi-lightbulb"></i>
                        Answering Tips
                    </h3>

                    <ul class="iqd-tips-list">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Share accurate, relevant information.</span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Explain your advice clearly.</span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Share personal experience when useful.</span>
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Respect different opinions.</span>
                        </li>
                    </ul>

                </div>

                {{-- Community Guidelines --}}
                <div class="iqd-sidebar-card iqd-guidelines-card">

                    <h3>
                        <i class="bi bi-shield-check"></i>
                        Community Guidelines
                    </h3>

                    <p>
                        Keep the community helpful. Avoid spam, abusive language,
                        misleading claims and sharing private information.
                    </p>

                </div>

            </aside>

        </div>
    </div>
</main>

<script src="{{ asset('js/question-details.js') }}?v=1" defer></script>
