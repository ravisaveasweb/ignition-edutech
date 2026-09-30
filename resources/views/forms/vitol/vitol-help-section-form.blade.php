<section class="vit-cta-band">
    <div class="container vit-cta-grid">
        <div class="vit-cta-copy">
            <h2>Ready to Transform Your Future?</h2>
            <p>Join thousands of learners who chose VITOL for career success. Apply now for VIT online degree and take
                the next step today.</p>
        </div>

        <form id="vitolHelpForm" class="vit-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
            @csrf
            <input type="hidden" name="source" value="Bennett Hero Form">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="text" name="mobile" placeholder="Mobile Number" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <select name="course_name" required>
                <option value="" disabled selected hidden>Select Program</option>
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
            </select>
            <button type="submit">Book Free Counselling</button>
            <small>We respect your privacy. No spam ever.</small>
        </form>

        <div class="vit-cta-cap">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
    </div>
</section>
