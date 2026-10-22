<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/favicon.png') }}" />

<style>
    :root {
        --sap-orange: #eb933a;
        --sap-orange-dark: #d7791f;
        --sap-navy: #0a2540;
        --sap-text: #26364a;
        --sap-muted: #718096;
        --sap-border: #e5eaf1;
        --sap-bg: #f4f7fb;
        --sap-radius: 14px;
        --sap-shadow: 0 5px 24px rgba(10, 37, 64, .05);
        --sap-shadow-hover: 0 12px 32px rgba(10, 37, 64, .09);
        --sap-transition: .25s ease;
    }

    .sa-profile-page,
    .sa-profile-page * {
        box-sizing: border-box;
    }

    .sa-profile-page {
        min-height: 80vh;
        padding: 38px 20px 55px;
        background:
            radial-gradient(ellipse at top left, #fff3e4 0, transparent 30%),
            var(--sap-bg);
        color: var(--sap-text);
        font-family: Arial, Helvetica, sans-serif;
    }

    .sa-profile-container {
        width: 100%;
        max-width: 1180px;
        margin: auto;
    }

    /* Page heading */

    .sa-profile-heading {
        margin-bottom: 26px;
        animation: sapEnter .55s ease both;
    }

    .sa-profile-breadcrumb {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 9px;
        margin-bottom: 15px;
        color: var(--sap-muted);
        font-size: 13px;
    }

    .sa-profile-breadcrumb i {
        color: var(--sap-orange);
    }

    .sa-profile-title {
        display: flex;
        align-items: center;
        gap: 13px;
        margin: 0 0 10px;
        color: var(--sap-navy);
        font-size: clamp(27px, 3vw, 35px);
        font-weight: 750;
        letter-spacing: -.6px;
    }

    .sa-profile-title-icon {
        display: grid;
        flex: 0 0 49px;
        width: 49px;
        height: 49px;
        place-items: center;
        border-radius: 14px;
        background: #fff0df;
        color: var(--sap-orange-dark);
        font-size: 24px;
        transition: transform var(--sap-transition),
            box-shadow var(--sap-transition);
    }

    .sa-profile-title-icon:hover {
        transform: rotate(-6deg) scale(1.06);
        box-shadow: 0 5px 15px #eb933a30;
    }

    .sa-profile-subtitle {
        max-width: 680px;
        margin: 0;
        color: var(--sap-muted);
        font-size: 15px;
        line-height: 1.75;
    }

    /* Alerts */

    .sa-profile-alert {
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
        animation: sapEnter .35s ease both;
    }

    .sa-profile-alert>i {
        margin-top: 2px;
        font-size: 18px;
    }

    .sa-profile-alert-error {
        border-color: #f4c7c3;
        background: #fff3f2;
        color: #b42318;
    }

    /* Two-column layout */

    .sa-profile-layout {
        display: grid;
        grid-template-columns: minmax(250px, 300px) minmax(0, 1fr);
        align-items: start;
        gap: 23px;
    }

    .sa-profile-sidebar,
    .sa-profile-form-card {
        min-width: 0;
        overflow: hidden;
        border: 1px solid var(--sap-border);
        border-radius: var(--sap-radius);
        background: #fff;
        box-shadow: var(--sap-shadow);
        transition: box-shadow var(--sap-transition),
            border-color var(--sap-transition);
        animation: sapCardEnter .65s cubic-bezier(.2, .7, .25, 1) both;
    }

    .sa-profile-form-card {
        animation-delay: .1s;
    }

    .sa-profile-sidebar:hover,
    .sa-profile-form-card:hover {
        border-color: #d7e0eb;
        box-shadow: var(--sap-shadow-hover);
    }

    /* Profile summary */

    .sa-profile-sidebar-top {
        padding: 27px 22px 25px;
        border-bottom: 1px solid var(--sap-border);
        background: linear-gradient(145deg, #fff8ef, #fff);
        text-align: center;
    }

    .sa-profile-avatar {
        display: grid;
        width: 84px;
        height: 84px;
        place-items: center;
        margin: 0 auto 16px;
        border: 4px solid #fff;
        border-radius: 50%;
        background: linear-gradient(145deg, #f8bd78, var(--sap-orange));
        box-shadow: 0 4px 15px #eb933a35;
        color: #fff;
        font-size: 35px;
        animation: sapFloat 4s ease-in-out infinite;
        transition: box-shadow var(--sap-transition);
    }

    .sa-profile-avatar:hover {
        box-shadow: 0 8px 24px #eb933a55;
        border: 1px solid #f8bd78;
    }

    .sa-profile-user-name {
        margin: 0 0 7px;
        color: var(--sap-navy);
        font-size: 21px;
        font-weight: 700;
        overflow-wrap: anywhere;
    }

    .sa-profile-user-email {
        margin: 0;
        color: var(--sap-muted);
        font-size: 13px;
        line-height: 1.7;
        overflow-wrap: anywhere;
    }

    .sa-profile-verified {
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
        transition: transform var(--sap-transition);
    }

    .sa-profile-verified:hover {
        transform: translateY(-2px);
    }

    .sa-profile-sidebar-content {
        padding: 22px;
    }

    .sa-profile-sidebar-heading {
        margin: 0 0 19px;
        color: var(--sap-navy);
        font-size: 14px;
        font-weight: 700;
    }

    .sa-profile-info-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 19px;
    }

    .sa-profile-info-item:last-of-type {
        margin-bottom: 0;
    }

    .sa-profile-info-icon {
        display: grid;
        flex: 0 0 36px;
        width: 36px;
        height: 36px;
        place-items: center;
        border-radius: 10px;
        background: #f1f5fa;
        color: var(--sap-navy);
        font-size: 16px;
        transition: background var(--sap-transition),
            color var(--sap-transition),
            transform var(--sap-transition);
    }

    .sa-profile-info-item:hover .sa-profile-info-icon {
        transform: translateY(-2px);
        background: #fff0df;
        color: var(--sap-orange-dark);
    }

    .sa-profile-info-label {
        display: block;
        margin-bottom: 5px;
        color: var(--sap-muted);
        font-size: 12px;
    }

    .sa-profile-info-value {
        display: block;
        color: var(--sap-text);
        font-size: 14px;
        font-weight: 600;
        line-height: 1.55;
        overflow-wrap: anywhere;
    }

    .sa-profile-sidebar-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-top: 22px;
        padding: 13px 14px;
        border: 1px solid #f1d4b4;
        border-radius: 9px;
        background: #fffaf4;
        color: var(--sap-orange-dark);
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: background var(--sap-transition),
            border-color var(--sap-transition),
            transform var(--sap-transition);
    }

    .sa-profile-sidebar-link:hover {
        transform: translateX(3px);
        border-color: var(--sap-orange);
        background: #fff1df;
        color: var(--sap-orange-dark);
    }

    .sa-profile-sidebar-link>i {
        transition: transform var(--sap-transition);
    }

    .sa-profile-sidebar-link:hover>i {
        transform: translateX(4px);
    }

    /* Form card */

    .sa-profile-form-header {
        position: relative;
        padding: 24px 27px 22px;
        border-bottom: 1px solid var(--sap-border);
    }

    .sa-profile-form-header::after {
        position: absolute;
        bottom: -1px;
        left: 27px;
        width: 55px;
        height: 3px;
        border-radius: 5px;
        background: var(--sap-orange);
        content: "";
        transition: width var(--sap-transition);
    }

    .sa-profile-form-card:hover .sa-profile-form-header::after {
        width: 95px;
    }

    .sa-profile-form-title {
        margin: 0 0 7px;
        color: var(--sap-navy);
        font-size: 21px;
        font-weight: 750;
    }

    .sa-profile-form-description {
        margin: 0;
        color: var(--sap-muted);
        font-size: 13px;
        line-height: 1.7;
    }

    .sa-profile-form-body {
        padding: 27px;
    }

    /* Form fields */

    .sa-profile-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px 18px;
    }

    .sa-profile-field {
        min-width: 0;
    }

    .sa-profile-field-full {
        grid-column: 1 / -1;
    }

    .sa-profile-label {
        display: block;
        margin-bottom: 8px;
        color: var(--sap-navy);
        font-size: 13px;
        font-weight: 700;
    }

    .sa-profile-label-required {
        color: #d04438;
    }

    .sa-profile-input-wrap {
        position: relative;
    }

    .sa-profile-input-icon {
        position: absolute;
        top: 50%;
        left: 14px;
        transform: translateY(-50%);
        color: #8290a3;
        font-size: 16px;
        pointer-events: none;
        transition: color var(--sap-transition);
    }

    .sa-profile-input {
        display: block;
        width: 100%;
        min-width: 0;
        min-height: 47px;
        padding: 12px 13px 12px 41px;
        border: 1px solid #dbe2ec;
        border-radius: 9px;
        outline: none;
        background: #fff;
        color: var(--sap-text);
        font: inherit;
        font-size: 14px;
        transition: border-color var(--sap-transition),
            box-shadow var(--sap-transition),
            background var(--sap-transition);
    }

    .sa-profile-input:hover {
        border-color: #b8c5d5;
    }

    .sa-profile-input-wrap:focus-within .sa-profile-input-icon {
        color: var(--sap-orange-dark);
    }

    .sa-profile-input:focus {
        border-color: var(--sap-orange);
        box-shadow: 0 0 0 3px #eb933a20;
    }

    .sa-profile-input[readonly] {
        border-color: #e2e7ef;
        background: #f5f7fa;
        color: #64748b;
        cursor: not-allowed;
    }

    .sa-profile-input.is-invalid {
        border-color: #d92d20;
    }

    .sa-profile-input.is-invalid:focus {
        box-shadow: 0 0 0 3px #d92d2020;
    }

    .sa-profile-input-help {
        display: flex;
        align-items: flex-start;
        gap: 6px;
        margin: 8px 0 0;
        color: var(--sap-muted);
        font-size: 11px;
        line-height: 1.6;
    }

    .sa-profile-input-help i {
        margin-top: 1px;
        color: #8a98ab;
    }

    .sa-profile-field-error {
        margin-top: 7px;
        color: #b42318;
        font-size: 12px;
        line-height: 1.5;
    }

    /* Form footer and buttons */

    .sa-profile-form-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 27px;
        padding-top: 22px;
        border-top: 1px solid var(--sap-border);
    }

    .sa-profile-form-note {
        display: flex;
        align-items: center;
        gap: 7px;
        color: var(--sap-muted);
        font-size: 12px;
        line-height: 1.5;
    }

    .sa-profile-form-note i {
        color: #258451;
        font-size: 15px;
    }

    .sa-profile-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .sa-profile-btn {
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
        background: var(--sap-orange);
        color: #fff;
        font-family: inherit;
        font-size: 13px;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: transform var(--sap-transition),
            box-shadow var(--sap-transition),
            background var(--sap-transition),
            border-color var(--sap-transition);
    }

    .sa-profile-btn::before {
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

    .sa-profile-btn:hover::before {
        left: 140%;
    }

    .sa-profile-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 15px #0a254020;
        background: var(--sap-orange-dark);
        color: #fff;
    }

    .sa-profile-btn:active {
        transform: scale(.98);
    }

    .sa-profile-btn-secondary {
        border-color: #dbe2ec;
        background: #fff;
        color: var(--sap-navy);
    }

    .sa-profile-btn-secondary:hover {
        border-color: #bdc9d8;
        background: #f4f7fb;
        color: var(--sap-navy);
    }

    .sa-profile-btn:focus-visible,
    .sa-profile-sidebar-link:focus-visible {
        outline: 3px solid #eb933a75;
        outline-offset: 3px;
    }

    /* Animations */

    @keyframes sapEnter {
        from {
            opacity: 0;
            transform: translateY(12px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sapCardEnter {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes sapFloat {

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
        .sa-profile-layout {
            grid-template-columns: minmax(225px, 260px) minmax(0, 1fr);
            gap: 17px;
        }

        .sa-profile-sidebar-content {
            padding: 19px;
        }

        .sa-profile-form-header,
        .sa-profile-form-body {
            padding-right: 20px;
            padding-left: 20px;
        }

        .sa-profile-grid {
            gap: 20px 13px;
        }

        .sa-profile-form-actions {
            align-items: flex-start;
            flex-direction: column;
        }
    }

    /* Mobile */

    @media (max-width: 680px) {
        .sa-profile-page {
            padding: 27px 14px 38px;
        }

        .sa-profile-layout {
            grid-template-columns: minmax(0, 1fr);
            gap: 18px;
        }

        .sa-profile-sidebar-top {
            padding: 23px 18px;
        }

        .sa-profile-sidebar-content {
            padding: 20px;
        }

        .sa-profile-form-header {
            padding: 21px 18px;
        }

        .sa-profile-form-header::after {
            left: 18px;
        }

        .sa-profile-form-body {
            padding: 22px 18px;
        }

        .sa-profile-grid {
            grid-template-columns: minmax(0, 1fr);
            gap: 19px;
        }

        .sa-profile-field-full {
            grid-column: auto;
        }

        .sa-profile-title {
            font-size: 26px;
        }

        .sa-profile-form-actions {
            gap: 16px;
        }

        .sa-profile-buttons {
            width: 100%;
        }

        .sa-profile-btn {
            flex: 1 1 auto;
        }
    }

    @media (max-width: 380px) {
        .sa-profile-breadcrumb {
            gap: 6px;
            font-size: 12px;
        }

        .sa-profile-title {
            gap: 10px;
            font-size: 24px;
        }

        .sa-profile-title-icon {
            flex-basis: 43px;
            width: 43px;
            height: 43px;
        }

        .sa-profile-buttons {
            flex-direction: column;
        }

        .sa-profile-btn {
            width: 100%;
        }
    }

    /* Accessibility: avoid motion when requested */

    @media (prefers-reduced-motion: reduce) {

        .sa-profile-page *,
        .sa-profile-page *::before,
        .sa-profile-page *::after {
            animation: none !important;
            transition: none !important;
            scroll-behavior: auto !important;
        }
    }

    /* Clickable Study Abroad profile photo */

    .sa-profile-avatar-upload {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .sa-profile-avatar-upload:focus-within {
        outline: 3px solid #eb933a70;
        outline-offset: 3px;
    }

    .sa-profile-avatar-image {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
    }

    .sa-profile-avatar-camera {
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

    .sa-profile-avatar-upload:hover .sa-profile-avatar-camera {
        background: #d7791f;
    }

    .sa-profile-photo-help {
        margin: 0 12px 18px;
        color: #718096;
        font-size: 12px;
        line-height: 1.6;
        text-align: center;
    }
</style>

{{-- Keep your Study Abroad header here if required --}}
{{-- <x-study-abroad-header /> --}}

<main class="sa-profile-page">
    <div class="sa-profile-container">
        <header class="sa-profile-heading">
            <nav class="sa-profile-breadcrumb" aria-label="Breadcrumb">
                <i class="bi bi-house-door" aria-hidden="true"></i>
                <span>Study Abroad</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>My Account</span>
                <i class="bi bi-chevron-right" aria-hidden="true"></i>
                <span>Profile</span>
            </nav>

            <h1 class="sa-profile-title">
                <span class="sa-profile-title-icon">
                    <i class="bi bi-person-circle" aria-hidden="true"></i>
                </span>
                Your Profile
            </h1>

            <p class="sa-profile-subtitle">
                Manage your personal information and keep your Study Abroad
                account details up to date.
            </p>
        </header>

        @if (session('success'))
            <div class="sa-profile-alert" role="status">
                <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        @if ($errors->any())
            <div class="sa-profile-alert sa-profile-alert-error" role="alert">
                <i class="bi bi-exclamation-circle-fill" aria-hidden="true"></i>
                <div>
                    <strong>Please check the form.</strong>
                    <div>Correct the highlighted fields and try again.</div>
                </div>
            </div>
        @endif

        <div class="sa-profile-layout">

            {{-- Left column: profile summary --}}

            <aside class="sa-profile-sidebar">
                <div class="sa-profile-sidebar-top">

                    {{-- Profile Photo Upload --}}

                    <form action="{{ route('study-abroad.profile.photo.update') }}" method="POST"
                        enctype="multipart/form-data" id="saProfilePhotoForm">
                        @csrf

                        <label for="saProfilePhotoInput" class="sa-profile-avatar sa-profile-avatar-upload"
                            title="Click to upload or change your profile photo">
                            @if (!empty($user->profile_image))
                                <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile photo"
                                    class="sa-profile-avatar-image">
                            @else
                                <i class="bi bi-person-fill" aria-hidden="true"></i>
                            @endif

                            <span class="sa-profile-avatar-camera">
                                <i class="bi bi-camera-fill" aria-hidden="true"></i>
                            </span>
                        </label>

                        <input type="file" id="saProfilePhotoInput" name="profile_image"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp" hidden required>
                    </form>

                    @error('profile_image')
                        <div class="sa-profile-field-error">{{ $message }}</div>
                    @enderror

                    <p class="sa-profile-photo-help">
                        Click your photo to upload or change it. JPG, PNG or WebP; maximum 2 MB.
                    </p>

                    @error('profile_image')
                        <div class="sa-profile-field-error">{{ $message }}</div>
                    @enderror

                    <h2 class="sa-profile-user-name">
                        {{ $user->full_name }}
                    </h2>

                    <p class="sa-profile-user-email">
                        {{ $user->email }}
                    </p>

                    @if ($user->is_verified)
                        <span class="sa-profile-verified">
                            <i class="bi bi-patch-check-fill" aria-hidden="true"></i>
                            Verified Account
                        </span>
                    @endif
                </div>

                <div class="sa-profile-sidebar-content">
                    <h3 class="sa-profile-sidebar-heading">Account Overview</h3>

                    <div class="sa-profile-info-item">
                        <span class="sa-profile-info-icon">
                            <i class="bi bi-telephone" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="sa-profile-info-label">Registered Phone</span>
                            <span class="sa-profile-info-value">{{ $user->phone }}</span>
                        </div>
                    </div>

                    <div class="sa-profile-info-item">
                        <span class="sa-profile-info-icon">
                            <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="sa-profile-info-label">City</span>
                            <span class="sa-profile-info-value">{{ $user->city }}</span>
                        </div>
                    </div>

                    <div class="sa-profile-info-item">
                        <span class="sa-profile-info-icon">
                            <i class="bi bi-mortarboard" aria-hidden="true"></i>
                        </span>
                        <div>
                            <span class="sa-profile-info-label">Interested Course</span>
                            <span class="sa-profile-info-value">{{ $user->course_interested }}</span>
                        </div>
                    </div>

                    <a href="{{ route('study-abroad.settings') }}" class="sa-profile-sidebar-link">
                        <span>
                            <i class="bi bi-sliders2 me-1" aria-hidden="true"></i>
                            Account Settings
                        </span>
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </aside>

            {{-- Right column: editable profile form --}}

            <section class="sa-profile-form-card">
                <div class="sa-profile-form-header">
                    <h2 class="sa-profile-form-title">Personal Information</h2>
                    <p class="sa-profile-form-description">
                        Update the information below. Your registered email
                        address is read-only because it is used for OTP login.
                    </p>
                </div>

                <div class="sa-profile-form-body">
                    <form action="{{ route('study-abroad.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="sa-profile-grid">

                            <div class="sa-profile-field">
                                <label class="sa-profile-label" for="saProfileName">
                                    Full Name <span class="sa-profile-label-required">*</span>
                                </label>

                                <div class="sa-profile-input-wrap">
                                    <i class="bi bi-person sa-profile-input-icon" aria-hidden="true"></i>

                                    <input
                                        class="sa-profile-input {{ $errors->has('full_name') ? 'is-invalid' : '' }}"
                                        id="saProfileName" type="text" name="full_name"
                                        value="{{ old('full_name', $user->full_name) }}" maxlength="100"
                                        autocomplete="name" required>
                                </div>

                                @error('full_name')
                                    <div class="sa-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sa-profile-field">
                                <label class="sa-profile-label" for="saProfileEmail">
                                    Email Address
                                </label>

                                <div class="sa-profile-input-wrap">
                                    <i class="bi bi-envelope sa-profile-input-icon" aria-hidden="true"></i>

                                    <input class="sa-profile-input" id="saProfileEmail" type="email"
                                        value="{{ $user->email }}" autocomplete="email" readonly
                                        aria-describedby="saProfileEmailHelp">
                                </div>

                                <p class="sa-profile-input-help" id="saProfileEmailHelp">
                                    <i class="bi bi-shield-lock" aria-hidden="true"></i>
                                    Used for OTP verification and login.
                                </p>
                            </div>

                            <div class="sa-profile-field">
                                <label class="sa-profile-label" for="saProfilePhone">
                                    Phone Number <span class="sa-profile-label-required">*</span>
                                </label>

                                <div class="sa-profile-input-wrap">
                                    <i class="bi bi-telephone sa-profile-input-icon" aria-hidden="true"></i>

                                    <input class="sa-profile-input {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                        id="saProfilePhone" type="tel" name="phone"
                                        value="{{ old('phone', $user->phone) }}" pattern="[0-9]{10,15}"
                                        maxlength="15" inputmode="numeric" autocomplete="tel" required>
                                </div>

                                <p class="sa-profile-input-help">
                                    <i class="bi bi-info-circle" aria-hidden="true"></i>
                                    Enter 10 digits without spaces.
                                </p>

                                @error('phone')
                                    <div class="sa-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sa-profile-field">
                                <label class="sa-profile-label" for="saProfileCity">
                                    City <span class="sa-profile-label-required">*</span>
                                </label>

                                <div class="sa-profile-input-wrap">
                                    <i class="bi bi-geo-alt sa-profile-input-icon" aria-hidden="true"></i>

                                    <input class="sa-profile-input {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                        id="saProfileCity" type="text" name="city"
                                        value="{{ old('city', $user->city) }}" maxlength="100"
                                        autocomplete="address-level2" required>
                                </div>

                                @error('city')
                                    <div class="sa-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sa-profile-field sa-profile-field-full">
                                <label class="sa-profile-label" for="saProfileCourse">
                                    Course Interested In <span class="sa-profile-label-required">*</span>
                                </label>

                                <div class="sa-profile-input-wrap">
                                    <i class="bi bi-mortarboard sa-profile-input-icon" aria-hidden="true"></i>

                                    <input
                                        class="sa-profile-input {{ $errors->has('course_interested') ? 'is-invalid' : '' }}"
                                        id="saProfileCourse" type="text" name="course_interested"
                                        value="{{ old('course_interested', $user->course_interested) }}"
                                        maxlength="150" required>
                                </div>

                                @error('course_interested')
                                    <div class="sa-profile-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="sa-profile-form-actions">
                            <div class="sa-profile-form-note">
                                <i class="bi bi-shield-check" aria-hidden="true"></i>
                                Your account details stay protected.
                            </div>

                            <div class="sa-profile-buttons">
                                <a href="{{ route('study-abroad.settings') }}"
                                    class="sa-profile-btn sa-profile-btn-secondary">
                                    <i class="bi bi-gear" aria-hidden="true"></i>
                                    Settings
                                </a>

                                <button type="submit" class="sa-profile-btn">
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
    document.addEventListener('DOMContentLoaded', function() {
        const photoInput = document.getElementById('saProfilePhotoInput');
        const photoForm = document.getElementById('saProfilePhotoForm');

        if (photoInput && photoForm) {
            photoInput.addEventListener('change', function() {
                if (this.files && this.files.length > 0) {
                    photoForm.submit();
                }
            });
        }
    });
</script>
