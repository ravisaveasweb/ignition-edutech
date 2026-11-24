<form id="umassHelpForm" method="POST" class="umass-form-body enquiry-form" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="Umass Help Form">
    <input type="hidden" name="enquiry_type" value="Counselling">

    <div class="row g-3">

        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 umass-minimal-input" name="name" placeholder="Enter Name"
                required type="text" />
        </div>

        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 umass-minimal-input" name="mobile"
                placeholder="Enter Mobile Number" required type="tel" />
        </div>

        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 umass-minimal-input" name="email"
                placeholder="Enter Email Address" required type="email" />
        </div>

        <div class="col-12">
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

        <div class="col-12 mt-4">
            <button type="submit" class="btn fs-5 border-0 w-100 umass-btn-dark-action">
                Submit Application Request
            </button>
        </div>

    </div>
</form>
