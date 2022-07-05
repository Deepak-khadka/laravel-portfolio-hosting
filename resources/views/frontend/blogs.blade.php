@extends('frontend.layouts.master')

@section('content')
    <div class="ps-sm-5 mt-sm-5" id="pills-tabContent">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="mb-5">
                        <p class="fw-light text-secondary fs-5 mb-2 mb-sm-0">How i enjoy</p>
                        <h1 class="fw-bolder fs-1 ">My Latest Blogs</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-5">
                        <p>Blog feels small ? If you have just one reader and your blogs changes their life your blogs is big enough.</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="blog-box overflow-hidden border-bottom">
                                        <a href="https://www.javatpoint.com/html-tags" target="_blank" class="blogs-hover">
                                            <img src="images/HTML5_sticker.png" alt="blog-img" class="object-fit-property">
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <p class="mb-0 uppercase"> <span class="text-info">JQuery</span> | <span>02 JUl,2022</span></p>
                                        <h4 class="mb-3 fw-bold">
                                            More about HTML tags
                                        </h4>
                                        <p class="mb-0 text-overflow-3-lines">
                                            HTML tags are like keywords which defines that how web browser will format and display the content. With the help of tags, a web browser can distinguish between an HTML content and a simple content. HTML tags contain three main parts: opening tag, content and closing tag. But some HTML tags are unclosed tags.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="blog-box overflow-hidden border-bottom">
                                        <a href="https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_toggle" class="" target="_blank">
                                            <img src="images/Logo_jQuery.svg.png" alt="blog-img" height="200px" width="100%" class="object-fit-property">
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <p class="mb-0 uppercase"> <span class="text-info">HTML</span> | <span>02 JUl,2022</span></p>
                                        <h4 class="mb-3 fw-bold">
                                            Toggle Button
                                        </h4>
                                        <p class="mb-0 text-overflow-3-lines">
                                            The toggle() method toggles between hide() and show() for the selected elements.

                                            This method checks the selected elements for visibility. show() is run if an element is hidden. hide() is run if an element is visible - This creates a toggle effect. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="blog-box overflow-hidden border-bottom">
                                        <a href="https://animate.style" class="" target="_blank">
                                            <img src="images/images.jpg" alt="blog-img" height="200px" width="100%" class="object-fit-property">
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <p class="mb-0 uppercase"> <span class="text-info">Pluin</span> | <span>02 JUl,2022</span></p>
                                        <h4 class="mb-3 fw-bold">
                                            Use WOW animation
                                        </h4>
                                        <p class="mb-0 text-overflow-3-lines">
                                            If you want to use wow.js to develop commercial sites, themes, projects, and applications you are 100% free to do so! Your source code is kept proprietary. Just remember to include the entire contents of The MIT Licenses in your product.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="blog-box overflow-hidden border-bottom">
                                        <a href="https://owlcarousel2.github.io/OwlCarousel2/" class="" target="_blank">
                                            <img src="images/how-to-add-owl-carousel-slider-in-html.jpg" alt="blog-img" height="200px" width="100%" class="object-fit-property">
                                        </a>
                                    </div>
                                    <div class="p-4">
                                        <p class="mb-0 uppercase"> <span class="text-info">Pluin</span> | <span>02 JUl,2022</span></p>
                                        <h4 class="mb-3 fw-bold">
                                            How to Use Slider
                                        </h4>
                                        <p class="mb-0 text-overflow-3-lines">
                                            Owl Carousel has been choosen as number one jQuery plugin by hundreds of developers. Now its time for a new version that comes with lots of new features and even more user friendly API.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection