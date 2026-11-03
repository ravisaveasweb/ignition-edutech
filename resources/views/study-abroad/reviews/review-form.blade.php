{{-- resources/views/study-abroad/reviews/review-form.blade.php --}}
<link rel="stylesheet" href="{{ asset('css/study-abroad/study-abroad-review.css') }}?v=2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />

<x-study-abroad-header />

<div class="sa-review-form-page">

    <main class="sa-review-form-shell">
        <section class="sa-review-form-intro">
            <span class="sa-review-form-eyebrow">STUDENT VOICES · GLOBAL EXPERIENCES</span>
            <h1>Share Your Study Abroad Experience</h1>
            <p>Help future international students make informed decisions by sharing your honest university, academic
                and student-life experience.</p>
            <div class="sa-review-form-intro-points"><span>✓ Honest feedback</span><span>✓ Simple steps</span><span>✓
                    Help future students</span></div>
        </section>

        <div class="sa-review-form-progress-panel">
            <div class="sa-review-form-progress-heading"><b>Review progress</b><span
                    id="sa-review-form-progress-text">0% complete</span></div>
            <div class="sa-review-form-progress-track"><span id="sa-review-form-progress-bar"></span></div>
            <small>Complete the required questions. Optional questions can be skipped.</small>
        </div>

        <form id="sa-review-form" action="{{ route('study-abroad.reviews.store') }}" method="POST" novalidate>
            @csrf
            <section class="sa-review-form-section">
                <div class="sa-review-form-section-head"><span>1</span>
                    <div>
                        <h2>About You &amp; Your University</h2>
                        <p>Tell us a little about yourself and your international education experience.</p>
                    </div>
                </div>
                <div class="sa-review-form-grid">
                    <label>Full Name*
                        <input type="text" name="fullName" value="{{ old('fullName') }}" required autocomplete="name"
                            maxlength="150" placeholder="Enter your full name" minlength="2"
                            pattern="[A-Za-zÀ-ÖØ-öø-ÿ]+(?:[ .'-][A-Za-zÀ-ÖØ-öø-ÿ]+)*"
                            title="Enter a valid full name using letters, spaces, hyphens, apostrophes or periods."
                            oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ .'-]/g, '')"><small
                            class="sa-review-form-error"></small>
                    </label>
                    <label>Email Address*<input name="email" type="email" value="{{ old('email') }}" required
                            autocomplete="email" maxlength="255" placeholder="you@example.com"><small
                            class="sa-review-form-error"></small></label>
                    <label>Mobile Number*<input name="mobile" type="tel" value="{{ old('mobile') }}" required
                            autocomplete="tel" maxlength="10" inputmode="numeric" pattern="[0-9]{10}"
                            placeholder="10-digit mobile number"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                            title="Enter exactly 10 digits, without spaces or country code."><small
                            class="sa-review-form-error"></small></label>


                    <label>University / Institution*

                        <select name="university" required>
                            <option value="">Select University</option>

                            {{-- <input name="university" required list="sa-review-form-universities"
                            maxlength="255" placeholder="Search or enter university name"><datalist
                            id="sa-review-form-universities"> --}}
                            @foreach ($ignitionUniversities as $university)
                                <option value="{{ $university }}" @selected(old('university') === $university)>{{ $university }}
                                </option>
                            @endforeach
                        </select>
                        {{-- </datalist> --}}
                        <small class="sa-review-form-error"></small></label>
                    <label>
                        Country of Study*
                        <select name="country" required>
                            <option value="">Select country</option>

                            @foreach ($ignitionCountries as $country)
                                <option value="{{ $country }}" @selected(old('country') === $country)>
                                    {{ $country }}
                                </option>
                            @endforeach
                        </select>

                        <small class="sa-review-form-error"></small>
                    </label>


                    <label>
                        Course / Programme*

                        <select name="course" required>
                            <option value="">Select Your Course</option>

                            @foreach ($courses as $course)
                                <option value="{{ $course }}" @selected(old('course') === $course)>
                                    {{ $course }}
                                </option>
                            @endforeach
                        </select>

                        <small class="sa-review-form-error"></small>
                    </label>


                    {{-- <label>Year You Started Studying*<select name="enrollmentYear" id="sa-review-form-enrollment-year"
                            required>
                            <option value="">Select year</option>
                        </select><small class="sa-review-form-error"></small></label> --}}

                    <label>
                        Year You Started Studying*
                        <select name="enrollmentYear" id="sa-review-form-enrollment-year" required>
                            <option value="">Select year</option>

                            @for ($year = now()->year; $year >= now()->year - 35; $year--)
                                <option value="{{ $year }}"
                                    {{ (string) old('enrollmentYear') === (string) $year ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endfor
                        </select>

                        <small class="sa-review-form-error">
                            @error('enrollmentYear')
                                {{ $message }}
                            @enderror
                        </small>
                    </label>


                    <label>Annual Tuition Fees <span class="sa-review-form-optional">Optional</span><input
                            name="fees" type="number" min="0" step="0.01" value="{{ old('fees') }}"
                            placeholder="Approximate annual fees"><small class="sa-review-form-error"></small></label>
                </div>
            </section>

            <section class="sa-review-form-section">
                <div class="sa-review-form-section-head"><span>2</span>
                    <div>
                        <h2>Your Study Abroad Experience</h2>
                        <p>Share your reasons, highlights and constructive feedback about studying abroad.</p>
                    </div>
                </div>
                <label>Why did you choose this university and country?*
                    <textarea name="reason" required minlength="50" rows="3"
                        placeholder="Consider course quality, location, tuition fees, reputation or career opportunities.">{{ old('reason') }}</textarea><span class="sa-review-form-counter"><small
                            class="sa-review-form-error"></small><small class="sa-review-form-count">0 / 50 characters
                            minimum</small></span>
                </label>
                <div class="sa-review-form-grid">
                    <label>What did you like most about your experience?*
                        <textarea name="likes" required minlength="20" rows="3"
                            placeholder="Teaching, facilities, campus culture, student support or opportunities.">{{ old('likes') }}</textarea><span class="sa-review-form-counter"><small
                                class="sa-review-form-error"></small><small class="sa-review-form-count">0 / 20
                                characters minimum</small></span>
                    </label>
                    <label>What could be improved?*
                        <textarea name="improvements" required minlength="20" rows="3"
                            placeholder="Share constructive feedback about areas that need improvement.">{{ old('improvements') }}</textarea><span class="sa-review-form-counter"><small
                                class="sa-review-form-error"></small><small class="sa-review-form-count">0 / 20
                                characters minimum</small></span>
                    </label>
                </div>
                <label>Advice for Future International Students <span class="sa-review-form-optional">Optional</span>
                    <textarea name="advice" rows="3" placeholder="What should students know before applying or moving abroad?">{{ old('advice') }}</textarea><small class="sa-review-form-error"></small>
                </label>
            </section>

            <section class="sa-review-form-section">
                <div class="sa-review-form-section-head"><span>3</span>
                    <div>
                        <h2>Academics &amp; Student Life</h2>
                        <p>Rate your experience and share insights about accommodation and career support.</p>
                    </div>
                </div>
                <div class="sa-review-form-rating-block">
                    <div><b>Rate Academic Experience*</b><small>Teaching, curriculum and course quality</small></div>
                    <div class="sa-review-form-stars" data-rating="academics" role="group"
                        aria-label="Rate academic experience"></div>
                    <input type="hidden" name="academicsRating" id="sa-review-academics-rating"
                        value="{{ old('academicsRating') }}">
                    <small class="sa-review-form-error sa-review-form-rating-error"></small>
                </div>
                <div class="sa-review-form-grid">
                    <label>Career / Placement Support*<select name="placements" required>
                            <option value="">Choose one</option>
                            @foreach (['Excellent', 'Good', 'Average', 'Needs improvement', 'Not sure'] as $option)
                                <option value="{{ $option }}" @selected(old('placements') === $option)>
                                    {{ $option === 'Not sure' ? 'Not sure / Not applicable' : $option }}</option>
                            @endforeach
                        </select>
                        <small class="sa-review-form-error"></small></label>
                    <label>Accommodation Experience*<select name="accommodation" required>
                            <option value="">Choose one</option>
                            @foreach (['University accommodation', 'Private accommodation', 'Shared accommodation', 'Living with family', 'Other'] as $option)
                                <option value="{{ $option }}" @selected(old('accommodation') === $option)>{{ $option }}
                                </option>
                            @endforeach
                        </select><small class="sa-review-form-error"></small></label>
                </div>
                <label>Campus Life, Internships &amp; Part-Time Work <span
                        class="sa-review-form-optional">Optional</span>
                    <textarea name="campusJobs" rows="3"
                        placeholder="Share information about clubs, student facilities, internships or work opportunities.">{{ old('campusJobs') }}</textarea><small class="sa-review-form-error"></small>
                </label>
            </section>

            <section class="sa-review-form-section sa-review-form-final-rating">
                <div class="sa-review-form-section-head"><span>4</span>
                    <div>
                        <h2>Your Overall Study Abroad Rating</h2>
                        <p>Help future students understand your overall experience at this university.</p>
                    </div>
                </div>
                <h3>Rate Your Overall Experience*</h3>
                <p class="sa-review-form-rating-subtitle">Consider academics, support, facilities and student life.</p>
                <div class="sa-review-form-stars sa-review-form-big-stars" data-rating="overall" role="group"
                    aria-label="Rate your overall study abroad experience"></div>
                <input type="hidden" name="overallRating" id="sa-review-overall-rating"
                    value="{{ old('overallRating') }}">
                <small class="sa-review-form-error sa-review-form-rating-error"></small>
                <label class="sa-review-form-headline-label">Review Headline*<input name="headline"
                        value="{{ old('headline') }}" required minlength="8" maxlength="100"
                        placeholder="Summarise your experience in one sentence"><small
                        class="sa-review-form-error"></small></label>
            </section>

            <div class="sa-review-form-bottom">
                <label class="sa-review-form-consent"><input name="consent" type="checkbox" value="1"
                        required><span>I confirm this review is based on my own experience and that the information I
                        have provided is accurate.</span></label>
                <small class="sa-review-form-error" id="sa-review-form-consent-error"></small>
                <button class="sa-review-form-submit" type="submit">Preview My Review <span
                        aria-hidden="true">→</span></button>
                <p class="sa-review-form-privacy-note">Please provide genuine feedback. Your review may be subject to
                    moderation before publication.</p>
            </div>
        </form>
    </main>
    {{-- 
    @if ($errors->any())
    <div style="background:#fff0f0; padding:15px; margin:15px 0; color:#b00020;">
        <strong>Laravel validation errors:</strong>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <div class="sa-review-form-modal-backdrop" id="sa-review-form-preview-modal" hidden>
        <section class="sa-review-form-preview-modal" role="dialog" aria-modal="true"
            aria-labelledby="sa-review-form-preview-title">
            <button type="button" class="sa-review-form-close-modal" id="sa-review-form-close-modal"
                aria-label="Close preview">×</button>
            <h2 id="sa-review-form-preview-title">Review Preview</h2>
            <p>Check your answers before submitting your review.</p>
            <div class="sa-review-form-preview-items" id="sa-review-form-preview-items"></div>
            <button type="button" class="sa-review-form-submit" id="sa-review-form-done-button">Confirm &amp; Submit
                Review <span aria-hidden="true">→</span></button>
        </section>
    </div>
    <div class="sa-review-form-toast" id="sa-review-form-toast" role="status" aria-live="polite"></div>
</div>
<script src="{{ asset('js/study-abroad/study-abroad-review.js') }}?v=2" defer></script>
