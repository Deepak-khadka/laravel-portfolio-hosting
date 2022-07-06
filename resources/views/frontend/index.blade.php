
@extends('frontend.layouts.master')

@section('content')
    <div class="ps-lg-5 mt-3 mt-sm-5" id="pills-tabContent">
        <div class="">
            <div class=" row">
                <div class="col-12">
                    <div class="mb-5">
                        <p class="fw-light text-secondary fs-3 mb-0">Frontend Developer [ React JS ]</p>
                        <h1 class="fw-bolder fs-bolder my-name ">Lal Bahadur BC</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-5">
                        <p class="fw-bolder fs-5">About Me</p>
                        <p>" Innovative Front End Developer with 1.5 years experience building
                            and maintaining responsive websites in the recruiting industry.
                            Proficient in HTML, CSS, jQuery, JavaScript, React JS and React Native; plus
                            modern libraries and frameworks. Passionate about usability and
                            possess working knowledge of Figma. "</p>
                    </div>
                    <div class="p-sm-3">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-sm-4 mb-4 mb-sm-1">
                                <div class="text-sm-center">
                                    <img src="{{ asset('assets/images/idea (1).png') }}" alt="img-fluid" class="mb-2 mb-sm-0">
                                    <p class=" fw-bold fs-5">Problem Solving</p>
                                    <p class="">
                                        “We can not solve our problems with the same level of thinking that created them.”
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 mb-sm-1">
                                <div class="text-sm-center">
                                    <img src="{{ asset('assets/images/working.png') }}" alt="img-fluid" class="mb-2 mb-sm-0">
                                    <p class=" fw-bold fs-5">Hard Working</p>
                                    <p class="">
                                        “Hard work beats talent when talent does not work ”
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4 mb-sm-1">
                                <div class="text-sm-center">
                                    <img src="{{ asset('assets/images/communication.png') }}" alt="img-fluid" class="mb-2 mb-sm-0">
                                    <p class=" fw-bold fs-5">Communication</p>
                                    <p class="">
                                        “Good communication is bridge between confusion and clarity.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection