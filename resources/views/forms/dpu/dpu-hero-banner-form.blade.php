<form class="dpu-cta-form enquiry-form" id="dpuHomeBannerForm" action="{{ route('enquiry.store') }}" method="POST">
    @csrf
    <input type="hidden" name="source" value="DPU Hero Form">
    <input type="hidden" name="enquiry_type" value="Counselling">


    <input type="text" name="name" placeholder="Full Name" required>

    <input type="text" name="mobile" placeholder="Mobile Number" required>

    <input type="email" name="email" placeholder="Email Address" required>

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

    <button class="btn-primary full text-black" type="submit">
        Book Free Counselling
    </button>
    <small>Your information is used only to support counselling and admissions follow-up.</small>
</form>
