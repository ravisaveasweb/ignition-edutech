<form id="applicationForm" class="university-application-form" method="POST"
    action="{{ route('university-application-form.store') }}">
    @csrf

    <div class="row">

        <input type="hidden" name="source" value="University Application Form">

        <div class="col-md-6">
            <label>First Name *</label>
            <input class="form-control" type="text" name="first_name" required>
        </div>

        <div class="col-md-6">
            <label>Last Name *</label>
            <input class="form-control" type="text" name="last_name" required>
        </div>

        <div class="col-md-6 mt-3">
            <label>Email *</label>
            <input class="form-control" type="email" name="email" required>
        </div>

        <div class="col-md-6 mt-3">
            <label>Mobile *</label>
            <input class="form-control" type="tel" name="phone" pattern="[0-9]{10}" required>
        </div>

        <div class="col-md-6 mt-3">
            <label>Programme *</label>
            <select class="form-control" name="programme" required>
                <option value="">Select Programme</option>
                <option>MBA Online</option>
                <option>MBA WX</option>
                <option>Bachelors Programs</option>
                <option>Certificate Programs</option>
                <option>Diploma Programs</option>
            </select>
        </div>

        <div class="col-md-6 mt-3">
            <label>City *</label>
            <input class="form-control" type="text" name="city" required>
        </div>

        <div class="col-md-6 mt-3">
            <label>Enrollment Timeline *</label>
            <select class="form-control" name="enrollment" required>
                <option value="">Select</option>
                <option>Immediate</option>
                <option>1 to 3 Months</option>
                <option>4 to 6 Months</option>
                <option>7 to 12 Months</option>
                <option>Not Decided Yet</option>
            </select>
        </div>

        <div class="col-12 mt-3">
            <label>Message</label>
            <textarea class="form-control" name="message" rows="4"></textarea>
        </div>

        <div class="col-12 mt-3">
            <div class="form-check">
                <input class="form-check-input mt-1" type="checkbox" name="consent" value="1" id="consent"
                    required>
                <label class="form-check-label" for="consent">
                    I authorize the university to contact me.
                </label>
            </div>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="tp-btn">
                Submit Application
            </button>
        </div>

    </div>
</form>
