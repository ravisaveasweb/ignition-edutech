<div class="hero-form">

    <form id="careerCounselingForm" method="POST" class="enquiry-form" action="{{ route('enquiry.store') }}">
        @csrf
        <h3>Get Free Career Counselling</h3>
        <p>Talk to our experts and choose the right<br> degree for your career.</p>
        <input type="hidden" name="source" value="Home Hero Form">

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
            Get Free Counselling
        </button>
        <small>We respect your privacy. No spam ever.</small>
    </form>
</div>
