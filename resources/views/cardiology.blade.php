@extends('layouts.app')

@section('content')
<style>
        .cardiology-page-wrapper {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
        }

        .cardiology-page-wrapper * {
            box-sizing: border-box;
        }

        .cardiology-page-container {
            max-width: 1440px;
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Responsive Typography */
        html {
            font-size: 16px;
        }

        @media (max-width: 1200px) {
            html {
                font-size: 15px;
            }
        }

        @media (max-width: 768px) {
            html {
                font-size: 14px;
            }
        }

        .hero-section {
            width: 100%;
            max-width: 100%;
            min-height: 400px;
            background-color: #1a3a5c;
            background-image: url("{{ asset('assets/images/cardiology/cardiology.jpg') }}");
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
            .hero-section {
                min-height: 380px;
                background-size: cover;
                background-position: center right;
                padding: 50px 20px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: auto;
                padding: 0 0 30px 0;
                background-position: right center;
                background-size: cover;
                background-image: none !important;
                flex-direction: column;
                background-color: #002147;
            }
            
            .hero-section::before {
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
            .hero-section {
                min-height: 320px;
                padding: 30px 15px;
                background-position: 70% center;
                background-size: cover;
            }
            
            .hero-section::before {
                background: linear-gradient(to right, 
                    rgba(10, 25, 45, 0.98) 0%, 
                    rgba(10, 25, 45, 0.9) 70%,
                    rgba(10, 25, 45, 0.5) 100%);
            }
        }

        .hero-section::before {
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

        .hero-content {
            position: relative;
            z-index: 2;
            padding-left: 80px;
            max-width: 600px;
        }

        .hero-section h1 {
            width: 100%;
            font-size: 38px;
            font-weight: 700;
            color: white;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 18px;
            font-weight: 400;
            color: white;
            line-height: 1.4;
        }

        @media (max-width: 1024px) {
            .hero-content {
                padding-left: 40px;
                max-width: 500px;
            }

            .hero-section h1 {
                font-size: 36px;
            }

            .hero-section p {
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {
            .hero-content {
                padding-left: 20px;
                padding-right: 20px;
                max-width: 100%;
            }

            .hero-section h1 {
                font-size: 28px;
                margin-bottom: 15px;
            }

            .hero-section p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .hero-content {
                padding-left: 15px;
                padding-right: 15px;
                max-width: 100%;
            }

            .hero-section h1 {
                font-size: 24px;
                margin-bottom: 12px;
                
            }

            .hero-section p {
                font-size: 14px;
            }
        }
            

            .hero-section p {
                font-size: 14px;
            }
             .healthcare-services-wrapper {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 97px;
        background-color: #ffffff;
        margin-bottom: 0;
    }

    .healthcare-services-container {
        max-width: 1200px;
        width: 100%;
    }

    .healthcare-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .healthcare-image-container {
        width: 100%;
        height: 100%;
        display: flex;
        /* align-items: center;
        justify-content: center; */
        padding: 0;
    }

    .healthcare-doctor-image {
        width: 100%;
        max-width: 100%;
        height: auto;
        max-height: 350px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .healthcare-text-section {
        padding: 0px 0px;
    }

    .healthcare-main-heading {
        font-size: 2rem;
        font-weight: 700;
        color: #002147;
        line-height: 1.2;
        margin-bottom: 20px;
        border: none;
        text-align: left;
        white-space: nowrap;
    }

    .healthcare-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: flex-start;
    }

    .healthcare-description-text {
        font-size: 16px;
        font-weight: 400;
        line-height: 1.6;
        text-align: left;
        color: #000000;
    }

    @media (max-width: 968px) {
        .healthcare-services-wrapper {
            padding: 40px 50px;
            margin-bottom: 40px;
        }

        .healthcare-content-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .healthcare-image-container {
            padding: 20px;
        }

        .healthcare-doctor-image {
            max-width: 100%;
        }

        .healthcare-text-section {
            padding: 20px;
        }

        .healthcare-main-heading {
            font-size: 28px;
            white-space: normal;
        }

        .healthcare-description-text {
            font-size: 15px;
        }
    }

    @media (max-width: 768px) {
        .healthcare-services-wrapper {
            padding: 30px 30px;
            margin-bottom: 30px;
        }

        .healthcare-image-container {
            padding: 10px;
        }

        .healthcare-main-heading {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .healthcare-description-text {
            font-size: 14px;
            line-height: 1.6;
        }
    }

    @media (max-width: 480px) {
        .healthcare-services-wrapper {
            padding: 20px 20px;
            margin-bottom: 20px;
        }

        .healthcare-image-container {
            padding: 5px;
        }

        .healthcare-doctor-image {
            border-radius: 10px;
        }

        .healthcare-text-section {
            padding: 15px 10px;
        }

        .healthcare-main-heading {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .healthcare-description-text {
            font-size: 13px;
            line-height: 1.5;
        }
    }

         .billing-services-container {
           width: 100%;
            margin: 0 auto;
            padding: 20px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .billing-header-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .billing-main-title {
            font-size: 2.5rem;
            color: #1a1a2e;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .billing-subtitle-text {
            font-size: 1.1rem;
            color: #666;
            font-weight: 400;
        }

        .services-grid-wrapper {
            display: grid;
            grid-template-columns: repeat(4, 250px);
            gap: 20px;
            padding: 10px 0;
            justify-content: center;
            margin: 0 auto;
            max-width: fit-content;
        }

        .service-card-item {
            background: transparent;
            border-radius: 15px;
            width: 250px;
            height: 320px;
            perspective: 1000px;
            cursor: pointer;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 1.2s;
            transform-style: preserve-3d;
        }

        .service-card-item:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 30px;
        }

        .card-front {
            background: linear-gradient(135deg, #001f3f 0%, #003366 100%);
        }

        .card-back {
            background: white;
            transform: rotateY(180deg);
            box-shadow: 0 10px 40px rgba(0, 31, 63, 0.3), 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .card-back-title {
            color: #001f3f;
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .service-icon-holder {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-icon-holder img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .service-title-text {
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .service-description-text {
            color: #333333;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            text-align: center;
        }

        @media (max-width: 768px) {
            .billing-main-title {
                font-size: 2rem;
            }

            .services-grid-wrapper {
                grid-template-columns: repeat(2, 250px);
                gap: 20px;
            }

            .service-card-item {
                width: 250px;
                height: 320px;
            }

            .card-front, .card-back {
                padding: 25px 15px;
            }
        }

        @media (max-width: 600px) {
            .services-grid-wrapper {
                grid-template-columns: 1fr;
            }

            .service-card-item {
                width: 100%;
                max-width: 300px;
                height: 350px;
            }
        }

        @media (max-width: 480px) {
            .billing-main-title {
                font-size: 1.6rem;
            }

            .billing-subtitle-text {
                font-size: 1rem;
            }

            .billing-services-container {
                display: none;
            }

            .service-card-item {
                width: 100%;
                max-width: 280px;
                height: 330px;
                margin: 0 auto;
            }

            .card-front, .card-back {
                padding: 20px 15px;
            }

            .service-icon-holder {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }

            .service-icon-holder img {
                width: 45px;
                height: 45px;
            }

            .service-title-text {
                font-size: 1rem;
            }

            .card-back-title {
                font-size: 1.1rem;
                margin-bottom: 10px;
            }

            .service-description-text {
                font-size: 0.85rem;
                line-height: 1.5;
            }
        }

        @media (max-width: 1240px) and (min-width: 769px) {
            .services-grid-wrapper {
                grid-template-columns: repeat(3, 250px);
            }
        }

        /* Outsource Section */
        .outsource-section-wrapper {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 97px;
            background-color: #f8f9fa;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .outsource-content-container {
            max-width: 1200px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .outsource-image-section {
            position: relative;
        }

        .outsource-image {
            width: 100%;
            height: auto;
            border-radius: 20px;
            object-fit: cover;
        }
        
        @media screen and (max-width: 968px) {
            .outsource-image {
                max-width: 100%;
                min-height: 350px;
            }
        }
        
        @media screen and (max-width: 640px) {
            .outsource-image {
                max-width: 100%;
                min-height: 300px;
                border-radius: 15px;
            }
        }
        
        @media screen and (max-width: 480px) {
            .outsource-image {
                max-width: 100%;
                min-height: 280px;
            }
        }

        .outsource-text-section {
            padding: 20px;
        }

        .outsource-heading {
            width: 100%;
            font-size: 25px;
            font-weight: 700;
            color: #1a1a2e;
            line-height: 1.3;
            margin-bottom: 25px;
        }

        .outsource-description {
            font-size: 1.2rem;
            font-weight: 400;
            line-height: 1.3;
            color: #4a4a4a;
            text-align: justify;
        }

        @media (max-width: 968px) {
            .outsource-content-container {
                grid-template-columns: 1fr;
                gap: 30px;
                width: 95%;
            }

            .outsource-text-section {
                padding: 10px;
            }

            .outsource-heading {
                font-size: 1.8rem;
            }

            .outsource-description {
                font-size: 1rem;
                text-align: left;
            }
        }

        @media (max-width: 640px) {
            .outsource-section-wrapper {
                padding: 30px 15px;
            }

            .outsource-content-container {
                width: 100%;
            }

            .outsource-text-section {
                padding: 5px;
            }

            .outsource-heading {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }

            .outsource-description {
                font-size: 0.95rem;
                line-height: 1.7;
            }
        }

        /* Comparison Section */
        .comparison-section-wrapper {
            width: 100%;
            padding: 30px 20px;
            background-color: #ffffff;
        }

        .comparison-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 80px;
        }

        .comparison-main-heading {
            font-size: 2.2rem;
            font-weight: 700;
            color: #002147;
            text-align: center;
            margin-bottom: 30px;
            line-height: 1.3;
            display: inline-block;
            padding-bottom: 12px;
           
        }

        .comparison-heading-wrapper {
            text-align: center;
            margin-bottom: 40px;
        }

        .comparison-grid {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .comparison-mobile {
            display: none;
        }

        .comparison-mobile-section {
            margin-bottom: 35px;
        }

        .comparison-mobile-heading {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a1a2e;
            padding-bottom: 10px;
            border-bottom: 3px solid #1a1a2e;
            display: inline-block;
            margin-bottom: 15px;
        }

        .comparison-mobile-text {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #4a4a4a;
            margin-bottom: 12px;
            text-align: left;
        }

        .comparison-headers {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 40px;
            margin-bottom: 20px;
        }

        .comparison-heading {
            font-size: 1.3rem;
            font-weight: 700;
            color: #002147;
            padding-bottom: 8px;
            border-bottom: 3px solid #002147;
            display: block;
            width: 100%;
        }

        .comparison-heading-left {
            text-align: left;
            padding-right: 50px;
        }

        .comparison-heading-right {
            text-align: left;
            padding-left: 50px;
        }

        .comparison-heading-center {
            width: 280px;
        }

        .comparison-rows {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .comparison-row {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 40px;
            align-items: center;
        }

        .comparison-text-left {
            text-align: left;
            padding-right: 50px;
            padding-top: 0;
        }

        .comparison-text-right {
            text-align: left;
            padding-left: 50px;
            padding-top: 0;
        }

        .comparison-text {
            font-size: 0.9rem;
            line-height: 1.7;
            color: #5a5a5a;
        }

        .comparison-category {
            background: linear-gradient(135deg, #002147 0%, #003d7a 100%);
            color: white;
            padding: 22px 60px;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: 600;
            text-align: center;
            width: 280px;
            min-height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 3px 12px rgba(0, 33, 71, 0.25);
        }

        @media (max-width: 968px) {
            .comparison-main-heading {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .comparison-grid {
                display: flex;
                flex-direction: column;
            }

            .comparison-headers {
                display: flex;
                flex-direction: column;
                gap: 0;
                margin-bottom: 0;
            }

            .comparison-heading-left,
            .comparison-heading-right {
                text-align: left;
                padding: 0;
                justify-content: flex-start;
            }

            .comparison-heading-center {
                display: none;
            }

            /* With heading first */
            .comparison-heading-right {
                order: 1;
                margin-bottom: 15px;
            }

            /* Without heading after all With points */
            .comparison-heading-left {
                order: 3;
                margin-top: 30px;
                margin-bottom: 15px;
            }

            /* Hide desktop layout */
            .comparison-grid {
                display: none !important;
            }

            /* Show mobile layout */
            .comparison-mobile {
                display: block !important;
            }
        }

        @media (max-width: 768px) {
            .comparison-container {
                padding: 0 40px;
            }
        }

        @media (max-width: 640px) {
            .comparison-section-wrapper {
                padding: 30px 15px;
            }
            
            .comparison-container {
                padding: 0 20px;
            }

            .comparison-main-heading {
                font-size: 1.6rem;
                margin-bottom: 25px;
            }

            .comparison-mobile-heading {
                font-size: 1.2rem;
            }

            .comparison-mobile-text {
                font-size: 0.9rem;
            }

            .comparison-heading-wrapper {
                margin-bottom: 25px;
            }

            .comparison-mobile-section {
                margin-bottom: 25px;
            }
        }

        @media (max-width: 1100px) and (min-width: 969px) {
            .comparison-category {
                width: 220px;
                padding: 25px 35px;
                font-size: 1.1rem;
            }

            .comparison-text-left {
                padding-right: 30px;
            }

            .comparison-text-right {
                padding-left: 30px;
            }

            .comparison-text {
                font-size: 0.9rem;
            }
        }
         .outsource-content-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .outsource-image-section {
            width: 100%;
        }

        .outsource-image-holder {
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .outsource-image-holder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .outsource-text-section {
            padding: 20px 0;
        }

        .outsource-main-heading {
            font-size: 2.2rem;
            color: #001f3f;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 25px;
        }

        .outsource-description-text {
            font-size: 1.05rem;
            color: #4a4a4a;
            line-height: 1.8;
            text-align: justify;
        }

        @media (max-width: 968px) {
            .outsource-content-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .outsource-main-heading {
                font-size: 1.9rem;
            }

            .outsource-description-text {
                font-size: 1rem;
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 40px 20px;
            }

            .outsource-main-heading {
                font-size: 1.7rem;
                margin-bottom: 20px;
            }

            .outsource-description-text {
                font-size: 0.95rem;
                line-height: 1.7;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 30px 15px;
            }

            .outsource-main-heading {
                font-size: 1.5rem;
            }

            .outsource-description-text {
                font-size: 0.9rem;
            }

            .outsource-image-holder {
                border-radius: 15px;
            }
        }
        /* Billing Solutions Section */
        .billing-solutions {
            padding: 20px 20px 20px;
            text-align: center;
            background-color: #ffffff;
            width: 100%;
        }

        .billing-solutions h2 {
            font-size: 32px;
            font-weight: 700;
            color: #002147;
            margin-bottom: 8px;
        }

        .billing-solutions .subtitle {
            font-size: 14px;
            font-weight: 400;
            color: #333;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .billing-solutions h2 {
                font-size: 26px;
            }

            .billing-solutions .subtitle {
                font-size: 13px;
                padding: 0 10px;
            }
        }

        @media (max-width: 480px) {
            .billing-solutions {
                padding: 25px 15px 20px;
            }

            .billing-solutions h2 {
                font-size: 22px;
            }
        }

        .specialties-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px 30px;
            max-width: 1150px;
            margin: 0 auto 15px;
        }

        @media (max-width: 1024px) {
            .specialties-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 15px 20px;
            }
        }

        @media (max-width: 768px) {
            .specialties-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px 15px;
            }
        }

        @media (max-width: 480px) {
            .specialties-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }
        }

        .specialty-item {
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

        @media (max-width: 768px) {
            .specialty-item {
                min-height: 100px;
                padding: 12px 10px;
            }
        }

        @media (max-width: 480px) {
            .specialty-item {
                min-height: 90px;
                padding: 10px 8px;
            }
        }

        .specialty-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            transition: all 0.6s ease;
        }

        .specialty-item:hover .specialty-content {
            transform: translateX(-100%);
            opacity: 0;
        }

        .specialty-description {
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
            text-align: center;
        }

        .specialty-item:hover .specialty-description {
            left: 0;
        }

        .specialty-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0, 33, 71, 0.15);
            border-color: #002147;
        }

        .specialty-icon {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .specialty-item span {
            font-size: 14px;
            font-weight: 500;
            color: #002147;
        }

        @media (max-width: 768px) {
            .specialty-icon {
                width: 38px;
                height: 38px;
            }

            .specialty-item span {
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            .specialty-icon {
                width: 35px;
                height: 35px;
            }

            .specialty-item span {
                font-size: 12px;
            }
        }
 .cta-container {
            background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
            border-radius: 40px;
            padding: 50px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            /* Enable overflow hidden to contain wave */
            min-height: 280px;
            margin: 30px 40px;
        }
        
        .cta-pricing-section {
            padding-bottom: 0;
        }

        .cta-container::before {
            content: '';
            position: absolute;
            top: -44px;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('assets/images/cardiology/wave.png') }}");
            background-repeat: no-repeat;
            background-size: contain;
            background-position: right center;
            opacity: 0.4;
            z-index: 1;
        }

        .cta-content {
            text-align: center;
            position: relative;
            z-index: 2;
            max-width: 800px;
        }

        .cta-content h2 {
            font-size: 40px;
            font-weight: 700;
            color: white;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .cta-content p {
            width: 100%;
            margin: 0 auto 25px;
            font-weight: 400;
            text-align: center;
            font-size: 20px;
            line-height: 30px;
            color: #FFFFFF;
            opacity: 0.9;
        }

        .cta-request-btn {
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

        .cta-request-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            background-color: #f8f8f8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cta-pricing-section {
                padding-bottom: 20px;
            }

            .cta-container {
                padding: 40px 30px;
                border-radius: 30px;
                min-height: 200px;
            }

            .cta-container::before {
                background-size: cover;
                opacity: 0.3;
            }

            .cta-content h2 {
                font-size: 32px;
            }

            .cta-content p {
                font-size: 16px;
                line-height: 26px;
            }

            .cta-request-btn {
                padding: 12px 35px;
                font-size: 15px;
            }
        }

        @media (max-width: 480px) {
            .cta-pricing-section {
                padding-bottom: 20px;
            }

            .cta-container {
                padding: 35px 20px;
                border-radius: 25px;
                min-height: 180px;
            }

            .cta-container::before {
                opacity: 0.2;
            }

            .cta-content h2 {
                font-size: 26px;
            }

            .cta-content p {
                font-size: 14px;
                line-height: 24px;
                max-width: 100%;
            }

            .cta-request-btn {
                padding: 12px 30px;
                font-size: 14px;
            }
        }
        

    </style>
    
<div class="cardiology-page-wrapper">
    <div class="cardiology-page-container">
        <section class="hero-section">
            <img src="{{ asset('assets/images/cardiology/cardiology.jpg') }}" alt="Hero Image" class="mobile-hero-img">
            <div class="hero-content">
                <h1>Streamline Cardiology Billing, Focus on Your Patients</h1>
                <p>Our team handles claims and reimbursements so you can care.</p>
            </div>
        </section>
       <!-- Overview Section -->
        <div class="healthcare-services-wrapper">
            <div class="healthcare-services-container">
                <div class="healthcare-content-grid">
                    <div class="healthcare-image-container">
                        <img src="{{ asset('assets/images/cardiology/hero-cardiology.jpg') }}" alt="Doctor consulting patient" class="healthcare-doctor-image">
                    </div>
                    <div class="healthcare-text-section">
                        <h2 class="healthcare-main-heading">What are Cardiology Billing Services?</h2>
                        <p class="healthcare-description-text">
                           Cardiology billing services provide expert financial support for cardiology
practices and clinics, handling the complex billing processes so healthcare
providers can focus on patient care.
From stress tests and echocardiograms to pacemaker implants, these specialists
ensure every procedure is accurately documented and submitted, helping
insurance providers like Medicare, UnitedHealthcare, and BCBS process claims.
They are well-versed in the unique challenges of cardiology billing managing
everything from verifying insurance coverage before appointments to following
up on unpaid claims months later, ensuring timely and accurate reimbursements.
                        </p>
                    </div>
                </div>
            </div>
        </div>

         <div class="billing-services-container">
        <div class="billing-header-section">
            <h1 class="billing-main-title">Why Pick Amdsol for Cardiology Billing Services?</h1>
            <p class="billing-subtitle-text">Streamlining Your Practice's Financial Workflow with Expertise and Accuracy</p>
        </div>

        <div class="services-grid-wrapper">
            <!-- Card 1 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (20).png') }}" alt="Insurance Checks">
                        </div>
                        <h3 class="service-title-text">Insurance Checks<br>and Approvals</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Insurance Checks<br>and Approvals</h3>
                        <p class="service-description-text">We verify insurance eligibility and secure pre-authorizations before procedures, ensuring smooth claim processing and reducing denial rates for your cardiology practice.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (21).png') }}" alt="Special Heart Procedure">
                        </div>
                        <h3 class="service-title-text">Special Heart<br>Procedure Coding</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Special Heart<br>Procedure Coding</h3>
                        <p class="service-description-text">Expert coding for complex cardiac procedures including catheterizations, stent placements, and electrophysiology studies using current CPT and ICD-10 codes for maximum reimbursement.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (27).png') }}" alt="Smart Claim">
                        </div>
                        <h3 class="service-title-text">Smart Claim<br>Handling</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Smart Claim<br>Handling</h3>
                        <p class="service-description-text">Automated claim scrubbing and validation before submission reduces errors by 95%, accelerating payment cycles and improving cash flow for your practice.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (28).png') }}" alt="Denied Claims">
                        </div>
                        <h3 class="service-title-text">Dealing With<br>Denied Claims</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Dealing With<br>Denied Claims</h3>
                        <p class="service-description-text">Our denial management team analyzes rejection patterns, files appeals with supporting documentation, and recovers lost revenue through strategic resubmissions.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (29).png') }}" alt="Patient Costs">
                        </div>
                        <h3 class="service-title-text">Helping Patients<br>With Costs</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Helping Patients<br>With Costs</h3>
                        <p class="service-description-text">Clear cost estimates, payment plan options, and financial counseling help patients understand their responsibilities and improve collection rates.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/stats 1 (2).png') }}" alt="Data Analytics">
                        </div>
                        <h3 class="service-title-text">Using Data<br>to Improve</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Using Data<br>to Improve</h3>
                        <p class="service-description-text">Real-time dashboards and monthly reports track KPIs, identify revenue opportunities, and provide actionable insights to optimize your billing performance.</p>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (25).png') }}" alt="Compliance">
                        </div>
                        <h3 class="service-title-text">Staying Within<br>the Rules</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Staying Within<br>the Rules</h3>
                        <p class="service-description-text">Stay compliant with HIPAA, Medicare guidelines, and payer-specific requirements through regular audits, staff training, and updated coding practices.</p>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="service-card-item">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="service-icon-holder">
                            <img src="{{ asset('assets/images/cardiology/Vector (26).png') }}" alt="System Improvement">
                        </div>
                        <h3 class="service-title-text">Making the Whole<br>System Better</h3>
                    </div>
                    <div class="card-back">
                        <h3 class="card-back-title">Making the Whole<br>System Better</h3>
                        <p class="service-description-text">Continuous workflow optimization, technology integration, and process improvements reduce administrative burden and increase overall practice efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Outsource Section -->
    <div class="outsource-section-wrapper">
        <div class="outsource-content-container">
            <div class="outsource-image-section">
                <img src="{{ asset('assets/images/cardiology/whycardiology.jpg') }}" alt="Cardiology Doctors" class="outsource-image">
            </div>
            <div class="outsource-text-section">
                <h2 class="outsource-heading">Why Cardiology Practices Choose to Outsource Their Billing</h2>
                <p class="outsource-description">
                    Cardiology billing can be overwhelming with specialized procedures, constantly changing codes, and complex insurance rules. Outsourcing to experts ensures claims are accurately coded, submitted on time, and followed up professionally. This means fewer denials, faster reimbursements, and more time to focus on patient care. From solo physicians to large hospital units, practices trust professional billing services to simplify revenue cycles, reduce stress, and keep operations running smoothly.
                </p>
            </div>
        </div>
    </div>

    <!-- Comparison Section -->
    <div class="comparison-section-wrapper">
        <div class="comparison-container">
            <div class="comparison-heading-wrapper">
                <h2 class="comparison-main-heading">How Outsourced Cardiology Billing Transforms Your Practice</h2>
            </div>
            
            <div class="comparison-grid">
                <!-- Headers Row -->
                <div class="comparison-headers">
                    <div class="comparison-heading-left">
                        <span class="comparison-heading">Without Cardiology Billing Services</span>
                    </div>
                    <div class="comparison-heading-center"></div>
                    <div class="comparison-heading-right">
                        <span class="comparison-heading">With Cardiology Billing Services</span>
                    </div>
                </div>

                <!-- Comparison Rows -->
                <div class="comparison-rows">
                    <!-- Row 1: Billing -->
                    <div class="comparison-row">
                        <div class="comparison-text-left">
                            <p class="comparison-text">Mistakes in coding or incomplete documentation can result in denied cardiology claims and lost revenue.</p>
                        </div>
                        <div class="comparison-category">Billing</div>
                        <div class="comparison-text-right">
                            <p class="comparison-text">Maintaining an internal billing team can be costly due to expenses for hiring, training, and managing staff and systems.</p>
                        </div>
                    </div>

                    <!-- Row 2: Administration -->
                    <div class="comparison-row">
                        <div class="comparison-text-left">
                            <p class="comparison-text">Administrative staff may become overburdened, spending excessive time on billing instead of patient care.</p>
                        </div>
                        <div class="comparison-category">Administration</div>
                        <div class="comparison-text-right">
                            <p class="comparison-text">Outsourcing billing reduces admin work, letting staff focus more on patient care and improving the patient experience.</p>
                        </div>
                    </div>

                    <!-- Row 3: Reimbursements -->
                    <div class="comparison-row">
                        <div class="comparison-text-left">
                            <p class="comparison-text">Slow claim submissions and delayed follow-ups can negatively impact reimbursements and cash flow.</p>
                        </div>
                        <div class="comparison-category">Reimbursements</div>
                        <div class="comparison-text-right">
                            <p class="comparison-text">Professional cardiology billing services simplify claim submissions and follow-ups, ensuring faster payments and steady cash flow.</p>
                        </div>
                    </div>

                    <!-- Row 4: Regulatory -->
                    <div class="comparison-row">
                        <div class="comparison-text-left">
                            <p class="comparison-text">Keeping up with constantly changing healthcare regulations and payer rules can be challenging for in-house teams.</p>
                        </div>
                        <div class="comparison-category">Regulatory</div>
                        <div class="comparison-text-right">
                            <p class="comparison-text">Expert billing teams stay current with healthcare regulations, keeping the practice compliant and avoiding potential penalties.</p>
                        </div>
                    </div>

                    <!-- Row 5: Cost -->
                    <div class="comparison-row">
                        <div class="comparison-text-left">
                            <p class="comparison-text">Maintaining an internal billing team can be costly due to expenses for hiring, training, and managing staff and systems.</p>
                        </div>
                        <div class="comparison-category">Cost</div>
                        <div class="comparison-text-right">
                            <p class="comparison-text">By outsourcing, cardiology practices can lower costs associated with in-house billing staff and infrastructure, while boosting billing efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Layout (Hidden on Desktop) -->
            <div class="comparison-mobile">
                <!-- With Section -->
                <div class="comparison-mobile-section">
                    <h3 class="comparison-mobile-heading">With Cardiology Billing Services</h3>
                    <p class="comparison-mobile-text">Maintaining an internal billing team can be costly due to expenses for hiring, training, and managing staff and systems.</p>
                    <p class="comparison-mobile-text">Outsourcing billing reduces admin work, letting staff focus more on patient care and improving the patient experience.</p>
                    <p class="comparison-mobile-text">Professional cardiology billing services simplify claim submissions and follow-ups, ensuring faster payments and steady cash flow.</p>
                    <p class="comparison-mobile-text">Expert billing teams stay current with healthcare regulations, keeping the practice compliant and avoiding potential penalties.</p>
                    <p class="comparison-mobile-text">By outsourcing, cardiology practices can lower costs associated with in-house billing staff and infrastructure, while boosting billing efficiency.</p>
                </div>

                <!-- Without Section -->
                <div class="comparison-mobile-section">
                    <h3 class="comparison-mobile-heading">Without Cardiology Billing Services</h3>
                    <p class="comparison-mobile-text">Mistakes in coding or incomplete documentation can result in denied cardiology claims and lost revenue.</p>
                    <p class="comparison-mobile-text">Administrative staff may become overburdened, spending excessive time on billing instead of patient care.</p>
                    <p class="comparison-mobile-text">Slow claim submissions and delayed follow-ups can negatively impact reimbursements and cash flow.</p>
                    <p class="comparison-mobile-text">Keeping up with constantly changing healthcare regulations and payer rules can be challenging for in-house teams.</p>
                    <p class="comparison-mobile-text">Maintaining an internal billing team can be costly due to expenses for hiring, training, and managing staff and systems.</p>
                </div>
            </div>
        </div>
    </div>
     <section class="billing-solutions">
            <h2>Billing Solutions for Every Specialty</h2>
            <p class="subtitle">We offer smart billing services to maximize practice revenue and minimize denials.</p>

          

            <div class="specialties-grid">
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno1.png') }}" alt="Electrocardiogram" class="specialty-icon">
                        <span>Electrocardiogram</span>
                    </div>
                    <div class="specialty-description">
                        Recording of heart's electrical activity to diagnose arrhythmias and cardiac conditions.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno2.png') }}" alt="Pharmacologic" class="specialty-icon">
                        <span>Pharmacologic</span>
                    </div>
                    <div class="specialty-description">
                        Stress testing using medication to evaluate heart function and blood flow.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno3.png') }}" alt="Transthoracic Echocardiography" class="specialty-icon">
                        <span>Transthoracic Echocardiography</span>
                    </div>
                    <div class="specialty-description">
                        Ultrasound imaging to assess heart structure, function, and valve performance.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno4.png') }}" alt="Holter Monitor" class="specialty-icon">
                        <span>Holter and Event Monitor Analysis</span>
                    </div>
                    <div class="specialty-description">
                        Continuous heart rhythm monitoring to detect irregular heartbeats and arrhythmias.
                    </div>
                </div>

                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno5.png') }}" alt="Cardiac Catheterization" class="specialty-icon">
                        <span>Cardiac Catheterization and Angiography</span>
                    </div>
                    <div class="specialty-description">
                        Invasive procedure to diagnose and treat coronary artery disease and blockages.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno6.png') }}" alt="Excision" class="specialty-icon">
                        <span>Excision of Corns and Calluses</span>
                    </div>
                    <div class="specialty-description">
                        Removal of hardened skin tissue caused by pressure or friction on feet.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno7.png') }}" alt="Pacemaker" class="specialty-icon">
                        <span>Pacemaker and ICD Implantation</span>
                    </div>
                    <div class="specialty-description">
                        Surgical implantation of devices to regulate heart rhythm and prevent sudden cardiac arrest.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno8.png') }}" alt="Electrophysiology" class="specialty-icon">
                        <span>Electrophysiology Studies and Ablation</span>
                    </div>
                    <div class="specialty-description">
                        Diagnostic testing and treatment to correct abnormal heart rhythms using catheter ablation.
                    </div>
                </div>

                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno9.png') }}" alt="Valve Replacement" class="specialty-icon">
                        <span>Transcatheter Valve Replacements</span>
                    </div>
                    <div class="specialty-description">
                        Minimally invasive procedure to replace damaged heart valves without open-heart surgery.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno10.png') }}" alt="LVAD" class="specialty-icon">
                        <span>Left Ventricular Assist Device (LVAD) Management</span>
                    </div>
                    <div class="specialty-description">
                        Mechanical circulatory support device management for advanced heart failure patients.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno11.png') }}" alt="Cardiac Imaging" class="specialty-icon">
                        <span>Cardiac MRI and CT Imaging</span>
                    </div>
                    <div class="specialty-description">
                        Advanced imaging techniques to visualize heart anatomy and detect cardiovascular disease.
                    </div>
                </div>
                <div class="specialty-item">
                    <div class="specialty-content">
                        <img src="{{ asset('assets/images/cardiology/cardiologyno12.png') }}" alt="Cardiac Rehabilitation" class="specialty-icon">
                        <span>Cardiac Rehabilitation Billing</span>
                    </div>
                    <div class="specialty-description">
                        Supervised exercise and education programs for patients recovering from cardiac events.
                    </div>
                </div>
                
              
     </div>
        @include('partials.cta-section', [
    'title' => 'Find Your Specialty Solution',
    'description' => 'Customized billing services for your medical specialty.',
    'buttonText' => 'Explore Solutions',
    'buttonLink' => url('contact-us.php')
])

    </div>
</div>

@endsection
