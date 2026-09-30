<x-frontend-header />

<main class="mt-5 pt-5 umass-page">
    <!-- hero.php -->
    <!-- Removed overflow-hidden to fix dropdown cutting/clipping bugs -->
    <section class="mass-hero-area position-relative">
        <div class="mass-hero-overlay"></div>

        <div class="container py-lg-5 position-relative mass-hero-content">
            <div class="row align-items-center g-5">

                <div class="col-lg-7">
                    <div class="kinetic-badge mb-4 shadow-sm">
                        <span class="material-symbols-outlined fs-6">verified</span>
                        UGC-ENTITLED &amp; ACCREDITED
                    </div>

                    <h1 class="hero-title mb-4 text-white">
                        Launch Your Next Career Leap with <span class="mass-hero-accent">Global Degree Programs</span>
                    </h1>

                    <p class="lead mb-4 fs-5 mass-hero-lead">
                        Earn premium, industry-vetted university degrees completely online. Accelerate your professional
                        growth with a flexible, world-class curriculum engineered for corporate success.
                    </p>

                    <div class="d-flex align-items-center gap-3 mt-4">
                        <div class="kinetic-avatar-stack d-flex align-items-center">
                            <img alt="Alumni Member" class="kinetic-avatar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGvcuIp4SiCQCNfaH5iCcD6nls0I5RPxgtXGYRhrgGVpL986WRci8Zccn8CjQ-fTf7BBgFgxC1TFM7vmz0Pm67PoYFcOD3nTCX5kBUaVUDMWFYMkZCNaUFjuoLFkNVw3UsDzjva3ARZhOpfjLvl1CaH6NfejnYR95kVj-YEFYSmSWICUGpmQ0ZlqlK4ogGlDRqtty2BFTRWmap_E2c3PTiQH8uuO7ZRtOvEjQRzqBnnTaUgXDO-rvlfNBjaIOUe3hfc85NzYBArnw" />
                            <img alt="Alumni Member" class="kinetic-avatar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu_nBO9jFNxg0RlBpb7V731wpGogPMWqsdv5wtPKDqCNCsWZOcyPd73eK5k7nwxGBNbp8c4rz_oBOOlvqSGtxQmP0UrNk3CxgEHCaKx-8NSISfHB9-R9Hiedytt7CfniMuN9OqJ70KdkboDr5wT0y2HpylUmLY-WUZoMv-NxSGFiS4YcZVz6uz16HzGkjRJDP7g4OrCZYSGAhSxRTqb5ZXM1xfhb336p-ohpeXcHKyWb_Uy8xA1VBI_nF68fASunHb8pzPovL_ZJo" />
                            <img alt="Alumni Member" class="kinetic-avatar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBrGyxg-xRsO5YmL_Hh1UouEtYXl-c-_TF8V8OQEcYGXMccbfghFHiIKbFsq-hZEdl9KdaZFEvx6nylLwf2_BEu2mwCh1rZuboZkKBsvwaJYTtdcu0ts5XJyFlHFMLvatcXkHvqXJGw3gbFEfTzYVr0j0Wy04f6Xt-eLbttDGjYVcfi_0Rimw7gHBDKPJqaQxsJpNnr24ls7zfBVIgMMxndYuNsgJ2BSGi1-YxgfRAVcXd06HIK090WYko920CWeMt5FONZ7U2ziY" />
                        </div>
                        <span class="text-white-50 fw-semibold fs-6">Join 50,000+ Alumni Scaling Top-Tier
                            Companies</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="kinetic-card p-4 p-md-5 border-0 mass-form-container shadow-lg">

                        @includeIf('forms.umass.umass-hero-banner-form')
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- features.php -->
    <section class="py-5 bg-light">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 class="fw-bold fs-1 mb-3">The UMASS Online Distinction</h2>
                <!-- <div class="mx-auto" style="width: 60px; height: 5px; background-color: var(--primary-color); border-radius: 3px;"></div> -->
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="kinetic-card p-4 p-lg-5 h-100 text-center shadow-sm"
                        style="border-top: 4px solid var(--accent-color); background: #ffffff;">
                        <div class="p-3 rounded-4 d-inline-block mb-4"
                            style="background-color: #c5ef57 !important; color: #000000;">
                            <span class="material-symbols-outlined fs-1 align-middle">verified_user</span>
                        </div>
                        <h4 class="fw-bold mb-3">UGC-Entitled Value</h4>
                        <p class="text-muted mb-0">Fully approved by the University Grants Commission (UGC). Graduate
                            with a prestigious, legally recognized degree holding equal status to physical on-campus
                            qualifications worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kinetic-card p-4 p-lg-5 h-100 text-center shadow-sm"
                        style="border-top: 4px solid var(--accent-color); background: #ffffff;">
                        <div class="p-3 rounded-4 d-inline-block mb-4"
                            style="background-color: #c5ef57 !important; color: #000000;">
                            <span class="material-symbols-outlined fs-1 align-middle">work_history</span>
                        </div>
                        <h4 class="fw-bold mb-3">End-to-End Career Acceleration</h4>
                        <p class="text-muted mb-0">Bridge the employment gap with our dedicated job-placement cell.
                            Benefit from technical resume reviews, optimized portfolio grooming, mock panels, and
                            exclusive recruitment access.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kinetic-card p-4 p-lg-5 h-100 text-center shadow-sm"
                        style="border-top: 4px solid var(--accent-color); background: #ffffff;">
                        <div class="p-3 rounded-4 d-inline-block mb-4"
                            style="background-color: #c5ef57 !important; color: #000000;">
                            <span class="material-symbols-outlined fs-1 align-middle">school</span>
                        </div>
                        <h4 class="fw-bold mb-3">Executive Corporate Faculty</h4>
                        <p class="text-muted mb-0">Learn complex real-world logic directly from industry veterans, data
                            architects, and PhD professors who translate theoretical paradigms into business-ready case
                            studies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- programs.php -->
    <section class="py-5">
        <div class="container py-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-4">
                <div style="max-width: 600px;">
                    <h2 class="fw-bold fs-1 mb-2">Explore Industry-Vetted Programs</h2>
                    <p class="text-muted fs-5 mb-0">Select a high-demand domain path configured precisely around the
                        modern enterprise economy.</p>
                </div>
                <a class="text-dark fw-bold text-decoration-none d-flex align-items-center gap-2 pb-2 umass-view-all"
                    href="#">
                    View All Specializations <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
            <div class="row g-4">
                <!-- MBA -->
                <div class="col-md-4">
                    <div class="kinetic-card h-100 shadow-sm border-0 bg-white overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img alt="Data Science Infrastructure" class="w-100 h-100 object-fit-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaiQTn4mpbhzYWVyi5zoGCQSsovvHQbsGABGqrgFtRSDapklatr4H8Slzc4bLR-Is8SWhLaU3cMqnReEzg5jaxAPfDKvgi8r7o1Pc_yaDxrlQjOzFMuNuFDuhW_9xRE37A-PcmbOrePP-LwYys-3XVDZmlRfEX0WpNb3E9aBJJHOWsuj9To5wC9YRUvDjodS-BcFp6NLxkVsh0iW5QHFbWX90ruI5VM1cQn1oixKOXYpX5xTc6yMGKHbqgoiYEC0rvPAhhY7x-5V4" />
                            <div class="position-absolute top-0 start-0 p-3 d-flex gap-2">
                                <span class="custom-badge">2 Years</span>
                                <span class="custom-white-badge">Post-Grad</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="fw-bold mb-3 text-dark">MBA in Data Science</h4>
                            <div class="d-flex align-items-center gap-2 text-muted mb-4">
                                <span class="material-symbols-outlined text-secondary">analytics</span>
                                <span class="small fw-semibold">Predictive Modeling, Big Data &amp; Decisions</span>
                            </div>
                            <button
                                class="btn-kinetic-outline w-100 d-flex align-items-center justify-content-center gap-2 py-25">
                                <span class="material-symbols-outlined fs-5">download</span>
                                Download Curriculum Brochure
                            </button>
                        </div>
                    </div>
                </div>
                <!-- MCA -->
                <div class="col-md-4">
                    <div class="kinetic-card h-100 shadow-sm border-0 bg-white overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img alt="Cloud Infrastructure Engineering" class="w-100 h-100 object-fit-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5tJawq14OvxYNocqYwc6R3OQ3-OosehSMe8tiabtompfmvG0-xeHd0x9kC4fMil_50avXHy64vAfNBrLb_CeaMV5DHra2Rgx_D--yR_H7KlLxPV9AI8rIuDHq1u8TpMuqUIYNBxMymoL4eXef59QgVQ095y7QNybyhXUcxYa-_bP2R3aAfnFjcgXJ9rCAtRmNu9aCh_nUeaQ3LldUfQWpYKXKxJDMjdfmyUz3tTUD16qJT8djR_rOeE91czQKuBsnEM_ncDhy68M" />
                            <div class="position-absolute top-0 start-0 p-3 d-flex gap-2">
                                <span class="custom-badge">2 Years</span>
                                <span class="custom-white-badge">Post-Grad</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="fw-bold mb-3 text-dark">MCA in Cloud Computing</h4>
                            <div class="d-flex align-items-center gap-2 text-muted mb-4">
                                <span class="material-symbols-outlined text-secondary">cloud</span>
                                <span class="small fw-semibold">AWS, Advanced Azure &amp; System Automation</span>
                            </div>
                            <button
                                class="btn-kinetic-outline w-100 d-flex align-items-center justify-content-center gap-2 py-25">
                                <span class="material-symbols-outlined fs-5">download</span>
                                Download Curriculum Brochure
                            </button>
                        </div>
                    </div>
                </div>
                <!-- BBA -->
                <div class="col-md-4">
                    <div class="kinetic-card h-100 shadow-sm border-0 bg-white overflow-hidden">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img alt="Growth Engineering Campaign Management" class="w-100 h-100 object-fit-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcARmL2A9qBC7reb59MIMMRdRSmr-wOgfiWVqQyCG1sW30eep6FBoB_ELFoAezU2Ikb7eCa0qEmOAsrHi_lQpYIHvpINCJg-UR_4GUkvALxSsW0xhraABvTZc00XptBfApbyxKUiIkDwmD0B16ViMBSbAHR_6sKEdL2iaEYpODksnTUQOoqxagGHB8Nk7NmklEeV2NrLxZne4gXjANbleUU7RG9_CpNqjA6Biiizx7RvORWtsXBpcA4TD-TPJqBLVeZjnVqqLMtqk" />
                            <div class="position-absolute top-0 start-0 p-3 d-flex gap-2">
                                <span class="custom-badge">3 Years</span>
                                <span class="custom-white-badge">Under-Grad</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="fw-bold mb-3 text-dark">BBA in Digital Marketing</h4>
                            <div class="d-flex align-items-center gap-2 text-muted mb-4">
                                <span class="material-symbols-outlined text-secondary">ads_click</span>
                                <span class="small fw-semibold">Performance Metrics, SEO Automation &amp; Scale</span>
                            </div>
                            <button
                                class="btn-kinetic-outline w-100 d-flex align-items-center justify-content-center gap-2 py-25">
                                <span class="material-symbols-outlined fs-5">download</span>
                                Download Curriculum Brochure
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- learning-experience.php -->
    <section class="py-5 bg-white">
        <div class="container text-center py-3">
            <div class="mb-5">
                <h2 class="fw-bold fs-1 mb-2">The Hybrid LMS Architecture</h2>
                <p class="text-muted fs-5 mx-auto" style="max-width: 650px;">A performance-tuned learning management
                    experience structurally customized for working experts.</p>
            </div>
            <div class="row g-5">
                <div class="col-md-4 step-col">
                    <div class="learning-step shadow-sm">1</div>
                    <h4 class="fw-bold mb-3 text-dark">Asynchronous Video Hub</h4>
                    <p class="text-muted px-lg-4">Engage with premium high-definition dynamic visual components and
                        synchronized technical literature assignments 24/7.</p>
                </div>
                <div class="col-md-4 step-col">
                    <div class="learning-step shadow-sm">2</div>
                    <h4 class="fw-bold mb-3 text-dark">Live Interactive Webinars</h4>
                    <p class="text-muted px-lg-4">Connect over weekend breakout sessions directly with software
                        engineering leads, marketing masters, and case managers.</p>
                </div>
                <div class="col-md-4 step-col">
                    <div class="learning-step shadow-sm">3</div>
                    <h4 class="fw-bold mb-3 text-dark">Continuous Agile Auditing</h4>
                    <p class="text-muted px-lg-4">Assess capability tracking profiles dynamically using industry
                        sandbox assignments, structured test arrays, and live database queries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials.php -->
    <section class="py-5 bg-light">
        <div class="container py-3">
            <div class="mb-5">
                <h2 class="fw-bold fs-1 mb-2">Validated Alumni Success</h2>
                <p class="text-muted fs-5">See how industry professionals engineered their technical roles via UMASS
                    Online.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="kinetic-card p-4 p-md-4 h-100 success-card bg-white shadow-sm border-0">
                        <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
                            <img alt="Alumni Portrait Profile" class="rounded-circle object-fit-cover shadow-sm"
                                height="80"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqAT3R9BtCUyYwx2nJiNLaCDTsyDE-_L5yCm-dDMyklkppmNFoxecW78crLTPR6gjXHUsj__76ZmiRA6vI6wh6jbF_RxpUCjSS_Fbfe1gqHC6GpDThREw1JXNSvWTtrNz84axpq8w-xU1QYXkM43g2eDGLqeMm3lVL-_51Upv9529-OcF-rgWebriNSnbJWXKJZYD6eUQLarRHOQhvY1wFAsbGByiRiPptolmOzJ10KPwpFoKHVaLzWJMF2Oy2g1KoJcOD_chT1w4"
                                width="80" />
                            <div>
                                <p class="fst-italic fs-5 text-dark mb-4 lh-base">"The comprehensive data curriculum
                                    completely streamlined how I interface with system architectures. The modular pacing
                                    aligned with my enterprise deployment shifts seamlessly."</p>
                                <h5 class="fw-bold text-dark mb-0">Rahul Sharma</h5>
                                <p class="text-muted small mb-0 fw-semibold">Senior Systems Analyst at TechCorp</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kinetic-card p-4 p-md-4 h-100 success-card bg-white shadow-sm border-0">
                        <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
                            <img alt="Alumni Portrait Profile" class="rounded-circle object-fit-cover shadow-sm"
                                height="80"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXmRkMywgqRreqtMx7yHKIIq75i1krG6zMsHeCjbmkTGd4r1YnNe9-rhCx5AMNLmaE5YE0r8gONKtZpb77XDKtLoKIVpV-T3glTHbAEUdcJKRh0buGlxf1Ss8-sfi9npwEc4e-3bGNFtbf_nbh3kc7BVEXqqT25Is6kaz3HuVrqC3viB6cEDPKVDxzcqcP6-P4maqa6sI17CHOv9ztZLJPXSWu7FojzuvrNXpjanPTbN7ZKEI2KA8I7rylEWvfF8b0j5PBGOUf0_s"
                                width="80" />
                            <div>
                                <p class="fst-italic fs-5 text-dark mb-4 lh-base">"This ecosystem delivered exact
                                    operational growth frameworks that transformed my strategic skill sets. The faculty
                                    insights helped our performance channels scale rapidly."</p>
                                <h5 class="fw-bold text-dark mb-0">Anjali Mehta</h5>
                                <p class="text-muted small mb-0 fw-semibold">Director of Growth at Global Media</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="umass-section umass-split-section">
        <div class="container-xl px-4">
            <div class="row align-items-center g-5">

                <div class="col-12 col-lg-6 umass-hero-text-wrapper">
                    <span class="umass-badge-accent mb-3">Admissions Open 2026</span>
                    <h2 class="display-4 fw-black mb-4 umass-split-heading">
                        Ready to Take the Next Step in Your Career?
                    </h2>
                    <p class="umass-split-desc mb-4">
                        Explore UMASS Online's UGC-recognized degree programs and gain the knowledge, skills, and
                        qualifications needed to thrive in today's competitive job market.
                    </p>

                    <ul class="umass-feature-list d-flex flex-column gap-3 mt-2">
                        <li class="umass-feature-item gap-3">
                            <span class="umass-feature-icon">✓</span> 100% Online Flexible Learning
                        </li>
                        <li class="umass-feature-item gap-3">
                            <span class="umass-feature-icon">✓</span> UGC-Recognized Global Degrees
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <div class="umass-solid-form-card">

                        <div class="umass-form-accent-header">
                            <h4 class="m-0 fs-5 fw-bold text-center text-white">Request Free Counselling</h4>
                        </div>

                        @includeIf('forms.umass.umass-help-section-form')

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- footer.php -->

<x-frontend-footer />

<script>
    // Smooth appearance on scroll 
    document.addEventListener("DOMContentLoaded", function() {
        const observerOptions = {
            threshold: 0.1
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = "0";
            section.style.transform = "translateY(20px)";
            section.style.transition = "all 0.8s ease-out";
            observer.observe(section);
        });
    });
</script>
