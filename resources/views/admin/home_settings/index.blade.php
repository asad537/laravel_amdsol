@extends('admin.layouts.app')

@section('title', 'Home Settings')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active">Home Settings</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="settings"></i></span> Home Settings</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-10">{{ session('success') }}</div>
    @endif

    <section class="hk-sec-wrapper">
        <form action="{{ url('admin/home-settings') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-12">
                    <h5>Main Banner Section</h5>
                    <hr>
                    <div class="form-group">
                        <label>Home Title</label>
                        <input type="text" name="home_title" class="form-control" value="{{ $setting->home_title }}">
                    </div>
                    <div class="form-group">
                        <label>Home Text</label>
                        <textarea name="home_text" class="form-control" rows="3">{{ $setting->home_text }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Banner Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($setting->image)
                            <img src="{{ asset('assets/images/' . $setting->image) }}" style="width: 150px; margin-top: 10px;">
                        @endif
                    </div>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-md-12">
                    <h5>Billing/Secondary Section</h5>
                    <hr>
                    <div class="form-group">
                        <label>Billing Title</label>
                        <input type="text" name="billing_title" class="form-control" value="{{ $setting->billing_title }}">
                    </div>
                    <div class="form-group">
                        <label>Billing Text</label>
                        <textarea name="billing_text" class="form-control" rows="5">{{ $setting->billing_text }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Billing Image</label>
                        <input type="file" name="billing_image" class="form-control">
                        @if($setting->billing_image)
                            <img src="{{ asset('assets/images/' . $setting->billing_image) }}" style="width: 150px; margin-top: 10px;">
                        @endif
                    </div>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-md-12">
                    <h5>Other Settings</h5>
                    <hr>
                    <div class="form-group">
                        <label>Process Text</label>
                        <textarea name="process_text" class="form-control" rows="5">{{ $setting->process_text }}</textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-20">Save Settings</button>
        </form>
    </section>
</div>
@endsection
