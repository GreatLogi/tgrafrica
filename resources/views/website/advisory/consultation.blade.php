@extends('layouts.main')

@section('title')
    Consultation
@endsection

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5"
        style="background-image: url({{ asset('img/page-header/bc-adv.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                    <h1>Book a <strong>Consultation</strong></h1>
                    {{-- <span class="sub-title">Get in touch with us</span> --}}
                </div>
                <div class="col-md-4 order-1 order-md-2 align-self-center">
                    <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                        <li><a href="{{ route('home') }}">Home</a></li>
						  <li>Features</li>
                        <li class="active">Consultation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

 <div class="container py-5 mt-3">

					<div class="row">
						<div class="col-lg-8">
							<div class="overflow-hidden mb-2">
								<h2 class="font-weight-normal text-7 mb-2 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Book a <strong class="font-weight-extra-bold">Consultation</strong></h2>
							</div>
							<div class="overflow-hidden mb-4">
								<p class="lead mb-0 appear-animation"  style="text-align: justify" data-appear-animation="maskUp" data-appear-animation-delay="400">We understand that we`re all at different stages of our great return journey. We want to provide you with all the necessary support along your journey to the best of our ability. We believe that success for those of us who have chosen to join the great return will all depend on the quality of our transition preparation. We take transition preparation very seriously and our goal is to ensure that we can provide you with all the necessary assistance you may need.
							</p>
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

									<div class="accordion accordion-modern accordion-modern-grey-scale-1 without-bg mt-4" id="accordion11">
										<div class="card card-default mb-2">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11One">
														We hope to achieve this by:
													</a>
												</h4>
											</div>
											<div id="collapse11One" class="collapse show">
												<div class="card-body mt-3">
													
													<ul class="list mt-4 mb-3 text-2">
														<li>
Giving you a chance to ask any questions pertaining to joining the great return. 

                                                        	<li>
Giving you advice on which advisory services will best suit your needs giving your current circumstance
														</li>

                                                        	<li>
Provide clarification about our advisory process, fees  and expectations. 
														</li>

                                                        	<li>
Sign post you to relevant agencies and organisations who are part of the diaspora support services.														</li>
														</li>
														
													</ul>

												</div>
											</div>
										</div>
										<div class="card card-default mb-2">
											<div class="card-header">
												<h4 class="card-title m-0">
													<a class="accordion-toggle text-3" data-bs-toggle="collapse" data-bs-parent="#accordion11" href="#collapse11Two">
														Process
													</a>
												</h4>
											</div>
											<div id="collapse11Two" class="collapse">
												<div class="card-body mt-3" style="text-align: justify">
													<p>All you need to do is choose a date and time which suits you. In order for us to make sure we can give you the best advice and provide you with relevant support that caters to your unique circumstances and needs, you will first need to complete a short questionnaire which is designed to evaluate how ready you are to join the great return.</p>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-4">
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
									<div class="owl-carousel owl-theme dots-inside mb-0 pb-0" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateOut': 'fadeOut', 'dots': false}">
										<div class="pb-5">
											<img alt="" class="img-fluid rounded" src="{{asset('img/generic/g-analytic.jpg')}}">
										</div>
										<div class="pb-5">
											<img alt="" class="img-fluid rounded" src="{{asset('img/generic/g-analytic2.jpg')}}">
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
												<p>If you find yourself in a position where you identify with the TGR Philosophy but require further information so that you can become 
                                                better educated on some of the opportunities available to you, then TGR Seminars will be perfect for you as part of your pre-transition preparation.</p>
                                                <a href="{{route('advisory.seminar')}}" class="btn btn-modern btn-dark">Read more</a>
                                            </div>
										</section>
										<section class="toggle">
											<a class="toggle-title">TGR Brainstorm</a>
											<div class="toggle-content" style="text-align: justify">
												<p>It is likely that you may find yourself in a position along your pre- transition preparation where you know you want to be a part of the great return
                                 movement back are struggling to find out how it applies to you on a personal level. You are still trying to figure out ,
                                 what you can do, how you can utilise your skillsets and expertise and how you can contribute towards the development of Africa. </p>
                                                <a href="{{route('advisory.brainstorm')}}" class="btn btn-modern btn-dark">Read more</a>
											</div>
										</section>

											<section class="toggle">
											<a class="toggle-title">TGR Analytics</a>
											<div class="toggle-content" style="text-align: justify">
												<p>You might find yourself along your transition management journey  where you may have finally discovered potential business ideas which you would like to purse upon return. </p>
											 <a href="{{route('advisory.analytic')}}" class="btn btn-modern btn-dark">Read more</a>
                                            </div>
										</section>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>
@endsection
