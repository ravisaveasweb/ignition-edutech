<form id="dpuHelpForm" class="dpu-cta-form enquiry-form" action="{{ route('enquiry.store') }}" method="POST">
    @csrf
    <input type="hidden" name="source" value="DPU Help Form">
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

        <div class="dypatil-course-dropdown">

            <button type="button" class="dypatil-course-trigger" aria-expanded="false">
                <span class="dypatil-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="dypatil-course-value" required>

            <div class="dypatil-course-menu">

                <input type="text" class="dypatil-course-search" placeholder="Search course..." autocomplete="off">

                <div class="dypatil-course-options">

                    @forelse($courses ?? [] as $course)
                        <div class="dypatil-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="dypatil-course-empty">
                            No courses available
                        </div>
                    @endforelse

                    <div class="dypatil-course-empty" hidden>
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
