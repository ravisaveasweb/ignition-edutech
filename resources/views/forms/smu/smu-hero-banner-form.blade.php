<form class="smu-lead-form enquiry-form" id="smuHomeBannerForm" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="SMU Hero Form">

    <input type="text" name="name" placeholder="Full Name" required>

    <input type="text" name="mobile" placeholder="Mobile Number" required>

    <input type="email" name="email" placeholder="Email Address" required>

   <div class="smu-course-dropdown">

    <button type="button" class="smu-course-trigger" aria-expanded="false">
        <span class="smu-course-selected">Select Program of Interest</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <input type="hidden" name="course_name" class="smu-course-value" required>

    <div class="smu-course-menu">

        <input type="text" class="smu-course-search"
            placeholder="Search course..." autocomplete="off">

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
    <button class="btn-primary full" type="submit">
        Book Free Counselling
    </button>
    <small>We only use your details to help with counselling and admissions support.</small>
</form>
