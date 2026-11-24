<form id="smuHelpForm" class="smu-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="SMU Help Form">
    <input type="hidden" name="enquiry_type" value="Counselling">



    <div class="input-group">
        <input type="text" name="name" placeholder="Full Name" required>
    </div>

    <div class="input-group">
        <input type="text" name="mobile" placeholder="Mobile Number" required>
    </div>

    <div class="input-group">
        <input type="email" name="email" placeholder="Email Address" required>
    </div>

    <div>
        <div class="smu-course-dropdown">

            <button type="button" class="smu-course-trigger" aria-expanded="false">
                <span class="smu-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="smu-course-value" required>

            <div class="smu-course-menu">

                <input type="text" class="smu-course-search" placeholder="Search course..." autocomplete="off">

                <div class="smu-course-options">

                    @forelse($courses ?? [] as $course)
                        <div class="smu-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="smu-course-empty">
                            No courses available
                        </div>
                    @endforelse

                    <div class="smu-course-empty" hidden>
                        No matching courses found
                    </div>

                </div>
            </div>

        </div>
    </div>

    <button class="btn-book" type="submit">Book Free Counselling</button>

    <small class="text-white text-center">
        <i class="fas fa-lock"></i>
        We respect your privacy. No spam ever.
    </small>
</form>
