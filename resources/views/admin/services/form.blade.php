@extends('admin.layouts.app')

@section('title', isset($service) ? 'Edit Service' : 'Create Service')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item"><a href="{{ route('service-pages.index') }}">Services</a></li>
		<li class="breadcrumb-item active">{{ isset($service) ? 'Edit' : 'Create' }}</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">{{ isset($service) ? 'Edit Service' : 'Create New Service' }}</h4>
    </div>

    <section class="hk-sec-wrapper">
        <form action="{{ isset($service) ? route('service-pages.update', $service->id) : route('service-pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($service))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Service Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $service->title ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="text" id="editor" class="form-control" rows="15">{{ old('text', $service->text ?? '') }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>SEO Key (Slug)</label>
                        <input type="text" name="seokey" class="form-control" value="{{ old('seokey', $service->seokey ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        @if(isset($service) && $service->image)
                            <img src="{{ asset('assets/images/' . $service->image) }}" style="width: 100px; margin-top: 10px;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Display Status</label>
                        <select name="display" class="form-control">
                            <option value="1" {{ (old('display', $service->display ?? '') == '1') ? 'selected' : '' }}>Show</option>
                            <option value="0" {{ (old('display', $service->display ?? '') == '0') ? 'selected' : '' }}>Hide</option>
                        </select>
                    </div>

                    <hr>
                    <h5>SEO Meta Data</h5>
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $service->meta_title ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $service->meta_keywords ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_descr" class="form-control">{{ old('meta_descr', $service->meta_descr ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($service) ? 'Update' : 'Save' }} Service</button>
        </form>
    </section>
</div>
@endsection
