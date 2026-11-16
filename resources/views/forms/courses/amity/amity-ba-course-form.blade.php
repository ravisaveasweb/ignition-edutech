<form class="enquiry-form" action="{{ route('enquiry.store') }}" method="POST">

    @csrf

    <input type="hidden" name="source" value="Amity Online BA">

    <input type="text" class="form-control" name="name" placeholder="Full Name" required>

    <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" required>

    <input type="email" class="form-control" name="email" placeholder="Email Address" required>

    <div class="amity-course-dropdown">
            <button type="button" class="amity-course-trigger" aria-expanded="false">
                <span class="amity-course-selected">Select Program of Interest</span>
                <i class="bi bi-chevron-down"></i>
            </button>

            <input type="hidden" name="course_name" class="amity-course-value" required>

            <div class="amity-course-menu">
                <input type="text" class="amity-course-search" placeholder="Search course...">

                <div class="amity-course-options">
                    @forelse($courses ?? [] as $course)
                        <div class="amity-course-option" data-value="{{ $course }}">
                            {{ $course }}
                        </div>
                    @empty
                        <div class="amity-course-empty">No courses available</div>
                    @endforelse
                </div>
            </div>
        </div>

    <button type="submit" class="amt-btn-primary w-100 mt-4">

        Get Free Counselling

    </button>

    <p class="text-center amt-muted mt-2 mb-0" style="font-size:.78rem;">
        We respect your privacy. No spam ever.
    </p>

</form>
