<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/study-india/study-india-review.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<x-frontend-header />
<main>
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-layout">
            <div class="hero-copy">
                <div class="eyebrow"><span></span> STUDENT VOICES · REAL EXPERIENCES</div>
                <h1>Your experience today<br>could shape <em>someone’s future.</em></h1>
                <p>Help students make better education choices. Share what you learned, what surprised you, and what
                    you wish you had known before you started.</p>
                <form class="search-box" id="courseSearch" action="{{ route('study-india.reviews.create') }}"
                    method="GET"><span class="search-symbol">⌕</span>
                    <input id="searchTerm" name="searchTerm" type="search"
                        placeholder="Search a course, college or program"
                        aria-label="Search a course, college or program" autocomplete="off">

                    <input type="hidden" id="collegeName" name="college">
                    <input type="hidden" id="courseName" name="course">
                    <div id="searchSuggestions" class="search-suggestions"></div>

                    <button type="submit" aria-label="Find course">→</button>
                </form>
                <div class="trust-line"><span class="green-dot"></span> Every thoughtful review can make the next
                    step clearer.</div>
                <div class="hero-points">
                    <div><b>01</b><span>Share your story</span></div>
                    <div><b>02</b><span>Guide future learners</span></div>
                    <div><b>03</b><span>Strengthen the community</span></div>
                </div>
            </div>
            <div class="hero-visual" aria-label="Illustration of a student reviewing education options">
                <div class="visual-orbit orbit-one"></div>
                <div class="visual-orbit orbit-two"></div>
                <div class="campus">
                    <div class="campus-roof"></div>
                    <div class="campus-attic"></div>
                    <div class="campus-columns"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="campus-base"></div>
                </div>
                <div class="student-illustration">
                    <div class="student-hair"></div>
                    <div class="student-head"><i></i><b></b></div>
                    <div class="student-neck"></div>
                    <div class="student-body"></div>
                    <div class="student-arm left"></div>
                    <div class="student-arm right"></div>
                    <div class="student-laptop"><span>✦</span></div>
                    <div class="student-bottom"></div>
                </div>
                <div class="floating-card review-card"><span class="avatar">S</span><span><b>Student
                            experience</b><small>Honest. Helpful. First-hand.</small></span><strong>★★★★★</strong>
                </div>
                <div class="floating-card tip-card"><span class="check">✓</span><span><b>Your voice
                            matters</b><small>Help someone choose well</small></span></div>
                <span class="spark spark-a">✦</span><span class="spark spark-b">✧</span>
            </div>
        </div>
    </section>

    <section class="section" id="why-share">
        <div class="container">
            <div class="section-intro centered">
                <div class="eyebrow">WHY SHARE YOUR EXPERIENCE?</div>
                <h2>One story can make<br><em>a real difference.</em></h2>
                <p>Students need more than brochures. They need clear, thoughtful perspectives from people who have
                    been there.</p>
            </div>
            <div class="benefit-grid">
                <article class="benefit">
                    <div class="benefit-icon orange">✦</div>
                    <h3>Offer a real perspective</h3>
                    <p>Share the practical details and lessons that only a student can explain.</p>
                </article>
                <article class="benefit">
                    <div class="benefit-icon lime">♡</div>
                    <h3>Build informed choices</h3>
                    <p>Help others compare options with more confidence and realistic expectations.</p>
                </article>
                <article class="benefit">
                    <div class="benefit-icon blue">↗</div>
                    <h3>Give back to learners</h3>
                    <p>Turn your own journey into useful guidance for the next student.</p>
                </article>

            </div>
            <div class="story-banner">
                <div class="banner-illustration">
                    <div class="banner-building"></div>
                    <div class="banner-student"><i></i><b></b></div>
                </div>
                <div class="banner-copy">
                    <div class="eyebrow">YOUR JOURNEY HAS VALUE</div>
                    <h2>Tell your story.<br><em>Open a new possibility.</em></h2>
                    <p>A clear, honest review could help another learner find the right path.</p><a
                        class="orange-button" href="{{ route('study-india.reviews.create') }}">Share Your Experience
                        <span>→</span></a>
                </div>
                <div class="banner-circle"></div>

            </div>
        </div>
    </section>

    <section class="section community" id="contributors">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="eyebrow">COMMUNITY SPOTLIGHT</div>
                    <h2>Recognising helpful <em>student voices.</em></h2>
                    <p>A sample view of how useful contributions could be highlighted.</p>
                </div><button class="outline-button" id="leaderboardInfo">How recognition works ↗</button>
            </div>


            {{-- Review Action Buttons --}}
            <div class="sir-review-actions">
                <a href="{{ route('study-india.reviews.create') }}"
                    class="sir-review-action-btn sir-review-action-primary">
                    <i class="bi bi-pencil-square"></i>
                    <span>Write a Review</span>
                    <i class="bi bi-arrow-right sir-review-action-arrow"></i>
                </a>

                <a href="{{ route('study-india.reviews.all') }}"
                    class="sir-review-action-btn sir-review-action-secondary">
                    <i class="bi bi-chat-square-text"></i>
                    <span>View All Reviews</span>
                    <i class="bi bi-arrow-right sir-review-action-arrow"></i>
                </a>
            </div>

            <div class="table-scroll">
                <table>
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Contributor</th>
                            <th>Contribution</th>
                            <th>Recognition</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="highlight-row">
                            <td><span class="rank first">1</span></td>
                            <td>
                                <div class="person-cell"><span class="person-avatar lime">A</span><span><b>Student
                                            Contributor</b><small>First-hand course insights</small></span></div>
                            </td>
                            <td><span class="contribution-label">Highly helpful</span>
                                <div class="progress"><i style="width:90%"></i></div>
                            </td>
                            <td><b class="recognition">Featured voice</b><small class="subtext">For thoughtful
                                    guidance</small></td>
                        </tr>
                        <tr>
                            <td><span class="rank second">2</span></td>
                            <td>
                                <div class="person-cell"><span class="person-avatar blue">R</span><span><b>Review
                                            Contributor</b><small>Learning experience</small></span></div>
                            </td>
                            <td><span class="contribution-label">Helpful feedback</span>
                                <div class="progress"><i style="width:73%"></i></div>
                            </td>
                            <td><b class="recognition">Community star</b><small class="subtext">For useful
                                    details</small></td>
                        </tr>
                        <tr>
                            <td><span class="rank third">3</span></td>
                            <td>
                                <div class="person-cell"><span class="person-avatar peach">M</span><span><b>Learning
                                            Advocate</b><small>Education community</small></span></div>
                            </td>
                            <td><span class="contribution-label">Growing impact</span>
                                <div class="progress"><i style="width:57%"></i></div>
                            </td>
                            <td><b class="recognition">Rising voice</b><small class="subtext">For active
                                    participation</small></td>
                        </tr>
                        <tr>
                            <td><span class="rank">4</span></td>
                            <td>
                                <div class="person-cell"><span class="person-avatar green">K</span><span><b>Student
                                            Member</b><small>Shared perspective</small></span></div>
                            </td>
                            <td><span class="contribution-label">New contribution</span>
                                <div class="progress"><i style="width:38%"></i></div>
                            </td>
                            <td><b class="recognition">Contributor</b><small class="subtext">Thanks for
                                    sharing</small></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="table-note">Illustrative design content only. These are not real contributors or live
                rankings.</p>
        </div>
    </section>



    <section class="section" id="guidelines">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="eyebrow">MAKE YOUR REVIEW USEFUL</div>
                    <h2>Simple guidelines for a <em>strong review.</em></h2>
                    <p>Good reviews are personal, specific and respectful.</p>
                </div>
            </div>
            <div class="guideline-layout">
                <div class="guideline-list">
                    <article><span>✓</span>
                        <div>
                            <h3>Speak from experience</h3>
                            <p>Describe what you personally saw, tried or learned. Separate facts from opinions.</p>
                        </div>
                    </article>
                    <article><span>✓</span>
                        <div>
                            <h3>Be constructive</h3>
                            <p>It is fine to share concerns. Explain them clearly without personal attacks.</p>
                        </div>
                    </article>
                    <article><span>✓</span>
                        <div>
                            <h3>Add meaningful detail</h3>
                            <p>Specific examples about teaching, support, facilities or workload help readers most.
                            </p>
                        </div>
                    </article>
                    <article><span>✓</span>
                        <div>
                            <h3>Write in your own words</h3>
                            <p>Avoid copied content, repeated submissions, advertising or unsupported claims.</p>
                        </div>
                    </article>
                    <article><span>✓</span>
                        <div>
                            <h3>Respect everyone’s privacy</h3>
                            <p>Leave out private phone numbers, addresses and sensitive information about others.
                            </p>
                        </div>
                    </article>
                </div>
                <aside class="guide-card">
                    <div class="guide-visual"><span class="guide-kicker">IGNITION EDUTECH</span>
                        <div class="play-button">▶</div><b>How to write a useful review</b>
                        <div class="fake-controls"><span></span><i></i><small>2 min read</small></div>
                    </div>
                    <div class="guide-card-copy"><b>Keep it honest. Keep it helpful.</b>
                        <p>A quick checklist to help you share a balanced and clear experience.</p><button
                            id="quickGuide" class="text-link">Review the guidelines ↗</button>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="section standards">
        <div class="container standards-layout">
            <div>
                <div class="eyebrow">OUR COMMUNITY STANDARDS</div>
                <h2>Fair feedback.<br><em>Better decisions.</em></h2>
                <p>These shared expectations help keep the review space relevant and trustworthy.</p>
            </div>
            <ul>
                <li>Submit only genuine, first-hand experiences.</li>
                <li>Keep feedback relevant to the course, institution or learning experience.</li>
                <li>Do not post spam, promotional material or duplicate reviews.</li>
                <li>Protect your privacy and the privacy of other people.</li>
                <li>Submissions may need moderation before being published.</li>
            </ul>
        </div>
    </section>

    <section class="section" id="faqs">
        <div class="container faq-layout">
            <div class="faq-intro">
                <div class="eyebrow">HERE TO HELP</div>
                <h2>Frequently asked <em>questions.</em></h2>
                <p>Some quick answers before you share your experience.</p><a class="text-link"
                    href="https://ignitionedutech.com/">Visit Ignition Edutech ↗</a>
            </div>
            <div class="faq-list">
                <details>
                    <summary>What should I include in my review?<span>＋</span></summary>
                    <p>Describe your own experience with relevant details, what worked well, what could improve, and
                        what future students may want to consider.</p>
                </details>
                <details>
                    <summary>Can I share constructive criticism?<span>＋</span></summary>
                    <p>Yes. Keep it fair and specific, explain your perspective, and avoid abusive language or
                        personal attacks.</p>
                </details>
                <details>
                    <summary>What if I cannot find my course or college?<span>＋</span></summary>
                    <p>Use the contact options on the main Ignition Edutech website to ask about adding or locating
                        the correct listing.</p>
                </details>
                <details>
                    <summary>Will my review appear immediately?<span>＋</span></summary>
                    <p>Publication timing depends on the site's review and moderation process. This standalone
                        frontend demo does not publish reviews.</p>
                </details>
                <details>
                    <summary>Can I include personal contact details?<span>＋</span></summary>
                    <p>Please do not include phone numbers, private addresses or sensitive information about
                        yourself or other people in the review text.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="review-section review-cta">
        <div class="container review-cta-inner">
            <div>
                <div class="eyebrow light">YOUR EXPERIENCE CAN HELP</div>
                <h2>Ready to share <em>what you learned?</em></h2>
                <p>Tell future students about your college and course experience.</p>
            </div>
            <a class="orange-button" href="{{ route('study-india.reviews.create') }}"
                style="position: relative; z-index: 10; pointer-events: auto;">Start Your Review
                <span>→</span></a>
        </div>
    </section>
</main>


<div class="toast" id="toast" role="status"></div>



{{-- popup massage --}}

@if (session('review_success'))
    <div class="sir-success-backdrop" id="reviewSuccessModal">
        <section class="sir-success-modal" role="dialog" aria-modal="true" aria-labelledby="reviewSuccessTitle">
            <div class="sir-success-icon">
                <i class="bi bi-check-lg"></i>
            </div>

            <span class="sir-success-eyebrow">REVIEW RECEIVED</span>

            <h2 id="reviewSuccessTitle">
                Thank You for Your Review!
            </h2>

            <p>
                Your review has been submitted successfully.
                It will be published after our team completes the approval process.
            </p>

            <button type="button" class="sir-success-button" id="closeReviewSuccess">
                Continue
                <i class="bi bi-arrow-right"></i>
            </button>
        </section>
    </div>
@endif



<x-frontend-footer />

<script>
    window.studyIndiaReviewSearchData = {
        colleges: @json($colleges ?? []),
        courses: @json($courses ?? [])
    };
</script>
<script src="{{ asset('js/study-india/study-india-review.js') }}"></script>