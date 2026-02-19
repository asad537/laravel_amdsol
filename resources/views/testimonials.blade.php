@extends('layouts.app')

@section('content')
<style>
    .hospital-billing-wrapper {
        font-family: 'Poppins', sans-serif;
        background: #ffffff;
    }

    .hospital-billing-wrapper * {
        box-sizing: border-box;
    }

    .hospital-billing-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    /* Add proper spacing between sections */
    .hospital-billing-wrapper section {
        margin-bottom: 30px;
    }

    .hospital-billing-wrapper section:last-child {
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .hospital-billing-wrapper section {
            margin-bottom: 20px;
        }
        
        .hospital-billing-wrapper section:last-child {
            margin-bottom: 15px;
        }
    }

    .hero-section-hospital {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images//testinomial/testinomial hero.jpg') }}');
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
        .hero-section-hospital {
            min-height: 380px;
            padding: 50px 20px;
            margin-bottom: 80px;
        }
    }

    @media (max-width: 768px) {
        .hero-section-hospital {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }
        
        .hero-section-hospital::before {
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

    .hero-section-hospital::before {
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

    .hero-content-hospital {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-hospital h1 {
        width: 100%;
        font-size: 34px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-hospital p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-hospital {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 100%;
        }
        .hero-section-hospital h1 {
            font-size: 28px;
        }
    }
     .testimonials-section-hospital {
        max-width: 1440px;
        margin: 40px auto;
        padding: 40px 20px;
    }

    .section-header-hospital {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-header-hospital h2 {
        font-size: 36px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 10px;
        border: none;
    }

    .section-header-hospital p {
        font-size: 15px;
        color: #666;
    }

     .testimonials-grid-hospital {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .testimonial-card-hospital {
        background: #fff;
        border: 2px solid #e0e0e0;
        border-radius: 15px;
        padding: 30px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .testimonial-card-hospital:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-color: #d0d0d0;
    }

    .quote-icon-hospital {
        width: 32px;
        height: 24px;
        margin-bottom: 15px;
    }

    .testimonial-text-hospital {
        font-size: 14px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .author-info-hospital {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-top: 20px;
        border-top: 1px solid #e0e0e0;
    }

    .author-avatar-hospital {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
    }

    .author-avatar-hospital img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .author-name-hospital {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a2e;
        margin-bottom: 3px;
    }

    .author-title-hospital {
        font-size: 13px;
        color: #666;
    }

    @media (max-width: 768px) {
        .testimonials-grid-hospital {
            grid-template-columns: 1fr;
        }
    }

    
</style>

<div class="hospital-billing-wrapper">
    <div class="hospital-billing-container">
        <!-- Hero Section -->
        <section class="hero-section-hospital">
        <img src="{{ asset('assets/images//testinomial/testinomial hero.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-hospital">
                <h1>Trusted by Healthcare Providers Nationwide</h1>
                <p>See how our medical billing solutions help practices
increase revenue and reduce denials.</p>
            </div>
        </section>
 <!-- Testimonials Section -->
        <section class="testimonials-section-hospital">
            <div class="testimonials-grid-hospital">
                @forelse($testimonials as $testimonial)
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">{!! $testimonial->text !!}</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            @if(isset($testimonial->image) && $testimonial->image)
                                <img src="{{ asset('assets/images/' . $testimonial->image) }}" alt="{{ $testimonial->name }}">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($testimonial->name) }}&size=100&background=002147&color=fff" alt="{{ $testimonial->name }}">
                            @endif
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">{{ $testimonial->name }}</div>
                            <div class="author-title-hospital">{{ $testimonial->designation ?? 'Healthcare Provider' }}</div>
                        </div>
                    </div>
                </div>
                @empty
                <!-- Dummy Testimonial 1 -->
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">As a practice manager, I was looking to streamline the medical billing process. I tried other companies, but they were all complicated and took too much of my time. Fortunately, I found Amd Solutions. They excel in tailoring solutions to fit my requirements.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            <img src="https://ui-avatars.com/api/?name=Steve+Vaugh&size=100&background=002147&color=fff" alt="Steve Vaugh">
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Steve Vaugh</div>
                            <div class="author-title-hospital">Practice Manager<br>Wilson Creek Internal Medicine</div>
                        </div>
                    </div>
                </div>

                <!-- Dummy Testimonial 2 -->
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">Our hospital billing has never been more efficient. The team's expertise in complex claim management and denial resolution has significantly improved our revenue cycle. Their attention to detail and proactive approach makes them an invaluable partner.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            <img src="https://ui-avatars.com/api/?name=Michael+Anderson&size=100&background=002147&color=fff" alt="Michael Anderson">
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Michael Anderson</div>
                            <div class="author-title-hospital">CFO<br>Regional Medical Center</div>
                        </div>
                    </div>
                </div>

                <!-- Dummy Testimonial 3 -->
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">Switching to this billing service was the best decision for our hospital. They handle everything from credentialing to payment posting with remarkable accuracy. Our days in AR have decreased by 40% and cash flow has never been better.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            <img src="https://ui-avatars.com/api/?name=David+Martinez&size=100&background=002147&color=fff" alt="David Martinez">
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">David Martinez</div>
                            <div class="author-title-hospital">Revenue Cycle Director<br>Community Healthcare System</div>
                        </div>
                    </div>
                </div>

                <!-- Dummy Testimonial 4 -->
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">The transparency and reporting capabilities are outstanding. We receive detailed analytics that help us make informed decisions. Their team is responsive, knowledgeable, and truly invested in our success. Highly recommend for any hospital system.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            <img src="https://ui-avatars.com/api/?name=Robert+Thompson&size=100&background=002147&color=fff" alt="Robert Thompson">
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Robert Thompson</div>
                            <div class="author-title-hospital">Administrator<br>Metropolitan Hospital Network</div>
                        </div>
                    </div>
                </div>

                <!-- Dummy Testimonial 5 -->
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">Working with AMD SOL has transformed our practice operations. Their medical billing expertise and dedicated support team have helped us increase collections by 35%. The seamless integration with our EHR system makes everything so much easier.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&size=100&background=002147&color=fff" alt="Sarah Johnson">
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Sarah Johnson</div>
                            <div class="author-title-hospital">Office Manager<br>Idaho Kidney & Hypertension Institute</div>
                        </div>
                    </div>
                </div>

                <!-- Dummy Testimonial 6 -->
                <div class="testimonial-card-hospital">
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (1).png') }}" alt="Quote" class="quote-icon-hospital">
                    <p class="testimonial-text-hospital">I cannot speak highly enough about the professionalism and efficiency of this billing company. They've reduced our claim denials significantly and their monthly reports give us clear insights into our financial health. A true partner in our success.</p>
                    <img src="{{ asset('assets/images/hospital/hospital-img/Simplification (2).png') }}" alt="Quote" class="quote-icon-hospital" style="align-self: flex-end;">
                    <div class="author-info-hospital">
                        <div class="author-avatar-hospital">
                            <img src="https://ui-avatars.com/api/?name=Jennifer+Williams&size=100&background=002147&color=fff" alt="Jennifer Williams">
                        </div>
                        <div class="author-details-hospital">
                            <div class="author-name-hospital">Jennifer Williams</div>
                            <div class="author-title-hospital">Practice Manager<br>Harding Memorial Healthcare</div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </section>
  
@endsection
