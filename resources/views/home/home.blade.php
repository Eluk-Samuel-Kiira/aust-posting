@extends('layouts.app')

@section('title', 'Hire Top Talent with AI-Powered Recruitment')
@section('meta_description', 'Australia\'s leading job posting platform. Post jobs, screen CVs with AI, get professional CV reviews, and connect via WhatsApp. Trusted by leading Australian companies.')

@section('content')

<!--begin::How It Works Section-->
<div class="mb-n10 mb-lg-n20 z-index-2">
	<!--begin::Container-->
	<div class="container">
		
		<!-- ====== HERO SECTION INTEGRATED ====== -->
		<div class="row align-items-center g-0 g-lg-10 py-4 py-lg-15">
			<!--begin::Left Content-->
			<div class="col-lg-6 d-flex flex-column justify-content-center order-1 order-lg-0 px-3 px-lg-0">
				<div class="mb-4 mb-lg-8">
					<!-- Badge - hidden on mobile -->
					<span class="badge d-none d-lg-inline-block fs-7 fw-semibold mb-4 px-4 py-2" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%); color: white; border: none; border-radius: 50px;">
						<i class="ki-duotone ki-abstract-14 fs-6 me-1"></i> AI-Powered Platform
					</span>
					
					<h1 class="display-6 display-lg-5 fw-bold text-gray-900 mb-3 mb-lg-4 lh-sm">
						Find Your Perfect Candidate
						<span class="d-block" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
							Powered by AI Technology
						</span>
					</h1>
					<p class="fs-7 fs-lg-4 text-gray-700 mb-4 mb-lg-6 lh-base lh-lg">
						Streamline your hiring process with intelligent candidate matching, professional CV enhancement, and seamless WhatsApp communication. Join thousands of Australian employers.
					</p>
					<div class="d-flex flex-wrap align-items-center gap-2 gap-lg-3">
						<a href="{{ route('home') }}" class="btn btn-primary btn-sm btn-lg-none px-5 px-lg-6 py-2 py-lg-3">
							<i class="ki-duotone ki-arrow-right fs-2 ms-1"></i> Start Posting Jobs
						</a>
						<a href="{{ route('jobs.index') }}" class="btn btn-outline btn-outline-primary btn-sm btn-lg-none px-5 px-lg-6 py-2 py-lg-3">
							<i class="ki-duotone ki-magnifier fs-2 ms-1"></i> Browse Jobs
						</a>
					</div>
				</div>

				<!--begin::Stats Row - Mobile friendly 2x2 grid with no extra padding-->
				<div class="row g-2 g-lg-4 mt-2 mt-lg-8">
					<div class="col-6 col-lg-3">
						<div class="d-flex flex-column p-2 p-lg-0 bg-light rounded-3 d-lg-block text-center text-lg-start" style="background: rgba(32,170,62,0.06);">
							<span class="text-primary fw-bold fs-2x fs-lg-1 lh-1">50K+</span>
							<span class="text-gray-600 fw-semibold fs-7 fs-lg-6 d-block">Active Candidates</span>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="d-flex flex-column p-2 p-lg-0 bg-light rounded-3 d-lg-block text-center text-lg-start" style="background: rgba(3,165,136,0.06);">
							<span class="text-primary fw-bold fs-2x fs-lg-1 lh-1">15K+</span>
							<span class="text-gray-600 fw-semibold fs-7 fs-lg-6 d-block">Jobs Posted</span>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="d-flex flex-column p-2 p-lg-0 bg-light rounded-3 d-lg-block text-center text-lg-start" style="background: rgba(32,170,62,0.06);">
							<span class="text-primary fw-bold fs-2x fs-lg-1 lh-1">8K+</span>
							<span class="text-gray-600 fw-semibold fs-7 fs-lg-6 d-block">Successful Hires</span>
						</div>
					</div>
					<div class="col-6 col-lg-3">
						<div class="d-flex flex-column p-2 p-lg-0 bg-light rounded-3 d-lg-block text-center text-lg-start" style="background: rgba(3,165,136,0.06);">
							<span class="text-primary fw-bold fs-2x fs-lg-1 lh-1">98%</span>
							<span class="text-gray-600 fw-semibold fs-7 fs-lg-6 d-block">Satisfaction Rate</span>
						</div>
					</div>
				</div>
				<!--end::Stats Row-->
			</div>
			<!--end::Left Content-->

			<!--begin::Right Illustration - HIDDEN ON MOBILE (d-none d-lg-block)-->
			<div class="col-lg-6 d-none d-lg-block order-0 order-lg-1">
				<div class="position-relative text-center text-lg-start">
					<div class="card card-flush shadow-lg border-0" style="border-radius: 24px; overflow: hidden; background: linear-gradient(135deg, rgba(32,170,62,0.08) 0%, rgba(3,165,136,0.08) 100%);">
						<div class="card-body p-8 p-lg-10">
							<div class="text-center">
								<div class="symbol symbol-150px mx-auto mb-5">
									<span class="symbol-label rounded-circle d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%);">
										<i class="ki-duotone ki-element-11 fs-1 text-white">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
										</i>
									</span>
								</div>
								<h5 class="fw-bold mb-2" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
									Intelligent Matching
								</h5>
								<p class="text-gray-600 fs-7 mb-0">Our AI analyzes CVs and matches candidates with precision</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Right Illustration - HIDDEN ON MOBILE-->
		</div>
		<!-- ====== END HERO SECTION ====== -->

		<!--begin::Heading - How It Works-->
		<div class="text-center mb-10 mb-lg-17 mt-6 mt-lg-10 px-3 px-lg-0">
			<h3 class="fs-2hx text-gray-900 mb-3 mb-lg-4" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">How It Works</h3>
			<div class="fs-7 fs-lg-5 text-muted fw-bold">
				For job seekers and employers alike - AI-powered matching, CV review, and creation
				<br class="d-none d-lg-block" />Find the perfect talent or your dream job in minutes
			</div>
		</div>
		<!--end::Heading-->
		
		<!--begin::Row - How It Works Steps-->
		<div class="row g-4 g-lg-8 w-100 gy-8 mb-md-20 px-2 px-lg-0">
			<!--begin::Col - Job Seekers-->
			<div class="col-12 col-md-4">
				<div class="text-center">
					<div class="mb-4 mb-lg-6">
						<img src="assets/media/illustrations/sketchy-1/2.png" class="mh-80px mh-lg-125px" alt="Job Seekers" />
					</div>
					<div class="d-flex align-items-center justify-content-center mb-3 mb-lg-4">
						<span class="badge badge-circle fw-bold p-3 p-lg-4 me-2 me-lg-3 fs-3" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%); color: white; width: 32px; height: 32px; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">1</span>
						<div class="fs-6 fs-lg-3 fw-bold text-gray-900">For Job Seekers</div>
					</div>
					<div class="fw-semibold fs-7 fs-lg-6 text-muted px-2">
						Create your profile, upload your CV
						<br class="d-none d-lg-block" />and let our AI match you with
						<br class="d-none d-lg-block" />the perfect job opportunities
					</div>
				</div>
			</div>
			
			<!--begin::Col - AI Matching-->
			<div class="col-12 col-md-4">
				<div class="text-center">
					<div class="mb-4 mb-lg-6">
						<img src="assets/media/illustrations/sketchy-1/8.png" class="mh-80px mh-lg-125px" alt="AI Matching" />
					</div>
					<div class="d-flex align-items-center justify-content-center mb-3 mb-lg-4">
						<span class="badge badge-circle fw-bold p-3 p-lg-4 me-2 me-lg-3 fs-3" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%); color: white; width: 32px; height: 32px; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">2</span>
						<div class="fs-6 fs-lg-3 fw-bold text-gray-900">AI-Powered Matching</div>
					</div>
					<div class="fw-semibold fs-7 fs-lg-6 text-muted px-2">
						Advanced algorithms analyze
						<br class="d-none d-lg-block" />skills, experience, and cultural fit
						<br class="d-none d-lg-block" />for the perfect match
					</div>
				</div>
			</div>
			
			<!--begin::Col - Employers-->
			<div class="col-12 col-md-4">
				<div class="text-center">
					<div class="mb-4 mb-lg-6">
						<img src="assets/media/illustrations/sketchy-1/12.png" class="mh-80px mh-lg-125px" alt="Employers" />
					</div>
					<div class="d-flex align-items-center justify-content-center mb-3 mb-lg-4">
						<span class="badge badge-circle fw-bold p-3 p-lg-4 me-2 me-lg-3 fs-3" style="background: linear-gradient(135deg, #20AA3E 0%, #03A588 100%); color: white; width: 32px; height: 32px; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; border-radius: 50%;">3</span>
						<div class="fs-6 fs-lg-3 fw-bold text-gray-900">For Employers</div>
					</div>
					<div class="fw-semibold fs-7 fs-lg-6 text-muted px-2">
						Post jobs, screen candidates
						<br class="d-none d-lg-block" />with AI, and connect instantly
						<br class="d-none d-lg-block" />via WhatsApp integration
					</div>
				</div>
			</div>
		</div>
		<!--end::Row-->
		<div class="separator separator-content my-10 my-lg-15">
			<span class="w-50px w-lg-100px"></span>
		</div>
		
		<!--begin::Highlight / CTA Section - Full Width Gradient-->
		<div class="card-rounded shadow mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%); overflow: hidden;">
			<div class="p-6 p-lg-12">
				<div class="row align-items-center g-6 g-lg-10">
					<div class="col-lg-8">
						<h3 class="text-white fw-bold fs-2 fs-lg-1 mb-3">Ready to transform your hiring?</h3>
						<p class="text-white opacity-75 fs-6 fs-lg-5 mb-0">Join thousands of Australian employers finding better talent faster with AI-powered recruitment technology.</p>
					</div>
					<div class="col-lg-4 d-flex justify-content-lg-end mt-4 mt-lg-0">
						<a href="{{ route('home') }}" class="btn btn-light btn-lg w-100 w-lg-auto">
							<i class="ki-duotone ki-arrow-right fs-2 ms-2"></i> Start Free Trial
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--end::Highlight / CTA Section-->
	</div>
	<!--end::Container-->
</div>
<!--end::How It Works Section-->

<!-- <div class="separator separator-content my-10 my-lg-15">
	<span class="w-50px w-lg-100px"></span>
</div> -->



@endsection

