@extends('layouts.app')

@section('title', 'Specialty-Specific EHR Solutions - AMD SOL')
@section('meta_description', 'Tailored EHR workflows for every medical specialty. Maximize efficiency and revenue with our specialty-specific solutions.')
@section('meta_keywords', 'EHR, Specialty EHR, Medical Billing, Healthcare Solutions')

@section('content')
<style>
    /* Specialty EHR Page Specific Styles */
    .se-wrapper * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .text-center {
        text-align: center;
    }

    .se-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .se-wrapper h1, .se-wrapper h2, .se-wrapper h3 {
        color: #002147;
    }

    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url('{{ asset("assets/images/specialty-ehr/ehr-hero.jpg") }}');
        background-size: cover;
        background-position: right center;
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
            rgba(10, 25, 45, 0.95) 0%, 
            rgba(10, 25, 45, 0.85) 25%,
            rgba(10, 25, 45, 0.6) 45%,
            rgba(10, 25, 45, 0.3) 60%,
            rgba(10, 25, 45, 0.1) 75%,
            transparent 85%);
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

    .ehr-section {
        padding: 50px 0;
        background-color: #ffffff;
    }

    .ehr-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #002147;
        text-align: center;
    }

    .ehr-subtitle {
        font-size: 15px;
        color: #666;
        max-width: 600px;
        margin: 0 auto 20px;
        line-height: 1.4;
        text-align: center !important;
    }

    .ehr-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-bottom: 20px;
        /* padding-right: 20px; */ /* Removed */
        /* max-width: 1200px; */  /* Removed max-width to allow grid to span like hero */
        /* margin-left: auto; */
        /* margin-right: auto; */
    }

    .ehr-card {
        background: #fff;
        border: 2px solid #d1d5db;
        border-radius: 6px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 120px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .ehr-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        border-color: #002147;
    }

    .ehr-logo-img {
        max-width: 100%;
        max-height: 85%;
        object-fit: contain;
        transition: all 0.3s ease;
    }

    .ehr-card:hover .ehr-logo-img {
        transform: scale(1.03);
    }

    .ehr-explore-btn {
        background: #002147;
        color: #fff !important;
        padding: 10px 35px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        border: none;
    }

    .ehr-explore-btn:hover {
        background: #001a38;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 33, 71, 0.2);
    }

    .testimonials-section {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-header h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 10px;
    }

    .section-header p {
        font-size: 15px;
        color: #666;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .testimonial-card {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px;
        transition: all 0.3s ease;
        position: relative;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-color: #d0d0d0;
    }

    .quote-icon-top {
        margin-bottom: -2px;
        width: 40px;
    }
    
    .quote-icon-top img, .quote-icon-bottom img {
        width: 60%;
        height: auto;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 20px;
        min-height: 140px;
    }

    .quote-icon-bottom {
        text-align: right;
        margin-bottom: 20px;
        width: 40px;
        margin-left: auto;
    }

    .author-info {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-top: 20px;
        border-top: 1px solid #e0e0e0;
    }

    .author-avatar {
        width: 50px;
        height: 50px;
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
    }

    .author-name {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a2e;
        margin-bottom: 3px;
    }

    .author-title {
        font-size: 13px;
        color: #666;
        line-height: 1.4;
    }

    .features-section {
        max-width: 1200px;
        margin: 40px auto;
        background: #f8f9fa;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 40px;
    }

    .features-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        align-items: start;
    }

    .feature-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .feature-item:not(:last-child) {
        border-right: 2px solid #d0d0d0;
        padding-right: 40px;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feature-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .feature-content {
        flex: 1;
    }

    .feature-content p {
        font-size: 14px;
        line-height: 1.6;
        color: #555;
    }

    .ehr-container-custom {
        padding-left: 97px;
        padding-right: 97px;
        max-width: 100%;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .ehr-container-custom {
            padding-left: 50px;
            padding-right: 50px;
        }
    }

    @media (max-width: 768px) {
        .ehr-container-custom {
            padding-left: 30px;
            padding-right: 30px;
        }
    }

    @media (max-width: 480px) {
        .ehr-container-custom {
            padding-left: 20px;
            padding-right: 15px;
        }
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .hero-section { min-height: 400px; }
        .hero-content { padding-left: 50px; }
        .hero-section h1 { font-size: 36px; }
        .testimonials-grid { gap: 25px; }
        .features-container { gap: 30px; }
        .feature-item:not(:last-child) { padding-right: 30px; }
    }

    @media (max-width: 991px) {
        .ehr-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
        .ehr-section { padding: 20px 12px; }
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

        .testimonials-grid { grid-template-columns: 1fr; gap: 20px; }
        .features-container { grid-template-columns: 1fr; gap: 30px; }
        .feature-item:not(:last-child) { border-right: none; border-bottom: 2px solid #d0d0d0; padding-right: 0; padding-bottom: 30px; }
    }
    
    @media (max-width: 575px) {
        .ehr-grid { grid-template-columns: 1fr; }
        .ehr-card { height: 100px; }
    }
</style>

<div class="se-wrapper">
    <div class="se-container">
        <!-- Hero Section -->
        <section class="hero-section">
            <img src="{{ asset('assets/images/specialty-ehr/ehr-hero.jpg') }}" alt="Specialty EHR" class="mobile-hero-img" style="display: none;">
            <div class="hero-content">
                <h1>Electronic Health Record (EHR) Solutions</h1>
                <p>Streamline documentation, workflows, and billing for your healthcare practice.</p>
            </div>
        </section>

        <!-- EHR Logos Section -->
        <section class="ehr-section">
            <div class="ehr-container-custom">
                <div class="text-center">
                    <h2 class="ehr-title">We work with these EHRs</h2>
                    <p class="ehr-subtitle">
                        Our medical billing specialists know the workarounds of all the EHRs. We help you submit clean claims no matter which EHR you use.
                    </p>

                    <div class="ehr-grid">
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/advanceMd.jpg') }}" alt="AdvancedMD" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/careCloud.jpg') }}" alt="CareCloud" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/nextgen.jpg') }}" alt="NextGen" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/practice-fusion.jpg') }}" alt="Practice Fusion" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/progonCIS-1.jpg') }}" alt="ProgonCIS" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/ACharrislogo-ohxzf0388pokf3vw05kiv3vp7kphzla0j3aup75618@2x.jpg') }}" alt="Harris CareTracker" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Altera-2.jpg') }}" alt="Altera" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Evident-1.jpg') }}" alt="Evident" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Collaborate-MD-4.jpg') }}" alt="CollaborateMD" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/EMDs-2.jpg') }}" alt="eMDs" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Free-MED-1.jpg') }}" alt="FreeMED" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/GE-Healthcare-1.jpg') }}" alt="GE Healthcare" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Greenway-Health-1.jpg') }}" alt="Greenway Health" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Med-Host.jpg') }}" alt="MedHost" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Medgen-1.jpg') }}" alt="Medgen" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Meditech-1.jpg') }}" alt="Meditech" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/MicrosoftTeams-image-15@2x.jpg') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/MicrosoftTeams-image-161.png') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/MicrosoftTeams-image-18@2x-1.jpg') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/MicrosoftTeams-image-26@2x.jpg') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/MicrosoftTeams-image-28@2x-1.jpg') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/MicrosoftTeams-image-30@2x.jpg') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Mitochan-Systems-1.jpg') }}" alt="Mitochon Systems" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Nue-MD-1.jpg') }}" alt="NueMD" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Open-Emr-1.jpg') }}" alt="OpenEMR" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Open-MRS-1.jpg') }}" alt="OpenMRS" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Oracle-Cerner.jpg') }}" alt="Oracle Cerner" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/unnamed@2x-1.jpg') }}" alt="EHR Logo" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Web-Chart-1.jpg') }}" alt="WebChart" class="ehr-logo-img"></div>
                        <div class="ehr-card"><img src="{{ asset('assets/images/specialty-ehr/Zip-Chart-EMR.jpg') }}" alt="ZipChart" class="ehr-logo-img"></div>
                    </div>

                    <!-- <div class="mt-4 d-flex justify-content-center">
                        <a href="#" class="ehr-explore-btn">Explore More</a>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="section-header">
                <h2>Driving Growth for Healthcare Organizations</h2>
                <p>Trusted by Satisfied Providers Nationwide</p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="quote-icon-top"><img src="{{ asset('assets/images/specialty-ehr/Simplification (1).png') }}" alt="quote"></div>
                    <p class="testimonial-text">
                        The specialty-specific EHR system transformed our workflow completely. The intuitive interface and customized templates saved us hours every day. Our staff adapted quickly, and patient satisfaction has noticeably improved.
                    </p>
                    <div class="quote-icon-bottom"><img src="{{ asset('assets/images/specialty-ehr/Simplification (2).png') }}" alt="quote"></div>
                    <div class="author-info">
                        <div class="author-avatar"><img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" alt="Michael Anderson"></div>
                        <div class="author-details">
                            <div class="author-name">Michael Anderson</div>
                            <div class="author-title">Practice Manager<br>Wilson Creek Internal Medicine</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon-top"><img src="{{ asset('assets/images/specialty-ehr/Simplification (1).png') }}" alt="quote"></div>
                    <p class="testimonial-text">
                        Switching to this EHR was the best decision for our practice. The seamless integration with our billing system and real-time data access has streamlined operations. We've reduced errors and increased efficiency significantly.
                    </p>
                    <div class="quote-icon-bottom"><img src="{{ asset('assets/images/specialty-ehr/Simplification (2).png') }}" alt="quote"></div>
                    <div class="author-info">
                        <div class="author-avatar"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" alt="David Martinez"></div>
                        <div class="author-details">
                            <div class="author-name">David Martinez</div>
                            <div class="author-title">Office Manager<br>Idaho Kidney & Hypertension Institute</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                     <div class="quote-icon-top"><img src="{{ asset('assets/images/specialty-ehr/Simplification (1).png') }}" alt="quote"></div>
                    <p class="testimonial-text">
                        Outstanding support and functionality! The specialty-focused features are exactly what we needed. Documentation is faster, compliance is easier, and our providers can focus more on patient care rather than paperwork.
                    </p>
                    <div class="quote-icon-bottom"><img src="{{ asset('assets/images/specialty-ehr/Simplification (2).png') }}" alt="quote"></div>
                    <div class="author-info">
                        <div class="author-avatar"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" alt="Robert Thompson"></div>
                        <div class="author-details">
                            <div class="author-name">Robert Thompson</div>
                            <div class="author-title">Practice Manager<br>Harding Memorial Healthcare</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <div class="features-container">
                <div class="feature-item">
                    <div class="feature-icon"><img src="{{ asset('assets/images/specialty-ehr/1clip.png') }}" alt="Revenue"></div>
                    <div class="feature-content">
                        <p>Maximize your revenue potential with our 24/7 medical billing services.</p>
                    </div>
                </div>

                <div class="feature-item">
                     <div class="feature-icon"><img src="{{ asset('assets/images/specialty-ehr/clip2.png') }}" alt="Team"></div>
                    <div class="feature-content">
                        <p>Hire a team of experts who are well-versed with your EHR and improve the billing process.</p>
                    </div>
                </div>

                <div class="feature-item">
                     <div class="feature-icon"><img src="{{ asset('assets/images/specialty-ehr/Clip3.png') }}" alt="Audit"></div>
                    <div class="feature-content">
                        <p>Save $2,000 with our complimentary Billing Audit. Get insights based on 21 various KPIs to enhance cash flow.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
