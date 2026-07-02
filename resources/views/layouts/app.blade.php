<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head>
		<title>{{ config('app.name', 'JobMatch') }} - @yield('title', 'Find Your Best Talent')</title>
		<meta charset="utf-8" />
		<meta name="description" content="@yield('meta_description', 'Australia\'s leading job posting platform with AI-powered CV screening, professional rewriting services, and WhatsApp integration for seamless hiring.')" />
		<meta name="keywords" content="jobs australia, recruitment, AI hiring, CV review, job posting, talent matching" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_AU" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="{{ config('app.name', 'JobMatch') }}" />
		<meta property="og:site_name" content="{{ config('app.name', 'JobMatch') }}" />
		<link rel="canonical" href="{{ url('/') }}" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.png') }}" />

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

        <!-- Add these for better job cards styling -->
        <style>
            .job-card {
                transition: all 0.3s ease;
                border: 1px solid rgba(0,0,0,0.08);
            }
            .job-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 40px rgba(0,0,0,0.08);
                border-color: transparent;
            }
            .job-featured {
                border-left: 4px solid #20AA3E;
                background: linear-gradient(to right, rgba(32,170,62,0.03), transparent);
            }
            .job-company-logo {
                width: 60px;
                height: 60px;
                object-fit: cover;
                border-radius: 12px;
                border: 1px solid rgba(0,0,0,0.06);
            }
            .job-tag {
                background: rgba(32,170,62,0.08);
                color: #20AA3E;
                padding: 4px 12px;
                border-radius: 20px;
                font-size: 12px;
                font-weight: 600;
            }
            .job-salary {
                color: #03A588;
                font-weight: 700;
            }
            .job-meta-icon {
                color: #7E8299;
                margin-right: 6px;
            }
            .similar-job-item {
                padding: 12px 16px;
                border-radius: 8px;
                transition: all 0.2s;
                border: 1px solid rgba(0,0,0,0.06);
            }
            .similar-job-item:hover {
                background: #F5F8FA;
                border-color: #20AA3E;
            }
            
            .job-grid .card {
                transition: all 0.3s ease;
            }
            .job-grid .card:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            }
            
            .featured-badge {
                background: linear-gradient(90deg, #20AA3E, #03A588);
                color: white;
                padding: 2px 14px;
                border-radius: 20px;
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 0.5px;
            }
            
            .job-card-company {
                display: flex;
                align-items: center;
                gap: 12px;
            }
            
            .job-card-company .company-avatar {
                width: 48px;
                height: 48px;
                border-radius: 10px;
                background: #F1FAF8;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 700;
                font-size: 18px;
                color: #20AA3E;
            }
        </style>

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