
@props(['courses' => []])

<div id="ignUniversityEnquiryPopup"
     class="ign-enquiry-popup-overlay"
     aria-hidden="true">

    <div class="ign-enquiry-popup"
         role="dialog"
         aria-modal="true"
         aria-labelledby="ignEnquiryPopupTitle"
         aria-describedby="ignEnquiryPopupDescription"
         tabindex="-1">

        {{-- Close Button --}}
        <button type="button"
                class="ign-enquiry-popup-close"
                aria-label="Close enquiry popup">
            <i class="bi bi-x-lg"></i>
        </button>

        {{-- Popup Header --}}
        <div class="ign-enquiry-popup-header">
            <h3 id="ignEnquiryPopupTitle">Get Free Counselling</h3>
            <p id="ignEnquiryPopupDescription">
                Talk to our experts and choose the right program for your future.
            </p>
        </div>

        {{-- Enquiry Form --}}
        <form id="ignUniversityEnquiryForm"
              action="{{ route('enquiry.store') }}"
              method="POST">

            @csrf

            <input type="hidden"
                   name="source"
                   id="ignEnquirySource"
                   value="University Popup">

            {{-- Full Name --}}
            <div class="ign-enquiry-popup-field">
                <input type="text"
                       name="name"
                       placeholder="Full Name"
                       aria-label="Full Name"
                       maxlength="255"
                       autocomplete="name"
                       required>
            </div>

            {{-- Mobile Number --}}
            <div class="ign-enquiry-popup-field">
                <input type="tel"
                       name="mobile"
                       placeholder="Mobile Number"
                       aria-label="Mobile Number"
                       inputmode="numeric"
                       pattern="[0-9]{10}"
                       maxlength="10"
                       autocomplete="tel"
                       title="Please enter a valid 10-digit mobile number"
                       required>
            </div>

            {{-- Email Address --}}
            <div class="ign-enquiry-popup-field">
                <input type="email"
                       name="email"
                       placeholder="Email Address"
                       aria-label="Email Address"
                       maxlength="255"
                       autocomplete="email"
                       required>
            </div>

            {{-- Searchable Program Dropdown --}}
            <div class="ign-enquiry-popup-field">
                <div class="ign-enquiry-program-dropdown">

                    <button type="button"
                            class="ign-enquiry-program-trigger"
                            aria-expanded="false"
                            aria-controls="ignEnquiryProgramMenu">

                        <span class="ign-enquiry-program-selected">
                            Select Program of Interest
                        </span>

                        <i class="bi bi-chevron-down" aria-hidden="true"></i>
                    </button>

                    <input type="hidden"
                           name="program"
                           class="ign-enquiry-program-value">

                    <div class="ign-enquiry-program-menu"
                         id="ignEnquiryProgramMenu">

                        <input type="text"
                               class="ign-enquiry-program-search"
                               placeholder="Search program..."
                               aria-label="Search available programs"
                               autocomplete="off">

                        <div class="ign-enquiry-program-options">

                            @forelse($courses as $course)
                                <button type="button"
                                        class="ign-enquiry-program-option"
                                        data-value="{{ $course }}">
                                    {{ $course }}
                                </button>
                            @empty
                                <div class="ign-enquiry-program-empty">
                                    No programs available
                                </div>
                            @endforelse

                            <div class="ign-enquiry-program-no-results" hidden>
                                No programs found
                            </div>

                        </div>
                    </div>
                </div>

                <p class="ign-enquiry-program-error"
                   role="alert"
                   hidden>
                    Please select a program.
                </p>
            </div>

            {{-- Submit Button --}}
            <button type="submit"
                    class="ign-enquiry-popup-submit">
                Book Free Counselling
            </button>

            {{-- Privacy Note --}}
            <p class="ign-enquiry-popup-note">
                <i class="bi bi-shield-check" aria-hidden="true"></i>
                We respect your privacy. No spam ever.
            </p>

        </form>

        {{-- Success Message --}}
        <div class="ign-enquiry-popup-success"
             role="status"
             aria-live="polite"
             hidden>

            <div class="ign-enquiry-popup-success-icon">
                <i class="bi bi-check-lg" aria-hidden="true"></i>
            </div>

            <h3>Thank You!</h3>

            <p>
                Your enquiry has been submitted successfully.
                Our counselling team will contact you shortly
                to help you choose the right program.
            </p>

            <span>
                Thank you for choosing Ignition Edutech
            </span>

        </div>

    </div>
</div>
