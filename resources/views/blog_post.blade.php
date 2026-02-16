@extends('layouts.app')

@section('content')
<style>
    .blog-hero {
        width: 100%;
        max-width: 100%;
        min-height: 350px;
        background-color: #1a3a5c;
        background-image: url('{{ $data->image ? asset("assets/images/".$data->image) : asset("assets/images/ehr/ehr-soloution.png") }}');
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

    .blog-hero::before {
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

    .hero-container {
        position: relative;
        z-index: 2;
        padding-left: 97px;
        max-width: 100%;
    }

    .blog-hero h1 {
        max-width: 700px;
        font-weight: 700;
        font-size: 38px;
        color: white;
        line-height: 1.2;
        margin-bottom: 15px;
    }

    .blog-hero p {
        color: white;
        font-size: 16px;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .blog-hero {
            min-height: 300px;
            padding: 40px 20px;
        }
        .hero-container {
            padding-left: 30px;
        }
        .blog-hero h1 {
            font-size: 28px;
        }
    }

    .blog-content-section {
        padding: 60px 0;
        line-height: 1.8;
        font-size: 16px;
    }

    .sidebar-widget {
        background: #fdfdfd;
        padding: 25px;
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .widget-title {
        font-size: 18px;
        font-weight: 700;
        color: #002147;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #002147;
    }

    .recent-item {
        display: flex;
        gap: 12px;
        margin-bottom: 18px;
        padding-bottom: 18px;
        border-bottom: 1px solid #f0f0f0;
        align-items: flex-start;
    }

    .recent-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .recent-thumb {
        width: 70px;
        height: 55px;
        flex-shrink: 0;
        border-radius: 6px;
        overflow: hidden;
        border: 1px solid #eee;
        background: #fcfcfc;
    }

    .recent-thumb img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .recent-info {
        flex-grow: 1;
    }

    .recent-info a {
        color: #002147;
        font-weight: 700;
        text-decoration: none;
        display: block;
        margin-bottom: 3px;
        line-height: 1.3;
        font-size: 14px;
        transition: color 0.3s;
    }

    .recent-info a:hover {
        color: #004a8f;
    }

    .recent-info span {
        font-size: 12px;
        color: #777;
        font-weight: 500;
    }

    .main-text img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
    }
</style>

<!-- <div class="blog-hero">
    <div class="hero-container">
        <h1>{{ $data->title }}</h1>
        <p>By {{ $data->author }} | {{ \Carbon\Carbon::parse($data->date)->format('M d, Y') }}</p>
    </div>
</div> -->

<div class="blog-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-text">
                    @if($data->image)
                        <img src="{{ asset('assets/images/'.$data->image) }}" alt="{{ $data->title }}" style="width: 100%; max-height: 450px; object-fit: contain; margin-bottom: 30px; border-radius: 12px; display: block;">
                    @endif
                    <div style="font-size: 18px; font-weight: 600; color: #333; margin-bottom: 20px;">{{ $data->title }}</div>
                    {!! $data->text !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Blogs</h3>
                    @foreach($recent_blogs as $r)
                    <div class="recent-item">
                        <div class="recent-thumb">
                            @if($r->image)
                                <img src="{{ asset('assets/images/'.$r->image) }}" alt="{{ $r->title }}">
                            @else
                                <img src="{{ asset('images/article-1.jpg') }}" alt="{{ $r->title }}">
                            @endif
                        </div>
                        <div class="recent-info">
                            <div style="font-size: 10px; font-weight: 800; text-transform: uppercase; color: #002147; margin-bottom: 2px; opacity: 0.7;">Blog Post</div>
                            <a href="{{ url('blog/'.$r->seokey) }}">{{ $r->title }}</a>
                            <span>{{ \Carbon\Carbon::parse($r->date)->format('M d, Y') }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
