<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/study-india/study-india-review.css') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />

<x-study-india-header/>
<main class="form-main">
    <div class="form-topbar">
        <div>
            <div class="eyebrow">STUDENT VOICES · REAL EXPERIENCES</div>
            <h1>Share your college experience</h1>
            <p>Help future students make a more informed decision.</p>
        </div>

        <div class="points-note">
            <span>✦</span>
            <div>
                <b>Review submission</b>
                <small>Complete the details below</small>
            </div>
        </div>
    </div>


    <div class="progress-wrap">
        <div class="progress-label">
            <span>College and student details</span>
            <span class="progress-percentage" id="formProgressText" aria-live="polite">0% completed</span>
        </div>

        <div class="progress-track" id="formProgressTrack" role="progressbar" aria-label="Review form completion"
            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <span id="formProgressBar"></span>
        </div>

        <p class="progress-helper" id="formProgressHelper">
            Start filling in your details to track your progress.
        </p>
    </div>


    <form id="collegeReviewForm" class="college-form" action="{{ route('study-india.reviews.store') }}" method="POST">
        @csrf

        <div class="form-grid">
            <label class="field">
                College / University Name*
                <input type="text" name="college" id="college" list="collegeOptions"
                    placeholder="Search or type your college name" value="{{ old('college', $selectedCollege ?? '') }}" autocomplete="off"
                    maxlength="255" pattern="[A-Za-zÀ-ÿ][A-Za-zÀ-ÿ .,'&()\-]*"
                    oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ .,'&()\-]/g, '')"
                    title="Numbers are not allowed in the college name." required>

                <datalist id="collegeOptions">
                    @foreach ($colleges as $college)
                        <option value="{{ $college }}"></option>
                    @endforeach
                </datalist>
            </label>


            <label class="field">
                Select Course*

                <input type="text" name="course" id="course" list="courseOptions" required
                    placeholder="Search or type your course" value="{{ old('course', $selectedCourse ?? '') }}" autocomplete="off"
                    maxlength="255" pattern="[A-Za-zÀ-ÿ][A-Za-zÀ-ÿ .,'&()\-]*"
                    oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ .,'&()\-]/g, '')"
                    title="Numbers are not allowed in the course name.">

                <datalist id="courseOptions">
                    @foreach ($courses as $course)
                        <option value="{{ $course}}">{{ $course}}</option>
                    @endforeach
                </datalist>
            </label>


            <label class="field">
                Name*
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    autocomplete="name" placeholder="Your full name" maxlength="100"
                    pattern="[A-Za-zÀ-ÿ][A-Za-zÀ-ÿ .'-]*"
                    oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ .'-]/g, '')"
                    title="Please enter your name using letters only.">
            </label>

            <label class="field">
                Email Address*
                <input name="email" type="email" required autocomplete="email" placeholder="you@example.com">
            </label>

            <label class="field">
                Mobile Number*
                <div class="phone-field">
                    <select name="countryCode" aria-label="Country code" required>
                        <option value="+91">🇮🇳 +91</option>

                    </select>
                    <input name="mobile" type="tel" required inputmode="numeric" pattern="[0-9]{10}" minlength="10"
                        maxlength="10" title="Please enter exactly 10 digits."
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
                        placeholder="Mobile number">
                </div>
            </label>

            <label class="field">
                Gender*
                <select name="gender" required>
                    <option value="">Select gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
            </label>

            <label class="field">
                Enter the Referral Code
                <div class="referral-field">
                    <input name="referral" id="referralCode" placeholder="Referral code (optional)">
                    <button type="button" id="applyReferral">Apply</button>
                </div>
                <small id="referralMessage" class="field-help">Optional referral code</small>
            </label>

            <label class="field">
                LinkedIn Profile
                <input name="linkedin" type="url" placeholder="https://www.linkedin.com/in/your-profile">
                <small class="field-help">Optional public profile URL</small>
            </label>

            <label class="field">
                Year of Admission*
                <select name="admissionYear" id="admissionYear" required>
                    <option value="">Select year</option>
                </select>
            </label>

            <label class="field">
                Course Fees (₹ / year)*
                <input name="courseFees" type="number" min="0" step="0.01" required
                    placeholder="Annual course fees">
            </label>

            <label class="field">
                Class Size*
                <input name="classSize" type="number" min="1" required
                    placeholder="Approx. number of students">
            </label>
        </div>

        <div class="academics-heading">
            <h2>Academic details</h2>
            <p>Share your previous academic scores.</p>
        </div>

        <div class="academic-header">
            <span>Level</span>
            <span>Board / University</span>
            <span>Percentage / CGPA</span>
        </div>

        <div class="academic-row">
            <b class="level-chip">12th</b>
            <input name="board12" placeholder="12th board / university">
            <div class="score-fields">
                <input name="score12" type="number" min="0" max="100" step=".01"
                    placeholder="Score">
                <select name="scoreType12" aria-label="12th score format">
                    <option value="Percentage">Percentage</option>
                    <option value="CGPA">CGPA</option>
                </select>
            </div>
        </div>

        <div class="academic-row">
            <b class="level-chip">10th</b>
            <input name="board10" placeholder="10th board / university">
            <div class="score-fields">
                <input name="score10" type="number" min="0" max="100" step=".01"
                    placeholder="Score">
                <select name="scoreType10" aria-label="10th score format">
                    <option value="Percentage">Percentage</option>
                    <option value="CGPA">CGPA</option>
                </select>
            </div>
        </div>

        <div class="academic-row">
            <b class="level-chip">Graduation</b>
            <input name="graduationCourse" placeholder="Course / degree">
            <div class="score-fields">
                <input name="graduationScore" type="number" min="0" max="100" step=".01"
                    placeholder="Score">
                <select name="graduationScoreType" aria-label="Graduation score format">
                    <option value="Percentage">Percentage</option>
                    <option value="CGPA">CGPA</option>
                </select>
            </div>
        </div>

        <label class="field full-field">
            Full name of your college / university
            <input name="collegeDisplayName" placeholder="Official college / university name" list="collegeOptions"
                type="text" value="{{ old('college') }}"autocomplete="off" maxlength="255"
                pattern="[A-Za-zÀ-ÿ][A-Za-zÀ-ÿ .,'&()\-]*"
                title="Enter a college name using letters and normal name characters only.">
            <datalist id="collegeOptions">
                @foreach ($colleges as $college)
                    <option value="{{ $college }}"></option>
                @endforeach


            </datalist>
        </label>

        <div class="question-block">
            <fieldset>
                <legend>Did you avail reservation benefits?</legend>
                <div class="radio-line">
                    <label><input type="radio" name="reservation" value="Yes"> Yes</label>
                    <label><input type="radio" name="reservation" value="No" checked> No</label>
                </div>
                <label class="field conditional" id="reservationWrap">
                    Reservation type
                    <select name="reservationType">
                        <option value="">Select type</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="OBC">OBC</option>
                        <option value="EWS">EWS</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
            </fieldset>

            <fieldset>
                <legend>Was there any GD / PI for admission?</legend>
                <div class="radio-line">
                    <label><input type="radio" name="gdpi" value="Yes"> Yes</label>
                    <label><input type="radio" name="gdpi" value="No" checked> No</label>
                </div>
            </fieldset>

            <fieldset>
                <legend>Did you opt for hostel?</legend>
                <div class="radio-line">
                    <label><input type="radio" name="hostel" value="Yes"> Yes</label>
                    <label><input type="radio" name="hostel" value="No" checked> No</label>
                </div>
                <label class="field conditional" id="hostelWrap">
                    Hostel Fees (₹ / year)
                    <input name="hostelFees" type="number" min="0" step="0.01"
                        placeholder="Annual hostel fees">
                </label>
            </fieldset>

            <fieldset>
                <legend>Does your college provide placements?</legend>
                <div class="radio-line">
                    <label><input type="radio" name="placements" value="Yes"> Yes</label>
                    <label><input type="radio" name="placements" value="No" checked> No</label>
                </div>
                <label class="field conditional" id="packageWrap">
                    Average Package (₹ / year)
                    <input name="averagePackage" type="number" min="0" step="0.01"
                        placeholder="Average annual package">
                </label>
            </fieldset>

            <fieldset>
                <legend>Does your college provide internship opportunities?</legend>
                <div class="radio-line">
                    <label><input type="radio" name="internships" value="Yes"> Yes</label>
                    <label><input type="radio" name="internships" value="No" checked> No</label>
                </div>
            </fieldset>
        </div>

        <div class="academics-heading">
            <h2>Other colleges and courses</h2>
            <p>Other options you considered.</p>
        </div>

        <div id="otherColleges">
            <div class="other-row">
                <label class="field">
                    College / University Name
                    <input type="text" name="otherCollege[]" id="otherCollege-1" list="collegeOptions"
                        placeholder="Other college name" value="{{ old('otherCollege.0') }}" autocomplete="off"
                        maxlength="255" pattern="[A-Za-zÀ-ÿ][A-Za-zÀ-ÿ .,'&()\-]*"
                        oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ .,'&()\-]/g, '')"
                        title="Enter a college name using letters and normal name characters only.">
                    <datalist id="collegeOptions">
                        @foreach ($colleges as $college)
                            <option value="{{ $college }}"></option>
                        @endforeach

                    </datalist>
                </label>
                <label class="field">
                    Select Course

                    <input type="text" name="otherCourse[]" id="otherCourse-1" list="courseOptions"
                        placeholder="Search or type another course" maxlength="255"
                        pattern="[A-Za-zÀ-ÿ][A-Za-zÀ-ÿ .,'&()\-]*"
                        oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ .,'&()\-]/g, '')">

                    <datalist id="courseOptions">
                        @foreach ($courses as $course)
                            <option value="{{ $course}}">{{ $course}}</option>
                        @endforeach
                    </datalist>
                </label>

            </div>
        </div>

        <button type="button" id="addCollege" class="add-more">＋ Add More</button>

        <label class="field full-field">
            Why didn’t you opt for this college?
            <textarea name="reasonNotChosen" rows="3" placeholder="Share what influenced your decision (optional)"></textarea>
        </label>

        <section class="overall-rating" aria-labelledby="overallRatingTitle">
            <h2 id="overallRatingTitle">Rate Your College on Your Overall Experience</h2>
            <p>Make it accurate considering all pros and cons</p>

            <div class="overall-stars" role="radiogroup" aria-label="Rate your college from one to five stars">
                <button type="button" class="rating-star" data-rating="1" role="radio" aria-checked="false"
                    aria-label="1 star">★</button>
                <button type="button" class="rating-star" data-rating="2" role="radio" aria-checked="false"
                    aria-label="2 stars">★</button>
                <button type="button" class="rating-star" data-rating="3" role="radio" aria-checked="false"
                    aria-label="3 stars">★</button>
                <button type="button" class="rating-star" data-rating="4" role="radio" aria-checked="false"
                    aria-label="4 stars">★</button>
                <button type="button" class="rating-star" data-rating="5" role="radio" aria-checked="false"
                    aria-label="5 stars">★</button>
                <span id="overallRatingLabel" aria-live="polite">Choose a rating</span>
            </div>

            <input type="hidden" id="overallRatingValue" name="overallRating" value="">
        </section>

        <label class="field full-field">
            Your overall experience / review*
            <textarea name="review" rows="5" minlength="30" required
                placeholder="Describe teaching quality, facilities, campus life, fees, placements and advice for future students. (At least 30 characters)"></textarea>
        </label>

        <label class="consent-line">
            <input type="checkbox" name="consent" value="1" required>
            <span>I confirm this is my genuine experience and the information provided is accurate.</span>
        </label>

        <div class="form-actions">
            <a href="{{ route('study-india.reviews.index') }}" class="back-link">Cancel</a>
            <button type="submit" id="previewReview" class="orange-button">
                Preview Review <span>→</span>
            </button>
        </div>

        <p id="formStatus" class="form-status">
            Your review will be submitted for approval after you confirm it in the preview.
        </p>
    </form>
</main>




<div class="review-preview-backdrop" id="previewModal" hidden>
    <section class="review-preview-modal" role="dialog" aria-modal="true" aria-labelledby="previewTitle">

        <button type="button" class="review-preview-close" id="closePreview"
            aria-label="Close preview">&times;</button>

        <div class="review-preview-header">
            <span class="review-preview-eyebrow">FINAL REVIEW CHECK</span>
            <h2 id="previewTitle">Review your experience</h2>
            <p>Please check your details carefully before submitting your review.</p>
        </div>

        <div class="review-preview-rating">
            <div class="review-preview-rating-icon">
                <i class="bi bi-star-fill"></i>
            </div>
            <div>
                <span class="review-preview-label">Your overall rating</span>
                <div class="review-preview-rating-value" id="previewRating">Not rated</div>
            </div>
        </div>

        <div id="previewContent" class="review-preview-content"></div>

        <div class="review-preview-footer">
            <p><i class="bi bi-shield-check"></i> Your review will be submitted for approval.</p>

            <div class="review-preview-actions">
                <button type="button" class="review-preview-edit" id="closePreviewBottom">
                    <i class="bi bi-pencil"></i> Edit Review
                </button>

                <button type="button" class="review-preview-submit" id="donePreview">
                    Submit Review <i class="bi bi-arrow-right"></i>
                </button>
            </div>
        </div>

    </section>
</div>




<div id="toast" class="toast" role="status" aria-live="polite"></div>



<script
    src="{{ asset('js/study-india/study-india-review.js') }}?v={{ filemtime(public_path('js/study-india/study-india-review.js')) }}">
</script>
