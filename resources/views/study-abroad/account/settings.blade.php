<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />

<style>
    :root {
        --sas-orange: #eb933a;
        --sas-orange-dark: #d7791f;
        --sas-navy: #0a2540;
        --sas-text: #26364a;
        --sas-muted: #718096;
        --sas-border: #e5eaf1;
        --sas-bg: #f4f7fb;
        --sas-danger: #b42318;
        --sas-radius: 15px;
        --sas-shadow: 0 5px 24px rgba(10, 37, 64, .045);
        --sas-shadow-hover: 0 14px 32px rgba(10, 37, 64, .09);
        --sas-transition: .28s cubic-bezier(.2, .7, .25, 1);
    }

    .sa-settings-page,
    .sa-settings-page * {
        box-sizing: border-box;
    }

    .sa-settings-page {
        min-height: 80vh;
        padding: 38px 20px 60px;
        background:
            radial-gradient(ellipse at top left, #fff1df 0, transparent 34%),
            radial-gradient(ellipse at bottom right, #eaf2fc 0, transparent 38%),
            var(--sas-bg);
        color: var(--sas-text);
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.65;
    }

    .sa-settings-container {
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }

    /* Breadcrumb */

    .sa-settings-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 8px;
        margin-bottom: 18px;
        color: var(--sas-muted);
        font-size: 12px;
        animation: sasFadeIn .45s ease both;
    }

    .sa-settings-breadcrumb i {
        color: var(--sas-orange-dark);
        transition: transform var(--sas-transition);
    }

    .sa-settings-breadcrumb i:hover {
        transform: translateX(3px);
    }

    /* Page heading */

    .sa-settings-header {
        display: flex;
        align-items: center;
        gap: 17px;
        margin-bottom: 12px;
        animation: sasSlideUp .55s ease both;
    }

    .sa-settings-title-icon {
        display: grid;
        flex: 0 0 55px;
        width: 55px;
        height: 55px;
        place-items: center;
        border: 1px solid #f5d6b5;
        border-radius: 16px;
        background: linear-gradient(145deg, #fff7ee, #ffe9d1);
        color: var(--sas-orange-dark);
        font-size: 26px;
        box-shadow: 0 4px 12px rgba(235, 147, 58, .08);
        transition: transform .4s ease, box-shadow var(--sas-transition);
    }

    .sa-settings-title-icon:hover {
        transform: rotate(-9deg) scale(1.08);
        box-shadow: 0 9px 22px rgba(235, 147, 58, .2);
    }

    .sa-settings-title-icon i {
        transition: transform .55s ease;
    }

    .sa-settings-title-icon:hover i {
        transform: rotate(35deg);
    }

    .sa-settings-title {
        margin: 0 0 7px;
        color: var(--sas-navy);
        font-size: clamp(26px, 3vw, 34px);
        font-weight: 750;
        letter-spacing: -.6px;
        line-height: 1.3;
    }

    .sa-settings-muted {
        margin: 0;
        color: var(--sas-muted);
        font-size: 14px;
        line-height: 1.75;
    }

    .sa-settings-intro {
        max-width: 680px;
        margin: 0 0 27px 72px;
        animation: sasSlideUp .65s ease both;
    }

    /* Alerts */

    .sa-settings-alert,
    .sa-settings-error {
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
        animation: sasAlertIn .4s ease both;
    }

    .sa-settings-alert>i,
    .sa-settings-error>i {
        margin-top: 2px;
        font-size: 18px;
    }

    .sa-settings-alert>i {
        animation: sasSuccessPop .5s ease both;
    }

    .sa-settings-error {
        display: block;
        border-color: #f4c7c3;
        background: #fff3f2;
        color: var(--sas-danger);
    }

    .sa-settings-error-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    /* Settings cards */

    .sa-settings-section {
        position: relative;
        margin-bottom: 20px;
        overflow: hidden;
        border: 1px solid var(--sas-border);
        border-radius: var(--sas-radius);
        background: #fff;
        box-shadow: var(--sas-shadow);
        animation: sasCardReveal .65s cubic-bezier(.2, .7, .25, 1) both;
        transition:
            box-shadow var(--sas-transition),
            border-color var(--sas-transition),
            transform var(--sas-transition);
    }

    .sa-settings-section:nth-of-type(1) {
        animation-delay: .05s;
    }

    .sa-settings-section:nth-of-type(2) {
        animation-delay: .12s;
    }

    .sa-settings-section:nth-of-type(3) {
        animation-delay: .19s;
    }

    .sa-settings-section:nth-of-type(4) {
        animation-delay: .26s;
    }

    .sa-settings-section:hover {
        border-color: #e2c5a7;
        box-shadow: var(--sas-shadow-hover);
        transform: translateY(-3px);
    }

    /* Small orange accent at top of each card */

    .sa-settings-section::before {
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--sas-orange), #ffc27e);
        content: "";
        transition: width .4s ease;
    }

    .sa-settings-section:hover::before {
        width: 100%;
    }

    .sa-settings-section-header {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 20px 24px;
        border-bottom: 1px solid var(--sas-border);
        background: linear-gradient(110deg, #fffaf4, #fff);
        transition: background var(--sas-transition);
    }

    .sa-settings-section:hover .sa-settings-section-header {
        background: linear-gradient(110deg, #fff7ed, #fff);
    }

    .sa-settings-icon {
        display: grid;
        flex: 0 0 44px;
        width: 44px;
        height: 44px;
        place-items: center;
        border-radius: 12px;
        background: #fff0df;
        color: var(--sas-orange-dark);
        font-size: 21px;
        transition:
            transform var(--sas-transition),
            background var(--sas-transition),
            box-shadow var(--sas-transition);
    }

    .sa-settings-section:hover .sa-settings-icon {
        transform: translateY(-3px) rotate(-4deg);
        box-shadow: 0 5px 12px rgba(235, 147, 58, .14);
    }

    .sa-settings-icon-danger {
        background: #fff0ef;
        color: var(--sas-danger);
    }

    .sa-settings-section-title {
        margin: 0 0 5px;
        color: var(--sas-navy);
        font-size: 18px;
        font-weight: 750;
        line-height: 1.4;
    }

    .sa-settings-section-subtitle {
        margin: 0;
        color: var(--sas-muted);
        font-size: 12px;
        line-height: 1.6;
    }

    .sa-settings-section-body {
        padding: 23px 24px 25px;
    }

    .sa-settings-description {
        margin: 0 0 16px;
        color: var(--sas-muted);
        font-size: 14px;
        line-height: 1.8;
    }

    /* Notification preference */

    .sa-settings-preference {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        padding: 17px;
        border: 1px solid var(--sas-border);
        border-radius: 12px;
        background: #fafbfd;
        transition:
            border-color var(--sas-transition),
            background var(--sas-transition),
            box-shadow var(--sas-transition),
            transform var(--sas-transition);
    }

    .sa-settings-preference:hover {
        border-color: #edbd8b;
        background: #fffaf5;
        box-shadow: 0 5px 16px rgba(235, 147, 58, .07);
        transform: translateY(-1px);
    }

    .sa-settings-preference:focus-within {
        border-color: var(--sas-orange);
        box-shadow: 0 0 0 3px rgba(235, 147, 58, .12);
    }

    .sa-settings-preference-title {
        display: block;
        margin-bottom: 5px;
        color: var(--sas-navy);
        font-size: 14px;
        font-weight: 700;
    }

    .sa-settings-preference-description {
        margin: 0;
        color: var(--sas-muted);
        font-size: 12px;
        line-height: 1.6;
    }

    /* Animated toggle */

    .sa-settings-toggle {
        position: relative;
        display: inline-flex;
        flex: 0 0 48px;
        width: 48px;
        height: 27px;
        align-items: center;
        cursor: pointer;
    }

    .sa-settings-toggle input {
        position: absolute;
        width: 1px;
        height: 1px;
        opacity: 0;
    }

    .sa-settings-toggle-track {
        position: absolute;
        inset: 0;
        border: 1px solid #cbd5e1;
        border-radius: 30px;
        background: #dfe5ed;
        transition:
            background var(--sas-transition),
            border-color var(--sas-transition),
            box-shadow var(--sas-transition);
    }

    .sa-settings-toggle-track::before {
        position: absolute;
        top: 3px;
        left: 3px;
        width: 19px;
        height: 19px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 1px 4px #0a254025;
        content: "";
        transition: transform var(--sas-transition);
    }

    .sa-settings-toggle:hover .sa-settings-toggle-track {
        box-shadow: 0 0 0 4px rgba(235, 147, 58, .09);
    }

    .sa-settings-toggle input:checked+.sa-settings-toggle-track {
        border-color: var(--sas-orange);
        background: var(--sas-orange);
        box-shadow: 0 0 0 3px rgba(235, 147, 58, .09);
    }

    .sa-settings-toggle input:checked+.sa-settings-toggle-track::before {
        transform: translateX(21px);
    }

    .sa-settings-toggle input:focus-visible+.sa-settings-toggle-track {
        outline: 3px solid #eb933a55;
        outline-offset: 3px;
    }

    /* Account details */

    .sa-settings-account-details {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 19px;
    }

    .sa-settings-detail {
        position: relative;
        flex: 1 1 200px;
        min-width: 0;
        padding: 15px;
        overflow: hidden;
        border: 1px solid var(--sas-border);
        border-radius: 11px;
        background: #fafbfd;
        transition:
            border-color var(--sas-transition),
            background var(--sas-transition),
            transform var(--sas-transition),
            box-shadow var(--sas-transition);
    }

    .sa-settings-detail:hover {
        border-color: #edbd8b;
        background: #fffaf5;
        box-shadow: 0 5px 15px rgba(10, 37, 64, .04);
        transform: translateY(-3px);
    }

    .sa-settings-detail-label {
        display: block;
        margin-bottom: 6px;
        color: var(--sas-muted);
        font-size: 12px;
    }

    .sa-settings-detail-value {
        display: block;
        color: var(--sas-navy);
        font-size: 14px;
        font-weight: 700;
        line-height: 1.6;
        overflow-wrap: anywhere;
    }

    /* Warning */

    .sa-settings-warning {
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
        transition: background var(--sas-transition), border-color var(--sas-transition);
    }

    .sa-settings-warning:hover {
        border-color: #e6ca79;
        background: #fff6db;
    }

    .sa-settings-warning>i {
        margin-top: 2px;
        font-size: 17px;
    }

    .sa-settings-danger-description {
        color: #667085;
    }

    /* Buttons */

    .sa-settings-btn {
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
        background: var(--sas-orange);
        color: #fff;
        font-family: inherit;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.4;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition:
            transform var(--sas-transition),
            box-shadow var(--sas-transition),
            background var(--sas-transition),
            border-color var(--sas-transition),
            color var(--sas-transition);
    }

    .sa-settings-btn::before {
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

    .sa-settings-btn:hover::before {
        left: 140%;
    }

    .sa-settings-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(10, 37, 64, .12);
        background: var(--sas-orange-dark);
        color: #fff;
    }

    .sa-settings-btn:active {
        transform: translateY(0) scale(.98);
        box-shadow: none;
    }

    .sa-settings-btn i {
        transition: transform var(--sas-transition);
    }

    .sa-settings-btn:hover>i.bi-arrow-right,
    .sa-settings-btn:hover>i.bi-arrow-up-right {
        transform: translateX(3px);
    }

    .sa-settings-btn-neutral {
        border-color: #dbe2ec;
        background: #fff;
        color: var(--sas-navy);
    }

    .sa-settings-btn-neutral:hover {
        border-color: var(--sas-orange);
        background: #fff8f0;
        color: var(--sas-orange-dark);
    }

    .sa-settings-btn-danger {
        border-color: #f1c5c1;
        background: #fff2f1;
        color: var(--sas-danger);
    }

    .sa-settings-btn-danger:hover {
        border-color: var(--sas-danger);
        background: var(--sas-danger);
        color: #fff;
    }

    .sa-settings-btn:focus-visible {
        outline: 3px solid #eb933a70;
        outline-offset: 3px;
    }

    .sa-settings-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .sa-settings-form-divider {
        height: 1px;
        margin: 22px 0;
        border: 0;
        background: var(--sas-border);
    }

    .sa-settings-confirm {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin: 0 0 17px;
        color: var(--sas-text);
        font-size: 13px;
        line-height: 1.7;
        cursor: pointer;
    }

    .sa-settings-confirm input {
        flex: 0 0 16px;
        width: 16px;
        height: 16px;
        margin-top: 3px;
        accent-color: var(--sas-danger);
    }

    /* Security note */

    .sa-settings-security-note {
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
        animation: sasFadeIn .7s ease both;
        transition:
            border-color var(--sas-transition),
            box-shadow var(--sas-transition);
    }

    .sa-settings-security-note:hover {
        border-color: #c2d6eb;
        box-shadow: 0 5px 15px rgba(10, 37, 64, .045);
    }

    .sa-settings-security-note i {
        margin-top: 2px;
        color: #26734d;
        font-size: 17px;
        transition: transform var(--sas-transition);
    }

    .sa-settings-security-note:hover i {
        transform: scale(1.15);
    }

    /* Keyframes */

    @keyframes sasFadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes sasSlideUp {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sasCardReveal {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sasAlertIn {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes sasSuccessPop {
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
        .sa-settings-page {
            padding: 27px 14px 40px;
        }

        .sa-settings-header {
            align-items: flex-start;
            gap: 12px;
        }

        .sa-settings-title-icon {
            flex-basis: 46px;
            width: 46px;
            height: 46px;
            border-radius: 13px;
            font-size: 22px;
        }

        .sa-settings-title {
            font-size: 26px;
        }

        .sa-settings-intro {
            margin: 0 0 22px;
        }

        .sa-settings-section-header {
            padding: 17px;
        }

        .sa-settings-section-body {
            padding: 18px;
        }

        .sa-settings-section-title {
            font-size: 17px;
        }

        .sa-settings-preference {
            align-items: flex-start;
            padding: 13px;
        }

        .sa-settings-actions {
            width: 100%;
        }

        .sa-settings-actions .sa-settings-btn {
            width: 100%;
        }

        .sa-settings-section:hover {
            transform: none;
        }
    }

    @media (max-width: 380px) {
        .sa-settings-title {
            font-size: 23px;
        }

        .sa-settings-preference {
            gap: 10px;
        }

        .sa-settings-section-header {
            gap: 10px;
        }

        .sa-settings-icon {
            flex-basis: 39px;
            width: 39px;
            height: 39px;
            font-size: 19px;
        }
    }

    /* Respect reduced-motion preferences */

    @media (prefers-reduced-motion: reduce) {

        .sa-settings-page *,
        .sa-settings-page *::before,
        .sa-settings-page *::after {
            animation: none !important;
            transition: none !important;
            scroll-behavior: auto !important;
        }
    }
</style>

</head>

<body>

    {{-- <x-study-india-header /> --}}

    <main class="sa-settings-page">
        <div class="sa-settings-container">

            <nav class="sa-settings-breadcrumb" aria-label="Breadcrumb">
                <i class="bi bi-house-door" aria-hidden="true"></i>
                <span>Study India</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>My Account</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>Settings</span>
            </nav>

            <header class="sa-settings-header">
                <span class="sa-settings-title-icon" aria-hidden="true">
                    <i class="bi bi-gear-wide-connected"></i>
                </span>

                <div>
                    <h1 class="sa-settings-title">Account Settings</h1>
                    <p class="sa-settings-muted">Manage your account and preferences</p>
                </div>
            </header>

            <p class="sa-settings-muted sa-settings-intro">
                Control your email notifications, manage your profile, and choose
                what happens to your Study India account.
            </p>

            @if (session('success'))
                <div class="sa-settings-alert" role="status">
                    <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                    <div>{{ session('success') }}</div>
                </div>
            @endif

            @if (session('error'))
                <div class="sa-settings-error" role="alert">
                    <div class="sa-settings-error-title">
                        <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                        Something went wrong
                    </div>
                    <div>{{ session('error') }}</div>
                </div>
            @endif

            @if ($errors->any())
                <div class="sa-settings-error" role="alert">
                    <div class="sa-settings-error-title">
                        <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                        Please check the following
                    </div>
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            {{-- Email notification preferences --}}

            <section class="sa-settings-section">
                <div class="sa-settings-section-header">
                    <span class="sa-settings-icon" aria-hidden="true">
                        <i class="bi bi-bell"></i>
                    </span>
                    <div>
                        <h2 class="sa-settings-section-title">Email Notifications</h2>
                        <p class="sa-settings-section-subtitle">
                            Choose how you receive optional updates.
                        </p>
                    </div>
                </div>

                <div class="sa-settings-section-body">
                    <p class="sa-settings-description">
                        Choose whether you want to receive optional Study India
                        updates at your registered email address.
                    </p>

                    <form action="{{ route('study-abroad.settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="sa-settings-preference">
                            <div>
                                <span class="sa-settings-preference-title">
                                    Receive email notifications
                                </span>
                                <p class="sa-settings-preference-description">
                                    You can change this preference at any time.
                                </p>
                            </div>

                            <label class="sa-settings-toggle">
                                <input type="checkbox" name="email_notifications" value="1"
                                    aria-label="Receive email notifications"
                                    {{ (bool) old('email_notifications', $user->email_notifications) ? 'checked' : '' }}>
                                <span class="sa-settings-toggle-track"></span>
                            </label>
                        </div>

                        <hr class="sa-settings-form-divider">

                        <div class="sa-settings-actions">
                            <button type="submit" class="sa-settings-btn">
                                <i class="bi bi-check-circle" aria-hidden="true"></i>
                                Save Preferences
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- Account information --}}

            <section class="sa-settings-section">
                <div class="sa-settings-section-header">
                    <span class="sa-settings-icon" aria-hidden="true">
                        <i class="bi bi-person-vcard"></i>
                    </span>
                    <div>
                        <h2 class="sa-settings-section-title">Account Information</h2>
                        <p class="sa-settings-section-subtitle">
                            Review your registered details.
                        </p>
                    </div>
                </div>

                <div class="sa-settings-section-body">
                    <p class="sa-settings-description">
                        Your account is registered with the following information.
                        You can update your personal details from your profile.
                    </p>

                    <div class="sa-settings-account-details">
                        <div class="sa-settings-detail">
                            <span class="sa-settings-detail-label">Full Name</span>
                            <span class="sa-settings-detail-value">{{ $user->full_name }}</span>
                        </div>

                        <div class="sa-settings-detail">
                            <span class="sa-settings-detail-label">Registered Email</span>
                            <span class="sa-settings-detail-value">{{ $user->email }}</span>
                        </div>
                    </div>

                    <a href="{{ route('study-abroad.profile') }}" class="sa-settings-btn sa-settings-btn-neutral">
                        <i class="bi bi-person-gear" aria-hidden="true"></i>
                        Manage Your Profile
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </section>

            {{-- Account deactivation --}}

            <section class="sa-settings-section">
                <div class="sa-settings-section-header">
                    <span class="sa-settings-icon sa-settings-icon-danger" aria-hidden="true">
                        <i class="bi bi-person-x"></i>
                    </span>
                    <div>
                        <h2 class="sa-settings-section-title">Deactivate Account</h2>
                        <p class="sa-settings-section-subtitle">
                            Temporarily disable access to your account.
                        </p>
                    </div>
                </div>

                <div class="sa-settings-section-body">
                    <p class="sa-settings-description sa-settings-danger-description">
                        Deactivation disables access to your Study India account.
                        Your account record is retained rather than permanently deleted.
                    </p>

                    <div class="sa-settings-warning">
                        <i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i>
                        <div>
                            <strong>Important:</strong> You will be signed out after
                            deactivation and will not be able to log in until your
                            account is reactivated by support.
                        </div>
                    </div>

                    <form action="{{ route('study-abroad.deactivate') }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to deactivate your Study Abroad account?');">
                        @csrf

                        <label>
                            <input type="checkbox" name="confirm_deactivation" value="1" required>
                            I confirm that I want to deactivate my account.
                        </label>

                        @error('confirm_deactivation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <button type="submit">
                            Deactivate Account
                        </button>
                    </form>
                </div>
            </section>

            {{-- Logout --}}

            <section class="sa-settings-section">
                <div class="sa-settings-section-header">
                    <span class="sa-settings-icon" aria-hidden="true">
                        <i class="bi bi-box-arrow-right"></i>
                    </span>
                    <div>
                        <h2 class="sa-settings-section-title">Logout</h2>
                        <p class="sa-settings-section-subtitle">
                            Securely end your current session.
                        </p>
                    </div>
                </div>

                <div class="sa-settings-section-body">
                    <p class="sa-settings-description">
                        Sign out of your Study India account on this session.
                        Logging out does not deactivate or delete your account.
                    </p>

                    <form action="{{ route('study-abroad.logout') }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to log out?');">
                        @csrf

                        <div class="sa-settings-actions">
                            <button type="submit" class="sa-settings-btn sa-settings-btn-neutral">
                                <i class="bi bi-box-arrow-right" aria-hidden="true"></i>
                                Logout
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <div class="sa-settings-security-note">
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
