<form class="row g-3 enquiry-form" type="POST" id="bennettHomeBannerForm" action="{{ route('enquiry.store') }}">
    @csrf
    <input type="hidden" name="source" value="Bennett Hero Form">

    <div class="col-12">
        <input class="form-control form-control-custom" name="name" placeholder="Enter Name" type="text" />
    </div>
    <div class="col-md-12">
        <input class="form-control form-control-custom" name="mobile" placeholder="Enter Mobile Number"
            type="tel" />
    </div>
    <div class="col-md-12">
        <input class="form-control form-control-custom" name="email" placeholder="Enter Email" type="email" />
    </div>
    <div class="col-12">
        <select class="mb-3 w-100 rounded border-0" name="course_name">
            <option value="" selected disabled hidden>Select Program of Intrest</option>
            <option value="MBA">MBA</option>
            <option value="MCA">MCA</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="Data Science">Data Science</option>
        </select>
    </div>
    <div class="col-12 pt-2">
        <button type="submit" class="btn w-100 font-headline border-0 rounded-pill bennett-get-started-btn">Get Started
            Now</button>
    </div>
</form>
