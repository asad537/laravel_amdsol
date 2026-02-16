<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/blog') }}</loc>
        <priority>0.8</priority>
    </url>
    @foreach ($blogs as $blog)
    <url>
        <loc>{{ url('/blog/'.$blog->seokey) }}</loc>
        <priority>0.7</priority>
    </url>
    @endforeach
    @foreach ($services as $service)
    <url>
        <loc>{{ url('/'.$service->seokey) }}</loc>
        <priority>0.8</priority>
    </url>
    @endforeach
    @foreach ($static as $page)
    <url>
        <loc>{{ url('/'.$page->seokey) }}</loc>
        <priority>0.6</priority>
    </url>
    @endforeach
</urlset>
