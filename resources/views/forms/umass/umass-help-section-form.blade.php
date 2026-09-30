<form id="umassHelpForm" method="POST" class="umass-form-body enquiry-form" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="Umass Help Form">
    <div class="row g-3">

        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 umass-minimal-input" name="name" placeholder="Enter Name"
                required type="text" />
        </div>

        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 umass-minimal-input" name="mobile"
                placeholder="Enter Mobile Number" required type="tel" />
        </div>

        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 umass-minimal-input" name="email"
                placeholder="Enter Email Address" required type="email" />
        </div>

        <div class="col-12">
            <select class="w-100 text-dark umass-minimal-input" name="course_name" required>
                <option value="" disabled selected hidden>Select Program of Interest</option>
                <option value="MBA">MBA (Global)</option>
                <option value="MCA">MCA (Computer Science)</option>
                <option value="BBA">BBA (Marketing)</option>
                <option value="M.Com">M.Com (Accounting)</option>
            </select>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn fs-5 border-0 w-100 umass-btn-dark-action">
                Submit Application Request
            </button>
        </div>

    </div>
</form>
