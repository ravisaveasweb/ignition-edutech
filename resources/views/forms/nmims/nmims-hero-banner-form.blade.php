<div class="hero-form">

    <form id="nmimsHomeBannerForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
        @csrf
        <h3>Get Free Counselling</h3>
        <p>Talk to our experts & choose the right program for your future.</p>
        <input type="hidden" name="source" value="NMIMS Hero Form">
        <input type="hidden" name="enquiry_type" value="Counselling">


        <input type="text" name="name" id="nmimsHomeName" placeholder="Full Name" minlength="2" maxlength="60"
            pattern="[A-Za-z ]+" title="Please enter a valid name using letters only." autocomplete="name" required>

        <input type="tel" name="mobile" id="nmimsHomeMobile" placeholder="Mobile Number" maxlength="10"
            pattern="[6-9][0-9]{9}" title="Enter a valid 10-digit Indian mobile number." inputmode="numeric"
            autocomplete="tel" required>

        <input type="email" name="email" id="nmimsHomeEmail" placeholder="Email Address" maxlength="100"
            autocomplete="email" title="Please enter a valid email address." required>

        <div class="nmims-course-dropdown">

            <button type="button" class="nmims-course-trigger">
                <span class="nmims-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="nmims-course-value" required>

            <div class="nmims-course-menu">

                <input type="text" class="nmims-course-search" placeholder="Search course...">

                <div class="nmims-course-options">

                    @forelse($courses ?? [] as $course)
                        <div class="nmims-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="nmims-course-empty">
                            No courses available
                        </div>
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
