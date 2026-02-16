@extends('admin.layouts.app')

@section('title', isset($case_study) ? 'Edit Case Study' : 'Create Case Study')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item"><a href="{{ route('case_studies.index') }}">Case Studies</a></li>
		<li class="breadcrumb-item active">{{ isset($case_study) ? 'Edit' : 'Create' }}</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">{{ isset($case_study) ? 'Edit Case Study' : 'Create New Case Study' }}</h4>
    </div>

    <section class="hk-sec-wrapper">
        <form action="{{ isset($case_study) ? route('case_studies.update', $case_study->id) : route('case_studies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($case_study))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $case_study->title ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Text / Content</label>
                        <textarea name="text" id="editor" class="form-control" rows="10">{{ old('text', $case_study->text ?? '') }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>SEO Key (Slug)</label>
                        <input type="text" name="seokey" class="form-control" value="{{ old('seokey', $case_study->seokey ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="{{ old('author', $case_study->author ?? 'Admin') }}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        @if(isset($case_study) && $case_study->image)
                            <img src="{{ asset('assets/images/case-studies/' . $case_study->image) }}" style="width: 100px; margin-top: 10px;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Display Status</label>
                        <select name="display" class="form-control">
                            <option value="1" {{ (old('display', $case_study->display ?? '') == '1') ? 'selected' : '' }}>Show</option>
                            <option value="0" {{ (old('display', $case_study->display ?? '') == '0') ? 'selected' : '' }}>Hide</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>
            <h5>SEO Meta Data</h5>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $case_study->meta_title ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="{{ old('meta_keywords', $case_study->meta_keywords ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control">{{ old('meta_description', $case_study->meta_description ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($case_study) ? 'Update' : 'Save' }} Case Study</button>
        </form>
    </section>
</div>
@endsection
