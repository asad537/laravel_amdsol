@extends('layouts.app')

@section('title', 'Thank You | AMD SOL')
@section('meta_description', 'Thank you for contacting AMD SOL. We will get back to you soon.')
@section('meta_keywords', 'Thank You, Contact, AMD SOL')

@section('content')
<style>
    .thank-you-wrapper {
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        padding: 60px 20px;
    }

    .thank-you-container {
        max-width: 700px;
        width: 100%;
        background: white;
        border-radius: 20px;
        padding: 60px 40px;
        text-align: center;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }

    .success-icon {
        width: 100px;
        height: 100px;
        margin: 0 auto 30px;
        background: #002147;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: scaleIn 0.5s ease-out;
    }

    .success-icon svg {
        width: 50px;
        height: 50px;
        stroke: white;
        stroke-width: 3;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
    }

    @keyframes scaleIn {
        0% {
            transform: scale(0);
            opacity: 0;
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .thank-you-container h1 {
        font-size: 42px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 20px;
        animation: fadeInUp 0.6s ease-out 0.2s both;
    }

    .thank-you-container p {
        font-size: 18px;
        color: #666;
        line-height: 1.8;
        margin-bottom: 30px;
        animation: fadeInUp 0.6s ease-out 0.4s both;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .info-box {
        background: #f8f9fa;
        border-left: 4px solid #002147;
        padding: 20px;
        margin: 30px 0;
        text-align: left;
        border-radius: 8px;
        animation: fadeInUp 0.6s ease-out 0.6s both;
    }

    .info-box h3 {
        font-size: 18px;
        font-weight: 600;
        color: #002147;
        margin-bottom: 10px;
    }

    .info-box p {
        font-size: 15px;
        color: #555;
        margin-bottom: 0;
    }

    .action-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
        animation: fadeInUp 0.6s ease-out 0.8s both;
    }

    .btn-primary {
        background: #002147;
        color: white;
        padding: 14px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        border: 2px solid #002147;
    }

    .btn-primary:hover {
        background: white;
        color: #002147;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 33, 71, 0.2);
    }

    .btn-secondary {
        background: white;
        color: #002147;
        padding: 14px 35px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        border: 2px solid #002147;
    }

    .btn-secondary:hover {
        background: #002147;
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 33, 71, 0.2);
    }

    .contact-info {
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #e0e0e0;
        animation: fadeInUp 0.6s ease-out 1s both;
    }

    .contact-info h3 {
        font-size: 20px;
        font-weight: 600;
        color: #002147;
        margin-bottom: 15px;
    }

    .contact-details {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 16px;
        color: #555;
    }

    .contact-item svg {
        width: 20px;
        height: 20px;
        stroke: #002147;
        flex-shrink: 0;
    }

    .contact-item a {
        color: #002147;
        text-decoration: none;
        font-weight: 500;
    }

    .contact-item a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .thank-you-container {
            padding: 40px 25px;
        }

        .thank-you-container h1 {
            font-size: 32px;
        }

        .thank-you-container p {
            font-size: 16px;
        }

        .success-icon {
            width: 80px;
            height: 80px;
        }

        .success-icon svg {
            width: 40px;
            height: 40px;
        }

        .action-buttons {
            flex-direction: column;
        }

        .btn-primary,
        .btn-secondary {
            width: 100%;
        }
    }
</style>

<div class="thank-you-wrapper">
    <div class="thank-you-container">
        <div class="success-icon">
            <svg viewBox="0 0 24 24">
                <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
        </div>

        <h1>Thank You!</h1>
        <p>
            We have successfully received your message. Our team will review your inquiry and get back to you within 24-48 hours.
        </p>

        <div class="info-box">
            <h3>What Happens Next?</h3>
            <p>
                Our dedicated team is reviewing your submission. We'll reach out to you via email or phone to discuss your needs and how we can help optimize your practice's revenue cycle.
            </p>
        </div>

        <div class="action-buttons">
            <a href="{{ url('/') }}" class="btn-primary">Back to Home</a>
            <a href="{{ url('services') }}" class="btn-secondary">Explore Services</a>
        </div>

        <div class="contact-info">
            <h3>Need Immediate Assistance?</h3>
            <div class="contact-details">
                <div class="contact-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <a href="tel:+18777241301">+1 (877) 724-1301</a>
                </div>
                <div class="contact-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <a href="mailto:Info@AMDSOL.COM"> Info@amdsol.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
