<form id="vguHomeBannerForm" class="row g-3 enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="VGU Hero Form">
    <input type="hidden" name="enquiry_type" value="Counselling">


    <div class="col-12">
        <input name="name" class="form-control form-control-lg io-hero-input px-3" placeholder="Full Name"
            type="text" required />
    </div>
    <div class="col-md-12">
        <input name="email" class="form-control form-control-lg io-hero-input px-3" placeholder="Mobile Number"
            type="tel" required />
    </div>
    <div class="col-md-12">
        <input name="mobile" class="form-control form-control-lg io-hero-input px-3" placeholder="Email Address"
            type="email" required />
    </div>

    <div class="col-12">
        <div class="vgu-online-course-dropdown">

            <button type="button" class="vgu-online-course-trigger" aria-expanded="false">
                <span class="vgu-online-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="vgu-online-course-value" required>

            <div class="vgu-online-course-menu">

                <input type="text" class="vgu-online-course-search" placeholder="Search course..."
                    autocomplete="off">

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
    <div class="col-12 pt-2">
        <button type="submit" class="io-btn-accent shadow-sm w-100 py-3 text-uppercase fw-bold tracking-wider">
            Book Free Counselling
        </button>
    </div>
</form>
