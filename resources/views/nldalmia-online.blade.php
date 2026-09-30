<x-frontend-header />

<!-- Font & Icon Assets -->
<link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&amp;family=Hanken+Grotesk:wght@400;500;600&amp;display=swap"
    rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />

<main class="nld-platform-root">
    <!-- Hero Section -->
    <section class="nld-hero-section">
        <div class="nld-hero-bg"></div>
        <div class="nld-hero-overlay"></div>

        <div class="container position-relative nld-hero-content px-lg-5">
            <div class="row align-items-center gy-5">

                <div class="col-lg-7">
                    <span class="nld-hero-badge mb-4 d-inline-block">Future Ready</span>
                    <h1 class="nld-hero-title mb-4">
                        Master next-generation competencies with university degrees built for
                        <span class="nld-hero-accent">ambitious digital-era careers.</span>
                    </h1>
                    <p class="nld-hero-lead mb-5 col-xl-10">Join an educational ecosystem designed for immediate
                        industry momentum. Gain advanced mastery over the economic trends, software architectures, and
                        analytical toolsets defining the global corporate workforce.</p>

                    <div class="d-flex flex-wrap gap-3 pt-2">
                        <button class="nld-btn nld-btn-dark d-flex align-items-center gap-2">
                            Explore Programs <span class="material-symbols-outlined fs-5">arrow_forward</span>
                        </button>
                        <button class="nld-btn nld-btn-outline">Download Brochure</button>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="nld-glass-card p-4 p-md-5 shadow-lg">
                        <h3 class="nld-form-title mb-4">Start Your Journey</h3>
                        @includeIf('forms.nld.nld-hero-banner-form')
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Value Band -->
    <section class="py-5 bg-navy">
        <div class="container px-lg-5 py-5 text-center">
            <h2 class="display-6 mb-3 text-white">The NLD Online Advantage</h2>
            <p class="text-white-50 mb-4 max-w-2xl mx-auto">An overhauled, high-velocity educational framework
                explicitly engineered around professional execution and immediate marketplace applicability.</p>
            <div class="row g-4 text-start">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100"
                        style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <span class="material-symbols-outlined text-lime-green display-6 mb-3">bolt</span>
                        <h4 class="h5 mb-2">Agile Curriculum</h4>
                        <p class="text-white-50 mb-0">Synchronized continuously alongside enterprise benchmarks to
                            reflect real-time technological and business pivots.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100"
                        style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <span class="material-symbols-outlined text-lime-green display-6 mb-3">hub</span>
                        <h4 class="h5 mb-2">Global Network</h4>
                        <p class="text-white-50 mb-0">Connect directly into a robust, elite global network of alumni
                            across major business hubs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100"
                        style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <span class="material-symbols-outlined text-lime-green display-6 mb-3">model_training</span>
                        <h4 class="h5 mb-2">AI-Integrated</h4>
                        <p class="text-white-50 mb-0">Every specialization contains hands-on modules covering artificial
                            intelligence platforms and automated operations.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded-4 h-100"
                        style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
                        <span class="material-symbols-outlined text-lime-green display-6 mb-3">speed</span>
                        <h4 class="h5 mb-2">Career Momentum</h4>
                        <p class="text-white-50 mb-0">Proactive placement support targeting high-growth sectors,
                            technology enterprises, and corporate innovators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learner Profiles -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h2 class="display-6 mb-3">Engineered for Your Path</h2>
                    <p class="text-muted">A structured, accessible academic blueprint mapped to your distinct
                        occupational goals and career transitions.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <img alt="Busy corporate professionals studying on an interactive LMS platform"
                            class="card-img-top"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsbW9qg964AhN-MX1o_BFr5f67LGUQpeuuHB30GdIBpXzlUVh_cjSDI3qVdIk6GUoClI5RKTbh3BFDdk-oeV5cNEm8nWa2geRQEJhi_D52iVKeqqKV05D4FkSEBDBulZIaSuh1yUYowoUVnXwr9_odkW-bCNfHDXon4Le11b8Smo-pmd2jILrNqJfi9w5AyCcE_YpBj6SN2oQaLNi1Ba-TUKeiXXJyp1fr3veBImQTJ43u5Kl1Ee_QLS-XDEZYDjQ5p6c3bLe_nUY"
                            style="height: 250px; object-fit: cover;" />
                        <div class="p-4">
                            <h4 class="h5 mb-3">Busy Professionals</h4>
                            <p class="text-muted small mb-4">Flexible, self-paced virtual classrooms designed to
                                maximize leadership capabilities without disrupting professional responsibilities.</p>
                            <a class="text-secondary fw-bold text-decoration-none d-flex align-items-center gap-2"
                                href="#">Learn more <span
                                    class="material-symbols-outlined fs-6">arrow_forward</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <img alt="Ambitious career switchers upskilling into cloud tech and data intelligence"
                            class="card-img-top"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaY_EJ92DkV9hcwHoy-ewYHdTyr5K-z7z7bgpPDDXIxhNsgGshFZ9JfGjUMs-mimYn_i-Yl34wIyyKZhfNh6mzvBQyhXoukkegy1RBeNhnoc91WbaaKM_wWaOaJcXkT1hXrylrwJ1m2ukO3cxFbQVzFjpVMztbuyFk2cXyNcG10TTF7SExOdBdqdGr3z-TH1F-3f39WjQZ3KQ0WHgTM4Q-rlFBbXrVEESR5_RLO-xYo2o3iDlEI0pmsrf4Rc3tXVSoYNmufIYqh_g"
                            style="height: 250px; object-fit: cover;" />
                        <div class="p-4">
                            <h4 class="h5 mb-3">Career Switchers</h4>
                            <p class="text-muted small mb-4">Foundational academic bridges tailored to execute flawless
                                entries into modern technical and digital business structures.</p>
                            <a class="text-secondary fw-bold text-decoration-none d-flex align-items-center gap-2"
                                href="#">Learn more <span
                                    class="material-symbols-outlined fs-6">arrow_forward</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom h-100">
                        <img alt="Academic mentors conducting a personalized 1-on-1 coaching session"
                            class="card-img-top"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkNM65fXzLuJqnNU2brWxInpX7I73jIhdvDijUz0_1vZoCSwrOGzsf4fLJreXjBic9MISU7MKnpx3TWQyU-Ycp6XTqlUBNlwelcAmtFBXkj5hWZFbzIprtZZOC3pp5jMmRGikKB-Sk9MHfCYmyjKYjd8F8cJDmX5yrAdxee530rhJ66attUjt6HBEPqk4MdVBxW65lMwCU1L3Tc68rQwyfx0z_FYb8Wvr569PMQLMbmuDr9slqKSnHCiCVeBHD5uX9jDWh2zfaGMQ"
                            style="height: 250px; object-fit: cover;" />
                        <div class="p-4">
                            <h4 class="h5 mb-3">Guided Learners</h4>
                            <p class="text-muted small mb-4">One-on-one professional mentorship tracks and continuous
                                support systems built for focused execution.</p>
                            <a class="text-secondary fw-bold text-decoration-none d-flex align-items-center gap-2"
                                href="#">Learn more <span
                                    class="material-symbols-outlined fs-6">arrow_forward</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Grid -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 mb-3">Elite Online Degrees</h2>
                <p class="text-muted">Rigorous university qualifications structured for profound career impact.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card-custom program-card h-100 p-4 border-0">
                        <div class="d-flex flex-column h-100">
                            <span
                                class="badge rounded-pill bg-secondary text-white mb-4 py-2 px-3 align-self-start small">Business
                                Growth</span>
                            <h3 class="h2 mb-3">Online MBA</h3>
                            <p class="text-muted mb-4 flex-grow-1">Formulate global market strategies, master executive
                                leadership paradigms, and navigate digital industry disruption with absolute confidence.
                            </p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-3 d-flex align-items-center gap-3"><span
                                        class="material-symbols-outlined text-secondary">check_circle</span> Advanced
                                    Specializations</li>
                                <li class="mb-3 d-flex align-items-center gap-3"><span
                                        class="material-symbols-outlined text-secondary">check_circle</span> Executive
                                    Peer Ecosystems</li>
                            </ul>
                            <button class="btn btn-outline-dark-custom btn-rounded w-100 mt-auto">Know More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-custom program-card mca h-100 p-4 border-0">
                        <div class="d-flex flex-column h-100">
                            <span
                                class="badge rounded-pill bg-secondary text-white mb-4 py-2 px-3 align-self-start small">Technology
                                Growth</span>
                            <h3 class="h2 mb-3">Online MCA</h3>
                            <p class="text-muted mb-4 flex-grow-1">Build concrete software engineering expertise across
                                full-stack systems, secure cloud architectures, and machine learning models.</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-3 d-flex align-items-center gap-3"><span
                                        class="material-symbols-outlined text-secondary">check_circle</span> 100%
                                    Industry Aligned</li>
                                <li class="mb-3 d-flex align-items-center gap-3"><span
                                        class="material-symbols-outlined text-secondary">check_circle</span> Live
                                    Virtual Development Labs</li>
                            </ul>
                            <button class="btn btn-outline-dark-custom btn-rounded w-100 mt-auto">Know More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-custom program-card ds h-100 p-4 border-0">
                        <div class="d-flex flex-column h-100">
                            <span
                                class="badge rounded-pill bg-secondary text-white mb-4 py-2 px-3 align-self-start small">Digital
                                &amp; Data</span>
                            <h3 class="h2 mb-3">Data Science</h3>
                            <p class="text-muted mb-4 flex-grow-1">Translate large-scale unstructured information
                                infrastructure into predictive analytical models using deep data environments and AI
                                toolsets.</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-3 d-flex align-items-center gap-3"><span
                                        class="material-symbols-outlined text-secondary">check_circle</span>
                                    Production-Grade Capstones</li>
                                <li class="mb-3 d-flex align-items-center gap-3"><span
                                        class="material-symbols-outlined text-secondary">check_circle</span> Expert
                                    Analytical Coaching</li>
                            </ul>
                            <button class="btn btn-outline-dark-custom btn-rounded w-100 mt-auto">Know More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Experience -->
    <section class="py-5 bg-navy">
        <div class="container px-lg-5 py-5">
            <div class="text-center mb-5 pb-lg-5">
                <h2 class="display-6 mb-3 text-white">The Learning Experience</h2>
                <p class="text-white-50">An immersive 3-step evolutionary journey meticulously crafted around student
                    outcomes.</p>
            </div>
            <div class="row g-5 text-center position-relative">
                <div class="col-md-4 position-relative">
                    <div class="timeline-step">01</div>
                    <h4 class="h5 mb-3 text-white">Engage</h4>
                    <p class="text-white-50">Interact with specialized learning content designed and evaluated by
                        premium university faculty and international corporate executives.</p>
                </div>
                <div class="col-md-4 position-relative">
                    <div class="timeline-step">02</div>
                    <h4 class="h5 mb-3 text-white">Execute</h4>
                    <p class="text-white-50">Acquire technical and managerial fluency within sandboxed cloud spaces,
                        case assessments, and virtual group collaborations.</p>
                </div>
                <div class="col-md-4 position-relative">
                    <div class="timeline-step">03</div>
                    <h4 class="h5 mb-3 text-white">Elevate</h4>
                    <p class="text-white-50">Gain access to placement drives, direct multi-industry corporate
                        networking avenues, and expert profile-building support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="vos-section">
        <div class="vos-glow vos-glow-1"></div>
        <div class="vos-glow vos-glow-2"></div>

        <div class="vos-container">
            <div class="vos-header">
                <span class="vos-badge">Alumni Success</span>
                <h2 class="vos-title">Voice of Success</h2>
                <p class="vos-subtitle">Discover how our online degree ecosystems have empowered digital-era
                    professionals to scale operational capabilities and accelerate upward mobility.</p>
            </div>

            <div class="vos-grid">
                <!-- Card 1: Priya Sharma (MBA) -->
                <div class="vos-card-wrapper">
                    <div class="vos-card vos-card-mba">
                        <div class="vos-card-content">
                            <div class="vos-stars">
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <p class="vos-quote">
                                "The flexibility and industry-aligned curriculum allowed me to transition smoothly from
                                a traditional operations role straight into a <strong class="vos-highlight">strategic
                                    planning position</strong> at a top fintech firm."
                            </p>
                        </div>
                        <div class="vos-profile">
                            <img class="vos-avatar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbDqIuxIVX5YiFB7Fg_DlZpA6zptg8ul5VTI41xfznUmvGhX7RWuhaPvg1zOui6rouMpfxiuSER2gRH2B5_AZvt5GO_tXJrAHO_8ardNxKe-BADgDab3p_YfPadrww3DyIK2t5S_VEtWUrhAQsozeKQ3mZlyf-3lGL4C5X7FmqQDMw0YKgZVE04ON55xS_v6OK4k5Z14AZvhT3QzwFEkGJs5O-bfNZ1gRLMuD2VIpBHcESgJuyQ8-XdYBbEXkhOqVjv8U_PLvnYaI"
                                alt="Priya Sharma, Online MBA Alumna" />
                            <div class="vos-profile-info">
                                <h6 class="vos-username">Priya Sharma</h6>
                                <span class="vos-designation">MBA Graduate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Rahul Verma (MCA) -->
                <div class="vos-card-wrapper">
                    <div class="vos-card vos-card-mca">
                        <div class="vos-card-content">
                            <div class="vos-stars">
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <p class="vos-quote">
                                "The program's deep dive into cutting-edge architectures like <strong
                                    class="vos-highlight">AI and Cloud Security</strong> matched our exact engineering
                                demands. I secured an executive promotion mid-program."
                            </p>
                        </div>
                        <div class="vos-profile">
                            <img class="vos-avatar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6bD46VEK8JdxR65AcpGJ5MqKyvy7PgrUzNt2Yb4CGmQmwiAsxF3m0A9nSIdYzpo8UND7CFSvJmvoMGmuNjEjUSNXK_PQEAbNERW3CQ9Ennuis1pjM8asPpXl7OnIlvV-aGXzpqETOqNw9xzH2SD80Mkf69bwv5IshDZgLoXwlr1VM5tuJqj5TZOqqNLFgASaCr5YNOLjz0UdyGZVgjXZXxbSPWnxeV7paF7halnsZazWZeOCIbmVgXA64oPRunhe03jYay6JhDm4"
                                alt="Rahul Verma, Online MCA Alumnus" />
                            <div class="vos-profile-info">
                                <h6 class="vos-username">Rahul Verma</h6>
                                <span class="vos-designation">MCA Graduate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Arjun Iyer (Data Science) -->
                <div class="vos-card-wrapper">
                    <div class="vos-card vos-card-ds">
                        <div class="vos-card-content">
                            <div class="vos-stars">
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <p class="vos-quote">
                                "The production-ready <strong class="vos-highlight">capstone project</strong> was
                                transformative. Building machine learning solutions for real industry data gave me the
                                exact portfolio needed for advanced consulting."
                            </p>
                        </div>
                        <div class="vos-profile">
                            <img class="vos-avatar"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDC1q2jA9Qnew9B-GprEPHnRER369BxTBfpkdPdpsAiNsSA7NAx9aKCKPZVnmXAgzMiPmaoBg00SBIAB-A9tfwy-QhIp3ZdudcfwIvP-xX3hypIPNaBDjUJ169pguLRpnmuMi8OXlqOX2hPPxDIbvtSUIKn0Qf2GVk8XuASWamCqmy_131RX3aEDKny3y_DCl5s7M35qrD-0noRVnlbCWpO-Nfm8h5dyl_K36jWV2mwgOlBr6DeoPrhtHKrCEGkiaZ2t5RJCxgsww0"
                                alt="Arjun Iyer, Data Science Alumnus" />
                            <div class="vos-profile-info">
                                <h6 class="vos-username">Arjun Iyer</h6>
                                <span class="vos-designation">Data Science Alumnus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="vos-section2">
        <div class="container px-lg-5">
            <div class="bg-navy rounded-5 p-5 position-relative overflow-hidden">
                <img alt="Decorative background grid styling" class="position-absolute top-0 start-0 w-100 h-100"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTdyKzWM4-aE1-xBGsGDmiRv8ieg-_VO1cb4SxxqLGlBhRAn4Jahz5T889h03zSffC2itT5AkZYhWnohhG0L-fl4zE5REzR5uaonZ3_Q8narccRHTVGgFJrkAVaZYda9DhannHnBLQS9R8UFY-wz7s4C3aAkQ7Y1bPp_Wp7ImKR1PFcGOdfGyb1UHl6QwEzdGucaYvqu8LHmBOkl_mRxLaq-wAJTTwQioKdCAfgii-yXPKFGUAt6VzahnyE0-8NZiD_uugIbLW-BQ"
                    style="object-fit: cover; opacity: 0.1;" />
                <div class="row align-items-center position-relative gy-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h2 class="display-5 text-white mb-4">Your Future is Calling.</h2>
                        <p class="lead text-white-50 mb-5">Connect with a senior academic advisor today to evaluate
                            your profile, map financial options, and select the optimal career path.</p>
                        <!-- <button class="btn btn-lime btn-rounded btn-lg px-5 py-3 mt-3">Get Started Now</button> -->
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="glass-card-dark p-4 p-md-5">
                            <!-- <h4 class="text-white text-center mb-4">Callback Request</h4> -->
                            @includeIf('forms.nld.nld-help-section-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<x-frontend-footer />
