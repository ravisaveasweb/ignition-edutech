<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Abroad Visa Process | Ignition Edutech</title>
    <meta name="description"
        content="Understand the study abroad visa process, requirements, documents, biometrics, interview preparation and visa application journey with Ignition Edutech.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons@7.2.3/css/flag-icons.min.css">


    <style>
        :root {
            --ign-visa-orange: #eb933a;
            --ign-visa-orange-dark: #d97820;
            --ign-visa-orange-light: #fff4e8;
            --ign-visa-navy: #0a2540;
            --ign-visa-navy-2: #123b5d;
            --ign-visa-text: #263238;
            --ign-visa-muted: #6b7280;
            --ign-visa-light: #f7f9fc;
            --ign-visa-border: #e5e9ef;
            --ign-visa-white: #ffffff;
            --ign-visa-green: #1f9d55;
            --ign-visa-shadow: 0 15px 45px rgba(10, 37, 64, .08);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: var(--ign-visa-text);
            background: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        .ign-visa-container {
            width: min(1180px, 92%);
            margin: 0 auto;
        }

        /* Hero */
        .ign-visa-hero {
            position: relative;
            overflow: hidden;
            padding: 88px 0 125px;
            background:
                radial-gradient(circle at 90% 20%, rgba(235, 147, 58, .28), transparent 27%),
                radial-gradient(circle at 8% 85%, rgba(255, 255, 255, .08), transparent 28%),
                linear-gradient(135deg, #061b2f 0%, #0a2540 52%, #123b5d 100%);
        }

        .ign-visa-hero::before {
            content: "";
            position: absolute;
            width: 520px;
            height: 520px;
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 50%;
            right: -200px;
            top: -250px;
        }

        .ign-visa-hero::after {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border: 55px solid rgba(235, 147, 58, .08);
            border-radius: 50%;
            left: -160px;
            bottom: -180px;
        }

        .ign-visa-hero-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            align-items: center;
            gap: 60px;
        }

        .ign-visa-hero-content {
            max-width: 720px;
        }

        .ign-visa-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 15px;
            margin-bottom: 20px;
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 50px;
            background: rgba(255, 255, 255, .08);
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .4px;
            backdrop-filter: blur(8px);
        }

        .ign-visa-badge i {
            color: #ffb76d;
        }

        .ign-visa-hero h1 {
            color: #fff;
            font-size: clamp(38px, 5vw, 62px);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -1.5px;
            margin-bottom: 20px;
        }

        .ign-visa-hero h1 span {
            color: #ffb76d;
        }

        .ign-visa-hero-description {
            max-width: 680px;
            color: rgba(255, 255, 255, .76);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .ign-visa-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .ign-visa-primary-btn,
        .ign-visa-secondary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 13px 21px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            transition: .25s ease;
        }

        .ign-visa-primary-btn {
            background: var(--ign-visa-orange);
            color: #fff;
            box-shadow: 0 8px 22px rgba(235, 147, 58, .25);
        }

        .ign-visa-primary-btn:hover {
            background: var(--ign-visa-orange-dark);
            color: #fff;
            transform: translateY(-3px);
        }

        .ign-visa-secondary-btn {
            background: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .18);
            color: #fff;
        }

        .ign-visa-secondary-btn:hover {
            background: #fff;
            color: var(--ign-visa-navy);
            transform: translateY(-3px);
        }

        /* Hero Visual */
        .ign-visa-hero-visual {
            position: relative;
        }

        .ign-visa-passport-card {
            position: relative;
            max-width: 390px;
            margin-left: auto;
            padding: 28px;
            border: 1px solid rgba(255, 255, 255, .16);
            border-radius: 22px;
            background: rgba(255, 255, 255, .09);
            box-shadow: 0 30px 80px rgba(0, 0, 0, .25);
            backdrop-filter: blur(16px);
        }

        .ign-visa-passport-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        }

        .ign-visa-passport-icon {
            width: 54px;
            height: 54px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            background: var(--ign-visa-orange);
            color: #fff;
            font-size: 25px;
        }

        .ign-visa-passport-top span {
            padding: 6px 11px;
            border-radius: 30px;
            background: rgba(255, 255, 255, .1);
            color: rgba(255, 255, 255, .8);
            font-size: 11px;
            font-weight: 700;
        }

        .ign-visa-passport-card h3 {
            color: #fff;
            font-size: 25px;
            margin-bottom: 7px;
        }

        .ign-visa-passport-card>p {
            color: rgba(255, 255, 255, .62);
            font-size: 13px;
            margin-bottom: 25px;
        }

        .ign-visa-passport-list {
            display: grid;
            gap: 12px;
        }

        .ign-visa-passport-list div {
            display: flex;
            align-items: center;
            gap: 11px;
            color: rgba(255, 255, 255, .82);
            font-size: 13px;
        }

        .ign-visa-passport-list i {
            color: #ffb76d;
        }

        .ign-visa-floating-card {
            position: absolute;
            left: -45px;
            bottom: -35px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 17px;
            border-radius: 13px;
            background: #fff;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .18);
        }

        .ign-visa-floating-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
        }

        .ign-visa-floating-card strong {
            display: block;
            color: var(--ign-visa-navy);
            font-size: 13px;
        }

        .ign-visa-floating-card span {
            display: block;
            color: var(--ign-visa-muted);
            font-size: 11px;
        }

        /* Quick Stats */
        .ign-visa-quick {
            position: relative;
            z-index: 10;
            margin-top: -45px;
        }

        .ign-visa-quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            overflow: hidden;
            border: 1px solid var(--ign-visa-border);
            border-radius: 17px;
            background: #fff;
            box-shadow: var(--ign-visa-shadow);
        }

        .ign-visa-quick-item {
            position: relative;
            padding: 24px 20px;
            text-align: center;
            border-right: 1px solid var(--ign-visa-border);
        }

        .ign-visa-quick-item:last-child {
            border-right: 0;
        }

        .ign-visa-quick-icon {
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            border-radius: 12px;
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
            font-size: 20px;
        }

        .ign-visa-quick-item strong {
            display: block;
            color: var(--ign-visa-navy);
            font-size: 14px;
            margin-bottom: 3px;
        }

        .ign-visa-quick-item span {
            color: var(--ign-visa-muted);
            font-size: 12px;
        }

        /* Section */
        .ign-visa-section {
            /* padding: 85px 0; */
            padding: 53px 0;
        }

        .ign-visa-section-light {
            background: var(--ign-visa-light);
        }

        .ign-visa-heading {
            max-width: 760px;
            margin: 0 auto 48px;
            text-align: center;
        }

        .ign-visa-heading-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-bottom: 9px;
            color: var(--ign-visa-orange);
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        .ign-visa-heading-label::before,
        .ign-visa-heading-label::after {
            content: "";
            width: 20px;
            height: 1px;
            background: var(--ign-visa-orange);
        }

        .ign-visa-heading h2 {
            color: var(--ign-visa-navy);
            font-size: clamp(28px, 4vw, 40px);
            line-height: 1.18;
            margin-bottom: 12px;
            letter-spacing: -.7px;
        }

        .ign-visa-heading p {
            color: var(--ign-visa-muted);
            font-size: 15px;
        }

        /* Journey */
        .ign-visa-journey {
            position: relative;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
        }

        .ign-visa-journey::before {
            content: "";
            position: absolute;
            left: 7%;
            right: 7%;
            top: 39px;
            height: 2px;
            background: linear-gradient(90deg, var(--ign-visa-orange), #f4c28e, var(--ign-visa-orange));
        }

        .ign-visa-journey-card {
            position: relative;
            z-index: 2;
            padding: 20px 14px;
            text-align: center;
            border: 1px solid var(--ign-visa-border);
            border-radius: 14px;
            background: #fff;
            transition: .25s ease;
        }

        .ign-visa-journey-card:hover {
            transform: translateY(-7px);
            box-shadow: var(--ign-visa-shadow);
        }

        .ign-visa-step-number {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            border: 4px solid #fff;
            border-radius: 50%;
            background: var(--ign-visa-orange);
            color: #fff;
            font-size: 12px;
            font-weight: 800;
            box-shadow: 0 5px 15px rgba(235, 147, 58, .28);
        }

        .ign-visa-journey-card h3 {
            color: var(--ign-visa-navy);
            font-size: 15px;
            margin-bottom: 7px;
        }

        .ign-visa-journey-card p {
            color: var(--ign-visa-muted);
            font-size: 12px;
            line-height: 1.6;
        }

        /* Countries Toolbar */
        .ign-visa-country-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 28px;
        }

        .ign-visa-country-count {
            color: var(--ign-visa-muted);
            font-size: 13px;
        }

        .ign-visa-country-count strong {
            color: var(--ign-visa-navy);
        }

        .ign-visa-search {
            position: relative;
            width: 280px;
        }

        .ign-visa-search>i {
            position: absolute;
            left: 14px;
            top: 50%;
            z-index: 2;
            transform: translateY(-50%);
            color: var(--ign-visa-muted);
            pointer-events: none;
        }

        .ign-visa-search input {
            width: 100%;
            height: 43px;
            padding: 0 43px 0 40px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 8px;
            outline: none;
            background: #fff;
            color: var(--ign-visa-text);
            font-size: 13px;
            transition: .2s ease;
        }

        .ign-visa-search input::placeholder {
            color: #9ca3af;
        }

        .ign-visa-search input:focus {
            border-color: var(--ign-visa-orange);
            box-shadow: 0 0 0 3px rgba(235, 147, 58, .1);
        }

        /* Search Clear */
        .ign-visa-search-clear {
            position: absolute;
            right: 10px;
            top: 50%;
            z-index: 3;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(-50%);
            border-radius: 50%;
            color: var(--ign-visa-muted);
            font-size: 10px;
            transition: .2s ease;
        }

        .ign-visa-search-clear:hover {
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
        }

        .ign-visa-search-clear i {
            position: static;
            transform: none;
        }

        /* Countries */
        .ign-visa-country-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .ign-visa-country-card {
            position: relative;
            overflow: hidden;
            padding: 25px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 17px;
            background: #fff;
            transition: .28s ease;
        }

        .ign-visa-country-card::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--ign-visa-orange), #ffc47f);
            transform: scaleX(0);
            transform-origin: left;
            transition: .28s ease;
        }

        .ign-visa-country-card:hover {
            transform: translateY(-7px);
            border-color: #f2c28d;
            box-shadow: var(--ign-visa-shadow);
        }

        .ign-visa-country-card:hover::before {
            transform: scaleX(1);
        }

        .ign-visa-country-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-bottom: 17px;
        }


        .ign-visa-country-flag {
            width: 58px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: var(--ign-visa-orange-light);
            overflow: hidden;
        }

        .ign-visa-country-flag .fi {
            width: 42px;
            height: 28px;
            border-radius: 4px;
            background-size: cover;
            background-position: center;
        }

        .ign-visa-country-flag i {
            color: var(--ign-visa-orange);
            font-size: 24px;
        }

        .ign-visa-country-badge {
            padding: 5px 8px;
            border-radius: 20px;
            background: #edf9f1;
            color: var(--ign-visa-green);
            font-size: 9px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .ign-visa-country-card h3 {
            color: var(--ign-visa-navy);
            font-size: 20px;
            margin-bottom: 4px;
        }

        .ign-visa-country-card>p {
            color: var(--ign-visa-orange-dark);
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .ign-visa-country-description {
            min-height: 63px;
            color: var(--ign-visa-muted);
            font-size: 12px;
            line-height: 1.7;
            margin-bottom: 18px;
        }

        .ign-visa-country-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid var(--ign-visa-border);
        }

        .ign-visa-country-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--ign-visa-navy);
            font-size: 12px;
            font-weight: 800;
            transition: .2s ease;
        }

        .ign-visa-country-link:hover {
            color: var(--ign-visa-orange);
            gap: 10px;
        }

        .ign-visa-country-arrow {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
        }

        /* Pagination */
        .ign-visa-pagination-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 38px;
            padding-top: 25px;
            border-top: 1px solid var(--ign-visa-border);
        }

        .ign-visa-pagination-info {
            color: var(--ign-visa-muted);
            font-size: 12px;
        }

        .ign-visa-pagination-info strong {
            color: var(--ign-visa-navy);
        }

        .ign-visa-pagination {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .ign-visa-page-btn {
            min-width: 38px;
            height: 38px;
            padding: 0 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 8px;
            background: #fff;
            color: var(--ign-visa-navy);
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .ign-visa-page-btn:hover {
            border-color: var(--ign-visa-orange);
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange-dark);
        }

        .ign-visa-page-btn.active {
            border-color: var(--ign-visa-orange);
            background: var(--ign-visa-orange);
            color: #fff;
        }

        .ign-visa-page-btn.disabled {
            opacity: .45;
            cursor: not-allowed;
            pointer-events: none;
        }

        /* Empty Country Result */
        .ign-visa-country-empty {
            grid-column: 1 / -1;
            padding: 65px 20px;
            text-align: center;
            border: 1px solid var(--ign-visa-border);
            border-radius: 17px;
            background: #fff;
        }

        .ign-visa-country-empty>i {
            width: 65px;
            height: 65px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            border-radius: 50%;
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
            font-size: 28px;
        }

        .ign-visa-country-empty h3 {
            color: var(--ign-visa-navy);
            font-size: 20px;
            margin-bottom: 5px;
        }

        .ign-visa-country-empty p {
            color: var(--ign-visa-muted);
            font-size: 13px;
            margin-bottom: 18px;
        }

        .ign-visa-empty-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 17px;
            border-radius: 7px;
            background: var(--ign-visa-orange);
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .ign-visa-empty-btn:hover {
            background: var(--ign-visa-orange-dark);
            color: #fff;
        }

        /* Why Ignition */
        .ign-visa-benefits {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
        }

        .ign-visa-benefit {
            display: flex;
            gap: 18px;
            padding: 25px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 15px;
            background: #fff;
            transition: .25s ease;
        }

        .ign-visa-benefit:hover {
            transform: translateY(-4px);
            box-shadow: var(--ign-visa-shadow);
        }

        .ign-visa-benefit-icon {
            flex: 0 0 50px;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
            font-size: 22px;
        }

        .ign-visa-benefit h3 {
            color: var(--ign-visa-navy);
            font-size: 17px;
            margin-bottom: 5px;
        }

        .ign-visa-benefit p {
            color: var(--ign-visa-muted);
            font-size: 13px;
            line-height: 1.7;
        }

        /* Requirements */
        .ign-visa-requirements-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .ign-visa-requirement-card {
            position: relative;
            overflow: hidden;
            padding: 27px 22px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 15px;
            background: #fff;
            transition: .25s ease;
        }

        .ign-visa-requirement-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--ign-visa-shadow);
        }

        .ign-visa-requirement-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 17px;
            border-radius: 12px;
            background: var(--ign-visa-orange-light);
            color: var(--ign-visa-orange);
            font-size: 21px;
        }

        .ign-visa-requirement-card h3 {
            color: var(--ign-visa-navy);
            font-size: 16px;
            margin-bottom: 8px;
        }

        .ign-visa-requirement-card p {
            color: var(--ign-visa-muted);
            font-size: 12px;
            line-height: 1.7;
        }

        /* Checklist */
        .ign-visa-checklist-layout {
            display: grid;
            grid-template-columns: .75fr 1.25fr;
            gap: 45px;
            align-items: center;
        }

        .ign-visa-checklist-intro h2 {
            color: var(--ign-visa-navy);
            font-size: 34px;
            line-height: 1.2;
            margin-bottom: 14px;
        }

        .ign-visa-checklist-intro p {
            color: var(--ign-visa-muted);
            font-size: 14px;
            margin-bottom: 22px;
        }

        .ign-visa-progress {
            padding: 17px;
            border-radius: 12px;
            background: var(--ign-visa-orange-light);
        }

        .ign-visa-progress-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 9px;
            color: var(--ign-visa-navy);
            font-size: 12px;
            font-weight: 700;
        }

        .ign-visa-progress-bar {
            height: 7px;
            overflow: hidden;
            border-radius: 20px;
            background: #f1d7b7;
        }

        .ign-visa-progress-bar span {
            display: block;
            width: 72%;
            height: 100%;
            border-radius: inherit;
            background: var(--ign-visa-orange);
        }

        .ign-visa-checklist-wrapper {
            padding: 25px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 17px;
            background: #fff;
            box-shadow: var(--ign-visa-shadow);
        }

        .ign-visa-checklist {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 11px;
        }

        .ign-visa-check-item {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 52px;
            padding: 11px 13px;
            border: 1px solid #edf0f4;
            border-radius: 9px;
            background: #fbfcfd;
            transition: .2s ease;
        }

        .ign-visa-check-item:hover {
            border-color: #f1c58f;
            background: var(--ign-visa-orange-light);
        }

        .ign-visa-check-item i {
            color: var(--ign-visa-green);
            font-size: 17px;
        }

        .ign-visa-check-item span {
            color: var(--ign-visa-text);
            font-size: 12px;
        }

        /* Information Banner */
        .ign-visa-note {
            margin-top: 25px;
            padding: 17px 19px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            border: 1px solid #f1d4ad;
            border-radius: 11px;
            background: #fff9f1;
        }

        .ign-visa-note i {
            color: var(--ign-visa-orange);
            font-size: 18px;
            margin-top: 2px;
        }

        .ign-visa-note p {
            color: #735b42;
            font-size: 12px;
        }

        /* FAQ */
        .ign-visa-faq {
            max-width: 850px;
            margin: 0 auto;
        }

        .ign-visa-faq-item {
            margin-bottom: 12px;
            border: 1px solid var(--ign-visa-border);
            border-radius: 11px;
            background: #fff;
            overflow: hidden;
        }

        .ign-visa-faq-item summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 18px 20px;
            cursor: pointer;
            list-style: none;
            color: var(--ign-visa-navy);
            font-size: 14px;
            font-weight: 700;
        }

        .ign-visa-faq-item summary::-webkit-details-marker {
            display: none;
        }

        .ign-visa-faq-item summary i {
            color: var(--ign-visa-orange);
            transition: .2s ease;
        }

        .ign-visa-faq-item[open] summary i {
            transform: rotate(180deg);
        }

        .ign-visa-faq-answer {
            padding: 0 20px 20px;
            color: var(--ign-visa-muted);
            font-size: 13px;
            line-height: 1.7;
        }

        /* CTA */
        .ign-visa-cta {
            padding: 80px 0;
        }

        .ign-visa-cta-box {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            padding: 52px;
            border-radius: 22px;
            background:
                radial-gradient(circle at 90% 20%, rgba(235, 147, 58, .3), transparent 25%),
                linear-gradient(135deg, #081e33, #123b5d);
        }

        .ign-visa-cta-box::after {
            content: "";
            position: absolute;
            width: 240px;
            height: 240px;
            border: 45px solid rgba(255, 255, 255, .05);
            border-radius: 50%;
            right: -100px;
            bottom: -130px;
        }

        .ign-visa-cta-content {
            position: relative;
            z-index: 2;
            max-width: 690px;
        }

        .ign-visa-cta-content h2 {
            color: #fff;
            font-size: clamp(27px, 4vw, 37px);
            line-height: 1.2;
            margin-bottom: 11px;
        }

        .ign-visa-cta-content p {
            color: rgba(255, 255, 255, .7);
            font-size: 14px;
        }

        .ign-visa-cta-box .ign-visa-primary-btn {
            position: relative;
            z-index: 3;
            flex-shrink: 0;
        }

        /* Tablet */
        @media (max-width: 1050px) {
            .ign-visa-hero-grid {
                grid-template-columns: 1fr;
            }

            .ign-visa-hero-visual {
                max-width: 500px;
                width: 100%;
                margin: 10px auto 0;
            }

            .ign-visa-country-grid,
            .ign-visa-requirements-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ign-visa-journey {
                grid-template-columns: repeat(3, 1fr);
            }

            .ign-visa-journey::before {
                display: none;
            }

            .ign-visa-checklist-layout {
                grid-template-columns: 1fr;
            }
        }

        /* Small Tablet */
        @media (max-width: 800px) {
            .ign-visa-quick-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ign-visa-quick-item:nth-child(2) {
                border-right: 0;
            }

            .ign-visa-quick-item:nth-child(-n+2) {
                border-bottom: 1px solid var(--ign-visa-border);
            }

            .ign-visa-benefits {
                grid-template-columns: 1fr;
            }

            .ign-visa-country-toolbar {
                align-items: stretch;
                flex-direction: column;
            }

            .ign-visa-search {
                width: 100%;
            }

            .ign-visa-cta-box {
                padding: 38px 28px;
                flex-direction: column;
                align-items: flex-start;
            }

            .ign-visa-pagination-wrapper {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Mobile */
        @media (max-width: 600px) {
            .ign-visa-hero {
                padding: 60px 0 95px;
            }

            .ign-visa-hero h1 {
                font-size: 38px;
            }

            .ign-visa-hero-actions {
                flex-direction: column;
            }

            .ign-visa-primary-btn,
            .ign-visa-secondary-btn {
                width: 100%;
            }

            .ign-visa-floating-card {
                left: 10px;
                bottom: -45px;
            }

            .ign-visa-section {
                padding: 60px 0;
            }

            .ign-visa-quick-grid,
            .ign-visa-journey,
            .ign-visa-country-grid,
            .ign-visa-requirements-grid,
            .ign-visa-checklist {
                grid-template-columns: 1fr;
            }

            .ign-visa-quick-item {
                border-right: 0;
                border-bottom: 1px solid var(--ign-visa-border);
            }

            .ign-visa-quick-item:last-child {
                border-bottom: 0;
            }

            .ign-visa-checklist-wrapper {
                padding: 17px;
            }

            .ign-visa-cta {
                padding: 55px 0;
            }

            .ign-visa-pagination-wrapper {
                margin-top: 30px;
                padding-top: 20px;
            }

            .ign-visa-pagination {
                gap: 5px;
            }

            .ign-visa-page-btn {
                width: 35px;
                height: 35px;
            }

            .ign-visa-pagination-info {
                text-align: center;
            }

            .ign-visa-country-empty {
                padding: 50px 15px;
            }
        }

        /* Extra Small Mobile */
        @media (max-width: 380px) {
            .ign-visa-pagination {
                gap: 3px;
            }

            .ign-visa-page-btn {
                width: 32px;
                height: 32px;
                font-size: 11px;
            }

            .ign-visa-country-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    {{-- Header --}}
    <x-study-abroad-header />

    {{-- Hero --}}
    <section class="ign-visa-hero">
        <div class="ign-visa-container">
            <div class="ign-visa-hero-grid">
                <div class="ign-visa-hero-content">
                    <div class="ign-visa-badge">
                        <i class="bi bi-passport"></i>
                        Study Abroad Visa Guidance
                    </div>
                    <h1>Your Journey to a <span>Student Visa</span> Starts Here</h1>
                    <p class="ign-visa-hero-description">Understand the study abroad visa process, documentation,
                        financial preparation, biometrics and application journey with guidance from Ignition Edutech.
                    </p>
                    <div class="ign-visa-hero-actions">
                        <a href="{{ route('study-abroad.application') }}" class="ign-visa-primary-btn">Start Your
                            Application <i class="bi bi-arrow-right"></i></a>
                        <a href="#visaCountries" class="ign-visa-secondary-btn">Explore Visa Countries <i
                                class="bi bi-globe2"></i></a>
                    </div>
                </div>

                {{-- Hero Visual --}}
                <div class="ign-visa-hero-visual">
                    <div class="ign-visa-passport-card">
                        <div class="ign-visa-passport-top">
                            <div class="ign-visa-passport-icon">
                                <i class="bi bi-passport"></i>
                            </div>
                            <span>VISA JOURNEY</span>
                        </div>
                        <h3>Plan. Prepare. Apply.</h3>
                        <p>Everything you need to prepare for your international education journey.</p>
                        <div class="ign-visa-passport-list">
                            <div><i class="bi bi-check-circle-fill"></i> Country-specific visa guidance</div>
                            <div><i class="bi bi-check-circle-fill"></i> Document preparation</div>
                            <div><i class="bi bi-check-circle-fill"></i> Application assistance</div>
                            <div><i class="bi bi-check-circle-fill"></i> Expert counselling</div>
                        </div>
                    </div>
                    <div class="ign-visa-floating-card">
                        <div class="ign-visa-floating-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <strong>Guided Application</strong>
                            <span>From preparation to submission</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Quick Benefits --}}
    <section class="ign-visa-quick">
        <div class="ign-visa-container">
            <div class="ign-visa-quick-grid">
                <div class="ign-visa-quick-item">
                    <div class="ign-visa-quick-icon"><i class="bi bi-globe2"></i></div>
                    <strong>Multiple Destinations</strong>
                    <span>Explore popular countries</span>
                </div>
                <div class="ign-visa-quick-item">
                    <div class="ign-visa-quick-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <strong>Document Guidance</strong>
                    <span>Prepare your documents</span>
                </div>
                <div class="ign-visa-quick-item">
                    <div class="ign-visa-quick-icon"><i class="bi bi-person-check"></i></div>
                    <strong>Application Support</strong>
                    <span>Step-by-step assistance</span>
                </div>
                <div class="ign-visa-quick-item">
                    <div class="ign-visa-quick-icon"><i class="bi bi-headset"></i></div>
                    <strong>Expert Counselling</strong>
                    <span>Guidance throughout</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Visa Journey --}}
    <section class="ign-visa-section">
        <div class="ign-visa-container">
            <div class="ign-visa-heading">
                <span class="ign-visa-heading-label">Visa Journey</span>
                <h2>From Admission to Visa Decision</h2>
                <p>Understand the major stages involved in planning and preparing your student visa application.</p>
            </div>

            <div class="ign-visa-journey">
                @php
                    $journeySteps = [
                        [
                            'icon' => 'bi-globe2',
                            'title' => 'Choose Country',
                            'text' => 'Select a destination based on your course and career goals.',
                        ],
                        [
                            'icon' => 'bi-mortarboard',
                            'title' => 'Get Admission',
                            'text' => 'Secure admission and receive university documents.',
                        ],
                        [
                            'icon' => 'bi-folder-check',
                            'title' => 'Prepare Documents',
                            'text' => 'Organise academic, financial and identity documents.',
                        ],
                        [
                            'icon' => 'bi-file-earmark-text',
                            'title' => 'Submit Application',
                            'text' => 'Complete your visa application and required information.',
                        ],
                        [
                            'icon' => 'bi-fingerprint',
                            'title' => 'Biometrics',
                            'text' => 'Attend biometrics or verification where applicable.',
                        ],
                        [
                            'icon' => 'bi-patch-check',
                            'title' => 'Visa Decision',
                            'text' => 'Receive the decision and prepare for your journey.',
                        ],
                    ];
                @endphp

                @foreach ($journeySteps as $index => $step)
                    <div class="ign-visa-journey-card">
                        <div class="ign-visa-step-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3><i class="bi {{ $step['icon'] }}"
                                style="color: var(--ign-visa-orange); margin-right:4px;"></i>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Visa Countries --}}
    <section class="ign-visa-section ign-visa-section-light" id="visaCountries">
        <div class="ign-visa-container">

            <div class="ign-visa-heading">
                <span class="ign-visa-heading-label">Visa Destinations</span>
                <h2>Explore Student Visa Countries</h2>
                <p>Choose your preferred study destination and explore the available visa guidance.</p>
            </div>

            {{-- CHANGE: Country count now uses Laravel pagination --}}
            <div class="ign-visa-country-toolbar">

                <div class="ign-visa-country-count">

                    @if ($countries->total() > 0)
                        Showing
                        <strong>{{ $countries->firstItem() }}</strong> -
                        <strong>{{ $countries->lastItem() }}</strong>
                        of
                        <strong>{{ $countries->total() }}</strong>
                        {{ $countries->total() == 1 ? 'country' : 'countries' }}
                    @else
                        No countries found
                    @endif

                </div>

                {{-- CHANGE: Search is now handled by Laravel --}}
                <form method="GET" action="{{ route('study-abroad.visa-process') }}" class="ign-visa-search"
                    id="ignVisaCountrySearchForm">

                    <i class="bi bi-search"></i>

                    <input type="text" name="search" id="ignVisaCountrySearch" value="{{ $search ?? '' }}"
                        placeholder=" Search country..." autocomplete="off">

                    {{-- ADD: Clear search button --}}
                    @if (!empty($search))
                        <a href="{{ route('study-abroad.visa-process') }}" class="ign-visa-search-clear"
                            title="Clear search">

                            <i class="bi bi-x-lg"></i>

                        </a>
                    @endif

                </form>

            </div>

            {{-- Country Cards --}}
            <div class="ign-visa-country-grid" id="ignVisaCountryGrid">

                @forelse ($countries as $country)
                    {{-- Existing country card --}}
                    <div class="ign-visa-country-card" data-country="{{ strtolower($country->country) }}">

                        <div class="ign-visa-country-top">

                            <div class="ign-visa-country-flag">
                                @if ($country->country_code)
                                    <span class="fi fi-{{ strtolower($country->country_code) }}"></span>
                                @else
                                    <i class="bi bi-globe2"></i>
                                @endif
                            </div>

                            @if ($country->visaGuide)
                                <span class="ign-visa-country-badge">
                                    Guide Available
                                </span>
                            @else
                                <span class="ign-visa-country-badge" style="background:#fff7ed;color:#c56b1d;">
                                    Coming Soon
                                </span>
                            @endif

                        </div>

                        <h3>
                            {{ $country->country }}
                        </h3>

                        <p>
                            {{ $country->visa_name }}
                        </p>

                        <div class="ign-visa-country-description">
                            {{ $country->short_description }}
                        </div>

                        <div class="ign-visa-country-footer">

                            @if ($country->visaGuide)
                                <a href="{{ route('study-abroad.visa-guide', $country->country_code) }}"
                                    class="ign-visa-country-link">

                                    View Visa Guide

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                                <div class="ign-visa-country-arrow">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            @else
                                <span class="ign-visa-country-link">
                                    Guide Coming Soon
                                </span>
                            @endif

                        </div>

                    </div>

                @empty

                    {{-- ADD: Better empty search result --}}
                    <div class="ign-visa-country-empty">

                        <i class="bi bi-globe2"></i>

                        <h3>
                            No Countries Found
                        </h3>

                        <p>
                            We couldn't find a visa destination matching your search.
                        </p>

                        @if (!empty($search))
                            <a href="{{ route('study-abroad.visa-process') }}" class="ign-visa-empty-btn">

                                View All Countries

                            </a>
                        @endif

                    </div>
                @endforelse

            </div>

            {{-- ADD: Laravel pagination --}}
            @if ($countries->hasPages())
                <div class="ign-visa-pagination-wrapper">
                    <div class="ign-visa-pagination-info">
                        Page <strong>{{ $countries->currentPage() }}</strong> of
                        <strong>{{ $countries->lastPage() }}</strong>
                    </div>
                    <div class="ign-visa-pagination">
                        @if ($countries->onFirstPage())
                            <span class="ign-visa-page-btn disabled">
                                <i class="bi bi-chevron-left"></i>
                                Previous
                            </span>
                        @else
                            <a href="{{ $countries->previousPageUrl() }}" class="ign-visa-page-btn">
                                <i class="bi bi-chevron-left"></i>
                                Previous
                            </a>
                        @endif

                        @foreach ($countries->getUrlRange(max(1, $countries->currentPage() - 2), min($countries->lastPage(), $countries->currentPage() + 2)) as $page => $url)
                            @if ($page == $countries->currentPage())
                                <span class="ign-visa-page-btn active">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="ign-visa-page-btn">{{ $page }}</a>
                            @endif
                        @endforeach

                        @if ($countries->hasMorePages())
                            <a href="{{ $countries->nextPageUrl() }}" class="ign-visa-page-btn">
                                Next
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        @else
                            <span class="ign-visa-page-btn disabled">
                                Next
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    </section>

    {{-- Why Ignition --}}
    <section class="ign-visa-section">
        <div class="ign-visa-container">
            <div class="ign-visa-heading">
                <span class="ign-visa-heading-label">Why Ignition</span>
                <h2>More Than Just Visa Information</h2>
                <p>Build your study abroad journey with guidance across the important stages of your application.</p>
            </div>

            <div class="ign-visa-benefits">
                <div class="ign-visa-benefit">
                    <div class="ign-visa-benefit-icon"><i class="bi bi-compass"></i></div>
                    <div>
                        <h3>Destination Guidance</h3>
                        <p>Understand different destinations and explore options that match your education goals.</p>
                    </div>
                </div>

                <div class="ign-visa-benefit">
                    <div class="ign-visa-benefit-icon"><i class="bi bi-file-earmark-check"></i></div>
                    <div>
                        <h3>Document Preparation</h3>
                        <p>Keep your academic, financial and identity documents organised before applying.</p>
                    </div>
                </div>

                <div class="ign-visa-benefit">
                    <div class="ign-visa-benefit-icon"><i class="bi bi-person-video3"></i></div>
                    <div>
                        <h3>Application Guidance</h3>
                        <p>Understand the major stages of the application and submission process.</p>
                    </div>
                </div>

                <div class="ign-visa-benefit">
                    <div class="ign-visa-benefit-icon"><i class="bi bi-headset"></i></div>
                    <div>
                        <h3>Personalised Support</h3>
                        <p>Get guidance throughout your study abroad planning and application journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Requirements --}}
    <section class="ign-visa-section ign-visa-section-light">
        <div class="ign-visa-container">
            <div class="ign-visa-heading">
                <span class="ign-visa-heading-label">Preparation</span>
                <h2>What Students Usually Prepare</h2>
                <p>Requirements differ by country, but these are common areas students should plan for.</p>
            </div>

            <div class="ign-visa-requirements-grid">
                <div class="ign-visa-requirement-card">
                    <div class="ign-visa-requirement-icon"><i class="bi bi-mortarboard"></i></div>
                    <h3>Academic Records</h3>
                    <p>Certificates, transcripts, admission letters and other education-related records.</p>
                </div>

                <div class="ign-visa-requirement-card">
                    <div class="ign-visa-requirement-icon"><i class="bi bi-bank"></i></div>
                    <h3>Financial Preparation</h3>
                    <p>Financial documents supporting tuition and living expense planning.</p>
                </div>

                <div class="ign-visa-requirement-card">
                    <div class="ign-visa-requirement-icon"><i class="bi bi-person-vcard"></i></div>
                    <h3>Identity Documents</h3>
                    <p>Passport, photographs and other identity documents where applicable.</p>
                </div>

                <div class="ign-visa-requirement-card">
                    <div class="ign-visa-requirement-icon"><i class="bi bi-chat-square-text"></i></div>
                    <h3>Interview Preparation</h3>
                    <p>Some destinations may require interviews or additional verification.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Document Checklist --}}
    <section class="ign-visa-section">
        <div class="ign-visa-container">
            <div class="ign-visa-checklist-layout">
                <div class="ign-visa-checklist-intro">
                    <span class="ign-visa-heading-label">Document Checklist</span>
                    <h2>Get Your Documents Ready Before You Apply</h2>
                    <p>Keeping your documents organised can make the application process easier and help you identify
                        missing information early.</p>

                    <div class="ign-visa-progress">
                        <div class="ign-visa-progress-top">
                            <span>Preparation Progress</span>
                            <span>72%</span>
                        </div>
                        <div class="ign-visa-progress-bar"><span></span></div>
                    </div>

                    <div class="ign-visa-note">
                        <i class="bi bi-info-circle"></i>
                        <p>Document requirements can vary by destination. Always check the latest requirements for your
                            selected country before submitting an application.</p>
                    </div>
                </div>

                <div class="ign-visa-checklist-wrapper">
                    <div class="ign-visa-checklist">
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>Valid
                                passport</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>University
                                admission letter</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>Academic
                                certificates and transcripts</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>English language
                                test results where applicable</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>Financial
                                documents</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>Passport-size
                                photographs</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>Visa application
                                forms</span></div>
                        <div class="ign-visa-check-item"><i class="bi bi-check-circle-fill"></i><span>Country-specific
                                documents</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="ign-visa-section ign-visa-section-light">
        <div class="ign-visa-container">
            <div class="ign-visa-heading">
                <span class="ign-visa-heading-label">Visa Questions</span>
                <h2>Frequently Asked Questions</h2>
                <p>Some common questions students have while planning their student visa journey.</p>
            </div>

            <div class="ign-visa-faq">
                <details class="ign-visa-faq-item">
                    <summary>
                        <span>When should I start preparing for my visa?</span>
                        <i class="bi bi-chevron-down"></i>
                    </summary>
                    <div class="ign-visa-faq-answer">It is generally better to start preparing your documents and
                        understanding the visa process well before your intended intake. Country-specific timelines can
                        vary.</div>
                </details>

                <details class="ign-visa-faq-item">
                    <summary>
                        <span>Are visa requirements the same for every country?</span>
                        <i class="bi bi-chevron-down"></i>
                    </summary>
                    <div class="ign-visa-faq-answer">No. Visa requirements, financial evidence, application procedures
                        and supporting documents can differ significantly between destinations.</div>
                </details>

                <details class="ign-visa-faq-item">
                    <summary>
                        <span>Do all countries require a visa interview?</span>
                        <i class="bi bi-chevron-down"></i>
                    </summary>
                    <div class="ign-visa-faq-answer">Interview and verification requirements depend on the destination
                        and individual application. Applicants should always check the applicable official requirements.
                    </div>
                </details>

                <details class="ign-visa-faq-item">
                    <summary>
                        <span>Can Ignition help me with my study abroad journey?</span>
                        <i class="bi bi-chevron-down"></i>
                    </summary>
                    <div class="ign-visa-faq-answer">Yes. Ignition Edutech can provide guidance across important stages
                        of your study abroad planning, including destination selection, university applications and visa
                        preparation.</div>
                </details>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="ign-visa-cta">
        <div class="ign-visa-container">
            <div class="ign-visa-cta-box">
                <div class="ign-visa-cta-content">
                    <h2>Your International Education Journey Starts With a Plan.</h2>
                    <p>Get personalised guidance for university selection, applications and student visa preparation.
                    </p>
                </div>
                <a href="{{ route('study-abroad.application') }}" class="ign-visa-primary-btn">Register Now <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-frontend-footer />

    {{-- Country Search --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get country search form
            const searchInput = document.getElementById('ignVisaCountrySearch');
            const searchForm = document.getElementById('ignVisaCountrySearchForm');

            if (!searchInput || !searchForm) return;

            // Submit search after user stops typing
            let searchTimer;

            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimer);

                searchTimer = setTimeout(function() {
                    searchForm.submit();
                }, 500);
            });
        });
    </script>
</body>

</html>
