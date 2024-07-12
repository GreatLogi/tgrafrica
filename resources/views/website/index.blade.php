@extends('website.layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <style>
        .ipopup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
    <div id="overlay" style="display: none;">
        <div id="popup" class="ipopup">
            <button id="iclose">&times;</button>
            <h4 class="modal-title" id="defaultModalLabel"><strong>The Great Return</strong> - Book</h4>
            <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('img/gallery/gallery-1.png') }}"
                width="100px" alt="">
            <a class="align-items-center" href="http://www.amazon.com/">Grab a copy on Amazon now <span
                    class="social-icons-amazon">
                    <a href="http://www.amazon.com/" target="_blank" title="amazon"><i class="fab fa-amazon"></i></a>
                </span> </a>
        </div>
    </div>

    <div role="main" class="main">
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
            data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['650px','650px','650px','550px','500px']"
            style="height: 650px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative"
                        style="background-image: url(img/slides/slide-corporate-3-2.jpg); background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-1 h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 text-center">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h3 class="position-relative text-color-white color-white text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation"
                                            style="color: white" data-appear-animation="fadeInDownShorterPlus"
                                            data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50">
                                                <img src="{{ asset('img/slides/slide-title-border-light.png') }}"
                                                    class="w-auto appear-animation"
                                                    data-appear-animation="fadeInRightShorter"
                                                    data-appear-animation-delay="250"
                                                    data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            A JOURNEY BACK <span class="position-relative">TO <span
                                                    class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img
                                                        src="{{ asset('img/slides/slide-blue-line.png') }}"
                                                        class="w-auto appear-animation"
                                                        data-appear-animation="fadeInLeftShorterPlus"
                                                        data-appear-animation-delay="1000"
                                                        data-plugin-options="{'minWindowWidth': 0}"
                                                        alt="" /></span></span>
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50">
                                                <img src="{{ asset('img/slides/slide-title-border-light.png') }}"
                                                    class="w-auto appear-animation"
                                                    data-appear-animation="fadeInLeftShorter"
                                                    data-appear-animation-delay="250"
                                                    data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h3>
                                        <h1 class="text-color-white font-weight-extra-bold text-12-5 line-height-1 mb-2 appear-animation"
                                            style="color: white" data-appear-animation="blurIn"
                                            data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                            HOME & HEART</h1>
                                        <p class="text-4-5 text-color-white font-weight-light mb-0" style="color: white"
                                            data-plugin-animated-letters
                                            data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}">welcome to The
                                            Great Return</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overflow-hidden">
                        <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                            data-appear-animation="kenBurnsToRight" data-appear-animation-duration="13s"
                            data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show
                            style="background-image: url(img/slides/slide-corporate-3-a.jpg); background-size: cover; background-position: center;">
                        </div>
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-7">
                                    <div class="d-flex flex-column align-items-center">
                                        <h2 class="text-color-dark font-weight-extra-bold text-12-5 line-height-1 text-center mb-3 appear-animation"
                                            data-appear-animation="blurIn" data-appear-animation-delay="500"
                                            data-plugin-options="{'minWindowWidth': 0}">HOMECOMING</h2>
                                        <p class="text-4-5 text-color-dark font-weight-light text-center mb-4"
                                            data-plugin-animated-letters
                                            data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                            Where Every Story Begins Anew</p>
                                        <a href="#"
                                            class="btn btn-secondary btn-modern font-weight-bold text-2 py-3 btn-px-5 mt-2 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2500"
                                            data-plugin-options="{'minWindowWidth': 0}">DISCOVER MORE <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
                <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
            </div>
            <div class="owl-dots mb-5">
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>
        <section class="section bg-color-light border-0 m-0">
            <div class="container">
                <div class="row text-center text-md-start">
                    <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="200">
                        <div class="row align-items-center justify-content-center justify-content-md-start">
                            <div class="col-4">
                                <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('img/icons/seo-grey.png') }}"
                                    alt="">
                            </div>
                            <div class="col-lg-8">
                                <h2 class="font-weight-bold text-5 line-height-5 mb-1">TGR Advisory</h2>
                                <p class="mb-0">Empowering returnees with comprehensive support and expert guidance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeIn">
                        <div class="row align-items-center justify-content-center justify-content-md-start">
                            <div class="col-4">
                                <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('img/icons/marketing-grey.png') }}"
                                    alt="">
                            </div>
                            <div class="col-lg-8">
                                <h2 class="font-weight-bold text-5 line-height-5 mb-1">TGR Brainstorm</h2>
                                <p class="mb-0">Innovative minds converging to shape the future of returnees.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="200">
                        <div class="row align-items-center justify-content-center justify-content-md-start">
                            <div class="col-4">
                                <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('img/icons/support-grey.png') }}"
                                    alt="">
                            </div>
                            <div class="col-lg-8">
                                <h2 class="font-weight-bold text-5 line-height-5 mb-1">TGR Analytics</h2>
                                <p class="mb-0">Utilizing data insights to optimize pathways for returnees' success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey m-0 border-0 mb-50">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2"> We are <strong
                                class="font-weight-extra-bold">TGR Africa</strong></h2>
                        <p class="lead pe-lg-5 me-lg-5">An organisation devoted to acting as the bridge between the African
                            Diaspora and Africa.
                            We help the African Diaspora engage with Africa on a business and investment level rather than
                            We are a global community devoted to rebuilding reconnecting and revitalising lives.</p>
                        <a href="{{ route('about.mission') }}"
                            class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">LEARN MORE</a>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5"
                        style="top: 1.7rem;">
                        <img src="{{ asset('img/generic/generic-corporate-3-1.png') }}"
                            class="img-fluid position-absolute d-none d-sm-block appear-animation"
                            data-appear-animation="expandIn" data-appear-animation-delay="300"
                            style="top: 10%; left: -50%;" alt="" />
                        <img src="{{ asset('img/generic/generic-corporate-3-2.png') }}"
                            class="img-fluid position-absolute d-none d-sm-block appear-animation"
                            data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                        <img src="{{ asset('img/generic/generic-corporate-3-3.png') }}"
                            class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn"
                            data-appear-animation-delay="600" alt="" />
                    </div>
                </div>
            </div>
        </section>



        <div class="home-intro bg-secondary">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>
                            If you are ready to join
                            <span class="highlighted-word">‘The Great Return’</span>
                            {{-- <span>, please book a consultation or email us.</span> --}}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Book a
                                Consultation</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="section  section-height-3 border-0 mt-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pe-5 pe-md-0 my-4" src="{{ asset('img/layout-styles.png') }}"
                                alt="layout styles" />
                        </div>
                        <div class="col-md-8 ps-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong
                                    class="font-weight-extra-bold">Meet</strong> The Founder</h2>
                            <p class="lead">Lordy Emmen is a diaspora entrepreneur, diaspora activist and author of `The
                                Great Return`.</p>

                            <p class="text-4" style="text-align: justify">
                                She is of Ghanian decent and has spent the past 25 years living in the UK where she had a
                                successful career as a Management Accountant.
                                Since 2019, along with her husband, she has been able to make investments in the poultry
                                sector as a result of recognising the dependency
                                a country like Ghana has on foreign food imports which can be sourced locally.
                                She and her husband have also made investments in Ghana’s growing real estate market.
                            </p>
                            <a href="{{ route('about.founder') }}"
                                class="btn btn-dark font-weight-semibold rounded-0 px-5 btn-py-2 text-2 p-relative bottom-3">LEARN
                                MORE</a>

                        </div>
                    </div>
                    <hr class="solid my-5">
                </div>
            </div>
        </div>
    </section>
    <section class="section section-secondary border-0 py-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation"
                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <h2 class="font-weight-bold text-color-light text-7 mb-2">The Great Return</h2>
                    <p class="lead font-weight-light text-color-light text-4">Book</p>
                    <p class="font-weight-light text-color-light text-2 mb-4 opacity-7">Since the mid 2000s there has been
                        a growing movement taken place amongst the African Diaspora population living in the western world.
                        Why are thousands of them deciding to abandon the West and relocate back to Africa in order to start
                        new lives?.</p>
                    <a href="#" class="btn btn-primary btn-px-5 btn-py-2 text-2">Get it on Amazon</a>
                </div>
                <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ asset('img/gallery/gallery-1.jpg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section section-no-background section-height-4 border-0 pb-5 m-0 appear-animation"
        data-appear-animation="fadeIn">
        <div class="container">
            <div class="row justify-content-center recent-posts appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="200">

                <div class="text-center">
                    <div class="col">
                        <h2 class="font-weight-normal text-6 mt-4">Our <strong
                                class="font-weight-extra-bold">News</strong></h2>
                    </div>
                </div>
                <div class="col-sm-8 col-md-4 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="{{ asset('img/blog/blog-corporate-9-1.jpg') }}"
                                        class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{-- <p class="text-color-secondary text-2 mb-1">LOREM IPSUM DOLOR SIT</p> --}}
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html"
                                        class="text-dark text-decoration-none">News 1</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing
                                    elit.</p>
                                <a href="#" class="read-more text-color-secondary font-weight-semibold text-2">VIEW
                                    MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-4 mb-4 mb-md-0">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="{{ asset('img/blog/blog-corporate-9-2.jpg') }}"
                                        class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{-- <p class="text-color-secondary text-2 mb-1">LOREM IPSUM DOLOR SIT</p> --}}
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html"
                                        class="text-dark text-decoration-none">News 2</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing
                                    elit.</p>
                                <a href="#" class="read-more text-color-secondary font-weight-semibold text-2">VIEW
                                    MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-4">
                    <article>
                        <div class="row">
                            <div class="col">
                                <a href="blog-post.html" class="text-decoration-none">
                                    <img src="{{ asset('img/blog/blog-corporate-9-3.jpg') }}"
                                        class="img-fluid hover-effect-2 mb-3" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{-- <p class="text-color-secondary text-2 mb-1">LOREM IPSUM DOLOR SIT</p> --}}
                                <h4 class="line-height-5 ls-0"><a href="blog-post.html"
                                        class="text-dark text-decoration-none">News 3</a></h4>
                                <p class="text-color-dark opacity-7 mb-3">Lorem ipsum dolor sit amet, coctetur adipiscing
                                    elit.</p>
                                <a href="#" class="read-more text-color-secondary font-weight-semibold text-2">VIEW
                                    MORE <i class="fas fa-chevron-right text-3 ms-2"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0">TGR is <strong>everything</strong> you need to plan an
                            awesome <strong>return</strong> Home!</h2>
                        <p class="mb-0">Deciding on how to come back home?</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="{{ route('contact') }}" class="btn btn-modern btn-secondary">Get in Touch!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var show_delay = 0; // Show immediately on page load
            var hide_delay = 30000; // Hide after 30 seconds

            // Show the popup after the specified delay
            setTimeout(function() {
                document.getElementById('overlay').style.display = 'block';
            }, show_delay);

            // Hide the popup after the specified duration
            setTimeout(function() {
                document.getElementById('overlay').style.display = 'none';
            }, show_delay + hide_delay);

            // Close button functionality
            document.getElementById('iclose').onclick = function() {
                document.getElementById('overlay').style.display = 'none';
            };
        });
    </script>
@endsection
