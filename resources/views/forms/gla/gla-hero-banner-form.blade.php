    <form id="glaHomeBannerForm" class="row enquiry-form" method="POST" action="{{ route('enquiry.store') }}">
        @csrf
        <input type="hidden" name="source" value="GLA Home Form">

        <div class="mb-3">
            <input class="form-control jo-form-control py-25 px-3" name="name" placeholder="Enter full name"
                type="text" required />
        </div>

        <div class="mb-3">
            <input class="form-control jo-form-control py-25 px-3" name="email" placeholder="Enter email address"
                type="email" required />
        </div>

        <div class="mb-3">
            <input class="form-control jo-form-control py-25 px-3" name="mobile" placeholder="Enter mobile number"
                type="tel" required />
        </div>

        <div class="mb-3">
            <select name="course_name" required>
                <option value="" selected disabled>Select Program of Intrest</option>
                <option value="Full-Stack Web Development">Full-Stack Web Development</option>
                <option value="Advanced UI/UX Architecture">Advanced UI/UX Architecture</option>
                <option value="Cloud Systems & DevOps">Cloud Systems &amp; DevOps</option>
                <option value="Data Engineering & Analytics">Data Engineering &amp; Analytics</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark w-100 py-3 rounded-3 fw-bold">
            Book Free Counselling
        </button>
        <small>Your details stay private and are only used for admission assistance.</small>
    </form>
