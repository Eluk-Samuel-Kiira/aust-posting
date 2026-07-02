@extends('layouts.app')

@section('title', 'Browse Job Opportunities - JobMatch Australia')
@section('meta_description', 'Find your next career opportunity...')

@section('content')

	<!--begin::Toolbar-->
	<div class="bg-light py-8 py-lg-12">
		<div class="container">
			<div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
				<div>
					<h1 class="fs-2 fw-bold text-gray-900 mb-1">Job Opportunities</h1>
					<p class="text-gray-600 fs-6 mb-0">Discover your perfect career match across Australia</p>
				</div>
				<a href="{{ route('home') }}" class="btn btn-primary">
					<i class="ki-duotone ki-briefcase fs-2 me-2"></i> Post a Job
				</a>
			</div>
		</div>
	</div>
	<!--end::Toolbar-->

	<!--begin::Content-->
	<div class="py-12 py-lg-15">
		<div class="container">
			<div class="row g-8">
				<!--begin::Sidebar - Filters-->
				<div class="col-lg-3">
					<div class="card card-flush position-sticky" style="top: 100px;">
						<div class="card-header border-0 pt-6">
							<h5 class="card-title fw-bold text-gray-900">Filters</h5>
							<div class="card-toolbar">
								<a href="{{ route('jobs.index') }}" class="btn btn-sm btn-text btn-color-gray-600">Clear All</a>
							</div>
						</div>

						<div class="card-body pt-0">
							<form id="filter-form" action="{{ route('jobs.index') }}" method="GET">
								<!--Search Filter-->
								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-3">Search Keywords</label>
									<input type="text" name="search" class="form-control form-control-solid" placeholder="e.g. Developer, Manager" value="{{ request('search') }}">
								</div>

								<!--Job Type Filter-->
								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-3">Job Type</label>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="job_type[]" value="full-time" id="job-full-time" {{ in_array('full-time', (array)request('job_type')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="job-full-time">Full Time</label>
									</div>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="job_type[]" value="part-time" id="job-part-time" {{ in_array('part-time', (array)request('job_type')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="job-part-time">Part Time</label>
									</div>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="job_type[]" value="contract" id="job-contract" {{ in_array('contract', (array)request('job_type')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="job-contract">Contract</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="job_type[]" value="temporary" id="job-temporary" {{ in_array('temporary', (array)request('job_type')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="job-temporary">Temporary</label>
									</div>
								</div>

								<!--Work Mode Filter-->
								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-3">Work Mode</label>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="work_mode[]" value="on-site" id="mode-on-site" {{ in_array('on-site', (array)request('work_mode')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="mode-on-site">On-Site</label>
									</div>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="work_mode[]" value="remote" id="mode-remote" {{ in_array('remote', (array)request('work_mode')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="mode-remote">Remote</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="work_mode[]" value="hybrid" id="mode-hybrid" {{ in_array('hybrid', (array)request('work_mode')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="mode-hybrid">Hybrid</label>
									</div>
								</div>

								<!--Category Filter-->
								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-3">Category</label>
									<select name="category" class="form-select form-select-solid">
										<option value="">All Categories</option>
										<option value="it" {{ request('category') === 'it' ? 'selected' : '' }}>IT & Software</option>
										<option value="finance" {{ request('category') === 'finance' ? 'selected' : '' }}>Finance & Banking</option>
										<option value="healthcare" {{ request('category') === 'healthcare' ? 'selected' : '' }}>Healthcare</option>
										<option value="education" {{ request('category') === 'education' ? 'selected' : '' }}>Education</option>
										<option value="retail" {{ request('category') === 'retail' ? 'selected' : '' }}>Retail & Sales</option>
										<option value="engineering" {{ request('category') === 'engineering' ? 'selected' : '' }}>Engineering</option>
										<option value="marketing" {{ request('category') === 'marketing' ? 'selected' : '' }}>Marketing</option>
										<option value="hr" {{ request('category') === 'hr' ? 'selected' : '' }}>Human Resources</option>
									</select>
								</div>

								<!--Location Filter-->
								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-3">Location</label>
									<select name="location" class="form-select form-select-solid">
										<option value="">All Locations</option>
										<option value="sydney" {{ request('location') === 'sydney' ? 'selected' : '' }}>Sydney, NSW</option>
										<option value="melbourne" {{ request('location') === 'melbourne' ? 'selected' : '' }}>Melbourne, VIC</option>
										<option value="brisbane" {{ request('location') === 'brisbane' ? 'selected' : '' }}>Brisbane, QLD</option>
										<option value="perth" {{ request('location') === 'perth' ? 'selected' : '' }}>Perth, WA</option>
										<option value="adelaide" {{ request('location') === 'adelaide' ? 'selected' : '' }}>Adelaide, SA</option>
										<option value="hobart" {{ request('location') === 'hobart' ? 'selected' : '' }}>Hobart, TAS</option>
										<option value="darwin" {{ request('location') === 'darwin' ? 'selected' : '' }}>Darwin, NT</option>
									</select>
								</div>

								<!--Salary Range Filter-->
								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-3">Salary Range</label>
									<select name="salary_range" class="form-select form-select-solid">
										<option value="">Any Salary</option>
										<option value="0-50" {{ request('salary_range') === '0-50' ? 'selected' : '' }}>$0 - $50K</option>
										<option value="50-75" {{ request('salary_range') === '50-75' ? 'selected' : '' }}>$50K - $75K</option>
										<option value="75-100" {{ request('salary_range') === '75-100' ? 'selected' : '' }}>$75K - $100K</option>
										<option value="100-150" {{ request('salary_range') === '100-150' ? 'selected' : '' }}>$100K - $150K</option>
										<option value="150-200" {{ request('salary_range') === '150-200' ? 'selected' : '' }}>$150K - $200K</option>
										<option value="200+" {{ request('salary_range') === '200+' ? 'selected' : '' }}>$200K+</option>
									</select>
								</div>

								<!--Experience Level Filter-->
								<div class="mb-8">
									<label class="form-label fw-semibold text-gray-900 mb-3">Experience Level</label>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="experience[]" value="entry" id="exp-entry" {{ in_array('entry', (array)request('experience')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="exp-entry">Entry Level (0-2 years)</label>
									</div>
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" name="experience[]" value="mid" id="exp-mid" {{ in_array('mid', (array)request('experience')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="exp-mid">Mid-Level (2-5 years)</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="experience[]" value="senior" id="exp-senior" {{ in_array('senior', (array)request('experience')) ? 'checked' : '' }}>
										<label class="form-check-label text-gray-700" for="exp-senior">Senior (5+ years)</label>
									</div>
								</div>

								<button type="submit" class="btn btn-primary w-100">Apply Filters</button>
							</form>
						</div>
					</div>
				</div>
				<!--end::Sidebar-->

				<!--begin::Main Content-->
				<div class="col-lg-9">
					<!--begin::Sort Controls-->
					<div class="d-flex align-items-center justify-content-between mb-6">
						<div class="text-gray-600 fw-semibold fs-6">
							Showing <span class="text-gray-900">{{ count($jobs ?? []) }}</span> jobs
						</div>
						<select id="sort-select" class="form-select form-select-solid w-200px">
							<option value="latest">Latest First</option>
							<option value="salary_high">Highest Salary</option>
							<option value="salary_low">Lowest Salary</option>
							<option value="popular">Most Viewed</option>
						</select>
					</div>
					<!--end::Sort Controls-->

					<!--begin::Featured Jobs Section-->
					@if($featuredJobs && count($featuredJobs) > 0)
						<div class="mb-10">
							<div class="mb-4">
								<h5 class="fw-bold text-gray-900 mb-1">Featured Opportunities</h5>
								<p class="text-gray-600 fs-7">Premium positions handpicked for you</p>
							</div>

							<div class="row g-6" id="featured-jobs-container">
								@foreach($featuredJobs as $job)
									<div class="col-lg-12">
										<div class="card card-flush border-2" style="border-color: #20AA3E; transition: all 0.3s ease;">
											<div class="card-body p-6">
												<div class="d-flex align-items-start gap-4 mb-4">
													<div class="symbol symbol-70px flex-shrink-0">
														<span class="symbol-label bg-light-{{ $loop->index % 4 === 0 ? 'primary' : ($loop->index % 4 === 1 ? 'success' : ($loop->index % 4 === 2 ? 'warning' : 'info')) }} rounded">
															<img src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" alt="Company Logo" class="w-50px">
														</span>
													</div>

													<div class="flex-grow-1">
														<div class="d-flex align-items-center gap-3 mb-2">
															<h5 class="text-gray-900 fw-bold fs-5 mb-0">{{ $job['title'] ?? 'Senior Developer' }}</h5>
															<span class="badge badge-success" style="background-color: #20AA3E;">Featured</span>
														</div>
														<div class="d-flex align-items-center gap-4 flex-wrap">
															<span class="text-gray-600 fs-7">{{ $job['company'] ?? 'Company Name' }} • {{ $job['location'] ?? 'Location' }}</span>
															<span class="text-gray-500 fs-7"><i class="ki-duotone ki-clock fs-5 me-1"></i>{{ $job['posted_date'] ?? '2 days ago' }}</span>
														</div>
													</div>

													<div class="flex-shrink-0">
														<button class="btn btn-icon btn-sm btn-light-primary" data-bs-toggle="tooltip" title="Save Job">
															<i class="ki-duotone ki-heart fs-5"></i>
														</button>
													</div>
												</div>

												<p class="text-gray-700 fs-6 mb-4">{{ $job['description'] ?? 'Great opportunity to join a dynamic team...' }}</p>

												<div class="d-flex align-items-center flex-wrap gap-3 mb-4">
													<span class="badge badge-light-primary">{{ $job['job_type'] ?? 'Full Time' }}</span>
													<span class="badge badge-light-success">{{ $job['work_mode'] ?? 'On-Site' }}</span>
													<span class="badge badge-light-info">{{ $job['experience'] ?? '5+ Years' }}</span>
													<span class="text-gray-700 fw-bold">{{ $job['salary'] ?? '$140k - $180k' }}</span>
												</div>

												<a href="{{ route('jobs.show', $job['id'] ?? '#') }}" class="btn btn-primary btn-sm">
													View Details & Apply
												</a>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					@endif
					<!--end::Featured Jobs Section-->

					<!--begin::Regular Jobs Section-->
					<div class="mb-10">
						@if(!$featuredJobs || count($featuredJobs) === 0)
							<div class="mb-4">
								<h5 class="fw-bold text-gray-900 mb-1">Latest Opportunities</h5>
								<p class="text-gray-600 fs-7">Find your next career opportunity</p>
							</div>
						@else
							<div class="mb-4">
								<h5 class="fw-bold text-gray-900 mb-1">All Opportunities</h5>
								<p class="text-gray-600 fs-7">Browse all available positions</p>
							</div>
						@endif

						<div class="row g-6" id="jobs-container">
							@forelse($jobs ?? [] as $job)
								<div class="col-lg-6 job-card-wrapper">
									<div class="card card-flush h-100" style="transition: all 0.3s ease;">
										<div class="card-body p-6">
											<div class="d-flex align-items-start gap-3 mb-3">
												<div class="symbol symbol-60px flex-shrink-0">
													<span class="symbol-label bg-light-{{ $loop->index % 4 === 0 ? 'primary' : ($loop->index % 4 === 1 ? 'success' : ($loop->index % 4 === 2 ? 'warning' : 'info')) }} rounded">
														<span class="fw-bold fs-5" style="color: {{ $loop->index % 4 === 0 ? '#0AB5D9' : ($loop->index % 4 === 1 ? '#20AA3E' : ($loop->index % 4 === 2 ? '#F57C00' : '#5861AC')) }};">
															{{ substr($job['company'] ?? 'C', 0, 1) }}
														</span>
													</span>
												</div>

												<div class="flex-grow-1">
													<h5 class="text-gray-900 fw-bold fs-6 mb-1">{{ $job['title'] ?? 'Job Title' }}</h5>
													<p class="text-gray-600 fs-7 mb-0">{{ $job['company'] ?? 'Company' }} • {{ $job['location'] ?? 'Location' }}</p>
												</div>

												<button class="btn btn-icon btn-sm btn-light-primary flex-shrink-0" data-bs-toggle="tooltip" title="Save Job">
													<i class="ki-duotone ki-heart fs-5"></i>
												</button>
											</div>

											<div class="d-flex flex-wrap gap-2 mb-3">
												<span class="badge badge-light-primary fs-7">{{ $job['job_type'] ?? 'Full Time' }}</span>
												<span class="badge badge-light-success fs-7">{{ $job['work_mode'] ?? 'On-Site' }}</span>
												<span class="badge badge-light-info fs-7">{{ $job['experience'] ?? '5+ Years' }}</span>
											</div>

											<p class="text-gray-700 fs-7 mb-4 text-truncate" style="max-height: 40px;">{{ $job['description'] ?? 'Job description here...' }}</p>

											<div class="d-flex align-items-center justify-content-between pt-3 border-top">
												<div>
													<span class="fw-bold text-success fs-6">{{ $job['salary'] ?? '$120k - $150k' }}</span>
													<span class="text-gray-500 fs-7 ms-2">{{ $job['posted_date'] ?? '5 days ago' }}</span>
												</div>
												<a href="{{ route('jobs.show', $job['id'] ?? '#') }}" class="btn btn-sm btn-light-primary">
													View <i class="ki-duotone ki-arrow-right fs-5 ms-1"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							@empty
								<div class="col-lg-12">
									<div class="alert alert-info" role="alert">
										<div class="d-flex align-items-center">
											<i class="ki-duotone ki-information-2 fs-2 me-3 text-info"></i>
											<div>
												<h5 class="mb-1">No jobs found</h5>
												<p class="mb-0">Try adjusting your search or filter criteria to find more opportunities.</p>
											</div>
										</div>
									</div>
								</div>
							@endforelse
						</div>

						<!--begin::Show More Button-->
						<div class="text-center mt-10" id="show-more-container">
							<button type="button" class="btn btn-outline btn-outline-primary" id="show-more-btn">
								<i class="ki-duotone ki-arrow-down fs-4 me-2"></i> Load More Jobs
							</button>
							<div class="spinner-border spinner-border-sm text-primary d-none mt-3" id="loading-spinner" role="status">
								<span class="visually-hidden">Loading...</span>
							</div>
						</div>
						<!--end::Show More Button-->
					</div>
					<!--end::Regular Jobs Section-->

					<!--begin::Pagination (Optional)-->
					@if(isset($pagination) && $pagination)
						<div class="d-flex justify-content-center">
							<nav aria-label="Page navigation">
								<ul class="pagination">
									<li class="page-item {{ $pagination['current'] === 1 ? 'disabled' : '' }}">
										<a class="page-link" href="{{ route('jobs.index', array_merge(request()->query(), ['page' => $pagination['current'] - 1])) }}">Previous</a>
									</li>

									@for($i = 1; $i <= $pagination['total']; $i++)
										<li class="page-item {{ $i === $pagination['current'] ? 'active' : '' }}">
											<a class="page-link" href="{{ route('jobs.index', array_merge(request()->query(), ['page' => $i])) }}">{{ $i }}</a>
										</li>
									@endfor

									<li class="page-item {{ $pagination['current'] === $pagination['total'] ? 'disabled' : '' }}">
										<a class="page-link" href="{{ route('jobs.index', array_merge(request()->query(), ['page' => $pagination['current'] + 1])) }}">Next</a>
									</li>
								</ul>
							</nav>
						</div>
					@endif
					<!--end::Pagination-->
				</div>
				<!--end::Main Content-->
			</div>
		</div>
	</div>
	<!--end::Content-->

@endsection

@push('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function() {
		const showMoreBtn = document.getElementById('show-more-btn');
		const loadingSpinner = document.getElementById('loading-spinner');
		const jobsContainer = document.getElementById('jobs-container');
		let currentPage = 1;
		let isLoading = false;

		// Show More functionality
		if (showMoreBtn) {
			showMoreBtn.addEventListener('click', function() {
				if (isLoading) return;

				isLoading = true;
				loadingSpinner.classList.remove('d-none');
				showMoreBtn.disabled = true;

				// Simulate loading delay
				setTimeout(() => {
					isLoading = false;
					loadingSpinner.classList.add('d-none');
					showMoreBtn.disabled = false;

					// In production, this would fetch more jobs via AJAX
					// For now, we'll show a notification
					Swal.fire({
						title: 'More Jobs Loaded',
						text: 'Check back soon for additional opportunities',
						icon: 'info',
						timer: 2000,
						showConfirmButton: false
					});
				}, 1000);
			});
		}

		// Sort functionality
		const sortSelect = document.getElementById('sort-select');
		if (sortSelect) {
			sortSelect.addEventListener('change', function() {
				const sortValue = this.value;
				const currentUrl = new URL(window.location);
				currentUrl.searchParams.set('sort', sortValue);
				window.location.href = currentUrl.toString();
			});
		}

		// Card hover effects
		document.querySelectorAll('.job-card-wrapper').forEach(card => {
			card.querySelector('.card').addEventListener('mouseenter', function() {
				this.style.transform = 'translateY(-4px)';
				this.style.boxShadow = '0 8px 30px rgba(0,0,0,0.08)';
			});
			card.querySelector('.card').addEventListener('mouseleave', function() {
				this.style.transform = 'translateY(0)';
				this.style.boxShadow = '';
			});
		});

		// Favorite button functionality
		document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(element => {
			if (element.title.includes('Save')) {
				element.addEventListener('click', function(e) {
					e.preventDefault();
					const icon = this.querySelector('i');
					icon.classList.toggle('text-danger');
					icon.classList.toggle('ki-heart');
					icon.classList.toggle('ki-heart-filled');
				});
			}
		});

		// Initialize tooltips
		const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
		tooltipTriggerList.map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

		// Filter form auto-submission on checkbox change (optional)
		const filterForm = document.getElementById('filter-form');
		if (filterForm) {
			filterForm.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
				checkbox.addEventListener('change', function() {
					// Uncomment below to auto-submit on filter change
					// filterForm.submit();
				});
			});
		}
	});
</script>
@endpush

@push('styles')
<style>
	.card {
		border: 1px solid rgba(0, 0, 0, 0.08);
	}

	.card:hover {
		border-color: rgba(0, 0, 0, 0.12);
	}

	.position-sticky {
		position: sticky;
		top: 100px;
	}

	@media (max-width: 768px) {
		.position-sticky {
			position: static;
			top: auto;
		}
	}

	.badge {
		font-weight: 600;
		font-size: 0.75rem;
		letter-spacing: 0.5px;
	}

	.form-select, .form-control {
		border-radius: 0.5rem;
		border-color: rgba(0, 0, 0, 0.08);
	}

	.form-select:focus, .form-control:focus {
		border-color: #20AA3E;
		box-shadow: 0 0 0 0.2rem rgba(32, 170, 62, 0.15);
	}

	.btn-outline-primary {
		color: #0AB5D9;
		border-color: #0AB5D9;
	}

	.btn-outline-primary:hover {
		background-color: #0AB5D9;
		color: white;
	}

	.text-truncate {
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}
</style>
@endpush