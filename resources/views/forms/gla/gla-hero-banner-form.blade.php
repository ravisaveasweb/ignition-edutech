    <form id="glaHomeBannerForm" class="row enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
        @csrf
        <input type="hidden" name="source" value="GLA Home Form">

        <div class="mb-3">
            <input class="form-control jo-form-control py-25 px-3" name="name" placeholder="Enter full name"
                type="text" required />
        </div>

        <div class="mb-3">
            <input class="form-control jo-form-control py-25 px-3" name="email" placeholder="Enter email address"
                type="email" required />
        </div>

        <div class="mb-3">
            <input class="form-control jo-form-control py-25 px-3" name="mobile" placeholder="Enter mobile number"
                type="tel" required />
        </div>

        <div class="mb-3">
            <div class="gla-online-course-dropdown">

    <button type="button" class="gla-online-course-trigger" aria-expanded="false">
        <span class="gla-online-course-selected">Select Program of Interest</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <input type="hidden" name="course_name" class="gla-online-course-value" required>

    <div class="gla-online-course-menu">

        <input type="text" class="gla-online-course-search" placeholder="Search course..." autocomplete="off">

        <div class="gla-online-course-options">

            @forelse($courses ?? [] as $course)
                <div class="gla-online-course-option" data-value="{{ $course }}">
                    {{ $course }}
                </div>
            @empty
                <div class="gla-online-course-empty">
                    No courses available
                </div>
            @endforelse

            <div class="gla-online-course-empty" hidden>
                No matching courses found
            </div>

        </div>
    </div>

</div>
        </div>

        <button type="submit" class="btn btn-dark w-100 py-3 rounded-3 fw-bold">
            Book Free Counselling
        </button>
        <small>Your details stay private and are only used for admission assistance.</small>
    </form>
