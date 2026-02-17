@extends('layouts.app')

@section('content')
<style>
    .pediatric-page-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .pediatric-page-wrapper * {
        box-sizing: border-box;
    }

    .pediatric-page-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .hero-section-pediatric {
        width: 100%;
        max-width: 100%;
        min-height: 400px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/pediatric/pediatricimg/pediatric.jpg') }}');
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
        .hero-section-pediatric {
            min-height: auto;
            padding: 0 0 30px 0;
            background-position: right center;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }

        .hero-section-pediatric::before {
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

    .hero-section-pediatric::before {
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

    .hero-content-pediatric {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-pediatric h1 {
        font-size: 42px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-pediatric p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-pediatric {
            padding-left: 20px;
            padding-right: 20px;
        }
        .hero-section-pediatric h1 {
            font-size: 28px;
        }
    }

    .healthcare-services-wrapper {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px 20px;
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
        padding: 40px;
    }

    .healthcare-doctor-image {
        width: 100%;
        max-width: 578px;
        height: auto;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .healthcare-text-section {
        padding: 60px 50px;
    }

    .healthcare-main-heading {
        font-size: 34px;
        font-weight: 700;
        color: #002147;
        line-height: 1.2;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .healthcare-description-text {
        font-size: 16px;
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

    .pediatric-benefits-section {
        padding: 60px 97px;
        background-color: #ffffff;
        margin-bottom: 40px;
    }

    .pediatric-header-wrapper {
        text-align: center;
        margin-bottom: 50px;
    }

    .pediatric-main-heading-sec {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0a2540;
        margin-bottom: 12px;
        border: none;
    }

    .pediatric-subtitle-text {
        font-size: 1.5rem;
        color: #000000;
    }

    .pediatric-benefits-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .pediatric-benefit-card {
        background: #F9F9F9;
        border: 1px solid #002147;
        border-radius: 12px;
        padding: 32px 24px;
        transition: all 0.3s ease;
        text-align: left;
    }

    .pediatric-benefit-card:hover {
        box-shadow: 0 8px 24px rgba(0, 102, 255, 0.12);
        transform: translateY(-4px);
    }

    .pediatric-icon-wrapper {
        width: 56px;
        height: 56px;
        margin-bottom: 20px;
    }

    .pediatric-benefit-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .pediatric-benefit-title {
        font-size: 2rem;
        font-weight: 600;
        color: #0a2540;
        margin-bottom: 12px;
    }

    .pediatric-benefit-description {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.6;
    }

    @media (max-width: 1024px) {
        .pediatric-benefits-section {
            padding: 50px 40px;
        }

        .pediatric-benefits-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .pediatric-main-heading-sec {
            font-size: 2rem;
        }

        .pediatric-subtitle-text {
            font-size: 1.3rem;
        }

        .pediatric-benefit-title {
            font-size: 1.7rem;
        }

        .pediatric-benefit-description {
            font-size: 1.3rem;
        }
    }

    @media (max-width: 768px) {
        .pediatric-benefits-section {
            padding: 40px 20px;
        }

        .pediatric-header-wrapper {
            margin-bottom: 35px;
        }

        .pediatric-main-heading-sec {
            font-size: 1.7rem;
            margin-bottom: 10px;
        }

        .pediatric-subtitle-text {
            font-size: 1.1rem;
        }

        .pediatric-benefits-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .pediatric-benefit-card {
            width: 100%;
            max-width: 100%;
            padding: 28px 20px;
        }

        .pediatric-icon-wrapper {
            width: 48px;
            height: 48px;
            margin-bottom: 16px;
        }

        .pediatric-benefit-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .pediatric-benefit-description {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 480px) {
        .pediatric-benefits-section {
            padding: 35px 15px;
        }

        .pediatric-main-heading-sec {
            font-size: 1.5rem;
        }

        .pediatric-subtitle-text {
            font-size: 1rem;
        }

        .pediatric-benefit-card {
            padding: 24px 18px;
        }

        .pediatric-benefit-title {
            font-size: 1.3rem;
        }

        .pediatric-benefit-description {
            font-size: 1.1rem;
        }
    }

    .process-workflow-section {
        background: #002147;
        padding: 40px 20px;
    }

    .process-workflow-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .process-workflow-main-title {
        font-size: 2.75rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 16px;
        border: none;
    }

    .process-workflow-subtitle {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.85);
    }

    .process-workflow-steps-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        max-width: 1400px;
        margin: 0 auto;
    }

    .process-workflow-step-card {
        background: #F9F9F9;
        border-radius: 16px;
        padding: 40px 28px;
        position: relative;
        text-align: center;
    }

    .process-workflow-step-number {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 48px;
        height: 48px;
        background-color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 700;
        color: #002147;
        border: 4px solid #002147;
        z-index: 10;
    }

    .process-workflow-icon-box {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #002d5b 0%, #003d75 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 24px auto 24px;
    }

    .process-workflow-step-icon {
        width: 56px;
        height: 56px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .process-workflow-step-title {
        font-size: 2rem;
        font-weight: 600;
        color: #002d5b;
        margin-bottom: 12px;
    }

    .process-workflow-step-description {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.6;
    }

    @media (max-width: 1200px) {
        .process-workflow-steps-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 50px 24px;
        }
    }

    @media (max-width: 768px) {
        .process-workflow-steps-grid {
            grid-template-columns: 1fr;
        }
    }

    .billing-solutions {
        padding: 40px 20px;
        text-align: center;
    }

    .billing-solutions h2 {
        font-size: 32px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 8px;
        border: none;
    }

    .specialties-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px 30px;
        max-width: 1150px;
        margin: 40px auto;
    }

    .specialty-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 20px 12px;
        transition: all 0.3s ease;
        position: relative;
        min-height: 140px;
    }

    .specialty-icon {
        width: 42px;
        height: 42px;
        margin-bottom: 10px;
        object-fit: contain;
    }

    .specialty-item span {
        font-size: 14px;
        font-weight: 500;
        color: #002147;
    }

    @media (max-width: 1024px) {
        .specialties-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .specialties-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .specialties-grid {
            grid-template-columns: 1fr;
        }
    }

    .faq-section {
        padding: 40px 20px;
        background-color: #fbfbfb;
        text-align: center;
    }

    .faq-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        border: none;
    }

    .faq-container {
        max-width: 900px;
        margin: 30px auto 0;
        text-align: left;
    }

    .faq-item {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 12px;
        overflow: hidden;
    }

    .faq-item input[type="checkbox"] {
        display: none;
    }

    .faq-question {
        font-size: 1.5rem;
        padding: 20px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 500;
        position: relative;
    }
    
    .faq-question i {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }
    
    .faq-item input[type="checkbox"]:checked + .faq-question i::before {
        content: "\f068"; /* Font Awesome minus icon */
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        padding: 0 30px;
        background: #fafafa;
    }
    
    .faq-answer p {
        font-size: 1.5rem;
        line-height: 1.6;
        color: #000000;
    }

    .faq-item input[type="checkbox"]:checked ~ .faq-answer {
        max-height: 300px;
        padding: 20px 30px;
    }

    .cta-container-pediatric {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        min-height: 280px;
        margin: 20px auto 20px;
        max-width: 1200px;
    }

    .cta-container-pediatric::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/pediatric/pediatricimg/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content-pediatric {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content-pediatric h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 12px;
        border: none;
    }

    .cta-content-pediatric p {
        font-size: 20px;
        color: #FFFFFF;
        opacity: 0.9;
        margin-bottom: 25px;
    }

    .cta-request-btn-pediatric {
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
</style>

<div class="pediatric-page-wrapper">
    <div class="pediatric-page-container">
        <!-- Hero Section -->
        <section class="hero-section-pediatric">
            <img src="{{ asset('assets/images/pediatric/pediatricimg/pediatric.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-pediatric">
                <h1>Streamline Pediatric Billing, Focus on Your Patients</h1>
                <p>Our team handles claims and reimbursements so you can care.</p>
            </div>
        </section>

        <!-- Overview Section -->
        <div class="healthcare-services-wrapper">
            <div class="healthcare-services-container">
                <div class="healthcare-content-grid">
                    <div class="healthcare-image-container">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/pediatric-hero.jpg') }}" alt="Doctor consulting patient" class="healthcare-doctor-image">
                    </div>
                    <div class="healthcare-text-section">
                        <h2 class="healthcare-main-heading">Pediatric Medical Billing Overview</h2>
                        <p class="healthcare-description-text">
                            Pediatric medical billing manages payments for healthcare services provided to children. This includes doctor visits, vaccinations, tests, and treatments. Bills are sent to insurance providers or parents, using specialized pediatric codes to ensure accuracy and compliance with insurance rules. The process also involves verifying coverage and following up on unpaid claims, helping healthcare providers get paid efficiently while making it easier for families to manage their child’s medical expenses.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <section class="pediatric-benefits-section">
            <div class="pediatric-header-wrapper">
                <h2 class="pediatric-main-heading-sec">Why Pediatric Practices Choose Us</h2>
                <p class="pediatric-subtitle-text">Transform your billing operations with proven results</p>
            </div>
            <div class="pediatric-benefits-grid">
                <div class="pediatric-benefit-card">
                    <div class="pediatric-icon-wrapper">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/Vector (12).png') }}" alt="Reduce Denials" class="pediatric-benefit-image">
                    </div>
                    <h3 class="pediatric-benefit-title">Reduce Denials</h3>
                    <p class="pediatric-benefit-description">Advanced claim screening reduces denial rates by up to 80%</p>
                </div>
                <div class="pediatric-benefit-card">
                    <div class="pediatric-icon-wrapper">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/Vector (13).png') }}" alt="Faster Payments" class="pediatric-benefit-image">
                    </div>
                    <h3 class="pediatric-benefit-title">Faster Payments</h3>
                    <p class="pediatric-benefit-description">Get reimbursed 2x faster with optimized claim submissions</p>
                </div>
                <div class="pediatric-benefit-card">
                    <div class="pediatric-icon-wrapper">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/01 align center.png') }}" alt="HIPAA Compliant" class="pediatric-benefit-image">
                    </div>
                    <h3 class="pediatric-benefit-title">HIPAA Compliant</h3>
                    <p class="pediatric-benefit-description">Bank-level security ensuring complete data protection</p>
                </div>
                <div class="pediatric-benefit-card">
                    <div class="pediatric-icon-wrapper">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/Vector (15).png') }}" alt="Save Staff Time" class="pediatric-benefit-image">
                    </div>
                    <h3 class="pediatric-benefit-title">Save Staff Time</h3>
                    <p class="pediatric-benefit-description">Free up your team to focus on patient care, not paperwork</p>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process-workflow-section">
            <div class="process-workflow-header">
                <h2 class="process-workflow-main-title">How it Works</h2>
                <p class="process-workflow-subtitle">Our streamlined 4-step process ensures maximum efficiency</p>
            </div>
            <div class="process-workflow-steps-grid">
                <div class="process-workflow-step-card">
                    <div class="process-workflow-step-number">1</div>
                    <div class="process-workflow-icon-box">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/Vector (16).png') }}" alt="Data Collection" class="process-workflow-step-icon">
                    </div>
                    <h3 class="process-workflow-step-title">Data Collection</h3>
                    <p class="process-workflow-step-description">Seamlessly integrate with your EHR system to capture accurate patient information</p>
                </div>
                <div class="process-workflow-step-card">
                    <div class="process-workflow-step-number">2</div>
                    <div class="process-workflow-icon-box">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/Vector (17).png') }}" alt="Coding" class="process-workflow-step-icon">
                    </div>
                    <h3 class="process-workflow-step-title">Coding Verification</h3>
                    <p class="process-workflow-step-description">Expert pediatric coders ensure accuracy and compliance with latest standards</p>
                </div>
                <div class="process-workflow-step-card">
                    <div class="process-workflow-step-number">3</div>
                    <div class="process-workflow-icon-box">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/Vector (18).png') }}" alt="Submission" class="process-workflow-step-icon">
                    </div>
                    <h3 class="process-workflow-step-title">Submission</h3>
                    <p class="process-workflow-step-description">Fast claim submission with proactive denial management and appeals</p>
                </div>
                <div class="process-workflow-step-card">
                    <div class="process-workflow-step-number">4</div>
                    <div class="process-workflow-icon-box">
                        <img src="{{ asset('assets/images/pediatric/pediatricimg/stats 1.png') }}" alt="Insights" class="process-workflow-step-icon">
                    </div>
                    <h3 class="process-workflow-step-title">Reporting & Insights</h3>
                    <p class="process-workflow-step-description">Real-time dashboards showing revenue cycle performance and opportunities</p>
                </div>
            </div>
        </section>

        <!-- Specialties Section -->
        <section class="billing-solutions">
            <h2>Billing Solutions for Every Specialty</h2>
            <p class="subtitle">We offer smart billing services to maximize practice revenue and minimize denials.</p>
            <div class="specialties-grid">
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon1.png') }}" alt="Icon" class="specialty-icon"><span>Child Checkups</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon2.png') }}" alt="Icon" class="specialty-icon"><span>Vaccines</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon3.png') }}" alt="Icon" class="specialty-icon"><span>Circumcision</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon4.png') }}" alt="Icon" class="specialty-icon"><span>Ear Tube Insertion</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon5.png') }}" alt="Icon" class="specialty-icon"><span>Laceration Repair</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon6.png') }}" alt="Icon" class="specialty-icon"><span>Fracture Management</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon7.png') }}" alt="Icon" class="specialty-icon"><span>Asthma Management</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon8.png') }}" alt="Icon" class="specialty-icon"><span>Frenotomy</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon9.png') }}" alt="Icon" class="specialty-icon"><span>Newborn Tests</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon10.png') }}" alt="Icon" class="specialty-icon"><span>Bronchoscopy</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon11.png') }}" alt="Icon" class="specialty-icon"><span>Cardiac Procedures</span></div>
                <div class="specialty-item"><img src="{{ asset('assets/images/pediatric/pediatricimg/pediatricicon12.png') }}" alt="Icon" class="specialty-icon"><span>Spinal Tap</span></div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>FAQs</h2>
            <p class="subtitle">We care about your questions</p>
            <div class="faq-container">
                <div class="faq-item">
                    <input type="checkbox" id="faq1">
                    <label for="faq1" class="faq-question"><span>What experience do you have with pediatric billing coding?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer"><p>I have experience with pediatric billing and coding, including ICD-10 and CPT codes for well-child visits, immunizations, and age-specific services, ensuring accurate and compliant claims.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq2">
                    <label for="faq2" class="faq-question"><span>Can you bill for additional services provided during routine pediatric visits?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer"><p>Yes, additional medically necessary services provided during routine pediatric visits can be billed separately using appropriate CPT codes and modifiers, following payer guidelines.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq3">
                    <label for="faq3" class="faq-question"><span>How do we handle billing disputes from patients?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer"><p>Billing disputes are handled by reviewing the claim details, verifying documentation and insurance information, explaining charges clearly to the patient, and correcting or resubmitting claims if needed.</p></div>
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
    // Auto-close other FAQs when one opens
    document.addEventListener('DOMContentLoaded', function() {
        const faqCheckboxes = document.querySelectorAll('.faq-item input[type="checkbox"]');
        
        faqCheckboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    faqCheckboxes.forEach(function(otherCheckbox) {
                        if (otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    });
</script>

@endsection
