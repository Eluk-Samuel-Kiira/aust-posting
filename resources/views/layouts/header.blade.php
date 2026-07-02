<!--begin::Header Section-->
<div class="mb-0" id="home">
	<!--begin::Wrapper-->
	<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('assets/media/svg/illustrations/landing.svg') }})">
		<!--begin::Header-->
		<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
			<!--begin::Container-->
			<div class="container">
				<!--begin::Wrapper-->
				<div class="d-flex align-items-center justify-content-between py-2 py-lg-0">
					
					<!--begin::Left side - Logo (visible on all screens)-->
					<div class="d-flex align-items-center">
						<a href="{{ route('home') }}" class="d-flex align-items-center">
							<img alt="Logo" src="{{ asset('assets/media/logos/australia.png') }}" class="logo-default h-35px h-lg-50px" />
							<img alt="Logo" src="{{ asset('assets/media/logos/australia.png') }}" class="logo-sticky h-40px h-lg-35px" />
						</a>
					</div>
					<!--end::Left side-->

					<!--begin::Menu wrapper (desktop only - center)-->
					<div class="d-none d-lg-block" id="kt_header_nav_wrapper">
						<div class="d-lg-block" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="280px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
							<!--begin::Menu-->
							<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
								<!--begin::Menu item-->
								<div class="menu-item">
									<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
								</div>
								<!--end::Menu item-->

								<!--begin::Menu item-->
								<div class="menu-item">
									<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="{{ route('jobs.index') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Jobs</a>
								</div>
								<!--end::Menu item-->

								<!--begin::Menu item-->
								<div class="menu-item">
									<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#features" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Features</a>
								</div>
								<!--end::Menu item-->

								<!--begin::Menu item-->
								<div class="menu-item">
									<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#benefits" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Why Us</a>
								</div>
								<!--end::Menu item-->

								<!--begin::Menu item-->
								<div class="menu-item">
									<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
								</div>
								<!--end::Menu item-->

								<!--begin::Menu item-->
								<div class="menu-item">
									<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
								</div>
								<!--end::Menu item-->

								<!--begin::Menu item - Mobile Sign In (visible only on mobile)-->
								<div class="menu-item d-lg-none mt-5 pt-5 border-top">
									<a href="{{ route('home') }}" class="menu-link py-3 px-4">
										<span class="btn btn-success w-100">Sign In</span>
									</a>
								</div>
								<!--end::Menu item - Mobile Sign In-->
							</div>
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Menu wrapper-->

					<!--begin::Right side - Mobile menu toggle + Desktop Sign In-->
					<div class="d-flex align-items-center gap-2 gap-lg-0">
						<!-- Desktop Sign In -->
						<a href="{{ route('home') }}" class="btn btn-success d-none d-lg-inline-block">Sign In</a>
						
						<!-- Mobile menu toggle - visible only on mobile -->
						<button class="btn btn-icon btn-active-color-primary d-flex d-lg-none p-0" id="kt_landing_menu_toggle" style="margin-right: -12px; margin-top: 2px;">
							<i class="ki-duotone ki-abstract-14 fs-2hx">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</button>
					</div>
					<!--end::Right side-->
					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Container-->
		</div>

		@if(Route::currentRouteName() === 'home')
		<!--begin::Landing hero-->
		<div class="d-flex flex-column flex-center w-100 min-h-250px min-h-lg-500px px-9">
			<!--begin::Heading-->
			<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
				<!--begin::Title-->
				<h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
					Connect with Australia's Top Talent
					<br />
					<span style="background: linear-gradient(to right, #20AA3E 0%, #03A588 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
						<span id="kt_landing_hero_text">Powered by AI</span>
					</span>
				</h1>
				<!--end::Title-->

				<!--begin::Action-->
				<a href="{{ route('home') }}" class="btn btn-primary">Post Your First Job</a>
				<!--end::Action-->
			</div>
			<!--end::Heading-->

			<!--begin::Clients - Reduced height-->
			<div class="d-flex flex-center flex-wrap position-relative px-5 py-2">
				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Major Australian Companies">
					<img src="{{ asset('assets/media/svg/brand-logos/fujifilm.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Enterprise Solutions">
					<img src="{{ asset('assets/media/svg/brand-logos/vodafone.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Industry Leaders">
					<img src="{{ asset('assets/media/svg/brand-logos/kpmg.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Trusted Partners">
					<img src="{{ asset('assets/media/svg/brand-logos/nasa.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Technology Innovators">
					<img src="{{ asset('assets/media/svg/brand-logos/aspnetzero.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Global Reach">
					<img src="{{ asset('assets/media/svg/brand-logos/aon.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Enterprise Partners">
					<img src="{{ asset('assets/media/svg/brand-logos/hp-3.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->

				<!--begin::Client-->
				<div class="d-flex flex-center m-2 m-md-3" data-bs-toggle="tooltip" title="Trusted Organizations">
					<img src="{{ asset('assets/media/svg/brand-logos/truman.svg') }}" class="mh-20px mh-lg-30px" alt="Partner Company" />
				</div>
				<!--end::Client-->
			</div>
			<!--end::Clients-->
		</div>
		<!--end::Landing hero-->
		@endif
		
	</div>
	<!--end::Wrapper-->

	<!--begin::Curve bottom-->
	<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
		<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
		</svg>
	</div>
	<!--end::Curve bottom-->
</div>
<!--end::Header Section-->

<style>
/* Mobile menu icon adjustment - better margins */
@media (max-width: 991.98px) {
	#kt_landing_menu_toggle {
		margin-right: -5px !important;
		margin-top: 5px !important;
		padding: 0 !important;
	}
	
	#kt_landing_menu_toggle i {
		font-size: 1.75rem !important;
	}
	
	/* Logo padding adjustment on mobile - remove extra spacing */
	.d-flex.align-items-center .logo-default,
	.d-flex.align-items-center .logo-sticky {
		padding: -5px !important;
		margin: 0 !important;
	}
	
	/* Remove padding from logo link container */
	.d-flex.align-items-center > a {
		padding: 0 !important;
		margin: 0 !important;
	}
	
	/* Adjust the wrapper to respect margins */
	.d-flex.align-items-center.justify-content-between {
		padding-left: 0 !important;
		padding-right: 0 !important;
	}
}
</style>