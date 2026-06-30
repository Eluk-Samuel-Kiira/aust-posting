@extends('layouts.app')

@section('title', 'Find Your Dream Job - JobMatch Australia')
@section('meta_description', 'Browse thousands of jobs in Australia. Find your perfect career opportunity with AI-powered job matching.')

@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Job Listings</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted"><a href="{{ route('home') }}" class="text-muted text-hover-primary">Home</a></li>
                <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                <li class="breadcrumb-item text-muted">Jobs</li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{ route('home') }}" class="btn btn-sm fw-bold btn-primary">
                <i class="ki-duotone ki-plus fs-2 me-1"></i> Post a Job
            </a>
        </div>
    </div>
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">
        
        <!--begin::Search and Filter Section-->
        <div class="card mb-8">
            <div class="card-body p-6">
                <form action="{{ route('home') }}" method="GET" class="row g-4">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center position-relative">
                            <i class="ki-duotone ki-magnifier fs-2 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" name="search" class="form-control form-control-solid ps-12" placeholder="Search jobs, keywords..." value="{{ request('search') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select name="category" class="form-select form-select-solid" data-control="select2" data-placeholder="Category">
                            <option value="">All Categories</option>
                            <option value="it">IT & Software</option>
                            <option value="finance">Finance & Banking</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="education">Education</option>
                            <option value="retail">Retail & Sales</option>
                            <option value="engineering">Engineering</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="location" class="form-select form-select-solid" data-control="select2" data-placeholder="Location">
                            <option value="">All Locations</option>
                            <option value="sydney">Sydney</option>
                            <option value="melbourne">Melbourne</option>
                            <option value="brisbane">Brisbane</option>
                            <option value="perth">Perth</option>
                            <option value="adelaide">Adelaide</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Search Jobs</button>
                    </div>
                </form>
            </div>
        </div>
        <!--end::Search and Filter Section-->

        <!--begin::Featured Jobs Section-->
        <div class="mb-10">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <div>
                    <h3 class="fs-2 fw-bold text-gray-900 mb-1">🌟 Featured Jobs</h3>
                    <span class="text-muted fs-6">Handpicked opportunities for you</span>
                </div>
                <a href="#" class="btn btn-sm btn-light-primary">View All</a>
            </div>
            
            <div class="row g-5">
                <!-- Featured Job 1 -->
                <div class="col-lg-6">
                    <div class="card job-card job-featured hover-elevate-up">
                        <div class="card-body p-6">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-60px me-4">
                                        <span class="symbol-label bg-light-success">
                                            <img src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="w-40px" alt="Company">
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#" class="text-gray-900 fw-bold fs-4 text-hover-primary">Senior Full Stack Developer</a>
                                        <div class="text-muted fs-6">Google Australia • Sydney</div>
                                    </div>
                                </div>
                                <span class="featured-badge">Featured</span>
                            </div>
                            
                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <span class="job-tag"><i class="ki-duotone ki-briefcase fs-6 me-1"></i> Full Time</span>
                                <span class="job-tag"><i class="ki-duotone ki-location fs-6 me-1"></i> On-site</span>
                                <span class="job-tag"><i class="ki-duotone ki-calendar-8 fs-6 me-1"></i> Posted 2 days ago</span>
                            </div>
                            
                            <p class="text-gray-600 fs-6 mb-4">Lead development of next-gen products using React, Node.js, and cloud technologies. Join a team of 50+ engineers.</p>
                            
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div>
                                    <span class="job-salary fs-5">$140k - $180k</span>
                                    <span class="text-muted fs-7 ms-2">+ Super</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-light-primary">
                                        <i class="ki-duotone ki-heart fs-5"></i>
                                    </button>
                                    <a href="{{ route('home') }}" class="btn btn-sm btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Job 2 -->
                <div class="col-lg-6">
                    <div class="card job-card job-featured hover-elevate-up">
                        <div class="card-body p-6">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-60px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <img src="{{ asset('assets/media/svg/brand-logos/amazon.svg') }}" class="w-40px" alt="Company">
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#" class="text-gray-900 fw-bold fs-4 text-hover-primary">Data Scientist - AI/ML</a>
                                        <div class="text-muted fs-6">Amazon Web Services • Melbourne</div>
                                    </div>
                                </div>
                                <span class="featured-badge">Featured</span>
                            </div>
                            
                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <span class="job-tag"><i class="ki-duotone ki-briefcase fs-6 me-1"></i> Remote</span>
                                <span class="job-tag"><i class="ki-duotone ki-location fs-6 me-1"></i> Hybrid</span>
                                <span class="job-tag"><i class="ki-duotone ki-calendar-8 fs-6 me-1"></i> Posted 5 days ago</span>
                            </div>
                            
                            <p class="text-gray-600 fs-6 mb-4">Drive innovation using machine learning models on massive datasets. Experience with Python, TensorFlow required.</p>
                            
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <div>
                                    <span class="job-salary fs-5">$160k - $220k</span>
                                    <span class="text-muted fs-7 ms-2">+ Equity</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-light-primary">
                                        <i class="ki-duotone ki-heart fs-5"></i>
                                    </button>
                                    <a href="{{ route('home') }}" class="btn btn-sm btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Featured Jobs Section-->

        <!--begin::Latest Jobs Section-->
        <div class="mb-10">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <div>
                    <h3 class="fs-2 fw-bold text-gray-900 mb-1">📋 Latest Jobs</h3>
                    <span class="text-muted fs-6">Newest opportunities from top companies</span>
                </div>
                <select class="form-select form-select-sm w-150px" data-control="select2" data-placeholder="Sort by">
                    <option value="latest">Latest First</option>
                    <option value="salary_high">Highest Salary</option>
                    <option value="salary_low">Lowest Salary</option>
                    <option value="popular">Most Popular</option>
                </select>
            </div>
            
            <div class="row g-5 job-grid">
                <!-- Job 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="job-card-company mb-3">
                                <div class="company-avatar">A</div>
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-0 fs-6">Product Manager</h5>
                                    <span class="text-muted fs-7">Atlassian • Sydney</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge badge-light-primary">Full Time</span>
                                <span class="badge badge-light-info">Hybrid</span>
                                <span class="badge badge-light-success">$130k - $160k</span>
                            </div>
                            <p class="text-gray-600 fs-7 mb-3">Lead product strategy for enterprise collaboration tools. Work with cross-functional teams.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <span class="text-muted fs-7"><i class="ki-duotone ki-clock fs-6 me-1"></i> 3 days ago</span>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Job 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="job-card-company mb-3">
                                <div class="company-avatar" style="background: #FFF4E6; color: #F57C00;">C</div>
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-0 fs-6">UX/UI Designer</h5>
                                    <span class="text-muted fs-7">Canva • Melbourne</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge badge-light-primary">Contract</span>
                                <span class="badge badge-light-info">Remote</span>
                                <span class="badge badge-light-success">$100k - $130k</span>
                            </div>
                            <p class="text-gray-600 fs-7 mb-3">Design beautiful user experiences for millions of users. Figma, Adobe Creative Suite required.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <span class="text-muted fs-7"><i class="ki-duotone ki-clock fs-6 me-1"></i> 5 days ago</span>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Job 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="job-card-company mb-3">
                                <div class="company-avatar" style="background: #E8F5E9; color: #2E7D32;">W</div>
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-0 fs-6">DevOps Engineer</h5>
                                    <span class="text-muted fs-7">Woolworths • Brisbane</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge badge-light-primary">Full Time</span>
                                <span class="badge badge-light-info">On-site</span>
                                <span class="badge badge-light-success">$120k - $155k</span>
                            </div>
                            <p class="text-gray-600 fs-7 mb-3">Manage cloud infrastructure and CI/CD pipelines. Experience with AWS, Docker, Kubernetes.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <span class="text-muted fs-7"><i class="ki-duotone ki-clock fs-6 me-1"></i> 1 week ago</span>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Job 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="job-card-company mb-3">
                                <div class="company-avatar" style="background: #FCE4EC; color: #C62828;">M</div>
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-0 fs-6">Marketing Manager</h5>
                                    <span class="text-muted fs-7">Macquarie Bank • Sydney</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge badge-light-primary">Full Time</span>
                                <span class="badge badge-light-info">Hybrid</span>
                                <span class="badge badge-light-success">$110k - $140k</span>
                            </div>
                            <p class="text-gray-600 fs-7 mb-3">Lead marketing campaigns for financial products. Experience in fintech or banking preferred.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <span class="text-muted fs-7"><i class="ki-duotone ki-clock fs-6 me-1"></i> 2 weeks ago</span>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Job 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="job-card-company mb-3">
                                <div class="company-avatar" style="background: #E8EAF6; color: #283593;">T</div>
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-0 fs-6">Network Engineer</h5>
                                    <span class="text-muted fs-7">Telstra • Perth</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge badge-light-primary">Full Time</span>
                                <span class="badge badge-light-info">On-site</span>
                                <span class="badge badge-light-success">$130k - $170k</span>
                            </div>
                            <p class="text-gray-600 fs-7 mb-3">Design and maintain network infrastructure. CCNA/CCNP certification required.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <span class="text-muted fs-7"><i class="ki-duotone ki-clock fs-6 me-1"></i> 2 weeks ago</span>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Job 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-body p-5">
                            <div class="job-card-company mb-3">
                                <div class="company-avatar" style="background: #FFF3E0; color: #E65100;">R</div>
                                <div>
                                    <h5 class="fw-bold text-gray-900 mb-0 fs-6">HR Business Partner</h5>
                                    <span class="text-muted fs-7">Rio Tinto • Adelaide</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge badge-light-primary">Full Time</span>
                                <span class="badge badge-light-info">Hybrid</span>
                                <span class="badge badge-light-success">$95k - $125k</span>
                            </div>
                            <p class="text-gray-600 fs-7 mb-3">Partner with business leaders on talent strategy and employee relations. HR experience required.</p>
                            <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                <span class="text-muted fs-7"><i class="ki-duotone ki-clock fs-6 me-1"></i> 3 weeks ago</span>
                                <a href="{{ route('home') }}" class="btn btn-sm btn-light-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex flex-center mt-8">
                <ul class="pagination">
                    <li class="page-item previous disabled">
                        <a href="#" class="page-link"><i class="ki-duotone ki-arrow-left"></i></a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item next">
                        <a href="#" class="page-link"><i class="ki-duotone ki-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--end::Latest Jobs Section-->
        
    </div>
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    
    // Favorite job toggle
    document.querySelectorAll('.btn-heart').forEach(btn => {
        btn.addEventListener('click', function() {
            this.classList.toggle('text-danger');
            const icon = this.querySelector('i');
            icon.classList.toggle('ki-heart');
            icon.classList.toggle('ki-heart-filled');
        });
    });
</script>
@endpush