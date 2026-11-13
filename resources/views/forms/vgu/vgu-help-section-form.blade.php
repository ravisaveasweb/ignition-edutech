<form id="vguHelpForm" class="d-flex flex-column gap-3 enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="VGU Help Form">

    <div class="mb-1">
        <input class="form-control io-card-input px-3" name="name" placeholder="Enter Name" required type="text" />
    </div>
    <div class="mb-1">
        <input class="form-control io-card-input px-3" name="email" placeholder="Enter Email Address" required
            type="email" />
    </div>
    <div class="mb-1">
        <input class="form-control io-card-input px-3" name="mobile" placeholder="Enter Phone Number" required
            type="text" />
    </div>
    <div class="mb-1">
              <div class="vgu-online-course-dropdown">

    <button type="button" class="vgu-online-course-trigger" aria-expanded="false">
        <span class="vgu-online-course-selected">Select Program of Interest</span>
        <i class="bi bi-chevron-down"></i>
    </button>

    <input type="hidden" name="course_name" class="vgu-online-course-value" required>

    <div class="vgu-online-course-menu">

        <input type="text" class="vgu-online-course-search" placeholder="Search course..." autocomplete="off">

        <div class="vgu-online-course-options">

            @forelse($courses ?? [] as $course)
                <div class="vgu-online-course-option" data-value="{{ $course }}">
                    {{ $course }}
                </div>
            @empty
                <div class="vgu-online-course-empty">
                    No courses available
                </div>
            @endforelse

            <div class="vgu-online-course-empty" hidden>
                No matching courses found
            </div>

        </div>
    </div>

</div>
    </div>
    <button type="submit" class="io-btn-accent-modern w-100 py-3 text-uppercase fw-bold tracking-wider shadow-sm">
        Book Free Counselling
    </button>

    <small class="text-white text-center">
        <i class="fas fa-lock"></i>
        We respect your privacy. No spam ever.
    </small>
</form>
