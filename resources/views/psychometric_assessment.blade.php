
<x-frontend-header />
    <div class="psy-assess">

        {{-- ---------- HERO ---------- --}}
        <section class="psy-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <span class="psy-eyebrow">{{ $page['hero']['eyebrow'] }}</span>
                        <h1 class="psy-title">{{ $page['hero']['title'] }}</h1>
                        <p class="psy-subtitle">{{ $page['hero']['subtitle'] }}</p>
                        <a href="{{ $page['hero']['cta_primary']['href'] }}"
                            class="psy-btn-primary">{{ $page['hero']['cta_primary']['label'] }}</a>
                        <a href="{{ $page['hero']['cta_secondary']['href'] }}"
                            class="psy-btn-secondary">{{ $page['hero']['cta_secondary']['label'] }}</a>
                    </div>
                </div>
                <div class="row psy-stats">
                    @foreach ($page['hero']['stats'] as $stat)
                        <div class="col-6 col-md-4">
                            <div class="psy-stat-card">
                                <span class="psy-stat-value">{{ $stat['value'] }}</span>
                                <span class="psy-stat-label">{{ $stat['label'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ---------- PILLARS WHEEL ---------- --}}
        <section id="psy-pillars" class="psy-section">
            <div class="container">
                <p class="psy-kicker text-center">{{ $page['pillars']['kicker'] }}</p>
                <h2 class="psy-h2 text-center">{{ $page['pillars']['title'] }}</h2>

                {{-- Desktop: radial wheel --}}
                <div class="psy-wheel d-none d-md-block">
                    <div class="psy-wheel-center">{{ $page['pillars']['center_label'] }}</div>
                    @foreach ($page['pillars']['items'] as $i => $item)
                        @php $angle = ($i * (360 / count($page['pillars']['items']))) - 90; @endphp
                        <div class="psy-wheel-item"
                            style="transform: rotate({{ $angle }}deg) translate(var(--psy-radius)) rotate(-{{ $angle }}deg);">
                            <div class="psy-wheel-card">
                                <h3 class="psy-card-title">{{ $item['title'] }}</h3>
                                <p class="psy-card-text">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Mobile: simple stacked cards --}}
                <div class="row g-3 d-md-none mt-2">
                    @foreach ($page['pillars']['items'] as $item)
                        <div class="col-12">
                            <div class="psy-card">
                                <h3 class="psy-card-title">{{ $item['title'] }}</h3>
                                <p class="psy-card-text">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ---------- WHY TAKE THE ASSESSMENT ---------- --}}
        <section class="psy-section psy-section-alt">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <p class="psy-kicker">{{ $page['why']['kicker'] }}</p>
                        <h2 class="psy-h2">{{ $page['why']['title'] }}</h2>
                        <p class="psy-card-text">{{ $page['why']['text'] }}</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="psy-list">
                            @foreach ($page['why']['benefits'] as $b)
                                <li>{{ $b }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- ---------- WHO CAN TAKE ---------- --}}
        <section class="psy-section">
            <div class="container">
                <p class="psy-kicker">{{ $page['audience']['kicker'] }}</p>
                <h2 class="psy-h2">{{ $page['audience']['title'] }}</h2>
                <div class="row g-4 mt-2">
                    @foreach ($page['audience']['items'] as $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="psy-card">
                                <h3 class="psy-card-title">{{ $item['title'] }}</h3>
                                <p class="psy-card-text">{{ $item['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ---------- WHAT YOU GET / PROCESS ---------- --}}
        <section class="psy-section psy-section-alt">
            <div class="container">
                <p class="psy-kicker">{{ $page['process']['kicker'] }}</p>
                <h2 class="psy-h2">{{ $page['process']['title'] }}</h2>
                <div class="psy-process mt-3">
                    @foreach ($page['process']['steps'] as $i => $step)
                        <div class="psy-process-step">
                            <span class="psy-process-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div>
                                <h3 class="psy-card-title">{{ $step['title'] }}</h3>
                                <p class="psy-card-text">{{ $step['text'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ---------- PULL QUOTE ---------- --}}
        <section class="psy-quote-section">
            <div class="container">
                <blockquote class="psy-quote">{{ $page['quote'] }}</blockquote>
            </div>
        </section>

        {{-- ---------- SHARED EXPERT BIO (same block used on the other counselling pages) ---------- --}}
        @include('partials.expert-bio')

        {{-- ---------- CTA + ENQUIRY FORM ---------- --}}
        <section id="psy-book" class="psy-banner">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6 text-lg-start text-center">
                        <h2>{{ $page['cta']['title'] }}</h2>
                        <p>{{ $page['cta']['text'] }}</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="psy-form-card">
                            {{--
                            Swap this for your existing reusable lead-capture
                            component, e.g.:
                            <livewire:lead-form
                                :fields="['name', 'mobile', 'email', 'current_class']"
                                source="psychometric-assessment" />
                            Left as a plain form here since the exact
                            component signature wasn't available to match.
                        --}}
                            <form method="POST" action="#" class="psy-form">
                                @csrf
                                <input type="hidden" name="source" value="psychometric-assessment">
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number*"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address*"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="current_class" class="form-control"
                                        placeholder="Current Class / Qualification*" required>
                                </div>
                                <button type="submit" class="psy-btn-primary w-100">{{ $page['cta']['button'] }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

<x-frontend-footer />