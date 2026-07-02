<!--begin::Footer Section-->
<div class="mb-0">
	<!--begin::Curve top-->
	<div class="landing-curve landing-dark-color">
		<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
		</svg>
	</div>
	<!--end::Curve top-->

	<!--begin::Wrapper-->
	<div class="landing-dark-bg pt-20">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Row-->
			<div class="row py-10 py-lg-20">
				<!--begin::Col-->
				<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
					<!--begin::Block-->
					<div class="rounded landing-dark-border p-9 mb-10">
						<!--begin::Title-->
						<h2 class="text-white">Need a Custom Plan?</h2>
						<!--end::Title-->
						<!--begin::Text-->
						<span class="fw-normal fs-4 text-gray-700">
							Email us at 
							<a href="mailto:support@jobmatch.com.au" class="text-white opacity-50 text-hover-primary">support@jobmatch.com.au</a>
							or call <span class="text-white opacity-75">1300 JOB AU</span>
						</span>
						<!--end::Text-->
					</div>
					<!--end::Block-->

					<!--begin::Block-->
					<div class="rounded landing-dark-border p-9">
						<!--begin::Title-->
						<h2 class="text-white">WhatsApp Support</h2>
						<!--end::Title-->
						<!--begin::Text-->
						<span class="fw-normal fs-4 text-gray-700">
							Chat with our team directly. 
							<a href="https://wa.me/61412345678" target="_blank" class="text-white opacity-50 text-hover-primary">Open WhatsApp</a>
						</span>
						<!--end::Text-->
					</div>
					<!--end::Block-->
				</div>
				<!--end::Col-->

				<!--begin::Col-->
				<div class="col-lg-6 ps-lg-16">
					<!--begin::Navs-->
					<div class="d-flex justify-content-center">
						<!--begin::Links-->
						<div class="d-flex fw-semibold flex-column me-20">
							<!--begin::Subtitle-->
							<h4 class="fw-bold text-gray-500 mb-6">Product</h4>
							<!--end::Subtitle-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Features</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Pricing</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Services</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentation</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Blog</a>
							<!--end::Link-->
						</div>
						<!--end::Links-->

						<!--begin::Links-->
						<div class="d-flex fw-semibold flex-column ms-lg-20">
							<!--begin::Subtitle-->
							<h4 class="fw-bold text-gray-500 mb-6">Company</h4>
							<!--end::Subtitle-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">About</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Careers</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Contact</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Privacy Policy</a>
							<!--end::Link-->

							<!--begin::Link-->
							<a href="{{ route('home') }}" class="text-white opacity-50 text-hover-primary fs-5">Terms & Conditions</a>
							<!--end::Link-->
						</div>
						<!--end::Links-->
					</div>
					<!--end::Navs-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->

		<!--begin::Separator-->
		<div class="landing-dark-separator"></div>
		<!--end::Separator-->

		<!--begin::Container-->
		<div class="container">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
				<!--begin::Copyright-->
				<div class="d-flex align-items-center order-2 order-md-1">
					<!--begin::Logo-->
					<a href="{{ route('home') }}">
						<img alt="Logo" src="{{ asset('assets/media/logos/australia.png') }}" class="h-15px h-md-20px" />
					</a>
					<!--end::Logo-->

					<!--begin::Copyright text-->
					<span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1">&copy; {{ date('Y') }} {{ config('app.name', 'JobMatch') }}. All rights reserved.</span>
					<!--end::Copyright text-->
				</div>
				<!--end::Copyright-->

				<!--begin::Menu-->
				<ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
					<li class="menu-item">
						<a href="{{ route('home') }}" class="menu-link px-2">Home</a>
					</li>
					<li class="menu-item mx-5">
						<a href="{{ route('home') }}" target="_blank" class="menu-link px-2">Support</a>
					</li>
					<li class="menu-item">
						<a href="{{ route('home') }}" class="menu-link px-2">Get Started</a>
					</li>
				</ul>
				<!--end::Menu-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Footer Section-->