<section class="vit-cta-band">
    <div class="container vit-cta-grid">
        <div class="vit-cta-copy">
            <h2>Ready to Transform Your Future?</h2>
            <p>Join thousands of learners who chose VITOL for career success. Apply now for VIT online degree and take
                the next step today.</p>
        </div>

        <form id="vitolHelpForm" class="vit-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
            @csrf
            <input type="hidden" name="source" value="Bennett Hero Form">
            <input type="text" name="name" placeholder="Full Name" minlength="2" maxlength="60"
                pattern="[A-Za-z ]{2,60}" title="Please enter a valid full name (2–60 letters)." autocomplete="name"
                required>
            <input type="tel" name="mobile" placeholder="Mobile Number" minlength="10" maxlength="10"
                pattern="[6-9][0-9]{9}" title="Enter a valid 10-digit Indian mobile number." inputmode="numeric"
                autocomplete="tel" required>
            <input type="email" name="email" placeholder="Email Address" maxlength="254" autocomplete="email"
                title="Please enter a valid email address." required>
            <div class="vit-course-dropdown">

                <button type="button" class="vit-course-trigger" aria-expanded="false">
                    <span class="vit-course-selected">Select Program of Interest</span>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <input type="hidden" name="course_name" class="vit-course-value" required>

                <div class="vit-course-menu">
                    <input type="text" class="vit-course-search" placeholder="Search course...">

                    <div class="vit-course-options">
                        @forelse($courses ?? [] as $course)
                            <div class="vit-course-option" data-value="{{ $course }}">
                                {{ $course }}
                            </div>
                        @empty
                            <div class="vit-course-empty">No courses available</div>
                        @endforelse
                    </div>
                </div>
            </div>
            <button type="submit">Book Free Counselling</button>
            <small>We respect your privacy. No spam ever.</small>
        </form>

        <div class="vit-cta-cap">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
    </div>
</section>
