<form type="POST" id="umassHeroBannerForm" class="enquiry-form" action="{{ route('enquiry.store') }}">
    @csrf

    <input type="hidden" name="source" value="Umass Hero Form">
    <input type="hidden" name="enquiry_type" value="Counselling">


    <div class="mb-3">
        <input class="form-control kinetic-form-input" name="name" placeholder="Enter full name" type="text"
            required />
    </div>
    <div class="mb-3">
        <input class="form-control kinetic-form-input" name="email" placeholder="Enter Email Address" type="email"
            required />
    </div>
    <div class="mb-3">
        <input class="form-control kinetic-form-input" name="mobile" placeholder="Enter contact number" type="tel"
            required />
    </div>
    <div class="mb-4">
        <div class="umass-global-online-course-dropdown">

            <button type="button" class="umass-global-online-course-trigger" aria-expanded="false">
                <span class="umass-global-online-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="umass-global-online-course-value" required>

            <div class="umass-global-online-course-menu">

                <input type="text" class="umass-global-online-course-search" placeholder="Search course..."
                    autocomplete="off">

                <div class="umass-global-online-course-options">

                    @forelse($courses ?? [] as $course)
                        <div class="umass-global-online-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="umass-global-online-course-empty">
                            No courses available
                        </div>
                    @endforelse

                    <div class="umass-global-online-course-empty" hidden>
                        No matching courses found
                    </div>

                </div>
            </div>

        </div>
    </div>

    <button type="submit" class="btn-kinetic-primary w-100 py-3 mb-3 shadow-sm text-uppercase tracking-wider fw-bold">
        Secure Free Consultation
    </button>

    <!-- <p class="text-center text-muted mb-0" style="font-size: 11px; letter-spacing: 0.01em;">
        By submitting this form, you authorize our academic advisors to contact you regarding enrollment. View our <a class="text-decoration-underline text-secondary fw-semibold" href="#">Privacy Policy</a>.
    </p> -->
    <small>Your details stay private and are only used for admission assistance.</small>
</form>
