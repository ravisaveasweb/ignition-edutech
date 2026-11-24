<div class="hero-form">

    <form id="vitolHomeBannerForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
        @csrf
        <h3>Get Free Counselling</h3>
        <p>Talk to our experts & choose the right program for your future.</p>
        <input type="hidden" name="source" value="Vitol Hero Form">
        <input type="hidden" name="enquiry_type" value="Counselling">

        

        <input type="text" name="name" placeholder="Full Name" required minlength="2" maxlength="60"
            autocomplete="name" class="vitol-name-input">

        <input type="tel" name="mobile" placeholder="Mobile Number" required maxlength="10" minlength="10"
            inputmode="numeric" pattern="[6-9][0-9]{9}" autocomplete="tel" class="vitol-mobile-input">
        <input type="email" name="email" placeholder="Email Address" required maxlength="100" autocomplete="email"
            class="vitol-email-input">

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
        <button class="btn-primary full" type="submit">
            Book Free Counselling
        </button>
        <small>We respect your privacy. No spam ever.</small>
    </form>
</div>
