<form id="bennettHelpForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <div class="row g-3">

        <input type="hidden" name="source" value="Bennett Help Form">

        <!-- Full Name Element -->
        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 bu-input-field" name="name" placeholder="Enter Full Name"
                required type="text" />
        </div>

        <!-- Mobile Entry Element -->
        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 bu-input-field" name="mobile" placeholder="Enter Mobile Number"
                required type="tel" />
        </div>

        <!-- Electronic Mail Address Element -->
        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 bu-input-field" name="email" placeholder="Enter Email Address"
                required type="email" />
        </div>

        <!-- Academic Program Interface Element -->
        <div class="col-12">
            <div class="bennett-course-dropdown">

    <button type="button" class="bennett-course-trigger" aria-expanded="false">
        <span class="bennett-course-selected">Select Program of Interest</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <input type="hidden" name="course_name" class="bennett-course-value" required>

    <div class="bennett-course-menu">

        <input
            type="text"
            class="bennett-course-search"
            placeholder="Search course..."
            autocomplete="off"
        >

        <div class="bennett-course-options">

            @forelse($courses ?? [] as $course)
                <div class="bennett-course-option" data-value="{{ $course }}">
                    {{ $course }}
                </div>
            @empty
                <div class="bennett-course-empty">
                    No courses available
                </div>
            @endforelse

            <div class="bennett-course-empty" hidden>
                No matching courses found
            </div>

        </div>
    </div>

</div>
        </div>

        <!-- Interactive Control Mechanism Layer -->
        <div class="col-12 mt-4">
            <button type="submit" class="btn w-100 py-3 border-0 bu-btn-action">
                Get Free Counselling
            </button>
        </div>

    </div>
</form>
