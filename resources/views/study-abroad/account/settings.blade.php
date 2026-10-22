<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />


<style>
    :root {
        --sis-orange: #eb933a;
        --sis-orange-dark: #d7791f;
        --sis-navy: #0a2540;
        --sis-text: #26364a;
        --sis-muted: #718096;
        --sis-border: #e5eaf1;
        --sis-bg: #f4f7fb;
        --sis-danger: #b42318;
        --sis-radius: 15px;
        --sis-shadow: 0 5px 24px rgba(10, 37, 64, .045);
        --sis-shadow-hover: 0 14px 32px rgba(10, 37, 64, .09);
        --sis-transition: .28s cubic-bezier(.2, .7, .25, 1);
    }

    .si-settings-page,
    .si-settings-page * {
        box-sizing: border-box;
    }

    .si-settings-page {
        min-height: 80vh;
        padding: 38px 20px 60px;
        background:
            radial-gradient(ellipse at top left, #fff1df 0, transparent 34%),
            radial-gradient(ellipse at bottom right, #eaf2fc 0, transparent 38%),
            var(--sis-bg);
        color: var(--sis-text);
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.65;
    }

    .si-settings-container {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }

    /* Breadcrumb */

    .si-settings-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
        margin-bottom: 18px;
        color: var(--sis-muted);
        font-size: 12px;
        animation: sisFadeIn .45s ease both;
    }

    .si-settings-breadcrumb i {
        color: var(--sis-orange-dark);
        transition: transform var(--sis-transition);
    }

    .si-settings-breadcrumb i:hover {
        transform: translateX(3px);
    }

    /* Page heading */

    .si-settings-header {
        display: flex;
        align-items: center;
        gap: 17px;
        margin-bottom: 12px;
        animation: sisSlideUp .55s ease both;
    }

    .si-settings-title-icon {
        display: grid;
        flex: 0 0 55px;
        width: 55px;
        height: 55px;
        place-items: center;
        border: 1px solid #f5d6b5;
        border-radius: 16px;
        background: linear-gradient(145deg, #fff7ee, #ffe9d1);
        color: var(--sis-orange-dark);
        font-size: 26px;
        box-shadow: 0 4px 12px rgba(235, 147, 58, .08);
        transition: transform .4s ease, box-shadow var(--sis-transition);
    }

    .si-settings-title-icon:hover {
        transform: rotate(-9deg) scale(1.08);
        box-shadow: 0 9px 22px rgba(235, 147, 58, .2);
    }

    .si-settings-title-icon i {
        transition: transform .55s ease;
    }

    .si-settings-title-icon:hover i {
        transform: rotate(35deg);
    }

    .si-settings-title {
        margin: 0 0 7px;
        color: var(--sis-navy);
        font-size: clamp(26px, 3vw, 34px);
        font-weight: 750;
        letter-spacing: -.6px;
        line-height: 1.3;
    }

    .si-settings-muted {
        margin: 0;
        color: var(--sis-muted);
        font-size: 14px;
        line-height: 1.75;
    }

    .si-settings-intro {
        max-width: 680px;
        margin: 0 0 27px 72px;
        animation: sisSlideUp .65s ease both;
    }

    /* Alerts */

    .si-settings-alert,
    .si-settings-error {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        margin: 0 0 20px;
        padding: 14px 16px;
        border: 1px solid #bce8cb;
        border-radius: 12px;
        background: #effbf3;
        color: #17653a;
        font-size: 14px;
        line-height: 1.65;
        animation: sisAlertIn .4s ease both;
    }

    .si-settings-alert>i,
    .si-settings-error>i {
        margin-top: 2px;
        font-size: 18px;
    }

    .si-settings-alert>i {
        animation: sisSuccessPop .5s ease both;
    }

    .si-settings-error {
        display: block;
        border-color: #f4c7c3;
        background: #fff3f2;
        color: var(--sis-danger);
    }

    .si-settings-error-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    /* Settings cards */

    .si-settings-section {
        position: relative;
        margin-bottom: 20px;
        overflow: hidden;
        border: 1px solid var(--sis-border);
        border-radius: var(--sis-radius);
        background: #fff;
        box-shadow: var(--sis-shadow);
        animation: sisCardReveal .65s cubic-bezier(.2, .7, .25, 1) both;
        transition:
            box-shadow var(--sis-transition),
            border-color var(--sis-transition),
            transform var(--sis-transition);
    }

    .si-settings-section:nth-of-type(1) {
        animation-delay: .05s;
    }

    .si-settings-section:nth-of-type(2) {
        animation-delay: .12s;
    }

    .si-settings-section:nth-of-type(3) {
        animation-delay: .19s;
    }

    .si-settings-section:nth-of-type(4) {
        animation-delay: .26s;
    }

    .si-settings-section:hover {
        border-color: #e2c5a7;
        box-shadow: var(--sis-shadow-hover);
        transform: translateY(-3px);
    }

    /* Small orange accent at top of each card */

    .si-settings-section::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--sis-orange), #ffc27e);
        content: "";
        transition: width .4s ease;
    }

    .si-settings-section:hover::before {
        width: 100%;
    }

    .si-settings-section-header {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 20px 24px;
        border-bottom: 1px solid var(--sis-border);
        background: linear-gradient(110deg, #fffaf4, #fff);
        transition: background var(--sis-transition);
    }

    .si-settings-section:hover .si-settings-section-header {
        background: linear-gradient(110deg, #fff7ed, #fff);
    }

    .si-settings-icon {
        display: grid;
        flex: 0 0 44px;
        width: 44px;
        height: 44px;
        place-items: center;
        border-radius: 12px;
        background: #fff0df;
        color: var(--sis-orange-dark);
        font-size: 21px;
        transition:
            transform var(--sis-transition),
            background var(--sis-transition),
            box-shadow var(--sis-transition);
    }

    .si-settings-section:hover .si-settings-icon {
        transform: translateY(-3px) rotate(-4deg);
        box-shadow: 0 5px 12px rgba(235, 147, 58, .14);
    }

    .si-settings-icon-danger {
        background: #fff0ef;
        color: var(--sis-danger);
    }

    .si-settings-section-title {
        margin: 0 0 5px;
        color: var(--sis-navy);
        font-size: 18px;
        font-weight: 750;
        line-height: 1.4;
    }

    .si-settings-section-subtitle {
        margin: 0;
        color: var(--sis-muted);
        font-size: 12px;
        line-height: 1.6;
    }

    .si-settings-section-body {
        padding: 23px 24px 25px;
    }

    .si-settings-description {
        margin: 0 0 16px;
        color: var(--sis-muted);
        font-size: 14px;
        line-height: 1.8;
    }

    /* Notification preference */

    .si-settings-preference {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        padding: 17px;
        border: 1px solid var(--sis-border);
        border-radius: 12px;
        background: #fafbfd;
        transition:
            border-color var(--sis-transition),
            background var(--sis-transition),
            box-shadow var(--sis-transition),
            transform var(--sis-transition);
    }

    .si-settings-preference:hover {
        border-color: #edbd8b;
        background: #fffaf5;
        box-shadow: 0 5px 16px rgba(235, 147, 58, .07);
        transform: translateY(-1px);
    }

    .si-settings-preference:focus-within {
        border-color: var(--sis-orange);
        box-shadow: 0 0 0 3px rgba(235, 147, 58, .12);
    }

    .si-settings-preference-title {
        display: block;
        margin-bottom: 5px;
        color: var(--sis-navy);
        font-size: 14px;
        font-weight: 700;
    }

    .si-settings-preference-description {
        margin: 0;
        color: var(--sis-muted);
        font-size: 12px;
        line-height: 1.6;
    }

    /* Animated toggle */

    .si-settings-toggle {
        position: relative;
        display: inline-flex;
        flex: 0 0 48px;
        width: 48px;
        height: 27px;
        align-items: center;
        cursor: pointer;
    }

    .si-settings-toggle input {
        position: absolute;
        width: 1px;
        height: 1px;
        opacity: 0;
    }

    .si-settings-toggle-track {
        position: absolute;
        inset: 0;
        border: 1px solid #cbd5e1;
        border-radius: 30px;
        background: #dfe5ed;
        transition:
            background var(--sis-transition),
            border-color var(--sis-transition),
            box-shadow var(--sis-transition);
    }

    .si-settings-toggle-track::before {
        position: absolute;
        top: 3px;
        left: 3px;
        width: 19px;
        height: 19px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 1px 4px #0a254025;
        content: "";
        transition: transform var(--sis-transition);
    }

    .si-settings-toggle:hover .si-settings-toggle-track {
        box-shadow: 0 0 0 4px rgba(235, 147, 58, .09);
    }

    .si-settings-toggle input:checked+.si-settings-toggle-track {
        border-color: var(--sis-orange);
        background: var(--sis-orange);
        box-shadow: 0 0 0 3px rgba(235, 147, 58, .09);
    }

    .si-settings-toggle input:checked+.si-settings-toggle-track::before {
        transform: translateX(21px);
    }

    .si-settings-toggle input:focus-visible+.si-settings-toggle-track {
        outline: 3px solid #eb933a55;
        outline-offset: 3px;
    }

    /* Account details */

    .si-settings-account-details {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 19px;
    }

    .si-settings-detail {
        position: relative;
        flex: 1 1 200px;
        min-width: 0;
        padding: 15px;
        overflow: hidden;
        border: 1px solid var(--sis-border);
        border-radius: 11px;
        background: #fafbfd;
        transition:
            border-color var(--sis-transition),
            background var(--sis-transition),
            transform var(--sis-transition),
            box-shadow var(--sis-transition);
    }

    .si-settings-detail:hover {
        border-color: #edbd8b;
        background: #fffaf5;
        box-shadow: 0 5px 15px rgba(10, 37, 64, .04);
        transform: translateY(-3px);
    }

    .si-settings-detail-label {
        display: block;
        margin-bottom: 6px;
        color: var(--sis-muted);
        font-size: 12px;
    }

    .si-settings-detail-value {
        display: block;
        color: var(--sis-navy);
        font-size: 14px;
        font-weight: 700;
        line-height: 1.6;
        overflow-wrap: anywhere;
    }

    /* Warning */

    .si-settings-warning {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin: 0 0 17px;
        padding: 14px 15px;
        border: 1px solid #f1dfad;
        border-radius: 10px;
        background: #fff9e9;
        color: #805515;
        font-size: 13px;
        line-height: 1.75;
        transition: background var(--sis-transition), border-color var(--sis-transition);
    }

    .si-settings-warning:hover {
        border-color: #e6ca79;
        background: #fff6db;
    }

    .si-settings-warning>i {
        margin-top: 2px;
        font-size: 17px;
    }

    .si-settings-danger-description {
        color: #667085;
    }

    /* Buttons */

    .si-settings-btn {
        position: relative;
        isolation: isolate;
        display: inline-flex;
        min-height: 43px;
        align-items: center;
        justify-content: center;
        gap: 8px;
        overflow: hidden;
        padding: 11px 17px;
        border: 1px solid transparent;
        border-radius: 9px;
        background: var(--sis-orange);
        color: #fff;
        font-family: inherit;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.4;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition:
            transform var(--sis-transition),
            box-shadow var(--sis-transition),
            background var(--sis-transition),
            border-color var(--sis-transition),
            color var(--sis-transition);
    }

    .si-settings-btn::before {
        position: absolute;
        z-index: -1;
        top: 0;
        left: -130%;
        width: 75%;
        height: 100%;
        transform: skewX(-20deg);
        background: linear-gradient(90deg, transparent, #ffffff45, transparent);
        content: "";
        transition: left .55s ease;
    }

    .si-settings-btn:hover::before {
        left: 140%;
    }

    .si-settings-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(10, 37, 64, .12);
        background: var(--sis-orange-dark);
        color: #fff;
    }

    .si-settings-btn:active {
        transform: translateY(0) scale(.98);
        box-shadow: none;
    }

    .si-settings-btn i {
        transition: transform var(--sis-transition);
    }

    .si-settings-btn:hover>i.bi-arrow-right,
    .si-settings-btn:hover>i.bi-arrow-up-right {
        transform: translateX(3px);
    }

    .si-settings-btn-neutral {
        border-color: #dbe2ec;
        background: #fff;
        color: var(--sis-navy);
    }

    .si-settings-btn-neutral:hover {
        border-color: var(--sis-orange);
        background: #fff8f0;
        color: var(--sis-orange-dark);
    }

    .si-settings-btn-danger {
        border-color: #f1c5c1;
        background: #fff2f1;
        color: var(--sis-danger);
    }

    .si-settings-btn-danger:hover {
        border-color: var(--sis-danger);
        background: var(--sis-danger);
        color: #fff;
    }

    .si-settings-btn:focus-visible {
        outline: 3px solid #eb933a70;
        outline-offset: 3px;
    }

    .si-settings-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .si-settings-form-divider {
        height: 1px;
        margin: 22px 0;
        border: 0;
        background: var(--sis-border);
    }

    .si-settings-confirm {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin: 0 0 17px;
        color: var(--sis-text);
        font-size: 13px;
        line-height: 1.7;
        cursor: pointer;
    }

    .si-settings-confirm input {
        flex: 0 0 16px;
        width: 16px;
        height: 16px;
        margin-top: 3px;
        accent-color: var(--sis-danger);
    }

    /* Security note */

    .si-settings-security-note {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-top: 23px;
        padding: 15px 17px;
        border: 1px solid #dce7f2;
        border-radius: 11px;
        background: #f0f6fc;
        color: #49627c;
        font-size: 12px;
        line-height: 1.7;
        animation: sisFadeIn .7s ease both;
        transition:
            border-color var(--sis-transition),
            box-shadow var(--sis-transition);
    }

    .si-settings-security-note:hover {
        border-color: #c2d6eb;
        box-shadow: 0 5px 15px rgba(10, 37, 64, .045);
    }

    .si-settings-security-note i {
        margin-top: 2px;
        color: #26734d;
        font-size: 17px;
        transition: transform var(--sis-transition);
    }

    .si-settings-security-note:hover i {
        transform: scale(1.15);
    }

    /* Keyframes */

    @keyframes sisFadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes sisSlideUp {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sisCardReveal {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sisAlertIn {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes sisSuccessPop {
        0% {
            transform: scale(.7);
        }

        65% {
            transform: scale(1.15);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Responsive */

    @media (max-width: 650px) {
        .si-settings-page {
            padding: 27px 14px 40px;
        }

        .si-settings-header {
            align-items: flex-start;
            gap: 12px;
        }

        .si-settings-title-icon {
            flex-basis: 46px;
            width: 46px;
            height: 46px;
            border-radius: 13px;
            font-size: 22px;
        }

        .si-settings-title {
            font-size: 26px;
        }

        .si-settings-intro {
            margin: 0 0 22px;
        }

        .si-settings-section-header {
            padding: 17px;
        }

        .si-settings-section-body {
            padding: 18px;
        }

        .si-settings-section-title {
            font-size: 17px;
        }

        .si-settings-preference {
            align-items: flex-start;
            padding: 13px;
        }

        .si-settings-actions {
            width: 100%;
        }

        .si-settings-actions .si-settings-btn {
            width: 100%;
        }

        .si-settings-section:hover {
            transform: none;
        }
    }

    @media (max-width: 380px) {
        .si-settings-title {
            font-size: 23px;
        }

        .si-settings-preference {
            gap: 10px;
        }

        .si-settings-section-header {
            gap: 10px;
        }

        .si-settings-icon {
            flex-basis: 39px;
            width: 39px;
            height: 39px;
            font-size: 19px;
        }
    }

    /* Respect reduced-motion preferences */

    @media (prefers-reduced-motion: reduce) {

        .si-settings-page *,
        .si-settings-page *::before,
        .si-settings-page *::after {
            animation: none !important;
            transition: none !important;
            scroll-behavior: auto !important;
        }
    }
</style>

</head>

<body>

    {{-- <x-study-india-header /> --}}

    <main class="si-settings-page">
        <div class="si-settings-container">

            <nav class="si-settings-breadcrumb" aria-label="Breadcrumb">
                <i class="bi bi-house-door" aria-hidden="true"></i>
                <span>Study India</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>My Account</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>Settings</span>
            </nav>

            <header class="si-settings-header">
                <span class="si-settings-title-icon" aria-hidden="true">
                    <i class="bi bi-gear-wide-connected"></i>
                </span>

                <div>
                    <h1 class="si-settings-title">Account Settings</h1>
                    <p class="si-settings-muted">Manage your account and preferences</p>
                </div>
            </header>

            <p class="si-settings-muted si-settings-intro">
                Control your email notifications, manage your profile, and choose
                what happens to your Study India account.
            </p>

            @if (session('success'))
                <div class="si-settings-alert" role="status">
                    <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                    <div>{{ session('success') }}</div>
                </div>
            @endif

            @if (session('error'))
                <div class="si-settings-error" role="alert">
                    <div class="si-settings-error-title">
                        <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                        Something went wrong
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
            @endif

            @if ($errors->any())
                <div class="si-settings-error" role="alert">
                    <div class="si-settings-error-title">
                        <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                        Please check the following
                    </div>
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            {{-- Email notification preferences --}}

            <section class="si-settings-section">
                <div class="si-settings-section-header">
                    <span class="si-settings-icon" aria-hidden="true">
                        <i class="bi bi-bell"></i>
                    </span>
                    <div>
                        <h2 class="si-settings-section-title">Email Notifications</h2>
                        <p class="si-settings-section-subtitle">
                            Choose how you receive optional updates.
                        </p>
                    </div>
                </div>

                <div class="si-settings-section-body">
                    <p class="si-settings-description">
                        Choose whether you want to receive optional Study India
                        updates at your registered email address.
                    </p>

                    <form action="{{ route('study-india.settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="si-settings-preference">
                            <div>
                                <span class="si-settings-preference-title">
                                    Receive email notifications
                                </span>
                                <p class="si-settings-preference-description">
                                    You can change this preference at any time.
                                </p>
                            </div>

                            <label class="si-settings-toggle">
                                <input type="checkbox" name="email_notifications" value="1"
                                    aria-label="Receive email notifications"
                                    {{ (bool) old('email_notifications', $user->email_notifications) ? 'checked' : '' }}>
                                <span class="si-settings-toggle-track"></span>
                            </label>
                        </div>

                        <hr class="si-settings-form-divider">

                        <div class="si-settings-actions">
                            <button type="submit" class="si-settings-btn">
                                <i class="bi bi-check-circle" aria-hidden="true"></i>
                                Save Preferences
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- Account information --}}

            <section class="si-settings-section">
                <div class="si-settings-section-header">
                    <span class="si-settings-icon" aria-hidden="true">
                        <i class="bi bi-person-vcard"></i>
                    </span>
                    <div>
                        <h2 class="si-settings-section-title">Account Information</h2>
                        <p class="si-settings-section-subtitle">
                            Review your registered details.
                        </p>
                    </div>
                </div>

                <div class="si-settings-section-body">
                    <p class="si-settings-description">
                        Your account is registered with the following information.
                        You can update your personal details from your profile.
                    </p>

                    <div class="si-settings-account-details">
                        <div class="si-settings-detail">
                            <span class="si-settings-detail-label">Full Name</span>
                            <span class="si-settings-detail-value">{{ $user->full_name }}</span>
                        </div>

                        <div class="si-settings-detail">
                            <span class="si-settings-detail-label">Registered Email</span>
                            <span class="si-settings-detail-value">{{ $user->email }}</span>
                        </div>
                    </div>

                    <a href="{{ route('study-india.profile') }}" class="si-settings-btn si-settings-btn-neutral">
                        <i class="bi bi-person-gear" aria-hidden="true"></i>
                        Manage Your Profile
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </section>

            {{-- Account deactivation --}}

            <section class="si-settings-section">
                <div class="si-settings-section-header">
                    <span class="si-settings-icon si-settings-icon-danger" aria-hidden="true">
                        <i class="bi bi-person-x"></i>
                    </span>
                    <div>
                        <h2 class="si-settings-section-title">Deactivate Account</h2>
                        <p class="si-settings-section-subtitle">
                            Temporarily disable access to your account.
                        </p>
                    </div>
                </div>

                <div class="si-settings-section-body">
                    <p class="si-settings-description si-settings-danger-description">
                        Deactivation disables access to your Study India account.
                        Your account record is retained rather than permanently deleted.
                    </p>

                    <div class="si-settings-warning">
                        <i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i>
                        <div>
                            <strong>Important:</strong> You will be signed out after
                            deactivation and will not be able to log in until your
                            account is reactivated by support.
                        </div>
                    </div>

                    <form action="{{ route('study-india.deactivate') }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to deactivate your Study India account? You will be signed out.');">
                        @csrf

                        <label class="si-settings-confirm">
                            <input type="checkbox" name="confirm_deactivation" value="1" required>
                            <span>
                                I understand that my Study India account will be
                                deactivated and I will be signed out.
                            </span>
                        </label>

                        <div class="si-settings-actions">
                            <button type="submit" class="si-settings-btn si-settings-btn-danger">
                                <i class="bi bi-person-x" aria-hidden="true"></i>
                                Deactivate Account
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- Logout --}}

            <section class="si-settings-section">
                <div class="si-settings-section-header">
                    <span class="si-settings-icon" aria-hidden="true">
                        <i class="bi bi-box-arrow-right"></i>
                    </span>
                    <div>
                        <h2 class="si-settings-section-title">Logout</h2>
                        <p class="si-settings-section-subtitle">
                            Securely end your current session.
                        </p>
                    </div>
                </div>

                <div class="si-settings-section-body">
                    <p class="si-settings-description">
                        Sign out of your Study India account on this session.
                        Logging out does not deactivate or delete your account.
                    </p>

                    <form action="{{ route('study-india.logout') }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to log out?');">
                        @csrf

                        <div class="si-settings-actions">
                            <button type="submit" class="si-settings-btn si-settings-btn-neutral">
                                <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
                                Logout
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <div class="si-settings-security-note">
                <i class="bi bi-shield-check" aria-hidden="true"></i>
                <div>
                    <strong>Your account, your control.</strong>
                    Keep your registered details accurate and sign out when using
                    a shared device. Your account settings apply to your Study India
                    account.
                </div>
            </div>

        </div>
    </main>
