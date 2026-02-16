<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-dark">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item {{ Request::is('admin/home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/home') }}">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li> 
                <li class="nav-item {{ Request::is('admin/banners*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/banners') }}">
                        <span class="feather-icon"><i data-feather="monitor"></i></span>
                        <span class="nav-link-text">Main Slider</span>
                    </a>
                </li> 
                <li class="nav-item {{ Request::is('admin/static-pages*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/static-pages') }}">
                        <span class="feather-icon"><i data-feather="file-text"></i></span>
                        <span class="nav-link-text">Static Pages</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/service-pages*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/service-pages') }}">
                        <span class="feather-icon"><i data-feather="layers"></i></span>
                        <span class="nav-link-text">Services</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/home-settings*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/home-settings') }}">
                        <span class="feather-icon"><i data-feather="settings"></i></span>
                        <span class="nav-link-text">Home Settings</span>
                    </a>
                </li>                   
                <li class="nav-item {{ Request::is('admin/blogs*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/blogs') }}">
                        <span class="feather-icon"><i data-feather="book-open"></i></span>
                        <span class="nav-link-text">Blogs</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/case_studies*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/case_studies') }}">
                        <span class="feather-icon"><i data-feather="briefcase"></i></span>
                        <span class="nav-link-text">Case Studies</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('admin/testimonials*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/testimonials') }}">
                        <span class="feather-icon"><i data-feather="message-circle"></i></span>
                        <span class="nav-link-text">Testimonials</span>
                    </a>
                </li>  
                <li class="nav-item {{ Request::is('admin/settings*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('admin/settings') }}">
                        <span class="feather-icon"><i data-feather="settings"></i></span>
                        <span class="nav-link-text">Site Settings</span>
                    </a>
                </li>                
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->
