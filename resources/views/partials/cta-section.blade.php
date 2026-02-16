{{-- 
    Reusable CTA Section Component
    
    Usage:
    @include('partials.cta-section', [
        'title' => 'Your CTA Title',
        'description' => 'Your CTA Description',
        'buttonText' => 'Button Text',
        'buttonLink' => url('contact-us.php')
    ])
--}}

<style>
    /* Global CTA Section Styles */
    .global-cta-pricing-section {
        width: 80%;
        margin: 36px auto;
        padding-bottom: 20px;
    }

    .global-cta-container {
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

    .global-cta-container::before {
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

    .global-cta-content {
        text-align: center;
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    .global-cta-content h2 {
        font-size: 40px;
        font-weight: 700;
        color: white;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .global-cta-content p {
        width: 100%;
        margin: 0 auto 25px;
        font-weight: 400;
        text-align: center;
        font-size: 20px;
        line-height: 30px;
        color: #FFFFFF;
        opacity: 0.9;
    }

    .global-cta-request-btn {
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

    .global-cta-request-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        background-color: #f8f8f8;
        color: #002147;
    }

    /* CTA Responsive */
    @media (max-width: 768px) {
        .global-cta-pricing-section {
            width: 90%;
            padding-bottom: 40px;
        }
        
        .global-cta-container { 
            padding: 40px 30px; 
            border-radius: 30px;
            margin: 20px;
            min-height: 240px;
        }
        
        .global-cta-content h2 { 
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .global-cta-content p {
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 20px;
        }
        
        .global-cta-request-btn {
            padding: 12px 35px;
            font-size: 15px;
        }
    }

    @media (max-width: 640px) {
        .global-cta-pricing-section {
            width: 95%;
        }
        
        .global-cta-container {
            padding: 30px 20px;
            margin: 20px 15px;
            border-radius: 20px;
            min-height: 220px;
        }
        
        .global-cta-content h2 {
            font-size: 24px;
        }
        
        .global-cta-content p {
            font-size: 14px;
            line-height: 22px;
        }
        
        .global-cta-request-btn {
            padding: 12px 30px;
            font-size: 14px;
        }
    }
    
    @media (max-width: 480px) {
        .global-cta-pricing-section {
            width: 100%;
            padding-bottom: 20px;
        }
        
        .global-cta-container {
            padding: 25px 15px;
            margin: 15px 10px;
            min-height: 200px;
        }
        
        .global-cta-content h2 {
            font-size: 22px;
        }
        
        .global-cta-content p {
            font-size: 13px;
            line-height: 20px;
            margin-bottom: 15px;
        }
        
        .global-cta-request-btn {
            padding: 10px 25px;
            font-size: 13px;
        }
    }
</style>

<!-- CTA Section -->
<section class="global-cta-pricing-section">
    <div class="global-cta-container">
        <div class="global-cta-content">
            <h2>{{ $title ?? 'Get Started Today' }}</h2>
            <p>{{ $description ?? 'Transform your practice with our comprehensive solutions.' }}</p>
            <a href="{{ $buttonLink ?? url('contact-us.php') }}" class="global-cta-request-btn">
                {{ $buttonText ?? 'Get Started' }}
            </a>
        </div>
    </div>
</section>
