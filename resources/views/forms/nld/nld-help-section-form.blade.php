<form id="nldHelpForm" class="nld-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="NLD Help Form">

    <div class="input-group">
        <input type="text" name="name" placeholder="Full Name" required>
    </div>

    <div class="input-group">
        <input type="text" name="mobile" placeholder="Mobile Number" required>
    </div>

    <div class="input-group">
        <input type="email" name="email" placeholder="Email Address" required>
    </div>

    <div class="nldalmia-course-dropdown">

        <button type="button" class="nldalmia-course-trigger" aria-expanded="false">
            <span class="nldalmia-course-selected">Select Program of Interest</span>
            <i class="bi bi-chevron-down"></i>
        </button>

        <input type="hidden" name="course_name" class="nldalmia-course-value" required>

        <div class="nldalmia-course-menu">

            <input type="text" class="nldalmia-course-search" placeholder="Search course..." autocomplete="off">

            <div class="nldalmia-course-options">

                @forelse($courses ?? [] as $course)
                    <div class="nldalmia-course-option" data-value="{{ $course }}">
                        {{ $course }}
                    </div>
                @empty
                    <div class="nldalmia-course-empty">
                        No courses available
                    </div>
                @endforelse

                <div class="nldalmia-course-empty" hidden>
                    No matching courses found
                </div>

            </div>
        </div>

    </div>


    <button class="btn btn-white btn-rounded w-100 bg-white text-dark fw-bold" type="submit">Book Free
        Counselling</button>

    <small class="text-white text-center">
        <i class="fas fa-lock"></i>
        We respect your privacy. No spam ever.
    </small>
</form>
