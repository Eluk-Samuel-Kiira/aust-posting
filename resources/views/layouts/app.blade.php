<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head>
		<!-- Country Meta -->
		<meta name="country-code" content="{{ country_code() }}" />
		<meta name="country-name" content="{{ country_name() }}" />
		
		<title>{{ config('app.name', 'JobMatch') }} - @yield('title', country_name() . ' - Find Your Best Talent')</title>
		<meta charset="utf-8" />

		<meta name="description" content="@yield('meta_description', country_name() . '\'s leading job posting platform with AI-powered CV screening, professional rewriting services, and WhatsApp integration for seamless hiring in ' . country_name() . '.')" />
		<meta name="keywords" content="@yield('keywords', 'jobs ' . strtolower(country_name()) . ', recruitment, AI hiring, CV review, job posting, talent matching, ' . strtolower(country_name()) . ' jobs, career opportunities')" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<!-- Open Graph -->
		<meta property="og:locale" content="en_{{ country_code() }}" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="{{ config('app.name', 'JobMatch') }} - {{ country_name() }}" />
		<meta property="og:site_name" content="{{ config('app.name', 'JobMatch') }} - {{ country_name() }}" />
		<meta property="og:description" content="@yield('og_description', 'Find the best jobs and talent in ' . country_name() . '. Post jobs, hire candidates, and grow your career with AI-powered matching.')" />
		<meta property="og:url" content="{{ url('/') }}" />
		<meta property="og:image" content="{{ country_logo() }}" />
		
		<!-- Twitter Cards -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="{{ config('app.name', 'JobMatch') }} - {{ country_name() }}" />
		<meta name="twitter:description" content="@yield('twitter_description', 'Find jobs and talent in ' . country_name() . '. Post jobs, hire candidates, and grow your career with AI-powered matching.')" />
		<meta name="twitter:image" content="{{ country_logo() }}" />
		
		<!-- Canonical -->
		<link rel="canonical" href="@yield('canonical_url', url('/'))" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ country_favicon() }}" />
		<link rel="apple-touch-icon" href="{{ country_favicon() }}" />

		<!-- Hreflang Tags -->
		@if(count(all_countries()) > 0)
			@foreach(all_countries() as $country)
				@if(isset($country['code']) && isset($country['domain']))
					<link rel="alternate" hreflang="en-{{ strtoupper($country['code']) }}" 
						  href="{{ str_replace(config('app.country_domain'), $country['domain'], url('/')) }}" />
				@endif
			@endforeach
			<link rel="alternate" hreflang="x-default" href="{{ url('/') }}" />
		@endif

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

		@stack('styles')

        <!-- DataTables CSS -->
        <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/select2/select2.bundle.css') }}" rel="stylesheet" />

		<script>
			// Frame-busting to prevent site from being loaded within a frame without permission
			if (window.top != window.self) { 
				window.top.location.replace(window.self.location.href); 
			}
		</script>
	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>
			var defaultThemeMode = "light";
			var themeMode;
			if (document.documentElement) {
				if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
					themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
				} else {
					if (localStorage.getItem("data-bs-theme") !== null) {
						themeMode = localStorage.getItem("data-bs-theme");
					} else {
						themeMode = defaultThemeMode;
					}
				}
				if (themeMode === "system") {
					themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
				}
				document.documentElement.setAttribute("data-bs-theme", themeMode);
			}
		</script>
		<!--end::Theme mode setup on page load-->

		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Header-->
			@include('layouts.header')
			<!--end::Header-->


			<!--begin::Main Content-->
			@yield('content')
			<!--end::Main Content-->

			<!--begin::Footer-->
			@include('layouts.footer')
			<!--end::Footer-->

			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<i class="ki-duotone ki-arrow-up">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->

		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('assets/js/custom/landing.js') }}"></script>
		<script src="{{ asset('assets/js/custom/pages/pricing/general.js') }}"></script>
		<!--end::Custom Javascript-->

		<!-- Select2 JS -->
		<script src="{{ asset('assets/plugins/custom/select2/select2.bundle.js') }}"></script>

		<!-- SweetAlert2 (for better alerts) -->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		@stack('scripts')
	</body>
	<!--end::Body-->
</html>