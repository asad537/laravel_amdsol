@extends('layouts.app')

@section('title', 'Patient Services - Simplified Medical Billing | AMD SOL')
@section('meta_description', 'Efficient and transparent patient billing services. We simplify medical bills, offer secure payment options, and provide dedicated support for healthcare providers and patients.')
@section('meta_keywords', 'Patient Services, Medical Billing, Healthcare Payments, Patient Support')

@section('content')
<style>
    /* Patient Services Specific Styles */
    .ps-wrapper * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .ps-container {
        width: 100%;
        margin: 0 auto;
        padding: 0;
    }

    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url('{{ asset("assets/images/patient-services/patient.jpg") }}');
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
        max-width: 678px;
        width: 100%;
        font-weight: 700;
        font-size: 44px;
        color: white;
        line-height: 1.2;
        margin-bottom: 16px;
        position: relative;
    }

    .hero-section p {
        max-width: 529px;
        width: 100%;
        font-weight: 400;
        font-size: 18px;
        color: white;
        line-height: 1.2;
    }

    /* Content sections */
    .healthcare-services-wrapper, .medical-services-wrapper {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .healthcare-services-container, .medical-services-container {
        max-width: 1200px;
        width: 100%;
        border-radius: 20px;
        overflow: hidden;
    }

    .healthcare-content-grid, .medical-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        align-items: center;
    }

    .healthcare-image-section, .medical-image-section {
        position: relative;
        height: 100%;
        min-height: 400px;
        overflow: hidden;
    }

    .medical-image-section { order: 2; }
    .medical-text-section { order: 1; }

    .healthcare-image-container, .medical-image-container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
    }

    .healthcare-doctor-image, .medical-doctor-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
    }
    
    .medical-doctor-image {
        width: 80%; /* Specific for medical section as per css */
    }

    .healthcare-text-section, .medical-text-section {
        padding: 60px 50px;
    }

    .healthcare-main-heading, .medical-main-heading {
        font-size: 34px;
        font-weight: 700;
        color: #002147;
        line-height: 1.2;
        margin-bottom: 25px;
    }

    .healthcare-description-text, .medical-description-text {
        font-size: 16px;
        font-weight: 400;
        line-height: 1.8;
        text-align: left;
        color: #000000;
    }

    /* Process Section */
    .patient-process-wrapper {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }

    .patient-process-container {
        max-width: 1200px;
        width: 80%;
    }

    .patient-process-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .patient-process-main-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 15px;
    }

    .patient-process-subtitle {
        font-size: 1.5rem;
        color: #000000;
        max-width: 700px;
        margin: 0 auto;
    }

    .patient-process-steps-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .patient-process-step-card {
        background: transparent;
        border-radius: 15px;
        padding: 15px 10px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .patient-process-step-card:hover {
        transform: translateY(-5px);
    }

    .patient-process-icon-box {
        width: 70px;
        height: 70px;
        background: #0c2340;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        padding: 15px;
    }

    .patient-process-icon-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .patient-process-step-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 10px;
        line-height: 1.3;
        text-align: center;
    }

    .patient-process-step-description {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.6;
        text-align: center;
    }

    /* Testimonials */
    .testimonials-section {
        width: 80%;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 36px;
        font-weight: 700;
        color: #0c2340;
        margin-bottom: 10px;
    }

    .section-header p {
        font-size: 15px;
        color: #666;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .testimonial-card {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        padding: 35px 30px;
        transition: all 0.3s ease;
        position: relative;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .quote-icon-top {
        width: 50px;
        margin-bottom: 15px;
    }
    
    .quote-icon-bottom {
        width: 50px;
        margin-bottom: 25px;
        margin-left: auto;
        text-align: right;
    }
    
    .quote-icon-top img, .quote-icon-bottom img {
        width: 50%;
        height: auto;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 25px;
        text-align: center;
        min-height: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .author-info {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-top: 20px;
        min-height: 70px;
    }

    .author-avatar {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        overflow: hidden;
        flex-shrink: 0;
    }

    .author-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .author-details {
        flex: 1;
        text-align: left;
    }

    .author-name {
        font-size: 16px;
        font-weight: 700;
        color: #0c2340;
    }

    /* CTA Section */
    .cta-pricing-section {
        width: 80%;
        margin: 36px auto;
        padding-bottom: 0px;
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
        margin: 40px;
    }

    .cta-container::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset("assets/images/patient-services/wave.png") }}');
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
        width: 100%;
        margin: 0 auto 25px;
        font-weight: 400;
        text-align: center;
        font-size: 20px;
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

    /* Responsive */
    @media (max-width: 1024px) {
        .hero-section h1 { font-size: 36px; }
        .hero-content { padding-left: 50px; }
        .patient-process-steps-grid { grid-template-columns: repeat(2, 1fr); gap: 25px; }
        .testimonials-grid { gap: 20px; }
    }

    @media (max-width: 968px) {
        .hero-section {
            background-position: center center;
        }
        
        .healthcare-content-grid, .medical-content-grid { grid-template-columns: 1fr; }
        .healthcare-text-section, .medical-text-section { order: 1; padding: 40px 35px; }
        .healthcare-image-section, .medical-image-section { order: 2; min-height: 350px; }
        
        .healthcare-image-container, .medical-image-container {
            padding: 20px;
        }
        
        .healthcare-doctor-image, .medical-doctor-image {
            width: 100%;
            max-width: 100%;
            min-height: 350px;
            object-fit: cover;
        }
    }

    @media (max-width: 768px) {
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

        .patient-process-steps-grid { gap: 20px; }
        .testimonials-grid { grid-template-columns: 1fr; }
        
        .cta-pricing-section {
            width: 90%;
            padding-bottom: 40px;
        }
        
        .cta-container { 
            padding: 40px 30px; 
            border-radius: 30px;
            margin: 20px;
            min-height: 240px;
        }
        
        .cta-content h2 { 
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .cta-content p {
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 20px;
        }
        
        .cta-request-btn {
            padding: 12px 35px;
            font-size: 15px;
        }
        
        .healthcare-image-section, .medical-image-section {
            min-height: 300px;
        }
        
        .healthcare-doctor-image, .medical-doctor-image {
            min-height: 300px;
        }
    }

    @media (max-width: 640px) {
        .hero-section {
            background-position: center center;
        }
        
        .patient-process-steps-grid { grid-template-columns: 1fr; }
        
        .cta-pricing-section {
            width: 95%;
        }
        
        .cta-container {
            padding: 30px 20px;
            margin: 20px 15px;
            border-radius: 20px;
            min-height: 220px;
        }
        
        .cta-content h2 {
            font-size: 24px;
        }
        
        .cta-content p {
            font-size: 14px;
            line-height: 22px;
        }
        
        .cta-request-btn {
            padding: 12px 30px;
            font-size: 14px;
        }
        
        .healthcare-doctor-image, .medical-doctor-image {
            min-height: 280px;
        }
    }
    
    @media (max-width: 480px) {
        .hero-section {
            background-position: center center;
        }
        
        .cta-pricing-section {
            width: 100%;
            padding-bottom: 20px;
        }
        
        .cta-container {
            padding: 25px 15px;
            margin: 15px 10px;
            min-height: 200px;
        }
        
        .cta-content h2 {
            font-size: 22px;
        }
        
        .cta-content p {
            font-size: 13px;
            line-height: 20px;
            margin-bottom: 15px;
        }
        
        .cta-request-btn {
            padding: 10px 25px;
            font-size: 13px;
        }
    }
</style>

<div class="ps-wrapper">
    <div class="ps-container">
        <!-- Hero Section -->
        <section class="hero-section">
            <img src="{{ asset('assets/images/patient-services/patient.jpg') }}" alt="Patient Services" class="mobile-hero-img" style="display: none;">
            <div class="hero-content">
                <h1>Simplifying Your Medical Bills, One Statement at a Time</h1>
                <p>Transparent, easy-to-understand billing solutions for every patient.</p>
            </div>
        </section>

        <!-- Streamlined Services Section -->
        <div class="healthcare-services-wrapper">
            <div class="healthcare-services-container">
                <div class="healthcare-content-grid">
                    <div class="healthcare-image-section">
                        <div class="healthcare-image-container">
                            <img src="{{ asset('assets/images/patient-services/heropatient.jpg') }}" alt="Doctor consulting patient" class="healthcare-doctor-image">
                        </div>
                    </div>
                    <div class="healthcare-text-section">
                        <h1 class="healthcare-main-heading">
                            Streamlined Patient Services for Efficient Healthcare
                        </h1>
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

        <!-- Process Section -->
        <div class="patient-process-wrapper">
            <div class="patient-process-container">
                <div class="patient-process-header">
                    <h2 class="patient-process-main-title">How Our Patient Services Work</h2>
                    <p class="patient-process-subtitle">Our simple 4-step process makes managing your medical bills effortless</p>
                </div>

                <div class="patient-process-steps-grid">
                    <!-- Step 1 -->
                    <div class="patient-process-step-card">
                        <div class="patient-process-icon-box">
                            <img src="{{ asset('assets/images/patient-services/bill.png') }}" alt="bill">
                        </div>
                        <h3 class="patient-process-step-title">Receive Your Bill</h3>
                        <p class="patient-process-step-description">Get notified when your bill is ready to view online</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="patient-process-step-card">
                        <div class="patient-process-icon-box">
                            <img src="{{ asset('assets/images/patient-services/tescoscope.png') }}" alt="review">
                        </div>
                        <h3 class="patient-process-step-title">Review Charges</h3>
                        <p class="patient-process-step-description">Easily understand all charges and insurance coverage</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="patient-process-step-card">
                        <div class="patient-process-icon-box">
                            <img src="{{ asset('assets/images/patient-services/card.png') }}" alt="payment">
                        </div>
                        <h3 class="patient-process-step-title">Pay Online or In Installments</h3>
                        <p class="patient-process-step-description">Choose flexible payment options that work for you</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="patient-process-step-card">
                        <div class="patient-process-icon-box">
                            <img src="{{ asset('assets/images/patient-services/headphone.png') }}" alt="support">
                        </div>
                        <h3 class="patient-process-step-title">Get Support Anytime</h3>
                        <p class="patient-process-step-description">Our team is here to help with any questions</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Security Section -->
        <div class="medical-services-wrapper">
            <div class="medical-services-container">
                <div class="medical-content-grid">
                    <div class="medical-text-section">
                        <h1 class="medical-main-heading">
                            Built for Security, Accuracy, and Compliance
                        </h1>
                        <p class="medical-description-text">
                            Our patient services are built on secure, compliant systems
                            that protect your personal and financial information. Every
                            charge is processed with accuracy and transparency to
                            minimize errors and confusion. We follow industry standards
                            to ensure patient data privacy and reliable billing practices.
                            You can trust our platform to handle your information
                            responsibly at every step.
                        </p>
                    </div>
                    <div class="medical-image-section">
                        <div class="medical-image-container">
                            <img src="{{ asset('assets/images/patient-services/build for security.jpg') }}" alt="Medical services" class="medical-doctor-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <section class="testimonials-section">
            <div class="section-header">
                <h2>Driving Growth for Healthcare Organizations</h2>
                <p>Trusted by Satisfied Providers Nationwide</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="quote-icon-top"><img src="{{ asset('assets/images/patient-services/Simplification (1).png') }}" alt="quote"></div>
                    <p class="testimonial-text">
                        Managing my medical bills used to be confusing, but this platform made everything clear and easy to understand. I could review charges, track payments, and stay informed without any stress.
                    </p>
                    <div class="quote-icon-bottom"><img src="{{ asset('assets/images/patient-services/Simplification (2).png') }}" alt="quote"></div>
                    <div class="author-info">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop" alt="James">
                        </div>
                        <div class="author-details">
                            <div class="author-name">James Wilson</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon-top"><img src="{{ asset('assets/images/patient-services/Simplification (1).png') }}" alt="quote"></div>
                    <p class="testimonial-text">
                        The transparency and accuracy of the billing process really impresses me. I felt confident knowing my information was secure and that every charge was clearly explained.
                    </p>
                    <div class="quote-icon-bottom"><img src="{{ asset('assets/images/patient-services/Simplification (2).png') }}" alt="quote"></div>
                    <div class="author-info">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&h=100&fit=crop" alt="Sarah Johnson">
                        </div>
                        <div class="author-details">
                            <div class="author-name">Sarah Johnson</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon-top"><img src="{{ asset('assets/images/patient-services/Simplification (1).png') }}" alt="quote"></div>
                    <p class="testimonial-text">
                        The billing process was simple and transparent. I could easily review my charges, track payments, and stay updated without any confusion, which made the entire experience stressfree.
                    </p>
                    <div class="quote-icon-bottom"><img src="{{ asset('assets/images/patient-services/Simplification (2).png') }}" alt="quote"></div>
                    <div class="author-info">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=100&h=100&fit=crop" alt="Michael Davis">
                        </div>
                        <div class="author-details">
                            <div class="author-name">Michael Davis</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        @include('partials.cta-section', [
            'title' => 'Manage Your Billing with Confidence',
            'description' => 'View charges, make payments, and stay informed securely and easily.',
            'buttonText' => 'Get Started',
            'buttonLink' => url('contact-us.php')
        ])
    </div>
</div>
@endsection
