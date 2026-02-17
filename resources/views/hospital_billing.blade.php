@extends('layouts.app')

@section('content')
<style>
    .hospital-billing-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .hospital-billing-wrapper * {
        box-sizing: border-box;
    }

    .hospital-billing-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    /* Add proper spacing between sections */
    .hospital-billing-wrapper section {
        margin-bottom: 30px;
    }

    .hospital-billing-wrapper section:last-child {
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .hospital-billing-wrapper section {
            margin-bottom: 20px;
        }
        
        .hospital-billing-wrapper section:last-child {
            margin-bottom: 15px;
        }
    }

    .hero-section-hospital {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/hospital/hospital-img/hospital-hero.jpg') }}');
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 40px 20px;
        margin: 0 0 40px 0;
    }

    @media (max-width: 1024px) {
        .hero-section-hospital {
            min-height: 380px;
            padding: 50px 20px;
            margin-bottom: 80px;
        }
    }

    @media (max-width: 768px) {
        .hero-section-hospital {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }
        
        .hero-section-hospital::before {
            display: none;
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

    .hero-section-hospital::before {
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

    .hero-content-hospital {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-hospital h1 {
        width: 100%;
        font-size: 34px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-hospital p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-hospital {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 100%;
        }
        .hero-section-hospital h1 {
            font-size: 28px;
        }
    }

    .hospital-billing-info-section {
        max-width: 1440px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .hospital-info-wrapper {
        display: flex;
        gap: 60px;
        align-items: flex-start;
        padding: 0 80px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .hospital-image-container {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hospital-image-container img {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .hospital-text-content {
        flex: 1.2;
    }

    .hospital-text-content h2 {
        font-size: 2.2rem;
        color: #1a1a2e;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 15px;
        border: none;
        text-align: left;
    }

    .hospital-text-content .hospital-subtitle {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .hospital-services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px 30px;
    }

    .hospital-service-item {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .hospital-service-item::before {
        content: "";
        width: 32px;
        height: 32px;
        background-image: url('{{ asset('assets/images/hospital/hospital-img/location-arrow 1.png') }}');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        flex-shrink: 0;
    }

    .hospital-service-item span {
        font-size: 1.5rem;
        color: #1a1a2e;
        font-weight: 500;
    }

    @media (max-width: 968px) {
        .hospital-info-wrapper {
            flex-direction: column;
            gap: 40px;
            padding: 0 40px;
        }
    }

    .affordable-billing-section {
        max-width: 1440px;
        margin: 40px auto;
        padding: 40px 20px;
    }

    .affordable-section-header {
        text-align: center;
        margin-bottom: 50px;
        padding: 0 20px;
    }

    .affordable-section-header h2 {
        font-size: 2.5rem;
        color: #1a1a2e;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 15px;
        border: none;
    }

    .affordable-section-header p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.5;
    }

    @media (max-width: 968px) {
        .affordable-section-header h2 {
            font-size: 2rem;
        }

        .affordable-section-header p {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 768px) {
        .affordable-section-header {
            margin-bottom: 40px;
            padding: 0 15px;
        }

        .affordable-section-header h2 {
            font-size: 1.6rem;
            margin-bottom: 12px;
        }

        .affordable-section-header p {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 480px) {
        .affordable-section-header {
            margin-bottom: 30px;
        }

        .affordable-section-header h2 {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .affordable-section-header p {
            font-size: 1rem;
        }
    }

    .affordable-content-wrapper {
        display: flex;
        gap: 60px;
        align-items: flex-start;
        padding: 0 80px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .affordable-left-content {
        flex: 1;
        max-width: 50%;
        display: flex;
        flex-direction: column;
    }

    .affordable-intro-text {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
        margin-bottom: 30px;
        text-align: left;
    }

    .affordable-accordion-container {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .affordable-accordion-item {
        background-color: #0f2e4d;
        color: white;
        border-radius: 0;
        overflow: hidden;
    }

    .affordable-accordion-checkbox {
        display: none;
    }

    .affordable-accordion-header {
        padding: 20px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.5rem;
        font-weight: 500;
        background-color: #0f2e4d;
        cursor: pointer;
        user-select: none;
    }

    .affordable-accordion-icon {
        font-size: 2rem;
        font-weight: 300;
        transition: transform 0.3s ease;
        flex-shrink: 0;
        margin-left: 15px;
    }

    .affordable-accordion-checkbox:checked + .affordable-accordion-header .affordable-accordion-icon {
        content: '-';
        transform: rotate(0deg);
    }

    .affordable-accordion-checkbox:checked + .affordable-accordion-header .affordable-accordion-icon::before {
        content: '-';
    }

    .affordable-accordion-icon::before {
        content: '+';
    }

    .affordable-accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        padding: 0 24px;
        background-color: #ffffff;
    }

    .affordable-accordion-checkbox:checked ~ .affordable-accordion-content {
        max-height: 500px;
        padding: 20px 24px;
        border: 1px solid #e0e0e0;
        border-top: none;
    }

    .affordable-accordion-content p {
        color: #000000;
        line-height: 1.7;
        font-size: 1.5rem;
    }

    .affordable-image-container {
        flex: 1;
        max-width: 50%;
        display: flex;
        align-items: stretch;
        justify-content: center;
        position: relative;
        padding: 0;
    }

    .affordable-image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 400px;
    }

    .affordable-image-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 356px;
        height: 237px;
        z-index: 3;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    .affordable-image-bottom {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 356px;
        height: 237px;
        z-index: 2;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    @media (max-width: 968px) {
        .affordable-content-wrapper {
            flex-direction: column;
            gap: 40px;
            padding: 0 40px;
            align-items: center;
        }
        .affordable-left-content {
            max-width: 100%;
        }
        .affordable-image-container {
            max-width: 100%;
            width: 100%;
            height: 400px;
        }
        .affordable-image-top, .affordable-image-bottom {
            width: 280px;
            height: 186px;
        }
    }

    .rcm-solutions-section {
        max-width: 1440px;
        margin: 40px auto;
        padding: 40px 20px;
    }

    .rcm-content-wrapper {
        display: flex;
        gap: 60px;
        align-items: flex-start;
        padding: 0 80px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .rcm-left-content {
        flex: 1;
    }

    .rcm-left-content h2 {
        font-size: 2.5rem;
        color: #1a1a2e;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .rcm-left-content p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
        text-align: justify;
    }

    .rcm-right-cards {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .rcm-feature-card {
        background-color: #0f2e4d;
        color: white;
        border-radius: 12px;
        padding: 25px 30px;
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .rcm-icon-container {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .rcm-icon-container img {
        width: 35px;
        height: 35px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .rcm-card-content h3 {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.3;
        color: white;
    }

    .rcm-card-content p {
        font-size: 1.5rem;
        color: #d4e3f0;
        line-height: 1.6;
    }

    @media (max-width: 968px) {
        .rcm-content-wrapper {
            flex-direction: column;
            gap: 40px;
            padding: 0 40px;
        }
    }

    @media (max-width: 768px) {
        .rcm-feature-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 30px 25px;
        }

        .rcm-icon-container {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .rcm-icon-container img {
            width: 45px;
            height: 45px;
        }

        .rcm-card-content h3 {
            font-size: 1.6rem;
            text-align: center;
        }

        .rcm-card-content p {
            font-size: 1.3rem;
            text-align: center;
        }

        .rcm-content-wrapper {
            padding: 0 20px;
        }

        .rcm-left-content {
            max-width: 100%;
        }

        .rcm-right-cards {
            max-width: 100%;
        }
    }

    @media (max-width: 480px) {
        .rcm-card-content h3 {
            font-size: 2em;
        }

        .rcm-card-content p {
            font-size: 1.5rem;
        }
    }

    .transform-billing-section {
        background-color: #0a2540;
        padding: 60px 20px;
        margin: 40px 0;
    }

    .transform-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 80px;
    }

    .transform-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .transform-header h2 {
        font-size: 2.5rem;
        color: #ffffff;
        font-weight: 700;
        line-height: 1.3;
        border: none;
    }

    .transform-cards-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .transform-card {
        background-color: #ffffff;
        border-radius: 15px;
        padding: 35px 30px;
        text-align: left;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .transform-card-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(15, 46, 77, 0.1);
        border-radius: 12px;
        padding: 10px;
    }

    .transform-card-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: brightness(0) saturate(100%) invert(13%) sepia(35%) saturate(2084%) hue-rotate(188deg) brightness(95%) contrast(97%);
    }

    .transform-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .transform-card h3 {
        font-size: 2rem;
        color: #1a1a2e;
        font-weight: 600;
        margin-bottom: 15px;
        line-height: 1.3;
        text-align: left;
    }

    .transform-card p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.7;
        text-align: left;
    }

    @media (max-width: 1024px) {
        .transform-cards-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .transform-container {
            padding: 0 40px;
        }

        .transform-card h3 {
            font-size: 1.6rem;
        }

        .transform-card p {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 768px) {
        .transform-cards-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .transform-container {
            padding: 0 20px;
        }

        .transform-header {
            margin-bottom: 40px;
        }

        .transform-header h2 {
            font-size: 1.8rem;
        }

        .transform-card {
            padding: 30px 25px;
        }

        .transform-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .transform-card p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
    }

    @media (max-width: 480px) {
        .transform-header h2 {
            font-size: 1.5rem;
        }

        .transform-card {
            padding: 25px 20px;
        }

        .transform-card h3 {
            font-size: 1.3rem;
        }

        .transform-card p {
            font-size: 1.1rem;
        }
    }

    .testimonials-section-hospital {
        max-width: 1440px;
        margin: 40px auto;
        padding: 40px 20px;
    }

    .section-header-hospital {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-header-hospital h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 10px;
        border: none;
    }

    .section-header-hospital p {
        font-size: 15px;
        color: #666;
    }

    .testimonials-grid-hospital {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .testimonial-card-hospital {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .testimonial-card-hospital:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-color: #d0d0d0;
    }

    .quote-icon-hospital {
        width: 32px;
        height: 24px;
        margin-bottom: 15px;
    }

    .testimonial-text-hospital {
        font-size: 14px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .author-info-hospital {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-top: 20px;
        border-top: 1px solid #e0e0e0;
    }

    .author-avatar-hospital {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }

    .author-avatar-hospital img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .author-name-hospital {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a2e;
        margin-bottom: 3px;
    }

    .author-title-hospital {
        font-size: 13px;
        color: #666;
    }

    @media (max-width: 768px) {
        .testimonials-grid-hospital {
            grid-template-columns: 1fr;
        }
    }

    .cta-container-hospital {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        min-height: 280px;
        margin: 40px auto;
        max-width: 1200px;
    }

    .cta-container-hospital::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/hospital/hospital-img/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content-hospital {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content-hospital h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 12px;
        line-height: 1.2;
        border: none;
    }

    .cta-content-hospital p {
        font-size: 20px;
        color: #FFFFFF;
        opacity: 0.9;
        margin-bottom: 25px;
    }

    .cta-request-btn-hospital {
        background-color: white;
        color: #002147;
        padding: 10px 28px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 25px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .cta-container-hospital {
            border-radius: 20px;
            padding: 40px 20px;
            min-height: auto;
            margin: 20px;
        }

        .cta-container-hospital h2 {
            font-size: 24px !important;
        }

        .cta-content-hospital p {
            font-size: 16px;
        }

        .cta-request-btn-hospital {
            padding: 9px 24px;
            font-size: 13px;
        }

        .hospital-services-grid {
            grid-template-columns: 1fr !important;
            gap: 15px;
        }

        .hospital-service-item span {
            font-size: 1.1rem;
        }

        .hospital-service-item::before {
            width: 24px;
            height: 24px;
        }

        .affordable-content-wrapper {
            flex-direction: column !important;
        }

        .affordable-left-content {
            max-width: 100% !important;
        }

        .affordable-image-container {
            max-width: 100% !important;
            margin-top: 30px;
        }

        .affordable-section-header h2 {
            font-size: 1.8rem !important;
        }

        .affordable-accordion-header {
            padding: 15px 18px !important;
        }

        .affordable-accordion-content p {
            font-size: 1.2rem !important;
        }

        .rcm-content-wrapper {
            flex-direction: column !important;
        }

        .rcm-left-content {
            max-width: 100% !important;
        }

        .rcm-image-container {
            max-width: 100% !important;
            margin-top: 30px;
        }

        .transform-cards-grid {
            grid-template-columns: 1fr !important;
        }

        .transform-header h2 {
            font-size: 1.8rem !important;
        }
    }

    @media (max-width: 480px) {
        .cta-container-hospital h2 {
            font-size: 20px !important;
        }

        .cta-content-hospital p {
            font-size: 14px;
        }

        .hospital-service-item span {
            font-size: 1rem;
        }

        .affordable-section-header h2 {
            font-size: 1.5rem !important;
        }

        .transform-header h2 {
            font-size: 1.5rem !important;
        }
    }
</style>

<div class="hospital-billing-wrapper">
    <div class="hospital-billing-container">
        <!-- Hero Section -->
        <section class="hero-section-hospital">
        <img src="{{ asset('assets/images/hospital/hospital-img/hospital-hero.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-hospital">
                <h1>Streamline Your Hospital Billing, Maximize Revenue</h1>
                <p>Expert hospital billing for faster reimbursements, fewer denials, and full compliance.</p>
            </div>
        </section>

        <!-- Intro Section -->
        <section class="hospital-billing-info-section">
            <div class="hospital-info-wrapper">
                <div class="hospital-image-container">
                    <img src="{{ asset('assets/images/hospital/hospital-img/hospital-biling-services.jpg') }}" alt="Hospital billing professional">
                </div>
                <div class="hospital-text-content">
                    <h2>What are Hospital Billing Services?</h2>
                    <p class="hospital-subtitle">
                        Hospital billing is a service that provides end-to-end revenue cycle management 
                        solutions for hospitals and clinics. Here is an overview of what it typically offers:
                    </p>
                    <div class="hospital-services-grid">
                        <div class="hospital-service-item"><span>Coding and Charge Entry</span></div>
                        <div class="hospital-service-item"><span>Insurance Verification & Authorization</span></div>
                        <div class="hospital-service-item"><span>Claim Submission & Follow Up</span></div>
                        <div class="hospital-service-item"><span>Payment Posting & Account Follow up</span></div>
                        <div class="hospital-service-item"><span>Denial Management</span></div>
                        <div class="hospital-service-item"><span>Reporting and Analytics</span></div>
                        <div class="hospital-service-item"><span>Patient Collections</span></div>
                        <div class="hospital-service-item"><span>Technology and Systems</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Affordable Billing Section -->
        <section class="affordable-billing-section">
            <div class="affordable-section-header">
                <h2>Need Affordable Medical Billing for Your Hospital?</h2>
                <p>Optimize billing, boost cash flow, and cut operational costs all in one solution.</p>
            </div>
            <div class="affordable-content-wrapper">
                <div class="affordable-left-content">
                    <p class="affordable-intro-text">
                        Hospitals can leverage our medical revenue services to manage the 
                        entire process of collecting payments from patients' health insurance 
                        providers. We handle all billing tasks so your healthcare facility receives 
                        full reimbursement, maintains better cash flow, and experiences fewer 
                        payment denials from payers.
                    </p>
                    <div class="affordable-accordion-container">
                        <div class="affordable-accordion-item">
                            <input type="checkbox" id="acc-billing-1" class="affordable-accordion-checkbox">
                            <label for="acc-billing-1" class="affordable-accordion-header">
                                <span>Insurance claims processing</span>
                                <span class="affordable-accordion-icon"></span>
                            </label>
                            <div class="affordable-accordion-content">
                                <p>We handle the complete insurance claims lifecycle, from submission to follow-up. Our expert team ensures accurate coding, timely filing, and proper documentation to maximize claim acceptance rates and minimize denials.</p>
                            </div>
                        </div>
                        <div class="affordable-accordion-item">
                            <input type="checkbox" id="acc-billing-2" class="affordable-accordion-checkbox">
                            <label for="acc-billing-2" class="affordable-accordion-header">
                                <span>Patient billing and invoicing</span>
                                <span class="affordable-accordion-icon"></span>
                            </label>
                            <div class="affordable-accordion-content">
                                <p>Our patient billing services provide clear, itemized statements that improve transparency and patient satisfaction. We manage the entire invoicing process, including payment plans and patient communications, to optimize collections.</p>
                            </div>
                        </div>
                        <div class="affordable-accordion-item">
                            <input type="checkbox" id="acc-billing-3" class="affordable-accordion-checkbox">
                            <label for="acc-billing-3" class="affordable-accordion-header">
                                <span>Payment posting and reconciliation</span>
                                <span class="affordable-accordion-icon"></span>
                            </label>
                            <div class="affordable-accordion-content">
                                <p>We accurately post all payments and adjustments to patient accounts in real-time. Our reconciliation process ensures your financial records match payer remittances, providing complete visibility into your revenue cycle performance.</p>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const accordionCheckboxes = document.querySelectorAll('.affordable-accordion-checkbox');
                            
                            accordionCheckboxes.forEach(function(checkbox) {
                                checkbox.addEventListener('change', function() {
                                    if (this.checked) {
                                        // Close all other accordions
                                        accordionCheckboxes.forEach(function(otherCheckbox) {
                                            if (otherCheckbox !== checkbox) {
                                                otherCheckbox.checked = false;
                                            }
                                        });
                                    }
                                });
                            });
                        });
                    </script>
                </div>
                <div class="affordable-image-container">
                    <div class="affordable-image-wrapper">
                        <img src="{{ asset('assets/images/hospital/hospital-img/63d8ead30ba2f1b9c789466005b0015adeb0000f.jpg') }}" alt="Doctor working" class="affordable-image-top">
                        <img src="{{ asset('assets/images/hospital/hospital-img/bc1c23a21c3f6fa5eafff7ee6c2d397fb99413f5.jpg') }}" alt="Medical professional" class="affordable-image-bottom">
                    </div>
                </div>
            </div>
        </section>

        <!-- RCM Solutions Section -->
        <section class="rcm-solutions-section">
            <div class="rcm-content-wrapper">
                <div class="rcm-left-content">
                    <h2>Hospital Revenue Cycle Management Solutions</h2>
                    <p>
                        Our healthcare RCM services equip hospitals with advanced revenue 
                        cycle expertise and cutting-edge technology that go beyond what most 
                        in-house teams can offer. More than just a billing company, we manage 
                        and optimize the entire process from patient registration and eligibility 
                        verification to claims submission, coding, payment posting, and follow-up. 
                        By streamlining every step, we help hospitals reduce errors, 
                        accelerate reimbursements, enhance cash flow, and ensure smoother 
                        operations while maximizing overall revenue performance.
                    </p>
                </div>
                <div class="rcm-right-cards">
                    <div class="rcm-feature-card">
                        <div class="rcm-icon-container">
                            <img src="{{ asset('assets/images/hospital/hospital-img/shield-check (1) 1.png') }}" alt="Shield Check Icon">
                        </div>
                        <div class="rcm-card-content">
                            <h3>Denial Management</h3>
                            <p>We streamline the hospital revenue cycle from registration to final payment—to boost efficiency and</p>
                        </div>
                    </div>
                    <div class="rcm-feature-card">
                        <div class="rcm-icon-container">
                            <img src="{{ asset('assets/images/hospital/hospital-img/Vector (52).png') }}" alt="Refresh Icon">
                        </div>
                        <div class="rcm-card-content">
                            <h3>AR Follow-Up</h3>
                            <p>Using advanced analytics, we track unpaid claims and prioritize follow-ups to boost collections and cash flow.</p>
                        </div>
                    </div>
                    <div class="rcm-feature-card">
                        <div class="rcm-icon-container">
                            <img src="{{ asset('assets/images/hospital/hospital-img/chart-histogram 1.png') }}" alt="Analytics Icon">
                        </div>
                        <div class="rcm-card-content">
                            <h3>Performance Analytics</h3>
                            <p>Our dashboards and reports reveal revenue cycle opportunities and help hospitals optimize billing and KPIs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Transform Billing Section -->
        <section class="transform-billing-section">
            <div class="transform-container">
                <div class="transform-header">
                    <h2>Transform Your Hospital Billing Today</h2>
                </div>
                <div class="transform-cards-grid">
                    <div class="transform-card">
                        <div class="transform-card-icon">
                            <img src="{{ asset('assets/images/hospital/hospital-img/shield-check (1) 1.png') }}" alt="EHR Integration">
                        </div>
                        <h3>EHR Integration</h3>
                        <p>Seamlessly integrate with your existing EHR system to ensure accurate data flow, reduced manual entry, and fewer billing errors. Our integration streamlines workflows and improves overall revenue cycle efficiency.</p>
                    </div>
                    <div class="transform-card">
                        <div class="transform-card-icon">
                            <img src="{{ asset('assets/images/hospital/hospital-img/shield-check (1) 1.png') }}" alt="Security">
                        </div>
                        <h3>Security and Compliance</h3>
                        <p>Protect patient data with strict HIPAA-compliant processes and industry-leading security standards. We ensure your billing operations remain secure, compliant, and audit-ready at all times.</p>
                    </div>
                    <div class="transform-card">
                        <div class="transform-card-icon">
                            <img src="{{ asset('assets/images/hospital/hospital-img/Vector (52).png') }}" alt="Automation">
                        </div>
                        <h3>Billing Automation</h3>
                        <p>Automate repetitive billing tasks to reduce errors, speed up claim processing, and improve cash flow. Our smart automation tools enhance accuracy and operational efficiency.</p>
                    </div>
                    <div class="transform-card">
                        <div class="transform-card-icon">
                            <img src="{{ asset('assets/images/hospital/hospital-img/chart-histogram 1.png') }}" alt="Telehealth">
                        </div>
                        <h3>Telehealth Billing</h3>
                        <p>Accurately manage telehealth claims with up-to-date coding and payer guidelines. We ensure proper documentation and timely reimbursement for virtual care services.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section-hospital">
            <div class="section-header-hospital">
                <h2>Driving Growth for Healthcare Organizations</h2>
                <p>Trusted by Satisfied Providers Nationwide</p>
            </div>
            <div class="testimonials-grid-hospital">
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">Our hospital billing has never been more efficient. The team's expertise in complex claim management and denial resolution has significantly improved our revenue cycle. Their attention to detail and proactive approach makes them an invaluable partner.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital"><img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop" alt="Michael Anderson"></div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Michael Anderson</div>
                            <div class="author-title-hospital">CFO<br>Regional Medical Center</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">Switching to this billing service was the best decision for our hospital. They handle everything from credentialing to payment posting with remarkable accuracy. Our days in AR have decreased by 40% and cash flow has never been better.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital"><img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100&h=100&fit=crop" alt="David Martinez"></div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">David Martinez</div>
                            <div class="author-title-hospital">Revenue Cycle Director<br>Community Healthcare System</div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">The transparency and reporting capabilities are outstanding. We receive detailed analytics that help us make informed decisions. Their team is responsive, knowledgeable, and truly invested in our success. Highly recommend for any hospital system.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital"><img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop" alt="Robert Thompson"></div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Robert Thompson</div>
                            <div class="author-title-hospital">Administrator<br>Metropolitan Hospital Network</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       @include('partials.cta-section', [
    'title' => 'Ready to Streamline Your Billing?',
    'description' => 'We handle claims and coding so your team can focus on patients.',
    'buttonText' => 'Explore Solutions',
    'buttonLink' => url('contact-us.php')
])

    </div>
</div>
@endsection
