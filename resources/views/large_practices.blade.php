@extends('layouts.app')

@section('content')
<style>
    .large-practices-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .large-practices-wrapper * {
        box-sizing: border-box;
    }

    .large-practices-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    /* Add proper spacing between sections */
    .large-practices-wrapper section {
        margin-bottom: 40px;
    }

    .large-practices-wrapper section:last-child {
        margin-bottom: 30px;
    }

    @media (max-width: 768px) {
        .large-practices-wrapper section {
            margin-bottom: 30px;
        }
        
        .large-practices-wrapper section:last-child {
            margin-bottom: 20px;
        }
    }

    .hero-section-large {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/large/large-practices-img/large.jpg') }}');
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
        .hero-section-large {
            min-height: 380px;
            padding: 50px 20px;
            margin-bottom: 80px;
        }
    }

    @media (max-width: 768px) {
        /* Hero Mobile Updates */
        .hero-section-large {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
            margin-bottom: 40px;
        }

        .hero-section-large::before {
            display: none;
        }

        .hero-content-large {
            padding-left: 20px;
            padding-right: 20px;
            text-align: center;
            width: 100%;
            max-width: 100%;
        }

        .hero-section-large h1 {
            font-size: 28px;
            text-align: center;
            max-width: 100%;
        }

        .hero-section-large p {
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

    .hero-section-large::before {
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

    .hero-content-large {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-large h1 {
        width: 100%;
        font-size: 34px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-large p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-large {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 100%;
        }
        .hero-section-large h1 {
            font-size: 28px;
        }
    }

    .healthcare-services-wrapper-large {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 97px;
        background-color: #ffffff;
    }

    .healthcare-services-container-large {
        max-width: 1200px;
        width: 100%;
    }

    .healthcare-content-grid-large {
        display: grid;
        grid-template-columns: 45% 55%;
        gap: 50px;
        align-items: flex-start;
    }

    .healthcare-image-section-large {
        position: relative;
    }

    .healthcare-doctor-image-large {
        width: 100%;
        /* max-width: 420px; */
        height: auto;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .healthcare-text-section-large {
        padding: 20px 0;
    }

    .healthcare-main-heading-large {
        width: 100%;
        font-size: 2.2rem;
        font-weight: 700;
        color: #002147;
        line-height: 1.3;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .healthcare-description-text-large {
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.8;
        text-align: left;
        color: #000000;
    }

    @media (max-width: 968px) {
        .healthcare-content-grid-large {
            grid-template-columns: 1fr;
        }
        
        .healthcare-services-wrapper-large {
            padding: 60px 50px;
        }
        
        .healthcare-image-section-large {
            width: 100%;
        }
        
        .healthcare-doctor-image-large {
            max-width: 100%;
            width: 100%;
            height: auto;
            min-height: 300px;
            object-fit: cover;
        }
        
        .healthcare-text-section-large {
            padding: 20px 0;
        }
    }

    @media (max-width: 768px) {
        .healthcare-services-wrapper-large {
            padding: 60px 30px;
        }
    }

    @media (max-width: 480px) {
        .healthcare-services-wrapper-large {
            padding: 60px 20px;
        }
    }

    .billing-services-container-large {
        width: 100%;
        padding: 5px 97px;
        background-color: #ffffff;
    }

    .billing-header-section-large {
        text-align: center;
        margin-bottom: 50px;
    }

    .billing-main-title-large {
        font-size: 2.5rem;
        font-weight: 700;
        color: #002147;
        margin-bottom: 15px;
        line-height: 1.3;
        border: none;
        text-align: center;
    }

    .billing-subtitle-text-large {
        font-size: 1.5rem;
        font-weight: 400;
        color: #000000;
        line-height: 1.6;
    }

    .services-grid-wrapper-large {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 97px;
    }

    .service-card-item-large {
        background: linear-gradient(135deg, #001f3f 0%, #003366 100%);
        border-radius: 20px;
        padding: 50px 35px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        min-height: 320px;
    }

    .service-card-item-large:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 31, 63, 0.3);
    }

    .service-icon-holder-large {
        width: 80px;
        height: 80px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .service-icon-holder-large img {
        width: 50px;
        height: 50px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .service-title-text-large {
        color: white;
        font-size: 2rem;
        font-weight: 600;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .service-description-text-large {
        color: rgba(255, 255, 255, 0.85);
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.7;
    }

    @media (max-width: 1024px) {
        .services-grid-wrapper-large {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .services-grid-wrapper-large {
            grid-template-columns: 1fr;
            padding: 0 30px;
        }
        
        .billing-services-container-large {
            padding: 5px 30px;
        }
    }

    @media (max-width: 480px) {
        .services-grid-wrapper-large {
            padding: 0 20px;
        }
        
        .billing-services-container-large {
            padding: 5px 20px;
        }
    }

    .streamlined-wrapper-large {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 97px;
    }

    .streamlined-header-large {
        text-align: center;
        margin-bottom: 60px;
    }

    .streamlined-header-large h2 {
        font-size: 2.75rem;
        color: #002147;
        margin-bottom: 12px;
        font-weight: 700;
        border: none;
    }

    .streamlined-header-large p {
        font-size: 1.5rem;
        color: #000000;
        max-width: 680px;
        margin: 0 auto;
    }

    .streamlined-grid-large {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    @media (max-width: 968px) {
        .streamlined-grid-large {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .streamlined-grid-large {
            grid-template-columns: 1fr;
        }
    }

    .streamlined-card-large {
        background: #ffffff;
        border-radius: 16px;
        padding: 36px 28px;
        box-shadow: 0 4px 20px rgba(0, 33, 71, 0.15);
        border: 1px solid #002147;
        transition: all 0.35s ease;
    }

    .streamlined-card-large:hover {
        transform: translateY(-6px);
        background: #f8f9fa;
    }

    .streamlined-icon-large {
        width: 56px;
        height: 56px;
        margin-bottom: 20px;
    }

    .streamlined-icon-large img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .streamlined-card-large h3 {
        font-size: 2rem;
        color: #002147;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .streamlined-card-large p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.7;
    }

    @media (max-width: 768px) {
        .streamlined-wrapper-large {
            padding: 0 30px;
        }
    }

    @media (max-width: 480px) {
        .streamlined-wrapper-large {
            padding: 0 20px;
        }
    }

    /* Process Section */
    .process-section-large {
        background: white;
        border-radius: 20px;
        padding: 50px 97px;
        max-width: 1200px;
        margin: 40px auto;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .process-content-large {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .process-left-large h2 {
        font-size: 2.5rem;
        color: #002147;
        margin-bottom: 30px;
        font-weight: 700;
        border: none;
        text-align: left;
    }

    .process-list-large {
        list-style: none;
        padding: 0;
        counter-reset: process-counter;
    }

    .process-list-large li {
        padding: 16px 0 16px 50px;
        position: relative;
        font-size: 1.5rem;
        color: #000000;
        font-weight: 500;
        line-height: 1.6;
    }

    .process-list-large li::before {
        content: counter(process-counter);
        counter-increment: process-counter;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, #002147, #003366);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 15px;
        font-weight: bold;
    }

    .process-image-large {
        width: 100%;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    @media (max-width: 968px) {
        .process-content-large {
            grid-template-columns: 1fr;
        }
        .process-section-large {
            padding: 30px 50px;
        }
    }

    @media (max-width: 768px) {
        .process-section-large {
            padding: 30px 30px;
        }
    }

    @media (max-width: 480px) {
        .process-section-large {
            padding: 30px 20px;
        }
    }

    /* Impact Numbers */
    .impact-numbers-large {
        width: 100%;
        padding: 60px 97px;
        background-color: #002147;
    }

    .impact-grid-large {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .impact-card-large {
        text-align: center;
        color: white;
    }

    .impact-value-large {
        font-size: 48px;
        font-weight: 700;
        color: #4CAF50;
        margin-bottom: 10px;
    }

    .impact-label-large {
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .impact-grid-large {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .impact-numbers-large {
            padding: 60px 30px;
        }
    }

    @media (max-width: 480px) {
        .impact-numbers-large {
            padding: 60px 20px;
        }
    }

    /* CTA Section */
    .cta-container-large {
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

    .cta-container-large::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/large/large-practices-img/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content-large {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content-large h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 12px;
        line-height: 1.2;
        border: none;
    }

    .cta-content-large p {
        width: 100%;
        margin: 0 auto 25px;
        font-weight: 400;
        font-size: 20px;
        color: #FFFFFF;
        opacity: 0.9;
    }

    .cta-request-btn-large {
        background-color: white;
        color: #002147;
        border: none;
        padding: 14px 45px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .cta-request-btn-large:hover {
        background-color: #f8f8f8;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .cta-container-large {
            padding: 40px 20px;
            margin: 20px;
        }
        .cta-content-large h2 {
            font-size: 32px;
        }
        .cta-content-large p {
            font-size: 16px;
        }
    }

    /* Success Metrics Section */
    .success-metrics-section {
        width: 100%;
        padding: 60px 97px;
        background-color: #f8f9fa;
    }

    .success-metrics-section .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .success-metrics-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #002147;
        margin-bottom: 50px;
        text-align: center;
    }

    .text-primary-gradient {
        background: linear-gradient(135deg, #002147, #003366);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .success-metrics-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .success-metric {
        background: white;
        padding: 30px 20px;
        border-radius: 16px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .success-metric:hover {
        transform: translateY(-5px);
    }

    .success-metric-value {
        font-size: 2.5rem;
        font-weight: 700;
        color: #002147;
        margin-bottom: 10px;
    }

    .success-metric-label {
        font-size: 1rem;
        font-weight: 500;
        color: #666;
        line-height: 1.4;
    }

    @media (max-width: 968px) {
        .success-metrics-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .success-metrics-section {
            padding: 60px 50px;
        }
    }

    @media (max-width: 768px) {
        .success-metrics-section {
            padding: 60px 30px;
        }
        
        .success-metrics-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .success-metrics-section {
            padding: 60px 20px;
        }
        
        .success-metrics-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }
</style>

<div class="large-practices-wrapper">
    <div class="large-practices-container">
        <!-- Hero Section -->
        <section class="hero-section-large">
            <img src="{{ asset('assets/images/large/large-practices-img/large.jpg') }}" alt="Large Practices" class="mobile-hero-img" style="display: none;">
            <div class="hero-content-large">
                <h1>Streamline Billing for Large Medical Practices</h1>
                <p>Handle high claim volumes, complex workflows, and compliance effortlessly with our expert billing solutions.</p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="healthcare-services-wrapper-large">
            <div class="healthcare-services-container-large">
                <div class="healthcare-content-grid-large">
                    <div class="healthcare-image-section-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/hero large-practices.jpg') }}" alt="Doctor consulting" class="healthcare-doctor-image-large">
                    </div>
                    <div class="healthcare-text-section-large">
                        <h2 class="healthcare-main-heading-large">Medical Billing Services for Large Practices</h2>
                        <p class="healthcare-description-text-large">
                            Medical Billing for Large Practices is a comprehensive service designed to manage high-volume, multi-provider clinics with accuracy and efficiency. From advanced ICD-10 coding to complex claim follow-ups, we ensure large practices receive timely reimbursements and maintain financial stability. Our billing solutions act as a full-scale revenue cycle partner, handling everything from charge capture to payment posting. We streamline workflows, reduce administrative burden, and provide transparent reporting allowing large medical organizations to focus on delivering quality care while optimizing revenue.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Billing Grid -->
        <section class="billing-services-container-large">
            <div class="services-grid-wrapper-large">
                <div class="service-card-item-large">
                    <div class="service-icon-holder-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (34).png') }}" alt="Fast Submission">
                    </div>
                    <h3 class="service-title-text-large">Super-Fast Claim Submission</h3>
                    <p class="service-description-text-large">We streamline the claim submission process to help you maximize reimbursement rates. Our certified medical billing team also works to prevent revenue leakages.</p>
                </div>

                <div class="service-card-item-large">
                    <div class="service-icon-holder-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/payment-gateway 1.png') }}" alt="Payment Posting">
                    </div>
                    <h3 class="service-title-text-large">Advanced Payment Posting</h3>
                    <p class="service-description-text-large">Enhance your payment posting process with our expertise and enjoy a seamless billing workflow. We empower medical group practices to make smarter financial decisions.</p>
                </div>

                <div class="service-card-item-large">
                    <div class="service-icon-holder-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (35).png') }}" alt="Clean Claims">
                    </div>
                    <h3 class="service-title-text-large">Clean Claim Submissions</h3>
                    <p class="service-description-text-large">As a trusted medical billing partner, we ensure group practices strengthen their bottom line, reduce claim denials, and achieve sustainable financial growth.</p>
                </div>
            </div>
        </section>

        <!-- Detailed Services -->
        <section class="streamlined-wrapper-large">
            <div class="streamlined-header-large">
                <h2>Streamlined Billing Services for Large Practices</h2>
                <p>Optimize your billing, minimize claim denials, and focus on patient care let us handle the rest.</p>
            </div>
            <div class="streamlined-grid-large">
                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (36).png') }}" alt="Verification">
                    </div>
                    <h3>Insurance Verification & Eligibility</h3>
                    <p>Our team confirms patients' active insurance coverage for diagnoses, procedures, and treatments to prevent claim delays.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (37).png') }}" alt="Registration">
                    </div>
                    <h3>Patient Registration</h3>
                    <p>Collect and verify patient information accurately to support error-free billing documentation.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (38).png') }}" alt="Claims">
                    </div>
                    <h3>Claims Submission</h3>
                    <p>With a 95% clean claim rate, we submit precise claims to maximize first-time approvals and faster collections.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (39).png') }}" alt="Coding">
                    </div>
                    <h3>Coding & Documentation</h3>
                    <p>Our expert coders and billers ensure accurate diagnostic and procedural coding, minimizing errors and denials.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (40).png') }}" alt="Denial">
                    </div>
                    <h3>Denial Management</h3>
                    <p>Identify and resolve the root causes of claim denials to de-escalate, successful reimbursement recovery.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (41).png') }}" alt="Posting">
                    </div>
                    <h3>Payment Posting</h3>
                    <p>Post payments received from insurers or patients into the system for accurate records and easier patient notifications.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (42).png') }}" alt="AR">
                    </div>
                    <h3>Accounts Receivable Follow-up</h3>
                    <p>Track unpaid payments and manage overdue receivables to receive outstanding reimbursements efficiently.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/01 align center (1).png') }}" alt="Billing">
                    </div>
                    <h3>Patient Billing</h3>
                    <p>Generate accurate patient bills detailing the services provided, ensuring clarity and proper collections.</p>
                </div>

                <div class="streamlined-card-large">
                    <div class="streamlined-icon-large">
                        <img src="{{ asset('assets/images/large/large-practices-img/Vector (43).png') }}" alt="Education">
                    </div>
                    <h3>Patient Education & Outreach</h3>
                    <p>Engage patients proactively to explain financial obligations and encourage timely payments.</p>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process-section-large">
            <div class="process-content-large">
                <div class="process-left-large">
                    <h2>Our Efficient Process to Achieve Goals Faster</h2>
                    <ul class="process-list-large">
                        <li>24/7 Access to Technology and Infrastructure.</li>
                        <li>Regular Auditing and Quality Control.</li>
                        <li>Upfront Communication.</li>
                        <li>Expertise and Specialization.</li>
                        <li>Simplifying Complex Coding System (ICD-10, CPT, HCPCS).</li>
                    </ul>
                </div>
                <div class="process-right-large">
                    <img src="{{ asset('assets/images/large/large-practices-img/our-effciently.jpg') }}" alt="Process" class="process-image-large">
                </div>
            </div>
        </section>

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

        @include('partials.cta-section', [
    'title' => 'Ready to Streamline Your Billing?',
    'description' => 'We handle claims and coding so your team can focus on patients.',
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
