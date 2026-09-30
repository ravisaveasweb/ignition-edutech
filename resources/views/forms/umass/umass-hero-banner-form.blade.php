<form type="POST" id="umassHeroBannerForm" class="enquiry-form" action="{{ route('enquiry.store') }}">
    @csrf

    <input type="hidden" name="source" value="Umass Hero Form">

    <div class="mb-3">
        <input class="form-control kinetic-form-input" name="name" placeholder="Enter full name" type="text"
            required />
    </div>
    <div class="mb-3">
        <input class="form-control kinetic-form-input" name="email" placeholder="Enter Email Address" type="email"
            required />
    </div>
    <div class="mb-3">
        <input class="form-control kinetic-form-input" name="mobile" placeholder="Enter contact number" type="tel"
            required />
    </div>
    <div class="mb-4">
        <select class="mb-3 kinetic-form-select" name="course_name" required style="width: 100%;">
            <option value="" selected disabled>Select Specialized Course</option>
            <option value="MBA in Data Science & Business Analytics">MBA in Data Science &amp; Business Analytics
            </option>
            <option value="MCA in Cloud Computing & DevOps Architecture">MCA in Cloud Computing &amp; DevOps
                Architecture</option>
            <option value="BBA in Digital Marketing & E-Commerce">BBA in Digital Marketing &amp; E-Commerce</option>
        </select>
    </div>

    <button type="submit" class="btn-kinetic-primary w-100 py-3 mb-3 shadow-sm text-uppercase tracking-wider fw-bold">
        Secure Free Consultation
    </button>

    <!-- <p class="text-center text-muted mb-0" style="font-size: 11px; letter-spacing: 0.01em;">
        By submitting this form, you authorize our academic advisors to contact you regarding enrollment. View our <a class="text-decoration-underline text-secondary fw-semibold" href="#">Privacy Policy</a>.
    </p> -->
    <small>Your details stay private and are only used for admission assistance.</small>
</form>
