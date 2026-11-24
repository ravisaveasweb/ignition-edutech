<div class="nmims-help-form">
    <div class="hero-form">

        <form id="nmimsHelpForm" method="POST" action="{{ route('enquiry.store') }}" class="enquiry-form">
            @csrf
            <input type="hidden" name="source" value="NMIMS Help Form">
            <input type="hidden" name="enquiry_type" value="Counselling">



            <div class="input-group">
                <input type="text" name="name" placeholder="Full Name" minlength="2" maxlength="60"
                    autocomplete="name" required>
            </div>

            <div class="input-group">
                <input type="tel" name="mobile" placeholder="Mobile Number" maxlength="10" inputmode="numeric"
                    pattern="[6-9][0-9]{9}" title="Enter a valid 10-digit Indian mobile number." autocomplete="tel"
                    required>
            </div>

            <div class="input-group">
                <input type="email" name="email" placeholder="Email Address" maxlength="100" autocomplete="email"
                    required>
            </div>


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

            <button type="submit" class="btn-book">Book Free Counselling</button>

            <small>
                <i class="fas fa-lock"></i>
                We respect your privacy. No spam ever.
            </small>
        </form>
    </div>
</div>
