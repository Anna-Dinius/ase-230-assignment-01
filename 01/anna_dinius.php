<!DOCTYPE html>

<?php 
	$name = 'Anna Dinius';
	$job_title = 'Software Developer';
	$email = 'diniusa1@nku.edu';
	$phone = '859-638-7832';
?>

<html lang="en"> 
<head>
	<title>
		<?= $name ?>'s Resume
	</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Your name's resume">
	<meta name="author" content="Your name">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
			
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
</head> 

<body>
	<article class="resume-wrapper text-center position-relative">
		<div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<header class="resume-header pt-4 pt-md-0">
				<div class="row">
					<div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture" src="assets/images/Anna_profile.jpg" alt="">
					</div>
					<!--//col-->
					
					<div class="col">
						<div class="row p-4 justify-content-center justify-content-md-between">
							<div class="primary-info col-auto">
								<h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
									<?= $name ?>
								</h1>
								
								<div class="title mb-3">
									<?= $job_title ?>
								</div>
								
								<ul class="list-unstyled">
									<li class="mb-2">
										<a class="text-link" href="#">
											<i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>
											<?= $email ?>
										</a>
									</li>

									<li>
										<a class="text-link" href="#">
											<i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>
											<?= $phone ?>
										</a>
									</li>
								</ul>
							</div>
							<!--//primary-info-->
							
							<div class="secondary-info col-auto mt-2">
								<ul class="resume-social list-unstyled">
									<li class="mb-3">
										<a class="text-link" href="https://www.linkedin.com/in/anna-dinius-454712302">
											<span class="fa-container text-center me-2">
												<i class="fab fa-linkedin-in fa-fw"></i>
											</span>
											<?= 'linkedin.com/in/anna-dinius-454712302' ?>
										</a>
									</li>

									<li class="mb-3">
										<a class="text-link" href="https://github.com/Anna-Dinius">
											<span class="fa-container text-center me-2">
												<i class="fab fa-github-alt fa-fw"></i>
											</span>
											<?= 'github.com/Anna-Dinius' ?>
										</a>
									</li>
								</ul>
							</div>
							<!--//secondary-info-->
						</div>
						<!--//row-->
					</div>
					<!--//col-->
				</div>
				<!--//row-->
			</header>

			<div class="resume-body p-5">
				<section class="resume-section summary-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
					
					<div class="resume-section-content">
						<p class="mb-0">
							<?= 'I am a full-time college student working part-time as an intern for an IT company called PROceed BPM.  I have prior experience as a call center representative and bookseller.  I am also in the Venturing Crew, a youth-led organization within the Boy Scouts of America (BSA).  Through the BSA, I have participated in two leadership camps: National Youth Leadership Training (NYLT) and National Advanced Youth Leadership Experience (NAYLE).  After my participant year, I served on staff for NYLT for four years teaching leadership skills to other youth.' ?>
						</p>
					</div>
				</section>
				<!--//summary-section-->

				<div class="row">
					<div class="col-lg-9">
						<section class="resume-section experience-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
								Work Experience
							</h2>
							
							<div class="resume-section-content">
								<div class="resume-timeline position-relative">
									<article class="resume-timeline-item position-relative pb-5">
										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">
													<?= 'Intern' ?>
												</h3>
												
												<div class="resume-company-name ms-auto">
													<?= 'PROceed BPM' ?>
												</div>
											</div>
											<!--//row-->
											
											<div class="resume-position-time">
												<?= 'June 2024 - Present' ?>
											</div>
										</div>
										<!--//resume-timeline-item-header-->
										
										<div class="resume-timeline-item-desc">
											<p>
												<?= 'Work on upgrading the Angular version of the Camino application to enhance simplicity and readability and futureproof the code:' ?>
											</p>
											
											<ul>
												<li>
													<?= 'Organize, consolidate, and reduce the amount of CSS and SCSS code' ?>
												</li>

												<li>
													<?= 'Replace Angular\'s Flex-Layout with a combination of grid and flexbox CSS' ?>
												</li>

												<li>
													<?= 'Identify and remove unnecessary and redundant HTML and CSS code' ?>
												</li>

												<li>
													<?= 'Ensure the application\'s layout is responsive to different screen sizes' ?>
												</li>
											</ul>

											<h4 class="resume-timeline-item-desc-heading font-weight-bold">
												Technologies used:
											</h4>
											
											<ul class="list-inline">
												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Angular' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Angular Material' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'HTML' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'CSS/SCSS' ?>
													</span>
												</li>
											</ul>
										</div><!--//resume-timeline-item-desc-->
									</article>
									<!--//resume-timeline-item-->
									
									<article class="resume-timeline-item position-relative pb-5">
										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
													<h3 class="resume-position-title font-weight-bold mb-1">
														<?= 'Customer Service Associate (part-time)' ?>
													</h3>
													
													<div class="resume-company-name ms-auto">
														<?= 'Western & Southern Financial Group' ?>
													</div>
											</div>
											<!--//row-->
											
											<div class="resume-position-time">
												<?= 'July 2023 - August 2024' ?>
											</div>
										</div>
										<!--//resume-timeline-item-header-->
										
										<div class="resume-timeline-item-desc">
											<ul>
												<li>
													<?= 'Make outbound calls to insurance applicants to conduct personal history interviews based on underwriters\' requests and document responses in the insurance database' ?>
												</li>

												<li>
													<?= 'Answer inbound operator calls and transfer the caller to the appropriate department' ?>
												</li>

												<li>
													<?= 'Process insurance policy loan requests and EFT direct deposit forms' ?>
												</li>

												<li>
													<?= 'Recruit candidates from across the U.S. for the position of Field Representative' ?>
												</li>
												</ul>

											<h4 class="resume-timeline-item-desc-heading font-weight-bold">
												Technologies used:
											</h4>
											
											<ul class="list-inline">
												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Indeed' ?>
													</span>
												</li>
												
												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Microsoft Word' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Microsoft Teams' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Microsoft Excel' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'GIACT' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'NOLAS' ?>
													</span>
												</li>
											</ul>
										</div>
										<!--//resume-timeline-item-desc-->
									</article>
									<!--//resume-timeline-item-->
									
									<article class="resume-timeline-item position-relative pb-5">
										<div class="resume-timeline-item-header mb-2">
											<div class="d-flex flex-column flex-md-row">
												<h3 class="resume-position-title font-weight-bold mb-1">
													<?= 'Bookseller (seasonal)' ?>
												</h3>
												
												<div class="resume-company-name ms-auto">
													<?= 'NKU Barnes and Noble Book Store' ?>
												</div>
											</div>
											<!--//row-->
											
											<div class="resume-position-time">
												<?= 'Aug 2022 - Jan 2023' ?>
											</div>
										</div>
										<!--//resume-timeline-item-header-->

										<ul>
											<li>
												<?= 'Put together and organized student orders' ?>
											</li>

											<li>
												<?= 'Restocked books' ?>
											</li>

											<li>
												<?= 'Processed book orders from publishers' ?>
											</li>

											<li>
												<?= 'Called publishers to place orders' ?>
											</li>

											<li>
												<?= 'Assisted customers' ?>
											</li>

											<li>
												<?= 'Trained new employees' ?>
											</li>
										</ul>

										<div class="resume-timeline-item-desc">
											<h4 class="resume-timeline-item-desc-heading font-weight-bold">
												Technologies used:
											</h4>
										
											<ul class="list-inline">
												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Windows OS' ?>
													</span>
												</li>

												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?= 'Landline' ?>
													</span>
												</li>
											</ul>
										</div>
										<!--//resume-timeline-item-desc-->
									</article>
									<!--//resume-timeline-item-->
								</div>
								<!--//resume-timeline-->
							</div>
						</section>
						<!--//projects-section-->
					</div>

					<div class="col-lg-3">
						<section class="resume-section skills-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
							
							<div class="resume-section-content">
									<div class="resume-skill-item">
										<ul class="list-unstyled mb-4">
											<li class="mb-2">
												<div class="resume-skill-name">
													<?= 'Angular' ?>
												</div>

												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>

											<li class="mb-2">
												<div class="resume-skill-name">
													<?= 'GitHub' ?>
												</div>

												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
											
											<li class="mb-2">
												<div class="resume-skill-name">
													<?= 'JavaScript' ?>
												</div>

												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
											
											<li class="mb-2">
												<div class="resume-skill-name">
													<?= 'Node.js' ?>
												</div>

												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 92%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>

											<li class="mb-2">
												<div class="resume-skill-name">
													<?= 'HTML/CSS/SCSS' ?>
												</div>

												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</li>
										</ul>
									</div>
									<!--//resume-skill-item-->

									<div class="resume-skill-item">
										<h4 class="resume-skills-cat font-weight-bold">
											Others
										</h4>
										
										<ul class="list-inline">
											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'Microsoft Outlook' ?>
												</span>
											</li>

											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'Google Drive' ?>
												</span>
											</li>
											
											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'Typescript' ?>
												</span>
											</li>

											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'problem-solving' ?>
												</span>
											</li>

											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'leadership' ?>
												</span>
											</li>

											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'creativity' ?>
												</span>
											</li>

											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'detail-oriented' ?>
												</span>
											</li>

											<li class="list-inline-item">
												<span class="badge badge-light">
													<?= 'public speaking' ?>
												</span>
											</li>
										</ul>
									</div>
									<!--//resume-skill-item-->
							</div>
							<!--resume-section-content-->
						</section>
						<!--//skills-section-->

						<section class="resume-section education-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
								Education
							</h2>
							
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-2">
										<div class="resume-degree font-weight-bold">
											<?= 'BS in Applied Software Engineering' ?>
										</div>
										
										<div class="resume-degree-org">
											<?= 'Northern Kentucky University' ?>
										</div>
										
										<div class="resume-degree-time">
											<?= '2022 - 2026' ?>
										</div>
									</li>

									<li>
										<div class="resume-degree font-weight-bold">
											<?= 'High School Diploma' ?>
										</div>

										<div class="resume-degree-org">
											<?= 'Saint Henry District High School' ?>
										</div>
										
										<div class="resume-degree-time">
											<?= '2018 - 2022' ?>
										</div>
									</li>
								</ul>
							</div>
						</section>
						<!--//education-section-->

						<section class="resume-section language-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
								Languages
							</h2>

							<div class="resume-section-content">
								<ul class="list-unstyled resume-lang-list">
									<li class="mb-2">
										<span class="resume-lang-name font-weight-bold">
											English
										</span>

										<small class="text-muted font-weight-normal">
											(Native)
										</small>
									</li>
								</ul>
							</div>
						</section>
						<!--//language-section-->

						<section class="resume-section interests-section mb-5">
							<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
								Interests
							</h2>
							
							<div class="resume-section-content">
								<ul class="list-unstyled">
									<li class="mb-1"><?= 'Hiking</li>' ?></li>
									<li class="mb-1"><?= 'Camping</li>' ?></li>
									<li class="mb-1"><?= 'Traveling</li>' ?></li>
									<li class="mb-1"><?= 'Brazilian Jiu Jitsu</li>' ?></li>
									<li class="mb-1"><?= 'Skiing</li>' ?></li>
									<li class="mb-1"><?= 'Costume-making</li>' ?></li>
								</ul>
							</div>
						</section>
						<!--//interests-section-->
					</div>
				</div>
				<!--//row-->
			
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
						<?= 'Projects' ?>
					</h2>
					
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/vias_logo.png" alt="Project 1" class="card-img-top">
								
								<div class="card-body">
									<h5 class="card-title"><?= 'Visually Impaired Assistance System (VIAS)</h5>' ?>
									
									<p class="card-text">
										<?= 'Collaborated with three classmates to create a working, cost-effective Visually Impaired Assistance System from scratch and presented the project to a panel of judges' ?>
									</p>

									<ul>
										<li>
											<?= 'First Place - University of Cincinnati IT Expo' ?>
										</li>

										<li>
											<?= 'Western & Southern Award for High School Competition - University of Cincinnati IT Expo' ?>
										</li>

										<li>
											<?= 'Second Place - InterAlliance: TechOlympics' ?>
										</li>
									</ul>
									
									<a class="btn btn-outline-primary" href="https://shdhs.org/first-place-at-the-uc-it-expo/">
										Go to link
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--//projects-section-->
			</div>
			<!--//resume-body-->
		</div>
	</article> 
	
	<footer class="footer text-center pt-2 pb-5">
		<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
		<small class="copyright">
			Designed with <span class="sr-only">love</span>
			<i class="fas fa-heart"></i> by <?= $name ?>
		</small>
	</footer>
</body>
</html> 

