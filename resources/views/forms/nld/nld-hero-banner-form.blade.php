<form id="nldHomeBannerForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="NLD Hero Form">


    <div class="mb-3">
        <label class="nld-form-label mb-2">Full Name</label>
        <input class="form-control nld-form-input" type="text" name="name" placeholder="Enter Full Name" required>
    </div>
    <div class="mb-3">
        <label class="nld-form-label mb-2">Email Address</label>
        <input class="form-control nld-form-input" type="email" name="email" placeholder="Enter Email Address"
            required>
    </div>
    <div class="mb-3">
        <label class="nld-form-label mb-2">Phone Number</label>
        <input class="form-control nld-form-input" type="text" name="mobile" placeholder="Enter Mobile Number"
            required>
    </div>
    <div class="mb-4">
        <label class="nld-form-label mb-2">Program of Interest</label>
        <select name="course_name" class="nld-form-input mb-4" required>
            <option value="" disabled selected hidden>Select Program of Interest</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
        </select>
    </div>

    <button class="nld-btn-submit w-100 py-3" type="submit">Enquiry Now</button>
    <small class="text-white mt-3">Your details are used only for counselling and admission assistance.</small>
</form>
