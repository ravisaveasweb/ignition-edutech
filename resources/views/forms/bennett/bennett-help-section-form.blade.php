<form id="bennettHelpForm" class="enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <div class="row g-3">

        <input type="hidden" name="source" value="Bennett Help Form">

        <!-- Full Name Element -->
        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 bu-input-field" name="name" placeholder="Enter Full Name"
                required type="text" />
        </div>

        <!-- Mobile Entry Element -->
        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 bu-input-field" name="mobile" placeholder="Enter Mobile Number"
                required type="tel" />
        </div>

        <!-- Electronic Mail Address Element -->
        <div class="col-12">
            <input class="form-control py-3 px-3 w-100 bu-input-field" name="email" placeholder="Enter Email Address"
                required type="email" />
        </div>

        <!-- Academic Program Interface Element -->
        <div class="col-12">
            <select class="w-100 text-muted bu-input-field" name="course_name" required>
                <option value="" disabled selected hidden>Select Program of Interest</option>
                <option value="MBA" class="text-dark">MBA</option>
                <option value="MCA" class="text-dark">MCA</option>
                <option value="BBA" class="text-dark">BBA</option>
                <option value="M.Com" class="text-dark">M.Com</option>
            </select>
        </div>

        <!-- Interactive Control Mechanism Layer -->
        <div class="col-12 mt-4">
            <button type="submit" class="btn w-100 py-3 border-0 bu-btn-action">
                Get Free Counselling
            </button>
        </div>

    </div>
</form>
