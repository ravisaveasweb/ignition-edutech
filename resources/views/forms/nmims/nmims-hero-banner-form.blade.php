<div class="hero-form">

    <form id="nmimsHomeBannerForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
        @csrf
        <h3>Get Free Counselling</h3>
        <p>Talk to our experts & choose the right program for your future.</p>
        <input type="hidden" name="source" value="NMIMS Hero Form">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="text" name="mobile" placeholder="Mobile Number" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <select class="mb-4" name="course_name" required>
            <option value="" disabled selected hidden>Select Program of Interest</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
        </select>

        <button class="btn-primary full" type="submit">
            Book Free Counselling
        </button>
        <small>We respect your privacy. No spam ever.</small>
    </form>
</div>
