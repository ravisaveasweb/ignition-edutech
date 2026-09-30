<form class="smu-lead-form enquiry-form" id="smuHomeBannerForm" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="SMU Hero Form">

    <input type="text" name="name" placeholder="Full Name" required>

    <input type="text" name="mobile" placeholder="Mobile Number" required>

    <input type="email" name="email" placeholder="Email Address" required>

    <select name="course_name" required>
        <option value="" disabled selected hidden>Select Program of Interest</option>
        <option value="MCA">MCA</option>
        <option value="MBA">MBA</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
    </select>
    <button class="btn-primary full" type="submit">
        Book Free Counselling
    </button>
    <small>We only use your details to help with counselling and admissions support.</small>
</form>
