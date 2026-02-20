@extends('layouts.app')

@section('content')
<style>
    .small-practices-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .small-practices-wrapper * {
        box-sizing: border-box;
    }

    .small-practices-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        /* overflow: hidden; */
        padding: 0;
    }

    /* Add proper spacing between sections */
    .small-practices-wrapper section {
        margin-bottom: 0px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .small-practices-wrapper section:last-child {
        margin-bottom: 30px;
    }

    @media (max-width: 768px) {
        .small-practices-wrapper section {
            margin-bottom: 30px;
        }
        
        .small-practices-wrapper section:last-child {
            margin-bottom: 20px;
        }
    }

    .hero-section-small {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/small/small-practices/smallpractice-hero.jpg') }}');
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 40px 20px;
        margin: 0 0 20px 0;
    }

    @media (max-width: 1024px) {
        .hero-section-small {
            min-height: 380px;
            padding: 50px 20px;
            margin-bottom: 80px;
        }
    }

    @media (max-width: 768px) {
        /* Hero Mobile Updates */
        .hero-section-small {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
            margin-bottom: 40px;
        }

        .hero-section-small::before {
            display: none;
        }

        .hero-content-small {
            padding-left: 20px;
            padding-right: 20px;
            text-align: center;
            width: 100%;
            max-width: 100%;
        }

        .hero-section-small h1 {
            font-size: 28px;
            text-align: center;
            max-width: 100%;
        }

        .hero-section-small p {
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

    .hero-section-small::before {
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

    .hero-content-small {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-small h1 {
        width: 100%;
        font-size: 34px;
        font-weight: 700;
        color: white !important;
        line-height: 1.3;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-small p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .hero-content-small {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 100%;
        }
        .hero-section-small h1 {
            font-size: 28px;
        }
    }

    .healthcare-services-wrapper-small {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 80px;
        background-color: #ffffff;
    }

    .healthcare-services-container-small {
        max-width: 1200px;
        width: 100%;
    }

    .healthcare-content-grid-small {
        display: grid;
        grid-template-columns: 45% 55%;
        gap: 50px;
        align-items: flex-start;
    }

    .healthcare-image-section-small {
        position: relative;
    }

    .healthcare-doctor-image-small {
        width: 100%;
        /* max-width: 420px; */
        height: auto;
        object-fit: contain;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .healthcare-text-section-small {
        padding: 20px 0;
    }

    .healthcare-main-heading-small {
        width: 100%;
        font-size: 2.2rem;
        font-weight: 700;
        color: #002147;
        line-height: 1.3;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .healthcare-description-text-small {
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.8;
        text-align: left;
        color: #5a5a5a;
    }

    @media (max-width: 968px) {
        .healthcare-content-grid-small {
            grid-template-columns: 1fr;
        }
        
        .healthcare-services-wrapper-small {
            padding: 60px 20px;
        }
        
        .healthcare-image-section-small {
            width: 100%;
        }
        
        .healthcare-doctor-image-small {
            max-width: 100%;
            width: 100%;
            height: auto;
            object-fit: contain;
        }
    }

    .billing-services-container-small {
        width: 100%;
        padding: 40px 20px;
        background-color: #ffffff;
    }

    .billing-header-section-small {
        text-align: center;
        margin-bottom: 30px;
    }

    .billing-main-title-small {
        font-size: 2.5rem;
        font-weight: 700;
        color: #002147;
        margin-bottom: 15px;
        line-height: 1.3;
        border: none;
        text-align: center;
    }

    .billing-subtitle-text-small {
        font-size: 1.5rem;
        font-weight: 400;
        color: #000000;
        line-height: 1.6;
    }

    .services-grid-wrapper-small {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .service-card-item-small {
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

    .service-card-item-small:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 31, 63, 0.3);
    }

    .service-icon-holder-small {
        width: 80px;
        height: 80px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .service-icon-holder-small img {
        width: 50px;
        height: 50px;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .service-title-text-small {
        color: white;
        font-size: 2rem;
        font-weight: 600;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .service-description-text-small {
        color: rgba(255, 255, 255, 0.85);
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.7;
    }

    @media (max-width: 1024px) {
        .services-grid-wrapper-small {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .services-grid-wrapper-small {
            grid-template-columns: 1fr;
        }
    }

    /* Challenges Section */
    .challenges-wrapper-small {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 80px;
        background-color: #ffffff;
    }

    .challenges-container-small {
        max-width: 1200px;
        width: 100%;
    }

    .challenges-content-grid-small {
        display: grid;
        grid-template-columns: 45% 55%;
        gap: 50px;
        align-items: stretch;
    }

    .challenges-image-section-small {
        display: flex;
        align-items: stretch;
    }

    .challenges-image-small {
        
        width:100%;
        height: 100%;
        min-height: 400px;
        /* max-width: 420px; */
        margin: 10px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .challenges-text-section-small {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .challenges-main-heading-small {
        width: 100%;
        font-size: 34px;
        font-weight: 700;
        color: #002147;
        line-height: 1.3;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .challenges-description-text-small {
        font-size: 1.5rem;
        font-weight: 400;
        line-height: 1.8;
        text-align: left;
        color: #5a5a5a;
    }

    @media (max-width: 968px) {
        .challenges-content-grid-small {
            grid-template-columns: 1fr;
        }
        
        .challenges-wrapper-small {
            padding: 60px 20px;
        }
        
        .challenges-image-section-small {
            width: 100%;
        }
        
        .challenges-image-small {
            max-width: 100%;
            width: 100%;
            height: auto;
            min-height: auto;
            margin: 0;
            object-fit: cover;
        }
    }

    .timeline-wrapper-small {
        width: 100%;
        max-width: 1200px;
        margin: 0px auto;
        
        padding: 40px 80px;
    }

    .timeline-wrapper-small h2 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #002147;
        margin-bottom: 15px;
        border: none;
    }

    .timeline-wrapper-small .subtitle {
        text-align: center;
        font-size: 1.5rem;
        color: #000000;
        margin-bottom: 40px;
    }

    .timeline-small {
        position: relative;
        max-width: 900px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .timeline-small::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        top: 30px;
        bottom: 80px;
        height: auto;
        background: linear-gradient(to bottom, #1e3a5f, #2c5282);
    }

    .timeline-item-small {
        position: relative;
        margin-bottom: 50px;
        display: flex;
        align-items: center;
    }

    .timeline-content-small {
        width: 45%;
        padding: 20px 25px;
        position: relative;
    }
    
    .timeline-content-small::before {
        content: '';
        position: absolute;
        top: 50%;
        width: 40px;
        height: 2px;
        background: #1e3a5f;
        transform: translateY(-50%);
    }

    .timeline-item-small.left-small .timeline-content-small {
        margin-right: auto;
        text-align: right;
    }
    
    .timeline-item-small.left-small .timeline-content-small::before {
        right: -40px;
    }

    .timeline-item-small.right-small .timeline-content-small {
        margin-left: auto;
        text-align: left;
    }
    
    .timeline-item-small.right-small .timeline-content-small::before {
        left: -40px;
    }

    .timeline-marker-small {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        background: #1e3a5f;
        border: 5px solid white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 18px;
        z-index: 2;
    }

    .timeline-text-small {
        font-size: 16px;
        color: #2d3748;
        font-weight: 500;
    }

    @media (max-width: 768px) {
        .timeline-wrapper-small {
            padding: 40px 20px;
        }
        
        .timeline-small::before {
            left: 25px;
            top: 30px;
            bottom: 80px;
            height: auto;
        }
        
        .timeline-item-small {
            justify-content: flex-start !important;
            margin-bottom: 40px;
        }
        
        .timeline-content-small {
            width: calc(100% - 80px);
            text-align: left !important;
            margin-left: 80px !important;
            margin-right: 0 !important;
        }
        
        .timeline-content-small::before {
            left: -40px !important;
            right: auto !important;
        }
        
        .timeline-marker-small {
            left: 25px;
            transform: translateX(-50%);
        }
        
        .timeline-text-small {
            font-size: 15px;
        }
    }

    /* Specialties Grid */
    .billing-solutions-small {
        padding: 15px 20px 20px 20px;
        background-color: #ffffff;
        text-align: center;
        position: relative;
        z-index: 1;
        isolation: isolate;
        margin-bottom: 0px;
    }

    .billing-solutions-small h2 {
        font-size: 32px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 8px;
        border: none;
    }

    .specialties-grid-small {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px 30px;
        max-width: 1150px;
        margin: 40px auto 25px;
    }

    .specialty-item-small {
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

    .specialty-item-small:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 33, 71, 0.15);
        border-color: #002147;
    }

    .specialty-content-small {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        transition: all 0.6s ease;
    }

    .specialty-item-small:hover .specialty-content-small {
        transform: translateX(-100%);
        opacity: 0;
    }

    .specialty-description-small {
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
    }

    .specialty-item-small:hover .specialty-description-small {
        left: 0;
    }

    .specialty-icon-small {
        width: 42px;
        height: 42px;
        object-fit: contain;
    }

    @media (max-width: 1024px) {
        .specialties-grid-small {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .specialties-grid-small {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .specialties-grid-small {
            grid-template-columns: 1fr;
        }
    }

    .see-more-btn-small {
        background-color: #002147;
        color: white !important;
        border: none;
        padding: 10px 35px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 15px;
        cursor: pointer;
        display: inline-block;
        transition: all 0.3s ease;
        text-decoration: none;
        position: relative;
        z-index: 10;
        isolation: isolate;
    }

    .see-more-btn-small:hover {
        /* background-color: #ffffff; */
        color: #000000 !important;
        border: 1px solid #000000;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .see-more-btn-small:active,
    /* .see-more-btn-small:focus, */
    .see-more-btn-small:visited {
        color: white !important;
        text-decoration: none;
        outline: none;
    }

    .see-more-btn-small:active {
        background-color: #002147;
        transform: translateY(1px);
    }
</style>

<div class="small-practices-wrapper">
    <div class="small-practices-container">
        <!-- Hero Section -->
        <section class="hero-section-small">
            <img src="{{ asset('assets/images/small/small-practices/smallpractice-hero.jpg') }}" alt="Small Practices" class="mobile-hero-img" style="display: none;">
            <div class="hero-content-small">
                <h1>Billing Solutions Designed for Small Medical Practices</h1>
                <p>We handle your billing, claims, and follow-ups so you can focus on patient care not paperwork.</p>
            </div>
        </section>

        <!-- intro Section -->
        <section class="healthcare-services-wrapper-small">
            <div class="healthcare-services-container-small">
                <div class="healthcare-content-grid-small">
                    <div class="healthcare-image-section-small">
                        <img src="{{ asset('assets/images/small/small-practices/medicalbillingsmallservice.jpg') }}" alt="Medical Billing Small Service" class="healthcare-doctor-image-small">
                    </div>
                    <div class="healthcare-text-section-small">
                        <h2 class="healthcare-main-heading-small">Medical Billing Services for Small Practices</h2>
                        <p class="healthcare-description-text-small">
                            Medical billing for small practices is a specialized service that turns every patient visit into an accurate, payer-ready claim. From correct ICD-10 coding to insurance claim follow-ups, it ensures small clinics and solo providers are paid on time for the care they provide.
                            Our billing services act as a complete revenue cycle partner, handling claims from chart review to reimbursement. We simplify the process, remove staffing and software challenges, and help practices focus fully on patient care.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="billing-services-container-small">
            <div class="billing-header-section-small">
                <h2 class="billing-main-title-small">Why Pick Amdsol for Cardiology Billing Services?</h2>
                <p class="billing-subtitle-text-small">Streamlining Your Practice's Financial Workflow with Expertise and Accuracy</p>
            </div>

            <div class="services-grid-wrapper-small">
                <div class="service-card-item-small">
                    <div class="service-icon-holder-small">
                        <img src="{{ asset('assets/images/small/small-practices/Vector (30).png') }}" alt="Accurate Claims">
                    </div>
                    <h3 class="service-title-text-small">Accurate Claims, Faster Payments</h3>
                    <p class="service-description-text-small">Speed up reimbursements using intelligent claim scrubbing and error prevention built for small, fast-paced practices.</p>
                </div>

                <div class="service-card-item-small">
                    <div class="service-icon-holder-small">
                        <img src="{{ asset('assets/images/small/small-practices/Vector (31).png') }}" alt="Pre-Authorizations">
                    </div>
                    <h3 class="service-title-text-small">Pre-Authorizations & Payer Coordination</h3>
                    <p class="service-description-text-small">Let us take care of insurer approval, while your staff focuses on what matters most: your patients.</p>
                </div>

                <div class="service-card-item-small">
                    <div class="service-icon-holder-small">
                        <img src="{{ asset('assets/images/small/small-practices/stats 1 (3).png') }}" alt="Revenue Insights">
                    </div>
                    <h3 class="service-title-text-small">Actionable Revenue Insights, Instantly</h3>
                    <p class="service-description-text-small">Monitor vital billing metrics, spot underpayments, and make smarter financial decisions with our easy-to-use reporting dashboard.</p>
                </div>
            </div>
        </section>

        <!-- Challenges Section -->
        <section class="challenges-wrapper-small">
            <div class="challenges-container-small">
                <div class="challenges-content-grid-small">
                    <div class="challenges-image-section-small">
                        <img src="{{ asset('assets/images/small/small-practices/challenges.jpg') }}" alt="Challenges" class="challenges-image-small">
                    </div>
                    <div class="challenges-text-section-small">
                        <h2 class="challenges-main-heading-small">Medical Billing Challenges for Small Practices</h2>
                        <p class="challenges-description-text-small">
                            Small healthcare practices often face significant billing challenges. Recent cyberattacks have exposed vulnerabilities in existing systems, leaving many clinics with insufficient security and increased risk of threats. At the same time, administrative burdens related to billing contribute to staff shortages and burnout. Outdated, non-automated systems slow reimbursements and increase claim denials. Constant changes in CMS and payer regulations further heighten compliance risks, where even minor errors can trigger costly audits. Additionally, the rise of high-deductible plans has shifted more payment responsibility to patients, and confusing statements often result in lower collections and decreased patient satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section class="timeline-wrapper-small">
            <h2>Streamlined Billing Services for Small Practices</h2>
            <p class="subtitle">Optimize your billing, minimize claim denials, and focus on patient care while we handle the rest.</p>
            
            <div class="timeline-small">
                <div class="timeline-item-small left-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Patient Data Capture & Integration</div>
                    </div>
                    <div class="timeline-marker-small">1</div>
                </div>

                <div class="timeline-item-small right-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Prior Authorization & Eligibility Verification</div>
                    </div>
                    <div class="timeline-marker-small">2</div>
                </div>

                <div class="timeline-item-small left-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Medical Coding & Modifier Application</div>
                    </div>
                    <div class="timeline-marker-small">3</div>
                </div>

                <div class="timeline-item-small right-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Charge Entry</div>
                    </div>
                    <div class="timeline-marker-small">4</div>
                </div>

                <div class="timeline-item-small left-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Electronic Claim Submission</div>
                    </div>
                    <div class="timeline-marker-small">5</div>
                </div>

                <div class="timeline-item-small right-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Denial Management</div>
                    </div>
                    <div class="timeline-marker-small">6</div>
                </div>

                <div class="timeline-item-small left-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Payment Posting & Reconciliation</div>
                    </div>
                    <div class="timeline-marker-small">7</div>
                </div>

                <div class="timeline-item-small right-small">
                    <div class="timeline-content-small">
                        <div class="timeline-text-small">Medical Billing Audit</div>
                    </div>
                    <div class="timeline-marker-small">8</div>
                </div>
            </div>
        </section>

        <!-- Specialties Section -->
        <section class="billing-solutions-small">
            <h2>Billing Solutions for Every Specialty</h2>
            <p class="subtitle">We offer smart billing services to maximize practice revenue and minimize denials.</p>

            <div class="specialties-grid-small">
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/1.png') }}" alt="OB/GYN" class="specialty-icon-small">
                        <span>OB/GYN</span>
                    </div>
                    <div class="specialty-description-small">Comprehensive care for women’s health and pregnancy needs.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/2.png') }}" alt="Neurology" class="specialty-icon-small">
                        <span>Neurology</span>
                    </div>
                    <div class="specialty-description-small">Specialized care for brain and nervous system health.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/3.png') }}" alt="Orthopedics" class="specialty-icon-small">
                        <span>Orthopedics</span>
                    </div>
                    <div class="specialty-description-small">Specialized treatment for bone, joint, and muscle conditions.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/4.png') }}" alt="Pediatrics" class="specialty-icon-small">
                        <span>Pediatrics</span>
                    </div>
                    <div class="specialty-description-small">Dedicated care for children’s health and development.</div>
                </div>

                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/5.png') }}" alt="Podiatry" class="specialty-icon-small">
                        <span>Podiatry</span>
                    </div>
                    <div class="specialty-description-small">Expert treatment for foot and ankle health issues.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/6.png') }}" alt="Cardiology" class="specialty-icon-small">
                        <span>Cardiology</span>
                    </div>
                    <div class="specialty-description-small">Specialized care for heart health and cardiovascular diseases.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/7.png') }}" alt="Pulmonology" class="specialty-icon-small">
                        <span>Pulmonology</span>
                    </div>
                    <div class="specialty-description-small">Specialized care for respiratory and lung health issues.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/8.png') }}" alt="Nephrology" class="specialty-icon-small">
                        <span>Nephrology</span>
                    </div>
                    <div class="specialty-description-small">Diagnosis and treatment of kidney-related conditions.</div>
                </div>

                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/9.png') }}" alt="Psychiatry" class="specialty-icon-small">
                        <span>Psychiatry</span>
                    </div>
                    <div class="specialty-description-small">Specialized care for mental health and emotional well-being.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/10.png') }}" alt="Urgent Care" class="specialty-icon-small">
                        <span>Urgent Care</span>
                    </div>
                    <div class="specialty-description-small">Fast and accurate billing for urgent care facilities.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/11.png') }}" alt="Sleep Medicine" class="specialty-icon-small">
                        <span>Sleep Medicine</span>
                    </div>
                    <div class="specialty-description-small">Specialized billing for sleep disorders and diagnostic services.</div>
                </div>
                <div class="specialty-item-small">
                    <div class="specialty-content-small">
                        <img src="{{ asset('assets/images/small/small-practices/12.png') }}" alt="Primary Care" class="specialty-icon-small">
                        <span>Primary Care</span>
                    </div>
                    <div class="specialty-description-small">Complete billing solutions for primary care physicians.</div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 20px; margin-bottom: 10px;">
                <a href="{{ url('/specialties#billing-solutions-section') }}" class="see-more-btn-small">See More</a>
            </div>
        </section>

        @include('partials.cta-section', [
    'title' => 'Ready to Streamline Your Billing?',
    'description' => 'We handle claims and coding so your team can focus on patients.',
    'buttonText' => 'Explore Solutions',
    'buttonLink' => url('contact-us.php')
])

</div>
@endsection
