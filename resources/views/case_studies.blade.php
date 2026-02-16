@extends('layouts.app')
@section('content')
<style>

    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #1a3a5c;
        background-image: url('{{ asset("assets/images/case-studies/case_study.jpeg") }}');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 10px 20px;
        margin: 0 !important;
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 350px;
            background-position: center center;
        }
    }

    @media (max-width: 480px) {
        .hero-section {
            min-height: 300px;
            background-position: center center;
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
            rgba(10, 25, 45, 0.85) 0%, 
            rgba(10, 25, 45, 0.65) 25%,
            rgba(10, 25, 45, 0.40) 45%,
            transparent 70%);
        z-index: 1;
    }

    @media (max-width: 768px) {
        .hero-section::before {
            background: linear-gradient(to right, 
                rgba(10, 25, 45, 0.90) 0%, 
                rgba(10, 25, 45, 0.75) 50%,
                rgba(10, 25, 45, 0.50) 100%);
        }
    }

    .hero-content {
        position: relative;
        z-index: 2;
        padding-left: 97px;
        max-width: 100%;
    }

    .hero-section h1 {
        max-width: 541px;
        width: 100%;
        font-weight: 700;
        font-size: 44px;
        color: white;
        line-height: 1.2;
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 20px;
    }

    .hero-section p {
        max-width: 529px;
        width: 100%;
        font-weight: 400;
        font-size: 18px;
        color: white;
        line-height: 1.2;
    }

    @media (max-width: 1024px) {
        .hero-section {
            min-height: 400px;
        }
        .hero-content {
            padding-left: 50px;
        }
        .hero-section h1 {
            font-size: 36px;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: auto;
            padding: 0 0 30px 0;
            background-image: none !important;
            flex-direction: column;
            background-color: #002147;
        }
        .hero-content {
            padding-left: 30px;
        }
        .hero-section h1 {
            font-size: 28px;
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
            min-height: 300px;
            padding: 0 0 30px 0;
        }
        .hero-content {
            padding-left: 20px;
        }
        .hero-section h1 {
            font-size: 24px;
        }
    }


.content {
    padding: 50px 20px 20px 20px;
    text-align: center;
    max-width: 900px;
    margin: auto;
background: white;
}

.content h2 {
    font-size: 21px;
    font-weight: 550;
    margin-bottom: 20px;
}
.content p{
  
  font-size: 25px;
    font-weight: 550;
    
}

.articles-section {
  padding: 20px 0 40px 0;
  color: #fff;
}

.search-section {
  padding: 20px 0 0 0;
  background: white;
}

.articles-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

/* Search Bar Styles */
.search-bar-wrapper {
  margin: 10px;
  margin-bottom: 30px;
  display: flex;
  justify-content: flex-end;
}

.search-bar-container {
  position: relative;
  width: 100%;
  max-width: 350px;
}

.search-input {
  width: 100%;
  padding: 12px 50px 12px 20px;
  font-size: 14px;
  border: 2px solid #002147;
  border-radius: 50px;
  outline: none;
  transition: all 0.3s ease;
  background: #fff;
  color: #333;
}

.search-input:focus {
  border-color: #002147;;
  box-shadow: 0 0 0 4px rgba(138, 27, 97, 0.1);
}

.search-input::placeholder {
  color: #999;
}

.search-btn {
  position: absolute;
  right: 6px;
  top: 50%;
  transform: translateY(-50%);
  background: #002147;
  border: none;
  border-radius: 50%;
  width: 38px;
  height: 38px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.search-btn:hover {
  background: #002147;;
  transform: translateY(-50%) scale(1.05);
}

.search-btn svg {
  stroke: #fff;
}

.articles-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  justify-content: center;
}

.article-card {
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  border: 1px solid #eef2f6;
  transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
  display: flex;
  flex-direction: column;
  height: 100%;
}

.article-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 33, 71, 0.12);
  border-color: #002147;
}

.article-card img {
  width: 100%;
  height: 180px;
  object-fit: contain;
  background: #fcfcfc;
  border-bottom: 1px solid #f0f4f8;
}

.card-content {
  padding: 15px 20px;
  flex-grow: 1;
}

.category-label {
  font-size: 11px;
  font-weight: 800;
  text-transform: uppercase;
  color: #002147;
  margin-bottom: 5px;
  letter-spacing: 0.5px;
  opacity: 0.7;
}

.card-content h3 {
  font-size: 16px;
  font-weight: 700;
  color: #002147;
  margin-bottom: 8px;
  line-height: 1.3;
  height: 42px;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.card-content p {
  font-size: 13px;
  line-height: 1.5;
  color: #4a5568;
  margin-bottom: 0;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  height: 38px;
}

.card-footer {
  padding: 15px 20px;
  background: #fcfdfe;
  border-top: 1px solid #edf2f7;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
}

.card-footer .date {
  font-size: 14px;
  color: #002147;
  font-weight: 700;
}

.read-more-btn {
  padding: 10px 20px;
  border: 2px solid #002147;
  border-radius: 12px;
  color: #002147;
  font-size: 14px;
  font-weight: 800;
  text-decoration: none !important;
  transition: all 0.3s ease;
  background: transparent;
}

.read-more-btn:hover {
  background: #002147;
  color: #fff;
}

@media (max-width: 1200px) {
  .articles-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 900px) {
  .article-card {
    flex: 0 1 calc(50% - 10px);
    min-width: 250px;
  }
}

@media (max-width: 768px) {
  .articles-grid {
    flex-direction: column;
    gap: 20px;
  }
  
  .article-card {
    flex: 0 1 100%;
    max-width: 100%;
    min-width: auto;
  }
}

.content p {
    font-size: 18px;
    color: #000;
    line-height: 1.7;
}


@media (max-width: 768px) {

    .hero {
        padding: 0 40px;
        min-height: 300px;
    }

    .hero-content h1 {
        font-size: 38px;
    }

    .hero-content p {
        font-size: 16px;
    }

    .content h2 {
        font-size: 30px;
    }

    .content p {
        font-size: 16px;
    }
}


@media (max-width: 576px) {

    .hero {
        padding: 0 20px;
        justify-content: center;
        text-align: center;
        min-height: 260px;
    }

    .hero-content {
        max-width: 100%;
    }

    .hero-content h1 {
        font-size: 30px;
    }

    .hero-content p {
        font-size: 15px;
    }

    .content {
        padding: 60px 15px;
    }

    .content h2 {
        font-size: 24px;
        line-height: 1.4;
    }

    .content p {
        font-size: 15px;
    }
}
</style>
<section class="hero-section">
    <img src="{{ asset('assets/images/case-studies/case_study.jpeg') }}" alt="Hero Image" class="mobile-hero-img">
    <div class="hero-content">
        <h1>Case Studies</h1>
        <p>Here’s how we turned billing challenges into success stories</p>
    </div>
</section>

<!-- Content Section -->
<!-- <section class="content">
    <h2>
        Our case studies are more than just stories;<br>
        they're blueprints for success.
    </h2>
    <p>
       Success leaves clues, and our case studies are a rich treasure trove of real-world insights and proven strategies. Join us as we explore the journeys of practices that have not only grown but truly thrived under Transcure, uncovering the decisions, challenges, and innovations that made their success possible.
    </p>
</section> -->

<!-- Search Bar Section -->
<section class="search-section">
  <div class="articles-container">
    <div class="search-bar-wrapper">
      <form action="{{ url('case-studies') }}" method="GET" class="search-bar-container">
        <input type="text" name="q" id="caseStudySearch" class="search-input" placeholder="Search case studies..." value="{{ request('q') }}">
        <button type="submit" class="search-btn">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"/>
            <path d="m21 21-4.35-4.35"/>
          </svg>
        </button>
      </form>
    </div>
  </div>
</section>

<section class="articles-section">
  <div class="articles-container">
    <div class="articles-grid">
      @forelse($case_studies as $item)
      <div class="article-card">
        @if($item->image)
            <img src="{{ asset('assets/images/case-studies/' . $item->image) }}" alt="{{ $item->alt_image ?? $item->title }}">
        @else
            <img src="{{ asset('images/banners/1-01.jpg') }}" alt="{{ $item->title }}">
        @endif
        
        <div class="card-content">
          <div class="category-label">case study</div>
          <h3>{{ $item->title }}</h3>
          <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->text), 120) !!}</p>
        </div>
        <div class="card-footer">
          <span class="date">{{ \Carbon\Carbon::parse($item->date)->format('M d Y') }}</span>
          <a href="{{ url('case-study/' . $item->seokey) }}" class="read-more-btn">Read More »</a>
        </div>
      </div>
      @empty
      <div class="col-12 text-center py-5">
        <h3 class="text-dark">No Case Studies Found</h3>
      </div>
      @endforelse
    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper mt-50 d-flex justify-content-center">
        {{ $case_studies->appends(request()->query())->links() }}
    </div>
  </div>
</section>
<section class="dedicated-accounts-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="dedicated-accounts-image-wrap">
                    <div class="dedicated-accounts-circle"></div>
                    <img src="{{ asset('assets/images/dedicated-accounts-doctors.webp') }}" alt="Dedicated Accounts Managers" class="dedicated-accounts-img">
                </div>
            </div>
            <div class="col-lg-7">
                <h2 class="dedicated-accounts-title">
                    Dedicated Accounts Managers &amp; Expert<br>
                    <span class="text-primary-gradient">Medical Billers for Health Centers</span>
                </h2>
                <p class="dedicated-accounts-text">
                    Healthcare organizations are at the heart of our medical billing and collections team. From primary care physicians to specialty clinics,
                    our dedicated clinical coding officers and claims examiners implement a precision-driven approach so that revenue flows smoothly and claim
                    denials fade away.
                </p>

                <a href="{{ url('contact-us.php') }}" class="btn btn-outline-primary dedicated-accounts-cta">
                    Claim Free Practice Audit
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
