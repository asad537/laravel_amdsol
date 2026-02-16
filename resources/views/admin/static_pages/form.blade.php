@extends('admin.layouts.app')

@section('title', isset($page) ? 'Edit Static Page' : 'Create Static Page')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item"><a href="{{ route('static-pages.index') }}">Static Pages</a></li>
		<li class="breadcrumb-item active">{{ isset($page) ? 'Edit' : 'Create' }}</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">{{ isset($page) ? 'Edit Page' : 'Create New Page' }}</h4>
    </div>

    <section class="hk-sec-wrapper">
        <form action="{{ isset($page) ? route('static-pages.update', $page->id) : route('static-pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($page))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Page Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $page->title ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>SEO Key (Slug)</label>
                        <input type="text" name="seokey" class="form-control" value="{{ old('seokey', $page->seokey ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="text" id="editor" class="form-control" rows="15">{{ old('text', $page->text ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <hr>
            <h5>SEO Meta Data</h5>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $page->meta_keywords ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_descr" class="form-control">{{ old('meta_descr', $page->meta_descr ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($page) ? 'Update' : 'Save' }} Page</button>
        </form>
    </section>
</div>
@endsection
