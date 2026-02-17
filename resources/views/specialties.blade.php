@extends('layouts.app')

@section('content')
<style>
    /* Provided CSS */
    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url("{{ asset('assets/images/specialties/hero-specilization.jpg') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 60px 20px;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .hero-section {
            min-height: 400px;
            background-size: cover;
            background-position: center right;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 350px;
            padding: 40px 20px;
            background-position: center;
        }
    }

    @media (max-width: 480px) {
        .hero-section {
            min-height: 300px;
            padding: 30px 15px;
        }
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, 
            rgba(10, 25, 45, 1) 0%, 
            rgba(10, 25, 45, 0.98) 20%,
            rgba(10, 25, 45, 0.92) 35%,
            rgba(10, 25, 45, 0.80) 50%,
            rgba(10, 25, 45, 0.55) 65%,
            rgba(10, 25, 45, 0.25) 80%,
            transparent 90%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        padding-left: 97px;
        max-width: 100%;
    }

    .hero-section h1 {
        max-width: 541px;
        width: 100%;
        font-weight: 700;
        font-size: 44px;
        color: white;
        line-height: 1.2;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 20px;
    }

    .hero-section p {
        max-width: 529px;
        width: 100%;
        font-weight: 400;
        font-size: 18px;
        color: white;
        line-height: 1.5;
    }

    @media (max-width: 1024px) {
        .hero-content {
            padding-left: 50px;
        }

        .hero-section h1 {
            font-size: 36px;
        }

        .hero-section p {
            font-size: 16px;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }

        .hero-section::before {
            display: none;
        }

        .hero-content {
            padding-left: 20px;
            padding-right: 20px;
            text-align: center;
            width: 100%;
        }

        .hero-section h1 {
            font-size: 28px;
            text-align: center;
            max-width: 100%;
        }

        .hero-section p {
            font-size: 15px;
            max-width: 100%;
            text-align: center;
        }

        .mobile-hero-img {
            display: block !important;
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 20px;
        }
    }

    .mobile-hero-img {
        display: none;
    }
    .billing-solutions {
        padding: 35px 20px 30px;
        text-align: center;
        background-color: #ffffff;
        width: 100%;
    }

    .billing-solutions h2 {
        font-size: 32px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 8px;
    }

    .billing-solutions .subtitle {
        font-size: 14px;
        font-weight: 400;
        color: #333;
        margin-bottom: 25px;
    }

    @media (max-width: 768px) {
        .billing-solutions h2 {
            font-size: 26px;
        }

        .billing-solutions .subtitle {
            font-size: 13px;
            padding: 0 10px;
        }
    }

    @media (max-width: 480px) {
        .billing-solutions {
            padding: 25px 15px 20px;
        }

        .billing-solutions h2 {
            font-size: 22px;
        }
    }

    .specialties-grid-custom {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px 30px;
        max-width: 1150px;
        margin: 0 auto 25px;
    }

    @media (max-width: 1024px) {
        .specialties-grid-custom {
            grid-template-columns: repeat(3, 1fr);
            gap: 15px 20px;
        }
    }

    @media (max-width: 768px) {
        .specialties-grid-custom {
            grid-template-columns: repeat(2, 1fr);
            gap: 12px 15px;
        }
    }

    @media (max-width: 480px) {
        .specialties-grid-custom {
            grid-template-columns: 1fr;
            gap: 12px;
        }
    }

    .specialty-item-custom {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 14px 12px;
        transition: all 0.6s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
        min-height: 110px;
    }

    @media (max-width: 768px) {
        .specialty-item-custom {
            min-height: 100px;
            padding: 12px 10px;
        }
    }

    @media (max-width: 480px) {
        .specialty-item-custom {
            min-height: 90px;
            padding: 10px 8px;
        }
    }

    .specialty-content-custom {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        transition: all 0.6s ease;
    }

    .specialty-item-custom:hover .specialty-content-custom {
        transform: translateX(-100%);
        opacity: 0;
    }

    .specialty-description-custom {
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 14px;
        background: linear-gradient(135deg, #002147 0%, #003366 100%);
        color: white;
        font-size: 12px;
        line-height: 1.5;
        transition: all 0.6s ease;
        text-align: center;
    }

    .specialty-item-custom:hover .specialty-description-custom {
        left: 0;
    }

    .specialty-item-custom:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 33, 71, 0.15);
        border-color: #002147;
    }

    .specialty-icon {
        width: 42px;
        height: 42px;
        object-fit: contain;
    }

    .specialty-item-custom span {
        font-size: 14px;
        font-weight: 500;
        color: #002147;
    }

    @media (max-width: 768px) {
        .specialty-icon {
            width: 38px;
            height: 38px;
        }

        .specialty-item-custom span {
            font-size: 13px;
        }
    }

    @media (max-width: 480px) {
        .specialty-icon {
            width: 35px;
            height: 35px;
        }

        .specialty-item-custom span {
            font-size: 12px;
        }
    }

    .see-more-btn {
        background-color: #002147;
        color: #fff;
        border: none;
        padding: 11px 35px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        display: inline-block;
        text-decoration: none;
        /* transition: all 0.3s ease; */
    }

    .see-more-btn:hover {
        background-color: #ffffff;
        border: 1px solid #000000;
        color: #000000;
    }

    .see-more-btn:focus {
        outline: none;
        color: #fff;
        background-color: #002147;
    }

    .see-more-btn:active {
        color: #fff;
        background-color: #002147;
    }

    @media (max-width: 480px) {
        .see-more-btn {
            padding: 10px 30px;
            font-size: 13px;
        }
    }

    .hidden-specialty {
        display: none;
    }

    .toggle-checkbox {
        display: none;
    }

    .toggle-checkbox:checked~.specialties-grid-custom .hidden-specialty {
        display: flex;
    }

    .see-less-text {
        display: none;
    }

    .toggle-checkbox:checked~.see-more-btn .see-more-text,
    .toggle-checkbox:checked~a.see-more-btn .see-more-text {
        display: none;
    }

    .toggle-checkbox:checked~.see-more-btn .see-less-text,
    .toggle-checkbox:checked~a.see-more-btn .see-less-text {
        display: inline;
    }

    /* Affordable Billing Solutions Section */
    .about-section-custom {
        padding: 20px 20px 10px;
        background-color: #f8f9fa;
    }

    @media (max-width: 768px) {
        .about-section-custom {
            padding: 20px 15px 10px;
        }
    }

    @media (max-width: 480px) {
        .about-section-custom {
            padding: 15px 10px 10px;
        }
    }

    .about-container-custom {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
    }

    .about-text-custom {
        padding-right: 20px;
        order: 2;
    }

    .about-images-custom {
        position: relative;
        height: 400px;
        order: 1;
    }

    @media (max-width: 1024px) {
        .about-container-custom {
            gap: 30px;
        }

        .about-images-custom {
            height: 350px;
        }
    }

    @media (max-width: 768px) {
        .about-container-custom {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .about-text-custom {
            order: 1;
            padding-right: 0;
        }

        .about-images-custom {
            order: 2;
            height: 300px;
        }

        .about-img-1 {
            width: 100% !important;
            max-width: 350px;
        }

        .about-img-2 {
            width: 90% !important;
            max-width: 300px;
        }
    }

    @media (max-width: 480px) {
        .about-images-custom {
            height: 250px;
        }

        .about-img-1 {
            width: 100% !important;
            max-width: 280px;
            height: 180px !important;
        }

        .about-img-2 {
            width: 85% !important;
            max-width: 240px;
            height: 150px !important;
        }
    }

    .about-text-custom h2 {
        font-size: 32px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 16px;
        line-height: 1.3;
    }

    .about-text-custom p {
        font-size: 14px;
        line-height: 1.7;
        color: #333;
        text-align: justify;
        margin-bottom: 22px;
    }

    @media (max-width: 768px) {
        .about-text-custom h2 {
            font-size: 26px;
            text-align: center;
        }

        .about-text-custom p {
            font-size: 14px;
            text-align: left;
        }

        .about-text-custom {
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .about-text-custom h2 {
            font-size: 22px;
        }

        .about-text-custom p {
            font-size: 13px;
        }
    }

    .about-img-1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 400px;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        z-index: 2;
    }

    .about-img-2 {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 360px;
        height: 220px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        z-index: 1;
    }

    .pricing-btn {
        background-color: #002147;
        color: #ffff;
        border: 2px solid #002147;
        padding: 10px 30px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        display: inline-block;
        text-decoration: none;
    }

    .pricing-btn:hover {
        background-color: #ffff;
        color: #000000;
        text-decoration: none;
    }

    /* Boost Revenue Section */
    .boost-section-custom {
        padding: 10px 20px 20px;
        background-color: #ffffff;
    }

    .boost-container-custom {
        max-width: 1200px;
        margin: 0 auto;
    }

    .boost-header-custom {
        text-align: center;
        margin-bottom: 5px;
    }

    .boost-header-custom h2 {
        font-size: 36px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 11px;
        line-height: 1.2;
    }

    .boost-subtitle {
        font-size: 15px;
        color: #000000;
        font-weight: 400;
        max-width: 750px;
        margin: 0 auto;
    }

    .boost-content-custom {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 35px;
        align-items: center;
    }

    .boost-description-custom {
        font-size: 16px;
        line-height: 31px;
        color: #333;
        text-align: justify;
        margin-bottom: 25px;
    }

    .boost-img {
        width: 100%;
        max-width: 428px;
        height: 380px;
        border-radius: 30px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        display: block;
        object-fit: cover;
    }

    .boost-pricing-btn {
        background-color: #002147;
        color: white;
        border: 2px solid #002147;
        padding: 9px 28px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        display: inline-block;
        text-decoration: none;
    }

    .boost-pricing-btn:hover {
        background-color: #ffffff;
        color: #000000;
        border: 1px solid #000000;
        text-decoration: none;
    }

    @media (max-width: 968px) {
        .boost-content-custom {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .boost-header-custom h2 {
            font-size: 30px;
        }

        .boost-img {
            max-width: 100%;
            height: 350px;
            margin: 0 auto;
        }
    }

    @media (max-width: 768px) {
        .boost-section-custom {
            padding: 20px 15px;
        }

        .boost-header-custom h2 {
            font-size: 26px;
        }

        .boost-subtitle {
            font-size: 14px;
        }

        .boost-description-custom {
            font-size: 15px;
            line-height: 1.7;
        }

        .boost-img {
            height: 300px;
        }
    }

    @media (max-width: 480px) {
        .boost-header-custom h2 {
            font-size: 22px;
        }

        .boost-subtitle {
            font-size: 13px;
        }

        .boost-description-custom {
            font-size: 14px;
        }

        .boost-img {
            height: 250px;
            border-radius: 20px;
        }

        .boost-pricing-btn {
            padding: 8px 24px;
            font-size: 13px;
        }
    }

    /* EHR Section */
    .ehr-section-custom {
        padding: 15px 0 25px 0;
        background-color: #ffffff;
    }

    .ehr-title-custom {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 15px;
        color: #002147;
        text-align: center;
    }

    .ehr-subtitle {
        font-size: 16px;
        color: #000000;
        max-width: 800px;
        margin: 0 auto 25px;
        line-height: 1.6;
        text-align: center;
    }

    .ehr-grid-custom {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 30px;
    }

    .ehr-card-custom {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 140px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    .ehr-card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        border-color: #002147;
    }

    .ehr-logo-img {
        max-width: 100%;
        max-height: 90%;
        object-fit: contain;
    }

    .ehr-explore-btn-custom {
        background: #001B35;
        padding: 14px 50px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: 1px solid #001B35;
        color: white;
    }

    .ehr-explore-btn-custom:hover {
        background: #ffffff;
        border: 1px solid #000000;
        color: black;
    }

    @media (max-width: 991px) {
        .ehr-grid-custom {
            grid-template-columns: repeat(2, 1fr);
        }

        .ehr-title-custom {
            font-size: 30px;
        }

        .ehr-subtitle {
            font-size: 15px;
        }
    }

    @media (max-width: 768px) {
        .ehr-section-custom {
            padding: 20px 15px;
        }

        .ehr-title-custom {
            font-size: 26px;
        }

        .ehr-subtitle {
            font-size: 14px;
        }

        .ehr-grid-custom {
            gap: 20px;
        }
    }

    @media (max-width: 575px) {
        .ehr-grid-custom {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .ehr-title-custom {
            font-size: 22px;
        }

        .ehr-card-custom {
            padding: 20px 15px;
        }

        .ehr-explore-btn-custom {
            padding: 12px 40px;
            font-size: 14px;
        }
    }

    /* Features Grid */
    .features-grid-custom {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .feature-item-custom {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        text-align: left;
        padding: 40px 30px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    @media (max-width: 1024px) {
        .features-grid-custom {
            grid-template-columns: 1fr;
        }
    }

    .feature-icon-custom img {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    /* Specialty Section (Contact Form) */
    .specialty-section-custom {
        position: relative;
        padding: 100px 20px;
        text-align: center;
        overflow: hidden;
        background-color: #f9fbff;
        min-height: 500px;
    }

    .specialty-section-custom h2 {
        color: #002e5b;
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .form-container-custom {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        max-width: 700px;
        margin: 0 auto;
    }

    .form-container-custom input {
        width: 100%;
        padding: 18px 20px;
        border: 1.5px solid #7a93ac;
        border-radius: 6px;
        font-size: 16px;
    }

    .submit-btn-custom {
        grid-column: span 2;
        background-color: #001f3f;
        color: white;
        padding: 14px 60px;
        font-size: 18px;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 25px;
    }

    .medical-icon {
        position: absolute;
        opacity: 0.14;
        z-index: 1;
        pointer-events: none;
    }

    /* CTA Pricing Section */
    .cta-pricing-section-custom {
        padding: 0 20px;
        margin: 12px auto;
        max-width: 1200px;
    }

    .cta-container-custom {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 20px;
        padding: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        color: white;
        text-align: center;
    }

    .cta-label {
        color: #ffffff;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .cta-content h2 {
        color: #ffffff;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .cta-request-btn {
        background-color: white;
        color: #002147;
        border: none;
        padding: 14px 45px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 30px;
        cursor: pointer;
        margin-top: 20px;
        display: inline-block;
        text-decoration: none;
    }

    .cta-request-btn:hover {
        text-decoration: none;
        color: #002147;
    }

    @media (max-width: 768px) {
        .cta-pricing-section-custom {
            padding: 0 15px;
        }

        .cta-container-custom {
            padding: 30px 20px;
            border-radius: 15px;
        }

        .cta-label {
            font-size: 14px;
        }

        .cta-content h2 {
            font-size: 26px;
        }

        .cta-request-btn {
            padding: 12px 35px;
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .cta-container-custom {
            padding: 25px 15px;
        }

        .cta-label {
            font-size: 13px;
        }

        .cta-content h2 {
            font-size: 22px;
        }

        .cta-request-btn {
            padding: 10px 30px;
            font-size: 14px;
        }
    }
</style>

<div class="specialties-page">
    <section class="hero-section">
        <img src="{{ asset('assets/images/specialties/hero-specilization.jpg') }}" alt="Specialties" class="mobile-hero-img">
        <div class="hero-content">
            <h1>Medical Billing Services for All Specialties</h1>
            <p>We offer accurate, compliant, and revenue-driven billing solutions for healthcare providers.</p>
        </div>
    </section>

    <!-- Billing Solutions Section -->
    <section class="billing-solutions">
        <h2>Billing Solutions for Every Specialty</h2>
        <p class="subtitle">We offer smart billing services to maximize practice revenue and minimize denials.</p>

        <input type="checkbox" id="toggle-specialties" class="toggle-checkbox">

        <div class="specialties-grid-custom">
            @for($i = 1; $i <= 40; $i++)
            @php
                $specialties = [
                    1 => ['name' => 'OB/GYN', 'desc' => 'Comprehensive care for women’s health and pregnancy needs.'],
                    2 => ['name' => 'Neurology', 'desc' => 'Specialized care for brain and nervous system health.'],
                    3 => ['name' => 'Orthopedics', 'desc' => 'Specialized treatment for bone, joint, and muscle conditions.'],
                    4 => ['name' => 'Pediatrics', 'desc' => 'Dedicated care for children’s health and development.'],
                    5 => ['name' => 'Podiatry', 'desc' => 'Expert treatment for foot and ankle health issues'],
                    6 => ['name' => 'Cardiology', 'desc' => 'Specialized care for heart health and cardiovascular diseases.'],
                    7 => ['name' => 'Pulmonology', 'desc' => 'Specialized care for respiratory and lung health issues.'],
                    8 => ['name' => 'Nephrology', 'desc' => 'Diagnosis and treatment of kidney-related conditions.'],
                    9 => ['name' => 'Psychiatry', 'desc' => 'Specialized care for mental health and emotional well-being.'],
                    10 => ['name' => 'Urgent Care', 'desc' => 'Fast and accurate billing for urgent care facilities.'],
                    11 => ['name' => 'Sleep Medicine', 'desc' => 'Specialized billing for sleep disorders and diagnostic services.'],
                    12 => ['name' => 'Primary Care', 'desc' => 'Complete billing solutions for primary care physicians.'],
                    13 => ['name' => 'Urology', 'desc' => 'Professional billing for urological care and procedures.'],
                    14 => ['name' => 'Endocrinology', 'desc' => 'Expert billing for endocrine disorders and hormone therapy.'],
                    15 => ['name' => 'Hand Surgery', 'desc' => 'Specialized billing for hand and upper extremity surgery.'],
                    16 => ['name' => 'Rheumatology', 'desc' => 'Comprehensive billing for rheumatic and autoimmune conditions.'],
                    17 => ['name' => 'Dermatology', 'desc' => 'Expert billing for skin care and dermatological procedures.'],
                    18 => ['name' => 'Otolaryngology', 'desc' => 'Specialized billing for ear, nose, and throat specialists.'],
                    19 => ['name' => 'Ophthal-mology', 'desc' => 'Comprehensive billing for eye care and vision services.'],
                    20 => ['name' => 'Allergy Immunology', 'desc' => 'Professional billing for allergy testing and immunology services.'],
                    21 => ['name' => 'Speech Therapy', 'desc' => 'Expert billing for speech and language therapy services.'],
                    22 => ['name' => 'General Surgery', 'desc' => 'Professional billing for general surgical procedures and care.'],
                    23 => ['name' => 'Physical Therapy', 'desc' => 'Complete billing solutions for physical therapy and rehabilitation.'],
                    24 => ['name' => 'Vascular Surgery', 'desc' => 'Expert billing for vascular and endovascular surgery procedures.'],
                    25 => ['name' => 'Physical Medicine', 'desc' => 'Specialized billing for physical medicine and rehabilitation.'],
                    26 => ['name' => 'Internal Medicine', 'desc' => 'Professional billing for internal medicine specialists.'],
                    27 => ['name' => 'Oncology', 'desc' => 'Comprehensive billing for cancer treatment and oncology services.'],
                    28 => ['name' => 'Pain Management', 'desc' => 'Specialized billing for chronic pain treatment and management.'],
                    29 => ['name' => 'Infectious Disease', 'desc' => 'Professional billing for infectious disease treatment services.'],
                    30 => ['name' => 'Behavioral Health', 'desc' => 'Specialized billing for mental health and behavioral services.'],
                    31 => ['name' => 'Ambulatory Surgery', 'desc' => 'Professional billing for ambulatory surgical centers.'],
                    32 => ['name' => 'Gastro-enterology', 'desc' => 'Specialized billing for digestive system and GI procedures.'],
                    33 => ['name' => 'Rehabilitative Medicine', 'desc' => 'Specialized billing for rehabilitative medicine services.'],
                    34 => ['name' => 'Neurosurgery', 'desc' => 'Expert billing for brain and nervous system surgeries.'],
                    35 => ['name' => 'Dental', 'desc' => 'Comprehensive billing solutions for dental practices.'],
                    36 => ['name' => 'Medical Nutrition', 'desc' => 'Specialized billing for medical nutrition therapy.'],
                    37 => ['name' => 'Birth Center', 'desc' => 'Professional billing for birth centers and maternity care.'],
                    38 => ['name' => 'Family Practices', 'desc' => 'Comprehensive billing for family practice physicians.'],
                    39 => ['name' => 'Radiology', 'desc' => 'Professional billing for imaging and diagnostic radiology services.'],
                    40 => ['name' => 'Anesthesia', 'desc' => 'Expert billing for anesthesia and pain management services.']
                ];
                $name = $specialties[$i]['name'] ?? 'Medical Specialty';
                $desc = $specialties[$i]['desc'] ?? 'Professional medical billing services.';
            @endphp
            <div class="specialty-item-custom {{ $i > 12 ? 'hidden-specialty' : '' }}">
                <div class="specialty-content-custom">
                    <img src="{{ asset('assets/images/specialties/' . $i . '.png') }}" alt="{{ $name }}" class="specialty-icon">
                    <span>{{ $name }}</span>
                </div>
                <div class="specialty-description-custom">
                    {{ $desc }}
                </div>
            </div>
            @endfor
        </div>

        <a href="#all-specialties" class="see-more-btn" id="specialty-toggle" role="button" aria-expanded="false">
            <span class="see-more-text">See More Specialties</span>
            <span class="see-less-text">See Less Specialties</span>
        </a>
    </section>

    <!-- About Section -->
    <section class="about-section-custom">
        <div class="about-container-custom">
            <div class="about-text-custom">
                <h2>Affordable Billing Solutions for Healthcare</h2>
                <p>AMD Solutions provides specialized medical billing services designed to optimize the revenue cycle of healthcare practices. Our team of highly trained and experienced coders and billing specialists works to minimize claim denials, prevent revenue leakage, and maximize reimbursements. We manage end-to-end billing operations for multiple specialties, ensuring clean claim submission, proactive denial management, timely follow-ups, and reduced days in A/R. By combining clinical data, payer insights, and automated precision, we deliver actionable financial intelligence so practices can focus entirely on patient care while we safeguard and grow their revenue.</p>
                <a href="{{ url('request-demo') }}" class="pricing-btn">Request Pricing</a>
            </div>
            <div class="about-images-custom">
                <img src="{{ asset('assets/images/specialties/pic1.jpg') }}" alt="Medical Professional" class="about-img-1">
                <img src="{{ asset('assets/images/specialties/picno2.jpg') }}" alt="Healthcare Team" class="about-img-2">
            </div>
        </div>
    </section>

    <!-- CTA Pricing Section -->
    <section class="cta-pricing-section-custom">
        <div class="cta-container-custom">
            <div class="cta-content">
                <p class="cta-label">Get Free Quote</p>
                <h2>View AMDSOL Pricing</h2>
                <a href="{{ url('request-demo') }}" class="cta-request-btn">Request Now</a>
            </div>
        </div>
    </section>

    <!-- Boost Revenue Section -->
    <section class="boost-section-custom">
        <div class="boost-container-custom">
            <div class="boost-header-custom">
                <h2>Boost Revenue with Expert Medical Billing Services</h2>
                <p class="boost-subtitle">Maximize reimbursements, reduce denials, and streamline your revenue cycle.</p>
            </div>
            <div class="boost-content-custom">
                <div class="boost-text">
                    <p class="boost-description-custom">Our expert medical billing services help healthcare practices maximize revenue while reducing managerial stress. We handle the full spectrum of billing operations, including precise coding, clean claim submissions, and proactive denial management, ensuring faster reimbursements and minimal revenue leakage. By managing these complexities for multiple specialties, we free your in-house team to focus entirely on patient care. With data-driven insights, payer-specific strategies, and automated workflows, we transform the revenue cycle into a seamless, efficient process protecting your bottom line while keeping you fully compliant with ever-changing healthcare regulations.</p>
                    <a href="{{ url('request-demo') }}" class="boost-pricing-btn">Request Pricing</a>
                </div>
                <div class="boost-image">
                    <img src="{{ asset('assets/images/specialties/boost revenew.jpg') }}" alt="Boost Revenue" class="boost-img">
                </div>
            </div>
        </div>
    </section>

    <!-- EHR Section -->
    <section class="ehr-section-custom">
        <div class="container">
            <h2 class="ehr-title-custom">We work with these EHRs</h2>
            <p class="ehr-subtitle">Our medical billing specialists know the workarounds of all the EHRs. We help you submit clean claims no matter which EHR you use.</p>

            <div class="ehr-grid-custom">
                <div class="ehr-card-custom"><img src="{{ asset('assets/images/specialties/advanceMd.jpg') }}" alt="AdvancedMD" class="ehr-logo-img"></div>
                <div class="ehr-card-custom"><img src="{{ asset('assets/images/specialties/careCloud.jpg') }}" alt="CareCloud" class="ehr-logo-img"></div>
                <div class="ehr-card-custom"><img src="{{ asset('assets/images/specialties/nextgen.jpg') }}" alt="NextGen" class="ehr-logo-img"></div>
                <div class="ehr-card-custom"><img src="{{ asset('assets/images/specialties/practice-fusion.jpg') }}" alt="Practice Fusion" class="ehr-logo-img"></div>
                <div class="ehr-card-custom"><img src="{{ asset('assets/images/specialties/progonCIS-1.jpg') }}" alt="ProgonCIS" class="ehr-logo-img"></div>
                <div class="ehr-card-custom"><img src="{{ asset('assets/images/specialties/ACharrislogo-ohxzf0388pokf3vw05kiv3vp7kphzla0j3aup75618@2x.jpg') }}" alt="Harris CareTracker" class="ehr-logo-img"></div>
            </div>

            <div style="text-align: center;">
                <a href="{{ url('specialty-ehr') }}" class="ehr-explore-btn-custom">Explore More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <div class="features-grid-custom">
        <div class="feature-item-custom">
            <div class="feature-icon-custom"><img src="{{ asset('assets/images/specialties/Mask-Group-19704 1.png') }}" alt="24/7 Service"></div>
            <p>Maximize your revenue potential with our 24/7 medical billing services.</p>
        </div>
        <div class="feature-item-custom">
            <div class="feature-icon-custom"><img src="{{ asset('assets/images/specialties/Clip path group.png') }}" alt="Expert Team"></div>
            <p>Hire a team of experts who are well-versed with your EHR and improve the billing process.</p>
        </div>
        <div class="feature-item-custom">
            <div class="feature-icon-custom"><img src="{{ asset('assets/images/specialties/Clip path group (1).png') }}" alt="Billing Audit"></div>
            <p>Save $2,000 with our complimentary Billing Audit. Get insights based on 21 various KPIs to enhance cash flow.</p>
        </div>
    </div>

    <!-- Contact Form Section -->
    <section class="specialty-section-custom">
        <img src="{{ asset('assets/images/specialties/heart-icon.png') }}" alt="" class="medical-icon" style="top: 10%; left: 8%; width: 110px;">
        <img src="{{ asset('assets/images/specialties/lungs.png') }}" alt="" class="medical-icon" style="top: 2%; left: 45%; width: 80px;">
        <img src="{{ asset('assets/images/specialties/3.png') }}" alt="" class="medical-icon" style="top: 5%; right: 10%; width: 90px;">
        <img src="{{ asset('assets/images/specialties/head.png') }}" alt="" class="medical-icon" style="bottom: 10%; left: 10%; width: 100px;">
        <img src="{{ asset('assets/images/specialties/speciality foot.png') }}" alt="" class="medical-icon" style="bottom: 5%; left: 55%; width: 100px;">
        <img src="{{ asset('assets/images/specialties/kidney-icon.png') }}" alt="" class="medical-icon" style="bottom: 25%; right: 5%; width: 110px;">
        
        <div class="content-box">
            <h2>Couldn't Find Your Specialty Here?</h2>
            <p>Please Leave Your Email Below, And Our Medical Billing Manager <br> Will Contact You Shortly.</p>
            
            <form class="form-container-custom" id="specialtyForm">
                <input type="text" id="specialtyField" placeholder="Your Specialty" required>
                <input type="text" id="specialtyName" placeholder="Name" required pattern="[A-Za-z\s]+" title="Please enter letters only">
                <input type="email" id="specialtyEmail" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
                <input type="tel" id="specialtyPhone" placeholder="Phone" required pattern="[0-9]+" title="Please enter numbers only">
                <button type="submit" class="submit-btn-custom">Submit</button>
            </form>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('specialty-toggle');
        const toggleCheckbox = document.getElementById('toggle-specialties');
        const billingSection = document.querySelector('.billing-solutions');
        
        if (toggleBtn && toggleCheckbox) {
            toggleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                toggleCheckbox.checked = !toggleCheckbox.checked;
                this.setAttribute('aria-expanded', toggleCheckbox.checked);
                
                // Remove focus from button after click
                this.blur();
                
                if (!toggleCheckbox.checked) {
                    setTimeout(() => {
                        billingSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100);
                }
            });
        }

        // Form validation for specialty form
        const specialtyNameField = document.getElementById('specialtyName');
        const specialtyPhoneField = document.getElementById('specialtyPhone');

        // Name field - only letters and spaces
        if (specialtyNameField) {
            specialtyNameField.addEventListener('keydown', function(e) {
                const allowedKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End', ' '];
                if (!allowedKeys.includes(e.key) && !/[A-Za-z\s]/.test(e.key)) {
                    e.preventDefault();
                }
            });

            specialtyNameField.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^A-Za-z\s]/g, '');
            });

            specialtyNameField.addEventListener('paste', function(e) {
                e.preventDefault();
                const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                const lettersOnly = pastedText.replace(/[^A-Za-z\s]/g, '');
                this.value = lettersOnly;
            });
        }

        // Phone field - only numbers
        if (specialtyPhoneField) {
            specialtyPhoneField.addEventListener('keydown', function(e) {
                const allowedKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End'];
                if (!allowedKeys.includes(e.key) && !/[0-9]/.test(e.key)) {
                    e.preventDefault();
                }
            });

            specialtyPhoneField.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            specialtyPhoneField.addEventListener('paste', function(e) {
                e.preventDefault();
                const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                const numericOnly = pastedText.replace(/[^0-9]/g, '');
                this.value = numericOnly;
            });
        }
    });
</script>
@endsection
