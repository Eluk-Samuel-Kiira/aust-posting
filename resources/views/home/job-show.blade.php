@extends('layouts.app')

@section('title', 'Senior Full Stack Developer - JobMatch Australia')
@section('meta_description', 'Apply for Senior Full Stack Developer position at Google Australia. $140k - $180k + Super. Full Time.')

@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Job Details</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted"><a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a></li>
                <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                <li class="breadcrumb-item text-muted"><a href="{{ route('jobs.index') }}" class="text-muted text-hover-primary">Jobs</a></li>
                <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                <li class="breadcrumb-item text-muted">Senior Full Stack Developer</li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{ route('jobs.index') }}" class="btn btn-sm btn-light">
                <i class="ki-duotone ki-arrow-left fs-2 me-1"></i> Back
            </a>
        </div>
    </div>
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        
        <div class="row g-5">
            <!--begin::Main Content-->
            <div class="col-lg-8">
                <!--begin::Job Details Card-->
                <div class="card mb-5">
                    <div class="card-body p-8">
                        <!-- Company & Header -->
                        <div class="d-flex align-items-start mb-6">
                            <div class="symbol symbol-80px me-5">
                                <span class="symbol-label bg-light-success">
                                    <img src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="w-50px" alt="Company">
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <h1 class="text-gray-900 fw-bold fs-2 mb-1">Senior Full Stack Developer</h1>
                                    <span class="featured-badge">Featured</span>
                                </div>
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <span class="text-gray-600 fs-5 fw-semibold">Google Australia</span>
                                    <span class="bullet bg-gray-300 w-5px h-5px"></span>
                                    <span class="text-gray-500"><i class="ki-duotone ki-location fs-6 me-1"></i> Sydney, NSW</span>
                                    <span class="bullet bg-gray-300 w-5px h-5px"></span>
                                    <span class="text-gray-500"><i class="ki-duotone ki-calendar-8 fs-6 me-1"></i> Posted 2 days ago</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Job Stats -->
                        <div class="row g-3 mb-6">
                            <div class="col-md-3">
                                <div class="p-3 rounded bg-light-primary">
                                    <span class="text-muted fs-7 d-block">Job Type</span>
                                    <span class="fw-bold fs-6 text-gray-800">Full Time</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 rounded bg-light-success">
                                    <span class="text-muted fs-7 d-block">Salary Range</span>
                                    <span class="fw-bold fs-6 text-gray-800">$140k - $180k</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 rounded bg-light-info">
                                    <span class="text-muted fs-7 d-block">Work Mode</span>
                                    <span class="fw-bold fs-6 text-gray-800">On-site</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="p-3 rounded bg-light-warning">
                                    <span class="text-muted fs-7 d-block">Experience</span>
                                    <span class="fw-bold fs-6 text-gray-800">5+ Years</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Job Description -->
                        <div class="mb-6">
                            <h4 class="text-gray-900 fw-bold fs-4 mb-3">About the Role</h4>
                            <p class="text-gray-600 fs-6 mb-3">We are looking for an experienced Full Stack Developer to join our Sydney team. You will be responsible for building and maintaining our next-generation products using cutting-edge technologies.</p>
                            <p class="text-gray-600 fs-6">This is an exciting opportunity to work on products used by millions of users worldwide, collaborating with a talented team of engineers and product managers.</p>
                        </div>
                        
                        <!-- Key Responsibilities -->
                        <div class="mb-6">
                            <h4 class="text-gray-900 fw-bold fs-4 mb-3">Key Responsibilities</h4>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-2">
                                    <i class="ki-duotone ki-check-circle text-success fs-4 me-3 mt-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="text-gray-600">Design and implement scalable web applications using React, Node.js, and cloud services</span>
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="ki-duotone ki-check-circle text-success fs-4 me-3 mt-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="text-gray-600">Lead technical architecture decisions and mentor junior developers</span>
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="ki-duotone ki-check-circle text-success fs-4 me-3 mt-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="text-gray-600">Collaborate with cross-functional teams on product development</span>
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="ki-duotone ki-check-circle text-success fs-4 me-3 mt-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="text-gray-600">Ensure code quality through testing and code reviews</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="ki-duotone ki-check-circle text-success fs-4 me-3 mt-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <span class="text-gray-600">Drive innovation and continuous improvement in development practices</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Requirements -->
                        <div class="mb-6">
                            <h4 class="text-gray-900 fw-bold fs-4 mb-3">Requirements</h4>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge badge-light-primary fs-6 py-2 px-4">React</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">Node.js</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">TypeScript</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">AWS</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">Docker</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">MongoDB</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">Git</span>
                                <span class="badge badge-light-primary fs-6 py-2 px-4">CI/CD</span>
                            </div>
                        </div>
                        
                        <!-- Benefits -->
                        <div class="mb-6">
                            <h4 class="text-gray-900 fw-bold fs-4 mb-3">What We Offer</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-3">
                                            <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-abstract-14 fs-3 text-success"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-gray-800 d-block">Competitive Salary</span>
                                            <span class="text-muted fs-7">$140k - $180k + Super</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-3">
                                            <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-clock fs-3 text-primary"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-gray-800 d-block">Flexible Hours</span>
                                            <span class="text-muted fs-7">Work-life balance</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-3">
                                            <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-abstract-20 fs-3 text-info"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-gray-800 d-block">Growth Opportunities</span>
                                            <span class="text-muted fs-7">Learning & development</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-35px me-3">
                                            <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-heart fs-3 text-warning"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <span class="fw-bold text-gray-800 d-block">Health Benefits</span>
                                            <span class="text-muted fs-7">Medical & dental</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Apply Section -->
                        <div class="p-5 rounded bg-light-primary">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-1">Ready to apply for this position?</h5>
                                    <span class="text-muted fs-7">Join Google Australia and be part of something amazing</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-light">
                                        <i class="ki-duotone ki-heart fs-4 me-1"></i> Save
                                    </button>
                                    <a href="#" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Job Details Card-->
            </div>
            <!--end::Main Content-->
            
            <!--begin::Sidebar-->
            <div class="col-lg-4">
                <!-- Company Info -->
                <div class="card mb-5">
                    <div class="card-body p-6">
                        <div class="text-center mb-4">
                            <div class="symbol symbol-100px mb-3 mx-auto">
                                <span class="symbol-label bg-light-success">
                                    <img src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="w-60px" alt="Company">
                                </span>
                            </div>
                            <h5 class="fw-bold text-gray-900 mb-1">Google Australia</h5>
                            <span class="text-muted fs-7">Technology • 10,000+ employees</span>
                        </div>
                        
                        <div class="border-top pt-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-location fs-5 text-gray-500 me-3"></i>
                                <span class="text-gray-600">Sydney, NSW 2000</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-globe fs-5 text-gray-500 me-3"></i>
                                <a href="#" class="text-hover-primary">www.google.com.au</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="ki-duotone ki-call fs-5 text-gray-500 me-3"></i>
                                <span class="text-gray-600">+61 2 9000 0000</span>
                            </div>
                        </div>
                        
                        <div class="border-top pt-4 mt-4">
                            <h6 class="fw-bold text-gray-700 mb-2">About Company</h6>
                            <p class="text-gray-600 fs-7">Google is a global technology leader focused on improving the ways people connect with information. We create products that make the world a better place.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Similar Jobs -->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <h5 class="card-title fw-bold text-gray-900">Similar Jobs</h5>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <!-- Similar Job 1 -->
                        <div class="similar-job-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="symbol symbol-40px me-3">
                                    <span class="symbol-label bg-light-primary">A</span>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold fs-6 text-hover-primary">Frontend Developer</a>
                                    <div class="text-muted fs-7">Atlassian • Sydney</div>
                                    <div class="d-flex align-items-center gap-2 mt-1">
                                        <span class="badge badge-light-success fs-8">$120k - $150k</span>
                                        <span class="badge badge-light-primary fs-8">Full Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Similar Job 2 -->
                        <div class="similar-job-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="symbol symbol-40px me-3">
                                    <span class="symbol-label bg-light-success">C</span>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold fs-6 text-hover-primary">Backend Engineer</a>
                                    <div class="text-muted fs-7">Canva • Melbourne</div>
                                    <div class="d-flex align-items-center gap-2 mt-1">
                                        <span class="badge badge-light-success fs-8">$140k - $170k</span>
                                        <span class="badge badge-light-primary fs-8">Full Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Similar Job 3 -->
                        <div class="similar-job-item mb-3">
                            <div class="d-flex align-items-start">
                                <div class="symbol symbol-40px me-3">
                                    <span class="symbol-label bg-light-info">A</span>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold fs-6 text-hover-primary">Solutions Architect</a>
                                    <div class="text-muted fs-7">AWS • Melbourne</div>
                                    <div class="d-flex align-items-center gap-2 mt-1">
                                        <span class="badge badge-light-success fs-8">$150k - $200k</span>
                                        <span class="badge badge-light-primary fs-8">Full Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Similar Job 4 -->
                        <div class="similar-job-item">
                            <div class="d-flex align-items-start">
                                <div class="symbol symbol-40px me-3">
                                    <span class="symbol-label bg-light-warning">W</span>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#" class="text-gray-900 fw-bold fs-6 text-hover-primary">DevOps Lead</a>
                                    <div class="text-muted fs-7">Woolworths • Brisbane</div>
                                    <div class="d-flex align-items-center gap-2 mt-1">
                                        <span class="badge badge-light-success fs-8">$130k - $165k</span>
                                        <span class="badge badge-light-primary fs-8">Full Time</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Sidebar-->
        </div>
        
    </div>
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script>
    // Apply button handler
    document.querySelector('[data-kt-action="apply"]')?.addEventListener('click', function(e) {
        e.preventDefault();
        // Show toast notification
        Swal.fire({
            title: 'Application Submitted!',
            text: 'Your application has been sent successfully.',
            icon: 'success',
            confirmButtonColor: '#20AA3E',
            confirmButtonText: 'Great!'
        });
    });
    
    // Save job handler
    document.querySelector('[data-kt-action="save"]')?.addEventListener('click', function(e) {
        e.preventDefault();
        this.classList.toggle('active');
        const icon = this.querySelector('i');
        icon.classList.toggle('text-danger');
        icon.classList.toggle('ki-heart');
        icon.classList.toggle('ki-heart-filled');
        
        Swal.fire({
            title: this.classList.contains('active') ? 'Job Saved!' : 'Job Unsaved',
            text: this.classList.contains('active') ? 'This job has been added to your saved list.' : 'This job has been removed from your saved list.',
            icon: 'success',
            timer: 1500,
            showConfirmButton: false
        });
    });
</script>
@endpush