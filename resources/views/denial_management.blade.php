@extends('layouts.app')

@section('content')
<style>
    .denial-page-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .denial-page-wrapper * {
        box-sizing: border-box;
    }

    .denial-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    /* Add proper spacing between sections */
    .denial-page-wrapper section {
        margin-bottom: 30px;
    }

    .denial-page-wrapper section:last-child {
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .denial-page-wrapper section {
            margin-bottom: 20px;
        }
        
        .denial-page-wrapper section:last-child {
            margin-bottom: 15px;
        }
    }

    .hero-section-denial {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/denial/Denial Management Page-imgs/herodenial.jpg') }}');
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
        .hero-section-denial {
            min-height: 380px;
            padding: 50px 20px;
            margin-bottom: 80px;
        }
    }

    @media (max-width: 768px) {
        .hero-section-denial {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }
        
        .hero-section-denial::before {
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

    @media (max-width: 480px) {
        .hero-section-denial {
            padding: 0 0 30px 0;
        }
        
        .hero-section-denial::before {
            background: linear-gradient(to right, 
                rgba(10, 25, 45, 0.98) 0%, 
                rgba(10, 25, 45, 0.9) 70%,
                rgba(10, 25, 45, 0.5) 100%);
        }
    }

    .hero-section-denial::before {
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

    .hero-content-denial {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-denial h1 {
        width: 100%;
        font-size: 34px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-denial p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 1024px) {
        .hero-content-denial {
            padding-left: 40px;
            max-width: 500px;
        }
        .hero-section-denial h1 {
            font-size: 36px;
        }
    }

    @media (max-width: 768px) {
        .hero-content-denial {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 100%;
        }
        .hero-section-denial h1 {
            font-size: 28px;
        }
    }

    .denial-management-section {
        position: relative;
        max-width: 1200px;
        margin: -82px auto 20px;
        padding: 40px 20px;
        display: flex;
        align-items: center;
        gap: 60px;
        overflow: hidden;
    }

    .circle-bg-denial {
        position: absolute;
        top: 88px;
        left: 192px;
        width: 180px;
        height: 180px;
        background: linear-gradient(135deg, #b8f3e6 0%, #a8e6d8 100%);
        border-radius: 50%;
        z-index: 1;
        opacity: 1;
    }

    .laptop-container-denial {
        position: relative;
        flex: 1;
        z-index: 2;
    }

    .laptop-container-denial img {
        width: 100%;
        max-width: 500px;
        height: auto;
        display: block;
    }

    .content-container-denial {
        flex: 1;
        z-index: 2;
    }

    .content-container-denial h2 {
        font-size: 34px;
        color: #1a1a2e;
        margin-bottom: 20px;
        line-height: 1.2;
        font-weight: 700;
    }

    .content-container-denial p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
        text-align: justify;
    }

    @media (max-width: 968px) {
        .content-container-denial p {
            text-align: left;
        }
        
        .denial-management-section {
            flex-direction: column;
            gap: 40px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .circle-bg-denial {
            display: block;
            width: 200px;
            height: 200px;
            top: 100px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0.8;
        }
        
        .laptop-container-denial {
            display: flex;
            justify-content: center;
        }
        
        .laptop-container-denial img {
            max-width: 90%;
        }
    }
    
    @media (max-width: 768px) {
        .circle-bg-denial {
            width: 150px;
            height: 150px;
            top: 80px;
        }
    }
    
    @media (max-width: 480px) {
        .circle-bg-denial {
            width: 120px;
            height: 120px;
            top: 60px;
        }
    }

    .denial-solutions-section {
        max-width: 1200px;
        margin: 20px auto;
        padding: 30px 20px;
        display: flex;
        gap: 60px;
        align-items: flex-start;
    }

    .content-left-denial {
        flex: 1;
    }

    .content-left-denial h2 {
        font-size: 34px;
        color: #1a1a2e;
        margin-bottom: 25px;
        line-height: 1.3;
        font-weight: 700;
    }

    .content-left-denial p {
        font-size: 16px;
        color: #000000;
        line-height: 1.8;
        text-align: justify;
    }

    .accordion-right-denial {
        flex: 1;
    }

    .accordion-item-denial {
        background-color: #0f2e4d;
        color: white;
        margin-bottom: 2px;
        border-radius: 4px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .accordion-item-denial:hover {
        background-color: #1a3f5e;
    }

    .accordion-checkbox-denial {
        display: none;
    }

    .accordion-header-denial {
        padding: 20px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1.5;
        background-color: #0f2e4d;
        cursor: pointer;
        user-select: none;
    }

    .accordion-icon-denial {
        font-size: 1.5rem;
        font-weight: 300;
        transition: all 0.3s ease;
        flex-shrink: 0;
        margin-left: 15px;
    }
    
    .accordion-icon-denial::before {
        content: '+';
    }

    .accordion-checkbox-denial:checked + .accordion-header-denial .accordion-icon-denial::before {
        content: '−';
    }

    .accordion-content-denial {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        padding: 0 24px;
        background-color: #ffffff;
        border-radius: 0 0 4px 4px;
    }

    .accordion-checkbox-denial:checked ~ .accordion-content-denial {
        max-height: 500px;
        padding: 20px 24px;
        border: 1px solid #e0e0e0;
        border-top: none;
    }

    .accordion-content-denial p {
        color: #000000;
        line-height: 1.7;
        font-size: 1.5rem;
    }

    @media (max-width: 968px) {
        .denial-solutions-section {
            flex-direction: column;
            gap: 40px;
        }
    }

    .benefits-section-denial {
        width: 80%;
        margin: 20px auto;
        padding: 30px 20px;
        text-align: center;
    }

    .benefits-header-denial h2 {
        font-size: 34px;
        color: #1a1a2e;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .benefits-header-denial p {
        font-size: 1.5rem;
        color: #000000;
        margin-bottom: 40px;
    }

    .benefits-grid-denial {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .benefit-card-denial {
        background-color: #ffffff;
        border: 2px solid #1a1a2e;
        border-radius: 12px;
        padding: 40px 25px;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
        min-height: 280px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    .benefit-card-denial:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .icon-container-denial {
        width: 80px;
        height: 80px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-container-denial img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .benefit-card-denial h3 {
        font-size: 1.3rem;
        color: #1a1a2e;
        font-weight: 600;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    @media (max-width: 1024px) {
        .benefits-grid-denial {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .benefits-grid-denial {
            grid-template-columns: 1fr;
        }
    }

    .stats-section-denial {
        max-width: 1200px;
        margin: 20px auto;
        padding: 30px 20px;
    }

    .stats-header-denial {
        text-align: center;
        margin-bottom: 40px;
    }

    .stats-header-denial h2 {
        font-size: 2.5rem;
        color: #1a1a2e;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .stats-content-denial {
        display: flex;
        gap: 50px;
        align-items: center;
    }

    .stats-text-denial {
        flex: 1;
    }

    .stats-text-denial p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
        text-align: justify;
    }

    .stats-cards-denial {
        flex: 1;
        display: flex;
        gap: 10px;
        align-items: flex-end;
    }

    .stat-card-denial {
        background-color: #0f2e4d;
        color: white;
        border-radius: 12px;
        padding: 30px 25px;
        text-align: center;
        width: 182px;
        height: 199.48px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .stat-card-small-denial {
        padding: 20px 15px;
        height: 180px;
    }

    .stat-card-middle-denial {
        margin-bottom: 60px;
        height: 240px;
        padding: 35px 25px;
    }

    .stat-icon-denial {
        width: 45px;
        height: 45px;
        margin: 0 auto 10px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .stat-icon-denial img {
        width: 28px;
        height: 28px;
        object-fit: contain;
    }

    .stat-label-denial {
        font-size: 1.5rem;
        color: #b8d4e8;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .stat-value-denial {
        font-size: 1.4rem;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 0;
    }

    @media (max-width: 968px) {
        .stats-content-denial {
            flex-direction: column;
        }
        
        .stats-cards-denial {
            flex-direction: column;
            align-items: center;
            width: 100%;
            gap: 20px;
        }
        
        .stat-card-denial {
            width: 100%;
            max-width: 300px;
            height: auto;
            min-height: 180px;
        }
        
        .stat-card-small-denial {
            height: auto;
            min-height: 180px;
        }
        
        .stat-card-middle-denial {
            margin-bottom: 0;
            height: auto;
            min-height: 200px;
        }
    }

    .why-choose-section-denial {
        width: 85%;
        margin: 20px auto;
        padding: 30px 20px;
    }

    .section-header-denial h2 {
        text-align: center;
        font-size: 34px;
        color: #1a1a2e;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 40px;
    }

    .content-wrapper-denial {
        display: flex;
        gap: 60px;
        align-items: center;
    }

    .image-container-denial {
        flex: 1;
    }

    .image-container-denial img {
        width: 100%;
        max-width: 500px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .text-content-denial {
        flex: 1;
    }

    .text-content-denial p {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.8;
        margin-bottom: 20px;
        text-align: justify;
    }

    @media (max-width: 968px) {
        .content-wrapper-denial {
            flex-direction: column;
        }
        
        /* Fix justified text spacing on mobile */
        .content-container-denial p,
        .content-left-denial p,
        .text-content-denial p,
        .denial-management-section p,
        .stats-text-denial p {
            text-align: left !important;
        }
    }
    
    @media (max-width: 768px) {
        /* Ensure all paragraph text is left-aligned on mobile */
        p {
            text-align: left !important;
        }
    }

    .cta-container-denial {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        min-height: 280px;
        margin: 30px 40px;
    }

    .cta-container-denial::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/denial/Denial Management Page-imgs/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content-denial {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content-denial h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 12px;
        line-height: 1.2;
        border: none;
    }

    .cta-content-denial p {
        width: 100%;
        margin: 0 auto 25px;
        font-weight: 400;
        text-align: center;
        font-size: 20px;
        line-height: 30px;
        color: #FFFFFF;
        opacity: 0.9;
    }

    .cta-request-btn-denial {
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
    }

    .cta-request-btn-denial:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        background-color: #f8f8f8;
    }

    @media (max-width: 768px) {
        .cta-container-denial {
            padding: 40px 30px;
            margin: 20px;
        }
        .cta-content-denial h2 {
            font-size: 32px;
        }
        .cta-content-denial p {
            font-size: 16px;
        }
    }
</style>

<div class="denial-page-wrapper">
    <div class="denial-container">
        <!-- Hero Section -->
        <section class="hero-section-denial">
        <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/herodenial.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-denial">
                <h1>Denial Management That Protects Your Revenue</h1>
                <p>We identify, resolve, and prevent denials to ensure faster reimbursements and steady cash flow.</p>
            </div>
        </section>

        <!-- What Are Denial Management Services? -->
        <section class="denial-management-section">
            <div class="circle-bg-denial"></div>
            <div class="laptop-container-denial">
                <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/denial.png') }}" alt="Denial Dashboard">
            </div>
            <div class="content-container-denial">
                <h2>What Are Denial Management Services?</h2>
                <p>
                    Denial Management Services are medical billing services focused on identifying, 
                    resolving, and preventing insurance claim denials to ensure healthcare 
                    practices receive timely and accurate reimbursements. This process involves 
                    analyzing the reasons for denials, correcting errors, appealing or resubmitting 
                    claims, and improving billing workflows to reduce future rejections. Effective 
                    denial management helps lower AR days, minimize revenue loss, and maintain a 
                    steady, predictable cash flow for medical practices.
                </p>
            </div>
        </section>

        <!-- Comprehensive Solutions -->
        <section class="denial-solutions-section">
            <div class="content-left-denial">
                <h2>Comprehensive End-to-End Denial Management Solutions</h2>
                <p>
                    Frustrated by claim denials slowing down your revenue cycle? While you 
                    focus on patient care, denied claims can create real headaches, 
                    impacting both cash flow and Days in Accounts Receivable (DAR). 
                    The first step in resolving this is a thorough denial root cause analysis. 
                    Our denial management experts dive into the data to uncover why 
                    claims are denied and develop effective strategies to prevent them. By 
                    monitoring payer-specific denial trends, we help practices keep claims 
                    moving and revenue on track.
                </p>
            </div>

            <!-- Accordion -->
            <div class="accordion-right-denial">
                <div class="accordion-item-denial">
                    <input type="checkbox" id="acc1" class="accordion-checkbox-denial">
                    <label for="acc1" class="accordion-header-denial">
                        <span>Are errors in patient information causing claim denials?</span>
                        <span class="accordion-icon-denial"></span>
                    </label>
                    <div class="accordion-content-denial">
                        <p>
                            Patient information errors are one of the most common causes of claim denials. 
                            Our team verifies demographics, insurance details, and eligibility before submission 
                            to ensure accuracy and reduce rejection rates.
                        </p>
                    </div>
                </div>

                <div class="accordion-item-denial">
                    <input type="checkbox" id="acc2" class="accordion-checkbox-denial">
                    <label for="acc2" class="accordion-header-denial">
                        <span>Are coding mistakes leading to medical necessity denials?</span>
                        <span class="accordion-icon-denial"></span>
                    </label>
                    <div class="accordion-content-denial">
                        <p>
                            Incorrect or outdated coding can trigger medical necessity denials. We ensure 
                            proper ICD-10, CPT, and HCPCS coding aligned with payer requirements and clinical 
                            documentation to support medical necessity claims.
                        </p>
                    </div>
                </div>

                <div class="accordion-item-denial">
                    <input type="checkbox" id="acc3" class="accordion-checkbox-denial">
                    <label for="acc3" class="accordion-header-denial">
                        <span>Are claims being submitted within payer timely filing limits?</span>
                        <span class="accordion-icon-denial"></span>
                    </label>
                    <div class="accordion-content-denial">
                        <p>
                            Missing timely filing deadlines results in automatic denials. Our automated tracking 
                            system monitors submission dates and payer-specific deadlines to ensure claims are 
                            filed promptly and within required timeframes.
                        </p>
                    </div>
                </div>

                <div class="accordion-item-denial">
                    <input type="checkbox" id="acc4" class="accordion-checkbox-denial">
                    <label for="acc4" class="accordion-header-denial">
                        <span>How often do duplicate claims or prior authorization denials occur?</span>
                        <span class="accordion-icon-denial"></span>
                    </label>
                    <div class="accordion-content-denial">
                        <p>
                            Duplicate submissions and missing prior authorizations are preventable issues. 
                            We implement systematic checks to identify duplicates and verify authorization 
                            requirements before claim submission.
                        </p>
                    </div>
                </div>

                <div class="accordion-item-denial">
                    <input type="checkbox" id="acc5" class="accordion-checkbox-denial">
                    <label for="acc5" class="accordion-header-denial">
                        <span>Are coordination of benefits (COB) errors affecting payments?</span>
                        <span class="accordion-icon-denial"></span>
                    </label>
                    <div class="accordion-content-denial">
                        <p>
                            COB errors occur when primary and secondary insurance coordination fails. 
                            Our experts verify insurance hierarchy and ensure proper claim sequencing to 
                            maximize reimbursement and minimize payment delays.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits -->
        <section class="benefits-section-denial">
            <div class="benefits-header-denial">
                <h2>Benefits of Our Healthcare Denial Management Service</h2>
                <p>Reduce denied claims, recover revenue faster, and improve your practice's cash flow.</p>
            </div>

            <div class="benefits-grid-denial">
                <div class="benefit-card-denial">
                    <div class="icon-container-denial">
                        <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/time-fast 1.png') }}" alt="Faster Payments">
                    </div>
                    <h3>Faster Payments<br>& Fewer Rejections</h3>
                </div>

                <div class="benefit-card-denial">
                    <div class="icon-container-denial">
                        <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/Vector (44).png') }}" alt="Income Boost">
                    </div>
                    <h3>Income Boost &<br>Steady Cash Flow</h3>
                </div>

                <div class="benefit-card-denial">
                    <div class="icon-container-denial">
                        <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/Vector (45).png') }}" alt="Time Back">
                    </div>
                    <h3>Time Back &<br>Reduced Hassle</h3>
                </div>

                <div class="benefit-card-denial">
                    <div class="icon-container-denial">
                        <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/stats 1 (5).png') }}" alt="Better Reports">
                    </div>
                    <h3>Clearer Trends<br>& Better Reports</h3>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats-section-denial">
            <div class="stats-header-denial">
                <h2>Stats of our Claim Denial Management Services</h2>
            </div>

            <div class="stats-content-denial">
                <div class="stats-text-denial">
                    <p>
                        Our Denial Management Services deliver measurable results that 
                        demonstrate the effectiveness of our approach. Practices benefit 
                        from a high appeal overturn rate, a strong first-submission pass 
                        rate, and noticeable revenue growth. These key performance 
                        metrics highlight how our strategies not only resolve denials 
                        quickly but also optimize the entire revenue cycle, ensuring faster 
                        reimbursements and improved financial outcomes for your practice.
                    </p>
                </div>

                <div class="stats-cards-denial">
                    <div class="stat-card-denial stat-card-small-denial">
                        <p class="stat-label-denial">Appeal<br>Overturn Rate</p>
                        <div class="stat-icon-denial">
                            <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/status1.png') }}" alt="Appeal Rate">
                        </div>
                        <h3 class="stat-value-denial">Almost 95%</h3>
                    </div>

                    <div class="stat-card-denial stat-card-middle-denial">
                         <p class="stat-label-denial">1st submission<br>pass rate</p>
                        <div class="stat-icon-denial">
                            <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/status2.png') }}" alt="Pass Rate">
                        </div>
                        <h3 class="stat-value-denial">About 83.35%</h3>
                    </div>

                    <div class="stat-card-denial stat-card-small-denial">
                        <p class="stat-label-denial">Revenue<br>Increase</p>
                        <div class="stat-icon-denial">
                            <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/status3.png') }}" alt="Revenue Growth">
                        </div>
                        <h3 class="stat-value-denial">Up to 37%</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose -->
        <section class="why-choose-section-denial">
            <div class="section-header-denial">
                <h2>Why Choose Our Medical Billing Services Denial Management?</h2>
            </div>

            <div class="content-wrapper-denial">
                <div class="image-container-denial">
                    <img src="{{ asset('assets/images/denial/Denial Management Page-imgs/whychoise.jpg') }}" alt="Medical Professionals">
                </div>

                <div class="text-content-denial">
                    <p>
                        Managing claim submissions, denials, resubmission rules, and first-level 
                        appeals can quickly pull time and focus away from patient care. You shouldn't 
                        have to struggle with denial workflow automation or navigate complex payer 
                        compliance requirements on your own.That's where our medical coding and denial management services come in. We 
                        analyze denial data in depth to identify root causes and prevent issues before 
                        they occur. By building proactive denial-prevention strategies across all 
                        specialties, clinics, and hospitals, we help improve first-pass resolution rates 
                        and strengthen overall revenue performance.
                    </p>
                </div>
            </div>
        </section>
  @include('partials.cta-section', [
    'title' => 'Ready to Streamline Your Billing?',
    'description' => 'We handle claims and coding so your team can focus on patients.',
    'buttonText' => 'Explore Solutions',
    'buttonLink' => url('contact-us.php')
])

        </section>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionCheckboxes = document.querySelectorAll('.accordion-checkbox-denial');
    
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
@endsection
