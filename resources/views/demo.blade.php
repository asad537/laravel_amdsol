@extends('layouts.app')

@section('content')
<style>
    .demo-page-wrapper {
        font-family: 'Poppins', sans-serif;
    }

    .demo-page-wrapper * {
        box-sizing: border-box;
    }

    .demo-container {
        max-width: 1440px;
        width: 100%;
        margin: 0 auto;
        overflow: hidden;
        padding: 0;
    }

    .hero-section-demo {
        width: 100%;
        max-width: 100%;
        min-height: 400px;
        background-color: #1a3a5c;
        background-image: url('{{ asset('assets/images/demo/images/hero.jpeg') }}');
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

    @media (max-width: 1024px) {
        .hero-section-demo {
            min-height: 380px;
            padding: 50px 20px;
        }
    }

    @media (max-width: 768px) {
        .hero-section-demo {
            min-height: auto;
            padding: 0 0 40px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
            background-position: right center;
        }
        
        .hero-section-demo::before {
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
        .hero-section-demo {
            min-height: 320px;
            padding: 30px 15px;
            background-position: 70% center;
        }
    }

    .hero-section-demo::before {
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

    .hero-content-demo {
        position: relative;
        z-index: 2;
        padding-left: 80px;
        max-width: 600px;
    }

    .hero-section-demo h1 {
        width: 100%;
        font-size: 38px;
        font-weight: 700;
        color: white !important;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
    }

    .hero-section-demo p {
        font-size: 18px;
        font-weight: 400;
        color: white;
        line-height: 1.4;
    }

    @media (max-width: 768px) {
        .hero-content-demo {
            padding-left: 20px;
            padding-right: 20px;
            max-width: 100%;
        }
        .hero-section-demo h1 {
            font-size: 28px;
        }
    }

    .contact-wrapper-demo {
        max-width: 1200px;
        margin: 40px auto;
        background: white;
        border-radius: 20px;
        padding: 50px 97px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .contact-wrapper-demo::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -10%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(230, 240, 255, 0.5) 0%, transparent 70%);
        border-radius: 50%;
    }

    .demo-page-wrapper h1 {
        text-align: left;
        font-size: 2.5em;
        color: #1a2b4a;
        font-weight: 700;
        margin-bottom: 35px;
        position: relative;
    }

    .content-wrapper-demo {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        position: relative;
    }

    .left-section-demo h2 {
        color: #1a2b4a;
        font-size: 2.5em;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .benefits-list-demo {
        list-style: none;
        padding: 0;
    }

    .benefits-list-demo li {
        display: flex;
        align-items: flex-start;
        font-size: 1.3rem;
        margin-bottom: 22px;
        color: #2c3e50;
        line-height: 1.7;
    }

    .benefits-list-demo li::before {
        content: '✓';
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        background-color: #1a2b4a;
        color: white;
        border-radius: 50%;
        margin-right: 18px;
        font-weight: bold;
        font-size: 1.1em;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .form-container-demo {
        background: white;
        border: 2px solid #e0e6ed;
        border-radius: 15px;
        padding: 20px;
        position: relative;
    }

    .form-group-demo {
        margin-bottom: 12px;
    }

    .form-group-demo label {
        display: block;
        color: #1a2b4a;
        font-weight: 600;
        margin-bottom: 8px;
        font-size: 1.5rem;
    }

    .form-group-demo input,
    .form-group-demo textarea {
        width: 100%;
        padding: 14px 16px;
        border: 1px solid #d1d9e6;
        border-radius: 6px;
        font-size: 1.1rem;
        font-family: inherit;
        transition: border-color 0.3s ease;
        background-color: #fafbfc;
    }

    .form-group-demo input:focus,
    .form-group-demo textarea:focus {
        outline: none;
        border-color: #1a2b4a;
        background-color: white;
    }

    .submit-btn-demo {
        background-color: #1a2b4a;
        color: white;
        border: none;
        padding: 16px 50px;
        border-radius: 8px;
        font-size: 1.2rem;
        font-weight: 600;
        cursor: pointer;
        float: right;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    @media (max-width: 968px) {
        .content-wrapper-demo {
            grid-template-columns: 1fr;
        }

        .contact-wrapper-demo {
            padding: 40px 50px;
            margin: 30px 50px;
        }
    }

    @media (max-width: 768px) {
        .contact-wrapper-demo {
            padding: 30px 30px;
            margin: 20px 30px;
        }

        .demo-page-wrapper h1 {
            font-size: 1.8em;
        }

        .left-section-demo h2 {
            font-size: 1.2em;
        }

        .benefits-list-demo li {
            font-size: 0.85em;
        }
    }

    @media (max-width: 480px) {
        .contact-wrapper-demo {
            padding: 20px 20px;
            margin: 20px 20px;
            border-radius: 15px;
        }

        .demo-page-wrapper h1 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .left-section-demo h2 {
            font-size: 1.1em;
        }

        .benefits-list-demo li {
            font-size: 0.8em;
            margin-bottom: 12px;
        }

        .benefits-list-demo li::before {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .form-group-demo {
            margin-bottom: 10px;
        }

        .submit-btn-demo {
            width: 100%;
            float: none;
        }
    }
</style>

<div class="demo-page-wrapper">
    <div class="demo-container">
        <!-- Hero Section -->
        <section class="hero-section-demo">
            <img src="{{ asset('assets/images/demo/images/hero.jpeg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content-demo">
                <h1>Request a Demo to Simplify Billing</h1>
                <p>Experience streamlined billing and optimized workflows for your practice.</p>
            </div>
        </section>

        <!-- Form Section -->
        <div class="contact-wrapper-demo">
            <h1>Connect with Our Team</h1>

            @if(session('green_msg'))
                <div class="alert alert-success" style="padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; color: #3c763d; background-color: #dff0d8; border-color: #d6e9c6;">
                    {{ session('green_msg') }}
                </div>
            @endif
            
            <div class="content-wrapper-demo">
                <div class="left-section-demo">
                    <h2>What to Expect from Your Demo</h2>
                    <ul class="benefits-list-demo">
                        <li>99% accurate claims through RPA-assisted submissions</li>
                        <li>AR recovered quickly, usually within 24 days</li>
                        <li>Faster insurance payments, around 26 days</li>
                        <li>Complimentary provider credentialing with preferred payors</li>
                        <li>20% revenue growth via efficient collections</li>
                        <li>Consistent cash flow through proactive AR follow-ups</li>
                    </ul>
                </div>

                <div class="form-container-demo">
                    <form method="post" action="{{ url('request-demo') }}">
                        @csrf
                        <div class="form-group-demo">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" name="firstName" required>
                        </div>

                        <div class="form-group-demo">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" name="lastName" required>
                        </div>

                        <div class="form-group-demo">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group-demo">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>

                        <div class="form-group-demo">
                            <label for="practiceName">Practice Name</label>
                            <input type="text" id="practiceName" name="practiceName" required>
                        </div>

                        <div class="form-group-demo">
                            <label for="physicians">Number Of Physicians</label>
                            <input type="number" id="physicians" name="physicians" required>
                        </div>

                        <div class="form-group-demo">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="3"></textarea>
                        </div>

                        <button type="submit" class="submit-btn-demo">Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
