@extends('layouts.app')

@section('title', 'Electronic Health Records - AMD SOL')
@section('meta_description', 'Streamline documentation, workflows, and billing for your healthcare practice with our Electronic Health Records (EHR) solutions.')
@section('meta_keywords', 'EHR, Electronic Health Records, Medical Billing, Healthcare IT')

@section('content')
<style>
    /* EHR Page Specific Styles */
    .ehr-wrapper * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        /* font-family: 'Poppins', sans-serif; */
    }
     .ehr-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .ehr-wrapper h1, .ehr-wrapper h2, .ehr-wrapper h3 {
        color: #000000;
    }

    /* Override for dark background sections */
    .ehr-billing-feature-card h1,
    .ehr-billing-feature-card h2,
    .ehr-billing-feature-card h3,
    .hero-section h1,
    .hero-section h2,
    .hero-section h3 {
        color: #ffffff !important;
    }

    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url('{{ asset("assets/images/ehr/ehr-soloution.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 10px 20px;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .hero-section {
            min-height: 400px;
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
            text-align: center;
            max-width: 100%;
            font-size: 16px;
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
        line-height: 1.2;
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
        .hero-content {
            padding-left: 30px;
            padding-right: 20px;
        }

        .hero-section h1 {
            font-size: 28px;
            max-width: 100%;
        }

        .hero-section p {
            font-size: 15px;
            max-width: 100%;
        }
    }

    @media (max-width: 480px) {
        .hero-content {
            padding-left: 20px;
            padding-right: 15px;
        }

        .hero-section h1 {
            font-size: 24px;
        }

        .hero-section p {
            font-size: 14px;
        }
    }
     .content-section-wrapper {
        display: flex;
        align-items: center;
        gap: 80px;
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
    }

    .content-section-image-box {
        flex: 1;
    }

    .content-section-image-box img {
        width: 100%;
        height: auto;
    }

    .content-section-text-box {
        flex: 1;
    }

    .content-section-heading {
        font-size: 2.5rem;
        color: #002147;
        margin-bottom: 20px;
        text-align: left;
    }

    .content-section-description {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content-section-wrapper {
            flex-direction: column;
            gap: 40px;
        }

        .content-section-image-box {
            order: 1; /* Image comes first on mobile */
        }

        .content-section-text-box {
            order: 2; /* Text comes second on mobile */
        }

        .content-section-image-box {
            order: 2; /* Image comes second on mobile */
        }

        .content-section-heading {
            font-size: 2rem;
        }
    }
     .ehr-billing-integration-section {
        width: 80%;
        /* max-width: 1200px; */
        margin: 30px auto;
    }

    .ehr-billing-header-wrapper {
        text-align: center;
        margin-bottom: 35px;
    }

    .ehr-billing-main-title {
        font-size: 2.3rem;
        font-weight: 700;
        color: #0a1f44;
        margin-bottom: 12px;
        letter-spacing: -0.5px;
    }

    .ehr-billing-subtitle-text {
        font-size: 1.5rem;
        color: #000000;
        font-weight: 400;
    }

    .ehr-billing-features-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .ehr-billing-feature-card {
        background: #0a1f44;
        border-radius: 18px;
        padding: 40px;
        display: flex;
        align-items: center;
        gap: 25px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .ehr-billing-feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(10, 31, 68, 0.15);
    }

    .ehr-billing-icon-container {
        flex-shrink: 0;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ehr-billing-icon-container img {
        width: 66px;
        height: 66px;
        object-fit: contain;
    }

    .ehr-billing-feature-content {
        flex: 1;
    }

    .ehr-billing-feature-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 12px;
    }

    .ehr-billing-feature-description {
        font-size: 1.5rem;
        color: #cbd5e1;
        line-height: 1.6;
    }

    /* Responsive Design */
    @media (max-width: 968px) {
        .ehr-billing-main-title {
            font-size: 2rem;
        }

        .ehr-billing-features-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .ehr-billing-feature-card {
            padding: 30px;
        }
    }

    @media (max-width: 640px) {
        .ehr-billing-main-title {
            font-size: 1.75rem;
        }

        .ehr-billing-subtitle-text {
            font-size: 1rem;
        }

        .ehr-billing-header-wrapper {
            margin-bottom: 35px;
        }

        .ehr-billing-icon-container {
            width: 60px;
            height: 60px;
        }

        .ehr-billing-feature-title {
            font-size: 1.25rem;
        }

        .ehr-billing-feature-description {
            font-size: 0.9375rem;
        }
    }
 .hc-services-section {
        padding: 40px 20px;
        background-color: #f5f7fa;
    }

    .hc-services-wrapper {
        max-width: 1100px;
        margin: 0 auto;
        text-align: center;
    }

    .hc-services-heading {
        font-size: 36px;
        font-weight: 600;
        color: #ffff;
        margin-bottom: 12px;
    }

    .hc-services-desc {
        max-width: 878px;
        margin: 0 auto 35px;
        font-size: 16px;
        color: #000000;
        line-height: 1.6;
    }

    /* Cards Layout */
    .hc-services-cards {
        display: flex;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
    }

    /* Single Card */
    .hc-service-card {
        width: 268.26px;
        min-height: 313.68px;
        background: #ffffff;
        border-radius: 24px;
        padding: 28px 20px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hc-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .hc-card-icon-wrapper {
        width: 80px;
        height: 80px;
        background: #002147;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .hc-card-image {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    .hc-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .hc-card-text {
        max-width: 183px;
        font-size: 14px;
        color: #000000;
        line-height: 1.6;
        font-weight: 400;
    }

    /* Responsive Design */
    @media (max-width: 900px) {
        .hc-services-section {
            padding: 35px 20px;
        }

        .hc-services-heading {
            font-size: 32px;
        }

        .hc-services-desc {
            font-size: 15px;
            margin-bottom: 30px;
        }

        .hc-services-cards {
            gap: 20px;
        }
    }

    @media (max-width: 640px) {
        .hc-services-section {
            padding: 30px 15px;
        }

        .hc-services-heading {
            font-size: 28px;
        }

        .hc-services-desc {
            font-size: 14px;
            margin-bottom: 25px;
        }

        .hc-service-card {
            width: 100%;
            max-width: 320px;
        }

        .hc-card-text {
            max-width: 100%;
        }
    }

    @media (max-width: 480px) {
        .hc-services-heading {
            font-size: 24px;
        }

        .hc-services-desc {
            font-size: 13px;
        }

        .hc-card-icon-wrapper {
            width: 70px;
            height: 70px;
        }

        .hc-card-image {
            width: 45px;
            height: 45px;
        }

        .hc-card-title {
            font-size: 17px;
        }

        .hc-card-text {
            font-size: 13px;
        }
    }
    .cta-pricing-section {
        width: 80%;
        margin: 0 auto;
        padding-bottom: 80px; /* Add bottom padding to prevent cut-off */
    }

    .cta-container {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden; /* Enable overflow hidden to contain wave */
        min-height: 280px;
    }

    .cta-container::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/ehr/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content h2 {
        font-size: 40px;
        font-weight: 700;
        color: white;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .cta-content p {
        max-width: 364px;
        margin: 0 auto 25px;
        font-weight: 400;
        text-align: center;
        font-size: 18px;
        line-height: 30px;
        color: #FFFFFF;
        opacity: 0.9;
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
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        text-decoration: none;
        display: inline-block;
    }

    .cta-request-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        background-color: #f8f8f8;
        color: #002147;
    }
    /* Responsive Design */
    @media (max-width: 768px) {
        .cta-pricing-section {
            padding-bottom: 60px;
        }

        .cta-container {
            padding: 40px 30px;
            border-radius: 30px;
            min-height: 200px;
        }

        .cta-container::before {
            background-size: cover;
            opacity: 0.3;
        }

        .cta-content h2 {
            font-size: 32px;
        }

        .cta-content p {
            font-size: 16px;
            line-height: 26px;
        }

        .cta-request-btn {
            padding: 12px 35px;
            font-size: 15px;
        }
    }

    @media (max-width: 480px) {
        .cta-pricing-section {
            padding-bottom: 50px;
        }

        .cta-container {
            padding: 35px 20px;
            border-radius: 25px;
            min-height: 180px;
        }

        .cta-container::before {
            opacity: 0.2;
        }

        .cta-content h2 {
            font-size: 26px;
        }

        .cta-content p {
            font-size: 14px;
            line-height: 24px;
            max-width: 100%;
        }

        .cta-request-btn {
            padding: 12px 30px;
            font-size: 14px;
        }
    }
</style>

<div class="ehr-wrapper">
    <div class="ehr-container">
        <section class="hero-section">
            <img src="{{ asset("assets/images/ehr/ehr-soloution.png") }}" alt="EHR Solutions" class="mobile-hero-img">
            <div class="hero-content">
                <h1>Electronic Health Record (EHR) Solutions</h1>
                <p>Streamline documentation, workflows, and billing for your healthcare practice.</p>
            </div>
        </section>
        
        <section class="content-section-wrapper">
            <div class="content-section-image-box">
                <img src="{{ asset('assets/images/ehr/heroehrsoloution.png') }}" alt="EHR Illustration">
            </div>
            <div class="content-section-text-box">
                <h1 class="content-section-heading">What is EHR?</h1>
                <p class="content-section-description">
                EHR stands for Electronic Health Record, which is a digital version of a patient’s medical history. It contains information like diagnoses, medications, lab results, immunizations, and treatment plans. EHRs allow healthcare providers to access and share patient data securely improving care coordination and reducing errors. They also help in tracking patient outcomes over time and supporting efficient, informed decision-making. <br>
                An EHR is a system that electronically manages a patient’s health information. It includes appointments, allergies, immunizations, and progress notes. It helps healthcare providers deliver care more efficiently and accurately.
                </p>
            </div>
        </section>
        
        <section class="ehr-billing-integration-section">
            <div class="ehr-billing-header-wrapper">
                <h1 class="ehr-billing-main-title">EHR + Medical Billing Integration</h1>
                <p class="ehr-billing-subtitle-text">Seamlessly connect clinical documentation with accurate billing workflows.</p>
            </div>

            <div class="ehr-billing-features-grid">
                <!-- EHR Documentation Card -->
                <div class="ehr-billing-feature-card">
                    <div class="ehr-billing-icon-container">
                        <img src="{{ asset('assets/images/ehr/ehr-docomentation.png') }}" alt="EHR documentation icon">
                    </div>
                    <div class="ehr-billing-feature-content">
                        <h3 class="ehr-billing-feature-title">EHR Documentation</h3>
                        <p class="ehr-billing-feature-description">Capture patient records and clinical notes digitally for accurate tracking.</p>
                    </div>
                </div>

                <!-- Medical Coding Card -->
                <div class="ehr-billing-feature-card">
                    <div class="ehr-billing-icon-container">
                        <img src="{{ asset('assets/images/ehr/ehr-medical.png') }}" alt="">
                    </div>
                    <div class="ehr-billing-feature-content">
                        <h3 class="ehr-billing-feature-title">Medical Coding</h3>
                        <p class="ehr-billing-feature-description">Automatically apply CPT & ICD codes to ensure compliant claims.</p>
                    </div>
                </div>

                <!-- Claim Submission Card -->
                <div class="ehr-billing-feature-card">
                    <div class="ehr-billing-icon-container">
                    <img src="{{ asset('assets/images/ehr/ehrclaim.png') }}" alt="">
                    </div>
                    <div class="ehr-billing-feature-content">
                        <h3 class="ehr-billing-feature-title">Claim Submission</h3>
                        <p class="ehr-billing-feature-description">Submit claims directly from the EHR with minimal errors.</p>
                    </div>
                </div>

                <!-- Payments Card -->
                <div class="ehr-billing-feature-card">
                    <div class="ehr-billing-icon-container">
                        <img src="{{ asset('assets/images/ehr/ehr-payment.png') }}" alt="payments icon">
                    </div>
                    <div class="ehr-billing-feature-content">
                        <h3 class="ehr-billing-feature-title">Payments</h3>
                        <p class="ehr-billing-feature-description">Receive faster reimbursements and reduce denied claims.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="hc-services-section">
            <div class="hc-services-wrapper">
                
                <h2 class="hc-services-heading">Core EHR Capabilities</h2>
                <p class="hc-services-desc">
                    Key features of our EHR systems designed to streamline clinical workflows and optimize billing.
                </p>

                <div class="hc-services-cards">

                    <div class="hc-service-card">
                        <div class="hc-card-icon-wrapper">
                            <img src="{{ asset('assets/images/ehr/clinical.png') }}" alt="" class="hc-card-image">
                        </div>
                        <h3 class="hc-card-title">Clinical Documentation</h3>
                        <p class="hc-card-text">
                            Capture patient records and clinical notes digitally for accurate tracking.
                        </p>
                    </div>

                    <div class="hc-service-card">
                        <div class="hc-card-icon-wrapper">
                        <img src="{{ asset('assets/images/ehr/billing-coding.png') }}" alt="" class="hc-card-image">
                        </div>
                        <h3 class="hc-card-title">Billing & Coding Alignment</h3>
                        <p class="hc-card-text">
                            Automatically align clinical documentation with CPT & ICD codes for compliant claims.
                        </p>
                    </div>

                    <div class="hc-service-card">
                        <div class="hc-card-icon-wrapper">
                            <img src="{{ asset('assets/images/ehr/reporting-analytics.png') }}" alt="" class="hc-card-image">
                        </div>
                        <h3 class="hc-card-title">Reporting & Analytics</h3>
                        <p class="hc-card-text">
                            Monitor billing, claim status, and workflow efficiency with actionable reports.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="cta-pricing-section">
            <div class="cta-container">
                <div class="cta-content">
                    <h2>Streamline Your EHR & Billing</h2>
                    <p>Book a free demo with our experts.</p>
                    <a href="{{ url('contact-us.php') }}" class="cta-request-btn">Request a Free Demo</a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
