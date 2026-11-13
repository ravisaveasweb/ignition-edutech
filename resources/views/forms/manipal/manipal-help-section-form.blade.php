<form id="manipalHelpForm" class="manipal-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="Manipal Help Form">

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
        <div class="manipal-course-dropdown">

            <button type="button" class="manipal-course-trigger" aria-expanded="false">
                <span class="manipal-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="manipal-course-value" required>

            <div class="manipal-course-menu">

                <input type="text" class="manipal-course-search" placeholder="Search course..." autocomplete="off">

                <div class="manipal-course-options">

                    @forelse($courses ?? [] as $course)
                        <div class="manipal-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="manipal-course-empty">
                            No courses available
                        </div>
                    @endforelse

                    <div class="manipal-course-empty" hidden>
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
