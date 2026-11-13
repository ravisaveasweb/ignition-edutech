   

    <form id="amityHomeBannerForm" action="{{ route('enquiry.store') }}" class="row enquiry-form" method="POST">
        @csrf
        <input type="hidden" name="source" value="Amity Hero Form">

        <div class="mb-3">
            <input type="text" name="name" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <input type="text" name="mobile" placeholder="Mobile Number" required>
        </div>

        <div class="mb-3">
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

        <button type="submit" class="btn btn-dark w-100 py-3 rounded-3 fw-bold request-callback-btn">
            Request Callback
        </button>

    </form>
