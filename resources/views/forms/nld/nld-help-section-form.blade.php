<form id="nldHelpForm" class="nld-cta-form enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="NLD Help Form">

    <div class="input-group">
        <input type="text" name="name" placeholder="Full Name" required>
    </div>

    <div class="input-group">
        <input type="text" name="mobile" placeholder="Mobile Number" required>
    </div>

    <div class="input-group">
        <input type="email" name="email" placeholder="Email Address" required>
    </div>

    <div class="input-group">
        <select class="mb-1 text-black" name="course_name" required>
            <option value="" disabled selected hidden>Select Program of Interest</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
        </select>
    </div>

    <button class="btn btn-white btn-rounded w-100 bg-white text-dark fw-bold" type="submit">Book Free
        Counselling</button>

    <small class="text-white text-center">
        <i class="fas fa-lock"></i>
        We respect your privacy. No spam ever.
    </small>
</form>
