<x-frontend-header />
<main>
    <section class="tp-breadcrumb__area pt-190 pb-100 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg overlay" data-background="{{ asset('img/breadcrumb/campus-breadcrumb.jpg') }}"
            style="background-image: url(&quot;{{ asset('img/breadcrumb/campus-breadcrumb.jpg') }}&quot;);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list inner-after">
                            <span class="white"><a href="{{ route('home') }}">Home</a></span>
                            <span class="white">Application Form</span>
                        </div>
                        <h3 class="tp-breadcrumb__title color">University Application Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tp-application-area grey-bg pt-70 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div id="responseMsg" class="mb-3"></div>

                    @includeIf('forms.university-application-form')

                </div>
            </div>
        </div>
    </section>
</main>
<x-frontend-footer />
<script>
    $(document).ready(function() {

        $('.university-application-form').submit(function(e) {

            e.preventDefault();

            var formData = $(this).serialize();

            // Loading SweetAlert
            Swal.fire({
                title: "Submitting Application...",
                text: "Please wait while we process your application.",
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({

                url: "{{ route('university-application-form.store') }}",

                type: "POST",

                data: formData,

                success: function(response) {

                    if (response.success) {

                        Swal.fire({
                            icon: "success",
                            title: "Application Submitted",
                            text: response.message ??
                                "Your application has been submitted successfully."
                        });

                        $('#applicationForm')[0].reset();

                    } else {

                        Swal.fire({
                            icon: "error",
                            title: "Submission Failed",
                            text: response.message ??
                                "There was an error submitting your application. Please try again."
                        });

                    }

                },

                error: function(xhr) {

                    let message =
                        "There was an error submitting your application. Please try again.";

                    // Laravel validation errors
                    if (xhr.responseJSON) {

                        if (xhr.responseJSON.errors) {

                            message = Object.values(xhr.responseJSON.errors)
                                .flat()
                                .join("\n");

                        } else if (xhr.responseJSON.message) {

                            message = xhr.responseJSON.message;

                        }

                    }

                    Swal.fire({
                        icon: "error",
                        title: "Submission Failed",
                        text: message
                    });

                }

            });

        });

    });
</script>
