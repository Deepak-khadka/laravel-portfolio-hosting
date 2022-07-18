<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.partials.header')

<body>
<div class="offcanvas offcanvas-start  dark_color" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body min-height-100vh">
        <div class="">
            <div class="img position-relative">
                <a type="button" class="btn btn-dark text-white text-end mb-0 ms-auto offconvas_toggle" data-bs-dismiss="offcanvas"><i class="fa-solid fa-chevron-right fa-2x"></i></a>
                <img src="{{ asset('assets/images/profile.jpg') }}" alt="me image" class="img-fluid profile_img">
                <a type="button" class="toggleButton btn p-2" id="seeMoreInfo"><i class="fa-solid fa-eye"></i></a>
            </div>
            <div class="my-4" style="display:none " id="general_info_box">
                <div class="row gen-info-content mb-3">
                    <div class="col-2 ">
                        <div class="text-end">
                            <img src="https://preview.colorlib.com/theme/vcard2/images/xicon_1.png.pagespeed.ic.W3Kdj3mRjR.webp" alt="" class="">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="ms-xl-3">
                            <div class="info-box">
                                <p class="d-flex text-center mb-0 title">Name:<span class="ms-2 value">Deepak Khadka
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gen-info-content mb-3">
                    <div class="col-2">
                        <div class="text-end">
                            <img src="https://preview.colorlib.com/theme/vcard2/images/icon_2.png.webp" alt="" class="">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="ms-xl-3">
                            <div class="info-box">
                                <p class="d-flex text-center title mb-0">Date of Birth:<span class="ms-2 value">1998-11-30
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gen-info-content mb-3">
                    <div class="col-2">
                        <div class="text-end">
                            <img src="https://preview.colorlib.com/theme/vcard2/images/xicon_3.png.pagespeed.ic.7gX_3UP2Du.webp" alt="" class="">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="ms-xl-3">
                            <div class="info-box">
                                <p class="d-flex mx-auto title mb-0">Mail:<span class="ms-2 value">
                                            demo.deepak-khadka@gmail.com
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gen-info-content mb-3">
                    <div class="col-2">
                        <div class="text-end">
                            <img src="https://preview.colorlib.com/theme/vcard2/images/xicon_4.png.pagespeed.ic.GehJAnOSHc.webp" alt="" class="">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="ms-xl-3">
                            <div class="info-box">
                                <p class="d-flex mx-auto title mb-0">Phone Number:<span class="ms-2 fs-6 value">
                                            98145....0
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gen-info-content mb-3">
                    <div class="col-2">
                        <div class="text-end">
                            <img src="https://preview.colorlib.com/theme/vcard2/images/xicon_5.png.pagespeed.ic.A5Xrzq2S8n.webp" alt="" class="">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="ms-xl-3">
                            <div class="info-box">
                                <p class="d-flex mx-auto title mb-0">Website:<a href="#" class=" text-decoration-none  ms-2 fs-6 value">
                                        demo.deepak-khadka.com.np
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Mobile UI --}}
            <ul class="nav ul-bg nav-pills justify-content-start flex-column my-4" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" type="button" role="tab" aria-controls="pills-about" aria-selected="true"><i class="fa-solid fa-address-card me-4"></i> About Me</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('get-page-name', 'skills') }}"
                       class="nav-link {{ request()->is('skills') ? 'active' : '' }}" type="button" role="tab" aria-controls="pills-skills" aria-selected="false"><i class="fa-solid fa-code me-4"></i>My Skills</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('get-page-name', 'service') }}"
                       class="nav-link {{ request()->is('service') ? 'active' : '' }}" type="button" role="tab" aria-controls="pills-Services" aria-selected="false"><i class="fa-solid fa-screwdriver-wrench me-4"></i>My Services</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('get-page-name', 'experience') }}"
                       class="nav-link {{ request()->is('experience') ? 'active' : '' }}"  type="button" role="tab" aria-controls="pills-experience" aria-selected="false"><i class="fa-solid fa-display me-4"></i>My Experience</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('get-page-name', 'education') }}"
                       class="nav-link {{ request()->is('education') ? 'active' : '' }}"  type="button" role="tab" aria-controls="pills-Education" aria-selected="false"><i class="fa-solid fa-graduation-cap me-4"></i>My Education</a>
                </li>
                <li class="nav-item" role="presentation">
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('get-page-name', 'blogs') }}"
                       class="nav-link {{ request()->is('blogs') ? 'active' : '' }}"  type="button" role="tab" aria-controls="pills-Testimonials" aria-selected="false"><i class="fa-brands fa-microblog me-4"></i>My Blogs</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="{{ route('get-page-name', 'contact') }}"
                       class="nav-link {{ request()->is('contact') ? 'active' : '' }}"  type="button" role="tab" aria-controls="pills-Contact" aria-selected="false"><i class="fa-solid fa-envelope-open-text me-4"></i>Contact Me</a>
                </li>
            </ul>
            <a href="{{ asset('assets/images/lal_bdr_bc.jpg') }}" class="d-block btn w-100 white_btn" target="_blank">
                DownLoad CV
            </a>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-start align-items-center text-secondary my-4">
                <a href="" class="d-inline-block ms-4 social-links">
                    <i class="fa-brands fa-facebook-square fa-2x"></i>
                </a>
                <a href="" class="d-inline-block ms-4 social-links">
                    <i class="fa-brands fa-telegram fa-2x"></i>
                </a>
                <a href="" class="d-inline-block ms-4 social-links">
                    <i class="fa-brands fa-whatsapp-square fa-2x"></i>
                </a>
                <a href="" class="d-inline-block ms-4 social-links">
                    <i class="fa-brands fa-linkedin fa-2x"></i>
                </a>

            </div>
        </div>

    </div>

</div>
<div class="bg-light">
    <div class="container">

         @include('frontend.layouts.partials.navbar')

        <section>

            @include('frontend.layouts.partials.sideinfo')

        </section>
    </div>
</div>


@include('frontend.layouts.partials.footer')
</body>

</html>