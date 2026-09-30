<form class="dpu-cta-form enquiry-form" id="dpuHomeBannerForm" action="{{ route('enquiry.store') }}" method="POST">
    @csrf
    <input type="hidden" name="source" value="DPU Hero Form">

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
    <button class="btn-primary full text-black" type="submit">
        Book Free Counselling
    </button>
    <small>Your information is used only to support counselling and admissions follow-up.</small>
</form>
