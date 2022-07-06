
@extends('frontend.layouts.master')

@section('content')
    <div class="ps-sm-5 mt-sm-5">
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <p class="fw-light text-secondary fs-5 mb-2 mb-0">What I am good at</p>
                        <h1 class="fw-bolder fs-1 ">My Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="services-icons">
                                <img src="{{ asset('assets/images/prototyping.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h5>Prototype Design</h5>
                                <p>When it comes to innovation, business has much to learn from design. The philosophy in design shops is, try it, and improve it. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="services-icons">
                                <img src="{{ asset('assets/images/graphic-design.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h5>Frontend UI Design </h5>
                                <p>Good design begins with the honesty, asks tough questions, comes from collabration and from trusting your intuition.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="services-icons">
                                <img src="{{ asset('assets/images/ux-interface.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h5>UI/UX Developemnt</h5>
                                <p>UI is the saddle, the stirrups, & the reins. UX is the feeling you get being able to ride the horse.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="services-icons">
                                <img src="{{ asset('assets/images/sketch.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h5>Custom Development</h5>
                                <p>
                                    If we want users to like our software, we should design it to behave like a likeable person: respectful, generous and helpful.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="services-icons">
                                <img src="{{ asset('assets/images/testing.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h5>Frontend QA Testing</h5>
                                <p>Testing leads to failure, and failure leads to undestanding.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col-2">
                            <div class="services-icons">
                                <img src="{{ asset('assets/images/customer-support.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="">
                                <h5>Maintenance and Support</h5>
                                <p>Most of the efforts in the software business goes into the maintenance of the code that aleready exists.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-sm-5">
                    <a href="{{ route('get-page-name', 'contact') }}" class="quote-button btn px-5 py-3 fw-boldtext-decoration-none">Ask
                        for a
                        Quote</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 col-sm-3 mb-4 mb-sm-0">
                <div class="skills-icons text-center">
                    <i class="fa-solid fa-compass-drafting fa-3x"></i>
                    <h2 class="my-3 fs-1 fw-bolder">02</h2>
                    <p class="pt-0">Years of Experience</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4 mb-sm-0">
                <div class="skills-icons text-center">
                    <i class="fa-solid fa-code fa-3x"></i>
                    <h2 class="my-3 fs-1 fw-bolder">10</h2>
                    <p class="pt-0">No. of Projects</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4 mb-sm-0">
                <div class="skills-icons text-center">
                    <i class="fa-solid fa-user fa-3x"></i>
                    <h2 class="my-3 fs-1 fw-bolder">100+</h2>
                    <p class="pt-0">Satisfied Customers</p>
                </div>
            </div>
            <div class="col-6 col-sm-3 mb-4 mb-sm-0">
                <div class="skills-icons text-center">
                    <i class="fa-solid fa-handshake-angle fa-3x"></i>
                    <h2 class="my-3 fs-1 fw-bolder">500+</h2>
                    <p class="pt-0">Connected with</p>
                </div>
            </div>
        </div>
    </div>
@endsection