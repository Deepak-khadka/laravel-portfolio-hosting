<div class="py-2 py-sm-4 py-4">
    <div class="row">
        <div class="col-sm-2">
            <div class="logo">
                <a href="{{ route('home') }}"
                   class="h3 fw-bolder d-none d-lg-inline fs-1 text-secondary-color text-decoration-none">
                    Lalu.CV
                </a>
                <div class="d-flex align-items-center justify-content-between d-lg-none">
                    <a href="{{ route('home') }}" class="d-inline-block">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="img-flid logo_sm_img">
                    </a>
                    <button data-bs-toggle="offcanvas" href="#offcanvasExample" class="bg-transparent p-0 border-0">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </button>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-10">
            <div class="d-flex align-items-center justify-content-between">
                <ul class="nav ul-bg nav-pills justify-content-start" role="tablist">
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                           type="button" role="tab" aria-controls="pills-about" aria-selected="true">About Me</a>
                    </li>
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('get-page-name', 'skills') }}"
                           class="nav-link {{ request()->is('skills') ? 'active' : '' }}" type="button" role="tab"
                           aria-controls="pills-skills" aria-selected="false">Skills</a>
                    </li>
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('get-page-name', 'service') }}"
                           class="nav-link {{ request()->is('service') ? 'active' : '' }}" type="button" role="tab"
                           aria-controls="pills-Services" aria-selected="false">Services</a>
                    </li>
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('get-page-name', 'experience') }}"
                           class="nav-link {{ request()->is('experience') ? 'active' : '' }}" type="button" role="tab"
                           aria-controls="pills-experience" aria-selected="false">Experience</a>
                    </li>
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('get-page-name', 'education') }}"
                           class="nav-link {{ request()->is('education') ? 'active' : '' }}" type="button" role="tab"
                           aria-controls="pills-Education" aria-selected="false">Education</a>
                    </li>
                    <li class="nav-item border-end" role="presentation">
                    </li>
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('get-page-name', 'blogs') }}"
                           class="nav-link {{ request()->is('blogs') ? 'active' : '' }}" type="button" role="tab"
                           aria-controls="pills-Testimonials" aria-selected="false">Blogs</a>
                    </li>
                    <li class="nav-item border-end" role="presentation">
                        <a href="{{ route('get-page-name', 'contact') }}"
                           class="nav-link {{ request()->is('contact') ? 'active' : '' }}" type="button" role="tab"
                           aria-controls="pills-Contact" aria-selected="false">Contact</a>
                    </li>
                </ul>
                <div class="text-end">
                    <div class=" btn-group btn-hover-shadow">
                        <button class="btn quote-button shadow-none text-decoration-none p-1 text-end m-0">
                            DownLoad CV
                        </button>
                        <a href="{{ asset('images/lal_bdr_bc.jpg') }}" class="btn dark_color" download>
                            <i class="fa-solid fa-download text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>