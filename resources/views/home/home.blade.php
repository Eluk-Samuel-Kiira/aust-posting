@extends('layouts.app')

@section('title', 'Find Top Talent with AI-Powered Recruitment')

@section('meta_description', 'Australia\'s leading job posting platform. Post jobs, screen CVs with AI, get professional CV reviews, and connect via WhatsApp. Trusted by leading Australian companies.')

@section('content')
	
	<!--begin::How It Works Section-->
	<div class="mb-n10 mb-lg-n20 z-index-2">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mb-17">
				<!--begin::Title-->
				<h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">How It Works</h3>
				<!--end::Title-->
				<!--begin::Text-->
				<div class="fs-5 text-muted fw-bold">
					Simple, efficient hiring process designed for Australian employers
					<br />
					Connect with the right candidates faster using AI-powered insights
				</div>
				<!--end::Text-->
			</div>
			<!--end::Heading-->

			<!--begin::Row-->
			<div class="row w-100 gy-10 mb-md-20">
				<!--begin::Col-->
				<div class="col-md-4 px-5">
					<!--begin::Story-->
					<div class="text-center mb-10 mb-md-0">
						<!--begin::Illustration-->
						<img src="{{ asset('assets/media/illustrations/sketchy-1/2.png') }}" class="mh-125px mb-9" alt="Post Job" />
						<!--end::Illustration-->
						<!--begin::Heading-->
						<div class="d-flex flex-center mb-5">
							<!--begin::Badge-->
							<span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">1</span>
							<!--end::Badge-->
							<!--begin::Title-->
							<div class="fs-5 fs-lg-3 fw-bold text-gray-900">Post Your Job</div>
							<!--end::Title-->
						</div>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="fw-semibold fs-6 fs-lg-4 text-muted">
							Create a job listing in minutes with our
							<br />intuitive interface. Reach thousands of
							<br />qualified candidates across Australia
						</div>
						<!--end::Description-->
					</div>
					<!--end::Story-->
				</div>
				<!--end::Col-->

				<!--begin::Col-->
				<div class="col-md-4 px-5">
					<!--begin::Story-->
					<div class="text-center mb-10 mb-md-0">
						<!--begin::Illustration-->
						<img src="{{ asset('assets/media/illustrations/sketchy-1/8.png') }}" class="mh-125px mb-9" alt="AI Screening" />
						<!--end::Illustration-->
						<!--begin::Heading-->
						<div class="d-flex flex-center mb-5">
							<!--begin::Badge-->
							<span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">2</span>
							<!--end::Badge-->
							<!--begin::Title-->
							<div class="fs-5 fs-lg-3 fw-bold text-gray-900">AI Screening</div>
							<!--end::Title-->
						</div>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="fw-semibold fs-6 fs-lg-4 text-muted">
							Our AI analyzes CVs automatically,
							<br />matching candidates to your
							<br />requirements with precision
						</div>
						<!--end::Description-->
					</div>
					<!--end::Story-->
				</div>
				<!--end::Col-->

				<!--begin::Col-->
				<div class="col-md-4 px-5">
					<!--begin::Story-->
					<div class="text-center mb-10 mb-md-0">
						<!--begin::Illustration-->
						<img src="{{ asset('assets/media/illustrations/sketchy-1/12.png') }}" class="mh-125px mb-9" alt="Connect" />
						<!--end::Illustration-->
						<!--begin::Heading-->
						<div class="d-flex flex-center mb-5">
							<!--begin::Badge-->
							<span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">3</span>
							<!--end::Badge-->
							<!--begin::Title-->
							<div class="fs-5 fs-lg-3 fw-bold text-gray-900">Connect & Hire</div>
							<!--end::Title-->
						</div>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="fw-semibold fs-6 fs-lg-4 text-muted">
							Communicate directly with top candidates
							<br />via WhatsApp or email. Streamline your
							<br />hiring from first contact to offer
						</div>
						<!--end::Description-->
					</div>
					<!--end::Story-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::How It Works Section-->

	<div class="my-10 my-lg-15"></div>

	<!--begin::Features Section-->
	<div class="mt-sm-n10">
		<!--begin::Curve top-->
		<div class="landing-curve landing-dark-color">
			<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
			</svg>
		</div>
		<!--end::Curve top-->
		<!--begin::Wrapper-->
		<div class="pb-15 pt-18 landing-dark-bg">
			<!--begin::Container-->
			<div class="container">
				<!--begin::Heading-->
				<div class="text-center mt-15 mb-18" id="features" data-kt-scroll-offset="{default: 100, lg: 150}">
					<!--begin::Title-->
					<h3 class="fs-2hx text-white fw-bold mb-5">Our Core Services</h3>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="fs-5 text-gray-700 fw-bold">
						Comprehensive recruitment solutions built for Australian businesses
						<br />Everything you need to find and hire the right talent
					</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->

				<!--begin::Statistics-->
				<div class="d-flex flex-center">
					<!--begin::Items-->
					<div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
						<!--begin::Item-->
						<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{ asset('assets/media/svg/misc/octagon.svg') }}')">
							<!--begin::Symbol-->
							<i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
							</i>
							<!--end::Symbol-->
							<!--begin::Info-->
							<div class="mb-0">
								<!--begin::Value-->
								<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
									<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="50" data-kt-countup-suffix="K+">0</div>
								</div>
								<!--end::Value-->
								<!--begin::Label-->
								<span class="text-gray-600 fw-semibold fs-5 lh-0">Active Candidates</span>
								<!--end::Label-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Item-->

						<!--begin::Item-->
						<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{ asset('assets/media/svg/misc/octagon.svg') }}')">
							<!--begin::Symbol-->
							<i class="ki-duotone ki-chart-pie-4 fs-2tx text-white mb-3">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
							</i>
							<!--end::Symbol-->
							<!--begin::Info-->
							<div class="mb-0">
								<!--begin::Value-->
								<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
									<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="15" data-kt-countup-suffix="K+">0</div>
								</div>
								<!--end::Value-->
								<!--begin::Label-->
								<span class="text-gray-600 fw-semibold fs-5 lh-0">Jobs Posted</span>
								<!--end::Label-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Item-->

						<!--begin::Item-->
						<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('{{ asset('assets/media/svg/misc/octagon.svg') }}')">
							<!--begin::Symbol-->
							<i class="ki-duotone ki-basket fs-2tx text-white mb-3">
								<span class="path1"></span>
								<span class="path2"></span>
								<span class="path3"></span>
								<span class="path4"></span>
							</i>
							<!--end::Symbol-->
							<!--begin::Info-->
							<div class="mb-0">
								<!--begin::Value-->
								<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
									<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="8" data-kt-countup-suffix="K+">0</div>
								</div>
								<!--end::Value-->
								<!--begin::Label-->
								<span class="text-gray-600 fw-semibold fs-5 lh-0">Successful Hires</span>
								<!--end::Label-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Items-->
				</div>
				<!--end::Statistics-->

				<!--begin::Testimonial-->
				<div class="fs-2 fw-semibold text-muted text-center mb-3">
					<span class="fs-1 lh-1 text-gray-700">"</span>
					The AI matching is incredibly accurate. We save hours screening CVs
					<br />
					<span class="text-gray-700 me-1">and connect with quality candidates immediately</span>
					<span class="fs-1 lh-1 text-gray-700">"</span>
				</div>
				<!--end::Testimonial-->

				<!--begin::Author-->
				<div class="fs-2 fw-semibold text-muted text-center">
					<a href="#" class="link-primary fs-4 fw-bold">Sarah Mitchell,</a>
					<span class="fs-4 fw-bold text-gray-600">HR Director, Leading Tech Company</span>
				</div>
				<!--end::Author-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Wrapper-->
		<!--begin::Curve bottom-->
		<div class="landing-curve landing-dark-color">
			<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
			</svg>
		</div>
		<!--end::Curve bottom-->
	</div>
	<!--end::Features Section-->

	<!--begin::Benefits Section-->
	<div class="py-10 py-lg-20">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mb-12">
				<!--begin::Title-->
				<h3 class="fs-2hx text-gray-900 mb-5" id="benefits" data-kt-scroll-offset="{default: 100, lg: 150}">Why Choose JobMatch</h3>
				<!--end::Title-->
				<!--begin::Sub-title-->
				<div class="fs-5 text-muted fw-bold">
					Designed specifically for Australian employers
					<br />Save time, reduce costs, and find better talent
				</div>
				<!--end::Sub-title-->
			</div>
			<!--end::Heading-->

			<!--begin::Slider-->
			<div class="tns tns-default" style="direction: ltr">
				<!--begin::Wrapper-->
				<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Icon-->
						<div class="symbol symbol-circle symbol-100px mb-5 mx-auto">
							<div class="symbol-label bg-light-primary">
								<i class="ki-duotone ki-element-11 fs-2tx text-primary">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="mb-0">
							<!--begin::Name-->
							<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">AI-Powered Screening</a>
							<!--end::Name-->
							<!--begin::Description-->
							<div class="text-muted fs-6 fw-semibold mt-3">
								Automatically match candidates based on skills, experience, and culture fit
							</div>
							<!--end::Description-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Item-->

					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Icon-->
						<div class="symbol symbol-circle symbol-100px mb-5 mx-auto">
							<div class="symbol-label bg-light-success">
								<i class="ki-duotone ki-chart-pie-4 fs-2tx text-success">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</div>
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="mb-0">
							<!--begin::Name-->
							<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">CV Review & Rewriting</a>
							<!--end::Name-->
							<!--begin::Description-->
							<div class="text-muted fs-6 fw-semibold mt-3">
								Professional CV optimization services to present candidates in the best light
							</div>
							<!--end::Description-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Item-->

					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Icon-->
						<div class="symbol symbol-circle symbol-100px mb-5 mx-auto">
							<div class="symbol-label bg-light-warning">
								<i class="ki-duotone ki-basket fs-2tx text-warning">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="mb-0">
							<!--begin::Name-->
							<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">WhatsApp Integration</a>
							<!--end::Name-->
							<!--begin::Description-->
							<div class="text-muted fs-6 fw-semibold mt-3">
								Direct communication with candidates via WhatsApp for faster response times
							</div>
							<!--end::Description-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Item-->

					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Icon-->
						<div class="symbol symbol-circle symbol-100px mb-5 mx-auto">
							<div class="symbol-label bg-light-info">
								<i class="ki-duotone ki-element-11 fs-2tx text-info">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="mb-0">
							<!--begin::Name-->
							<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Local Expertise</a>
							<!--end::Name-->
							<!--begin::Description-->
							<div class="text-muted fs-6 fw-semibold mt-3">
								Australia-based support team with deep industry knowledge
							</div>
							<!--end::Description-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Item-->

					<!--begin::Item-->
					<div class="text-center">
						<!--begin::Icon-->
						<div class="symbol symbol-circle symbol-100px mb-5 mx-auto">
							<div class="symbol-label bg-light-danger">
								<i class="ki-duotone ki-chart-pie-4 fs-2tx text-danger">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</div>
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="mb-0">
							<!--begin::Name-->
							<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Transparent Pricing</a>
							<!--end::Name-->
							<!--begin::Description-->
							<div class="text-muted fs-6 fw-semibold mt-3">
								No hidden fees. Pay only for what you use with flexible billing
							</div>
							<!--end::Description-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Item-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Button-->
				<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
					<i class="ki-duotone ki-left fs-2x"></i>
				</button>
				<!--end::Button-->
				<!--begin::Button-->
				<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
					<i class="ki-duotone ki-right fs-2x"></i>
				</button>
				<!--end::Button-->
			</div>
			<!--end::Slider-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Benefits Section-->

	<!-- ====================================================== -->
	<!-- CTA BADGE 2: Between Why Choose JobMatch and Pricing -->
	<!-- ====================================================== -->
	<div class="container position-relative z-index-2" style="margin-top: -30px; margin-bottom: -30px;">
		<div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
			<!--begin::Content-->
			<div class="my-2 me-5">
				<!--begin::Title-->
				<div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
					Ready to transform your hiring?
					<span class="fw-normal">Start for free today</span>
				</div>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">
					🌟 Join thousands of Australian employers finding better talent faster with AI-powered recruitment
				</div>
				<!--end::Description-->
			</div>
			<!--end::Content-->
			<!--begin::Link-->
			<a href="{{ route('home') }}" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Start Your Free Trial</a>
			<!--end::Link-->
		</div>
	</div>
	<!-- ====================================================== -->

	<!--begin::Pricing Section-->
	<div class="mt-sm-n20">
		<!--begin::Curve top-->
		<div class="landing-curve landing-dark-color">
			<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
			</svg>
		</div>
		<!--end::Curve top-->
		<!--begin::Wrapper-->
		<div class="py-20 landing-dark-bg">
			<!--begin::Container-->
			<div class="container">
				<!--begin::Plans-->
				<div class="d-flex flex-column container pt-lg-20">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Simple, Transparent Pricing</h1>
						<div class="text-gray-600 fw-semibold fs-5">
							Choose the plan that fits your hiring needs
							<br />Upgrade anytime as your team grows
						</div>
					</div>
					<!--end::Heading-->

					<!--begin::Pricing-->
					<div class="text-center" id="kt_pricing">
						<!--begin::Nav group-->
						<div class="nav-group landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true" style="border: 1px dashed #2B4666;">
							<a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
							<a href="#" class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3" data-kt-plan="annual">Annual</a>
						</div>
						<!--end::Nav group-->

						<!--begin::Row-->
						<div class="row g-10">
							<!--begin::Col-->
							<div class="col-xl-4">
								<div class="d-flex h-100 align-items-center">
									<!--begin::Option-->
									<div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
										<!--begin::Heading-->
										<div class="mb-7 text-center">
											<!--begin::Title-->
											<h1 class="text-gray-900 mb-5 fw-boldest">Starter</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-gray-500 fw-semibold mb-5">Perfect for small teams</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="text-center">
												<span class="mb-2 text-primary">A$</span>
												<span class="fs-3x fw-bold text-primary" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">99</span>
												<span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Month" data-kt-plan-price-annual="/ Year">/ Month</span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Heading-->

										<!--begin::Features-->
										<div class="w-100 mb-10">
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 5 Active Jobs</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">AI CV Screening</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800">WhatsApp Integration</span>
												<i class="ki-duotone ki-cross-circle fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800">CV Review Service</span>
												<i class="ki-duotone ki-cross-circle fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<span class="fw-semibold fs-6 text-gray-800">Priority Support</span>
												<i class="ki-duotone ki-cross-circle fs-1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Features-->

										<!--begin::Select-->
										<a href="" class="btn btn-primary">Get Started</a>
										<!--end::Select-->
									</div>
									<!--end::Option-->
								</div>
							</div>
							<!--end::Col-->

							<!--begin::Col-->
							<div class="col-xl-4">
								<div class="d-flex h-100 align-items-center">
									<!--begin::Option-->
									<div class="w-100 d-flex flex-column flex-center rounded-3 bg-primary py-20 px-10">
										<!--begin::Heading-->
										<div class="mb-7 text-center">
											<!--begin::Title-->
											<h1 class="text-white mb-5 fw-boldest">Professional</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-white opacity-75 fw-semibold mb-5">Most popular choice</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="text-center">
												<span class="mb-2 text-white">A$</span>
												<span class="fs-3x fw-bold text-white" data-kt-plan-price-month="299" data-kt-plan-price-annual="2990">299</span>
												<span class="fs-7 fw-semibold text-white opacity-75" data-kt-plan-price-month="/ Month" data-kt-plan-price-annual="/ Year">/ Month</span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Heading-->

										<!--begin::Features-->
										<div class="w-100 mb-10">
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Unlimited Active Jobs</span>
												<i class="ki-duotone ki-check-circle fs-1 text-white">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">Advanced AI Screening</span>
												<i class="ki-duotone ki-check-circle fs-1 text-white">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">WhatsApp Integration</span>
												<i class="ki-duotone ki-check-circle fs-1 text-white">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-white opacity-75 text-start pe-3">5 Free CV Reviews/Month</span>
												<i class="ki-duotone ki-check-circle fs-1 text-white">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<span class="fw-semibold fs-6 text-white opacity-75">Priority Support</span>
												<i class="ki-duotone ki-cross-circle fs-1 text-white">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Features-->

										<!--begin::Select-->
										<a href="" class="btn btn-color-primary btn-active-light-primary btn-light">Get Started</a>
										<!--end::Select-->
									</div>
									<!--end::Option-->
								</div>
							</div>
							<!--end::Col-->

							<!--begin::Col-->
							<div class="col-xl-4">
								<div class="d-flex h-100 align-items-center">
									<!--begin::Option-->
									<div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
										<!--begin::Heading-->
										<div class="mb-7 text-center">
											<!--begin::Title-->
											<h1 class="text-gray-900 mb-5 fw-boldest">Enterprise</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-gray-500 fw-semibold mb-5">For large teams</div>
											<!--end::Description-->
											<!--begin::Price-->
											<div class="text-center">
												<span class="mb-2 text-primary">A$</span>
												<span class="fs-3x fw-bold text-primary">Custom</span>
												<span class="fs-7 fw-semibold opacity-50">Contact sales</span>
											</div>
											<!--end::Price-->
										</div>
										<!--end::Heading-->

										<!--begin::Features-->
										<div class="w-100 mb-10">
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Unlimited Everything</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Dedicated Account Manager</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Custom Integrations</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack mb-5">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Unlimited CV Services</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">24/7 Support</span>
												<i class="ki-duotone ki-check-circle fs-1 text-success">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Features-->

										<!--begin::Select-->
										<a href="" class="btn btn-primary">Contact Sales</a>
										<!--end::Select-->
									</div>
									<!--end::Option-->
								</div>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Pricing-->
				</div>
				<!--end::Plans-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Wrapper-->
		<!--begin::Curve bottom-->
		<div class="landing-curve landing-dark-color">
			<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
			</svg>
		</div>
		<!--end::Curve bottom-->
	</div>
	<!--end::Pricing Section-->

	<!--begin::Testimonials Section-->
	<div class="mt-20 mb-n20 position-relative z-index-2">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Heading-->
			<div class="text-center mb-17">
				<!--begin::Title-->
				<h3 class="fs-2hx text-gray-900 mb-5">What Our Clients Say</h3>
				<!--end::Title-->
				<!--begin::Description-->
				<div class="fs-5 text-muted fw-bold">
					Trusted by leading Australian employers
					<br />Real results from real companies
				</div>
				<!--end::Description-->
			</div>
			<!--end::Heading-->

			<!--begin::Row-->
			<div class="row g-lg-10 mb-10 mb-lg-20">
				<!--begin::Col-->
				<div class="col-lg-4">
					<!--begin::Testimonial-->
					<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
						<!--begin::Wrapper-->
						<div class="mb-7">
							<!--begin::Rating-->
							<div class="rating mb-6">
								@for ($i = 0; $i < 5; $i++)
									<div class="rating-label me-2 checked">
										<i class="ki-duotone ki-star fs-5"></i>
									</div>
								@endfor
							</div>
							<!--end::Rating-->
							<!--begin::Title-->
							<div class="fs-2 fw-bold text-gray-900 mb-3">
								Incredible time savings and better candidates
							</div>
							<!--end::Title-->
							<!--begin::Feedback-->
							<div class="text-gray-500 fw-semibold fs-4">
								The AI matching technology is spot-on. We receive fewer but much higher quality applications, and the WhatsApp feature keeps candidates engaged throughout the process.
							</div>
							<!--end::Feedback-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Author-->
						<div class="d-flex align-items-center">
							<!--begin::Avatar-->
							<div class="symbol symbol-circle symbol-50px me-5">
								<img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="Author" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<div class="flex-grow-1">
								<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">James Chen</a>
								<span class="text-muted d-block fw-bold">Hiring Manager, Sydney Tech</span>
							</div>
							<!--end::Name-->
						</div>
						<!--end::Author-->
					</div>
					<!--end::Testimonial-->
				</div>
				<!--end::Col-->

				<!--begin::Col-->
				<div class="col-lg-4">
					<!--begin::Testimonial-->
					<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
						<!--begin::Wrapper-->
						<div class="mb-7">
							<!--begin::Rating-->
							<div class="rating mb-6">
								@for ($i = 0; $i < 5; $i++)
									<div class="rating-label me-2 checked">
										<i class="ki-duotone ki-star fs-5"></i>
									</div>
								@endfor
							</div>
							<!--end::Rating-->
							<!--begin::Title-->
							<div class="fs-2 fw-bold text-gray-900 mb-3">
								The CV review service elevated our shortlist
							</div>
							<!--end::Title-->
							<!--begin::Feedback-->
							<div class="text-gray-500 fw-semibold fs-4">
								Professional CV rewrites ensure candidates present themselves optimally. This feature alone has improved our hiring outcomes significantly.
							</div>
							<!--end::Feedback-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Author-->
						<div class="d-flex align-items-center">
							<!--begin::Avatar-->
							<div class="symbol symbol-circle symbol-50px me-5">
								<img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="Author" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<div class="flex-grow-1">
								<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Emma Watson</a>
								<span class="text-muted d-block fw-bold">HR Manager, Melbourne Finance</span>
							</div>
							<!--end::Name-->
						</div>
						<!--end::Author-->
					</div>
					<!--end::Testimonial-->
				</div>
				<!--end::Col-->
				

				<!--begin::Col-->
				<div class="col-lg-4">
					<!--begin::Testimonial-->
					<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
						<!--begin::Wrapper-->
						<div class="mb-7">
							<!--begin::Rating-->
							<div class="rating mb-6">
								@for ($i = 0; $i < 5; $i++)
									<div class="rating-label me-2 checked">
										<i class="ki-duotone ki-star fs-5"></i>
									</div>
								@endfor
							</div>
							<!--end::Rating-->
							<!--begin::Title-->
							<div class="fs-2 fw-bold text-gray-900 mb-3">
								Best recruitment investment we've made
							</div>
							<!--end::Title-->
							<!--begin::Feedback-->
							<div class="text-gray-500 fw-semibold fs-4">
								From posting to hire in record time. The integrated WhatsApp messaging means faster communication and better candidate experience. Highly recommend.
							</div>
							<!--end::Feedback-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Author-->
						<div class="d-flex align-items-center">
							<!--begin::Avatar-->
							<div class="symbol symbol-circle symbol-50px me-5">
								<img src="{{ asset('assets/media/avatars/300-16.jpg') }}" alt="Author" />
							</div>
							<!--end::Avatar-->
							<!--begin::Name-->
							<div class="flex-grow-1">
								<a href="#" class="text-gray-900 fw-bold text-hover-primary fs-6">Michael Roberts</a>
								<span class="text-muted d-block fw-bold">Operations Director, Brisbane Retail</span>
							</div>
							<!--end::Name-->
						</div>
						<!--end::Author-->
					</div>
					<!--end::Testimonial-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->

			<!--begin::Highlight-->
			<div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
				<!--begin::Content-->
				<div class="my-2 me-5">
					<!--begin::Title-->
					<div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
						Ready to transform your hiring?
						<span class="fw-normal">Start for free today</span>
					</div>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75">
						Join thousands of Australian employers finding better talent faster
					</div>
					<!--end::Description-->
				</div>
				<!--end::Content-->
				<!--begin::Link-->
				<a href="" class="btn btn-lg btn-outline border-2 btn-outline-white flex-shrink-0 my-2">Start Your Free Trial</a>
				<!--end::Link-->
			</div>
			<!--end::Highlight-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Testimonials Section-->
@endsection