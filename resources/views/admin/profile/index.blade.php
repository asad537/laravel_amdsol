@extends('admin.layouts.app')

@section('title', 'My Profile')

@section('content')
<nav class="hk-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb breadcrumb-light bg-transparent">
		<li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Home</a></li>
		<li class="breadcrumb-item active">Profile</li>
	</ol>
</nav>

<div class="container">
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="feather-icon"><i data-feather="user"></i></span> My Profile</h4>
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-10">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mt-10">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="hk-sec-wrapper">
        <form action="{{ url('admin/profile') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                </div>
            </div>

            <hr>
            <h5>Change Password</h5>
            <small class="text-muted">Leave blank if you don't want to change the password.</small>
            <div class="row mt-10">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-20">Update Profile</button>
        </form>
    </section>
</div>
@endsection
