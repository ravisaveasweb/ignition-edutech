<form id="glaHelpForm" method="POST" class="p-5 jo-glass-form enquiry-form" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="GLA Help Form">

    <div class="row g-3">

        <!-- Name Field -->
        <div class="col-12">
            <input class="form-control io-card-input py-3 px-3 w-100 jo-form-field" name="name"
                placeholder="Full Name" required type="text" />
        </div>

        <!-- Phone Field -->
        <div class="col-12">
            <input class="form-control io-card-input py-3 px-3 w-100 jo-form-field" name="mobile"
                placeholder="Mobile Number" required type="tel" />
        </div>

        <!-- Email Field -->
        <div class="col-12">
            <input class="form-control io-card-input py-3 px-3 w-100 jo-form-field" name="email"
                placeholder="Email Address" required type="email" />
        </div>

        <!-- Program Select Field -->
        <div class="col-12">
            <select class=" w-100 text-muted jo-form-field" name="course_name" required>
                <option value="" disabled selected hidden>Select Program of Interest</option>
                <option value="MBA" class="text-dark">MBA (Global)</option>
                <option value="MCA" class="text-dark">MCA (Computer Science)</option>
                <option value="BBA" class="text-dark">BBA (Marketing)</option>
                <option value="M.Com" class="text-dark">M.Com (Accounting)</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="col-12 mt-4 text-center">
            <button type="submit" class="btn btn-block  border-0  jo-btn-submit">
                Get Free Counselling
            </button>
        </div>

    </div>
</form>
