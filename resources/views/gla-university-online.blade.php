<x-frontend-header />

<main>
    <!-- Hero Section -->
    <section class="jo-hero jo-section position-relative overflow-hidden">
        <div class="jo-hero__bg-glow"></div>

        <div class="container-xl px-4 position-relative z-3">
            <div class="row align-items-center g-5">

                <div class="col-lg-7">
                    <span class="jo-hero__badge d-inline-block mb-3">Next-Gen Digital Skills</span>
                    <h1 class="jo-hero__title tracking-tight text-white">
                        Master the Tech &amp; Design Skills That <span class="jo-hero__accent">Command the Market</span>
                    </h1>
                    <p class="jo-hero__text mt-3 mb-4 lh-base text-white-50">
                        Skip the outdated theories. Learn directly through production-grade projects, interactive labs,
                        and direct mentorship from engineers and digital builders.
                    </p>

                    <div class="d-flex flex-wrap gap-4 mt-4 pt-2">
                        <div class="d-flex align-items-center gap-2 jo-hero__trust-tag">
                            <span class="material-symbols-outlined fill-1">stars</span>
                            <span class="fw-semibold text-white">100% Project-Based Learning</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 jo-hero__trust-tag">
                            <span class="material-symbols-outlined fill-1">verified</span>
                            <span class="fw-semibold text-white">Industry-Vetted Curriculum</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="jo-card jo-hero__form-card border-0 shadow-lg p-4 p-sm-4 bg-white">
                        <!-- <h3 class="fw-bold mb-4 tracking-tight text-dark">Get a Syllabus Briefing</h3> -->
                        @includeIf('forms.gla.gla-hero-banner-form')
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Value Band -->
    <section class="jo-stats-band">
        <div class="container-xl px-4">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <div class="jo-stat__number">12,000+</div>
                    <div class="jo-stat__label">Engineers Trained</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="jo-stat__number">₹14.2 LPA</div>
                    <div class="jo-stat__label">Average CTC Hike</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="jo-stat__number">450+</div>
                    <div class="jo-stat__label">Hiring Partners</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="jo-stat__number">Top-Tier</div>
                    <div class="jo-stat__label">Global Alumni Network</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="jo-section bg-white">
        <div class="container-xl px-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Engineered for Real-World Impact</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">We threw away the generic slide decks. Our
                    platform is built entirely around production environments and modern development paradigms.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="jo-card p-5 h-100 border-0 bg-light">
                        <div class="mb-4 text-dark"
                            style="background: rgba(78,103,0,0.1); width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                            <span class="material-symbols-outlined fill-1"><i class="fas fa-code fa-lg"></i></span>
                        </div>
                        <div class="jo-card__body">
                            <h4 class="fw-bold mb-3">Production-Ready Coding</h4>
                            <p class="text-muted">Write structured, optimized code, construct real APIs, handle complex
                                migrations, and deploy scalable systems that mimic actual tech company codebases.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jo-card p-5 h-100 border-0 bg-light">
                        <div class="mb-4 text-dark"
                            style="background: rgba(78,103,0,0.1); width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                            <span class="material-symbols-outlined fill-1"><i
                                    class="fas fa-laptop-code fa-lg"></i></span>
                        </div>
                        <div class="jo-card__body">
                            <h4 class="fw-bold mb-3">Modern UI/UX Focus</h4>
                            <p class="text-muted">Master contemporary styling conventions, interactive user behaviors,
                                responsive design, Bento grid structures, and smooth component animations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="jo-card p-5 h-100 border-0 bg-light">
                        <div class="mb-4 text-dark"
                            style="background: rgba(78,103,0,0.1); width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                            <span class="material-symbols-outlined fill-1"><i class="fas fa-rocket fa-lg"></i></span>
                        </div>
                        <div class="jo-card__body">
                            <h4 class="fw-bold mb-3">Placement Architecture</h4>
                            <p class="text-muted">Receive portfolio assessments, clean code critiques, resume
                                optimizations for digital platforms, and private access to tech recruitment funnels.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section class="jo-section bg-light">
        <div class="container-xl px-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-4">
                <div>
                    <h2 class="fw-bold mb-2">Our Intensive Tracks</h2>
                    <p class="text-muted mb-0">Immersive learning paths tailored explicitly for engineering excellence
                        and digital growth.</p>
                </div>
                <!-- <div class="d-flex gap-2">
     <button class="jo-btn jo-btn--outline" style="border-radius: 50px; border-color: var(--jo-primary); color: var(--jo-primary);">Engineering</button>
     <button class="jo-btn jo-btn--outline" style="border-radius: 50px;">Design &amp; Analytics</button>
    </div> -->
            </div>
            <div class="row g-4">
                <!-- Program Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#">

                        <div class="jo-card h-100">
                            <img alt="Full-Stack Engineering" class="card-img-top"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCeCjw-P_PwmHaYlRHv3JaDUsjUd5LNNoUw_9uXg_mtfc1-ZiYYGyMiYlGgLzb3fbabKw3aMkktfx4Q3Z1aBjbLnQv8nki5a-u3NlKBTefne7HRySBeWMQ6mvJHswbh_OOY7LHkUPp1_gaWNlCqU_tdAedydulrTqNN7SKBDddy7KvPP9baLpXPAlpPqwt8q9wF_VRnkuTfsju8Y3JRQdBIaSLOlt7eFnUS-3CjFoVdv8uZlgfUTlxTd1YyyPfOt8BcsfVeeLqfGUU7"
                                style="height: 200px; object-fit: cover;" />
                            <div class="p-4">
                                <span class="d-block text-dark fw-bold small text-uppercase mb-2">6 Months • Live
                                    Labs</span>
                                <h5 class="fw-bold mb-4">Advanced Full-Stack Engineering Track</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">MVC Frameworks &amp; APIs</span>
                                    <span class="material-symbols-outlined text-dark"><i
                                            class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Program Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#">

                        <div class="jo-card h-100">
                            <img alt="Cloud &amp; DevOps" class="card-img-top"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAipV732stP_-SBViuhtTtYgAzvdquln0fAIGHGvbSDuTwOzGoQMpgq1SmPFtX3sQEj5hDf5zJyoKmJfrOOFR79M6u5ILomSK5RapFjbzaGhpXzOUch3ZgO3ehAjvAEe9HjhcI4029UpmKkoQaiz3rmsXPrbfSPUw4dccLR-qrgWCRtKRaBrLwfg5JM7sAnP1cUdKmYUv7ZshWz4ud72epqqQ8cQC_mKztdEOa25I0h0Y1P18tdF_629GNoUXEl41PNkEUl1Al01fYd"
                                style="height: 200px; object-fit: cover;" />
                            <div class="p-4">
                                <span class="d-block text-dark fw-bold small text-uppercase mb-2">4 Months •
                                    Immersive</span>
                                <h5 class="fw-bold mb-4">Cloud Systems &amp; Infrastructure Automation</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">CI/CD Pipelines &amp; Systems</span>
                                    <span class="material-symbols-outlined text-dark"><i
                                            class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Program Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#">

                        <div class="jo-card h-100">
                            <img alt="Database Architecture" class="card-img-top"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwsQobD9mMawu1TddDjsWNnDMdOrYKSb0_X1B8UahedszgKIWxQsQgsLqJvUI6xIeePdtrap_B7_uXEkonkBHjMmOu0NUJiDPakxI6JheMnrTEJeHV5YLHCSgwwhe3XC5FjWMfNkRhTSXhtG6dRus8CwE3TROA7QDR50oUijhayWPYd-FYk0pD0oBbfEILOSSAQ4_UH1UWvVu3Tpc1p7tS8xiZNEdlY0EGvPxSUEnQTWSYNunmIghC9HHnp1Ap2nUR3XyuIeDsAvGJ"
                                style="height: 200px; object-fit: cover;" />
                            <div class="p-4">
                                <span class="d-block text-dark fw-bold small text-uppercase mb-2">4 Months •
                                    Advanced</span>
                                <h5 class="fw-bold mb-4">Database Systems &amp; High-Scale Performance</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Query Scaling &amp; Caching</span>
                                    <span class="material-symbols-outlined text-dark"><i
                                            class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Program Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#">

                        <div class="jo-card h-100">
                            <img alt="UI/UX Engineering" class="card-img-top"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIYBLjy3w5FQeaZ1teh0Ar16DvVoQktUfmdQBHaCJRj4qyoJPT8PqyUQ7ct5Qv82yHPvinAkEQX91I1U6X8sWM9KGeMInHMW92LqrILRSMfBG6noiQpfzeECi9JtXOI60UIszWaaQt2P4vpdtg-4ZeWXvxSy-j9xcze1u6Bu_DEI6KC2xRpPfN0DuNfJuM30zM2D-2X0RZPW7QK-fSmFnxaJL8cm_Yr02xixYnMGIEgAGNqNazmZ3pyLCxdYWEJqXDnbhvtFaEMpQu"
                                style="height: 200px; object-fit: cover;" />
                            <div class="p-4">
                                <span class="d-block text-dark fw-bold small text-uppercase mb-2">3 Months •
                                    Hands-on</span>
                                <h5 class="fw-bold mb-4">Interface Architecture &amp; Component Systems</h5>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Bento Layouts &amp; Styling</span>
                                    <span class="material-symbols-outlined text-dark"><i
                                            class="fas fa-arrow-alt-circle-right fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Path Section -->
    <section class="jo-section bg-white">
        <div class="container-xl px-4 text-center">
            <h2 class="fw-bold mb-5">Your Roadmap to Technical Mastery</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="jo-step__number">1</div>
                    <h5 class="fw-bold mb-2">Technical Intake</h5>
                    <p class="text-muted px-3">Complete a structural self-assessment to map your logic skills.</p>
                </div>
                <div class="col-md-3">
                    <div class="jo-step__number">2</div>
                    <h5 class="fw-bold mb-2">Curriculum Sync</h5>
                    <p class="text-muted px-3">Establish your specialized track and build a custom project roadmap.</p>
                </div>
                <div class="col-md-3">
                    <div class="jo-step__number">3</div>
                    <h5 class="fw-bold mb-2">Production Labs</h5>
                    <p class="text-muted px-3">Construct scalable web assets and optimize databases in real time.</p>
                </div>
                <div class="col-md-3">
                    <div class="jo-step__number">4</div>
                    <h5 class="fw-bold mb-2">Portfolio Launch</h5>
                    <p class="text-muted px-3">Publish polished codebases and gain direct indexing to digital
                        employers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section style="background-color: var(--jo-surface-container-lowest);">
        <div class="container-xl px-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Engineers Winning in the Industry</h2>
                <p class="text-muted">See how modern developers are upgrading their architectures and climbing tech
                    ranks.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="jo-card p-4 bg-light border-0 position-relative h-100">
                        <span class="material-symbols-outlined position-absolute opacity-25"
                            style="top: 15px; right: 15px; font-size: 4rem; color: var(--jo-primary-container);"></span>
                        <p class="text-muted font-italic mb-4 mt-2">"The project architecture patterns helped me
                            refactor our legacy views completely. The insights on queries and indexing saved us massive
                            server overhead."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img alt="Developer profile" class="rounded-circle"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6tjNz_JeG5Kqu1ojAKlF3Fo_5SupUb8sWmyxU1ZI1OWMGORqHxpHpwL0TjfbfVUY3zn2DJszRiEQx9uxkbJ3IEe374YoyrhsYxTNkrb6gTridi8Nkh5ozkxY0kFfLDt6bG9W_EsI4bs-Te-Bjami8IyPqQaeizScLpf2ACkqaDz2NCRStMGxvs8JxXNCmqcUe4rJl_VbRmBuuUERoaUNd3Igmt6-9ymPtZZRXEwxdyhxy_rNzfE84SXAG1hzw1bOl3u92pXUrVGox"
                                style="width: 48px; height: 48px; object-fit: cover;" />
                            <div>
                                <h6 class="fw-bold mb-0">R. Khan</h6>
                                <p class="text-muted small mb-0">Full-Stack Developer, Saveasweb</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jo-card p-4 bg-light border-0 position-relative h-100">
                        <span class="material-symbols-outlined position-absolute opacity-25"
                            style="top: 15px; right: 15px; font-size: 4rem; color: var(--jo-primary-container);"></span>
                        <p class="text-muted font-italic mb-4 mt-2">"Learning modern frontend grids completely changed
                            how we pitch layouts to regional clients. Our build time cut in half."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img alt="Developer profile" class="rounded-circle"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6bD46VEK8JdxR65AcpGJ5MqKyvy7PgrUzNt2Yb4CGmQmwiAsxF3m0A9nSIdYzpo8UND7CFSvJmvoMGmuNjEjUSNXK_PQEAbNERW3CQ9Ennuis1pjM8asPpXl7OnIlvV-aGXzpqETOqNw9xzH2SD80Mkf69bwv5IshDZgLoXwlr1VM5tuJqj5TZOqqNLFgASaCr5YNOLjz0UdyGZVgjXZXxbSPWnxeV7paF7halnsZazWZeOCIbmVgXA64oPRunhe03jYay6JhDm4"
                                style="width: 48px; height: 48px; object-fit: cover;" />
                            <div>
                                <h6 class="fw-bold mb-0">S. Yadav</h6>
                                <p class="text-muted small mb-0">UI Architect &amp; Engineering Lead</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="jo-card p-4 bg-light border-0 position-relative h-100">
                        <span class="material-symbols-outlined position-absolute opacity-25"
                            style="top: 15px; right: 15px; font-size: 4rem; color: var(--jo-primary-container);"></span>
                        <p class="text-muted font-italic mb-4 mt-2">"I was struggling with real-world deployment bugs
                            and automated workflows. The direct engineering mentors walked me through setup
                            configurations perfectly."</p>
                        <div class="d-flex align-items-center gap-3">
                            <img alt="Developer profile" class="rounded-circle"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZaifO0btLhObVVG06wk5-yCn_rI13teAA4jQpKC7_XjcBt7wReSZISxTv0HQdmJZpzPGl0zvCrXQQfhNdLTDD6LZfV3BFKLlI8nvi-N22mBMevslGSNXuecNzTw9KpjBwqC_DyyZlzbMefo8P0JN55V3V6Rzm6z8nGjRoZ7PWF1qHwnZwYPRms2Bmy-mq5Ye2oiSI5I-f0qrbQNHtmUppK0XZI4a2tQxJjl0LQupouFjEyeAyV08zDOaoeqpxh4qR_df4qekyPZi8"
                                style="width: 48px; height: 48px; object-fit: cover;" />
                            <div>
                                <h6 class="fw-bold mb-0">A. Patel</h6>
                                <p class="text-muted small mb-0">DevOps Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="jo-section jo-career-section">
        <div class="container-xl px-4">
            <!-- Main Card with Background Image -->
            <div class="jo-card p-5 text-left text-white position-relative overflow-hidden jo-career-card">

                <!-- Dark Overlay for Better Text Readability -->
                <div class="jo-card-overlay"></div>

                <!-- Foreground Content: Text on Left, Form on Right -->
                <div class="row position-relative jo-content-row">
                    <!-- Left Side: Text and Headings -->
                    <div class="col-12 col-lg-6 col-xl-5 mb-5 mb-lg-0 text-center text-lg-start">
                        <h2 class="display-5 fw-bold mb-3 jo-main-heading">
                            Ready to Take the Next Step in Your Career?
                        </h2>
                        <p class="fs-5 mx-auto mx-lg-0 jo-sub-text">
                            Explore GLA Online's UGC-recognized degree programs and gain the knowledge, skills, and
                            qualifications needed to thrive in today's competitive job market.
                        </p>
                    </div>

                    <!-- Right Side: Glassmorphism Registration Form -->
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-2">
                        @includeIf('forms.gla.gla-help-section-form')
                    </div>

                </div>

            </div>
        </div>
    </section>
</main>

<x-frontend-footer />
