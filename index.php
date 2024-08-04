<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Structure</title>

	<!-- here you will call all css files in PHP from particular path-->
	<?php

	/* use this code
	*
	* <?php
	*
	* include 'your file path';
	*
	* ?>
	*
	*/

	// here is the actual code

	include 'includes/css_links.php';

	?>

	<!-- calling header -->
	<?php
	include 'includes/header.php';
	?>
</head>

<body>

	<!-- calling hero section -->
	<?php
	include 'includes/hero.php';
	?>



	<!-- About section ends -->
	<div id="AboutSection" class="card mb-3 mt-5 justify-content-center container-fluid px-5 border-0" style="border:none; box-shadow: none;">
		<div class="row">
			<div class="col-md-6">
				<img src="media/images/hero-bg-1.jpg" class="img-fluid" alt="...">
			</div>
			<div class="col-md-6 align-items-center">
				<div class="card-body w-100">
					<h1 class="fw-3 mb-4">About <span>ME</span></h1>
					<h5 class="card-text">I am an enthusiastic IT professional and developer fueled by a passion for crafting transformative digital experiences. With expertise in Web Development, WordPress, and Front-End Development, I thrive in dynamic environments where I can harness cutting-edge technologies to tackle complex challenges. Eager to continue pushing boundaries and contributing to meaningful projects that leave a lasting impact.</h5>
					<!-- <p class="card-text mt-3"><small class="text-body-secondary">With best wishes...</small></p> -->
					<div class="d-flex my-3 justify-content-start">
						<a href="index.php#contact" type="button" class="btn btn-primary fs-5 ms-4">Hire me</a>
						<a href="Haseeb CV.pdf" type="button" download="Haseeb CV.pdf" class="btn btn-primary fs-5 ms-2">Download CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section ends -->

	<!-- Resume Section -->
	<section id="resume" class="resume">
		<div class="container-fluid">

			<div class="section-title">
				<h2>Resume</h2>
				<p>Education</p>
			</div>

			<div class="row container-fluid mx-auto justify-content-center">
				
				<div class="col-lg-5">
					<!-- <h3 class="resume-title">Sumary</h3> -->
					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Bachelor IT</h2>
							<h5>2021 - Present</h5>
							<p>
								<span>University of Chakwal </span>
								<a target="_blank" href="https://uoc.edu.pk/">Visit Site</a>
							</p>
						</div>
					</div>

					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Matric Computer Science</h2>
							<h5>2019 - 2020</h5>
							<p>
								<span>Allied Schools </span>
								<a target="_blank" href="https://www.facebook.com/alliedschoolchakwal/">Visit Site</a>
							</p>
						</div>
					</div>

				</div>

				<div class="mt-3 col-lg-5">

					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>F.SC Pre-Enginnering</h2>
							<h5>2020 - 2021</h5>
							<p>
								<span>Punjab Group of Colleges </span>
								<a target="_blank" href="https://pgc.edu/campus/chakwal/">Visit Site</a>
							</p>
						</div>
					</div>

					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Wordpress Development</h2>
							<h5>9 months Course</h5>
							<p>
								<span>Pakaims Computer Center </span>
								<a target="_blank" href="https://www.facebook.com/PakaimsChakwal/">Visit Site</a>
							</p>
						</div>
					</div>

				</div>

				<div class="col-lg-5 mt-3">
					<!-- <h3 class="resume-title">Sumary</h3> -->
					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Web Development</h2>
							<h5>3 months course</h5>
							<h5>Certificate ID: 9XESHWMMK</h5>
							<p>
								<span>DigiSkills (Online) </span>
								<a target="_blank" href="https://digiskills.pk/verify/">Visit Site</a>
							</p>
						</div>
					</div>

					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Search Engine Optimization</h2>
							<h5>3 months course</h5>
							<h5>Certificate ID: BBM3ZEFMK</h5>
							<p>
								<span>DigiSkills (Online) </span>
								<a target="_blank" href="https://digiskills.pk/verify/">Visit Site</a>
							</p>
						</div>
					</div>

				</div>

				<div class="mt-3 col-lg-5">

					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Video Editing</h2>
							<h5>3 months course</h5>
							<h5>Certificate ID: GRFJF5RMK</h5>
							<p>
								<span>DigiSkills (Online) </span>
								<a target="_blank" href="https://digiskills.pk/verify/">Visit Site</a>
							</p>
						</div>
					</div>

					<div class="resume-item">
						<div class="p-4 resume-item-content">
							<h2>Freelancing</h2>
							<h5>3 months course</h5>
							<h5>Certificate ID: XKXUZ7YMK</h5>
							<p>
								<span>DigiSkills (Online) </span>
								<a target="_blank" href="https://digiskills.pk/verify/">Visit Site</a>
							</p>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section> <!-- End Resume Section -->


	<!-- Services Section -->
	<div id="services" class="my-5 mx-auto justify-content-center mx-auto">
		
		<div class="section-title">
			<h2>Services</h2>
			<p>I provide the following services for my clients...</p>
		</div>

		<div class="row container mx-auto align-items-center">
			<div class="Image col-5">
				<img width="100%" src="media/images/features.png">
			</div>
			<div class="col-7 d-block">
				<div class="d-flex w-100 text-center">
					
					<a href="index.php#contact" class="ServiceBox"><p><i class="me-2 fa fa-arrow-right"></i> Web Development</p></a>

					<a href="index.php#contact" class="ServiceBox ms-4"><p><i class="me-2 fa fa-arrow-right"></i> E-commerce</p></a>

				</div>

				<div class="d-flex w-100 mt-4 text-center">

					<a href="index.php#contact" class="ServiceBox"><p><i class="me-2 fa fa-arrow-right"></i> Maintenance</p></a>

					<a href="index.php#contact" class="ServiceBox ms-4"><p><i class="me-2 fa fa-arrow-right"></i> Performance</p></a>

				</div>

				<div class="d-flex w-100 mt-4 text-center">
					
					<a href="index.php#contact" class="ServiceBox ms-4"><p><i class="me-2 fa fa-arrow-right"></i> Consultation</p></a>

					<a href="index.php#contact" class="ServiceBox ms-4"><p><i class="me-2 fa fa-arrow-right"></i> Security Audits</p></a>

				</div>

			</div>
		</div>

		<!-- <div class="row mx-auto container-fluid justify-content-center">

			<div class="col-sm-5">
				<div class="card ServicesCard">
					<div class="card-body">
						<div class="IconBox mb-3">
							<i class="fa fa-wordpress IconBox-Icon" aria-hidden="true"></i>
						</div>
						<h3 class="card-title fw-semibold fs-4 py-2">WordPress Developer</h3>
						<h5 class="card-text font-italic pt-1 pb-2">I can make stuuning websites by using Elementor. I have worked with theme, plugins and custom web templates.</h5>
						<a href="#" class="btn btn-primary fs-6 fw-lighter">Details</a>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="card ServicesCard">
					<div class="card-body">
						<div class="IconBox mb-3">
							<i class="fa fa-code IconBox-Icon" aria-hidden="true"></i>
						</div>
						<h3 class="card-title fw-semibold fs-4 py-2">Website Developer</h3>
						<h5 class="card-text font-italic text-secondary pt-1 pb-2">I use HTML, Css, JavaScript, Bootstrap and PHP to make a complete functioning website.</h5>
						<a href="#" class="btn btn-primary fs-6 fw-lighter">Details</a>
					</div>
				</div>
			</div>

		</div> --><!-- row ends here -->

		<!-- <div class="row mx-auto mt-4 container-fluid justify-content-center">

			<div class="col-sm-5">
				<div class="card ServicesCard">
					<div class="card-body">
						<div class="IconBox mb-3">
							<i class="fa fa-line-chart IconBox-Icon" aria-hidden="true"></i>
						</div>
						<h3 class="card-title fw-semibold fs-4 py-2">Search Engine Optimizer</h3>
						<h5 class="card-text font-italic text-secondary pt-1 pb-2">I can make an audit report and point out issues which are barrier against your website ranking.</h5>
						<a href="#" class="btn btn-primary fs-6 fw-lighter">Details</a>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="card ServicesCard">
					<div class="card-body">
						<div class="IconBox mb-3">
							<i class="fa fa-delicious IconBox-Icon" aria-hidden="true"></i>
						</div>
						<h3 class="card-title fw-semibold fs-4 py-2">Graphic Designer</h3>
						<h5 class="card-text font-italic text-secondary pt-1 pb-2">I have mostly worked in Canva for Poster Design, Logos, Video Animation and CV designing. </h5>
						<a href="#" class="btn btn-primary fs-6 fw-lighter">Details</a>
					</div>
				</div>
			</div>        

		</div> --><!-- row ends here -->

	</div><!-- services section ends here -->


	<!-- Skills Section -->
	<section id="skills" class="skills section-bg">
		<div class="container">

			<div class="section-title">
				<h2>Skills</h2>
				<p>I have following skills to serve IT Industry</p>
			</div>
			<!-- CUSTOM SKILLS -->
			<section id="SkillsSection" class="mx-auto text-center justify-content-center container">
				<div class="row justify-content-center">

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills Wordpress text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="Wordpress_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>Wordpress</h3>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills JavaScript text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="JavaScript_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>JavaScript</h3>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills PHP text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="PHP_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>PHP</h3>
						</div>
						
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills SQL text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="SQL_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>SQL</h3>
						</div>
						
					</div>

				</div>

				<div id="SecondRow" class="row mx-auto text-center justify-content-center">

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills HTML text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="HTML_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>HTML</h3>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills CSS text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="CSS_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>CSS</h3>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills Bootstrap text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="Bootstrap_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>Bootstrap</h3>
						</div>
						
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center">

						<div class="Myskills React text-center">
							<div class="outer">
								<div class="bg-light inner">
									<div class="fw-bold fs-1" id="React_number">0%</div>
								</div>
								<svg class="rounded-circle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="190px" height="190px">
									<defs>
										<linearGradient id="GradientColor">
											<stop offset="0%" stop-color="#e91e63" />
											<stop offset="100%" stop-color="#673ab7" />
										</linearGradient>
									</defs>
									<circle cx="95" cy="95" r="85" stroke-linecap="round" />
								</svg>
							</div>
							<h3>React</h3>
						</div>

					</div>

				</div>
			</section>
			<!-- CUSTOM SKILLS -->

		</div>
	</section><!-- End Skills Section -->

	<!-- Portfolio Section Slider -->
	<section id="portfolio" class="portfolio section-bg">
		<div class="section-title">
			<h2>Portfolio</h2>
			<p>Have a look at my portfolio and hire me if you are inspired.</p>
		</div>

		<div class="ag-format-container">
			<div class="ag-courses_box">

				<div class="ag-courses_item">
					<a href="EurasianStores.php" class="ag-courses-item_link">
						<div class="ag-courses-item_bg"></div>
						<div class="ag-courses-item_title">
							<div class="text-center">
								<img src="media/images/EurasianStores.png" class="rounded" alt="...">
							</div>
						</div>
						<div  class="mt-3 ag-courses-item_title">
							Eurasian Stores
						</div>
						<div class="mt-1 ag-courses-item_title fs-4">
							E-Commerce Website
						</div>
						<div class="my-3 ag-courses-item_date-box">
							<button type="button" class="btn btn-info">Details</button>
						</div>
					</a>
				</div>

				<div class="ag-courses_item">
					<a href="JauntSolutions.php" class="ag-courses-item_link">
						<div class="ag-courses-item_bg"></div>
						<div class="ag-courses-item_title">
							<div class="text-center">
								<img src="media/images/Jaunt-Solutions-Website.png" width="300px" height="200px" class="rounded" alt="...">
							</div>
						</div>
						<div class="mt-3 ag-courses-item_title">
							Jaunt Solutions
						</div>
						<div class="mt-1 ag-courses-item_title fs-4">
							Official Website
						</div>
						<div class="my-3 ag-courses-item_date-box">
							<button type="button" class="btn btn-info">Details</button>
						</div>
					</a>
				</div>

				<div class="ag-courses_item">
					<a href="MyersCollege.php" class="ag-courses-item_link">
						<div class="ag-courses-item_bg"></div>
						<div class="ag-courses-item_title">
							<div class="text-center">
								<img src="media/images/Myers-College-Website.png" width="300px" height="200px" class="rounded" alt="...">
							</div>
						</div>
						<div class="mt-3 ag-courses-item_title">
							Myers College
						</div>
						<div class="mt-1 ag-courses-item_title fs-4">
							Official Website
						</div>
						<div class="my-3 ag-courses-item_date-box">
							<button type="button" class="btn btn-info">Details</button>
						</div>
					</a>
				</div>

				<div class="ag-courses_item">
					<a href="PropertiesWebsite.php" class="ag-courses-item_link">
						<div class="ag-courses-item_bg"></div>
						<div class="ag-courses-item_title">
							<div class="text-center">
								<img src="media/images/PropertiesWebsite.png" width="300px" height="200px" class="rounded" alt="...">
							</div>
						</div>
						<div class="mt-3 ag-courses-item_title">
							Real Estate Website
						</div>
						<div class="mt-1 ag-courses-item_title fs-4">
							Property sale purchase
						</div>
						<div class="my-3 ag-courses-item_date-box">
							<button type="button" class="btn btn-info">Details</button>
						</div>
					</a>
				</div>

				<div class="ag-courses_item">
					<a href="#" class="ag-courses-item_link">
						<div class="ag-courses-item_bg"></div>
						<div class="ag-courses-item_title">
							<div class="text-center">
								<img src="media/images/EurasianStores.png" width="300px" height="200px" class="rounded" alt="...">
							</div>
						</div>
						<div class="mt-3 ag-courses-item_title">
							Eurasian Stores
						</div>
						<div class="mt-1 ag-courses-item_title fs-4">
							E-Commerce Website
						</div>
						<div class="my-3 ag-courses-item_date-box">
							<button type="button" class="btn btn-info">Details</button>
						</div>
					</a>
				</div>

				<div class="ag-courses_item">
					<a href="#" class="ag-courses-item_link">
						<div class="ag-courses-item_bg"></div>
						<div class="ag-courses-item_title">
							<div class="text-center">
								<img src="media/images/EurasianStores.png" width="300px" height="200px" class="rounded" alt="...">
							</div>
						</div>
						<div class="mt-3 ag-courses-item_title">
							Eurasian Stores
						</div>
						<div class="mt-1 ag-courses-item_title fs-4">
							E-Commerce Website
						</div>
						<div class="my-3 ag-courses-item_date-box">
							<button type="button" class="btn btn-info">Details</button>
						</div>
					</a>
				</div>

			</div>
		</div>

	</section><!-- End Portfolio Section Slider -->

	<!-- Contact Section -->
	<div id="contact" class="mt-5 contact-page">
		<section id="contact" class="contact section">

			<div class="container">

				<!-- Section Title -->
				<div class="container section-title">
					<h2>Contact me</h2>
					<p>Contact me which way you want!<br></p>
				</div><!-- End Section Title -->

				<div class="d-flex justify-content-center mx-auto my-4">

					<div class="d-block justify-content-center ms-5">
						<label class="fw-bold">Whatsapp</label><br>
						<a href="https://wa.link/jxjwvd" title="Whatsapp" class="btn btn-primary fs-3 p-2 "><i class="fa fs-3 px-3 fa-whatsapp"></i></a>
					</div>
					
					<div class="d-block justify-content-center ms-5">
						<label class="fw-bold">facebook</label><br>
						<a href="" title="facebook" class="btn btn-primary fs-3 p-2 "><i class="fa fs-3 px-3 fa-facebook"></i></a>
					</div>

					<div class="d-block justify-content-center ms-5">
						<label class="fw-bold">linkedin</label><br>
						<a href="https://www.linkedin.com/in/haseeb-ur-rehman-b99477268?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="linkedin" class="btn btn-primary fs-3 p-2 "><i class="fa fs-3 px-2 fa-linkedin"></i></a>
					</div>

				</div>

				<div class="mb-4">
					<iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div><!-- End Google Maps -->

				<div class="row gy-4">

					<div class="col-lg-4">
						<div class="info-item d-flex">
							<i class="fa fa-map"></i>
							<div>
								<h3>Address</h3>
								<p>Nishat Colony, Chakwal Punjab Pakistan</p>
							</div>
						</div><!-- End Info Item -->

						<div class="info-item d-flex">
							<i class="fa fa-phone"></i>
							<div>
								<h3>Call me</h3>
								<p>+92 336 8438235</p>
							</div>
						</div><!-- End Info Item -->

						<div class="info-item d-flex">
							<i class="fa fa-envelope"></i>
							<div>
								<h3>G-Email</h3>
								<p>haseeb24hours@gmail.com</p>
							</div>
						</div>

						<div class="info-item d-flex">
							<i class="fa fa-envelope"></i>
							<div>
								<h3>Outlook</h3>
								<p>haseebbinzia@outlook.com</p>
							</div>
						</div><!-- End Info Item -->

					</div>

					<div class="col-lg-8">
						<form action="forms/contact.php" method="post" class="php-email-form">
							<div class="row gy-4">

								<div class="col-md-6">
									<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
								</div>

								<div class="col-md-6 ">
									<input type="email" class="form-control" name="email" placeholder="Your Email" required="">
								</div>

								<div class="col-md-12">
									<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
								</div>

								<div class="col-md-12">
									<textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
								</div>

								<div class="col-md-12 text-center">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your message has been sent. Thank you!</div>

									<button type="submit">Send Message</button>
								</div>

							</div>
						</form>
					</div><!-- End Contact Form -->

				</div>

			</div>

		</section><!-- /Contact Section -->

	</div>


	<!-- calling footer -->
	<?php
	include 'includes/footer.php';
	?>

	<!-- calling JS files -->
	<?php
	include 'includes/js_links.php';
	?>
</body>

</html>