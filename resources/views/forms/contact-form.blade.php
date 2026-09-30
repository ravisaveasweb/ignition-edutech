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
                        <input type="text" name="name" placeholder="Full Name" required minlength="3"
                            pattern="[A-Za-z ]{2,}" title="Name must contain at least 2 letters and no numbers."
                            oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="text" name="mobile" placeholder="Mobile Number" required maxlength="10"
                            inputmode="numeric" pattern="[0-9]{10}"
                            title="Mobile number must contain exactly 10 digits."
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-instructor-apply-input">
                        <input type="text" name="subject" placeholder="Current Class / Highest Qualification" required>
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
