@extends('layouts.app')

@section('content')
<!-- Hero Section - AMDSOL Style -->
<section class="hero-section-new">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 order-2 order-lg-1">
                <span class="hero-badge">MEDICAL BILLING SERVICES</span>
                <h1 class="hero-main-title">
                    <span class="text-primary-gradient">The Medical Billing Service</span><br>
                    Provider for <span class="usa-underline">USA</span> Healthcare
                </h1>
                <p class="hero-description">
                    AMDSOL is the USA's top medical billing firm – deploying the best practices in medical billing and coding for physicians looking to outsource billing and coding to an expert 3rd party billing agency.
                </p>
                <p class="hero-description-small">
                    Our certified medical coders and billers help healthcare organizations recover Aged Receivables and resolve insurance Claim Denials, as well.
                </p>
                
                <!-- Inline Form -->
                <form action="{{ url('contact-us.php') }}" method="POST" class="hero-inline-form">
                    @csrf
                    <div class="form-row-inline">
                        <input type="text" name="name" class="form-input-hero" placeholder="Name" required>
                        <input type="email" name="email" class="form-input-hero" placeholder="Email" required>
                        <input type="text" name="phone" class="form-input-hero" placeholder="Phone Number" required>
                    </div>
                    <div class="form-action-row">
                        <button type="submit" class="btn-consultation">GET A FREE REVENUE ADUIT</button>
                        <div class="google-rating">
                            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Google" class="google-logo">
                            <div class="rating-info">
                                <span class="rating-text">Google Rating</span>
                                <div class="stars-row">
                                    <span class="rating-number">4.8</span>
                                    <span class="stars">★★★★★</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 order-1 order-lg-2">
                <div class="hero-image-wrapper">
                    <!-- Floating Icons -->
                    <div class="floating-icon icon-cloud">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="floating-icon icon-ai">
                        <i class="fa fa-heartbeat"></i>
                        <span>RCM</span>
                    </div>
                    <div class="floating-icon icon-rocket">
                        <i class="fa fa-hospital-o"></i>
                    </div>
                    
                    <!-- Circular Badge -->
                    <div class="circular-badge">
                        <svg viewBox="0 0 200 200" class="circular-text-svg">
                            <defs>
                                <path id="circlePath" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0"/>
                            </defs>
                            <text>
                                <textPath href="#circlePath" class="circular-text-path">
                                    SPECIALTY - SPECIFIC • 99% CLEAN CLAIMS •
                                </textPath>
                            </text>
                        </svg>
                    </div>
                    
                    <!-- Doctor Image - Dynamic from Slider (visible on all devices) -->
                    @if(isset($banners) && $banners->count() > 0)
                        <img src="{{ asset('images/banners/' . $banners->first()->images) }}" alt="{{ $banners->first()->alt ?? 'Medical Professional' }}" class="hero-doctor-img">
                    @else
                        <img src="{{ asset('images/hero_doctor.png') }}" alt="Medical Professional" class="hero-doctor-img">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Strip - Dark Blue -->
<!-- Trust Bar -->
<div class="trust-bar-stats">
    <div class="container">
        <div class="trust-stats-wrapper">
            <div class="trust-stat-item">
                <div class="trust-stat-icon">
                    <i class="fa fa-stethoscope"></i>
                </div>
                <div class="trust-stat-text">
                    <span class="trust-stat-title">Trusted by</span>
                    <span class="trust-stat-value">500+ Physicians</span>
                </div>
            </div>
            
            <div class="trust-stat-item">
                <div class="trust-stat-icon">
                    <i class="fa fa-plus-square"></i>
                </div>
                <div class="trust-stat-text">
                    <span class="trust-stat-title">Catering to</span>
                    <span class="trust-stat-value">40+ Specialties</span>
                </div>
            </div>
            
            <div class="trust-stat-item">
                <div class="trust-stat-icon">
                    <i class="fa fa-code"></i>
                </div>
                <div class="trust-stat-text">
                    <span class="trust-stat-title">1100+ Certified</span>
                    <span class="trust-stat-value">Medical Billers & Coders</span>
                </div>
            </div>
            
            <div class="trust-stat-item">
                <div class="trust-stat-icon">
                    <i class="fa fa-shield"></i>
                </div>
                <div class="trust-stat-text">
                    <span class="trust-stat-title">HIPAA</span>
                    <span class="trust-stat-value">Compliant</span>
                </div>
            </div>
            
            <div class="trust-stat-item">
                <div class="trust-stat-icon trust-stat-badge-img">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="trust-stat-text">
                    <span class="trust-stat-title">SOC2</span>
                    <span class="trust-stat-value">Certified</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Overview Section -->
<section class="services-overview-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title-main">Overview of <span class="text-primary-gradient">Medical Billing<br>Services</span> in the USA</h2>
            <p class="section-description">Medical Billing Services provide organized solutions to assist with billing for healthcare providers by transforming clinical data into billable insurance claims. Through electronic medical billing and structuring clinical billing processes, healthcare providers are able to accurately capture diagnoses, procedures and charges and submit them to payers.</p>
            <p class="section-description-sub">Beyond claim creation, medical billing typically involves the use of physician accounts management solutions and/or medical billing management. This may include tracking of patient claims invoicing, resolving claim rejections, tracking of outstanding balances and providing financial reports to facilitate improved Revenue Cycle Planning for healthcare organizations. Core components of this service include:</p>

           
      </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card-hover">
                    <div class="service-icon-box">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <h4 class="service-card-title">Medical Billing Consultation</h4>
                    <p class="service-card-text">Expert patient billers offer the most complete medical billing services that entail handling check-in/out, claims, payments, and denials for health care providers.</p>
                    <a href="#" class="service-explore-btn">Explore More</a>
                </div>
      </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card-hover">
                    <div class="service-icon-box">
                        <i class="fa fa-code"></i>
                    </div>
                    <h4 class="service-card-title">Medical Coding</h4>
                    <p class="service-card-text">Clinical coding officers translate patient services into ICD-10 and CPT codes and generate a clean "super-bill" for the biller to submit to the insurance payer.</p>
                    <a href="#" class="service-explore-btn">Explore More</a>
                </div>
      </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card-hover">
                    <div class="service-icon-box">
                        <i class="fa fa-id-card"></i>
                    </div>
                    <h4 class="service-card-title">Provider Credentialing</h4>
                    <p class="service-card-text">Provider enrollment services by our credentialing specialists help healthcare providers join the network of desirable payors with maximum privileges.</p>
                    <a href="#" class="service-explore-btn">Explore More</a>
                </div>
      </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card-hover">
                    <div class="service-icon-box">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <h4 class="service-card-title">Healthcare RCM</h4>
                    <p class="service-card-text">Revenue cycle management services are specialty-specific, which means a physician's bespoke demands are met by a dedicated medical biller.</p>
                    <a href="#" class="service-explore-btn">Explore More</a>
                </div>
            </div>
    </div>
  </div>
</section>


<!-- Software Partners -->
<!-- <section class="py-5 bg-white border-bottom">
    <div class="container text-center">
        <p class="mb-4 text-uppercase font-weight-bold" style="letter-spacing: 2px; color: #aaa; font-size: 13px;">Working with major software vendors</p>
        <div class="d-flex flex-wrap justify-content-center align-items-center" style="gap: 40px; filter: grayscale(1); opacity: 0.5;">
            <h4 class="mb-0">eClinicalWorks</h4>
            <h4 class="mb-0">AthenaHealth</h4>
            <h4 class="mb-0">AdvancedMD</h4>
            <h4 class="mb-0">Kareo</h4>
            <h4 class="mb-0">NextGen</h4>
            <h4 class="mb-0">DrChrono</h4>
        </div>
    </div>
</section> -->




<!-- Expertise Full Width Section -->
<section class="expertise-section">
    <div class="container">
        <div class="indigo-box">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2>Transforming Your Practice <br>Through Technical Expertise</h2>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> 24/7 Live Patient Support for all 32+ specialties.</li>
                        <li><i class="fa fa-check-circle"></i> Dedicated Account Managers for personalized attention.</li>
                        <li><i class="fa fa-check-circle"></i> Real-time analytics and financial reporting dashbaords.</li>
                        <li><i class="fa fa-check-circle"></i> Seamless integration with leading EHR/EMR platforms.</li>
                    </ul>
                    <a href="{{ url('contact-us.php') }}" class="btn btn-light mt-4 px-5 py-3" style="color: var(--primary); font-weight: 700; border-radius: 8px; font-size: 16px; letter-spacing: 0.5px;">GET A FREE QUOTE</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="{{ asset('assets/images/doctors-icon.png') }}" alt="Expertise" class="img-fluid" style="filter: brightness(0) invert(1); opacity: 0.1;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specialties Section -->
<section class="specialties-section">
    <div class="container">
        <h2 class="specialties-title text-center">
            Which Medical Specialties Do We Serve<br>
            with Expert Billing?
        </h2>
        <p class="specialties-subtitle text-center">
            Our medical billing company caters to a wide range of specialties, spanning from primary care to surgical centers,
            serving small and mid-sized practices.
        </p>

        <div class="specialties-grid">
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/GYN.png') }}" alt="OB/GYN">
                </div>
                <div class="specialty-name">OB/GYN</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Neurology.png') }}" alt="Neurology">
                </div>
                <div class="specialty-name">Neurology</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Orthopedics.png') }}" alt="Orthopedics">
                </div>
                <div class="specialty-name">Orthopedics</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Podiatry.png') }}" alt="Podiatry">
                </div>
                <div class="specialty-name">Podiatry</div>
            </div>

            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Cardiology.png') }}" alt="Cardiology">
                </div>
                <div class="specialty-name">Cardiology</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Nephrology.png') }}" alt="Nephrology">
                </div>
                <div class="specialty-name">Nephrology</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Psychiatry.png') }}" alt="Psychiatry">
                </div>
                <div class="specialty-name">Psychiatry</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Primary-Care.png') }}" alt="Primary Care">
                </div>
                <div class="specialty-name">Primary Care</div>
            </div>

            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Endocrinology.png') }}" alt="Endocrinology">
                </div>
                <div class="specialty-name">Endocrinology</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Internal-Medicine.png') }}" alt="Internal Medicine">
                </div>
                <div class="specialty-name">Internal Medicine</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Pain-Management.png') }}" alt="Pain Management">
                </div>
                <div class="specialty-name">Pain Management</div>
            </div>
            <div class="specialty-item">
                <div class="specialty-icon">
                    <img src="{{ asset('assets/images/servicess/Infectious-Disease.png') }}" alt="Infectious Disease">
                </div>
                <div class="specialty-name">Infectious Disease</div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('specialties') }}" class="specialties-cta-btn">
                View More Specialties
            </a>
        </div>
    </div>
</section>

<!-- EHR Section -->
<section class="ehr-section">
    <div class="container text-center">
        <h2 class="ehr-title">We work with these EHRs</h2>
        <p class="ehr-subtitle">
            Our medical billing specialists know the workarounds of all the EHRs. We help you submit clean claims no matter which EHR you use.
        </p>

        <div class="ehr-grid">
            <!-- AdvancedMD -->
            <div class="ehr-card">
                <img src="{{ asset('assets/images/erp/advanceMd.jpg') }}" alt="AdvancedMD" class="ehr-logo-img">
            </div>
            <!-- CareCloud -->
            <div class="ehr-card">
                <img src="{{ asset('assets/images/erp/careCloud.jpg') }}" alt="CareCloud" class="ehr-logo-img">
            </div>
            <!-- Nextgen -->
            <div class="ehr-card">
                <img src="{{ asset('assets/images/erp/nextgen.jpg') }}" alt="NextGen" class="ehr-logo-img">
            </div>
            <!-- Practice Fusion -->
            <div class="ehr-card">
                <img src="{{ asset('assets/images/erp/practice-fusion.jpg') }}" alt="Practice Fusion" class="ehr-logo-img">
            </div>
            <!-- ProgonCIS -->
            <div class="ehr-card">
                <img src="{{ asset('assets/images/erp/progonCIS-1.jpg') }}" alt="ProgonCIS" class="ehr-logo-img">
            </div>
            <!-- Harris CareTracker -->
            <div class="ehr-card">
                <img src="{{ asset('assets/images/erp/ACharrislogo-ohxzf0388pokf3vw05kiv3vp7kphzla0j3aup75618@2x.jpg') }}" alt="Harris CareTracker" class="ehr-logo-img">
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ url('electronic-health-records') }}" class="ehr-explore-btn">Explore More</a>
        </div>
    </div>
</section>

<!-- AI Dashboard Section -->
<section class="ai-dashboard-section">
    <div class="container">
        <h2 class="dashboard-slider-title">How AMDSOL's AI Agents Can Help You Automate Medical Billing?</h2>
        
        <div id="aiDashboardCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="bottom: -50px;">
                <li data-target="#aiDashboardCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#aiDashboardCarousel" data-slide-to="1"></li>
                <li data-target="#aiDashboardCarousel" data-slide-to="2"></li>
                <li data-target="#aiDashboardCarousel" data-slide-to="3"></li>
                <li data-target="#aiDashboardCarousel" data-slide-to="4"></li>
                <li data-target="#aiDashboardCarousel" data-slide-to="5"></li>
                <li data-target="#aiDashboardCarousel" data-slide-to="6"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- Slide 1: DEXA -->
                <div class="item active">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>DEXA – Denial Experience and Analytics Agent</h3>
                            <p>DEXA revolutionizes denial management by turning payer rejections into revenue opportunities. This AI agent detects, analyzes, and resolves denials in real time. <strong>DEXA documents each call outcome</strong> in real time and <strong>updates claim statuses</strong> automatically in the EHR or billing software.</p>
                            <p>More importantly, this AI RCM tool <strong>auto-categorizes</strong> critical denials, generates appeal letters, and even calls payers to verify claim details.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/DEXA-Dashboard.webp') }}" alt="DEXA Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 2: CLAIR -->
                <div class="item">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>CLAIR – Claim Status and Insurance Follow-up Agent</h3>
                            <p>CLAIR automates the tedious task of following up on outstanding claims. It <strong>communicates directly with insurance portals</strong> to retrieve real-time adjudication status, reducing the need for manual follow-up calls.</p>
                            <p>By identifying bottlenecks early, CLAIR ensures that <strong>unpaid claims are addressed immediately</strong>, significantly shortening your AR days and improving cash flow.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/CLAIR-Dashboard.webp') }}" alt="CLAIR Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 3: CODIN -->
                <div class="item">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>CODIN – AI-powered Medical Coding Agent</h3>
                            <p>CODIN uses advanced NLP to scan clinical documentation and <strong>assign accurate ICD-10 and CPT codes</strong>. It minimizes human error and ensures compliance with ever-changing coding guidelines.</p>
                            <p>This intelligent agent <strong>flags potential coding issues</strong> before submission, drastically reducing the chances of medical necessity denials.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/CODIN-Dashboard.webp') }}" alt="CODIN Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 4: ARIS -->
                <div class="item">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>ARIS – Accounts Receivable Insurance Specialist</h3>
                            <p>ARIS specializes in managing your aging accounts. It <strong>prioritizes high-value claims</strong> and those nearing timely filing limits, ensuring no revenue is left on the table.</p>
                            <p>With ARIS, your team can focus on complex cases while the AI handles <strong>routine AR tasks and reporting</strong> with precision and speed.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/ARIS-Dashboard.webp') }}" alt="ARIS Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 5: ELIXA -->
                <div class="item">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>ELIXA – Eligibility and Insurance Verification Agent</h3>
                            <p>ELIXA ensures that every patient's insurance is <strong>verified before the appointment</strong>. It checks coverage, co-pays, and deductibles in seconds, preventing eligibility-related denials.</p>
                            <p>By automating the front-end of the revenue cycle, ELIXA <strong>enhances patient experience</strong> and reduces administrative burden on your front-desk staff.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/ELIXA-Dashboard.webp') }}" alt="ELIXA Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 6: PRIA -->
                <div class="item">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>PRIA – Prior Authorization Agent</h3>
                            <p>PRIA streamlines the complex prior authorization process. It <strong>collects required clinical data</strong> and submits requests to payers automatically, tracking them until approval is received.</p>
                            <p>With PRIA, you can <strong>reduce treatment delays</strong> and ensure that all services rendered are pre-approved for payment.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/PRIA-Dashboard.webp') }}" alt="PRIA Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>

                <!-- Slide 7: REMITA -->
                <div class="item">
                    <div class="dashboard-slide-container">
                        <div class="dashboard-info">
                            <h3>REMITA – Payment Posting and Remittance Advice Agent</h3>
                            <p>REMITA automates the posting of payments and adjustments from ERAs and EOBs. It <strong>reconciles payments against claims</strong> with 100% accuracy, highlighting any discrepancies.</p>
                            <p>Speed up your closing process and <strong>get real-time visibility</strong> into your practice's financial health with REMITA's intelligent posting.</p>
                            <a href="#" class="dashboard-btn">See How AI Agents Can Help</a>
                        </div>
                        <div class="dashboard-image-box">
                            <img src="{{ asset('assets/images/dashboard/REMITA-Dashboard.webp') }}" alt="REMITA Dashboard" class="dashboard-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#aiDashboardCarousel" data-slide="prev" style="background: none; width: 5%;">
                <span class="fa fa-chevron-left" style="position: absolute; top: 50%; left: -20px; font-size: 30px;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#aiDashboardCarousel" data-slide="next" style="background: none; width: 5%;">
                <span class="fa fa-chevron-right" style="position: absolute; top: 50%; right: -20px; font-size: 30px;"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>



<!-- CRADD Section -->


<!-- Circular Workflow Section -->
<section class="circular-workflow-section">
    <div class="container">
        <h2 class="circular-workflow-title text-center">
            Medical <span class="text-primary-gradient">Billing</span> Work Flow
        </h2>
        <p class="circular-workflow-subtitle text-center">
            A comprehensive 9-step circular methodology that ensures excellence in medical billing and revenue cycle management
        </p>

        <div class="circular-workflow-wrapper">
            <div class="circular-workflow-diagram">
                <!-- Center Text -->
                <div class="circular-workflow-center">
                    <h3>MEDICAL BILLING</h3>
                    <h4>WORK FLOW</h4>
                </div>

                <!-- Step 1: Insurance Verification -->
                <div class="circular-step step-1">
                    <div class="circular-step-content">
                        <div class="circular-step-number">01</div>
                        <i class="fa fa-shield"></i>
                        <h5>Insurance<br>Verification</h5>
                    </div>
                </div>

                <!-- Step 2: Patient Demographic Entry -->
                <div class="circular-step step-2">
                    <div class="circular-step-content">
                        <div class="circular-step-number">02</div>
                        <i class="fa fa-user"></i>
                        <h5>Patient<br>Demographic<br>Entry</h5>
                    </div>
                </div>

                <!-- Step 3: CPT & ICD-10 Coding -->
                <div class="circular-step step-3">
                    <div class="circular-step-content">
                        <div class="circular-step-number">03</div>
                        <i class="fa fa-code"></i>
                        <h5>CPT & ICD-10<br>Coding</h5>
                    </div>
                </div>

                <!-- Step 4: Charge Entry -->
                <div class="circular-step step-4">
                    <div class="circular-step-content">
                        <div class="circular-step-number">04</div>
                        <i class="fa fa-calculator"></i>
                        <h5>Charge<br>Entry</h5>
                    </div>
                </div>

                <!-- Step 5: Claim Submission -->
                <div class="circular-step step-5">
                    <div class="circular-step-content">
                        <div class="circular-step-number">05</div>
                        <i class="fa fa-file-text"></i>
                        <h5>Claim<br>Submission</h5>
                    </div>
                </div>

                <!-- Step 6: Payment Posting -->
                <div class="circular-step step-6">
                    <div class="circular-step-content">
                        <div class="circular-step-number">06</div>
                        <i class="fa fa-money"></i>
                        <h5>Payment<br>Posting</h5>
                    </div>
                </div>

                <!-- Step 7: A/R Follow Up -->
                <div class="circular-step step-7">
                    <div class="circular-step-content">
                        <div class="circular-step-number">07</div>
                        <i class="fa fa-desktop"></i>
                        <h5>A/R<br>Follow Up</h5>
                    </div>
                </div>

                <!-- Step 8: Denial Management -->
                <div class="circular-step step-8">
                    <div class="circular-step-content">
                        <div class="circular-step-number">08</div>
                        <i class="fa fa-cog"></i>
                        <h5>Denial<br>Management</h5>
                    </div>
                </div>

                <!-- Step 9: Reporting -->
                <div class="circular-step step-9">
                    <div class="circular-step-content">
                        <div class="circular-step-number">09</div>
                        <i class="fa fa-bar-chart"></i>
                        <h5>Reporting</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- Dedicated Accounts Managers Section -->
<section class="dedicated-accounts-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="dedicated-accounts-image-wrap">
                    <div class="dedicated-accounts-circle"></div>
                    <img src="{{ asset('assets/images/dedicated-accounts-doctors.webp') }}" alt="Dedicated Accounts Managers" class="dedicated-accounts-img">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="dedicated-accounts-title">
                    Dedicated Accounts Managers &amp; Expert<br>
                    <span class="text-primary-gradient">Medical Billers for Health Centers</span>
                </h2>
                <p class="dedicated-accounts-text">
                    Healthcare organizations are at the heart of our medical billing and collections team. From primary care physicians to specialty clinics,
                    our dedicated clinical coding officers and claims examiners implement a precision-driven approach so that revenue flows smoothly and claim
                    denials fade away.
                </p>

                <div class="row g-3 dedicated-accounts-cards">
                    <div class="col-md-12">
                        <div class="dedicated-accounts-card dedicated-accounts-card-negative">
                            <div class="dac-icon dac-icon-negative">
                                <span>&times;</span>
                            </div>
                            <p class="mb-0">
                                Traditional agencies have a 50% failure rate with provider credentialing and patient billing.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="dedicated-accounts-card dedicated-accounts-card-positive">
                            <div class="dac-icon dac-icon-positive">
                                <span>&check;</span>
                            </div>
                            <p class="mb-0">
                                Our medical billing organization has a 97% pass rate with support for denied claims as well.
                            </p>
                        </div>
                    </div>
                </div>

                <a href="{{ url('contact-us.php') }}" class="btn btn-outline-primary dedicated-accounts-cta">
                    Claim Free Practice Audit
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Recent Blogs -->
<!-- Knowledge Center Section -->
<section class="knowledge-center-section">
    <div class="container">
        <h2 class="knowledge-title">Knowledge Center</h2>
        <p class="knowledge-subtitle">
            Get the latest healthcare industry insights to learn more about making your practice more profitable.
        </p>

        <div class="knowledge-grid">
            <!-- Articles -->
            <div class="knowledge-card">
                <div class="knowledge-card-header" style="background-image: url('{{ asset('assets/images/6b2eb-image-1.jpg') }}');">
                    <h3>Articles</h3>
                </div>
                <div class="knowledge-card-body">
                    <p>Discover health IT news and learn more about the ongoing trends around you with our article hub!</p>
                    <a href="{{ url('blog') }}" class="knowledge-btn">View Articles</a>
                </div>
            </div>

            <!-- Case Studies -->
            <div class="knowledge-card">
                <div class="knowledge-card-header" style="background-image: url('{{ asset('assets/images/40e33-image-3.jpg') }}');">
                    <h3>Case Studies</h3>
                </div>
                <div class="knowledge-card-body">
                    <p>Discover how AMDSol has helped medical practices overcome their billing challenges.</p>
                    <a href="{{ url('case-studies') }}" class="knowledge-btn">View Case Studies</a>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="knowledge-card">
                <div class="knowledge-card-header" style="background-image: url('{{ asset('assets/images/c3e47-testim.jpg') }}');">
                    <h3>Testimonials</h3>
                </div>
                <div class="knowledge-card-body">
                    <p>Make informed decisions about your practice success with real-time feedback. Explore Clients' thoughts!</p>
                    <a href="#" class="knowledge-btn">View Testimonials</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
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
