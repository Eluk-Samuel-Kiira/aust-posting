@extends('layouts.app')

@section('title', 'Senior Software Developer at TechCorp Australia')
@section('meta_description', 'Senior Software Developer position at TechCorp Australia. Competitive salary, remote work, and benefits included.')

@section('content')

	<!--begin::Toolbar-->
	<div class="bg-light py-8 py-lg-12">
		<div class="container">
			<div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
				<a href="{{ route('jobs.index') }}" class="btn btn-sm btn-light">
					<i class="ki-duotone ki-arrow-left fs-4 me-2"></i> Back to Jobs
				</a>
				<div class="d-flex gap-2">
					<button class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip" title="Save Job">
						<i class="ki-duotone ki-heart fs-5"></i>
					</button>
					<button class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip" title="Share Job">
						<i class="ki-duotone ki-share fs-5"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!--end::Toolbar-->

	<!--begin::Content-->
	<div class="py-12 py-lg-15">
		<div class="container">
			<div class="row g-8">
				<!--begin::Main Content-->
				<div class="col-lg-8">
					<!--begin::Job Header-->
					<div class="card card-flush mb-8">
						<div class="card-body p-8 p-lg-10">
							<div class="d-flex align-items-start gap-6 mb-6">
								<div class="symbol symbol-100px flex-shrink-0">
									<span class="symbol-label bg-light-primary rounded">
										<img src="{{ asset('assets/media/svg/brand-logos/techcorp.svg') }}" alt="Company Logo" class="w-75px">
									</span>
								</div>

								<div class="flex-grow-1">
									<div class="d-flex align-items-center gap-3 mb-3">
										<h1 class="fs-1 fw-bold text-gray-900 mb-0">Senior Software Developer</h1>
										<span class="badge badge-success" style="background-color: #20AA3E;">Active</span>
									</div>

									<div class="d-flex align-items-center flex-wrap gap-4 mb-4">
										<span class="fw-semibold text-gray-700">TechCorp Australia</span>
										<span class="text-gray-600"><i class="ki-duotone ki-geolocation fs-5 me-2"></i>Sydney, NSW</span>
										<span class="text-gray-600"><i class="ki-duotone ki-clock fs-5 me-2"></i>Posted 3 days ago</span>
									</div>

									<div class="d-flex flex-wrap gap-2 mb-4">
										<span class="badge badge-light-primary">Full Time</span>
										<span class="badge badge-light-success">Remote</span>
										<span class="badge badge-light-info">5+ Years Experience</span>
									</div>

									<div class="d-flex align-items-center gap-4">
										<div>
											<span class="text-gray-600 fs-7 d-block">Salary Range</span>
											<span class="fw-bold text-success fs-5">$150,000 - $200,000 AUD</span>
										</div>
										<div class="border-start ps-4">
											<span class="text-gray-600 fs-7 d-block">Position Type</span>
											<span class="fw-bold text-gray-900 fs-5">Direct Hire</span>
										</div>
										<div class="border-start ps-4">
											<span class="text-gray-600 fs-7 d-block">Applications</span>
											<span class="fw-bold text-gray-900 fs-5">24 Applied</span>
										</div>
									</div>
								</div>
							</div>

							<div class="border-top pt-6">
								<a href="#apply-section" class="btn btn-primary btn-lg w-100">
									<i class="ki-duotone ki-check fs-4 me-2"></i> Apply Now
								</a>
							</div>
						</div>
					</div>
					<!--end::Job Header-->

					<!--begin::Job Details Tabs-->
					<div class="card card-flush mb-8">
						<div class="card-header">
							<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" data-bs-toggle="tab" href="#overview-tab" aria-selected="true" role="tab">Overview</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#description-tab" aria-selected="false" role="tab" tabindex="-1">Job Description</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#requirements-tab" aria-selected="false" role="tab" tabindex="-1">Requirements</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#benefits-tab" aria-selected="false" role="tab" tabindex="-1">Benefits</a>
								</li>
							</ul>
						</div>

						<div class="card-body p-8 p-lg-10">
							<div class="tab-content" id="job-details-tabs">
								<!--Overview Tab-->
								<div class="tab-pane fade show active" id="overview-tab" role="tabpanel">
									<h4 class="fw-bold text-gray-900 mb-4">About This Role</h4>
									<p class="text-gray-700 fs-6 mb-4">
										We are seeking an experienced Senior Software Developer to join our growing technology team. You will work on building scalable, high-performance applications serving thousands of users across Australia. This is an exciting opportunity to make a significant impact in a fast-growing company.
									</p>

									<h5 class="fw-bold text-gray-900 mb-3 mt-6">Key Responsibilities</h5>
									<ul class="list-unstyled mb-6">
										<li class="mb-3">
											<i class="ki-duotone ki-check-circle fs-5 text-success me-3"></i>
											<span class="text-gray-700">Design and develop robust, scalable software solutions</span>
										</li>
										<li class="mb-3">
											<i class="ki-duotone ki-check-circle fs-5 text-success me-3"></i>
											<span class="text-gray-700">Lead technical design reviews and architecture discussions</span>
										</li>
										<li class="mb-3">
											<i class="ki-duotone ki-check-circle fs-5 text-success me-3"></i>
											<span class="text-gray-700">Mentor junior developers and contribute to team growth</span>
										</li>
										<li class="mb-3">
											<i class="ki-duotone ki-check-circle fs-5 text-success me-3"></i>
											<span class="text-gray-700">Collaborate with product managers and UX designers</span>
										</li>
										<li class="mb-3">
											<i class="ki-duotone ki-check-circle fs-5 text-success me-3"></i>
											<span class="text-gray-700">Contribute to continuous improvement of development processes</span>
										</li>
										<li>
											<i class="ki-duotone ki-check-circle fs-5 text-success me-3"></i>
											<span class="text-gray-700">Ensure code quality and maintain best practices</span>
										</li>
									</ul>

									<h5 class="fw-bold text-gray-900 mb-3 mt-6">About TechCorp Australia</h5>
									<p class="text-gray-700 fs-6">
										TechCorp Australia is a leading technology company specializing in cloud solutions and AI-powered applications. We pride ourselves on innovation, collaborative culture, and commitment to our employees' professional growth. Our team spans across Sydney, Melbourne, and Brisbane with over 500+ skilled professionals.
									</p>
								</div>

								<!--Description Tab-->
								<div class="tab-pane fade" id="description-tab" role="tabpanel">
									<h4 class="fw-bold text-gray-900 mb-4">Full Job Description</h4>
									<p class="text-gray-700 fs-6 mb-4">
										TechCorp is looking for a Senior Software Developer who can drive innovation and excellence. In this role, you'll be responsible for:
									</p>

									<h5 class="fw-bold text-gray-900 mb-3">Technical Leadership</h5>
									<p class="text-gray-700 fs-6 mb-4">
										Lead the technical direction of our core platform products. Work with cross-functional teams to define requirements, propose solutions, and execute on ambitious projects. Your technical expertise will directly influence the future direction of our engineering efforts.
									</p>

									<h5 class="fw-bold text-gray-900 mb-3">Code Excellence</h5>
									<p class="text-gray-700 fs-6 mb-4">
										Maintain high standards of code quality and best practices. Conduct code reviews, establish coding standards, and help the team continuously improve their technical skills. We believe in writing code that is maintainable, tested, and documented.
									</p>

									<h5 class="fw-bold text-gray-900 mb-3">Mentorship</h5>
									<p class="text-gray-700 fs-6">
										Guide and mentor junior developers in your team. Share knowledge, help them grow their skills, and foster a culture of continuous learning and improvement. Your experience will be invaluable to the development of our next generation of engineers.
									</p>
								</div>

								<!--Requirements Tab-->
								<div class="tab-pane fade" id="requirements-tab" role="tabpanel">
									<h4 class="fw-bold text-gray-900 mb-6">Required Skills & Experience</h4>

									<div class="row g-8">
										<div class="col-md-6">
											<h5 class="fw-bold text-gray-900 mb-3">Technical Skills</h5>
											<ul class="list-unstyled">
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-check-circle fs-5 text-success me-3 flex-shrink-0"></i>
													<span class="text-gray-700">5+ years of professional software development</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-check-circle fs-5 text-success me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Strong proficiency in Java, Python, or Go</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-check-circle fs-5 text-success me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Experience with microservices architecture</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-check-circle fs-5 text-success me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Knowledge of cloud platforms (AWS, GCP, or Azure)</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-check-circle fs-5 text-success me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Experience with databases and data modeling</span>
												</li>
												<li class="d-flex">
													<i class="ki-duotone ki-check-circle fs-5 text-success me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Strong problem-solving and analytical skills</span>
												</li>
											</ul>
										</div>

										<div class="col-md-6">
											<h5 class="fw-bold text-gray-900 mb-3">Nice to Have</h5>
											<ul class="list-unstyled">
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-star fs-5 text-warning me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Experience with Kubernetes</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-star fs-5 text-warning me-3 flex-shrink-0"></i>
													<span class="text-gray-700">CI/CD pipeline development</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-star fs-5 text-warning me-3 flex-shrink-0"></i>
													<span class="text-gray-700">ML/AI integration experience</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-star fs-5 text-warning me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Open source contributions</span>
												</li>
												<li class="mb-3 d-flex">
													<i class="ki-duotone ki-star fs-5 text-warning me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Technical leadership experience</span>
												</li>
												<li class="d-flex">
													<i class="ki-duotone ki-star fs-5 text-warning me-3 flex-shrink-0"></i>
													<span class="text-gray-700">Master's degree in Computer Science</span>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<!--Benefits Tab-->
								<div class="tab-pane fade" id="benefits-tab" role="tabpanel">
									<h4 class="fw-bold text-gray-900 mb-6">What We Offer</h4>

									<div class="row g-8">
										<div class="col-md-6">
											<div class="d-flex mb-4">
												<div class="symbol symbol-50px me-4 flex-shrink-0">
													<span class="symbol-label bg-light-success rounded">
														<i class="ki-duotone ki-dollar fs-2x text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<div>
													<h6 class="fw-bold text-gray-900 mb-1">Competitive Salary</h6>
													<p class="text-gray-600 fs-7 mb-0">$150,000 - $200,000 AUD based on experience</p>
												</div>
											</div>

											<div class="d-flex mb-4">
												<div class="symbol symbol-50px me-4 flex-shrink-0">
													<span class="symbol-label bg-light-primary rounded">
														<i class="ki-duotone ki-briefcase fs-2x text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<div>
													<h6 class="fw-bold text-gray-900 mb-1">Professional Development</h6>
													<p class="text-gray-600 fs-7 mb-0">Training budget for courses and conferences</p>
												</div>
											</div>

											<div class="d-flex mb-4">
												<div class="symbol symbol-50px me-4 flex-shrink-0">
													<span class="symbol-label bg-light-warning rounded">
														<i class="ki-duotone ki-home fs-2x text-warning">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<div>
													<h6 class="fw-bold text-gray-900 mb-1">Remote Work</h6>
													<p class="text-gray-600 fs-7 mb-0">100% remote with flexible hours</p>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="d-flex mb-4">
												<div class="symbol symbol-50px me-4 flex-shrink-0">
													<span class="symbol-label bg-light-danger rounded">
														<i class="ki-duotone ki-heart fs-2x text-danger">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<div>
													<h6 class="fw-bold text-gray-900 mb-1">Health & Wellness</h6>
													<p class="text-gray-600 fs-7 mb-0">Comprehensive health and dental coverage</p>
												</div>
											</div>

											<div class="d-flex mb-4">
												<div class="symbol symbol-50px me-4 flex-shrink-0">
													<span class="symbol-label bg-light-info rounded">
														<i class="ki-duotone ki-calendar fs-2x text-info">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<div>
													<h6 class="fw-bold text-gray-900 mb-1">Generous Leave</h6>
													<p class="text-gray-600 fs-7 mb-0">20 days annual leave + 10 days sick leave</p>
												</div>
											</div>

											<div class="d-flex">
												<div class="symbol symbol-50px me-4 flex-shrink-0">
													<span class="symbol-label bg-light-success rounded">
														<i class="ki-duotone ki-exit-up fs-2x text-success">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
												</div>
												<div>
													<h6 class="fw-bold text-gray-900 mb-1">Superannuation</h6>
													<p class="text-gray-600 fs-7 mb-0">Employer contribution of 11.5% + salary sacrifice</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Job Details Tabs-->

					<!--begin::Company Info-->
					<div class="card card-flush">
						<div class="card-header border-0 pt-6">
							<h5 class="card-title fw-bold">About the Company</h5>
						</div>
						<div class="card-body pt-0">
							<div class="d-flex align-items-start gap-6 mb-6">
								<div class="symbol symbol-120px flex-shrink-0">
									<span class="symbol-label bg-light-primary rounded">
										<img src="{{ asset('assets/media/svg/brand-logos/techcorp-large.svg') }}" alt="Company Logo" class="w-100 h-100 object-fit-contain">
									</span>
								</div>

								<div class="flex-grow-1">
									<h6 class="fw-bold text-gray-900 mb-2">TechCorp Australia</h6>
									<p class="text-gray-600 fs-6 mb-4">
										Founded in 2015, TechCorp Australia has become a leader in cloud computing and AI solutions. We serve over 500 enterprises across Asia-Pacific with our cutting-edge technology platform.
									</p>

									<div class="row g-4">
										<div class="col-6">
											<span class="text-gray-600 fs-7 d-block">Industry</span>
											<span class="fw-bold text-gray-900">Technology & Software</span>
										</div>
										<div class="col-6">
											<span class="text-gray-600 fs-7 d-block">Company Size</span>
											<span class="fw-bold text-gray-900">500+ Employees</span>
										</div>
										<div class="col-6">
											<span class="text-gray-600 fs-7 d-block">Founded</span>
											<span class="fw-bold text-gray-900">2015</span>
										</div>
										<div class="col-6">
											<span class="text-gray-600 fs-7 d-block">Headquarters</span>
											<span class="fw-bold text-gray-900">Sydney, NSW</span>
										</div>
									</div>
								</div>
							</div>

							<a href="#" class="btn btn-outline btn-outline-primary">Visit Company Page</a>
						</div>
					</div>
					<!--end::Company Info-->
				</div>
				<!--end::Main Content-->

				<!--begin::Sidebar-->
				<div class="col-lg-4">
					<!--begin::Apply Card-->
					<div class="card card-flush mb-8 sticky-top" style="top: 100px;">
						<div class="card-header border-0 pt-6">
							<h5 class="card-title fw-bold">Ready to Apply?</h5>
						</div>
						<div class="card-body pt-0" id="apply-section">
							<form id="application-form" method="POST" action="{{ route('jobs.apply', $job['id'] ?? '#') }}" enctype="multipart/form-data">
								@csrf

								<div class="mb-4">
									<label class="form-label fw-semibold text-gray-900 mb-2">Full Name</label>
									<input type="text" name="full_name" class="form-control form-control-solid" placeholder="Your full name" required>
								</div>

								<div class="mb-4">
									<label class="form-label fw-semibold text-gray-900 mb-2">Email Address</label>
									<input type="email" name="email" class="form-control form-control-solid" placeholder="your@email.com" required>
								</div>

								<div class="mb-4">
									<label class="form-label fw-semibold text-gray-900 mb-2">Phone Number</label>
									<input type="tel" name="phone" class="form-control form-control-solid" placeholder="+61 2 XXXX XXXX" required>
								</div>

								<div class="mb-4">
									<label class="form-label fw-semibold text-gray-900 mb-2">Upload CV</label>
									<div class="input-group input-group-solid">
										<input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
									</div>
									<small class="text-gray-600">PDF, DOC, or DOCX format. Max 5MB.</small>
								</div>

								<div class="mb-6">
									<label class="form-label fw-semibold text-gray-900 mb-2">Cover Letter (Optional)</label>
									<textarea name="cover_letter" class="form-control form-control-solid" rows="4" placeholder="Tell us why you're a great fit for this role..."></textarea>
								</div>

								<div class="form-check mb-6">
									<input type="checkbox" id="privacy-check" class="form-check-input" required>
									<label class="form-check-label text-gray-700 fs-7" for="privacy-check">
										I agree to the <a href="#" class="link-primary">privacy policy</a> and <a href="#" class="link-primary">terms of service</a>
									</label>
								</div>

								<button type="submit" class="btn btn-primary w-100 mb-3">
									<i class="ki-duotone ki-check fs-4 me-2"></i> Submit Application
								</button>

								<button type="button" class="btn btn-light w-100" data-bs-toggle="tooltip" title="Save this job for later">
									<i class="ki-duotone ki-heart fs-4 me-2"></i> Save Job
								</button>
							</form>
						</div>
					</div>
					<!--end::Apply Card-->

					<!--begin::Job Info Card-->
					<div class="card card-flush mb-8">
						<div class="card-header border-0 pt-6">
							<h5 class="card-title fw-bold">Job Information</h5>
						</div>
						<div class="card-body pt-0">
							<div class="mb-4">
								<span class="text-gray-600 fs-7 d-block mb-1">Job ID</span>
								<span class="fw-bold text-gray-900">JOB-2024-0521</span>
							</div>
							<div class="mb-4">
								<span class="text-gray-600 fs-7 d-block mb-1">Posted Date</span>
								<span class="fw-bold text-gray-900">January 15, 2024</span>
							</div>
							<div class="mb-4">
								<span class="text-gray-600 fs-7 d-block mb-1">Application Deadline</span>
								<span class="fw-bold text-gray-900">February 15, 2024</span>
							</div>
							<div class="mb-4">
								<span class="text-gray-600 fs-7 d-block mb-1">Total Applications</span>
								<span class="fw-bold text-gray-900">24 candidates</span>
							</div>
							<div>
								<span class="text-gray-600 fs-7 d-block mb-1">Category</span>
								<span class="badge badge-light-info">Technology</span>
							</div>
						</div>
					</div>
					<!--end::Job Info Card-->

					<!--begin::Share Card-->
					<div class="card card-flush">
						<div class="card-header border-0 pt-6">
							<h5 class="card-title fw-bold">Share This Job</h5>
						</div>
						<div class="card-body pt-0">
							<div class="d-flex gap-2">
								<button class="btn btn-icon btn-light-primary flex-grow-1" data-bs-toggle="tooltip" title="Share on LinkedIn">
									<i class="ki-duotone ki-linkedin fs-5"></i>
								</button>
								<button class="btn btn-icon btn-light-primary flex-grow-1" data-bs-toggle="tooltip" title="Share on Twitter">
									<i class="ki-duotone ki-twitter fs-5"></i>
								</button>
								<button class="btn btn-icon btn-light-primary flex-grow-1" data-bs-toggle="tooltip" title="Share via WhatsApp">
									<i class="ki-duotone ki-whatsapp fs-5"></i>
								</button>
								<button class="btn btn-icon btn-light-primary flex-grow-1" data-bs-toggle="tooltip" title="Copy Link">
									<i class="ki-duotone ki-link fs-5"></i>
								</button>
							</div>
						</div>
					</div>
					<!--end::Share Card-->
				</div>
				<!--end::Sidebar-->
			</div>

			<!--begin::Related Jobs-->
			<div class="mt-15">
				<h3 class="fw-bold text-gray-900 mb-8">Similar Opportunities</h3>

				<div class="row g-6">
					@for ($i = 0; $i < 3; $i++)
						<div class="col-lg-4 col-md-6">
							<div class="card card-flush h-100">
								<div class="card-body p-6">
									<div class="d-flex align-items-start gap-3 mb-3">
										<div class="symbol symbol-50px flex-shrink-0">
											<span class="symbol-label bg-light-{{ $i === 0 ? 'primary' : ($i === 1 ? 'success' : 'info') }} rounded">
												<span class="fw-bold fs-5" style="color: {{ $i === 0 ? '#0AB5D9' : ($i === 1 ? '#20AA3E' : '#5861AC') }};">{{ chr(65 + $i) }}</span>
											</span>
										</div>

										<div class="flex-grow-1">
											<h6 class="text-gray-900 fw-bold fs-7 mb-1">{{ ['Lead Developer', 'Software Engineer', 'Full Stack Developer'][$i] }}</h6>
											<p class="text-gray-600 fs-7 mb-0">Tech Company Ltd</p>
										</div>
									</div>

									<div class="d-flex flex-wrap gap-2 mb-3">
										<span class="badge badge-light-primary fs-7">Full Time</span>
										<span class="badge badge-light-success fs-7">Remote</span>
									</div>

									<p class="text-gray-700 fs-7 mb-4">Build scalable applications with a talented team...</p>

									<div class="d-flex justify-content-between align-items-center">
										<span class="fw-bold text-success fs-6">$140k - $180k</span>
										<a href="#" class="btn btn-sm btn-light-primary">View</a>
									</div>
								</div>
							</div>
						</div>
					@endfor
				</div>
			</div>
			<!--end::Related Jobs-->
		</div>
	</div>
	<!--end::Content-->

@endsection

@push('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Application form submission
		const applicationForm = document.getElementById('application-form');
		if (applicationForm) {
			applicationForm.addEventListener('submit', function(e) {
				e.preventDefault();

				// Simulate form submission
				const submitBtn = applicationForm.querySelector('button[type="submit"]');
				const originalText = submitBtn.innerHTML;
				submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Submitting...';
				submitBtn.disabled = true;

				setTimeout(() => {
					Swal.fire({
						title: 'Application Submitted',
						text: 'Thank you for applying. The employer will review your application soon.',
						icon: 'success',
						confirmButtonText: 'Back to Jobs'
					}).then(() => {
						window.location.href = '{{ route('jobs.index') }}';
					});
				}, 1500);
			});
		}

		// Save job functionality
		const saveJobBtn = applicationForm?.querySelector('button[data-bs-toggle="tooltip"][title*="Save"]');
		if (saveJobBtn) {
			saveJobBtn.addEventListener('click', function(e) {
				e.preventDefault();
				const icon = this.querySelector('i');
				icon.classList.toggle('ki-heart');
				icon.classList.toggle('ki-heart-filled');
				icon.classList.toggle('text-danger');
			});
		}

		// Initialize tooltips
		const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
		tooltipTriggerList.map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
	});
</script>
@endpush

@push('styles')
<style>
	.sticky-top {
		position: sticky;
		top: 100px;
	}

	.list-unstyled li {
		line-height: 1.7;
	}

	.form-control:focus, .form-select:focus {
		border-color: #20AA3E;
		box-shadow: 0 0 0 0.2rem rgba(32, 170, 62, 0.15);
	}

	.nav-tabs .nav-link.active {
		border-bottom-color: #20AA3E;
		color: #20AA3E;
	}

	@media (max-width: 768px) {
		.sticky-top {
			position: static;
			top: auto;
		}
	}
</style>
@endpush