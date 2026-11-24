<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />


<style>
    :root {
        --sip-orange: #eb933a;
        --sip-orange-dark: #d7791f;
        --sip-navy: #0a2540;
        --sip-text: #26364a;
        --sip-muted: #718096;
        --sip-border: #e5eaf1;
        --sip-bg: #f4f7fb;
        --sip-radius: 14px;
        --sip-shadow: 0 5px 24px rgba(10, 37, 64, .05);
        --sip-shadow-hover: 0 12px 32px rgba(10, 37, 64, .09);
        --sip-transition: .25s ease;
    }

    .si-profile-page,
    .si-profile-page * {
        box-sizing: border-box;
    }

    .si-profile-page {
        min-height: 80vh;
        padding: 38px 20px 55px;
        background:
            radial-gradient(ellipse at top left, #fff3e4 0, transparent 30%),
            var(--sip-bg);
        color: var(--sip-text);
        font-family: Arial, Helvetica, sans-serif;
    }

    .si-profile-container {
        width: 100%;
        max-width: 1180px;
        margin: auto;
    }

    /* Page heading */

    .si-profile-heading {
        margin-bottom: 26px;
        animation: sipEnter .55s ease both;
    }

    .si-profile-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 9px;
        margin-bottom: 15px;
        color: var(--sip-muted);
        font-size: 13px;
    }

    .si-profile-breadcrumb i {
        color: var(--sip-orange);
    }

    .si-profile-title {
        display: flex;
        align-items: center;
        gap: 13px;
        margin: 0 0 10px;
        color: var(--sip-navy);
        font-size: clamp(27px, 3vw, 35px);
        font-weight: 750;
        letter-spacing: -.6px;
    }

    .si-profile-title-icon {
        display: grid;
        flex: 0 0 49px;
        width: 49px;
        height: 49px;
        place-items: center;
        border-radius: 14px;
        background: #fff0df;
        color: var(--sip-orange-dark);
        font-size: 24px;
        transition: transform var(--sip-transition),
            box-shadow var(--sip-transition);
    }

    .si-profile-title-icon:hover {
        transform: rotate(-6deg) scale(1.06);
        box-shadow: 0 5px 15px #eb933a30;
    }

    .si-profile-subtitle {
        max-width: 680px;
        margin: 0;
        color: var(--sip-muted);
        font-size: 15px;
        line-height: 1.75;
    }

    /* Alerts */

    .si-profile-alert {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        margin-bottom: 20px;
        padding: 14px 16px;
        border: 1px solid #bce8cb;
        border-radius: 10px;
        background: #effbf3;
        color: #17653a;
        font-size: 14px;
        line-height: 1.6;
        animation: sipEnter .35s ease both;
    }

    .si-profile-alert>i {
        margin-top: 2px;
        font-size: 18px;
    }

    .si-profile-alert-error {
        border-color: #f4c7c3;
        background: #fff3f2;
        color: #b42318;
    }

    /* Two-column layout */

    .si-profile-layout {
        display: grid;
        grid-template-columns: minmax(250px, 300px) minmax(0, 1fr);
        align-items: start;
        gap: 23px;
    }

    .si-profile-sidebar,
    .si-profile-form-card {
        min-width: 0;
        overflow: hidden;
        border: 1px solid var(--sip-border);
        border-radius: var(--sip-radius);
        background: #fff;
        box-shadow: var(--sip-shadow);
        transition: box-shadow var(--sip-transition),
            border-color var(--sip-transition);
        animation: sipCardEnter .65s cubic-bezier(.2, .7, .25, 1) both;
    }

    .si-profile-form-card {
        animation-delay: .1s;
    }

    .si-profile-sidebar:hover,
    .si-profile-form-card:hover {
        border-color: #d7e0eb;
        box-shadow: var(--sip-shadow-hover);
    }

    /* Profile summary */

    .si-profile-sidebar-top {
        padding: 27px 22px 25px;
        border-bottom: 1px solid var(--sip-border);
        background: linear-gradient(145deg, #fff8ef, #fff);
        text-align: center;
    }

    .si-profile-avatar {
        display: grid;
        width: 84px;
        height: 84px;
        place-items: center;
        margin: 0 auto 16px;
        border: 4px solid #fff;
        border-radius: 50%;
        background: linear-gradient(145deg, #f8bd78, var(--sip-orange));
        box-shadow: 0 4px 15px #eb933a35;
        color: #fff;
        font-size: 35px;
        animation: sipFloat 4s ease-in-out infinite;
        transition: box-shadow var(--sip-transition);
    }

    .si-profile-avatar:hover {
        box-shadow: 0 8px 24px #eb933a55;
        border: 1px solid #f8bd78
    }

    .si-profile-user-name {
        margin: 0 0 7px;
        color: var(--sip-navy);
        font-size: 21px;
        font-weight: 700;
        overflow-wrap: anywhere;
    }

    .si-profile-user-email {
        margin: 0;
        color: var(--sip-muted);
        font-size: 13px;
        line-height: 1.7;
        overflow-wrap: anywhere;
    }

    .si-profile-verified {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 14px;
        padding: 7px 11px;
        border: 1px solid #bde8cc;
        border-radius: 30px;
        background: #edfaf2;
        color: #187544;
        font-size: 12px;
        font-weight: 700;
        transition: transform var(--sip-transition);
    }

    .si-profile-verified:hover {
        transform: translateY(-2px);
    }

    .si-profile-sidebar-content {
        padding: 22px;
    }

    .si-profile-sidebar-heading {
        margin: 0 0 19px;
        color: var(--sip-navy);
        font-size: 14px;
        font-weight: 700;
    }

    .si-profile-info-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 19px;
    }

    .si-profile-info-item:last-of-type {
        margin-bottom: 0;
    }

    .si-profile-info-icon {
        display: grid;
        flex: 0 0 36px;
        width: 36px;
        height: 36px;
        place-items: center;
        border-radius: 10px;
        background: #f1f5fa;
        color: var(--sip-navy);
        font-size: 16px;
        transition: background var(--sip-transition),
            color var(--sip-transition),
            transform var(--sip-transition);
    }

    .si-profile-info-item:hover .si-profile-info-icon {
        transform: translateY(-2px);
        background: #fff0df;
        color: var(--sip-orange-dark);
    }

    .si-profile-info-label {
        display: block;
        margin-bottom: 5px;
        color: var(--sip-muted);
        font-size: 12px;
    }

    .si-profile-info-value {
        display: block;
        color: var(--sip-text);
        font-size: 14px;
        font-weight: 600;
        line-height: 1.55;
        overflow-wrap: anywhere;
    }

    .si-profile-sidebar-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-top: 22px;
        padding: 13px 14px;
        border: 1px solid #f1d4b4;
        border-radius: 9px;
        background: #fffaf4;
        color: var(--sip-orange-dark);
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: background var(--sip-transition),
            border-color var(--sip-transition),
            transform var(--sip-transition);
    }

    .si-profile-sidebar-link:hover {
        transform: translateX(3px);
        border-color: var(--sip-orange);
        background: #fff1df;
        color: var(--sip-orange-dark);
    }

    .si-profile-sidebar-link>i {
        transition: transform var(--sip-transition);
    }

    .si-profile-sidebar-link:hover>i {
        transform: translateX(4px);
    }

    /* Form card */

    .si-profile-form-header {
        position: relative;
        padding: 24px 27px 22px;
        border-bottom: 1px solid var(--sip-border);
    }

    .si-profile-form-header::after {
        position: absolute;
        bottom: -1px;
        left: 27px;
        width: 55px;
        height: 3px;
        border-radius: 5px;
        background: var(--sip-orange);
        content: "";
        transition: width var(--sip-transition);
    }

    .si-profile-form-card:hover .si-profile-form-header::after {
        width: 95px;
    }

    .si-profile-form-title {
        margin: 0 0 7px;
        color: var(--sip-navy);
        font-size: 21px;
        font-weight: 750;
    }

    .si-profile-form-description {
        margin: 0;
        color: var(--sip-muted);
        font-size: 13px;
        line-height: 1.7;
    }

    .si-profile-form-body {
        padding: 27px;
    }

    /* Form fields */

    .si-profile-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px 18px;
    }

    .si-profile-field {
        min-width: 0;
    }

    .si-profile-field-full {
        grid-column: 1 / -1;
    }

    .si-profile-label {
        display: block;
        margin-bottom: 8px;
        color: var(--sip-navy);
        font-size: 13px;
        font-weight: 700;
    }

    .si-profile-label-required {
        color: #d04438;
    }

    .si-profile-input-wrap {
        position: relative;
    }

    .si-profile-input-icon {
        position: absolute;
        top: 50%;
        left: 14px;
        transform: translateY(-50%);
        color: #8290a3;
        font-size: 16px;
        pointer-events: none;
        transition: color var(--sip-transition);
    }

    .si-profile-input {
        display: block;
        width: 100%;
        min-width: 0;
        min-height: 47px;
        padding: 12px 13px 12px 41px;
        border: 1px solid #dbe2ec;
        border-radius: 9px;
        outline: none;
        background: #fff;
        color: var(--sip-text);
        font: inherit;
        font-size: 14px;
        transition: border-color var(--sip-transition),
            box-shadow var(--sip-transition),
            background var(--sip-transition);
    }

    .si-profile-input:hover {
        border-color: #b8c5d5;
    }

    .si-profile-input-wrap:focus-within .si-profile-input-icon {
        color: var(--sip-orange-dark);
    }

    .si-profile-input:focus {
        border-color: var(--sip-orange);
        box-shadow: 0 0 0 3px #eb933a20;
    }

    .si-profile-input[readonly] {
        border-color: #e2e7ef;
        background: #f5f7fa;
        color: #64748b;
        cursor: not-allowed;
    }

    .si-profile-input.is-invalid {
        border-color: #d92d20;
    }

    .si-profile-input.is-invalid:focus {
        box-shadow: 0 0 0 3px #d92d2020;
    }

    .si-profile-input-help {
        display: flex;
        align-items: flex-start;
        gap: 6px;
        margin: 8px 0 0;
        color: var(--sip-muted);
        font-size: 11px;
        line-height: 1.6;
    }

    .si-profile-input-help i {
        margin-top: 1px;
        color: #8a98ab;
    }

    .si-profile-field-error {
        margin-top: 7px;
        color: #b42318;
        font-size: 12px;
        line-height: 1.5;
    }

    /* Form footer and buttons */

    .si-profile-form-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 27px;
        padding-top: 22px;
        border-top: 1px solid var(--sip-border);
    }

    .si-profile-form-note {
        display: flex;
        align-items: center;
        gap: 7px;
        color: var(--sip-muted);
        font-size: 12px;
        line-height: 1.5;
    }

    .si-profile-form-note i {
        color: #258451;
        font-size: 15px;
    }

    .si-profile-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .si-profile-btn {
        position: relative;
        isolation: isolate;
        display: inline-flex;
        min-height: 44px;
        align-items: center;
        justify-content: center;
        gap: 8px;
        overflow: hidden;
        padding: 11px 16px;
        border: 1px solid transparent;
        border-radius: 9px;
        background: var(--sip-orange);
        color: #fff;
        font-family: inherit;
        font-size: 13px;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: transform var(--sip-transition),
            box-shadow var(--sip-transition),
            background var(--sip-transition),
            border-color var(--sip-transition);
    }

    .si-profile-btn::before {
        position: absolute;
        z-index: -1;
        top: 0;
        left: -130%;
        width: 75%;
        height: 100%;
        transform: skewX(-20deg);
        background: linear-gradient(90deg, transparent, #ffffff45, transparent);
        content: "";
        transition: left .5s ease;
    }

    .si-profile-btn:hover::before {
        left: 140%;
    }

    .si-profile-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px #0a254020;
        background: var(--sip-orange-dark);
        color: #fff;
    }

    .si-profile-btn:active {
        transform: scale(.98);
    }

    .si-profile-btn-secondary {
        border-color: #dbe2ec;
        background: #fff;
        color: var(--sip-navy);
    }

    .si-profile-btn-secondary:hover {
        border-color: #bdc9d8;
        background: #f4f7fb;
        color: var(--sip-navy);
    }

    .si-profile-btn:focus-visible,
    .si-profile-sidebar-link:focus-visible {
        outline: 3px solid #eb933a75;
        outline-offset: 3px;
    }

    /* Animations */

    @keyframes sipEnter {
        from {
            opacity: 0;
            transform: translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sipCardEnter {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sipFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-4px);
        }
    }

    /* Tablet */

    @media (max-width: 900px) {
        .si-profile-layout {
            grid-template-columns: minmax(225px, 260px) minmax(0, 1fr);
            gap: 17px;
        }

        .si-profile-sidebar-content {
            padding: 19px;
        }

        .si-profile-form-header,
        .si-profile-form-body {
            padding-right: 20px;
            padding-left: 20px;
        }

        .si-profile-grid {
            gap: 20px 13px;
        }

        .si-profile-form-actions {
            align-items: flex-start;
            flex-direction: column;
        }
    }

    /* Mobile */

    @media (max-width: 680px) {
        .si-profile-page {
            padding: 27px 14px 38px;
        }

        .si-profile-layout {
            grid-template-columns: minmax(0, 1fr);
            gap: 18px;
        }

        .si-profile-sidebar-top {
            padding: 23px 18px;
        }

        .si-profile-sidebar-content {
            padding: 20px;
        }

        .si-profile-form-header {
            padding: 21px 18px;
        }

        .si-profile-form-header::after {
            left: 18px;
        }

        .si-profile-form-body {
            padding: 22px 18px;
        }

        .si-profile-grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 19px;
        }

        .si-profile-field-full {
            grid-column: auto;
        }

        .si-profile-title {
            font-size: 26px;
        }

        .si-profile-form-actions {
            gap: 16px;
        }

        .si-profile-buttons {
            width: 100%;
        }

        .si-profile-btn {
            flex: 1 1 auto;
        }
    }

    @media (max-width: 380px) {
        .si-profile-breadcrumb {
            gap: 6px;
            font-size: 12px;
        }

        .si-profile-title {
            gap: 10px;
            font-size: 24px;
        }

        .si-profile-title-icon {
            flex-basis: 43px;
            width: 43px;
            height: 43px;
        }

        .si-profile-buttons {
            flex-direction: column;
        }

        .si-profile-btn {
            width: 100%;
        }
    }

    /* Accessibility: avoid motion when requested */

    @media (prefers-reduced-motion: reduce) {

        .si-profile-page *,
        .si-profile-page *::before,
        .si-profile-page *::after {
            animation: none !important;
            transition: none !important;
            scroll-behavior: auto !important;
        }
    }


    
/* Clickable Study India profile photo */
.si-profile-avatar-upload {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.si-profile-avatar-upload:focus-within {
    outline: 3px solid #eb933a70;
    outline-offset: 3px;
}

.si-profile-avatar-image {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}

.si-profile-avatar-camera {
    position: absolute;
    right: 0;
    bottom: 0;
    display: grid;
    width: 31px;
    height: 31px;
    place-items: center;
    border: 2px solid #fff;
    border-radius: 50%;
    background: #0a2540;
    color: #fff;
    font-size: 13px;
    transition: background .2s ease;
}

.si-profile-avatar-upload:hover .si-profile-avatar-camera {
    background: #d7791f;
}

.si-profile-photo-help {
    margin: 0 12px 18px;
    color: #718096;
    font-size: 12px;
    line-height: 1.6;
    text-align: center;
}

</style>


{{-- Keep your Study India header here if required --}}
{{-- <x-study-india-header /> --}}

<main class="si-profile-page">
    <div class="si-profile-container">
        <header class="si-profile-heading">
            <nav class="si-profile-breadcrumb" aria-label="Breadcrumb">
                <i class="bi bi-house-door" aria-hidden="true"></i>
                <span>Study India</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>My Account</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>Profile</span>
            </nav>

            <h1 class="si-profile-title">
                <span class="si-profile-title-icon">
                    <i class="bi bi-person-circle" aria-hidden="true"></i>
                </span>
                Your Profile
            </h1>

            <p class="si-profile-subtitle">
                Manage your personal information and keep your Study India
                account details up to date.
            </p>
        </header>

        @if (session('success'))
            <div class="si-profile-alert" role="status">
                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        @if ($errors->any())
            <div class="si-profile-alert si-profile-alert-error" role="alert">
                <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                <div>
                    <strong>Please check the form.</strong>
                    <div>Correct the highlighted fields and try again.</div>
                </div>
            </div>
        @endif

        <div class="si-profile-layout">

            {{-- Left column: profile summary --}}

            <aside class="si-profile-sidebar">
                <div class="si-profile-sidebar-top">

                    {{-- Profile Photo Upload --}}
                    <form action="{{ route('study-india.profile.photo.update') }}" method="POST"
                        enctype="multipart/form-data" id="siProfilePhotoForm">
                        @csrf

                        <label for="siProfilePhotoInput" class="si-profile-avatar si-profile-avatar-upload"
                            title="Click to upload or change your profile photo">

                            @if (!empty($user->profile_photo))
                                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile photo"
                                    class="si-profile-avatar-image">
                            @else
                                <i class="bi bi-person-fill" aria-hidden="true"></i>
                            @endif

                            <span class="si-profile-avatar-camera">
                                <i class="bi bi-camera-fill" aria-hidden="true"></i>
                            </span>
                        </label>

                        <input type="file" id="siProfilePhotoInput" name="profile_photo"
                            accept="image/jpeg,image/png,image/webp" hidden required>
                    </form>

                    <p class="si-profile-photo-help">
                        Click your photo to upload or change it. JPG, PNG or WebP; maximum 2 MB.
                    </p>

                    @error('profile_photo')
                        <div class="si-profile-field-error">{{ $message }}</div>
                    @enderror


                    <h2 class="si-profile-user-name">
                        {{ $user->full_name }}
                    </h2>

                    <p class="si-profile-user-email">
                        {{ $user->email }}
                    </p>

                    @if ($user->is_verified)
                        <span class="si-profile-verified">
                            <i class="bi bi-patch-check-fill" aria-hidden="true"></i>
                            Verified Account
                        </span>
                    @endif
                </div>

                <div class="si-profile-sidebar-content">
                    <h3 class="si-profile-sidebar-heading">Account Overview</h3>

                    <div class="si-profile-info-item">
                        <span class="si-profile-info-icon">
                            <i class="bi bi-telephone" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="si-profile-info-label">Registered Phone</span>
                            <span class="si-profile-info-value">{{ $user->phone }}</span>
                        </div>
                    </div>

                    <div class="si-profile-info-item">
                        <span class="si-profile-info-icon">
                            <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="si-profile-info-label">City</span>
                            <span class="si-profile-info-value">{{ $user->city }}</span>
                        </div>
                    </div>

                    <div class="si-profile-info-item">
                        <span class="si-profile-info-icon">
                            <i class="bi bi-mortarboard" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="si-profile-info-label">Interested Course</span>
                            <span class="si-profile-info-value">{{ $user->course_interested }}</span>
                        </div>
                    </div>

                    <a href="{{ route('study-india.settings') }}" class="si-profile-sidebar-link">
                        <span>
                            <i class="bi bi-sliders2 me-1" aria-hidden="true"></i>
                            Account Settings
                        </span>
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </aside>

            {{-- Right column: editable profile form --}}

            <section class="si-profile-form-card">
                <div class="si-profile-form-header">
                    <h2 class="si-profile-form-title">Personal Information</h2>
                    <p class="si-profile-form-description">
                        Update the information below. Your registered email
                        address is read-only because it is used for OTP login.
                    </p>
                </div>

                <div class="si-profile-form-body">
                    <form action="{{ route('study-india.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="si-profile-grid">

                            <div class="si-profile-field">
                                <label class="si-profile-label" for="siProfileName">
                                    Full Name <span class="si-profile-label-required">*</span>
                                </label>
                                <div class="si-profile-input-wrap">
                                    <i class="bi bi-person si-profile-input-icon" aria-hidden="true"></i>
                                    <input class="si-profile-input {{ $errors->has('full_name') ? 'is-invalid' : '' }}"
                                        id="siProfileName" type="text" name="full_name"
                                        value="{{ old('full_name', $user->full_name) }}" maxlength="100"
                                        autocomplete="name" required>
                                </div>
                                @error('full_name')
                                    <div class="si-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="si-profile-field">
                                <label class="si-profile-label" for="siProfileEmail">
                                    Email Address
                                </label>
                                <div class="si-profile-input-wrap">
                                    <i class="bi bi-envelope si-profile-input-icon" aria-hidden="true"></i>
                                    <input class="si-profile-input" id="siProfileEmail" type="email"
                                        value="{{ $user->email }}" autocomplete="email" readonly
                                        aria-describedby="siProfileEmailHelp">
                                </div>
                                <p class="si-profile-input-help" id="siProfileEmailHelp">
                                    <i class="bi bi-shield-lock" aria-hidden="true"></i>
                                    Used for OTP verification and login.
                                </p>
                            </div>

                            <div class="si-profile-field">
                                <label class="si-profile-label" for="siProfilePhone">
                                    Phone Number <span class="si-profile-label-required">*</span>
                                </label>
                                <div class="si-profile-input-wrap">
                                    <i class="bi bi-telephone si-profile-input-icon" aria-hidden="true"></i>
                                    <input class="si-profile-input {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                        id="siProfilePhone" type="tel" name="phone"
                                        value="{{ old('phone', $user->phone) }}" pattern="[0-9]{10,15}"
                                        maxlength="15" inputmode="numeric" autocomplete="tel" required>
                                </div>
                                <p class="si-profile-input-help">
                                    <i class="bi bi-info-circle" aria-hidden="true"></i>
                                    Enter 10 digits without spaces.
                                </p>
                                @error('phone')
                                    <div class="si-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="si-profile-field">
                                <label class="si-profile-label" for="siProfileCity">
                                    City <span class="si-profile-label-required">*</span>
                                </label>
                                <div class="si-profile-input-wrap">
                                    <i class="bi bi-geo-alt si-profile-input-icon" aria-hidden="true"></i>
                                    <input class="si-profile-input {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                        id="siProfileCity" type="text" name="city"
                                        value="{{ old('city', $user->city) }}" maxlength="100"
                                        autocomplete="address-level2" required>
                                </div>
                                @error('city')
                                    <div class="si-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="si-profile-field si-profile-field-full">
                                <label class="si-profile-label" for="siProfileCourse">
                                    Course Interested In <span class="si-profile-label-required">*</span>
                                </label>
                                <div class="si-profile-input-wrap">
                                    <i class="bi bi-mortarboard si-profile-input-icon" aria-hidden="true"></i>
                                    <input
                                        class="si-profile-input {{ $errors->has('course_interested') ? 'is-invalid' : '' }}"
                                        id="siProfileCourse" type="text" name="course_interested"
                                        value="{{ old('course_interested', $user->course_interested) }}"
                                        maxlength="150" required>
                                </div>
                                @error('course_interested')
                                    <div class="si-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="si-profile-form-actions">
                            <div class="si-profile-form-note">
                                <i class="bi bi-shield-check" aria-hidden="true"></i>
                                Your account details stay protected.
                            </div>

                            <div class="si-profile-buttons">
                                <a href="{{ route('study-india.settings') }}"
                                    class="si-profile-btn si-profile-btn-secondary">
                                    <i class="bi bi-gear" aria-hidden="true"></i>
                                    Settings
                                </a>

                                <button type="submit" class="si-profile-btn">
                                    <i class="bi bi-check2-circle" aria-hidden="true"></i>
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

        </div>
    </div>
</main>




<script>
document.addEventListener('DOMContentLoaded', function () {
    const photoInput = document.getElementById('siProfilePhotoInput');
    const photoForm = document.getElementById('siProfilePhotoForm');

    if (photoInput && photoForm) {
        photoInput.addEventListener('change', function () {
            if (this.files && this.files.length > 0) {
                photoForm.submit();
            }
        });
    }
});
</script>
