<footer class="bell-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('images/logo_white.png') }}" class="mb-4" style="max-height: 60px;">
                <p>AMDSol is a premier medical billing organization dedicated to streamlining healthcare provider operations through innovative RCM solutions and expert support.</p>
                <div class="icon-social mt-4">
                    <a href="{{ $site->facebook ?? '#' }}"><span class="fa fa-facebook"></span></a>
                    <a href="{{ $site->twitter ?? '#' }}"><span class="fa fa-twitter"></span></a>
                    <a href="{{ $site->linkedin ?? '#' }}"><span class="fa fa-linkedin"></span></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('blog') }}">Latest Blog</a></li>
                    <li><a href="{{ url('contact-us.php') }}">Contact Us</a></li>
                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4>Our Services</h4>
                <ul class="list-unstyled">
                    @foreach($service_list as $il)
                        <li><a href="{{ url($il->seokey) }}">{{ $il->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4>Stay Connected</h4>
                <p><span class="fa fa-map-marker mr-2"></span> {{ $site->address ?? '' }}</p>
                <p><span class="fa fa-phone mr-2"></span> {{ $site->phone ?? '' }}</p>
                <p><span class="fa fa-envelope mr-2"></span> {{ $site->email ?? '' }}</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} AMDSol. All Rights Reserved. Built with Excellence.</p>
        </div>
    </div>
</footer>
   