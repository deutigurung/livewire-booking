@extends('front.layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/about.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/about_responsive.css') }}">
@endsection

@section('js')
<script src="{{ asset('front/js/about.js')}}"></script>
@endsection

@section('content')
	@include('front.includes.breadcrumb')

    <!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_title"><h2>The River / 10 years of excellence</h2></div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_text">
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit.</p>
						</div>
						<div class="about_sig"><img src="{{ asset('front/images/sig.png')}}" alt=""></div>
					</div>
				</div>

				<!-- About Images -->
				<div class="col-lg-6">
					<div class="about_images d-flex flex-row align-items-start justify-content-between flex-wrap">
						<img src="{{ asset('front/img/about_1.png')}}" alt="">
						<img src="{{ asset('front/img/about_2.png')}}" alt="">
						<img src="{{ asset('front/img/about_3.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Split Section Right -->

	<div class="split_section_right container_custom">
		<div class="container">
			<div class="row row-xl-eq-height">
				
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="split_section_image">
						<div class="background_image" style="background-image:url(/front/images/milestones.jpg)"></div>
					</div>
				</div>

				<div class="col-xl-6 order-xl-2 order-1">
					<div class="split_section_right_content">
						<div class="split_section_title"><h1>Luxury Resort</h1></div>
						<div class="split_section_text">
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci.</p>
						</div>

						<!-- Milestones -->
						<div class="milestones_container d-flex flex-row align-items-start justify-content-start flex-wrap">
								
							<!-- Milestone -->
							<div class="milestone d-flex flex-row align-items-start justify-content-start">
								<div class="milestone_content">
									<div class="milestone_counter" data-end-value="45">0</div>
									<div class="milestone_title">Rooms available</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="milestone d-flex flex-row align-items-start justify-content-start">
								<div class="milestone_content">
									<div class="milestone_counter" data-end-value="21" data-sign-after="K">0</div>
									<div class="milestone_title">Tourists this year</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="milestone d-flex flex-row align-items-start justify-content-start">
								<div class="milestone_content">
									<div class="milestone_counter" data-end-value="2">0</div>
									<div class="milestone_title">Swimming pools</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Split Section Left -->

	<div class="split_section_left container_custom">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="split_section_left_content">
						<div class="split_section_title"><h1>Wedding venue</h1></div>
						<div class="split_section_text">
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci.</p>
						</div>

						<!-- Loaders -->
						<div class="loaders_container d-flex flex-row align-items-start justify-content-start flex-wrap">
							
							<!-- Loader -->
							<div class="loader_container text-center">
								<div class="loader text-center" data-perc="0.9">
									<div class="loader_content">
										<div class="loader_title">Good Services</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container text-center">
								<div class="loader text-center" data-perc="0.8">
									<div class="loader_content">
										<div class="loader_title">Tourists</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="loader_container text-center">
								<div class="loader text-center" data-perc="1.0">
									<div class="loader_content">
										<div class="loader_title">Satisfaction</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Loaders Image -->
				<div class="col-xl-6">
					<div class="split_section_image split_section_left_image">
						<div class="background_image" style="background-image:url(/front/images/loaders.jpg)"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('front/img/testimonials.jpg')}}" data-speed="0.8"></div>
        <div class="testimonials_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="testimonials_slider_container">
                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme test_slider owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.2s ease 0s; width: 3420px;">
                                    <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                        <div class="test_slider_item text-center">
                                            <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="testimonial_title">
                                                <a href="#">Perfect Stay</a>
                                            </div>
                                            <div class="testimonial_text">
                                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                                            </div>
                                            <div class="testimonial_image">
                                                <img src="{{ asset('front/img/user_1.jpg')}}" alt="">
                                            </div>
                                            <div class="testimonial_author">
                                                <a href="#">Samantha Smith</a>, Greece
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                        <div class="test_slider_item text-center">
                                            <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="testimonial_title">
                                                <a href="#">We Love It</a>
                                            </div>
                                            <div class="testimonial_text">
                                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                                            </div>
                                            <div class="testimonial_image">
                                                <img src="{{ asset('front/img/user_2.jpg')}}" alt="">
                                            </div>
                                            <div class="testimonial_author">
                                                <a href="#">Samantha Smith</a>, Greece
                                            </div>
                                        </div>
                                    </div>

                                    <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                        <div class="test_slider_item text-center">
                                            <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                                <i></i><i></i><i></i><i></i><i></i>
                                            </div>
                                            <div class="testimonial_title">
                                                <a href="#">Nice Place</a>
                                            </div>
                                            <div class="testimonial_text">
                                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                                            </div>
                                            <div class="testimonial_image">
                                                <img src="{{ asset('front/img/user_3.jpg')}}" alt="">
                                            </div>
                                            <div class="testimonial_author">
                                                <a href="#">Samantha Smith</a>, Greece
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="owl-nav disabled">
                                <button type="button" role="presentation" class="owl-prev">
                                    <span aria-label="Previous">‹</span>
                                </button>
                                <button type="button" role="presentation" class="owl-next">
                                    <span aria-label="Next">›</span>
                                </button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection