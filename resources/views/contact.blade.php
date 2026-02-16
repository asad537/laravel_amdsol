@extends('layouts.app')

@section('content')
<style>
    .contact-main-wrapper {
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
    }

    .contact-main-wrapper * {
        box-sizing: border-box;
    }

    /* Standard container for alignment with logo */
    .contact-container {
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        padding: 0 97px;
    }

    /* Contact Hero Section */
    .contact-hero-section {
        width: 100%;
        min-height: 448px;
        background-color: #002147;
        background-image: url('{{ asset('assets/images/contact/contact-img/contactus.png') }}');
        background-size: cover;
        background-position: right center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        margin: 0;
    }

    .contact-hero-section::before {
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

    .contact-hero-content {
        position: relative;
        z-index: 2;
        max-width: 600px;
    }

    .contact-hero-section h1 {
        text-align: left;
        font-weight: 700;
        font-size: 44px;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 3px;
        position: relative;
        padding-bottom: 10px;
        border: none;
        width: auto;
        height: auto;
    }

    .contact-hero-section p {
        text-align: left;
        font-weight: 500;
        font-size: 18px;
        color: white;
        line-height: 1.5;
        letter-spacing: 2%;
        margin-top: 0;
    }

    @media (max-width: 1024px) {
        .contact-hero-section h1 {
            font-size: 30px;
        }
        .contact-hero-section p {
            font-size: 16px;
        }
    }

    @media (max-width: 768px) {
        .contact-hero-section {
            min-height: auto;
            padding: 0 0 40px 0; /* Remove top padding, keep bottom */
            background-image: none !important;
            flex-direction: column;
        }
        
        /* Hide the gradient overlay on mobile since we are rearranging */
        .contact-hero-section::before {
            display: none;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-hero-content {
            text-align: center;
            padding-top: 20px;
            width: 100%;
        }

        .contact-hero-section h1 {
            font-size: 28px;
            text-align: center;
        }

        .contact-hero-section p {
            text-align: center;
        }

        .mobile-hero-img {
            display: block !important;
            width: 100%;
            max-width: none;
            height: auto;
            border-radius: 0;
            margin-bottom: 20px;
            object-fit: cover;
        }
    }

    /* Helper class to hide image on desktop */
    .mobile-hero-img {
        display: none;
    }

    /* Contact Get in Touch Section */
    .contact-touch-section {
        padding: 80px 0;
        background-color: #f8f9fa;
    }
    .contact-touch-container {
        display: flex;
        gap: 60px;
        align-items: center;
    }

    .contact-touch-left {
        flex: 1;
    }

    .contact-touch-title {
        font-size: 48px;
        font-weight: 700;
        color: #000;
        margin-bottom: 15px;
    }

    .contact-touch-subtitle {
        font-size: 16px;
        color: #666;
        margin-bottom: 40px;
    }

    .contact-touch-info-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 35px;
    }

    .contact-touch-icon {
        width: 50px;
        height: 50px;
        background-color: #0a2540;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .contact-touch-icon svg {
        width: 24px;
        height: 24px;
        fill: white;
    }

    .contact-touch-info-content h3 {
        font-size: 20px;
        font-weight: 600;
        color: #000;
        margin-bottom: 8px;
        margin-top: 0;
    }

    .contact-touch-info-content p {
        font-size: 16px;
        color: #666;
        line-height: 1.6;
        margin: 0;
    }

    .contact-touch-right {
        flex: 1;
    }

    .contact-touch-images {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .contact-touch-images img {
        width: 100%;
        max-width: 457px;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .contact-container {
            padding: 0 30px;
        }
        
        .contact-touch-container {
            flex-direction: column;
        }
        .contact-touch-title {
            font-size: 36px;
        }
        .contact-touch-section {
            padding: 60px 0;
        }
    }
    
    @media (max-width: 480px) {
        .contact-container {
            padding: 0 20px;
        }
    }

    /* Contact CTA Section - Tell us about yourself */
    .contact-cta-section {
        width: 100%;
        background: #001f3f;
        position: relative;
        overflow: hidden;
        padding: 60px 0;
    }

    .contact-cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset('assets/images/contact/contact-img/Group.png') }}'), url('{{ asset('assets/images/contact/contact-img/Group (1).png') }}');
        background-position: left center, right center;
        background-repeat: no-repeat;
        background-size: contain;
        opacity: 1;
        pointer-events: none;
        z-index: 1;
    }

    .contact-cta-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .contact-cta-title {
        font-size: 42px;
        font-weight: 700;
        color: white;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .contact-cta-subtitle {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.5;
    }

    /* Contact Form Section */
    .contact-form-section {
        padding: 80px 0;
        background: #f5f5f5;
    }

    .contact-form-container {
        max-width: 1000px;
        margin: -130px auto 0;
        position: relative;
        z-index: 10;
        width: 90%;
    }

    .contact-form-box {
        background: white;
        padding: 50px 60px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .contact-form-row {
        display: flex;
        gap: 30px;
        margin-bottom: 24px;
    }

    .contact-form-group {
        flex: 1;
    }

    .contact-form-label {
        display: block;
        font-size: 16px;
        font-weight: 600;
        color: #2d2d2d;
        margin-bottom: 10px;
    }

    .contact-form-input {
        width: 100%;
        padding: 14px 16px;
        border: 1px solid #d0d0d0;
        border-radius: 6px;
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s;
    }

    .contact-form-input:focus {
        outline: none;
        border-color: #001f3f;
        box-shadow: 0 0 0 3px rgba(0, 31, 63, 0.1);
    }

    .contact-form-textarea {
        width: 100%;
        padding: 14px 16px;
        border: 1px solid #d0d0d0;
        border-radius: 6px;
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
        min-height: 120px;
        resize: vertical;
        transition: all 0.3s;
    }

    .contact-form-checkbox-wrapper {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 30px;
        margin-top: 20px;
    }

    .contact-form-checkbox {
        margin-top: 3px;
        cursor: pointer;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
    }

    .contact-form-checkbox-label {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
    }

    .contact-form-checkbox-label a {
        color: #0066cc;
        text-decoration: none;
    }

    .contact-form-submit-wrapper {
        text-align: center;
    }

    .contact-form-submit {
        background-color: #001f3f;
        color: white;
        padding: 14px 60px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        font-family: 'Poppins', sans-serif;
    }

    .contact-form-submit:hover {
        background-color: #003366;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 31, 63, 0.4);
    }

    @media (max-width: 768px) {
        .contact-form-box {
            padding: 35px 25px;
        }
        .contact-form-row {
            flex-direction: column;
            gap: 0;
        }
        .contact-form-group {
            margin-bottom: 24px;
        }
    }
</style>

<div class="contact-main-wrapper">
    <!-- Contact Hero Section -->
    <section class="contact-hero-section">
        <img src="{{ asset('assets/images/contact/contact-img/contactus.png') }}" alt="Contact Us" class="mobile-hero-img">
        <div class="contact-container">
            <div class="contact-hero-content">
                <h1>Contact Us</h1>
                <p>We would love to hear from you. Feel free to reach out using the below details.</p>
            </div>
        </div>
    </section>

    <!-- Contact Get in Touch Section -->
    <section class="contact-touch-section">
        <div class="contact-container">
            <div class="contact-touch-container">
                <div class="contact-touch-left">
                    <h2 class="contact-touch-title">Get in Touch</h2>
                    <p class="contact-touch-subtitle">Get in touch with our team for a free consultation</p>

                    <div class="contact-touch-info-item">
                        <div class="contact-touch-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                        </div>
                        <div class="contact-touch-info-content">
                            <h3>Head Office</h3>
                            <p>123 AMD Solutions, 23 ST<br>New York, NY 2201</p>
                        </div>
                    </div>

                    <div class="contact-touch-info-item">
                        <div class="contact-touch-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                        </div>
                        <div class="contact-touch-info-content">
                            <h3>Email Us</h3>
                            <p>Support@Amdsol.com<br>Head@Amdsol.com</p>
                        </div>
                    </div>

                    <div class="contact-touch-info-item">
                        <div class="contact-touch-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                        </div>
                        <div class="contact-touch-info-content">
                            <h3>Call Us</h3>
                            <p>1-847-737-3401<br>1-847-737-3501</p>
                        </div>
                    </div>
                </div>

                <div class="contact-touch-right">
                    <div class="contact-touch-images">
                        <img src="{{ asset('assets/images/contact/contact-img/conatctcard1.jpg') }}" alt="Office Building">
                        <img src="{{ asset('assets/images/contact/contact-img/contactcard2.png') }}" alt="Office Location Map">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section - Tell us about yourself -->
    <section class="contact-cta-section">
        <div class="contact-container">
            <div class="contact-cta-content">
                <h1 class="contact-cta-title">Tell us about yourself</h1>
                <p class="contact-cta-subtitle">Our mission is to make a difference in healthcare.</p>
            </div>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="contact-form-container">
            <div class="contact-form-box">
                @if(session('red_msg'))
                    <div class="alert alert-danger">{{ session('red_msg') }}</div>
                @endif
                @if(session('green_msg'))
                    <div class="alert alert-success">{{ session('green_msg') }}</div>
                @endif
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ url('contact-us.php') }}">
                    @csrf
                    <div class="contact-form-row">
                        <div class="contact-form-group">
                            <label class="contact-form-label">First Name</label>
                            <input type="text" class="contact-form-input" name="first_name" required>
                        </div>
                        <div class="contact-form-group">
                            <label class="contact-form-label">Last Name</label>
                            <input type="text" class="contact-form-input" name="last_name" required>
                        </div>
                    </div>

                    <div class="contact-form-group" style="margin-bottom: 24px;">
                        <label class="contact-form-label">Email</label>
                        <input type="email" class="contact-form-input" name="email" required>
                    </div>

                    <div class="contact-form-group" style="margin-bottom: 24px;">
                        <label class="contact-form-label">Phone</label>
                        <input type="tel" class="contact-form-input" name="phone" required>
                    </div>

                    <div class="contact-form-group" style="margin-bottom: 24px;">
                        <label class="contact-form-label">Message</label>
                        <textarea class="contact-form-textarea" name="message" required></textarea>
                    </div>

                    <div class="contact-form-checkbox-wrapper">
                        <input type="checkbox" class="contact-form-checkbox" id="consent">
                        <label for="consent" class="contact-form-checkbox-label">
                            By Clicking On This Box, You Consent To Receive SMS Messages From AmdSol And Agree To
                            The <a href="#">Privacy Policy</a>.
                        </label>
                    </div>

                    <div class="contact-form-submit-wrapper">
                        <button type="submit" class="contact-form-submit">Get Started</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
