@extends('layouts.app')

@section('title', 'Our Services | AMD SOL')
@section('meta_description', 'Explore our comprehensive medical billing and healthcare solutions.')
@section('meta_keywords', 'Medical Billing, EHR, Healthcare Services, AMD SOL')



@section('content')
<style>
.hero-section {
  min-height: 600px;
  background: #fffff
  display: flex;
  align-items: center;
  padding: 60px 0;
}

.hero-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.hero-content h3 {
  color: #002147;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.hero-content h1 {
  color: #002147;
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
  line-height: 1.2;
}

.hero-content p {
  color: #000000;
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 30px;
}

.hero-form {
  background: #fff;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  border: 2px solid #002147;
}

.hero-form h4 {
  color: #002147;
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 25px;
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  color: #333;
  font-weight: 500;
  margin-bottom: 8px;
  font-size: 14px;
}

.form-group input {
  width: 100%;
  padding: 12px 15px;
  border: 2px solid #e9ecef;
  border-radius: 8px;
  font-size: 14px;
  transition: border-color 0.3s ease;
}

.form-group input:focus {
  outline: none;
  border-color: #002147;
}

.book-now-btn {
  width: 100%;
  background: #002147;
  color: white;
  padding: 15px 20px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.book-now-btn::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.2);
  transform: translate(-50%, -50%);
  transition: width 0.6s ease, height 0.6s ease;
}

.book-now-btn:hover::before {
  width: 300px;
  height: 300px;
}

.book-now-btn:hover {
  background: #ffffff;
  color: #000000;
  
  
  border: 1px solid #000000;
}

.about-section {
  padding: 0px 0;
  background: #fff;
  position: relative;
  z-index: 1;
  isolation: isolate;
  margin-bottom: 0;
  padding-bottom: 40px;
}

.section-divider-mobile {
  display: none;
}

.about-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: start;
  position: relative;
  z-index: 1;
}

.about-container * {
  max-width: 100%;
}

.about-image img {
  width: 100%;
  height: 400px;
border-radius:25px;
  object-fit: cover;
  object-position: top left;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
}

.about-content h1 {
  color: #002147;
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 25px;
  line-height: 1.2;
}

.about-content p {
  color: #000000;
  font-size: 16px;
  line-height: 1.7;
  margin-bottom: 30px;
      font-weight: 600;
    line-height: 32px;
}

.learn-more-wrapper {
  text-align: left;
  position: relative;
  z-index: 1;
  overflow: hidden;
  display: inline-block;
  max-width: fit-content;
}

.learn-more-btn {
  display: inline-block;
  background: #002147;
  color: white !important;
  padding: 15px 30px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
  position: relative;
  z-index: 2;
  isolation: isolate;
  
}

.learn-more-btn:hover {
  background: #ffffff;
  color: #000000 !important;
  
  border: 1px solid #000000;
  box-shadow: 0 8px 20px rgba(0, 33, 71, 0.3);
  text-decoration: none;
}

.learn-more-btn:active {
  background: #002147 !important;
  color: white !important;
  border: none;
  transform: translateY(0px);
}

.about-content {
  pointer-events: auto;
  position: relative;
  z-index: 1;
  overflow: visible;
}

.about-content > h1,
.about-content > p {
  pointer-events: none;
}

.learn-more-wrapper,
.learn-more-btn {
  pointer-events: auto;
}

@media (max-width: 768px) {
  .hero-container {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .learn-more-wrapper {
    text-align: center;
  }
  
  .hero-content h1 {
    font-size: 36px;
  }
  
  .hero-form {
    padding: 30px;
  }
  
  .about-container {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .about-section {
    padding: 0;
  }
  
  .section-divider-mobile {
    display: none;
  }
  
  .about-image {
    order: 1;
  }
  
  .about-content {
    order: 2;
  }
  
  .about-content {
    order: 1;
  }
  
  .about-content h1 {
    font-size: 32px;
  }
}

.billing-process-section {
  padding: 40px 0;
  background: #fff;
  margin-top: 20px;
  position: relative;
  z-index: 2;
  isolation: isolate;
  pointer-events: auto;
}

.billing-process-section * {
  pointer-events: auto;
}

.billing-process-container {
  position: relative;
  z-index: 1;
}

.billing-process-container {
  
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

.billing-process-container h2 {
  padding: 65px 0 10px;
  color: #002147;
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 30px;
  text-align: center;
  margin-bottom: 60px;
  margin-top: -80px;
}

.process-flow {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 100px;
}

.process-row {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 100px;
  flex-wrap: wrap;
}

.process-card {
  position: relative;
  width: 200px;
  height: 200px;
  background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
  border: 3px solid #002147;
  border-radius: 20px;
  transform: rotate(45deg);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 10px 30px rgba(0, 33, 71, 0.2);
  transition: all 0.4s ease;
  overflow: hidden;
}

.process-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(138, 27, 97, 0.05) 0%, rgba(0, 33, 71, 0.05) 100%);
  opacity: 0;
  transition: opacity 0.4s ease;
}

.process-card:hover {
  transform: rotate(45deg) scale(1.08);
  box-shadow: 0 15px 40px rgba(0, 33, 71, 0.3);
  border-color: #002147
}

.process-card:hover::before {
  opacity: 1;
}

.card-corners {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
  pointer-events: none;
}

.corner {
  position: absolute;
  width: 60px;
  height: 60px;
  transition: all 0.4s ease;
}

.corner.top-left {
  top: 0;
  left: 0;
  border-top-left-radius: 18px;
  clip-path: polygon(0 0, 100% 0, 0 100%);
}

.corner.top-right {
  top: 0;
  right: 0;
  border-top-right-radius: 18px;
  clip-path: polygon(100% 0, 100% 100%, 0 0);
}

.corner.bottom-left {
  bottom: 0;
  left: 0;
  border-bottom-left-radius: 18px;
  clip-path: polygon(0 0, 100% 100%, 0 100%);
}

.corner.bottom-right {
  bottom: 0;
  right: 0;
  border-bottom-right-radius: 18px;
  clip-path: polygon(100% 0, 100% 100%, 0 100%);
}

.process-card:hover .corner {
  filter: brightness(1.1);
}

.card-content {
  transform: rotate(-45deg);
  text-align: center;
  padding: 20px;
  z-index: 2;
}

.card-icon {
  color: #002147;
  margin-bottom: 15px;
  display: flex;
  justify-content: center;
}

.card-icon svg {
  width: 40px;
  height: 40px;
}

.card-content h3 {
  color: #002147;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 8px;
  line-height: 1.2;
}

.card-content p {
  color: #333;
  font-size: 12px;
  line-height: 1.4;
  margin: 0;
}

@media (max-width: 1024px) {
  .process-row {
    gap: 20px;
  }
  
  .process-card {
    width: 150px;
    height: 150px;
  }
}

@media (max-width: 768px) {
  .billing-process-container h2 {
    font-size: 24px;
    text-align: center;
    padding-left: 0;
  }
  
  .process-flow {
    gap: 70px;
  }
  
  .process-row {
    flex-direction: column;
    gap: 70px;
  }
  
  .process-card {
    width: 160px;
    height: 160px;
  }
  
  .card-content {
    padding: 15px;
  }
  
  .card-icon svg {
    width: 30px;
    height: 30px;
  }
  
  .card-content h3 {
    font-size: 14px;
    margin-bottom: 5px;
  }
  
  .card-content p {
    font-size: 10px;
    line-height: 1.3;
  }
  
  .corner {
    width: 50px;
    height: 50px;
  }
}

/* Testimonials Carousel Section Styles */
.testimonials-carousel-section {
  padding: 40px 0;
  background: #fff;
}

.testimonials-carousel-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  text-align: center;
}

.section-subtitle {
  color: #002147;
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.section-title {
  color: #002147;
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
  line-height: 1.2;
}

.section-description {
  color: #666;
  font-size: 16px;
  line-height: 1.6;
  max-width: 800px;
  margin: 0 auto 50px;
}

.carousel-wrapper {
  position: relative;
  overflow: hidden;
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.carousel-slide {
  min-width: 100%;
  display: none;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}

.carousel-slide.active {
  display: grid;
}

.testimonial-card {
  background: #fff;
  padding: 25px 20px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  text-align: center;
  height: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.testimonial-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}

.testimonial-icon {
  width: 50px;
  height: 50px;
  background: #002147;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px;
  flex-shrink: 0;
}

.testimonial-icon svg {
  stroke: #fff;
  width: 30px;
  height: 30px;
}

.card-heading {
  color: #002147;
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 15px;
  line-height: 1.3;
  min-height: 52px;
  max-height: 52px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  width: 100%;
}

.card-list {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
}

.card-list li {
  color: #666;
  font-size: 13px;
  line-height: 1.5;
  margin-bottom: 8px;
  padding-left: 20px;
  position: relative;
}

.card-list li:before {
  content: "✓";
  position: absolute;
  left: 0;
  color: #002147;
  font-weight: bold;
  font-size: 14px;
}

.carousel-dots {
  display: flex;
  justify-content: center;
  gap: 12px;
  margin-top: 40px;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #ddd;
  cursor: pointer;
  transition: all 0.3s ease;
}

.dot:hover {
  background: #002147;
  opacity: 0.7;
}

.dot.active {
  background: #002147;
  width: 30px;
  border-radius: 6px;
}

/* Hide dots 3-6 on desktop */
.dot:nth-child(n+3) {
  display: none;
}

@media (max-width: 991px) {
  .carousel-slide {
    grid-template-columns: 1fr;
  }
  
  .carousel-dots {
    display: flex !important;
    margin-top: 30px;
  }
  
  /* Show all 6 dots on mobile */
  .dot:nth-child(n+3) {
    display: block;
  }
  
  /* Hide extra cards on mobile - show only first card of each slide */
  .carousel-slide .testimonial-card:nth-child(n+2) {
    display: none;
  }
}

@media (max-width: 768px) {
  .section-title {
    font-size: 28px;
  }
  
  .carousel-track {
    overflow-x: auto;
    overflow-y: hidden;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    padding: 10px 0;
  }
  
  .carousel-track::-webkit-scrollbar {
    display: none;
  }
  
  .carousel-slide {
    display: grid !important;
    grid-template-columns: 1fr;
    gap: 20px;
    min-width: 100%;
    scroll-snap-align: start;
  }
  
  .carousel-slide.active {
    display: grid !important;
  }
  
  .testimonial-card {
    padding: 30px 20px;
  }
  
  /* Show only first card of each slide */
  .carousel-slide .testimonial-card:nth-child(n+2) {
    display: none;
  }
  
  .carousel-dots {
    display: flex !important;
    margin-top: 30px;
    gap: 10px;
  }
  }
  
  .dot {
    width: 10px;
    height: 10px;
  }
  
  .dot.active {
    width: 25px;
  }
  
  /* Hide extra cards on mobile - show only first card of each slide */
  .carousel-slide .testimonial-card:nth-child(n+2) {
    display: none;
  }
}
</style>

<section class="hero-section">
  <div class="hero-container">
    <!-- Left Side - Content -->
    <div class="hero-content">
      <h3>Our Services</h3>
      <h1>Transform Your Healthcare Practice</h1>
      <p>
        We provide comprehensive healthcare IT solutions that streamline your operations, 
        improve patient care, and boost your revenue. From medical billing to EHR implementation, 
        our expert team is here to help your practice thrive in today's digital healthcare landscape.
      </p>
    </div>
    
    <!-- Right Side - Form -->
    <div class="hero-form">
      <h4>Book a Consultation</h4>
      <form action="#" method="POST" id="servicesConsultForm">
        @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required pattern="[A-Za-z\s]+" title="Please enter letters only">
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
        </div>
        
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" required pattern="[0-9]+" title="Please enter numbers only">
        </div>
        
        <button type="submit" class="book-now-btn">Book Now</button>
      </form>
    </div>
  </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Name field - only letters and spaces
        const nameField = document.getElementById('name');
        if (nameField) {
            nameField.addEventListener('keydown', function(e) {
                const allowedKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End', ' '];
                if (!allowedKeys.includes(e.key) && !/[A-Za-z\s]/.test(e.key)) {
                    e.preventDefault();
                }
            });

            nameField.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^A-Za-z\s]/g, '');
            });

            nameField.addEventListener('paste', function(e) {
                e.preventDefault();
                const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                const lettersOnly = pastedText.replace(/[^A-Za-z\s]/g, '');
                this.value = lettersOnly;
            });
        }

        // Phone field - only numbers
        const phoneField = document.getElementById('phone');
        if (phoneField) {
            phoneField.addEventListener('keydown', function(e) {
                const allowedKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End'];
                if (!allowedKeys.includes(e.key) && !/[0-9]/.test(e.key)) {
                    e.preventDefault();
                }
            });

            phoneField.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            phoneField.addEventListener('paste', function(e) {
                e.preventDefault();
                const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                const numericOnly = pastedText.replace(/[^0-9]/g, '');
                this.value = numericOnly;
            });
        }
    });
</script>

<!-- About Section -->
<section class="about-section">
  <div class="section-divider-mobile"></div>
  <div class="about-container">
    <!-- Left Side - Image -->
    <div class="about-image">
      <img src="{{ asset('images/hero_doctor.png') }}" alt="Healthcare Professional">
    </div>
    
    <!-- Right Side - Content -->
    <div class="about-content">
      <h1>Why Choose Our Healthcare Solutions?</h1>
      <p>
        With over a decade of experience in healthcare technology, we understand the unique challenges 
        facing medical practices today. Our comprehensive solutions are designed to reduce administrative 
        burden, improve patient satisfaction, and maximize your revenue potential. From small clinics to 
        large hospital systems, we've helped thousands of healthcare providers streamline their operations 
        and focus on what matters most - patient care.
      </p>
      <div class="learn-more-wrapper">
        <a href="{{ url('about-us') }}" class="learn-more-btn">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>


<!-- Billing Process Section -->
<section class="billing-process-section">
  <div class="billing-process-container">
    <h2>How Our Billing Process Works?</h2>
    
    <div class="process-flow">
      <!-- Top Row - 3 Items -->
      <div class="process-row">
        <!-- Step 1: Verification -->
        <div class="process-card">
          <div class="card-corners">
            <span class="corner top-left" style="background: linear-gradient(135deg, #002147 0%, #003d82 100%);"></span>
            <span class="corner top-right" style="background: linear-gradient(135deg, #002147 0%, #003d82 100%);"></span>
            <span class="corner bottom-left" style="background: linear-gradient(135deg, #002147 0%, #003d82 100%);"></span>
            <span class="corner bottom-right" style="background: linear-gradient(135deg, #002147 0%, #003d82 100%);"></span>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path d="M9 12l2 2 4-4"/>
              </svg>
            </div>
            <h3>Verification</h3>
            <p>We verify patient<br>with the payer.</p>
          </div>
        </div>

        <!-- Step 2: Transcription -->
        <div class="process-card">
          <div class="card-corners">
            <span class="corner top-left" style="background: linear-gradient(135deg, #0077be 0%, #005a8f 100%);"></span>
            <span class="corner top-right" style="background: linear-gradient(135deg, #0077be 0%, #005a8f 100%);"></span>
            <span class="corner bottom-left" style="background: linear-gradient(135deg, #0077be 0%, #005a8f 100%);"></span>
            <span class="corner bottom-right" style="background: linear-gradient(135deg, #0077be 0%, #005a8f 100%);"></span>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
              </svg>
            </div>
            <h3>Transcription</h3>
            <p>We transcribe<br>doctor's comments.</p>
          </div>
        </div>

        <!-- Step 3: Coding -->
        <div class="process-card">
          <div class="card-corners">
            <span class="corner top-left" style="background: linear-gradient(135deg, #8a1b61 0%, #6b1549 100%);"></span>
            <span class="corner top-right" style="background: linear-gradient(135deg, #8a1b61 0%, #6b1549 100%);"></span>
            <span class="corner bottom-left" style="background: linear-gradient(135deg, #8a1b61 0%, #6b1549 100%);"></span>
            <span class="corner bottom-right" style="background: linear-gradient(135deg, #8a1b61 0%, #6b1549 100%);"></span>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="16 18 22 12 16 6"/>
                <polyline points="8 6 2 12 8 18"/>
              </svg>
            </div>
            <h3>Coding</h3>
            <p>We code<br>the procedure.</p>
          </div>
        </div>
      </div>

      <!-- Bottom Row - 2 Items -->
      <div class="process-row">
        <!-- Step 4: Submission -->
        <div class="process-card">
          <div class="card-corners">
            <span class="corner top-left" style="background: linear-gradient(135deg, #00a896 0%, #008577 100%);"></span>
            <span class="corner top-right" style="background: linear-gradient(135deg, #00a896 0%, #008577 100%);"></span>
            <span class="corner bottom-left" style="background: linear-gradient(135deg, #00a896 0%, #008577 100%);"></span>
            <span class="corner bottom-right" style="background: linear-gradient(135deg, #00a896 0%, #008577 100%);"></span>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="22" y1="2" x2="11" y2="13"/>
                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
              </svg>
            </div>
            <h3>Submission</h3>
            <p>We submit the<br>medical claim.</p>
          </div>
        </div>

        <!-- Step 5: Payment -->
        <div class="process-card">
          <div class="card-corners">
            <span class="corner top-left" style="background: linear-gradient(135deg, #1e5f8c 0%, #164a6e 100%);"></span>
            <span class="corner top-right" style="background: linear-gradient(135deg, #1e5f8c 0%, #164a6e 100%);"></span>
            <span class="corner bottom-left" style="background: linear-gradient(135deg, #1e5f8c 0%, #164a6e 100%);"></span>
            <span class="corner bottom-right" style="background: linear-gradient(135deg, #1e5f8c 0%, #164a6e 100%);"></span>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                <line x1="1" y1="10" x2="23" y2="10"/>
              </svg>
            </div>
            <h3>Payment</h3>
            <p>The provider<br>gets paid.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimonials Carousel Section -->
<section class="testimonials-carousel-section">
  <div class="testimonials-carousel-container">
    <h3 class="section-subtitle">WHAT DO WE OFFER

</h3>
    <h2 class="section-title"> AMDSOL Top Rated Billing Consultancy Group Is Here for Medical Billing Help</h2>
    <p class="section-description">
     Our billing teams are more than just billers. We are every USA provider’s best-managed billing partner. Our medical billing advocates partner with physicians to improve their practice management and achieve sustainable growth. Here is how BellMedEx’s healthcare billing consultancy group is helping practices with patient billing:
    </p>

    <div class="carousel-wrapper">
      <div class="carousel-track">
        <!-- Slide 1 - First 3 Cards -->
        <div class="carousel-slide active">
          <div class="testimonial-card">
            <div class="testimonial-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h1 class="card-heading">Detailed Analysis and Bill Reporting
</h1>
            <ul class="card-list">
              <li>Reporting on RVU to calculate the value of medical services</li>
              <li>Clearing up hidden glitches for better revenue collection</li>
              <li>Ensuring on-demand availability of latest billing reports</li>
              <li>Providing detailed billing reports</li>
              <li>Tracking key performance indicators for practice growth</li>
              <li>Analyzing claim submission patterns and success rates</li>
              <li>Monitoring reimbursement trends across payers</li>
              <li>Generating customized financial dashboards</li>
            </ul>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h1 class="card-heading">Comprehensive Revenue Cycle Management</h1>
            <ul class="card-list">
              <li>Dealing with payment posting for healthy cash flow</li>
              <li>Doing charge entry for service payments</li>
              <li>Reviewing denials with quick clear-ups</li>
              <li>Creating specialty-specific SLA reports</li>
              <li>Tracking accounts receivable aging</li>
              <li>Managing patient statements and collections</li>
              <li>Coordinating with insurance companies for faster payments</li>
              <li>Optimizing billing workflows for maximum efficiency</li>
            </ul>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h1 class="card-heading">Revenue Leakage Fix
</h1>
            <ul class="card-list">
              <li>Identifying and resolving billing errors</li>
              <li>Coding medical records accurately</li>
              <li>Insurance verification and eligibility checks</li>
              <li>Benchmarking the coding standards</li>
              <li>Preventing undercoding and overcoding issues</li>
              <li>Auditing claims before submission</li>
              <li>Recovering lost revenue from past claims</li>
              <li>Implementing preventive measures for future leakage</li>
            </ul>
          </div>
        </div>

        <!-- Slide 2 - Next 3 Cards -->
        <div class="carousel-slide">
          <div class="testimonial-card">
            <div class="testimonial-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h1 class="card-heading">Best Billing Associates
</h1>
            <ul class="card-list">
              <li>Modern technology for fast claim processing</li>
              <li>Medical billing with 24/7 physician support</li>
              <li>Ensuring correct patient billing</li>
              <li>Dedicated account managers for personalized service</li>
              <li>Certified billing specialists with industry expertise</li>
              <li>Regular training on latest billing regulations</li>
              <li>Proactive communication and transparent reporting</li>
              <li>Seamless integration with your practice management system</li>
            </ul>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h1 class="card-heading">Maximizing Clean Billing Claims %
</h1>
            <ul class="card-list">
              <li>Identifying trends and patterns in claims data</li>
              <li>Tracking all aspects of the claims process</li>
              <li>Using advanced data analysis tools</li>
              <li>Appealing on denied claims</li>
              <li>Keeping the provider in loop</li>
              <li>Implementing quality assurance checks</li>
              <li>Reducing claim rejection rates significantly</li>
              <li>Accelerating payment cycles for better cash flow</li>
            </ul>
          </div>

          <div class="testimonial-card">
            <div class="testimonial-icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
              </svg>
            </div>
            <h1 class="card-heading">Specialty Specific Specialization
</h1>
            <ul class="card-list">
              <li>Staying updated on the latest changes in healthcare regulations</li>
              <li>Offering tailor-made solutions to small and medium practices</li>
              <li>Providing comprehensive services for improved bottom line</li>
              <li>Resolving RCM-related challenges for every specialty</li>
              <li>Supporting medical practitioners of all specialties</li>
              <li>Understanding unique billing requirements per specialty</li>
              <li>Expertise in specialty-specific coding and modifiers</li>
              <li>Customized workflows for different practice types</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Carousel Dots -->
      <div class="carousel-dots">
        <span class="dot active" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
      </div>
    </div>
  </div>
</section>

<script>
let currentSlideIndex = 1;
let isMobile = window.innerWidth <= 991;
let totalSlides = isMobile ? 6 : 2;

// Update on resize
window.addEventListener('resize', function() {
  isMobile = window.innerWidth <= 991;
  totalSlides = isMobile ? 6 : 2;
  showSlide(currentSlideIndex);
});

showSlide(currentSlideIndex);

function currentSlide(n) {
  showSlide(currentSlideIndex = n);
}

function showSlide(n) {
  let slides = document.getElementsByClassName("carousel-slide");
  let dots = document.getElementsByClassName("dot");
  
  if (n > totalSlides) {currentSlideIndex = 1}
  if (n < 1) {currentSlideIndex = totalSlides}
  
  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  
  // Remove active from all dots
  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }
  
  if (isMobile) {
    // Mobile: Show individual cards
    // Card 1-3 are in slide 0, Card 4-6 are in slide 1
    let slideIndex = Math.floor((currentSlideIndex - 1) / 3);
    let cardIndex = (currentSlideIndex - 1) % 3;
    
    slides[slideIndex].classList.add("active");
    
    // Hide all cards in the active slide
    let cards = slides[slideIndex].getElementsByClassName("testimonial-card");
    for (let i = 0; i < cards.length; i++) {
      cards[i].style.display = "none";
    }
    // Show only the specific card
    if (cards[cardIndex]) {
      cards[cardIndex].style.display = "block";
    }
  } else {
    // Desktop: Show 3 cards per slide
    slides[currentSlideIndex-1].classList.add("active");
    let cards = slides[currentSlideIndex-1].getElementsByClassName("testimonial-card");
    for (let i = 0; i < cards.length; i++) {
      cards[i].style.display = "block";
    }
  }
  
  dots[currentSlideIndex-1].classList.add("active");
}

// Touch/Swipe functionality for mobile
let touchStartX = 0;
let touchEndX = 0;
const carouselTrack = document.querySelector('.carousel-track');

if (carouselTrack) {
  carouselTrack.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
  }, false);

  carouselTrack.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, false);
}

function handleSwipe() {
  if (touchEndX < touchStartX - 50) {
    // Swipe left - next slide
    currentSlideIndex++;
    showSlide(currentSlideIndex);
  }
  if (touchEndX > touchStartX + 50) {
    // Swipe right - previous slide
    currentSlideIndex--;
    showSlide(currentSlideIndex);
  }
}

// Auto slide
setInterval(() => {
  currentSlideIndex++;
  showSlide(currentSlideIndex);
}, 5000);
</script>



@endsection
