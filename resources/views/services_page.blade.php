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
		
    <form role="form" method="post" action="{{ url()->current() }}" id="serviceForm">
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
                <input type="text" name="name" required class="form-control" placeholder="Your Name" pattern="[A-Za-z\s]+" title="Please enter letters only" id="serviceName">
            </div>
            
            <div class="form-group">
                <p>Contact Number</p>
                <input type="text" name="phone" required class="form-control" placeholder="Contact Number" pattern="[0-9]+" title="Please enter numbers only" id="servicePhone">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p>Email address</p>
                <input type="email" name="email" required class="form-control" placeholder="Your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid email address">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Name field - only letters and spaces
            const nameField = document.getElementById('serviceName');
            if (nameField) {
                // Prevent non-letter input on keydown
                nameField.addEventListener('keydown', function(e) {
                    const allowedKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End', ' '];
                    if (!allowedKeys.includes(e.key) && !/[A-Za-z\s]/.test(e.key)) {
                        e.preventDefault();
                    }
                });

                // Remove any non-letter characters on input
                nameField.addEventListener('input', function(e) {
                    this.value = this.value.replace(/[^A-Za-z\s]/g, '');
                });

                // Prevent paste of non-letter content
                nameField.addEventListener('paste', function(e) {
                    e.preventDefault();
                    const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                    const lettersOnly = pastedText.replace(/[^A-Za-z\s]/g, '');
                    this.value = lettersOnly;
                });
            }

            // Phone field - only numbers
            const phoneField = document.getElementById('servicePhone');
            if (phoneField) {
                // Prevent non-numeric input on keydown
                phoneField.addEventListener('keydown', function(e) {
                    const allowedKeys = ['Backspace', 'Delete', 'Tab', 'ArrowLeft', 'ArrowRight', 'Home', 'End'];
                    if (!allowedKeys.includes(e.key) && !/[0-9]/.test(e.key)) {
                        e.preventDefault();
                    }
                });

                // Remove any non-numeric characters on input
                phoneField.addEventListener('input', function(e) {
                    this.value = this.value.replace(/[^0-9]/g, '');
                });

                // Prevent paste of non-numeric content
                phoneField.addEventListener('paste', function(e) {
                    e.preventDefault();
                    const pastedText = (e.clipboardData || window.clipboardData).getData('text');
                    const numericOnly = pastedText.replace(/[^0-9]/g, '');
                    this.value = numericOnly;
                });
            }
        });
    </script>	
</div>
</div>
</div>
</div>
@endsection
