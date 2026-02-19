@extends('layouts.app')

@section('content')
<style>
    .radiology-page-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .radiology-page-wrapper * {
        box-sizing: border-box;
    }

    .radiology-page-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .hero-section-radiology {
        width: 100%;
        max-width: 100%;
        min-height: 400px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/radiology/radiology-img/radiology.jpg') }}');
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
        .hero-section-radiology {
            min-height: auto;
            padding: 0 0 30px 0;
            background-position: right center;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }

        .hero-section-radiology::before {
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

    .hero-section-radiology::before {
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

    .hero-content-radiology {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-radiology h1 {
        font-size: 42px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-radiology p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-radiology {
            padding-left: 20px;
            padding-right: 20px;
        }
        .hero-section-radiology h1 {
            font-size: 28px;
        }
    }

    .radiology-benefits-section {
        padding: 60px 97px 40px;
        background-color: #ffffff;
        margin-bottom: 0;
    }

    .radiology-benefits-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .radiology-header-wrapper {
        text-align: center;
        margin-bottom: 60px;
    }

    .radiology-main-heading {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0a2540;
        margin-bottom: 12px;
        border: none;
    }

    .radiology-subtitle-text {
        font-size: 1.5rem;
        color: #000000;
    }

    .radiology-benefits-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin-top: 40px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .radiology-benefit-card {
        background: #F9F9F9;
        border: 1px solid #002147;
        border-radius: 12px;
        padding: 32px 24px;
        transition: all 0.3s ease;
        text-align: left;
    }

    .radiology-benefit-card:hover {
        box-shadow: 0 8px 24px rgba(0, 102, 255, 0.12);
        transform: translateY(-4px);
    }

    .radiology-icon-wrapper {
        width: 56px;
        height: 56px;
        margin-bottom: 20px;
    }

    .radiology-benefit-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .radiology-benefit-title {
        font-size: 2rem;
        font-weight: 600;
        color: #0a2540;
        margin-bottom: 12px;
    }

    .radiology-benefit-description {
        font-size: 1.5rem;
        color: #000000;
        line-height: 1.6;
    }

    .simplify-billing-wrapper {
        width: 100%;
        padding: 40px 97px;
        background-color: #fff;
        margin-bottom: 0;
    }

    .simplify-billing-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        max-width: 1200px;
        margin: 0 auto;
        align-items: center;
    }

    .simplify-main-heading {
        font-size: 32px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 25px;
        border: none;
        text-align: left;
    }

    .simplify-description-text {
        font-size: 16px;
        color: #666;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .simplify-features-list {
        list-style: none;
        padding: 0;
    }

    .simplify-features-list li {
        font-size: 16px;
        color: #333;
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
    }

    .simplify-features-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #002147;
        font-weight: bold;
        font-size: 20px;
    }

    .simplify-billing-image {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    @media (max-width: 968px) {
        .simplify-billing-grid {
            grid-template-columns: 1fr;
        }
    }

    .healthcare-services-wrapper {
        width: 100%;
        padding: 40px 97px;
        background: #002147;
        margin-bottom: 0;
    }

    .healthcare-services-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .healthcare-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .healthcare-image-container {
        width: 100%;
    }

    .healthcare-doctor-image {
        width: 100%;
        border-radius: 20px;
        object-fit: cover;
    }

    .healthcare-text-section {
        color: #FFFFFF;
    }

    .healthcare-main-heading {
        font-size: 34px;
        font-weight: 700;
        margin-bottom: 25px;
        border: none;
        color: white !important;
    }

    .healthcare-description-text {
        font-size: 16px;
        line-height: 1.8;
        color: #ffffff;
    }

    @media (max-width: 968px) {
        .healthcare-content-grid {
            grid-template-columns: 1fr;
        }
    }

    .impact-numbers-wrapper {
        width: 100%;
        padding: 40px 20px;
        background-color: #002147;
        margin-top: 0;
        margin-bottom: 0;
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
    }

    @media (max-width: 768px) {
        .impact-numbers-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .faq-section {
        padding: 40px 97px;
        background-color: #fff;
        text-align: center;
        margin-bottom: 0;
    }

    .faq-section h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 10px;
        border: none;
    }

    .faq-container {
        max-width: 900px;
        margin: 40px auto 0;
        text-align: left;
    }

    .faq-item {
        background: #f5f5f5;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 15px;
        overflow: hidden;
    }

    .faq-item input[type="checkbox"] {
        display: none;
    }

    .faq-question {
        padding: 20px 30px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 500;
        font-size: 1.5rem;
    }

    .faq-icon {
        font-style: normal;
        font-size: 1.8rem;
        font-weight: 300;
        line-height: 1;
        min-width: 20px;
        text-align: center;
    }

    .faq-icon::before {
        content: "+";
    }

    .faq-item input[type="checkbox"]:checked + .faq-question .faq-icon::before {
        content: "−";
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        padding: 0 30px;
        background: #fff;
        border-top: 1px solid #e0e0e0;
    }

    .faq-item input[type="checkbox"]:checked ~ .faq-answer {
        max-height: 500px;
        padding: 25px 30px;
    }

    .cta-container-radiology {
        background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
        border-radius: 40px;
        padding: 60px 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        min-height: 280px;
        margin: 20px auto 40px;
        max-width: 1200px;
    }

    .cta-container-radiology::before {
        content: '';
        position: absolute;
        top: -44px;
        right: 0;
        width: 100%;
        height: 100%;
        background-image: url("{{ asset('assets/images/radiology/radiology-img/wave.png') }}");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: right center;
        opacity: 0.4;
        z-index: 1;
    }

    .cta-content-radiology {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .cta-content-radiology h2 {
        font-size: 40px;
        font-weight: 700;
        color: white !important;
        margin-bottom: 12px;
        border: none;
    }

    .cta-content-radiology p {
        font-size: 20px;
        color: #FFFFFF;
        opacity: 0.9;
        margin-bottom: 25px;
    }

    .cta-request-btn-radiology {
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
        .radiology-benefits-section {
            padding: 40px 50px 30px;
        }

        .simplify-billing-wrapper {
            padding: 30px 50px;
        }

        .healthcare-services-wrapper {
            padding: 30px 50px;
        }

        .faq-section {
            padding: 30px 50px;
        }

        .radiology-benefits-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 768px) {
        .radiology-benefits-section {
            padding: 30px 30px 20px;
        }

        .simplify-billing-wrapper {
            padding: 20px 30px;
        }

        .healthcare-services-wrapper {
            padding: 20px 30px;
        }

        .faq-section {
            padding: 20px 30px;
        }

        .radiology-main-heading {
            font-size: 2rem;
        }

        .radiology-subtitle-text {
            font-size: 1.2rem;
        }

        .radiology-benefit-title {
            font-size: 1.5rem;
        }

        .radiology-benefit-description {
            font-size: 1.2rem;
        }

        .simplify-main-heading {
            font-size: 26px;
        }

        .healthcare-main-heading {
            font-size: 28px;
        }

        .faq-section h2 {
            font-size: 2rem;
        }

        .faq-question {
            font-size: 1.2rem;
            padding: 15px 20px;
        }
    }

    @media (max-width: 640px) {
        .radiology-benefits-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .radiology-benefits-section {
            padding: 20px 20px 15px;
        }

        .simplify-billing-wrapper {
            padding: 15px 20px;
        }

        .healthcare-services-wrapper {
            padding: 15px 20px;
        }

        .faq-section {
            padding: 15px 20px;
        }

        .radiology-main-heading {
            font-size: 1.8rem;
        }

        .radiology-subtitle-text {
            font-size: 1rem;
        }

        .radiology-benefit-title {
            font-size: 1.3rem;
        }

        .radiology-benefit-description {
            font-size: 1rem;
        }

        .simplify-main-heading {
            font-size: 22px;
        }

        .healthcare-main-heading {
            font-size: 24px;
        }

        .faq-section h2 {
            font-size: 1.8rem;
        }

        .faq-question {
            font-size: 1rem;
            padding: 12px 15px;
        }

        .faq-icon {
            font-size: 1.5rem;
        }
    }
</style>

<div class="radiology-page-wrapper">
    <div class="radiology-page-container">
        <!-- Hero Section -->
        <section class="hero-section-radiology">
            <img src="{{ asset('assets/images/radiology/radiology-img/radiology.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-radiology">
                <h1>Optimizing Radiology Billing for Maximum Efficiency</h1>
                <p>Streamlined claims, accurate coding, and faster reimbursements tailored for radiology practices.</p>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="radiology-benefits-section">
            <div class="radiology-benefits-container">
                <div class="radiology-header-wrapper">
                    <h2 class="radiology-main-heading">How Your Radiology Practice Benefits</h2>
                    <p class="radiology-subtitle-text">Purpose-built billing support that improves efficiency, accuracy, and financial outcomes.</p>
                </div>
                <div class="radiology-benefits-grid">
                    <div class="radiology-benefit-card">
                        <div class="radiology-icon-wrapper">
                            <img src="{{ asset('assets/images/radiology/radiology-img/Vector (13).png') }}" alt="Fast Processing" class="radiology-benefit-image">
                        </div>
                        <h3 class="radiology-benefit-title">Faster Claim Processing</h3>
                        <p class="radiology-benefit-description">Reduce delays with optimized workflows and timely submissions.</p>
                    </div>
                    <div class="radiology-benefit-card">
                        <div class="radiology-icon-wrapper">
                            <img src="{{ asset('assets/images/radiology/radiology-img/Vector (19).png') }}" alt="Coding" class="radiology-benefit-image">
                        </div>
                        <h3 class="radiology-benefit-title">Accurate Radiology Coding</h3>
                        <p class="radiology-benefit-description">Precise CPT, ICD, and modifier usage for all imaging services.</p>
                    </div>
                    <div class="radiology-benefit-card">
                        <div class="radiology-icon-wrapper">
                            <img src="{{ asset('assets/images/radiology/radiology-img/Vector (12).png') }}" alt="Lower Denials" class="radiology-benefit-image">
                        </div>
                        <h3 class="radiology-benefit-title">Lower Denial Rates</h3>
                        <p class="radiology-benefit-description">Proactive follow-ups and denial management to protect revenue.</p>
                    </div>
                    <div class="radiology-benefit-card">
                        <div class="radiology-icon-wrapper">
                            <img src="{{ asset('assets/images/radiology/radiology-img/stats 1 (1).png') }}" alt="Visibility" class="radiology-benefit-image">
                        </div>
                        <h3 class="radiology-benefit-title">Real-Time Visibility</h3>
                        <p class="radiology-benefit-description">Clear reporting to track performance and financial outcomes.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Challenges Section -->
        <div class="simplify-billing-wrapper">
            <div class="simplify-billing-grid">
                <div class="simplify-text-section">
                    <h2 class="simplify-main-heading">Common Challenges in Radiology Billing</h2>
                    <p class="simplify-description-text">
                        Radiology practices operate in a high-volume, detail-driven billing
                        environment where accuracy and consistency are critical. Without
                        streamlined workflows, billing operations can quickly become difficult
                        to manage, impacting both efficiency and financial performance.
                    </p>
                    <ul class="simplify-features-list">
                        <li>Frequent payer rule and policy changes</li>
                        <li>Procedure-specific coding complexity</li>
                        <li>Ongoing claim follow-ups and rework</li>
                        <li>Limited visibility into billing status</li>
                    </ul>
                </div>
                <div class="simplify-image-section">
                    <img src="{{ asset('assets/images/radiology/radiology-img/radiology-hero.jpg') }}" alt="Radiology Professional" class="simplify-billing-image">
                </div>
            </div>
        </div>

        <!-- Built Section -->
        <div class="healthcare-services-wrapper">
            <div class="healthcare-services-container">
                <div class="healthcare-content-grid">
                    <div class="healthcare-image-container">
                        <img src="{{ asset('assets/images/radiology/radiology-img/build.jpg') }}" alt="Accuracy and Compliance" class="healthcare-doctor-image">
                    </div>
                    <div class="healthcare-text-section">
                        <h2 class="healthcare-main-heading">Built for Accuracy, Compliance, and Consistency</h2>
                        <p class="healthcare-description-text">
                            We follow industry best practices and payer-specific guidelines to
                            ensure every radiology claim is accurate and compliant. Our team
                            stays updated on coding changes, documentation standards, and
                            reimbursement policies to minimize errors and denials. Rigorous
                            quality checks and validation processes enhance audit readiness
                            and reduce administrative risks. By maintaining consistent
                            compliance-driven workflows, we protect your practice from costly
                            rework or penalties. This approach ensures reliable reimbursements
                            and long-term financial stability for your radiology operations.
                        </p>
                    </div>
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

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>FAQs</h2>
            <p class="subtitle">We care about your questions</p>
            <div class="faq-container">
                <div class="faq-item">
                    <input type="checkbox" id="faq1">
                    <label for="faq1" class="faq-question"><span>What are the most common reasons for radiology claim denials?</span><span class="faq-icon"></span></label>
                    <div class="faq-answer"><p>Common reasons for radiology claim denials include missing or incorrect patient information, outdated or invalid insurance details, lack of prior authorization, incorrect CPT or ICD-10 codes, and failure to meet medical necessity requirements.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq2">
                    <label for="faq2" class="faq-question"><span>What radiology-specific modifiers should I understand and use?</span><span class="faq-icon"></span></label>
                    <div class="faq-answer"><p>Key radiology-specific modifiers include -26 (professional component), -TC (technical component), -RT (right side), -LT (left side), and -59 (distinct procedural service). Understanding these helps ensure accurate billing and claim processing.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq3">
                    <label for="faq3" class="faq-question"><span>What are typical billing challenges with interventional radiology</span><span class="faq-icon"></span></label>
                    <div class="faq-answer"><p>Billing challenges in interventional radiology often include complex coding requirements, ensuring proper documentation of procedures, managing multiple billing components (technical and professional), and navigating payer-specific guidelines for these specialized services.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq4">
                    <label for="faq4" class="faq-question"><span>Which CPT codes are most commonly used for radiology?</span><span class="faq-icon"></span></label>
                    <div class="faq-answer"><p>Commonly used CPT codes in radiology include 70450 (CT scan of head without contrast), 72130 (X-ray of spine), 71250 (chest X-ray), and 77012 (fluoroscopy). These codes are frequently used for routine diagnostic imaging procedures.</p></div>
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

    // FAQ auto-close functionality
    const faqCheckboxes = document.querySelectorAll('.faq-item input[type="checkbox"]');
    
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
