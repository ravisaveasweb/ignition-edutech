<form class="enquiry-form" action="{{ route('enquiry.store') }}" method="POST">

    @csrf

    <input type="hidden" name="source" value="NMIMS Online MBA Hero Section">

    {{-- <input type="hidden" name="university" value="NMIMS Online"> --}}

    <input type="text" class="form-control" name="name" placeholder="Full Name" required>

    <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" required>

    <input type="email" class="form-control" name="email" placeholder="Email Address" required>

    <select class="form-select tpd-select2" name="course_name" required>
        <option value="" selected disabled hidden>Select Program of Intrest</option>
        <option value="MBA">MBA</option>
        <option value="MCA">MCA</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="Data Science">Data Science</option>
    </select>

    <button type="submit" class="amt-btn-primary w-100 mt-4">

        Get Free Counselling

    </button>

    <p class="text-center amt-muted mt-2 mb-0" style="font-size:0.78rem;">
        We respect your privacy. No spam ever.
    </p>

</form>
