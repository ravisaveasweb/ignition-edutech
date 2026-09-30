<div class="manipal-hero-aside">
    <div class="manipal-enquiry-card">
        <div class="manipal-card-topline">Free Counselling</div>
        <h3>Shortlist the right Manipal Online program faster</h3>
        <p>Share your details and our team will help you compare eligibility, outcomes, and the best-fit learning route.
        </p>

        <form class="manipal-lead-form enquiry-form" action="{{ route('enquiry.store') }}" id="manipalHomeBannerForm"
            method="POST">
            @csrf
            <input type="hidden" name="store" value="Manipal Hero Form">

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
            <small>Your details stay private and are only used for admission assistance.</small>
        </form>
    </div>

    <div class="manipal-glance-card">
        <h4>What you can expect</h4>
        <ul>
            <li>1-on-1 program discovery support</li>
            <li>Guidance on eligibility and documentation</li>
            <li>Clarity on learning format and workload</li>
            <li>Help comparing degree and certificate options</li>
        </ul>
    </div>
</div>
