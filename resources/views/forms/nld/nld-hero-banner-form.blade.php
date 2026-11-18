<form id="nldHomeBannerForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="NLD Hero Form">
    <input type="hidden" name="enquiry_type" value="Counselling">



    <div class="mb-3">
        <label class="nld-form-label mb-2">Full Name</label>
        <input class="form-control nld-form-input" type="text" name="name" placeholder="Enter Full Name" required>
    </div>
    <div class="mb-3">
        <label class="nld-form-label mb-2">Email Address</label>
        <input class="form-control nld-form-input" type="email" name="email" placeholder="Enter Email Address"
            required>
    </div>
    <div class="mb-3">
        <label class="nld-form-label mb-2">Phone Number</label>
        <input class="form-control nld-form-input" type="text" name="mobile" placeholder="Enter Mobile Number"
            required>
    </div>
    <div class="mb-4">
        <label class="nld-form-label mb-2">Program of Interest</label>
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
    </div>

    <button class="nld-btn-submit w-100 py-3" type="submit">Enquiry Now</button>
    <small class="text-white mt-3">Your details are used only for counselling and admission assistance.</small>
</form>
