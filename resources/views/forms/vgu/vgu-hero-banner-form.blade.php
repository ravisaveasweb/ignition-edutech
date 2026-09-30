<form id="vguHomeBannerForm" class="row g-3 enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="VGU Hero Form">

    <div class="col-12">
        <input name="name" class="form-control form-control-lg io-hero-input px-3" placeholder="Full Name"
            type="text" required />
    </div>
    <div class="col-md-12">
        <input name="email" class="form-control form-control-lg io-hero-input px-3" placeholder="Mobile Number"
            type="tel" required />
    </div>
    <div class="col-md-12">
        <input name="mobile" class="form-control form-control-lg io-hero-input px-3" placeholder="Email Address"
            type="email" required />
    </div>

    <div class="col-12">
        <select name="course_name" class="io-hero-input px-3 text-secondary"
            style="font-size: 1rem; min-height: calc(3.5rem + 2px);" required>
            <option value="" disabled selected hidden>Select Your Program</option>
            <option value="MBA" class="text-dark">MBA (Global)</option>
            <option value="MCA" class="text-dark">MCA (Computer Science)</option>
            <option value="BBA" class="text-dark">BBA (Marketing)</option>
            <option value="M.Com" class="text-dark">M.Com (Accounting)</option>
        </select>
    </div>
    <div class="col-12 pt-2">
        <button type="submit" class="io-btn-accent shadow-sm w-100 py-3 text-uppercase fw-bold tracking-wider">
            Book Free Counselling
        </button>
    </div>
</form>
