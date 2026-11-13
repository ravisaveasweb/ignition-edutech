<div class="manipal-hero-aside">
    <div class="manipal-enquiry-card">
        <div class="manipal-card-topline">Free Counselling</div>
        <h3>Shortlist the right Manipal Online program faster</h3>
        <p>Share your details and our team will help you compare eligibility, outcomes, and the best-fit learning route.
        </p>

        <form class="manipal-lead-form enquiry-form" action="{{ route('enquiry.store') }}" id="manipalHomeBannerForm"
            method="POST">
            @csrf
            <input type="hidden" name="store" value="Manipal Hero Form">

            <input type="text" name="name" placeholder="Full Name" required>

            <input type="text" name="mobile" placeholder="Mobile Number" required>

            <input type="email" name="email" placeholder="Email Address" required>

            <div class="manipal-course-dropdown">

                <button type="button" class="manipal-course-trigger" aria-expanded="false">
                    <span class="manipal-course-selected">Select Program of Interest</span>
                    <i class="bi bi-chevron-down"></i>
                </button>

                <input type="hidden" name="course_name" class="manipal-course-value" required>

                <div class="manipal-course-menu">

                    <input type="text" class="manipal-course-search" placeholder="Search course..."
                        autocomplete="off">

                    <div class="manipal-course-options">

                        @forelse($courses ?? [] as $course)
                            <div class="manipal-course-option" data-value="{{ $course }}">
                                {{ $course }}
                            </div>
                        @empty
                            <div class="manipal-course-empty">
                                No courses available
                            </div>
                        @endforelse

                        <div class="manipal-course-empty" hidden>
                            No matching courses found
                        </div>

                    </div>
                </div>

            </div>
            <button class="btn-primary full" type="submit">
                Book Free Counselling
            </button>
            <small>Your details stay private and are only used for admission assistance.</small>
        </form>
    </div>

    <div class="manipal-glance-card">
        <h4>What you can expect</h4>
        <ul>
            <li>1-on-1 program discovery support</li>
            <li>Guidance on eligibility and documentation</li>
            <li>Clarity on learning format and workload</li>
            <li>Help comparing degree and certificate options</li>
        </ul>
    </div>
</div>
