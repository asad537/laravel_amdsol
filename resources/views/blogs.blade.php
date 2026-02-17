@extends('layouts.app')
@section('content')
<style>
    .hero-section {
        width: 100%;
        max-width: 100%;
        min-height: 448px;
        background-color: #002147;
        background-image: url('{{ asset("assets/images/blog/blog_page .jpeg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 10px 20px;
        margin: 0 !important;
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
            min-height: 350px;
            padding: 40px 20px;
        }
        .hero-content {
            padding-left: 30px;
        }
        .hero-section h1 {
            font-size: 28px;
        }
    }

    @media (max-width: 480px) {
        .hero-section {
            min-height: 300px;
            padding: 30px 15px;
        }
        .hero-content {
            padding-left: 20px;
        }
        .hero-section h1 {
            font-size: 24px;
        }
    }

.articles-section {
  padding: 60px 0;
  background: #f7f8fa;
}

.articles-container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
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

@media (max-width: 768px) {
    /* Mobile Hero Styles */
    .hero-section {
        min-height: auto;
        padding: 0 0 30px 0;
        background-image: none !important;
        flex-direction: column;
    }

    .hero-section::before {
        display: none;
    }

    .hero-content {
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
        width: 100%;
    }

    .hero-section h1 {
        font-size: 28px;
        text-align: center;
        max-width: 100%;
    }

    .hero-section p {
        text-align: center;
        max-width: 100%;
    }
    
    .mobile-hero-img {
        display: block !important;
        width: 100%;
        height: auto;
        object-fit: cover;
        margin-bottom: 20px;
    }

    /* Mobile Cards Responsive */
    .articles-grid {
        grid-template-columns: 1fr;
    }
}

.mobile-hero-img {
    display: none;
}

    .load-more-container {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .load-more-btn {
        padding: 14px 40px;
        background: #002147;
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .load-more-btn:hover {
        background: #003a7d;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 33, 71, 0.15);
    }

    .load-more-btn:disabled {
        background: #ccc;
        cursor: not-allowed;
    }

    .loader-dots {
        display: none;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255,255,255,0.3);
        border-radius: 50%;
        border-top-color: #fff;
        animation: spin 1s ease-in-out infinite;
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }
</style>

<section class="hero-section">
    <img src="{{ asset("assets/images/blog/blog_page.jpeg") }}" alt="Blogs" class="mobile-hero-img">
    <div class="hero-content">
        <h1>Blogs</h1>
        <p>
            Discover health IT news and learn more about the ongoing trends around you with our article hub!
        </p>
    </div>
</section>

<section class="articles-section">
  <div class="articles-container">
    @if($data->count() > 0)
      <div class="articles-grid" id="blog-grid">
        @foreach($data as $blog)
          <div class="article-card">
            @if($blog->image)
              <img src="{{ asset('assets/images/' . $blog->image) }}" alt="{{ $blog->title }}">
            @else
              <img src="{{ asset('assets/images/article-1.jpg') }}" alt="{{ $blog->title }}">
            @endif
            
            <div class="card-content">
              <div class="category-label">Blog Post</div>
              <h3>{{ $blog->title }}</h3>
              <p>{{ strip_tags($blog->text) }}</p>
            </div>
            <div class="card-footer">
              <span class="date">{{ \Carbon\Carbon::parse($blog->date)->format('M d Y') }}</span>
              <a href="{{ url('blog/' . $blog->seokey) }}" class="read-more-btn">Read More »</a>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Load More Button -->
      @if($data->hasMorePages())
      <div class="load-more-container">
          <button id="load-more" class="load-more-btn" data-url="{{ $data->nextPageUrl() }}">
              Load More Blogs
              <div class="loader-dots"></div>
          </button>
      </div>
      @endif
    @else
      <div style="text-align: center; padding: 50px;">
        <h3 class="text-dark">No blogs found</h3>
        <p>Please check back later for new articles.</p>
      </div>
    @endif
  </div>
</section>
@section('scripts')
<script>
    $(document).ready(function() {
        $('#load-more').on('click', function() {
            let btn = $(this);
            let url = btn.attr('data-url');
            let loader = btn.find('.loader-dots');

            if (!url) return;

            btn.prop('disabled', true);
            loader.show();

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    if (response.html) {
                        $('#blog-grid').append(response.html);
                        
                        if (response.next_page) {
                            btn.attr('data-url', response.next_page);
                            btn.prop('disabled', false);
                        } else {
                            btn.parent().fadeOut();
                        }
                    }
                    loader.hide();
                },
                error: function() {
                    btn.prop('disabled', false);
                    loader.hide();
                }
            });
        });
    });
</script>
@endsection
@endsection