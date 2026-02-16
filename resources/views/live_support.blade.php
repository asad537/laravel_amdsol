@extends('layouts.app')

@section('title', '24/7 Medical Billing Support - AMD SOL')
@section('meta_description', 'Dedicated billing experts available around the clock to handle claims, denials, and revenue issues.')
@section('meta_keywords', 'Medical Billing Support, 24/7 billing help, healthcare billing support, live chat billing')

@section('content')
<style>
    /* Live Support Page Specific Styles */
    .ls-wrapper * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .ls-container {
        width: 100%;
        margin: 0 auto;
        padding: 0;
    }

    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url('{{ asset("assets/images/live-support/24hero.jpg") }}');
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
            rgba(53, 131, 233, 0.25) 80%,
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
        max-width: 628px;
        width: 100%;
        font-weight: 700;
        font-size: 44px;
        color: white;
        line-height: 1.2;
        margin-bottom: 20px;
        position: relative;
    }

    .hero-section p {
        max-width: 580px;
        width: 100%;
        font-weight: 400;
        font-size: 18px;
        color: white;
        line-height: 1.5;
    }

    /* Support Section */
    .support-section {
        width: 90%;
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        top: -80px;
        z-index: 10;
    }

    .support-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid #e1e8ed;
    }

    .support-card {
        padding: 60px 20px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        border-bottom: 1px solid #e1e8ed;
    }

    .support-card:nth-child(odd) {
        border-right: 1px solid #e1e8ed;
    }

    .support-card:nth-last-child(-n+2) {
        border-bottom: none;
    }

    .support-card img {
        margin-bottom: 20px;
        transition: filter 0.3s ease;
    }

    .support-card h3 {
        font-size: 1.5rem;
        color: #002b5c;
        margin: 0;
        font-weight: 700;
        transition: color 0.3s ease;
    }

    .support-card:hover {
        background-color: #002147;
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 33, 71, 0.3);
    }

    .support-card:hover h3 {
        color: #fff;
    }

    .support-card:hover img {
        filter: brightness(0) invert(1);
    }

    /* Compliance Section */
    .compliance-section {
        padding: 40px 97px;
        margin-top: -42px; /* Adjusted to overlap nicely */
        background-color: #f8f9fa;
        text-align: center;
    }

    .compliance-section h2 {
        font-size: 2.5rem;
        color: #000;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .compliance-section .subtitle {
        font-size: 1.5rem;
        color: #000;
        margin-bottom: 60px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .compliance-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        max-width: 100%;
        margin: 0 auto;
    }

    .compliance-card {
        background: #fff;
        border-radius: 12px;
        padding: 40px 25px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        position: relative;
        border: 5px solid transparent;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: start;
        text-align: center;
    }

    .compliance-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 80px;
        border-top: 4px solid #002b5c;
        border-right: 4px solid #002b5c;
        border-radius: 0 12px 0 0;
    }

    .compliance-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 150px;
        height: 80px;
        border-bottom: 4px solid #002b5c;
        border-left: 4px solid #002b5c;
        border-radius: 0 0 0 12px;
    }

    .compliance-card-image {
        width: 100px;
        height: 100px;
        margin-bottom: 25px;
        background: #002b5c;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: left;
    }

    .compliance-card-image img {
        width: 60px;
        height: 60px;
        object-fit: contain;
    }

    .compliance-card h3 {
        font-size: 2rem;
        color: #002b5c;
        font-weight: 700;
        margin-bottom: 15px;
        text-align: left;
    }

    .compliance-card p {
        font-size: 1.5rem;
        color: #000;
        line-height: 1.6;
        text-align: left;
    }

    /* FAQs Section */
    .faq-section {
        padding: 40px 97px;
        background-color: #fff;
        text-align: center;
    }

    .faq-section h2 {
        font-size: 2.5rem;
        color: #000;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .faq-section .subtitle {
        font-size: 1.5rem;
        color: #000;
        margin-bottom: 50px;
    }

    .faq-container {
        max-width: 900px;
        margin: 0 auto;
        text-align: left;
    }

    .faq-item {
        background: #f5f5f5;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid #e0e0e0;
        margin-bottom: 10px;
    }

    .faq-item input[type="checkbox"] {
        display: none;
    }

    .faq-question {
        padding: 25px 30px;
        padding-right: 60px; /* Make space for the icon in the corner */
        cursor: pointer;
        display: flex;
        align-items: flex-start; /* Align text to top */
        font-size: 1.5rem;
        color: #000;
        font-weight: 500;
        user-select: none;
        position: relative;
        text-align: left;
    }

    .faq-question:hover {
        background: #eeeeee;
    }

    .faq-icon {
        font-size: 1rem;
        color: #666;
        transition: transform 0.3s ease;
    }

    .faq-item input[type="checkbox"]:checked ~ .faq-question .faq-icon {
        transform: rotate(180deg);
    }
    
    /* Using Font Awesome for icons - plus changes to minus */
    .faq-question i {
        transition: all 0.3s ease;
        font-style: normal;
        position: absolute;
        right: 30px;
        top: 25px; /* Matches padding-top */
    }
    
    .faq-question i::before {
        content: "\f067"; /* fa-plus */
        font-family: FontAwesome;
    }
    
    .faq-item input[type="checkbox"]:checked ~ .faq-question i::before {
        content: "\f068"; /* fa-minus */
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        padding: 0 30px;
        color: #000;
        font-size: 1.5rem;
        line-height: 1.6;
        background: #fff;
        border-top: 1px solid #e0e0e0;
    }

    .faq-item input[type="checkbox"]:checked ~ .faq-answer {
        max-height: 500px;
        padding: 25px 30px;
    }

    /* CTA Section */
    .cta-section {
        padding: 0px 97px 40px;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cta-container {
        background: linear-gradient(135deg, #002b5c 0%, #004080 100%);
        border-radius: 50px;
        padding: 60px 80px;
        text-align: center;
        max-width: 100%;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .cta-container::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        z-index: 1;
    }

    .cta-container::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -5%;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
        z-index: 1;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .cta-container h2 {
        font-size: 2.5rem;
        color: #fff;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .cta-container p {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 35px;
    }

    .cta-button {
        display: inline-block;
        background: #fff;
        color: #002b5c;
        padding: 16px 45px;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        background: #f0f0f0;
        color: #002b5c;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .hero-section h1 { font-size: 36px; }
        .hero-content { padding-left: 50px; }
        .compliance-section, .faq-section, .cta-section { padding-left: 50px; padding-right: 50px; }
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

        .support-section {
            top: 0;
            margin-top: 20px;
        }

        .support-grid { grid-template-columns: 1fr; }
        .support-card:nth-child(odd) { border-right: none; }
        .support-card:not(:last-child) { border-bottom: 1px solid #e1e8ed; }
        .compliance-grid { grid-template-columns: 1fr; }
        .cta-container { padding: 40px 30px; border-radius: 30px; }
        .cta-container h2 { font-size: 1.8rem; }
        .compliance-section, .faq-section, .cta-section { padding-left: 30px; padding-right: 30px; }
        
        /* Reset negative margins for mobile to prevent overlap */
        .compliance-section {
            margin-top: 0;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .faq-section {
            padding-top: 40px;
            padding-bottom: 40px;
            margin-top: 20px;
        }
    }
    
    @media (max-width: 600px) {
        .support-section { width: 95%; }
        .compliance-section, .faq-section, .cta-section { padding-left: 20px; padding-right: 20px; }
    }
</style>

<div class="ls-wrapper">
    <div class="ls-container">
        <!-- Hero Section -->
        <section class="hero-section">
            <img src="{{ asset('assets/images/live-support/24hero.jpg') }}" alt="24/7 Support" class="mobile-hero-img" style="display: none;">
            <div class="hero-content">
                <h1>24/7 Medical Billing Support</h1>
                <p>Dedicated billing experts available around the clock to handle claims, denials, and revenue issues.</p>
            </div>
        </section>

        <!-- Support Section -->
        <section class="support-section">
            <div class="support-grid">
                <div class="support-card">
                    <img src="{{ asset('assets/images/live-support/Vector.png') }}" alt="Phone Support" width="50" height="50">
                    <h3>Call Billing Support</h3>
                </div>
                <div class="support-card">
                    <img src="{{ asset('assets/images/live-support/live-chat-web-support 1.png') }}" alt="Live Chat" width="50" height="50">
                    <h3>Live Chat Assistance</h3>
                </div>
                <div class="support-card">
                    <img src="{{ asset('assets/images/live-support/email 1.png') }}" alt="Email Support" width="50" height="50">
                    <h3>Secure Email Support</h3>
                </div>
                <div class="support-card">
                    <img src="{{ asset('assets/images/live-support/support 1 (1).png') }}" alt="Help Desk" width="50" height="50">
                    <h3>Help Desk / Submit a Ticket</h3>
                </div>
            </div>
        </section>

        <!-- Compliance & Trust Section -->
        <section class="compliance-section">
            <h2>Compliance & Trust</h2>
            <p class="subtitle">Your data, billing, and communication are handled with the highest standards of security and compliance.</p>
            
            <div class="compliance-grid">
                <div class="compliance-card">
                    <div class="compliance-card-image">
                        <img src="{{ asset('assets/images/live-support/lock.png') }}" alt="HIPAA Compliant">
                    </div>
                    <h3>HIPAA-Compliant Communication</h3>
                    <p>All interactions follow strict HIPAA standards for secure patient communications.</p>
                </div>
                
                <div class="compliance-card">
                    <div class="compliance-card-image">
                        <img src="{{ asset('assets/images/live-support/2.png') }}" alt="Secure Data">
                    </div>
                    <h3>Secure Data Handling</h3>
                    <p>Encrypted systems protect sensitive billing and clinical data across channels.</p>
                </div>
                
                <div class="compliance-card">
                    <div class="compliance-card-image">
                        <img src="{{ asset('assets/images/live-support/4.png') }}" alt="Certified Experts">
                    </div>
                    <h3>Certified Medical Billing Experts</h3>
                    <p>Experienced professionals delivering accurate, compliant US medical billing support services.</p>
                </div>
                
                <div class="compliance-card">
                    <div class="compliance-card-image">
                        <img src="{{ asset('assets/images/live-support/2542070 1.png') }}" alt="Reliable Process">
                    </div>
                    <h3>Proven & Reliable Processes</h3>
                    <p>Every request tracked, documented, and resolved through compliant billing processes.</p>
                </div>
            </div>
        </section>

        <!-- FAQs Section -->
        <section class="faq-section">
            <h2>FAQs</h2>
            <p class="subtitle">We care about your questions</p>
            
            <div class="faq-container">
                <div class="faq-item">
                    <input type="checkbox" id="faq1">
                    <label for="faq1" class="faq-question">
                        <span>What is a medical billing company, and how can it help me?</span>
                       <i class="fa fa-plus"></i>
                    </label>
                    <div class="faq-answer">
                        <p>A medical billing company specializes in managing the billing process for healthcare providers, including claim submission, payment posting, denial management, and revenue cycle optimization. We help you get paid faster and reduce administrative burden.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <input type="checkbox" id="faq2">
                    <label for="faq2" class="faq-question">
                        <span>What are the key benefits of outsourcing medical billing?</span>
                       <i class="fa fa-plus"></i>
                    </label>
                    <div class="faq-answer">
                        <p>Outsourcing medical billing reduces overhead costs, improves cash flow, minimizes claim denials, ensures compliance with regulations, and allows your staff to focus on patient care rather than administrative tasks.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <input type="checkbox" id="faq3">
                    <label for="faq3" class="faq-question">
                        <span>In which billing specialties do you have expertise?</span>
                       <i class="fa fa-plus"></i>
                    </label>
                    <div class="faq-answer">
                        <p>We have expertise across multiple specialties including primary care, cardiology, orthopedics, dermatology, mental health, physical therapy, and many more. Our team is trained in specialty-specific coding and billing requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <input type="checkbox" id="faq4">
                    <label for="faq4" class="faq-question">
                        <span>How long does it take to see results after outsourcing billing?</span>
                        <i class="fa fa-plus"></i>
                    </label>
                    <div class="faq-answer">
                        <p>Most practices see improvements in cash flow within 30-60 days. Full optimization typically occurs within 90 days as we clean up backlogs, reduce denials, and streamline your revenue cycle processes.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <input type="checkbox" id="faq5">
                    <label for="faq5" class="faq-question">
                        <span>How do you charge for medical billing services?</span>
                        <i class="fa fa-plus"></i>
                    </label>
                    <div class="faq-answer">
                        <p>We typically charge a percentage of collections, which aligns our success with yours. Pricing varies based on practice size, specialty, and service scope. We offer transparent pricing with no hidden fees.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <input type="checkbox" id="faq6">
                    <label for="faq6" class="faq-question">
                        <span>Can I continue using the billing software I already have?</span>
                        <i class="fa fa-plus"></i>
                    </label>
                    <div class="faq-answer">
                        <p>Yes! We work with most major EHR and practice management systems. Our team integrates seamlessly with your existing software to ensure smooth operations without disrupting your workflow.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        @include('partials.cta-section', [
            'title' => 'Need Immediate Billing Support?',
            'description' => 'Fast, secure, HIPAA-compliant support—when you need it.',
            'buttonText' => 'Get Started',
            'buttonLink' => url('contact-us.php')
        ])
    </div>
</div>

<script>
    // FAQ Auto-close functionality
    document.addEventListener('DOMContentLoaded', function() {
        const faqCheckboxes = document.querySelectorAll('.faq-item input[type="checkbox"]');
        
        faqCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    // Close all other FAQs when one is opened
                    faqCheckboxes.forEach(otherCheckbox => {
                        if (otherCheckbox !== this) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    });
</script>

@endsection
