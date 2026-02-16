@extends('layouts.app')

@section('content')
<style>
    .neurology-page-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .neurology-page-wrapper * {
        box-sizing: border-box;
    }

    .neurology-page-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .hero-section-neurology {
        width: 100%;
        max-width: 100%;
        min-height: 400px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/neurology/neulogy-img/heroneurolgy.png') }}');
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 60px 20px;
        margin: 0;
    }

    @media (max-width: 768px) {
        .hero-section-neurology {
            min-height: auto;
            padding: 0 0 30px 0;
            background-position: right center;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }

        .hero-section-neurology::before {
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

    .hero-section-neurology::before {
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

    .hero-content-neurology {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-neurology h1 {
        font-size: 42px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-neurology p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-neurology {
            padding-left: 20px;
            padding-right: 20px;
        }
        .hero-section-neurology h1 {
            font-size: 28px;
        }
    }

    .healthcare-services-wrapper {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px 97px;
    }

    .healthcare-services-container {
        max-width: 1200px;
        width: 100%;
        border-radius: 20px;
        overflow: hidden;
    }

    .healthcare-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: center;
    }

    .healthcare-image-container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
        
    }

    .healthcare-doctor-image {
        width: 100%;
        max-width: 500px;
        height: 350px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        
    }

    .healthcare-text-section {
        padding: 60px 50px;
    }

    .healthcare-main-heading {
        font-size: 25px;
        font-weight: 700;
        color: #002147;
        line-height: 1.2;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .healthcare-description-text {
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.8;
        text-align: left;
        color: #000000;
    }

    @media (max-width: 968px) {
        .healthcare-content-grid {
            grid-template-columns: 1fr;
        }
        .healthcare-text-section {
            padding: 40px 20px;
        }
    }

    .billing-services-wrapper {
        width: 100%;
        padding: 60px 97px;
        background-color: #f8f9fa;
    }

    .billing-services-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .billing-services-title {
        font-size: 32px;
        font-weight: 700;
        color: #002147;
        text-align: center;
        margin-bottom: 50px;
        border: none;
    }

    .billing-services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .billing-card {
        background: white;
        border: 2px solid #e1e5e9;
        border-radius: 15px;
        padding: 35px 25px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }

    .billing-card:hover {
        border-color: #002147;
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,33,71,0.1);
    }

    .billing-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f0f4f8;
        border-radius: 50%;
    }

    .billing-card-title {
        font-size: 20px;
        font-weight: 600;
        color: #002147;
        margin-bottom: 15px;
    }

    .billing-card-description {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
        text-align: left;
    }

    @media (max-width: 1024px) {
        .billing-services-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .billing-services-grid {
            grid-template-columns: 1fr;
        }
    }

    .simplify-billing-wrapper {
        width: 100%;
        padding: 35px 97px;
        background-color: #fff;
    }

    .simplify-billing-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        align-items: center;
    }

    .simplify-text-section {
        padding-right: 15px;
    }

    .simplify-image-section {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .simplify-main-heading {
        font-size: 26px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 12px;
        border: none;
        text-align: left;
        line-height: 1.2;
    }

    .simplify-description-text {
        font-size: 14px;
        color: #666;
        line-height: 1.5;
        margin-bottom: 15px;
        text-align: justify;
    }

    .simplify-features-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .simplify-features-list li {
        font-size: 14px;
        color: #333;
        margin-bottom: 8px;
        padding-left: 22px;
        position: relative;
        line-height: 1.4;
    }

    .simplify-features-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #002147;
        font-weight: bold;
        font-size: 18px;
        line-height: 1;
    }

    .simplify-billing-image {
        width: 100%;
        max-width: 450px;
        height: auto;
        max-height: 320px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    @media (max-width: 968px) {
        .simplify-billing-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .simplify-text-section {
            padding-right: 0;
        }

        .simplify-billing-image {
            max-width: 100%;
        }
    }

    .impact-numbers-wrapper {
        width: 100%;
        padding: 80px 97px;
        background-color: #002147;
    }

    .impact-numbers-title {
        font-size: 32px;
        font-weight: 700;
        color: white;
        text-align: center;
        margin-bottom: 50px;
        border: none;
    }

    .impact-numbers-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .impact-number-card {
        text-align: center;
    }

    .impact-number {
        font-size: 48px;
        font-weight: 700;
        color: #4CAF50;
        margin-bottom: 10px;
    }

    .impact-label {
        font-size: 16px;
        color: white;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .impact-numbers-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .ehr-section {
        padding: 80px 97px;
        background-color: #ffffff;
    }

    .ehr-title {
        font-size: 32px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 20px;
        color: #002147;
        border: none;
    }

    .ehr-subtitle {
        font-size: 16px;
        color: #666;
        text-align: center;
        max-width: 800px;
        margin: 0 auto 50px;
    }

    .ehr-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ehr-card {
        background: #fff;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 120px;
        transition: all 0.3s ease;
    }

    .ehr-card:hover {
        transform: translateY(-5px);
        border-color: #002147;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .ehr-logo-img {
        max-width: 100%;
        max-height: 80px;
        object-fit: contain;
    }

    @media (max-width: 991px) {
        .ehr-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 575px) {
        .ehr-grid {
            grid-template-columns: 1fr;
        }
    }

    .cta-container-neurology {
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

    .cta-container-neurology::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/neurology/neulogy-img/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content-neurology {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content-neurology h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 12px;
        border: none;
    }

    .cta-content-neurology p {
        font-size: 20px;
        color: #FFFFFF;
        opacity: 0.9;
        margin-bottom: 25px;
    }

    .cta-request-btn-neurology {
        background-color: white;
        color: #002147;
        padding: 14px 45px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    /* Responsive Media Queries */
    @media (max-width: 968px) {
        .healthcare-services-wrapper {
            padding: 25px 50px;
        }

        .billing-services-wrapper {
            padding: 60px 50px;
        }

        .simplify-billing-wrapper {
            padding: 35px 50px;
        }

        .impact-numbers-wrapper {
            padding: 80px 50px;
        }

        .ehr-section {
            padding: 80px 50px;
        }

        .testimonial-section {
            padding: 60px 50px !important;
        }

        .testimonial-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .healthcare-services-wrapper {
            padding: 25px 30px;
        }

        .billing-services-wrapper {
            padding: 60px 30px;
        }

        .simplify-billing-wrapper {
            padding: 30px 30px;
        }

        .impact-numbers-wrapper {
            padding: 80px 30px;
        }

        .ehr-section {
            padding: 80px 30px;
        }

        .testimonial-section {
            padding: 40px 30px !important;
        }

        .testimonial-section h2 {
            font-size: 28px !important;
        }

        .testimonial-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }
    }

    @media (max-width: 480px) {
        .healthcare-services-wrapper {
            padding: 25px 20px;
        }

        .billing-services-wrapper {
            padding: 60px 20px;
        }

        .simplify-billing-wrapper {
            padding: 30px 20px;
        }

        .impact-numbers-wrapper {
            padding: 80px 20px;
        }

        .ehr-section {
            padding: 80px 20px;
        }

        .testimonial-section {
            padding: 30px 20px !important;
        }

        .testimonial-section h2 {
            font-size: 24px !important;
            margin-bottom: 30px !important;
        }
    }
</style>

<div class="neurology-page-wrapper">
    <div class="neurology-page-container">
        <!-- Hero Section -->
        <section class="hero-section-neurology">
            <img src="{{ asset('assets/images/neurology/neulogy-img/heroneurolgy.png') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-neurology">
                <h1>Neurology Billing That Maximizes Revenue</h1>
                <p>Accurate coding, faster claims, and full compliance for neurology practices.</p>
            </div>
        </section>

        <!-- Services Overview -->
        <div class="healthcare-services-wrapper">
            <div class="healthcare-services-container">
                <div class="healthcare-content-grid">
                    <div class="healthcare-image-section">
                        <div class="healthcare-image-container">
                            <img src="{{ asset('assets/images/neurology/neulogy-img/neurolgy.jpg') }}" alt="Doctor consulting patient" class="healthcare-doctor-image">
                        </div>
                    </div>
                    <div class="healthcare-text-section">
                        <h2 class="healthcare-main-heading">Streamlined Patient Services for Efficient Healthcare</h2>
                        <p class="healthcare-description-text">
                            Our patient services simplify every step of your healthcare journey. Schedule appointments,
                            access medical records, and track billing securely all in one place. Our platform ensures
                            accurate, transparent billing and faster insurance claims. Stay informed with real-time
                            updates on your treatments and payments. Designed for convenience, efficiency, and peace of
                            mind, our services put patients first.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Provided Services Grid -->
        <div class="billing-services-wrapper">
            <div class="billing-services-container">
                <h2 class="billing-services-title">Neurology Billing Services We Provide</h2>
                <div class="billing-services-grid">
                    <div class="billing-card">
                        <div class="billing-icon"><img src="{{ asset('assets/images/neurology/neulogy-img/display-code 1.png') }}" alt="Coding" width="40" height="40"></div>
                        <h3 class="billing-card-title">Accurate Coding</h3>
                        <p class="billing-card-description">Our large number of certified coders specialize in neurology procedures, ensuring accurate coding that increases reimbursement rates and minimizes claim denials.</p>
                    </div>
                    <div class="billing-card">
                        <div class="billing-icon"><img src="{{ asset('assets/images/neurology/neulogy-img/Vector (3).png') }}" alt="Submission" width="40" height="40"></div>
                        <h3 class="billing-card-title">Claim Submission and Follow-up</h3>
                        <p class="billing-card-description">Our RPA-driven workflows support high clean-claim accuracy and proactive follow-ups that help reduce accounts receivable days and speed up reimbursements.</p>
                    </div>
                    <div class="billing-card">
                        <div class="billing-icon"><img src="{{ asset('assets/images/neurology/neulogy-img/Vector (4).png') }}" alt="RCM" width="40" height="40"></div>
                        <h3 class="billing-card-title">Revenue Cycle Management</h3>
                        <p class="billing-card-description">Our end-to-end revenue cycle management services optimize your practice’s financial performance, from patient registration to final payment.</p>
                    </div>
                    <div class="billing-card">
                        <div class="billing-icon"><img src="{{ asset('assets/images/neurology/neulogy-img/Vector (5).png') }}" alt="Denial" width="40" height="40"></div>
                        <h3 class="billing-card-title">Denial Management</h3>
                        <p class="billing-card-description">Our team proactively addresses claim denials, identifying and resolving issues swiftly to minimize revenue loss, creating a streamlined and efficient healthcare billing process.</p>
                    </div>
                    <div class="billing-card">
                        <div class="billing-icon"><img src="{{ asset('assets/images/neurology/neulogy-img/Vector (6).png') }}" alt="Compliance" width="40" height="40"></div>
                        <h3 class="billing-card-title">Compliance Assurance</h3>
                        <p class="billing-card-description">Stay compliant with ever-changing regulations. Our team conducts regular audits to ensure your practice adheres to the latest neurology billing and coding guidelines.</p>
                    </div>
                    <div class="billing-card">
                        <div class="billing-icon"><img src="{{ asset('assets/images/neurology/neulogy-img/Vector (7).png') }}" alt="AR" width="40" height="40"></div>
                        <h3 class="billing-card-title">Complimentary AR Recovery</h3>
                        <p class="billing-card-description">Enjoy faster financial recovery with our complimentary AR service, managing and resolving outstanding accounts in just 24 days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features/Simplifying Section -->
        <div class="simplify-billing-wrapper">
            <div class="simplify-billing-grid">
                <div class="simplify-text-section">
                    <h2 class="simplify-main-heading">Simplifying Complex Neurology Billing</h2>
                    <p class="simplify-description-text">
                        Neurology billing can be complex, with challenges like claim denials, coding errors, and eligibility issues impacting revenue. Our team streamlines the process, handling LCD verification, NCCI tools, claim scrubbing, and up-to-date coding practices. We help practices overcome these hurdles efficiently, ensuring smooth and timely reimbursements. Here's an overview of our expertise:
                    </p>
                    <ul class="simplify-features-list">
                        <li>LCD Verification Accuracy</li>
                        <li>NCCI Tool Mastery</li>
                        <li>Efficient Eligibility Verification</li>
                        <li>Thorough Progress Notes Reconciliation</li>
                        <li>Precision in Claim Scrubbing</li>
                        <li>Up-to-date Coding Practices</li>
                    </ul>
                </div>
                <div class="simplify-image-section">
                    <img src="{{ asset('assets/images/neurology/neulogy-img/simplifyingimg.jpg') }}" alt="Neurology Billing Professional" class="simplify-billing-image">
                </div>
            </div>
        </div>

        <!-- Impact Numbers -->
    <!-- Our Success in Numbers -->
<section class="success-metrics-section">
    <div class="container">
        <h2 class="success-metrics-title text-center">Our Success in <span class="text-primary-gradient">Numbers</span></h2>
        <div class="success-metrics-grid">
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="500">0</span>M+</div>
                <div class="success-metric-label">Value of claims processed</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="24">0</span></div>
                <div class="success-metric-label">Accounts Receivable Days</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="48">0</span> Hours</div>
                <div class="success-metric-label">Turn Around Time (TAT)</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="99">0</span>%</div>
                <div class="success-metric-label">Customer Retention</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="2.7">0</span>M</div>
                <div class="success-metric-label">Number of Claims Processed</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="98">0</span>%</div>
                <div class="success-metric-label">First Pass Clean Claims Rate</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value">5%–<span class="counter" data-target="10">0</span>%</div>
                <div class="success-metric-label">Revenue Improvement</div>
            </div>
            <div class="success-metric">
                <div class="success-metric-value"><span class="counter" data-target="30">0</span>%</div>
                <div class="success-metric-label">Reduction in A/R</div>
            </div>
        </div>
    </div>
</section>
        <!-- EHR Section -->
        <section class="ehr-section">
            <h2 class="ehr-title">We work with these EHRs</h2>
            <p class="ehr-subtitle">Our medical billing specialists know the workarounds of all the EHRs. We help you submit clean claims no matter which EHR you use.</p>
            <div class="ehr-grid">
                <div class="ehr-card"><img src="{{ asset('assets/images/neurology/neulogy-img/advanceMd.jpg') }}" alt="AdvancedMD" class="ehr-logo-img"></div>
                <div class="ehr-card"><img src="{{ asset('assets/images/neurology/neulogy-img/careCloud.jpg') }}" alt="CareCloud" class="ehr-logo-img"></div>
                <div class="ehr-card"><img src="{{ asset('assets/images/neurology/neulogy-img/nextgen.jpg') }}" alt="NextGen" class="ehr-logo-img"></div>
                <div class="ehr-card"><img src="{{ asset('assets/images/neurology/neulogy-img/practice-fusion.jpg') }}" alt="Practice Fusion" class="ehr-logo-img"></div>
                <div class="ehr-card"><img src="{{ asset('assets/images/neurology/neulogy-img/progonCIS-1.jpg') }}" alt="ProgonCIS" class="ehr-logo-img"></div>
                <div class="ehr-card"><img src="{{ asset('assets/images/neurology/neulogy-img/ACharrislogo-ohxzf0388pokf3vw05kiv3vp7kphzla0j3aup75618@2x.jpg') }}" alt="Harris CareTracker" class="ehr-logo-img"></div>
            </div>
        </section>

        <!-- Testimonial section placeholders (integrated as standard layout) -->
        <section class="faq-section testimonial-section" style="padding: 80px 97px; background-color: #fbfbfb; text-align: center;">
            <h2 style="font-size: 36px; font-weight: 700; color: #1a1a2e; margin-bottom: 50px; border: none;">Driving Growth for Healthcare Organizations</h2>
            <div class="ehr-grid testimonial-grid" style="grid-template-columns: repeat(3, 1fr); gap: 30px; max-width: 1200px; margin: 0 auto;">
                <div style="background: #fff; border: 2px solid #e0e0e0; border-radius: 15px; padding: 30px; text-align: left;">
                    <img src="{{ asset('assets/images/neurology/neulogy-img/Simplification (1).png') }}" alt="Quote" style="width: 32px; margin-bottom: 15px;">
                    <p style="font-size: 14px; line-height: 1.7; color: #555; margin-bottom: 20px;">Working with Practice Fusion and ProgonCIS has been a game-changer for our practice. The workflow became smoother, documentation faster, and patient management significantly improved. Highly recommended for growing healthcare practices.</p>
                    <div style="display: flex; align-items: center; gap: 15px; border-top: 1px solid #e0e0e0; padding-top: 20px;">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" alt="Michael" style="width: 50px; height: 50px; border-radius: 50%;">
                        <div><div style="font-weight: 600; color: #1a1a2e;">Michael Anderson</div><div style="font-size: 13px; color: #666;">Practice Manager</div></div>
                    </div>
                </div>
                <div style="background: #fff; border: 2px solid #e0e0e0; border-radius: 15px; padding: 30px; text-align: left;">
                    <img src="{{ asset('assets/images/neurology/neulogy-img/Simplification (1).png') }}" alt="Quote" style="width: 32px; margin-bottom: 15px;">
                    <p style="font-size: 14px; line-height: 1.7; color: #555; margin-bottom: 20px;">Harris CareTracker took our healthcare operations to the next level. The accurate reporting, reliable performance, and user-friendly interface made our providers' work much easier. A truly trusted healthcare solution.</p>
                    <div style="display: flex; align-items: center; gap: 15px; border-top: 1px solid #e0e0e0; padding-top: 20px;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" alt="David" style="width: 50px; height: 50px; border-radius: 50%;">
                        <div><div style="font-weight: 600; color: #1a1a2e;">David Martinez</div><div style="font-size: 13px; color: #666;">Office Manager</div></div>
                    </div>
                </div>
                <div style="background: #fff; border: 2px solid #e0e0e0; border-radius: 15px; padding: 30px; text-align: left;">
                    <img src="{{ asset('assets/images/neurology/neulogy-img/Simplification (1).png') }}" alt="Quote" style="width: 32px; margin-bottom: 15px;">
                    <p style="font-size: 14px; line-height: 1.7; color: #555; margin-bottom: 20px;">Driving growth for healthcare organizations is not just a claim but a reality. These platforms improved efficiency, patient satisfaction, and overall productivity. The trust from nationwide providers is completely justified.</p>
                    <div style="display: flex; align-items: center; gap: 15px; border-top: 1px solid #e0e0e0; padding-top: 20px;">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" alt="Robert" style="width: 50px; height: 50px; border-radius: 50%;">
                        <div><div style="font-weight: 600; color: #1a1a2e;">Robert Thompson</div><div style="font-size: 13px; color: #666;">Practice Manager</div></div>
                    </div>
                </div>
            </div>
        </section>

       @include('partials.cta-section', [
    'title' => 'Find Your Specialty Solution',
    'description' => 'Customized billing services for your medical specialty.',
    'buttonText' => 'Explore Solutions',
    'buttonLink' => url('contact-us.php')
])

    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    
    const animateCounter = (counter) => {
        const target = parseFloat(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const stepTime = 20;
        const totalSteps = duration / stepTime;
        const increment = target / totalSteps;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = target % 1 === 0 ? target : target.toFixed(1);
                clearInterval(timer);
            } else {
                counter.textContent = current % 1 === 0 ? Math.floor(current) : current.toFixed(1);
            }
        }, stepTime);
    };

    const observerOption = {
        threshold: 0.5
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOption);

    counters.forEach(counter => observer.observe(counter));
});
</script>
@endsection
