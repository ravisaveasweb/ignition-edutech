<form id="glaHelpForm" method="POST" class="p-5 jo-glass-form enquiry-form" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="GLA Help Form">
    <input type="hidden" name="enquiry_type" value="Counselling">


    <div class="row g-3">

        <!-- Name Field -->
        <div class="col-12">
            <input class="form-control io-card-input py-3 px-3 w-100 jo-form-field" name="name"
                placeholder="Full Name" required type="text" />
        </div>

        <!-- Phone Field -->
        <div class="col-12">
            <input class="form-control io-card-input py-3 px-3 w-100 jo-form-field" name="mobile"
                placeholder="Mobile Number" required type="tel" />
        </div>

        <!-- Email Field -->
        <div class="col-12">
            <input class="form-control io-card-input py-3 px-3 w-100 jo-form-field" name="email"
                placeholder="Email Address" required type="email" />
        </div>

        <!-- Program Select Field -->
        <div class="col-12">
            <div class="gla-online-course-dropdown">

                <button type="button" class="gla-online-course-trigger" aria-expanded="false">
                    <span class="gla-online-course-selected">Select Program of Interest</span>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <input type="hidden" name="course_name" class="gla-online-course-value" required>

                <div class="gla-online-course-menu">

                    <input type="text" class="gla-online-course-search" placeholder="Search course..."
                        autocomplete="off">

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

        <!-- Submit Button -->
        <div class="col-12 mt-4 text-center">
            <button type="submit" class="btn btn-block  border-0  jo-btn-submit">
                Get Free Counselling
            </button>
        </div>

    </div>
</form>
