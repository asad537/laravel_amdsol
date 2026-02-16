@extends('layouts.app')

@section('content')
<style>
    .physician-page-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .physician-page-wrapper * {
        box-sizing: border-box;
    }

    .physician-page-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .hero-section-physician {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/physician/physical-biling-img/herophysical.jpg') }}');
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 40px 20px;
        margin: 0;
    }

    .hero-section-physician::before {
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

    .hero-content-physician {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-physician h1 {
        font-size: 34px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-physician p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    .denial-management-section-physician {
        position: relative;
        max-width: 1200px;
        margin: 60px auto;
        padding: 40px 97px;
        display: flex;
        align-items: center;
        gap: 60px;
        overflow: hidden;
    }

    .laptop-container-physician {
        flex: 1;
        z-index: 2;
    }

    .laptop-container-physician img {
        width: 100%;
        max-width: 500px;
        height: auto;
        border-radius: 15px;
    }

    .content-container-physician {
        flex: 1;
        z-index: 2;
    }

    .content-container-physician h2 {
        font-size: 34px;
        color: #1a1a2e;
        margin-bottom: 20px;
        line-height: 1.2;
        font-weight: 700;
        border: none;
        text-align: left;
    }

    .content-container-physician p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
        text-align: justify;
    }

    .trusted-partner-section-physician {
        max-width: 1200px;
        margin: 80px auto;
        padding: 40px 97px;
    }

    .content-wrapper-physician {
        display: flex;
        gap: 60px;
        align-items: center;
    }

    .text-content-physician {
        flex: 1;
    }

    .text-content-physician h2 {
        font-size: 34px;
        color: #1a1a2e;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .text-content-physician p {
        font-size: 16px;
        color: #4a4a4a;
        line-height: 1.8;
        margin-bottom: 15px;
        text-align: justify;
    }

    .image-container-physician {
        flex: 1;
    }

    .image-container-physician img {
        width: 100%;
        height: 400px;
        max-width: 500px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .features-wrapper-physician {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0px 97px;
    }

    .features-header-physician {
        text-align: center;
        margin-bottom: 60px;
    }

    .features-header-physician h2 {
        font-size: 2.5rem;
        color: #1a1a2e;
        margin-bottom: 15px;
        font-weight: 700;
        border: none;
    }

    .features-header-physician p {
        font-size: 1.5rem;
        color: #000000;
        max-width: 700px;
        margin: 0 auto;
    }

    .services-grid-physician {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 60px;
    }

    .service-card-physician {
        background: #ffffff;
        border-radius: 16px;
        padding: 35px 30px;
        box-shadow: 0 4px 20px rgba(0, 33, 71, 0.1);
        border: 1px solid #eee;
        transition: all 0.3s ease;
    }

    .service-card-physician:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 33, 71, 0.15);
        border-color: #002147;
    }

    .icon-wrapper-physician {
        width: 60px;
        height: 60px;
        margin-bottom: 25px;
    }

    .icon-wrapper-physician img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .service-card-physician h3 {
        font-size: 2rem;
        color: #1a1a2e;
        margin-bottom: 15px;
        font-weight: 700;
        border: none;
    }

    .service-card-physician p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.7;
    }

    .healthcare-services-wrapper-physician {
        width: 100%;
        background: #002147;
        padding: 80px 97px;
        margin: 60px 0 20px 0;
    }

    .healthcare-content-grid-physician {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .healthcare-image-section-physician {
        order: 2;
    }

    .healthcare-doctor-image-physician {
        width: 100%;
        max-width: 580px;
        border-radius: 20px;
        object-fit: cover;
    }

    .healthcare-text-section-physician {
        color: #FFFFFF;
        order: 1;
    }

    .healthcare-main-heading-physician {
        font-size: 34px;
        font-weight: 700;
        margin-bottom: 25px;
        border: none;
        color: white !important;
        text-align: left;
    }

    .healthcare-description-text-physician {
        font-size: 16px;
        line-height: 1.8;
        color:#FFFFFF;
    }

    .faq-section-physician {
        padding: 40px 97px;
        background-color: #fff;
        text-align: center;
    }

    .faq-section-physician h2 {
        
       
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        border: none;
    }

    .faq-container-physician {
        max-width: 900px;
        margin: 40px auto 0;
        text-align: left;
    }

    .faq-item-physician {
        background: #f5f5f5;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .faq-item-physician input[type="checkbox"] {
        display: none;
    }

    .faq-question-physician {
        padding: 20px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 500;
        font-size:1.5rem;
    }
    
    .faq-question-physician i {
        transition: all 0.3s ease;
    }
    
    .faq-item-physician input[type="checkbox"]:checked + .faq-question-physician i::before {
        content: "\f068";
    }

    .faq-answer-physician {
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        padding: 0 30px;
        background: #fff;
        border-top: 1px solid #e0e0e0;
    }

    .faq-item-physician input[type="checkbox"]:checked ~ .faq-answer-physician {
        max-height: 500px;
        padding: 25px 30px;
    }
    
    .cta-section-physician {
        padding: 20px 97px;
        margin: 0;
    }

    .cta-container-physician {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin: 0 auto;
        max-width: 1200px;
    }

    .cta-container-physician::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/physician/physical-biling-img/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.3;
    }

    .cta-content-physician h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 15px;
        border: none;
    }

    .cta-content-physician p {
        font-size: 20px;
        color: #FFFFFF;
        opacity: 0.9;
        margin-bottom: 30px;
    }

    .cta-request-btn-physician {
        background-color: white;
        color: #002147;
        padding: 15px 45px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 35px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    @media (max-width: 968px) {
        .denial-management-section-physician,
        .content-wrapper-physician,
        .healthcare-content-grid-physician {
            flex-direction: column;
            grid-template-columns: 1fr;
            text-align: center;
        }
        
        .denial-management-section-physician {
            margin: 20px auto;
            padding: 20px 50px;
            gap: 20px;
        }
        
        .trusted-partner-section-physician {
            margin: 20px auto;
            padding: 20px 50px;
        }
        
        .features-wrapper-physician {
            padding: 0px 50px;
        }
        
        .healthcare-services-wrapper-physician {
            padding: 80px 50px;
        }
        
        .faq-section-physician {
            padding: 40px 50px;
        }
        
        .cta-section-physician {
            padding: 20px 50px;
        }
        
        .services-grid-physician {
            grid-template-columns: repeat(2, 1fr);
        }
        .healthcare-image-section-physician {
            order: 2;
        }
        .healthcare-text-section-physician {
            order: 1;
        }
    }

    @media (max-width: 768px) {
        .hero-section-physician {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }

        .hero-section-physician::before {
            display: none;
        }

        .mobile-hero-img {
            display: block !important;
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .denial-management-section-physician {
            padding: 20px 30px;
        }
        
        .trusted-partner-section-physician {
            padding: 20px 30px;
        }
        
        .features-wrapper-physician {
            padding: 0px 30px;
        }
        
        .healthcare-services-wrapper-physician {
            padding: 80px 30px;
        }
        
        .faq-section-physician {
            padding: 40px 30px;
        }
        
        .cta-section-physician {
            padding: 20px 30px;
        }
    }

    .mobile-hero-img {
        display: none;
    }

    @media (max-width: 640px) {
        .services-grid-physician {
            grid-template-columns: 1fr;
        }
        .hero-section-physician h1,
        .cta-content-physician h2 {
            font-size: 28px;
        }
    }

    @media (max-width: 480px) {
        .denial-management-section-physician {
            padding: 20px;
        }
        
        .trusted-partner-section-physician {
            padding: 20px;
        }
        
        .features-wrapper-physician {
            padding: 0px 20px;
        }
        
        .healthcare-services-wrapper-physician {
            padding: 80px 20px;
        }
        
        .faq-section-physician {
            padding: 40px 20px;
        }
        
        .cta-section-physician {
            padding: 20px;
        }
    }
</style>

<div class="physician-page-wrapper">
    <div class="physician-page-container">
        <!-- Hero Section -->
        <section class="hero-section-physician">
            <img src="{{ asset('assets/images/physician/physical-biling-img/herophysical.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-physician">
                <h1>Comprehensive Physician Billing Services</h1>
                <p>Accurate claims, faster reimbursements, and optimized revenue cycle management for physician practices.</p>
            </div>
        </section>

        <!-- What Is Physician Billing -->
        <section class="denial-management-section-physician">
            <div class="laptop-container-physician">
                <img src="{{ asset('assets/images/physician/physical-biling-img/Physician-hero.jpg') }}" alt="Physician Billing Dashboard">
            </div>
            <div class="content-container-physician">
                <h2>What Is Physician Billing?</h2>
                <p>
                    Physician billing is the process of preparing and submitting medical claims to insurance companies for services provided by physicians. It involves collecting accurate patient and service information, generating compliant claims, verifying their accuracy, and transmitting them to payers for reimbursement. Ultimately, effective physician billing ensures timely payments and supports stronger revenue performance for healthcare organizations.
                </p>
            </div>
        </section>

        <!-- Trusted Partner -->
        <section class="trusted-partner-section-physician">
            <div class="content-wrapper-physician">
                <div class="text-content-physician">
                    <h2>Your Trusted Partner in Physician Billing Excellence</h2>
                    <p>
                        The physician billing landscape is complex, and small errors can lead to 
                        lost revenue or penalties. Our services remove this administrative 
                        burden, letting you focus on patient care. Our skilled team uses advanced technology to verify charges, ensure 
                        accurate coding, prevent rejections, and follow up on unpaid claims.  Staying up to date with compliance, we help you receive full 
                        reimbursement without delays. With our support, you can increase revenue, reduce denials, and spend 
                        more time practicing medicine instead of managing paperwork.
                    </p>
                    
                </div>
                <div class="image-container-physician">
                    <img src="{{ asset('assets/images/physician/physical-biling-img/yourtrusted.jpg') }}" alt="Medical Professional Team">
                </div>
            </div>
        </section>

        <!-- Features Grid -->
        <div class="features-wrapper-physician">
            <div class="features-header-physician">
                <h2>Explore Our Physician Billing Features</h2>
                <p>Optimize revenue, streamline finances, and take full control of your practice.</p>
            </div>
            <div class="services-grid-physician">
                <div class="service-card-physician">
                    <div class="icon-wrapper-physician">
                        <img src="{{ asset('assets/images/physician/physical-biling-img/Vector (46).png') }}" alt="Insurance Verification">
                    </div>
                    <h3>Insurance Verification & Eligibility</h3>
                    <p>Our team confirms patients' active insurance coverage for diagnoses, procedures, and treatments to prevent claim delays.</p>
                </div>
                <div class="service-card-physician">
                    <div class="icon-wrapper-physician">
                        <img src="{{ asset('assets/images/physician/physical-biling-img/Vector (51).png') }}" alt="Patient Registration">
                    </div>
                    <h3>Patient Registration</h3>
                    <p>Collect and verify patient information accurately to support error-free billing documentation.</p>
                </div>
                <div class="service-card-physician">
                    <div class="icon-wrapper-physician">
                        <img src="{{ asset('assets/images/physician/physical-biling-img/Vector (48).png') }}" alt="Claims Submission">
                    </div>
                    <h3>Claims Submission</h3>
                    <p>With a 95% clean claim rate, we submit precise claims to maximize first-time approvals and faster collections.</p>
                </div>
                <div class="service-card-physician">
                    <div class="icon-wrapper-physician">
                        <img src="{{ asset('assets/images/physician/physical-biling-img/Vector (49).png') }}" alt="Coding">
                    </div>
                    <h3>Coding & Documentation</h3>
                    <p>Our expert coders and billers ensure accurate diagnostic and procedural coding, minimizing errors and denials.</p>
                </div>
                <div class="service-card-physician">
                    <div class="icon-wrapper-physician">
                        <img src="{{ asset('assets/images/physician/physical-biling-img/01 align center (1).png') }}" alt="Denial Management">
                    </div>
                    <h3>Denial Management</h3>
                    <p>Identify and resolve the root causes of claim denials to de-escalate, successful reimbursement recovery.</p>
                </div>
                <div class="service-card-physician">
                    <div class="icon-wrapper-physician">
                        <img src="{{ asset('assets/images/physician/physical-biling-img/Vector (50).png') }}" alt="Payment Posting">
                    </div>
                    <h3>Payment Posting</h3>
                    <p>Post payments received from insurers or patients into the system for accurate records and easier patient notifications.</p>
                </div>
            </div>
        </div>

        <!-- How Services Help -->
        <div class="healthcare-services-wrapper-physician">
            <div class="healthcare-content-grid-physician">
                <div class="healthcare-image-section-physician">
                    <img src="{{ asset('assets/images/physician/physical-biling-img/billing service.jpg') }}" alt="Physician Billing Services" class="healthcare-doctor-image-physician">
                </div>
                <div class="healthcare-text-section-physician">
                    <h2 class="healthcare-main-heading-physician">How Physician Billing Services Help</h2>
                    <p class="healthcare-description-text-physician">
                        Every dollar you earn as a physician matters, yet an inefficient revenue
                        cycle can hold your practice back. Our physician billing and revenue cycle management services handle claims submission, eligibility verification,
                        coding, and payment collection. We focus on accuracy and speed to
                        minimize errors and accelerate reimbursements. Real-time analytics
                        identify opportunities to optimize revenue and improve financial
                        performance.
                    </p>
                </div>
            </div>
        </div>

        <!-- FAQs Section -->
        <section class="faq-section-physician">
            <h2>FAQs</h2>
            <p class="subtitle">We care about your questions</p>
            <div class="faq-container-physician">
                <div class="faq-item-physician">
                    <input type="checkbox" id="faq1">
                    <label for="faq1" class="faq-question-physician"><span>What are the most common reasons for Physical claim denials?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer-physician"><p>Common reasons for physician claim denials include missing or incorrect patient information, outdated or invalid insurance details, lack of prior authorization, incorrect CPT or ICD-10 codes, incomplete documentation, failure to meet medical necessity requirements, and duplicate claims.</p></div>
                </div>
                <div class="faq-item-physician">
                    <input type="checkbox" id="faq2">
                    <label for="faq2" class="faq-question-physician"><span>Which CPT and ICD‑10 codes should I be most familiar with for my specialty?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer-physician"><p>The most relevant CPT and ICD-10 codes depend on your medical specialty. For example, primary care physicians commonly use evaluation and management (E/M) codes (99201-99215). Our team stays current with all specialty-specific codes.</p></div>
                </div>
                <div class="faq-item-physician">
                    <input type="checkbox" id="faq3">
                    <label for="faq3" class="faq-question-physician"><span>What are typical billing challenges faced by small or multi-provider practices?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer-physician"><p>Practices often face challenges such as managing high claim volumes with limited staff, keeping up with changing payer requirements, handling multiple provider schedules, and maintaining cash flow while dealing with delayed reimbursements.</p></div>
                </div>
                <div class="faq-item-physician">
                    <input type="checkbox" id="faq4">
                    <label for="faq4" class="faq-question-physician"><span>How can I ensure accurate billing and avoid compliance issues?</span><i class="fa fa-plus"></i></label>
                    <div class="faq-answer-physician"><p>To ensure accuracy, maintain complete documentation, use current CPT/ICD codes, verify insurance eligibility, obtain prior authorizations, and partner with experienced billing professionals like AMDSol.</p></div>
                </div>
            </div>
        </section>

         <!-- CTA Section -->
       @include('partials.cta-section', [
    'title' => 'Ready to Streamline Your Billing?',
    'description' => 'We handle claims and coding so your team can focus on patients.',
    'buttonText' => 'Explore Solutions',
    'buttonLink' => url('contact-us.php')
])

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqCheckboxes = document.querySelectorAll('.faq-item-physician input[type="checkbox"]');
    
    faqCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                // Close all other FAQs
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
