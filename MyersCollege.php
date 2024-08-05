<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Structure</title>

	<link rel="stylesheet" type="text/css" href="css/ProjectsPage.css">

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

		<section id="portfolio" class="portfolio section-bg">
			<div class="section-title">
				<h2>MYERS COLLEGE OFFICIAL WEBSITE</h2>
			</div>

			<!--  -->
			<div class="d-flex container mx-auto justify-content-center">
				<div class="MediaSection mx-auto">
					<div class="VideoSideText mb-5">
						<video controls>
							<source src="media/vidoes/myers01.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
						</video>
						<div class="SideText">
							<h3>Introduction</h3>
							<p>Myer's College is a university-preparatory school located at Chakwal, Punjab, in Pakistan. Myer's College was founded in 1999, and the first Myer's College student appeared in Cambridge International Examinations in 2005 and made the headlines with securing straight A's in all O Level subjects. Ever since, the college students have not looked back.</p>
							<div class="d-flex my-2">
								<h3>Category</h3>
								<p class="ms-3 fs-5">Official Website</p>
							</div>
							<div class="d-flex my-2">
								<h3>Skills</h3>
								<p class="ms-3 fs-5">HTML CSS Javascript PHP SQL</p>
							</div>
							<div class="d-flex my-2">
								<h3>Status</h3>
								<p class="ms-3 fs-5">Live</p>
							</div>
							<div class="d-flex my-2">
								<h3>Project URL</h3>
								<a href="https://myers.edu.pk" target="_blank" class="ms-3 fs-5 text-dark">myers.edu.pk</a>
							</div>
						</div>
					</div>
					<div class="section-title">
						<h2>SCREEN SHOTS</h2>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/myers01.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/myers02.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/myers03.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/myers04.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/myers05.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/myers06.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</section>





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