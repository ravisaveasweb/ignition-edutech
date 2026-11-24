<form id="jainHelpForm" class="jain-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="Jain Help Form">
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
        <div class="jain-course-dropdown">

            <button type="button" class="jain-course-trigger" aria-expanded="false">
                <span class="jain-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="jain-course-value" required>

            <div class="jain-course-menu">

                <input type="text" class="jain-course-search" placeholder="Search course..." autocomplete="off">

                <div class="jain-course-options">

                    @forelse($courses ?? [] as $course)
                        <div class="jain-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="jain-course-empty">
                            No courses available
                        </div>
                    @endforelse

                    <div class="jain-course-empty" hidden>
                        No matching courses found
                    </div>

                </div>
            </div>

        </div>
    </div>

    <button type="submit" class="btn-book">Book Free Counselling</button>

    <small class="text-white text-center">
        <i class="fas fa-lock"></i>
        We respect your privacy. No spam ever.
    </small>
</form>
