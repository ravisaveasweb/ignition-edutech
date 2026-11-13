<form class="row g-3 enquiry-form" type="POST" id="bennettHomeBannerForm" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="Bennett Hero Form">

    <div class="col-12">
        <input class="form-control form-control-custom" name="name" placeholder="Enter Name" type="text" />
    </div>
    <div class="col-md-12">
        <input class="form-control form-control-custom" name="mobile" placeholder="Enter Mobile Number"
            type="tel" />
    </div>
    <div class="col-md-12">
        <input class="form-control form-control-custom" name="email" placeholder="Enter Email" type="email" />
    </div>
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
    <div class="col-12 pt-2">
        <button type="submit" class="btn w-100 font-headline border-0 rounded-pill bennett-get-started-btn">Get Started
            Now</button>
    </div>
</form>
