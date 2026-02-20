<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', $site->meta_title ?? $site->default_meta_title)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="@yield('meta_description', $site->meta_descr ?? $site->default_meta_descr)">
    <meta name="keywords" content="@yield('meta_keywords', $site->meta_keywords ?? $site->default_meta_keywords)">
    <meta name="google-site-verification" content="b4ou-sLla8wDu3s7-gAB9K_J5Hhlta_vKlWr5mFLZqo" />
    <meta name="ROBOTS" CONTENT="INDEX,FOLLOW">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    
    <script>
        // Allow browser to restore scroll position on reload/back/forward
        if (history.scrollRestoration) {
            history.scrollRestoration = 'auto';
        }
    </script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- css files -->
    <link href="{{ asset('assets/css/css_slider.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/bellmedex.css') }}?v={{ time() }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@amdsol">
    <meta name="twitter:creator" content="@amdsol">
    <meta name="twitter:title" content="@yield('title', $site->meta_title ?? $site->default_meta_title)">
    <meta name="twitter:description" content="@yield('meta_description', $site->meta_descr ?? $site->default_meta_descr)">
    <meta property="og:title" content="@yield('title', $site->meta_title ?? $site->default_meta_title)">
    <meta property="og:site_name" content="amdsol.com">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="@yield('meta_description', $site->meta_descr ?? $site->default_meta_descr)">
    <meta property="og:type" content="website">
</head>
<body>

<!-- top header -->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <ul class="d-flex header-w3_pvt">
                    <li class="mr-4 text-white">
                        <span class="fa fa-envelope-open mr-2"></span>
                        <a href="mailto:Info@AMDSOL.COM" class="text-white" style="text-transform: none;">Info@amdsol.com</a>
                    </li>
                    <li class="text-white">
                        <span class="fa fa-phone mr-2"></span>
                        <a href="tel:+18477373401" class="text-white" style="text-decoration: none;">Call Us +1 (847) 737-3401</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 text-right">
                <div class="icon-social">
                    <a href="{{ $site->facebook ?? '#' }}" class="text-white mx-2"><span class="fa fa-facebook"></span></a>
                    <a href="{{ $site->twitter ?? '#' }}" class="text-white mx-2"><span class="fa fa-twitter"></span></a>
                    <a href="{{ $site->linkedin ?? '#' }}" class="text-white mx-2"><span class="fa fa-linkedin"></span></a>
                </div>
                </div>
            </div>
    </div>
</div>

<header>
    <div class="container">
        <div class="header-flex">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_white.png') }}" alt="Logo" class="logo-img">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul class="menu">
                    <li class="dropdown-li">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="dropdown-li">
                        <a href="#" class="nav-link">Company <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-custom">
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('contact-us.php') }}">Contact</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-li">
                        <a href="#" class="nav-link">Services <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-custom">
                            <li><a href="{{ url('services') }}">Medical Billing Services</a></li>
                            @foreach($service_list as $il)
                            <li><a href="{{ url($il->seokey) }}">{{ $il->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown-li">
                        <a href="#" class="nav-link">Our Expertise <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-custom">
                            <li><a href="{{ url('medical-billing-outsourcing') }}">Outsource Medical Billing</a></li>
                            <li><a href="{{ url('small-practices') }}">Small Practices</a></li>
                            <li><a href="{{ url('large-practices') }}">Large Practices</a></li>
                            <li><a href="{{ url('denial-management-services') }}">Denial Management</a></li>
                            <li><a href="{{ url('physician-billing-services') }}">Physician Billing Services</a></li>
                            <li><a href="{{ url('hospital-billing-services') }}">Hospital Billing Services</a></li>
                        </ul>
                    </li>
                  
                    <li class="dropdown-li">
                        <a href="{{ url('specialties') }}" class="nav-link">Specialties <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-custom">
                            <li><a href="{{ url('cardiology-billing-services') }}">Cardiology</a></li>
                            <li><a href="{{ url('pediatric-billing-services') }}">Pediatric</a></li>
                            <li><a href="{{ url('radiology-billing-services') }}">Radiology</a></li>
                            <li><a href="{{ url('neurology-billing-services') }}">Neurology</a></li>
                        </ul>
                    </li>
                      <li class="dropdown-li">
                        <a href="{{ url('case-studies') }}" class="nav-link">Case Studies</a>
                    </li>

                    <li>
                        <a href="{{ url('request-demo') }}" class="talk-btn">
                            Talk To An Expert <i class="fa fa-arrow-right ml-2"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Mobile Toggle Button -->
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <div class="mobile-nav-header">
            <img src="{{ asset('images/logo_white.png') }}" alt="Logo" class="mobile-logo">
            <button class="mobile-nav-close" id="mobileNavClose">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <ul class="mobile-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="mobile-dropdown">
                <a href="#" class="mobile-dropdown-toggle">Company <i class="fa fa-angle-down"></i></a>
                <ul class="mobile-dropdown-menu">
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('contact-us.php') }}">Contact</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                </ul>
            </li>
            <li class="mobile-dropdown">
                <a href="#" class="mobile-dropdown-toggle">Services <i class="fa fa-angle-down"></i></a>
                <ul class="mobile-dropdown-menu">
                    <li><a href="{{ url('services') }}">Medical Billing Services</a></li>
                    @foreach($service_list as $il)
                            <li><a href="{{ url($il->seokey) }}">{{ $il->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="mobile-dropdown">
                <a href="#" class="mobile-dropdown-toggle">Our Expertise <i class="fa fa-angle-down"></i></a>
                <ul class="mobile-dropdown-menu">
                    <li><a href="{{ url('medical-billing-outsourcing') }}">Outsource Medical Billing</a></li>
                    <li><a href="{{ url('small-practices') }}">Small Practices</a></li>
                    <li><a href="{{ url('large-practices') }}">Large Practices</a></li>
                    <li><a href="{{ url('denial-management-services') }}">Denial Management</a></li>
                    <li><a href="{{ url('physician-billing-services') }}">Physician Billing Services</a></li>
                    <li><a href="{{ url('hospital-billing-services') }}">Hospital Billing Services</a></li>
                </ul>
            </li>
            <li><a href="{{ url('case-studies') }}">Case Studies</a></li>
            <li class="mobile-dropdown">
                <div class="mobile-dropdown-header">
                    <a href="{{ url('specialties') }}" class="mobile-dropdown-link">Specialties</a>
                    <span class="mobile-dropdown-toggle"><i class="fa fa-angle-down"></i></span>
                </div>
                <ul class="mobile-dropdown-menu">
                    <li><a href="{{ url('cardiology-billing-services') }}">Cardiology</a></li>
                    <li><a href="{{ url('radiology-billing-services') }}">Radiology</a></li>
                    <li><a href="{{ url('neurology-billing-services') }}">Neurology</a></li>
                    <li><a href="{{ url('pediatric-billing-services') }}">Pediatrics</a></li>
                </ul>
            </li>

            <li class="mobile-cta">
                <a href="{{ url('request-demo') }}" class="talk-btn-mobile">
                    Talk To An Expert <i class="fa fa-arrow-right ml-2"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileNav = document.getElementById('mobileNav');
    const mobileNavClose = document.getElementById('mobileNavClose');
    const mobileNavOverlay = document.getElementById('mobileNavOverlay');
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    
    // Open mobile menu
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileNav.classList.add('active');
            mobileNavOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }
    
    // Close mobile menu
    function closeMobileMenu() {
        mobileNav.classList.remove('active');
        mobileNavOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    if (mobileNavClose) {
        mobileNavClose.addEventListener('click', closeMobileMenu);
    }
    
    if (mobileNavOverlay) {
        mobileNavOverlay.addEventListener('click', closeMobileMenu);
    }
    
    // Mobile dropdown toggle
    mobileDropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const parent = this.closest('.mobile-dropdown');
            const isActive = parent.classList.contains('active');
            
            // Close all dropdowns
            document.querySelectorAll('.mobile-dropdown').forEach(function(dropdown) {
                dropdown.classList.remove('active');
            });
            
            // Toggle current dropdown
            if (!isActive) {
                parent.classList.add('active');
            }
        });
    });
});
</script>

@yield('content')

@include('layouts.footer')

<div class="move-top text-right" id="scrollToTop">
    <a href="#" class="move-top scroll-to-top"> 
        <span class="fa fa-angle-up mb-3" aria-hidden="true"></span>
    </a>
</div>

<script>
// Scroll to top functionality
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    const scrollToTopLink = document.querySelector('.scroll-to-top');
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.style.display = 'block';
            scrollToTopBtn.style.opacity = '1';
        } else {
            scrollToTopBtn.style.opacity = '0';
            setTimeout(function() {
                if (window.pageYOffset <= 300) {
                    scrollToTopBtn.style.display = 'none';
                }
            }, 300);
        }
    });
    
    // Smooth scroll to top when clicked
    if (scrollToTopLink) {
        scrollToTopLink.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Initially hide the button
    scrollToTopBtn.style.display = 'none';
});
</script>

@yield('scripts')
</body>
</html>
