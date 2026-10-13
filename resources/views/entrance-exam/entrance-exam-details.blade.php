
<x-frontend-header />

<main class="ee-details-page">
    <section class="ee-details-hero">
        <div class="ee-details-container">
            <nav class="ee-breadcrumb">
                <a href="/">Home</a>
                <span>/</span>
                <a href="{{ route('entrance-exams.index') }}">Entrance Exams</a>
                <span>/</span>
                <span>{{ data_get($exam, 'short_name', 'Exam Details') }}</span>
            </nav>

            <div class="ee-hero-content">
                <div class="ee-exam-icon">
                    <i class="bi bi-mortarboard-fill"></i>
                </div>
                <div class="ee-exam-intro">
                    <span class="ee-category">{{ data_get($exam, 'category', 'Entrance Examination') }}</span>
                    <h1>{{ data_get($exam, 'exam_name', 'Entrance Exam') }}</h1>
                    <p>{{ data_get($exam, 'description', 'Explore eligibility, exam pattern, syllabus, application details and preparation resources.') }}</p>
                    <div class="ee-hero-actions">
                        <a class="ee-btn ee-btn-primary" href="#ee-application">Application Details <i class="bi bi-arrow-right"></i></a>
                        @if (data_get($exam, 'official_website'))
                            <a class="ee-btn ee-btn-outline" href="{{ data_get($exam, 'official_website') }}" target="_blank" rel="noopener noreferrer">Official Website <i class="bi bi-box-arrow-up-right"></i></a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="ee-facts-grid">
                <div class="ee-fact"><i class="bi bi-building"></i><span>Conducting Body</span><strong>{{ data_get($exam, 'conducting_body', 'Not available') }}</strong></div>
                <div class="ee-fact"><i class="bi bi-laptop"></i><span>Exam Mode</span><strong>{{ data_get($exam, 'exam_mode', 'Check official notification') }}</strong></div>
                <div class="ee-fact"><i class="bi bi-clock"></i><span>Duration</span><strong>{{ data_get($exam, 'duration', 'Not announced') }}</strong></div>
                <div class="ee-fact"><i class="bi bi-calendar-event"></i><span>Exam Date</span><strong>{{ data_get($exam, 'exam_date', 'Not announced yet') }}</strong></div>
            </div>
        </div>
    </section>

    <div class="ee-details-container ee-details-layout">
        <aside class="ee-details-sidebar">
            <h3>On this page</h3>
            <a href="#ee-overview">Overview</a>
            <a href="#ee-dates">Important Dates</a>
            <a href="#ee-eligibility">Eligibility</a>
            <a href="#ee-pattern">Exam Pattern</a>
            <a href="#ee-syllabus">Syllabus</a>
            <a href="#ee-application">Application Process</a>
            <a href="#ee-resources">Preparation Resources</a>
            <a href="#ee-faq">FAQs</a>
        </aside>

        <div class="ee-details-content">
            <section class="ee-content-card" id="ee-overview">
                <h2>About {{ data_get($exam, 'short_name', 'the Exam') }}</h2>
                <p>{{ data_get($exam, 'overview', data_get($exam, 'description', 'Detailed information will be updated when available.')) }}</p>
                <div class="ee-info-row"><span>Full Exam Name</span><strong>{{ data_get($exam, 'exam_name', 'Not available') }}</strong></div>
                <div class="ee-info-row"><span>Exam Level</span><strong>{{ data_get($exam, 'exam_level', 'Not specified') }}</strong></div>
                <div class="ee-info-row"><span>Qualification</span><strong>{{ data_get($exam, 'qualification', 'Check official eligibility criteria') }}</strong></div>
                <div class="ee-info-row"><span>Course</span><strong>{{ data_get($exam, 'course_name', 'Not specified') }}</strong></div>
            </section>

            <section class="ee-content-card" id="ee-dates">
                <h2>Important Dates</h2>
                <div class="ee-info-row"><span>Application Start</span><strong>{{ data_get($exam, 'application_start_date', 'Not announced yet') }}</strong></div>
                <div class="ee-info-row"><span>Application Deadline</span><strong>{{ data_get($exam, 'application_end_date', 'Not announced yet') }}</strong></div>
                <div class="ee-info-row"><span>Admit Card</span><strong>{{ data_get($exam, 'admit_card_date', 'Not announced yet') }}</strong></div>
                <div class="ee-info-row"><span>Result</span><strong>{{ data_get($exam, 'result_date', 'Not announced yet') }}</strong></div>
                <p class="ee-note">Confirm dates through the official examination website before applying.</p>
            </section>

          
<section class="ee-content-card" id="ee-eligibility">
    <h2>Eligibility Criteria</h2>
    @if (!empty($exam['eligibility']) && is_array($exam['eligibility']))
        <ul>
            @foreach ($exam['eligibility'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Eligibility details will be updated from the official notification.</p>
    @endif
</section>

         
<section class="ee-content-card" id="ee-pattern">
    <h2>Exam Pattern</h2>
    <div class="ee-info-row">
        <span>Duration</span>
        <strong>{{ data_get($exam, 'duration', 'Check official notification') }}</strong>
    </div>
    <div class="ee-info-row">
        <span>Total Marks</span>
        <strong>{{ data_get($exam, 'total_marks', 'Check official notification') }}</strong>
    </div>
    <div class="ee-info-row">
        <span>Number of Questions</span>
        <strong>{{ data_get($exam, 'number_of_questions', 'Check official notification') }}</strong>
    </div>

    @if (!empty($exam['exam_pattern']) && is_array($exam['exam_pattern']))
        <div class="ee-pattern-list">
            @foreach ($exam['exam_pattern'] as $label => $value)
                <div class="ee-info-row">
                    <span>{{ str_replace('_', ' ', $label) }}</span>
                    <strong>{{ is_array($value) ? implode(', ', $value) : $value }}</strong>
                </div>
            @endforeach
        </div>
    @else
        <p>The detailed exam pattern will be updated when verified information is available.</p>
    @endif
</section>

      
<section class="ee-content-card" id="ee-syllabus">
    <h2>Exam Syllabus</h2>

    @if (!empty($exam['syllabus']) && is_array($exam['syllabus']))
        <ul class="ee-syllabus-list">
            @foreach ($exam['syllabus'] as $subject)
                <li>
                    <i class="bi bi-check-circle"></i>
                    {{ $subject }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Syllabus information will be updated from the official notification.</p>
    @endif
</section>

         
<section class="ee-content-card" id="ee-application">
    <h2>Application Process & Fees</h2>

    @if (!empty($exam['application_process']) && is_array($exam['application_process']))
        <ol class="ee-application-steps">
            @foreach ($exam['application_process'] as $step)
                <li>{{ $step }}</li>
            @endforeach
        </ol>
    @else
        <p>
            Visit the official website, review the notification, complete
            the application form and follow the payment instructions.
        </p>
    @endif

    <div class="ee-info-row">
        <span>Application Fee</span>
        <strong>{{ data_get($exam, 'application_fee', 'Check official notification') }}</strong>
    </div>

    @if (!empty($exam['official_website']))
        <a class="ee-btn ee-btn-primary"
           href="{{ $exam['official_website'] }}"
           target="_blank"
           rel="noopener noreferrer">
            Visit Official Website <i class="bi bi-arrow-up-right"></i>
        </a>
    @endif
</section>


            
<section class="ee-content-card" id="ee-resources">
    <h2>Preparation Resources</h2>
    <p>Prepare using the official syllabus, previous-year question papers, mock tests and subject-wise practice materials.</p>

    @if (!empty($exam['preparation_tips']) && is_array($exam['preparation_tips']))
        <ul class="ee-syllabus-list">
            @foreach ($exam['preparation_tips'] as $tip)
                <li>
                    <i class="bi bi-check-circle"></i>
                    {{ $tip }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Preparation tips will be added when verified information is available.</p>
    @endif
</section>


            <section class="ee-content-card" id="ee-faq">
                <h2>Frequently Asked Questions</h2>
                <details><summary>Where can I find the latest exam dates?</summary><p>Check the conducting body's official website for the latest notification.</p></details>
                <details><summary>Where can I check eligibility?</summary><p>Review the eligibility criteria in the official information bulletin.</p></details>
                <details><summary>Where can I find the syllabus?</summary><p>Use the official syllabus published by the examination authority.</p></details>
            </section>
        </div>
    </div>
</main>



<script src="{{ asset('js/entrance-exam-details.js') }}"></script>
<x-frontend-footer />
