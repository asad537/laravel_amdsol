@extends('layouts.app')

@section('content')
<div class="page-top clearfix">
    <!--page main heading-->
    <div class="container">
        <h1 class="entry-title">{{ $data->title }}</h1>
    </div>
</div>
<div class="blog-page py-5 clearfix">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="blog-post-single clearfix">

<div class="row">
<div class="col-sm-12">
     <br>
    <img src="{{ asset('assets/images/'.$data->image) }}"/>
    <article class="post format-gallery hentry clearfix">
        <div class="right-contents">
            <div class="entry-content">
                {!! $data->text !!}
            </div>
        </div>
    </article>

</div>
</div>
</div>

<h2 class="py-5"><center>Primary Care Registration</center></h2>
<br>
    @if(session('red_msg'))
        <div class="alert alert-danger">{{ session('red_msg') }}</div>
    @endif
    @if(session('green_msg'))
        <div class="alert alert-success">{{ session('green_msg') }}</div>
    @endif
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
		
    <form role="form" method="post" action="{{ url()->current() }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6">
            <div class="form-group">
                <p>Name</p>
                <input type="text" name="name" required class="form-control" placeholder="Your Name">
            </div>
            
            <div class="form-group">
                <p>Contact Number</p>
                <input type="text" name="phone" required class="form-control" placeholder="Contact Number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p>Email address</p>
                <input type="email" name="email" required class="form-control" placeholder="Your email">
            </div>
            
            <div class="form-group">
                <p>Company</p>
                <input type="text" name="company" required class="form-control" placeholder="Company">
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <p>Message</p>
                <textarea name="message" placeholder="Your Message" class="form-control" style="height: 150px; "></textarea>
            </div>				    
            <div class="form-group">
                <input type="submit" name="btnSubmit" class="btn btn-primary btn-lg" value="Submit" />
            </div>				    					
        </div>
    </form>	
</div>
</div>
</div>
</div>
@endsection
