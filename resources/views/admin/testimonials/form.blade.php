@extends('admin.layouts.app')

@section('title', isset($testimonial) ? 'Edit Testimonial' : 'Create Testimonial')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
		<li class="breadcrumb-item active">{{ isset($testimonial) ? 'Edit' : 'Create' }}</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title">{{ isset($testimonial) ? 'Edit Testimonial' : 'Create New Testimonial' }}</h4>
    </div>

    <section class="hk-sec-wrapper">
        <form action="{{ isset($testimonial) ? route('testimonials.update', $testimonial->id) : route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($testimonial))
                @method('PUT')
            @endif

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Client Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $testimonial->name ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Designation / Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $testimonial->title ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label>Feedback / Text</label>
                        <textarea name="text" class="form-control" rows="5" required>{{ old('text', $testimonial->text ?? '') }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        @if(isset($testimonial) && $testimonial->image)
                            <img src="{{ asset('assets/images/' . $testimonial->image) }}" style="width: 100px; margin-top: 10px;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Display Status</label>
                        <select name="display" class="form-control">
                            <option value="1" {{ (old('display', $testimonial->display ?? '') == '1') ? 'selected' : '' }}>Show</option>
                            <option value="0" {{ (old('display', $testimonial->display ?? '') == '0') ? 'selected' : '' }}>Hide</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($testimonial) ? 'Update' : 'Save' }} Testimonial</button>
        </form>
    </section>
</div>
@endsection
