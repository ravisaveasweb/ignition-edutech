<form id="vguHelpForm" class="d-flex flex-column gap-3 enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="VGU Help Form">

    <div class="mb-1">
        <input class="form-control io-card-input px-3" name="name" placeholder="Enter Name" required type="text" />
    </div>
    <div class="mb-1">
        <input class="form-control io-card-input px-3" name="email" placeholder="Enter Email Address" required
            type="email" />
    </div>
    <div class="mb-1">
        <input class="form-control io-card-input px-3" name="mobile" placeholder="Enter Phone Number" required
            type="text" />
    </div>
    <div class="mb-1">
        <select class="mb-1 text-black" name="course_name" required>
            <option value="" disabled selected hidden>Select Your Program of Intrest</option>
            <option value="MBA" class="text-dark">MBA (Global)</option>
            <option value="MCA" class="text-dark">MCA (Computer Science)</option>
            <option value="BBA" class="text-dark">BBA (Marketing)</option>
            <option value="M.Com" class="text-dark">M.Com (Accounting)</option>
        </select>
    </div>
    <button type="submit" class="io-btn-accent-modern w-100 py-3 text-uppercase fw-bold tracking-wider shadow-sm">
        Book Free Counselling
    </button>

    <small class="text-white text-center">
        <i class="fas fa-lock"></i>
        We respect your privacy. No spam ever.
    </small>
</form>
