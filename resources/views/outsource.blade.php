@extends('layouts.app')

@section('content')

    <style>
         /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

        html {
            scroll-behavior: smooth;
        }

        /* body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: #ffffff;
        } */

        /* .container {
            max-width: 1440px;
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
            padding: 0;
        } */

        /* Add proper spacing between sections */
        section {
            margin-bottom: 40px;
        }

        section:last-child {
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            section {
                margin-bottom: 30px;
            }
            
            section:last-child {
                margin-bottom: 20px;
            }
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
            min-height: 280px;
            background-color: #1a3a5c;
            background-image: url("{{ asset('assets/images/outsource/hero.jpeg') }}");
            background-size: cover;
            background-position: center right;
            background-repeat: no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding: 30px 0px;
            margin: 0 0 30px 0;
        }

        @media (max-width: 1024px) {
            .hero-section {
                min-height: 380px;
                background-size: cover;
                background-position: center right;
                padding: 50px 0px;
                margin-bottom: 80px;
            }
        }

        @media (max-width: 768px) {
            /* Hero Mobile Updates */
            .hero-section {
                min-height: auto;
                padding: 0 0 30px 0;
                background-image: none !important;
                flex-direction: column;
                background-color: #002147;
                margin-bottom: 40px;
            }

            .hero-section::before {
                display: none;
            }

            .hero-content {
                padding-left: 20px;
                padding-right: 20px;
                text-align: center;
                width: 100%;
                max-width: 100%;
            }

            .hero-section h1 {
                font-size: 28px;
                text-align: center;
                max-width: 100%;
                margin-bottom: 15px;
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
        }

        @media (max-width: 480px) {
            .hero-section {
                min-height: 320px;
                padding: 30px 0px;
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
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        .hero-text-wrapper {
            max-width: 600px;
        }


        .hero-section h1 {
            width: 100%;
            font-size: 34px;
            font-weight: 700;
            color: white;
            line-height: 1.2;
            margin-bottom: 12px;
        }

        .hero-section p {
            font-size: 16px;
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
            
        .medical-billing-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 40px;
        }

        .billing-content-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .left-content {
            padding-right: 30px;
        }

        .left-content h1 {
            color: #000000;
            font-size: 34px;
            line-height: 1.2;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .left-content p {
            color: #000000;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .strategies-text {
            color: #000000;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .checklist {
            list-style: none;
            margin-bottom: 20px;
        }

        .checklist li {
            display: flex;
            align-items: center;
            color: #000000;
            font-size: 1em;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .checklist li::before {
            content: '✓';
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: #002147;
            color: white;
            border-radius: 4px;
            margin-right: 15px;
            font-weight: bold;
            font-size: 0.9em;
            flex-shrink: 0;
        }

        .cta-button {
            display: inline-block;
            background-color: #002147;
            color: white;
            padding: 16px 35px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            background-color: #002147;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(61, 53, 100, 0.3);
        }

        .right-image {
            position: relative;
            border-radius: 20px;
            width: 100%;
            max-width: 550px;
            height: 320px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }

        .right-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 1024px) {
            .billing-content-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .left-content {
                padding-right: 0;
            }

            .right-image {
                max-height: 500px;
            }
        }

        @media (max-width: 768px) {
            .medical-billing-section {
                padding: 50px 20px;
            }

            .left-content h1 {
                font-size: 2em;
            }

            .left-content p,
            .strategies-text,
            .checklist li {
                font-size: 1em;
            }

            .cta-button {
                font-size: 1em;
                padding: 14px 30px;
            }
        }

        @media (max-width: 480px) {
            .left-content h1 {
                font-size: 1.6em;
            }

            .billing-content-wrapper {
                gap: 30px;
            }
        }

        .comparison-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 40px;
        }

        .section-title {
            text-align: center;
            color: #002147;
            font-size: 34px;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .comparison-table-wrapper {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
        }

        .comparison-table {
            width: 100%;
            border-collapse: collapse;
        }

        .comparison-table thead {
            background-color: #f7fafc;
        }

        .comparison-table thead th {
            padding: 18px 25px;
            text-align: left;
            font-size: 1.05em;
            font-weight: 700;
            color: #002147;
            border-bottom: 2px solid #e2e8f0;
            position: relative;
        }

        /* Add vertical dividing line between columns */
        .comparison-table thead th:first-child::after,
        .comparison-table tbody td:first-child::after {
            content: '';
            position: absolute;
            right: 0;
            top: 15%;
            height: 70%;
            width: 2px;
            background-color: #e2e8f0;
        }

        .comparison-table thead th:first-child {
            width: 50%;
        }

        .comparison-table thead th:last-child {
            width: 50%;
        }

        .comparison-table tbody tr {
            border-bottom: 1px solid #e2e8f0;
        }

        .comparison-table tbody tr:last-child {
            border-bottom: none;
        }

        .comparison-table tbody td {
            padding: 18px 25px;
            vertical-align: top;
            position: relative;
        }

        .comparison-item {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .main-point {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 1em;
            color: #2d3748;
            font-weight: 600;
        }

        .icon-negative {
            width: 22px;
            height: 22px;
            min-width: 22px;
            border-radius: 50%;
            background-color: #fee;
            border: 2px solid #dc2626;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2px;
        }

        .icon-negative::before {
            content: '×';
            color: #dc2626;
            font-size: 1.3em;
            font-weight: bold;
            line-height: 1;
        }

        .icon-positive {
            width: 22px;
            height: 22px;
            min-width: 22px;
            border-radius: 3px;
            background-color: #22c55e;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2px;
        }

        .icon-positive::before {
            content: '✓';
            color: white;
            font-size: 0.9em;
            font-weight: bold;
        }

        .sub-points {
            list-style: none;
            margin-left: 30px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .sub-points li {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            color: #4a5568;
            font-size: 0.9em;
            line-height: 1.5;
        }

        .sub-points li::before {
            content: '•';
            color: #4a5568;
            font-weight: bold;
            font-size: 1.2em;
            line-height: 1.4;
        }

        @media (max-width: 1024px) {
            .comparison-section {
                padding: 60px 30px;
            }

            .section-title {
                font-size: 2em;
            }

            .comparison-table thead th,
            .comparison-table tbody td {
                padding: 20px;
            }

            /* Hide mobile cards on desktop */
            .comparison-mobile {
                display: none;
            }
        }

        /* Mobile card layout - hidden by default */
        .comparison-mobile {
            display: none;
        }

        .comparison-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
        }

        .comparison-card-header {
            font-size: 1.15em;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
        }

        .comparison-card .comparison-item {
            margin-bottom: 25px;
        }

        .comparison-card .comparison-item:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .comparison-section {
                padding: 40px 20px;
            }

            .section-title {
                font-size: 1.6em;
                margin-bottom: 30px;
            }

            /* Show mobile cards, hide table */
            .comparison-table-wrapper {
                display: none;
            }

            .comparison-mobile {
                display: block;
            }

            .comparison-card {
                padding: 20px;
            }

            .comparison-card-header {
                font-size: 1.05em;
            }

            .main-point {
                font-size: 0.95em;
            }

            .sub-points li {
                font-size: 0.9em;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 1.4em;
            }

            .comparison-card {
                padding: 18px;
            }
        }

        .outsourcing-benefits-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 50px 40px;
            background: #f8f9fa;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            color: #000000;
            font-size: 34px;
            line-height: 1.3;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .section-description {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            color: #002147;
            font-size: 1.05em;
            line-height: 1.7;
        }

        .section-description p {
            margin-bottom: 15px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-top: 40px;
            align-items: start;
        }

        .left-content h3 {
            color: #002147;
            font-size: 34px;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.3;
        }

        .subtitle {
            color: #4a5568;
            font-size: 1.05em;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .benefits-checklist {
            list-style: none;
        }

        .benefits-checklist li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 18px;
            color: #002147;
            font-size: 1.02em;
            line-height: 1.6;
        }

        .benefits-checklist li::before {
            content: '✓';
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: #002147;
            color: white;
            border-radius: 4px;
            margin-right: 15px;
            font-weight: bold;
            font-size: 0.9em;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .right-content {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .progress-item {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .progress-label {
            color: #000000;
            font-size: 1.05em;
            font-weight: 600;
        }

        .progress-percentage {
            color: #002147;
            font-size: 1.1em;
            font-weight: 700;
        }

        .progress-bar-bg {
            width: 100%;
            height: 12px;
            background-color: #e2e8f0;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #002147 0%, #002147 100%);
            border-radius: 20px;
            transition: width 1.5s ease-out;
        }

        @keyframes progressLoad {
            from {
                width: 0;
            }
        }

        .progress-bar-fill {
            animation: progressLoad 1.5s ease-out;
        }

        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .outsourcing-benefits-section {
                padding: 60px 30px;
            }

            .section-header h2 {
                font-size: 2em;
            }
        }

        @media (max-width: 768px) {
            .outsourcing-benefits-section {
                padding: 50px 20px;
            }

            .section-header h2 {
                font-size: 1.7em;
            }

            .section-description {
                font-size: 1em;
            }

            .left-content h3 {
                font-size: 1.4em;
            }

            .benefits-checklist li {
                font-size: 0.98em;
            }

            .progress-label {
                font-size: 1em;
            }

            .progress-percentage {
                font-size: 1em;
            }

            .content-grid {
                gap: 40px;
                margin-top: 40px;
            }
        }

        @media (max-width: 480px) {
            .section-header h2 {
                font-size: 1.4em;
            }

            .left-content h3 {
                font-size: 1.2em;
            }

            .benefits-checklist li {
                font-size: 0.95em;
                margin-bottom: 20px;
            }

            .right-content {
                gap: 30px;
            }
        }

        .healthcare-section {
            display: flex;
            align-items: start;
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 40px;
            gap: 40px;
        }

        .image-container {
            flex: 1;
            min-width: 300px;
            max-height: 350px;
        }

        .image-container img {
            width: 80%;
            height: 100%;
            max-height: 350px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .content-container {
            flex: 1;
            min-width: 300px;
        }

        .content-container h2 {
            font-size: 34px;
            color: #002147;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .content-container p {
            font-size: 1rem;
            color: #000000;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        @media (max-width: 968px) {
            .healthcare-section {
                flex-direction: column;
                padding: 60px 30px;
                gap: 40px;
            }

            .content-container h2 {
                font-size: 2rem;
            }

            .content-container p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .healthcare-section {
                padding: 40px 20px;
            }

            .content-container h2 {
                font-size: 1.75rem;
            }

            .cta-button {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }

        .billing-solutions-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 40px;
            background: #f8f9fa;
        }

        .billing-solutions-section .section-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .billing-solutions-section .section-header h2 {
            font-size: 30px;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .billing-solutions-section .section-header h2 .highlight {
            color: #002147;
            font-weight: 700;
        }

        .billing-solutions-section .section-header p {
            font-size: 1.15rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 25px;
            justify-items: center;
        }

        /* Center last two cards */
        .service-card:nth-child(7),
        .service-card:nth-child(8) {
            grid-column: span 1;
        }

        .service-card:nth-child(7) {
            margin-left: auto;
            margin-right: 12.5px;
        }

        .service-card:nth-child(8) {
            margin-left: 12.5px;
            margin-right: auto;
        }

        @media (max-width: 1100px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .service-card:nth-child(7),
            .service-card:nth-child(8) {
                margin: 0;
            }
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .service-card:nth-child(7),
            .service-card:nth-child(8) {
                margin: 0;
            }
        }

        .service-card {
            background: white;
            padding: 25px 20px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(135deg, #002147 0%, #002147 100%);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.15);
            border-color: #002147;
        }

        .icon-wrapper {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #002147 0%, #002147 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .service-card:hover .icon-wrapper {
            transform: rotate(5deg) scale(1.1);
        }

        .icon-wrapper svg {
            width: 35px;
            height: 35px;
            stroke: white;
            fill: none;
            stroke-width: 2;
        }

        .service-card h3 {
            font-size: 1.25rem;
            color: #002147;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .service-card p {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .billing-solutions-section {
                padding: 60px 20px;
            }

            .billing-solutions-section .section-header h2 {
                font-size: 2rem;
            }

            .billing-solutions-section .section-header p {
                font-size: 1rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .service-card {
                padding: 30px 25px;
            }
        }

        @media (max-width: 480px) {
            .billing-solutions-section .section-header h2 {
                font-size: 1.6rem;
            }

            .icon-wrapper {
                width: 60px;
                height: 60px;
            }

            .icon-wrapper svg {
                width: 30px;
                height: 30px;
            }

            .service-card h3 {
                font-size: 1.2rem;
            }
        }

        .cta-pricing-section {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px 30px 40px;
        }

        .cta-container {
            background: linear-gradient(135deg, #001a33 0%, #002d5a 100%);
            border-radius: 40px;
            padding: 35px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            min-height: 200px;
        }

        .cta-container::before {
            content: '';
            position: absolute;
            top: -44px;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('assets/images/outsource/wave.png') }}");
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
            font-size: 34px;
            font-weight: 700;
            color: white;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        .cta-content p {
            width: 100%;
            margin: 0 auto 20px;
            font-weight: 400;
            text-align: center;
            font-size: 18px;
            line-height: 26px;
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

        @media (max-width: 768px) {
            .cta-pricing-section {
                padding: 0 30px 60px 30px;
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
                padding: 0 20px 50px 20px;
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
        <section class="hero-section">
            <img src="{{ asset('assets/images/outsource/hero.jpeg') }}" alt="Outsource Medical Billing" class="mobile-hero-img" style="display: none;">
            <div class="hero-content">
                <h1>Medical Billing Outsourcing Made Simple</h1>
                <p>Experience thorough compliance, robust technology, and faster reimbursements.</p>
            </div>
        </section>

        <section class="medical-billing-section">
            <div class="billing-content-wrapper">
                <div class="left-content">
                    <h1>Outsource Medical Billing today to Reduce Errors, Minimize Revenue Holes, and Maximize Collections</h1>
                    
                    <p>At AmdSol, we proactively handle charge posting and minimize the time between the date of providing a service & the date of posting. Slow Claims submissions and late incoming payments can be destructive for your practice and we nip it in the bud with our 24/7 available efficient billing & coding team.</p>
                    
                    <p class="strategies-text">We have the strategies and the resources to actively manage & counter</p>
                    
                    <ul class="checklist">
                        <li>Lost revenue in denied claims</li>
                        <li>Unaddressed old claims</li>
                        <li>Delayed and denied claims</li>
                    </ul>
                    
                   
                </div>
                
                <div class="right-image">
                    <img src="{{ asset('assets/images/outsource/outsouse.jpg') }}">
                </div>
            </div>
        </section>

        <section class="comparison-section">
            <h2 class="section-title">Let's Compare In-house Medical Billing Vs.<br>Outsourcing with AmdSol</h2>
            
            <!-- Desktop Table View -->
            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Inhouse Medical Billing</th>
                            <th>Outsourcing Medical Billing with AmdSol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-negative"></span>
                                        <span>Loss revenue in</span>
                                    </div>
                                    <ul class="sub-points">
                                        <li>Annual salaries and benefits</li>
                                        <li>Office supplies, purchasing, and maintaining billing software.</li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-positive"></span>
                                        <span>No revenue loss in</span>
                                    </div>
                                    <ul class="sub-points">
                                        <li>Hiring staff, upgrading and maintaining software</li>
                                        <li>Spending on billing supplies for the office.</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-negative"></span>
                                        <span>Requires dedicated staff with specialized billing knowledge and experience.</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-positive"></span>
                                        <span>Provides access to a team of certified medical billers with extensive industry knowledge.</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-negative"></span>
                                        <span>In-house staff may handle a limited number of claims, leading to potential delays and backlogs.</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-positive"></span>
                                        <span>Outsourced billing services can process claims more efficiently, minimizing delays and maximizing reimbursements</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-negative"></span>
                                        <span>In-house staff must stay up-to-date on ever-changing billing regulations and payer requirements.</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-positive"></span>
                                        <span>AmdSol ensures compliance with all applicable regulations and payer requirements, eliminating the risk of penalties or audits.</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-negative"></span>
                                        <span>In-house staff may be stretched thin with billing tasks, limiting their availability for other practice management activities.</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="comparison-item">
                                    <div class="main-point">
                                        <span class="icon-positive"></span>
                                        <span>Outsourcing allows providers and staff to focus on more patient care and practice growth.</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="comparison-mobile">
                <!-- Card 1 -->
                <div class="comparison-card">
                    <div class="comparison-card-header">Inhouse Medical Billing</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-negative"></span>
                            <span>Loss revenue in</span>
                        </div>
                        <ul class="sub-points">
                            <li>Annual salaries and benefits</li>
                            <li>Office supplies, purchasing, and maintaining billing software.</li>
                        </ul>
                    </div>
                </div>

                <div class="comparison-card">
                    <div class="comparison-card-header">Outsourcing Medical Billing with AmdSol</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-positive"></span>
                            <span>No revenue loss in</span>
                        </div>
                        <ul class="sub-points">
                            <li>Hiring staff, upgrading and maintaining software</li>
                            <li>Spending on billing supplies for the office.</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="comparison-card">
                    <div class="comparison-card-header">Inhouse Medical Billing</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-negative"></span>
                            <span>Requires dedicated staff with specialized billing knowledge and experience.</span>
                        </div>
                    </div>
                </div>

                <div class="comparison-card">
                    <div class="comparison-card-header">Outsourcing Medical Billing with AmdSol</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-positive"></span>
                            <span>Provides access to a team of certified medical billers with extensive industry knowledge.</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="comparison-card">
                    <div class="comparison-card-header">Inhouse Medical Billing</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-negative"></span>
                            <span>In-house staff may handle a limited number of claims, leading to potential delays and backlogs.</span>
                        </div>
                    </div>
                </div>

                <div class="comparison-card">
                    <div class="comparison-card-header">Outsourcing Medical Billing with AmdSol</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-positive"></span>
                            <span>Outsourced billing services can process claims more efficiently, minimizing delays and maximizing reimbursements</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="comparison-card">
                    <div class="comparison-card-header">Inhouse Medical Billing</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-negative"></span>
                            <span>In-house staff must stay up-to-date on ever-changing billing regulations and payer requirements.</span>
                        </div>
                    </div>
                </div>

                <div class="comparison-card">
                    <div class="comparison-card-header">Outsourcing Medical Billing with AmdSol</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-positive"></span>
                            <span>BellMedEx ensures compliance with all applicable regulations and payer requirements, eliminating the risk of penalties or audits.</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="comparison-card">
                    <div class="comparison-card-header">Inhouse Medical Billing</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-negative"></span>
                            <span>In-house staff may be stretched thin with billing tasks, limiting their availability for other practice management activities.</span>
                        </div>
                    </div>
                </div>

                <div class="comparison-card">
                    <div class="comparison-card-header">Outsourcing Medical Billing with AmdSol</div>
                    <div class="comparison-item">
                        <div class="main-point">
                            <span class="icon-positive"></span>
                            <span>Outsourcing allows providers and staff to focus on more patient care and practice growth.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="outsourcing-benefits-section">
            <div class="section-header">
                <h2>Outsourcing your Medical Billing to Trained<br>Industry Specialists is an Ideal Solution for<br>Medical Practices and Practitioners</h2>
                
               
            </div>

            <div class="content-grid">
                <div class="left-content">
                    <h3>We have the expertise to manage each phase with absolute accuracy.</h3>
                    
                    <p class="subtitle">As billing specialists, we lend you a helping hand to</p>
                    
                    <ul class="benefits-checklist">
                        <li>Submit accurate claims, manage patient follow-ups, and communicate with the insurers</li>
                        <li>Maintain the balance between patient care and the necessary administrative tasks to streamline the systems</li>
                        <li>Reduce the overall stress levels in terms of billing complexities</li>
                        <li>Gain access to trained billing and coding industry specialists</li>
                    </ul>
                </div>

                <div class="right-content">
                    <div class="progress-item">
                        <div class="progress-header">
                            <span class="progress-label">Successful Claims Submission</span>
                            <span class="progress-percentage">98%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 98%;"></div>
                        </div>
                    </div>

                    <div class="progress-item">
                        <div class="progress-header">
                            <span class="progress-label">Streamline Administrative Systems</span>
                            <span class="progress-percentage">80%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 80%;"></div>
                        </div>
                    </div>

                    <div class="progress-item">
                        <div class="progress-header">
                            <span class="progress-label">Reduce Billing Complexities</span>
                            <span class="progress-percentage">95%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 95%;"></div>
                        </div>
                    </div>

                    <div class="progress-item">
                        <div class="progress-header">
                            <span class="progress-label">Access to Industry Specialists</span>
                            <span class="progress-percentage">100%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="healthcare-section">
            <div class="content-container">
                <h2>Are You Steering the Wheel of Your Healthcare Practice Efficiently?</h2>
                
                <p>Well, keep your hands on the wheel, but steer it in the right direction.</p>
                
                <p>In the healthcare world, patient care and medical billing are co-dependent yet equally different and unique in essence. Therefore, both need relevant specialists.</p>
                
                <p>Outsourcing billing might seem as if you're losing control over the RCM of your practice. However, in the real world, you are gaining more authority, power, and accuracy over your billing process and overall financial health.</p>
                
                <p>We only take over the non-clinical burden; front and back-end medical billing services, while you stay laser-focused on your core area; patient care.</p>
                
              
            </div>

            <div class="image-container">
                <img src="{{ asset('assets/images/outsource/steering-outsourse.jpg') }}" alt="Steering Healthcare Practice">
            </div>
        </section>

        <section class="billing-solutions-section">
            <div class="section-header">
                <h2>We Deliver Comprehensive <span class="highlight">Medical Billing Solutions</span> to Individual and Large practices</h2>
                <p>Choose one or all of our billing services and manage billing smoothly.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 11l3 3L22 4"></path>
                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                        </svg>
                    </div>
                    <h3>Insurance Verification</h3>
                    <p>Verify patient insurance and eligibility to avoid any last minute surprise bills and ensure accurate billing and coding.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 010 7.75"></path>
                        </svg>
                    </div>
                    <h3>Patient Demographics</h3>
                    <p>Collect patient data such as their name, location, age, sex, address, phone number, etc & patient history for record keeping.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3>Medical coding</h3>
                    <p>Accurately code medical procedures, diagnoses, and treatments to make sure claims are successfully submitted.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h3>Charge Entry</h3>
                    <p>Charges for medical services as well as other important accounting information is entered into the patient accounts.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"></path>
                        </svg>
                    </div>
                    <h3>Payment posting</h3>
                    <p>Payment details are posted into the system and financial status of the patient payments and insurance checks are examined.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                        </svg>
                    </div>
                    <h3>Denial Management</h3>
                    <p>We audit, identify and correct the denial issues immediately and address any denied or delayed claims efficiently.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3>Accounts Receivable Follow-up</h3>
                    <p>Minimize the A/R days by appealing the claims and pursuing end-to-end denial management.</p>
                </div>

                <div class="service-card">
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                    </div>
                    <h3>Patient Statement</h3>
                    <p>Patient statement is created that holds pending patient payment to ensure timely and remaining collections.</p>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        @include('partials.cta-section', [
            'title' => 'Ready to Outsource Your Medical Billing?',
            'description' => 'Let our experts handle your revenue cycle management.',
            'buttonText' => 'Get Free Consultation',
            'buttonLink' => url('contact-us.php')
        ])
@endsection
