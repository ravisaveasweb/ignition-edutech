
<style>
/* =========================================
   IGNITION COMMON UNIVERSITY COUNSELLING FORM
========================================= */

.ign-home-course-dropdown {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    z-index: 100;
}

.ign-home-course-dropdown.ign-home-course-open {
    z-index: 10001;
}

.ign-home-course-trigger {
    width: 100%;
    height: 46px;
    padding: 0 14px;
    border: 1px solid #b8b8b8;
    border-radius: 6px;
    background: #fff;
    color: #333;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    text-align: left;
}

.ign-home-course-trigger i {
    font-size: 12px;
    transition: transform 0.2s ease;
}

.ign-home-course-dropdown.ign-home-course-open
.ign-home-course-trigger i {
    transform: rotate(180deg);
}

.ign-home-course-menu {
    display: none;
    position: absolute;
    top: calc(100% + 2px);
    left: 0;
    width: 100%;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
    z-index: 10002;
    overflow: hidden;
}

.ign-home-course-dropdown.ign-home-course-open
.ign-home-course-menu {
    display: block !important;
}

.ign-home-course-search {
    padding: 8px;
    border-bottom: 1px solid #eee;
    background: #fff;
}

.ign-home-course-search input {
    width: 100%;
    height: 36px;
    padding: 0 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
    font-size: 13px;
}

.ign-home-course-options {
    max-height: 90px;
    overflow-y: auto;
}

.ign-home-course-option {
    display: block;
    width: 100%;
    padding: 10px 14px;
    border: 0;
    background: #fff;
    color: #222;
    font-size: 14px;
    text-align: left;
    cursor: pointer;
}

.ign-home-course-option:hover {
    background: #f7f7f7;
}

.ign-home-course-options::-webkit-scrollbar {
    width: 6px;
}

.ign-home-course-options::-webkit-scrollbar-thumb {
    background: #bbb;
    border-radius: 10px;
}
</style>

<div class="hero-form" id="contact-form-section">

    <form id="careerCounselingForm"
          method="POST"
          class="enquiry-form"
          action="{{ route('enquiry.store') }}">

        @csrf

        <h3>Get Free Career Counselling</h3>

        <p>
            Talk to our experts and choose the right<br>
            degree for your career.
        </p>

        <input type="hidden"
               name="source"
               value="{{ request()->is('universities/*') ? 'University Counselling Form' : 'Home Hero Form' }}">

        <input type="text"
               name="name"
               placeholder="Full Name"
               required>

        <input type="text"
               name="mobile"
               placeholder="Mobile Number"
               required>

        <input type="email"
               name="email"
               placeholder="Email Address"
               required>

        <!-- COURSE DROPDOWN -->
        <div class="ign-home-course-dropdown">

            <button type="button"
                    class="ign-home-course-trigger">

                <span class="ign-home-course-selected">
                    Select Program of Interest
                </span>

                <i class="bi bi-chevron-down"></i>

            </button>

            <div class="ign-home-course-menu">

                <div class="ign-home-course-search">

                    <input type="text"
                           class="ign-home-course-search-input"
                           placeholder="Search program..."
                           autocomplete="off">

                </div>

                <div class="ign-home-course-options">

                    @forelse ($courses ?? [] as $course)

                        <button type="button"
                                class="ign-home-course-option"
                                data-value="{{ $course }}">

                            {{ $course }}

                        </button>

                    @empty

                        <div style="padding:12px;font-size:13px;color:#777;">
                            No courses available.
                        </div>

                    @endforelse

                </div>

            </div>

            <input type="hidden"
                   name="course_name"
                   class="ign-home-course-value"
                   required>

        </div>

        <button class="btn-primary full" type="submit">
            Get Free Counselling
        </button>

        <small>
            We respect your privacy. No spam ever.
        </small>

    </form>

</div>


