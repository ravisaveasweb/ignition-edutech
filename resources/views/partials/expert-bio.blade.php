{{--
    This exact block (photo, name, title, two paragraphs) already appears
    verbatim on both /counselling/career-counselling and
    /counselling/dmit-test. Pulling it into one shared partial means a
    future edit only has to happen once. If it's still hard-coded on
    those two pages, swap their markup for @include('partials.expert-bio')
    too while you're in here.
--}}
<section class="psy-expert-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/team/ulka.png') }}" alt="Ulka S Padwalkar" class="psy-expert-photo">
                <p class="psy-expert-tag">Expert in Educational Consultancy</p>
                <h3 class="psy-expert-name">Ulka S Padwalkar</h3>
            </div>
            <div class="col-md-8">
                <p class="psy-expert-text">At Ignition Edutech, using scientific methodology, we empower students to discover their potential, gain career clarity, build the right profile, and achieve their educational dreams in India and across the globe. With Ignition Edutech, you're not just taking a test — you're laying the groundwork for a successful future. Our certified counsellors guide you through every pillar of the assessment and every step that follows.</p>
                <p class="psy-expert-text">With over 27+ years of experience in the education sector and mentoring, our proven results speak through the happy students and parents we have served. End-to-end support — from school to success — is not just a slogan but a commitment we live by every single day.</p>
            </div>
        </div>
    </div>
</section>
