<div class="tp-instructor-apply-from2">

    <form id="contactForm" method="POST" class="contact-form" action="{{ route('university-application-form.store') }}">
        @csrf

        <input type="hidden" name="source" value="Contact Hero Banner">

        <div class="tp-instructor-apply-heading">
            <h3 class="tp-instructor-apply-title">Send a Message</h3>
            <p class="tp-instructor-apply-desc">Discover a supportive community of online instructors.</p>
        </div>

        <div class="tp-instructor-apply-form-wrapper">
            <div class="row">

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="text" name="mobile" placeholder="Mobile Number" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tp-instructor-apply-input">
                        <textarea name="message" placeholder="Message" required></textarea>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tp-instructor-apply-input-btn">
                        <button class="tp-btn-inner" type="submit">Send message<span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12"
                                    fill="none">
                                    <path d="M1 11L6 6L1 1" stroke="#FEFEFE" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg></span></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
