<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $visaCountry->visaGuide->page_title }} | Ignition Edutech</title>
<meta name="description" content="{{ $visaCountry->visaGuide->overview }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
:root {
    --ign-vg-orange: #eb933a;
    --ign-vg-orange-dark: #d97820;
    --ign-vg-orange-light: #fff4e7;
    --ign-vg-navy: #0a2540;
    --ign-vg-navy-2: #123d5b;
    --ign-vg-blue-light: #eef5fa;
    --ign-vg-text: #263238;
    --ign-vg-muted: #687586;
    --ign-vg-bg: #f5f7fa;
    --ign-vg-white: #ffffff;
    --ign-vg-border: #e4e9ef;
    --ign-vg-green: #1f9d55;
    --ign-vg-red: #d9534f;
    --ign-vg-shadow: 0 15px 45px rgba(10, 37, 64, .08);
    --ign-vg-shadow-sm: 0 7px 25px rgba(10, 37, 64, .06);
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
    color: var(--ign-vg-text);
    background: var(--ign-vg-bg);
    line-height: 1.6;
}
a {
    text-decoration: none;
}
.ign-vg-container {
    width: min(1180px, 92%);
    margin: 0 auto;
}

/* HERO */
.ign-vg-hero {
    position: relative;
    overflow: hidden;
    background:
        radial-gradient(circle at 90% 10%, rgba(235, 147, 58, .28), transparent 28%),
        radial-gradient(circle at 5% 90%, rgba(255,255,255,.07), transparent 25%),
        linear-gradient(135deg, #061a2d 0%, #0a2540 55%, #174866 100%);
    padding: 48px 0 110px;
}
.ign-vg-hero::before {
    content: "";
    position: absolute;
    width: 500px;
    height: 500px;
    right: -220px;
    top: -250px;
    border: 1px solid rgba(255,255,255,.08);
    border-radius: 50%;
}
.ign-vg-hero::after {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    right: -120px;
    top: -170px;
    border: 1px solid rgba(255,255,255,.06);
    border-radius: 50%;
}
.ign-vg-hero-content {
    position: relative;
    z-index: 2;
}
.ign-vg-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,.68);
    font-size: 13px;
    margin-bottom: 32px;
    transition: .2s ease;
}
.ign-vg-back:hover {
    color: #fff;
    transform: translateX(-3px);
}
.ign-vg-country-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 14px;
    border-radius: 50px;
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    background: rgba(255,255,255,.09);
    border: 1px solid rgba(255,255,255,.15);
    backdrop-filter: blur(10px);
    margin-bottom: 20px;
}
.ign-vg-country-badge span {
    font-size: 23px;
}
.ign-vg-hero h1 {
    max-width: 850px;
    color: #fff;
    font-size: clamp(34px, 5vw, 58px);
    line-height: 1.08;
    letter-spacing: -1px;
    margin-bottom: 18px;
}
.ign-vg-hero-description {
    max-width: 790px;
    color: rgba(255,255,255,.72);
    font-size: 16px;
    line-height: 1.8;
}
.ign-vg-hero-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 27px;
}
.ign-vg-hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 13px;
    border-radius: 8px;
    color: rgba(255,255,255,.86);
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.1);
    font-size: 12px;
}
.ign-vg-hero-tag i {
    color: var(--ign-vg-orange);
}

/* FLOATING STATS */
.ign-vg-stats-wrap {
    position: relative;
    z-index: 5;
    margin-top: -55px;
}
.ign-vg-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
}
.ign-vg-stat {
    position: relative;
    overflow: hidden;
    min-height: 125px;
    padding: 20px;
    background: #fff;
    border: 1px solid var(--ign-vg-border);
    border-radius: 15px;
    box-shadow: var(--ign-vg-shadow);
}
.ign-vg-stat::after {
    content: "";
    position: absolute;
    width: 90px;
    height: 90px;
    right: -35px;
    bottom: -40px;
    border-radius: 50%;
    background: var(--ign-vg-orange-light);
}
.ign-vg-stat-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    color: var(--ign-vg-orange);
    background: var(--ign-vg-orange-light);
    font-size: 18px;
    margin-bottom: 10px;
}
.ign-vg-stat strong {
    display: block;
    position: relative;
    z-index: 2;
    color: var(--ign-vg-navy);
    font-size: 13px;
    margin-bottom: 3px;
}
.ign-vg-stat span {
    position: relative;
    z-index: 2;
    color: var(--ign-vg-muted);
    font-size: 12px;
}

/* TRUST STRIP */
.ign-vg-trust {
    margin-top: 25px;
    padding: 17px 20px;
    background: #fff;
    border: 1px solid var(--ign-vg-border);
    border-radius: 13px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}
.ign-vg-trust-left {
    display: flex;
    align-items: center;
    gap: 12px;
}
.ign-vg-trust-icon {
    width: 38px;
    height: 38px;
    flex: 0 0 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--ign-vg-green);
    background: #edf8f1;
}
.ign-vg-trust strong {
    display: block;
    color: var(--ign-vg-navy);
    font-size: 13px;
}
.ign-vg-trust span {
    display: block;
    color: var(--ign-vg-muted);
    font-size: 11px;
}
.ign-vg-trust-right {
    color: var(--ign-vg-muted);
    font-size: 11px;
}

/* MAIN */
.ign-vg-main {
    padding: 32px 0 80px;
}
.ign-vg-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 315px;
    gap: 28px;
    align-items: start;
}

/* QUICK NAV */
.ign-vg-nav {
    position: sticky;
    top: 15px;
    z-index: 10;
    margin-bottom: 22px;
    padding: 10px;
    background: rgba(255,255,255,.94);
    backdrop-filter: blur(12px);
    border: 1px solid var(--ign-vg-border);
    border-radius: 12px;
    box-shadow: var(--ign-vg-shadow-sm);
}
.ign-vg-nav-title {
    padding: 5px 9px 8px;
    color: var(--ign-vg-navy);
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .5px;
}
.ign-vg-nav-links {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
}
.ign-vg-nav-links a {
    padding: 7px 10px;
    border-radius: 7px;
    color: var(--ign-vg-muted);
    font-size: 11px;
    font-weight: 600;
    transition: .2s ease;
}
.ign-vg-nav-links a:hover {
    color: var(--ign-vg-orange);
    background: var(--ign-vg-orange-light);
}

/* CARDS */
.ign-vg-card {
    position: relative;
    background: #fff;
    border: 1px solid var(--ign-vg-border);
    border-radius: 17px;
    padding: 28px;
    margin-bottom: 20px;
    box-shadow: var(--ign-vg-shadow-sm);
}
.ign-vg-card:last-child {
    margin-bottom: 0;
}
.ign-vg-card-heading {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 17px;
}
.ign-vg-heading-icon {
    width: 42px;
    height: 42px;
    flex: 0 0 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    color: var(--ign-vg-orange);
    background: var(--ign-vg-orange-light);
    font-size: 18px;
}
.ign-vg-card h2 {
    color: var(--ign-vg-navy);
    font-size: 21px;
}
.ign-vg-card > p {
    color: var(--ign-vg-muted);
    font-size: 14px;
    line-height: 1.85;
}

/* HIGHLIGHT BOX */
.ign-vg-highlight {
    display: flex;
    gap: 14px;
    padding: 17px;
    margin-top: 20px;
    border-radius: 12px;
    background: linear-gradient(135deg, #fff7ed, #fffaf5);
    border-left: 4px solid var(--ign-vg-orange);
}
.ign-vg-highlight i {
    color: var(--ign-vg-orange);
    font-size: 20px;
}
.ign-vg-highlight strong {
    display: block;
    color: var(--ign-vg-navy);
    font-size: 12px;
    margin-bottom: 3px;
}
.ign-vg-highlight span {
    color: var(--ign-vg-muted);
    font-size: 12px;
}

/* INFO */
.ign-vg-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 13px;
}
.ign-vg-info {
    position: relative;
    overflow: hidden;
    padding: 20px;
    border-radius: 13px;
    border: 1px solid var(--ign-vg-border);
    background: linear-gradient(145deg,#fff,#f8fafc);
}
.ign-vg-info-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: var(--ign-vg-orange-light);
    color: var(--ign-vg-orange);
}
.ign-vg-info strong {
    display: block;
    color: var(--ign-vg-navy);
    font-size: 13px;
    margin: 11px 0 3px;
}
.ign-vg-info span {
    color: var(--ign-vg-muted);
    font-size: 12px;
}

/* ELIGIBILITY / FINANCE */
.ign-vg-two-column {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
.ign-vg-mini-card {
    padding: 23px;
    border-radius: 15px;
    background: #fff;
    border: 1px solid var(--ign-vg-border);
    box-shadow: var(--ign-vg-shadow-sm);
}
.ign-vg-mini-top {
    display: flex;
    align-items: center;
    gap: 11px;
    margin-bottom: 13px;
}
.ign-vg-mini-icon {
    width: 39px;
    height: 39px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    color: var(--ign-vg-orange);
    background: var(--ign-vg-orange-light);
}
.ign-vg-mini-card h3 {
    color: var(--ign-vg-navy);
    font-size: 16px;
}
.ign-vg-mini-card p {
    color: var(--ign-vg-muted);
    font-size: 13px;
    line-height: 1.8;
}

/* PROCESS TIMELINE */
.ign-vg-process-intro {
    color: var(--ign-vg-muted);
    font-size: 13px;
    margin-bottom: 20px;
}
.ign-vg-steps {
    position: relative;
}
.ign-vg-steps::before {
    content: "";
    position: absolute;
    left: 22px;
    top: 20px;
    bottom: 20px;
    width: 2px;
    background: linear-gradient(to bottom, var(--ign-vg-orange), #f5dcc2);
}
.ign-vg-step {
    position: relative;
    display: flex;
    gap: 16px;
    padding: 12px 0;
}
.ign-vg-step-number {
    position: relative;
    z-index: 2;
    width: 45px;
    height: 45px;
    flex: 0 0 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff;
    border: 2px solid var(--ign-vg-orange);
    color: var(--ign-vg-orange);
    font-size: 11px;
    font-weight: 800;
    box-shadow: 0 0 0 5px #fff;
}
.ign-vg-step-content {
    flex: 1;
    padding: 4px 0 16px;
}
.ign-vg-step-content h3 {
    color: var(--ign-vg-navy);
    font-size: 15px;
    margin-bottom: 4px;
}
.ign-vg-step-content p {
    color: var(--ign-vg-muted);
    font-size: 13px;
    line-height: 1.75;
}

/* DOCUMENTS */
.ign-vg-documents {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 11px;
}
.ign-vg-document {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 15px;
    border: 1px solid var(--ign-vg-border);
    border-radius: 12px;
    transition: .2s ease;
}
.ign-vg-document:hover {
    transform: translateY(-2px);
    border-color: #efc18d;
    box-shadow: var(--ign-vg-shadow-sm);
}
.ign-vg-document-icon {
    width: 38px;
    height: 38px;
    flex: 0 0 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    color: var(--ign-vg-orange);
    background: var(--ign-vg-orange-light);
}
.ign-vg-document-content {
    flex: 1;
}
.ign-vg-document strong {
    display: block;
    color: var(--ign-vg-navy);
    font-size: 13px;
}
.ign-vg-document p {
    color: var(--ign-vg-muted);
    font-size: 11px;
    margin-top: 4px;
    line-height: 1.5;
}
.ign-vg-required {
    display: inline-flex;
    margin-top: 7px;
    padding: 3px 7px;
    border-radius: 20px;
    background: #edf8f1;
    color: var(--ign-vg-green);
    font-size: 10px;
    font-weight: 700;
}

/* TIPS */
.ign-vg-tips {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 12px;
}
.ign-vg-tip {
    padding: 18px;
    border-radius: 12px;
    background: var(--ign-vg-light);
    border: 1px solid var(--ign-vg-border);
}
.ign-vg-tip i {
    display: inline-flex;
    width: 35px;
    height: 35px;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    background: var(--ign-vg-orange-light);
    color: var(--ign-vg-orange);
    margin-bottom: 9px;
}
.ign-vg-tip strong {
    display: block;
    color: var(--ign-vg-navy);
    font-size: 12px;
    margin-bottom: 4px;
}
.ign-vg-tip span {
    color: var(--ign-vg-muted);
    font-size: 11px;
    line-height: 1.6;
}

/* FAQ */
.ign-vg-faq {
    display: flex;
    flex-direction: column;
    gap: 9px;
}
.ign-vg-faq-item {
    overflow: hidden;
    border: 1px solid var(--ign-vg-border);
    border-radius: 11px;
    background: #fff;
}
.ign-vg-faq-item[open] {
    border-color: #efc18d;
    background: #fffdf9;
}
.ign-vg-faq-item summary {
    list-style: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 16px;
    color: var(--ign-vg-navy);
    font-size: 13px;
    font-weight: 700;
}
.ign-vg-faq-item summary::-webkit-details-marker {
    display: none;
}
.ign-vg-faq-item summary i {
    color: var(--ign-vg-orange);
    transition: .25s ease;
}
.ign-vg-faq-item[open] summary i {
    transform: rotate(180deg);
}
.ign-vg-faq-answer {
    padding: 0 16px 17px;
    color: var(--ign-vg-muted);
    font-size: 13px;
    line-height: 1.75;
}

/* SIDEBAR */
.ign-vg-sidebar {
    position: sticky;
    top: 20px;
}
.ign-vg-sidebar-card {
    padding: 23px;
    margin-bottom: 15px;
    background: #fff;
    border: 1px solid var(--ign-vg-border);
    border-radius: 16px;
    box-shadow: var(--ign-vg-shadow-sm);
}
.ign-vg-sidebar-main {
    position: relative;
    overflow: hidden;
    color: #fff;
    background:
        radial-gradient(circle at 100% 0, rgba(235,147,58,.25), transparent 32%),
        linear-gradient(145deg, #071d32, #123e5c);
    border: 0;
}
.ign-vg-sidebar-flag {
    font-size: 42px;
    margin-bottom: 12px;
}
.ign-vg-sidebar-main h3 {
    color: #fff;
    font-size: 23px;
    margin-bottom: 3px;
}
.ign-vg-sidebar-main > p {
    color: rgba(255,255,255,.68);
    font-size: 12px;
    margin-bottom: 20px;
}
.ign-vg-sidebar-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 9px;
    margin-bottom: 20px;
}
.ign-vg-sidebar-list li {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,.82);
    font-size: 11px;
}
.ign-vg-sidebar-list i {
    color: var(--ign-vg-orange);
}
.ign-vg-cta {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 14px;
    border-radius: 9px;
    background: var(--ign-vg-orange);
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    box-shadow: 0 8px 22px rgba(235,147,58,.28);
    transition: .2s ease;
}
.ign-vg-cta:hover {
    background: #f1a04c;
    color: #fff;
    transform: translateY(-2px);
}
.ign-vg-sidebar-title {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--ign-vg-navy);
    font-size: 15px;
    margin-bottom: 10px;
}
.ign-vg-sidebar-title i {
    color: var(--ign-vg-orange);
}
.ign-vg-sidebar-card > p {
    color: var(--ign-vg-muted);
    font-size: 12px;
    line-height: 1.7;
}
.ign-vg-official {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 12px;
    color: var(--ign-vg-orange);
    font-size: 12px;
    font-weight: 700;
}
.ign-vg-help {
    display: flex;
    gap: 10px;
    padding: 13px;
    margin-top: 15px;
    border-radius: 10px;
    background: var(--ign-vg-orange-light);
}
.ign-vg-help i {
    color: var(--ign-vg-orange);
    font-size: 18px;
}
.ign-vg-help strong {
    display: block;
    color: var(--ign-vg-navy);
    font-size: 11px;
}
.ign-vg-help span {
    color: var(--ign-vg-muted);
    font-size: 10px;
}

/* BOTTOM CTA */
.ign-vg-bottom-cta {
    position: relative;
    overflow: hidden;
    margin-top: 25px;
    padding: 42px;
    border-radius: 20px;
    background:
        radial-gradient(circle at 100% 0, rgba(235,147,58,.25), transparent 30%),
        linear-gradient(135deg, #071d32, #123e5c);
    text-align: center;
}
.ign-vg-bottom-cta h2 {
    color: #fff;
    font-size: 28px;
    margin-bottom: 9px;
}
.ign-vg-bottom-cta p {
    max-width: 650px;
    margin: 0 auto 22px;
    color: rgba(255,255,255,.7);
    font-size: 13px;
}
.ign-vg-bottom-cta .ign-vg-cta {
    width: auto;
    display: inline-flex;
    padding: 13px 25px;
}

/* RESPONSIVE */
@media (max-width: 950px) {
    .ign-vg-stats {
        grid-template-columns: repeat(2,1fr);
    }
    .ign-vg-layout {
        grid-template-columns: 1fr;
    }
    .ign-vg-sidebar {
        position: static;
    }
}
@media (max-width: 700px) {
    .ign-vg-hero {
        padding: 35px 0 85px;
    }
    .ign-vg-hero h1 {
        font-size: 36px;
    }
    .ign-vg-stats {
        grid-template-columns: 1fr 1fr;
    }
    .ign-vg-two-column,
    .ign-vg-documents {
        grid-template-columns: 1fr;
    }
    .ign-vg-tips {
        grid-template-columns: 1fr;
    }
    .ign-vg-trust {
        align-items: flex-start;
        flex-direction: column;
    }
    .ign-vg-nav {
        position: static;
    }
}
@media (max-width: 480px) {
    .ign-vg-container {
        width: 91%;
    }
    .ign-vg-hero h1 {
        font-size: 30px;
    }
    .ign-vg-hero-description {
        font-size: 14px;
    }
    .ign-vg-stats {
        grid-template-columns: 1fr;
    }
    .ign-vg-card {
        padding: 21px;
        border-radius: 13px;
    }
    .ign-vg-info-grid {
        grid-template-columns: 1fr;
    }
    .ign-vg-bottom-cta {
        padding: 30px 20px;
    }
    .ign-vg-bottom-cta h2 {
        font-size: 23px;
    }
}
</style>
</head>
<body>

<x-study-abroad-header />

{{-- HERO --}}
<section class="ign-vg-hero">
    <div class="ign-vg-container ign-vg-hero-content">
        <a href="{{ route('study-abroad.visa-process') }}" class="ign-vg-back"><i class="bi bi-arrow-left"></i>Back to Visa Process</a>
        <div class="ign-vg-country-badge"><span>{{ $visaCountry->flag }}</span>{{ $visaCountry->country }}</div>
        <h1>{{ $visaCountry->visaGuide->page_title }}</h1>
        <p class="ign-vg-hero-description">{{ $visaCountry->visaGuide->overview }}</p>
        <div class="ign-vg-hero-bottom">
            <div class="ign-vg-hero-tag"><i class="bi bi-shield-check"></i>Visa Guidance</div>
            <div class="ign-vg-hero-tag"><i class="bi bi-file-earmark-text"></i>Document Checklist</div>
            <div class="ign-vg-hero-tag"><i class="bi bi-person-check"></i>Expert Support</div>
        </div>
    </div>
</section>

{{-- MAIN --}}
<main class="ign-vg-main">
    <div class="ign-vg-container">
        <div class="ign-vg-layout">

            {{-- LEFT CONTENT --}}
            <div>

                {{-- OVERVIEW --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-globe2"></i></div>
                        <h2>Visa Overview</h2>
                    </div>
                    <p>{{ $visaCountry->visaGuide->overview }}</p>
                </div>

                {{-- IMPORTANT INFORMATION --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-info-circle"></i></div>
                        <h2>Important Information</h2>
                    </div>
                    <div class="ign-vg-info-grid">
                        <div class="ign-vg-info">
                            <div class="ign-vg-info-icon"><i class="bi bi-clock-history"></i></div>
                            <strong>Processing Time</strong>
                            <span>{{ $visaCountry->visaGuide->processing_time }}</span>
                        </div>
                        <div class="ign-vg-info">
                            <div class="ign-vg-info-icon"><i class="bi bi-cash-stack"></i></div>
                            <strong>Application Fee</strong>
                            <span>{{ $visaCountry->visaGuide->application_fee }}</span>
                        </div>
                    </div>
                </div>

                {{-- ELIGIBILITY --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-person-check"></i></div>
                        <h2>Eligibility</h2>
                    </div>
                    <p>{{ $visaCountry->visaGuide->eligibility }}</p>
                </div>

                {{-- FINANCIAL REQUIREMENT --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-wallet2"></i></div>
                        <h2>Financial Requirement</h2>
                    </div>
                    <p>{{ $visaCountry->visaGuide->financial_requirement }}</p>
                </div>

                {{-- APPLICATION PROCESS --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-signpost-split"></i></div>
                        <h2>Visa Application Process</h2>
                    </div>
                    <div class="ign-vg-steps">
                        @forelse ($visaCountry->visaGuide->steps as $step)
                            <div class="ign-vg-step">
                                <div class="ign-vg-step-number">{{ str_pad($step->step_number, 2, '0', STR_PAD_LEFT) }}</div>
                                <div class="ign-vg-step-content">
                                    <h3>{{ $step->title }}</h3>
                                    <p>{{ $step->description }}</p>
                                </div>
                            </div>
                        @empty
                            <p>Visa process information will be updated soon.</p>
                        @endforelse
                    </div>
                </div>

                {{-- DOCUMENTS --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-folder-check"></i></div>
                        <h2>Required Documents</h2>
                    </div>
                    <div class="ign-vg-documents">
                        @forelse ($visaCountry->visaGuide->documents as $document)
                            <div class="ign-vg-document">
                                <div class="ign-vg-document-icon"><i class="bi bi-file-earmark-check"></i></div>
                                <div class="ign-vg-document-content">
                                    <strong>{{ $document->document_name }}</strong>
                                    @if ($document->description)
                                        <p>{{ $document->description }}</p>
                                    @endif
                                    @if ($document->is_required)
                                        <span class="ign-vg-required">Required</span>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <p>Document information will be updated soon.</p>
                        @endforelse
                    </div>
                </div>

                {{-- FAQ --}}
                <div class="ign-vg-card">
                    <div class="ign-vg-card-heading">
                        <div class="ign-vg-heading-icon"><i class="bi bi-question-circle"></i></div>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="ign-vg-faq">
                        @forelse ($visaCountry->visaGuide->faqs as $faq)
                            <details class="ign-vg-faq-item">
                                <summary>
                                    <span>{{ $faq->question }}</span>
                                    <i class="bi bi-chevron-down"></i>
                                </summary>
                                <div class="ign-vg-faq-answer">{{ $faq->answer }}</div>
                            </details>
                        @empty
                            <p>FAQs will be updated soon.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            {{-- SIDEBAR --}}
            <aside class="ign-vg-sidebar">

                {{-- COUNTRY CTA --}}
                <div class="ign-vg-sidebar-card ign-vg-sidebar-main">
                    <div class="ign-vg-sidebar-flag">{{ $visaCountry->flag }}</div>
                    <h3>{{ $visaCountry->country }}</h3>
                    <p>{{ $visaCountry->visa_name }}</p>
                    <ul class="ign-vg-sidebar-list">
                        <li><i class="bi bi-check-circle-fill"></i>Visa application guidance</li>
                        <li><i class="bi bi-check-circle-fill"></i>Document preparation support</li>
                        <li><i class="bi bi-check-circle-fill"></i>Application assistance</li>
                    </ul>
                    <a href="{{ route('study-abroad.application') }}" class="ign-vg-cta">Get Visa Guidance <i class="bi bi-arrow-right"></i></a>
                </div>

                {{-- OFFICIAL WEBSITE --}}
                @if ($visaCountry->visaGuide->official_website)
                    <div class="ign-vg-sidebar-card">
                        <h3 class="ign-vg-sidebar-title"><i class="bi bi-patch-check"></i>Official Source</h3>
                        <p>Always verify the latest visa requirements, fees and immigration information from the official government source.</p>
                        <a href="{{ $visaCountry->visaGuide->official_website }}" target="_blank" rel="noopener noreferrer" class="ign-vg-official">Visit Official Website <i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                @endif

                {{-- HELP CARD --}}
                <div class="ign-vg-sidebar-card">
                    <h3 class="ign-vg-sidebar-title"><i class="bi bi-headset"></i>Need Help?</h3>
                    <p>Get personalised guidance for your study abroad and visa journey.</p>
                    <div class="ign-vg-help">
                        <i class="bi bi-chat-dots"></i>
                        <div>
                            <strong>Talk to an expert</strong>
                            <span>Get help with your application</span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<x-frontend-footer />

</body>
</html>