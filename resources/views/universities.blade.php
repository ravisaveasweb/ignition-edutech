<x-frontend-header />
<main>
    <!-- about banner area start -->
    <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg overlay" data-background="assets/img/breadcrumb/campus-breadcrumb.jpg"
            style="background-image: url(&quot;assets/img/breadcrumb/campus-breadcrumb.jpg&quot;);"></div>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list inner-after">
                            <span class="white"><a href="{{ route('home') }}"><svg width="17" height="14"
                                        viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z"
                                            fill="currentColor"></path>
                                    </svg></a></span>
                            <span class="white">Universities</span>
                        </div>
                        <h3 class="tp-breadcrumb__title color">Country’s Top Universities</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tp-filter-mt pt-30 pb-90">
        <div class="container">
            <div class="row">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="tp-course-grid-box tp-tab">
                            <ul class="nav nav-tabs bover-right" id="filtertab-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="art-tab" data-bs-toggle="tab"
                                        data-bs-target="#art" type="button" role="tab" aria-controls="art"
                                        aria-selected="false" tabindex="-1">
                                        United States
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="business-tab" data-bs-toggle="tab"
                                        data-bs-target="#business" type="button" role="tab"
                                        aria-controls="business" aria-selected="true">
                                        United Kingdom
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="data-tab" data-bs-toggle="tab" data-bs-target="#data"
                                        type="button" role="tab" aria-controls="data" aria-selected="false"
                                        tabindex="-1">
                                        Canada
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="finance-tab" data-bs-toggle="tab"
                                        data-bs-target="#finance" type="button" role="tab" aria-controls="finance"
                                        aria-selected="false" tabindex="-1">
                                        Australia
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="style-tab" data-bs-toggle="tab" data-bs-target="#style"
                                        type="button" role="tab" aria-controls="style" aria-selected="false"
                                        tabindex="-1">
                                        Ireland
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="TabContent">
                            <div class="tab-pane fade active show" id="art" role="tabpanel"
                                aria-labelledby="art-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-arizona.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a class="mb-30" href="#">University Of Arizona, US</a>
                                                    <p>The home of the Wildcats and the origin of world-changing
                                                        discovery. The University of Arizona is where “I wonder” becomes
                                                        “I did,” and the unimagined is achieved. Make a difference at
                                                        Arizona’s first university and the state’s land-grant
                                                        institution.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-arizona.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Arizona, US</a>
                                                    <p>The home of the Wildcats and the origin of world-changing
                                                        discovery. The University of Arizona is where “I wonder” becomes
                                                        “I did,” and the unimagined is achieved. Make a difference at
                                                        Arizona’s first university and the state’s land-grant
                                                        institution.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="business" role="tabpanel"
                                aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-liverpool.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Liverpool, UK</a>
                                                    <p>Our mission is to deliver world-class education and research, but
                                                        our goals go further than simply having an impact in our own
                                                        backyard. We also have a heartfelt commitment to making a
                                                        meaningful difference globally through the education and
                                                        research we provide, focusing on developing new opportunities
                                                        for international research, impact and education.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-liverpool.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Liverpool, UK</a>
                                                    <p>Our mission is to deliver world-class education and research, but
                                                        our goals go further than simply having an impact in our own
                                                        backyard. We also have a heartfelt commitment to making a
                                                        meaningful difference globally through the education and
                                                        research we provide, focusing on developing new opportunities
                                                        for international research, impact and education.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="data" role="tabpanel" aria-labelledby="data-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-canada.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Canada</a>
                                                    <p>University Canada West is a private, for-profit university in
                                                        British Columbia, Canada. It was founded in 2005 by David F.
                                                        Strong, the former president of the University of Victoria. UCW
                                                        was purchased in 2008 by the Eminata Group and in 2014 sold to
                                                        Global University Systems, its present owners.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-canada.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Canada</a>
                                                    <p>University Canada West is a private, for-profit university in
                                                        British Columbia, Canada. It was founded in 2005 by David F.
                                                        Strong, the former president of the University of Victoria. UCW
                                                        was purchased in 2008 by the Eminata Group and in 2014 sold to
                                                        Global University Systems, its present owners.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-australia.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">Macquarie University Australia</a>
                                                    <p>Macquarie University is a public research university based in
                                                        Sydney, Australia, in the suburb of Macquarie Park. Founded in
                                                        1964 by the New South Wales Government, it was the third
                                                        university to be established in the metropolitan area of
                                                        Sydney.Ranked among the top two per cent of universities in the
                                                        world, and with a 5-star QS rating</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-australia.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">Macquarie University Australia</a>
                                                    <p>Macquarie University is a public research university based in
                                                        Sydney, Australia, in the suburb of Macquarie Park. Founded in
                                                        1964 by the New South Wales Government, it was the third
                                                        university to be established in the metropolitan area of
                                                        Sydney.Ranked among the top two per cent of universities in the
                                                        world, and with a 5-star QS rating</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="style" role="tabpanel" aria-labelledby="style-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-ireland.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Ireland</a>
                                                    <p>The home of the Wildcats and the origin of world-changing
                                                        discovery. The University of Arizona is where “I wonder” becomes
                                                        “I did,” and the unimagined is achieved. Make a difference at
                                                        Arizona’s first university and the state’s land-grant
                                                        institution.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-course-item p-relative fix mb-30">
                                            <div class="tp-course-thumb">
                                                <a href="#"><img class="course-pink"
                                                        src="assets/img/campus/university-ireland.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="tp-course-content">
                                                <h4 class="tp-course-title">
                                                    <a href="#">University Of Ireland</a>
                                                    <p>The home of the Wildcats and the origin of world-changing
                                                        discovery. The University of Arizona is where “I wonder” becomes
                                                        “I did,” and the unimagined is achieved. Make a difference at
                                                        Arizona’s first university and the state’s land-grant
                                                        institution.</p>
                                                </h4>
                                            </div>
                                            <div class="tp-course-btn">
                                                <a href="#">Apply Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <!-- brand-area-start -->
    <section class="brand-area pt-0 mb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tp-brand-2-content mb-40">
                        <h4 class="tp-brand-2-title">Who will <br> You Learn
                            <span>With?
                                <img class="tp-underline-shape-10 wow bounceIn" data-wow-duration="1.5s"
                                    data-wow-delay=".4s" src="assets/img/unlerline/brand-2-svg-1.svg" alt="">
                            </span>
                        </h4>
                        <p>You can list your partners or instructors's <br> brands here to show off your site's</p>
                        <div class="tp-brand-2-btn">
                            <a class="tp-btn-round" href="#">View All Patners</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tp-brand-2-wrapper">
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-1.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-2.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-3.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-4.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-5.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-6.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-7.png') }}" alt="">
                        </div>
                        <div class="tp-brand-2-item">
                            <img src="{{ asset('img/brand/brand-2-logo-8.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand-area-end -->


</main>


<x-frontend-footer />
