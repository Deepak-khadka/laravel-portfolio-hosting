@extends('frontend.layouts.master')

@section('content')
    <div class="ps-sm-5 mt-sm-5" id="pills-tabContent">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <p class="fw-light text-secondary fs-5 mb-2 mb-sm0">Get in touch</p>
                        <h1 class="fw-bolder fs-1">Contact Me</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <p>The personal contact is a personal thing. The
                                        fact that some people don't know their neighbors,
                                        I don't think that technology is at fault.
                                        You don't lose anything with technology.
                                        You gain other avenues of understanding.
                                    </p>
                                    <div class="alert alert-success  mt-5 text-primary" role="alert" style="display:none ;" id="success_alert">
                                        Thak you for your precious message
                                    </div>

                                    <form onsubmit="return false" class="">
                                        <input type="text" name="fullname" class="form-control rounded-0 mb-3 p-3" placeholder="Name" required>
                                        <input type="email" name="email" class="form-control rounded-0 mb-3 p-3" placeholder="E-mail" autocomplete="off" required>
                                        <input type="text" name="subject" class="form-control rounded-0 mb-3 p-3" placeholder="Subject" required>
                                        <textarea name="description" class="form-control rounded-0 mb-3 p-3" id="" cols="30" rows="4" placeholder="Message" required></textarea>
                                        <button type="submit" class="btn quote-button mt-5 text-decoration-none p-3" onclick="sendEmail()">Send
                                            Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection