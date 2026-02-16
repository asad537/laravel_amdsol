@extends('layouts.app')

@section('title', 'Practice Management - AMD SOL')
@section('meta_description', 'Streamline your practice operations with our Practice Management solutions.')
@section('meta_keywords', 'Practice Management, Medical Billing, Healthcare, Scheduling')

@section('content')
<style>
    /* Practice Management Page Specific Styles */
    .pm-wrapper * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    
    .pm-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }
    
    .pm-wrapper h1, .pm-wrapper h2, .pm-wrapper h3 {
        color: #002147;
    }

    /* Hero Section */
    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url('{{ asset("assets/images/practice-management/practice-management.jpeg") }}');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 60px 20px;
        margin: 0;
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

    /* Practice Management Section */
    .practice-mgmt-section {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 97px;
    }

    .practice-mgmt-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        align-items: center;
        background: white;
        padding: 60px;
        border-radius: 20px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
    }

    .practice-mgmt-image-wrapper {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .practice-mgmt-image {
        width: 100%;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgb(248, 248, 248);
        object-fit: cover;
    }

    .practice-mgmt-content {
        padding-left: 20px;
    }

    .practice-mgmt-title {
        font-size: 34px;
        font-weight: 700;
        color: #0a1f44;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .practice-mgmt-description {
        font-size: 16px;
        color: #4b5563;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .practice-mgmt-features {
        list-style: none;
        padding: 0;
    }

    .practice-mgmt-feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 18px;
        font-size: 16px;
        color: #1f2937;
        gap: 20px;
    }

    .practice-mgmt-feature-text {
        font-weight: 500;
    }

    /* Key Features Section */
    .key-features-section {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 97px;
    }

    .key-features-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .key-features-main-title {
        font-size: 42px;
        font-weight: 700;
        color: #0a1f44;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .key-features-subtitle {
        font-size: 18px;
        color: #6b7280;
        font-weight: 400;
        line-height: 1.6;
    }

    .key-features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .key-feature-card {
        background: white;
        border: 2px solid #e5e7eb;
        border-radius: 20px;
        padding: 40px 30px;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .key-feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border-color: #0a1f44;
    }

    .key-feature-icon-wrapper {
        width: 80px;
        height: 80px;
        background: #0a1f44;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
    }
    
    .key-feature-icon-wrapper img {
        width: 45px;
        height: 45px;
        object-fit: contain;
    }

    .key-feature-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #0a1f44;
        margin-bottom: 12px;
        line-height: 1.4;
    }

    .key-feature-card-description {
        font-size: 15px;
        color: #6b7280;
        line-height: 1.6;
    }

    /* Benefits Section */
    .practice-benefits-section {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 97px;
    }

    .practice-benefits-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: center;
        background: white;
        padding: 60px;
        border-radius: 20px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
    }

    .practice-benefits-content {
        padding-right: 20px;
    }

    .practice-benefits-main-title {
        font-size: 36px;
        font-weight: 700;
        color: #0a1f44;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .practice-benefits-subtitle {
        font-size: 16px;
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 35px;
    }

    .practice-benefits-list {
        list-style: none;
        padding: 0;
    }

    .practice-benefit-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        font-size: 16px;
        color: #1f2937;
    }

    .practice-benefit-icon {
        width: 24px;
        height: 24px;
        background: #0a1f44;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 14px;
        flex-shrink: 0;
    }

    .practice-benefit-icon::after {
        content: '✓';
        color: white;
        font-size: 14px;
        font-weight: 700;
    }

    .practice-benefit-text {
        font-weight: 500;
        color: #0a1f44;
    }

    .practice-benefits-image-wrapper {
        position: relative;
        
        
    }

    .practice-benefits-image {
        width: 100%;
        height: 400px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    /* CTA Section */
    .cta-pricing-section {
        width: 80%;
        margin: 0 auto;
        padding-bottom: 80px;
    }

    .cta-container {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        min-height: 280px;
    }
    
    .cta-container::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/practice-management/wave.png') }}");
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
        display: inline-block;
        text-decoration: none;
    }

    .cta-request-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        background-color: #f8f8f8;
        color: #002147;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .hero-section { min-height: 400px; }
        .hero-content { padding-left: 50px; }
        .hero-section h1 { font-size: 36px; }
    }

    @media (max-width: 968px) {
        .practice-mgmt-section,
        .key-features-section,
        .practice-benefits-section {
            padding: 0 50px;
        }
        
        .practice-mgmt-container {
            grid-template-columns: 1fr;
            gap: 40px;
            padding: 40px;
        }
        .practice-mgmt-content { order: 1; padding-left: 0; }
        .practice-mgmt-image-wrapper { order: 2; }
        .key-features-grid { grid-template-columns: repeat(2, 1fr); }
        .practice-benefits-container {
            grid-template-columns: 1fr;
            gap: 40px;
            padding: 40px;
        }
        .practice-benefits-content { padding-right: 0; }
    }

    @media (max-width: 768px) {
        .practice-mgmt-section,
        .key-features-section,
        .practice-benefits-section {
            padding: 0 30px;
        }
        
        /* Hero Mobile Updates */
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

        .key-features-grid { grid-template-columns: 1fr; }
        .cta-pricing-section { width: 90%; }
        .cta-content h2 { font-size: 32px; }
        
        .practice-mgmt-container {
            padding: 30px 20px;
        }

        .practice-mgmt-image {
            width: 90%;
            max-width: 350px;
        }

        .practice-mgmt-title {
            font-size: 28px;
        }

        .practice-mgmt-description {
            font-size: 15px;
        }

        .practice-mgmt-feature-item {
            font-size: 15px;
        }

        .practice-benefits-container {
            padding: 30px 20px;
        }

        .practice-benefits-image {
            height: 300px;
        }

        .practice-benefits-main-title {
            font-size: 28px;
        }

        .practice-benefits-subtitle {
            font-size: 15px;
        }
    }
    
    @media (max-width: 480px) {
        .practice-mgmt-section,
        .key-features-section,
        .practice-benefits-section {
            padding: 0 20px;
        }

        .practice-benefits-image {
            height: 250px;
            border-radius: 15px;
        }

        .practice-benefits-main-title {
            font-size: 24px;
        }

        .practice-benefits-subtitle {
            font-size: 14px;
        }

        .practice-benefit-item {
            font-size: 14px;
            margin-bottom: 15px;
        }
    }
</style>

<div class="pm-wrapper">
    <div class="pm-container">
        <!-- Hero Section -->
        <section class="hero-section">
            <img src="{{ asset('assets/images/practice-management/practice-management.jpeg') }}" alt="Practice Management" class="mobile-hero-img" style="display: none;">
            <div class="hero-content">
                <h1>We’ll Manage Your Practice</h1>
                <p>Appointments, staff, records, and billing handled seamlessly in one system.</p>
            </div>
        </section>

        <!-- Practice Management Section -->
        <section class="practice-mgmt-section">
            <div class="practice-mgmt-container">
                <!-- Left Side - Image -->
                <div class="practice-mgmt-image-wrapper">
                    <img 
                        src="{{ asset('assets/images/practice-management/practicemangemet hero.jpg') }}" 
                        alt="Doctor using Practice Management Software" 
                        class="practice-mgmt-image"
                    >
                </div>

                <!-- Right Side - Content -->
                <div class="practice-mgmt-content">
                    <h2 class="practice-mgmt-title">What is Practice Management?</h2>
                    <p class="practice-mgmt-description">
                        Practice Management systems help healthcare providers manage appointments, patient records, billing workflows, and daily operations efficiently.
                    </p>

                    <ul class="practice-mgmt-features">
                        <li class="practice-mgmt-feature-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px;">
                            <span class="practice-mgmt-feature-text">Billing Coordination</span>
                        </li>
                        <li class="practice-mgmt-feature-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px;">
                            <span class="practice-mgmt-feature-text">Performance Reporting</span>
                        </li>
                        <li class="practice-mgmt-feature-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px;">
                            <span class="practice-mgmt-feature-text">Appointment Scheduling</span>
                        </li>
                        <li class="practice-mgmt-feature-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px;">
                            <span class="practice-mgmt-feature-text">Patient Records</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Key Features Section -->
        <section class="key-features-section">
            <div class="key-features-header">
                <h2 class="key-features-main-title">Key Practice Management Features</h2>
                <p class="key-features-subtitle">Everything you need to manage your practice efficiently in one place.</p>
            </div>

            <div class="key-features-grid">
                <!-- Card 1 -->
                <div class="key-feature-card">
                    <div class="key-feature-icon-wrapper">
                        <img src="{{ asset('assets/images/practice-management/appoiment.png') }}" alt="Appointment Scheduling">
                    </div>
                    <h3 class="key-feature-card-title">Appointment<br>Scheduling</h3>
                    <p class="key-feature-card-description">Easily manage patient appointments with real-time availability.</p>
                </div>

                <!-- Card 2 -->
                <div class="key-feature-card">
                    <div class="key-feature-icon-wrapper">
                        <img src="{{ asset('assets/images/practice-management/patient-doc.png') }}" alt="Patient Documentation">
                    </div>
                    <h3 class="key-feature-card-title">Patient<br>Documentation</h3>
                    <p class="key-feature-card-description">Securely store and access patient records anytime.</p>
                </div>

                <!-- Card 3 -->
                <div class="key-feature-card">
                    <div class="key-feature-icon-wrapper">
                        <img src="{{ asset('assets/images/practice-management/card.png') }}" alt="Billing & Claims">
                    </div>
                    <h3 class="key-feature-card-title">Billing & Claims<br>Integration</h3>
                    <p class="key-feature-card-description">Seamless billing workflows with faster claim processing.</p>
                </div>

                <!-- Card 4 -->
                <div class="key-feature-card">
                    <div class="key-feature-icon-wrapper">
                        <img src="{{ asset('assets/images/practice-management/reporting.png') }}" alt="Reporting & Analytics">
                    </div>
                    <h3 class="key-feature-card-title">Reporting &<br>Analytics</h3>
                    <p class="key-feature-card-description">Track performance, revenue, and operational insights.</p>
                </div>

                <!-- Card 5 -->
                <div class="key-feature-card">
                    <div class="key-feature-icon-wrapper">
                         <img src="{{ asset('assets/images/practice-management/api.png') }}" alt="EHR Integration">
                    </div>
                    <h3 class="key-feature-card-title">EHR / PM<br>Integration</h3>
                    <p class="key-feature-card-description">Integrates smoothly with leading EHR and PM systems.</p>
                </div>

                <!-- Card 6 -->
                <div class="key-feature-card">
                    <div class="key-feature-icon-wrapper">
                        <img src="{{ asset('assets/images/practice-management/lock.png') }}" alt="HIPAA Compliance">
                    </div>
                    <h3 class="key-feature-card-title">HIPAA<br>Compliance</h3>
                    <p class="key-feature-card-description">Built with secure, HIPAA-compliant processes.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="practice-benefits-section">
            <div class="practice-benefits-container">
                <!-- Left Side - Content -->
                <div class="practice-benefits-content">
                    <h2 class="practice-benefits-main-title">How Your Practice Benefits</h2>
                    <p class="practice-benefits-subtitle">
                        Designed to improve efficiency, accuracy, and patient satisfaction.
                    </p>

                    <ul class="practice-benefits-list">
                        <li class="practice-benefit-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px; width: 24px; height: 24px; flex-shrink: 0;">
                            <span class="practice-benefit-text">Reduced Administrative Workload</span>
                        </li>
                        <li class="practice-benefit-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px; width: 24px; height: 24px; flex-shrink: 0;">
                            <span class="practice-benefit-text">Faster Billing Cycles</span>
                        </li>
                        <li class="practice-benefit-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px; width: 24px; height: 24px; flex-shrink: 0;">
                            <span class="practice-benefit-text">Improved Accuracy & Fewer Errors</span>
                        </li>
                        <li class="practice-benefit-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px; width: 24px; height: 24px; flex-shrink: 0;">
                            <span class="practice-benefit-text">Better Patient Experience</span>
                        </li>
                        <li class="practice-benefit-item">
                            <img src="{{ asset('assets/images/practice-management/check-circle 1.png') }}" alt="circle" style="margin-right: 15px; width: 24px; height: 24px; flex-shrink: 0;">
                            <span class="practice-benefit-text">Real-Time Performance Insights</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Side - Image -->
                <div class="practice-benefits-image-wrapper">
                    <img 
                        src="{{ asset('assets/images/practice-management/practice-benefits.jpg') }}" 
                        alt="Healthcare Team Collaboration" 
                        class="practice-benefits-image"
                    >
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-pricing-section">
            <div class="cta-container">
                <div class="cta-content">
                    <h2>Optimize Your Practice Today</h2>
                    <p>We handle workflows you focus on patients.</p>
                    <a href="{{ url('contact-us.php') }}" class="cta-request-btn">Schedule a Demo</a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
