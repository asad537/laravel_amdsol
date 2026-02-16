@extends('admin.layouts.app')

@section('title', 'Site Settings')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active">Site Settings</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="settings"></i></span> Site Settings</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-10">{{ session('success') }}</div>
    @endif

    <section class="hk-sec-wrapper">
        <form action="{{ url('admin/settings') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $setting->meta_title }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control" value="{{ $setting->meta_keywords }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Meta Description</label>
                <textarea name="meta_descr" class="form-control" rows="3">{{ $setting->meta_descr }}</textarea>
            </div>

            <hr>
            <h5>Contact Information</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $setting->phone }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $setting->email }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control" rows="3">{{ $setting->address }}</textarea>
                    </div>
                </div>
            </div>

            <hr>
            <h5>Social Links</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input type="text" name="linkedin" class="form-control" value="{{ $setting->linkedin }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Pinterest</label>
                        <input type="text" name="pinterest" class="form-control" value="{{ $setting->pinterest }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>YouTube</label>
                        <input type="text" name="youtube" class="form-control" value="{{ $setting->youtube }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mix</label>
                        <input type="text" name="mix" class="form-control" value="{{ $setting->mix }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tumblr</label>
                        <input type="text" name="tumbler" class="form-control" value="{{ $setting->tumbler }}">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-20">Save Site Settings</button>
        </form>
    </section>
</div>
@endsection
