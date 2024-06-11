@extends('website.layouts.main')

@section('title')
    Analytics
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url({{ asset('frontend/img/page-header/bc-adv.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>{{ $analystics->title }}</h1>
                    {{-- <span class="sub-title">Get in touch with us</span> --}}
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Advisory</li>
                        <li class="active">Analytics</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 mt-3">

        <div class="row">
            <div class="col-lg-8">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-normal text-7 mb-2 appear-animation" data-appear-animation="maskUp"
                        data-appear-animation-delay="200"><b>{{ $analystics->title }}</b></h2>
                </div>
                <div class="overflow-hidden mb-4">
                    <p class="lead mb-0 appear-animation" style="text-align: justify" data-appear-animation="maskUp"
                        data-appear-animation-delay="400">{{ $analystics->first_para_analytic }}</p>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="testimonial testimonial-secondary appear-animation" data-appear-animation="fadeIn"
                    data-appear-animation-delay="800">
                    <blockquote>
                        <p class="mb-0">If you would like more information on TGR Analytics, please book a consultation to
                            speak to one of our advisors.</p>

                        <hr>
                        <a href="{{ route('contact') }}"
                            class="btn btn-dark font-weight-semibold btn-px-4 btn-py-2 text-2">Book Here</a>

                    </blockquote>
                </div>
            </div>
        </div>

    </div>

    <section class="section section-default border-0 m-0">
        <div class="container py-4">

            <div class="row pb-4">
                <div class="col-md-8">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <h4 class="mt-2 mb-2">Opening <strong>Sections</strong></h4>

                        <div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4"
                            id="accordion11">
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11One">
                                            We aim to achieve this by:
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11One" class="collapse show">
                                    <div class="card-body mt-3">
                                        <ul class="list mt-4 mb-3 text-2">
                                            @foreach (json_decode($analystics->aim_by, true) as $aim)
                                                <li>{{ $aim }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default mb-2">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-3" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion11" href="#collapse11Two">
                                            Process
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse11Two" class="collapse">
                                    <div class="card-body mt-3" style="text-align: justify">
                                        <p>{{ $analystics->analytic_process }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="owl-carousel owl-theme dots-inside mb-0 pb-0"
                            data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}">
                            <div class="pb-5">
                                <img alt="" class="img-fluid rounded"
                                    src="{{ asset('frontend/img/generic/g-analytic.jpg') }}">
                            </div>
                            <div class="pb-5">
                                <img alt="" class="img-fluid rounded"
                                    src="{{ asset('frontend/img/generic/g-analytic2.jpg') }}">
                            </div>
                        </div>

                        <div class="toggle toggle-secondary toggle-simple" data-plugin-toggle>
                            {{-- <section class="toggle active">
											<a class="toggle-title">Our Benefits</a>
											<div class="toggle-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
											</div>
										</section> --}}
                            <section class="toggle">
                                <a class="toggle-title">TGR Seminars</a>
                                <div class="toggle-content" style="text-align: justify">
                                    <p>If you find yourself in a position where you identify with the TGR Philosophy but
                                        require further information so that you can become
                                        better educated on some of the opportunities available to you, then TGR Seminars
                                        will be perfect for you as part of your pre-transition preparation.</p>
                                    <a href="{{ route('advisory.seminar') }}" class="btn btn-modern btn-dark">Read more</a>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title">TGR Brainstorm</a>
                                <div class="toggle-content" style="text-align: justify">
                                    <p>It is likely that you may find yourself in a position along your pre- transition
                                        preparation where you know you want to be a part of the great return
                                        movement back are struggling to find out how it applies to you on a personal level.
                                        You are still trying to figure out ,
                                        what you can do, how you can utilise your skillsets and expertise and how you can
                                        contribute towards the development of Africa. </p>
                                    <a href="{{ route('advisory.brainstorm') }}" class="btn btn-modern btn-dark">Read
                                        more</a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
