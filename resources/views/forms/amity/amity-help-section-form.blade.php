<div class="amity-cta-section p-4 p-md-5 rounded-4 shadow-lg">
    <form id="amityHelpForm" action="{{ route('enquiry.store') }}" class="row g-3 enquiry-form" method="POST">
        @csrf
        <input type="hidden" name="source" value="Amity Help Form">
               <input type="hidden" name="enquiry_type" value="Counselling">


        <div class="col-12">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="col-12">
            <input type="text" name="mobile" placeholder="Mobile Number" required>
        </div>

        <div class="col-12">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>

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

        <div class="col-12">
            <button type="submit" class="btn-primary-custom w-100 py-3 shadow-lg">
                Get Free Counselling
            </button>
        </div>

    </form>
</div>
