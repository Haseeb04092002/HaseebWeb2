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
				<h2>EURASIAN STORES</h2>
			</div>

			<!--  -->
			<div class="d-flex container mx-auto justify-content-center">
				<div class="MediaSection mx-auto">
					<div class="VideoSideText mb-5">
						<video controls>
							<source src="media/vidoes/eurasian01.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
						</video>
						<div class="SideText">
							<h3>Introduction</h3>
							<p>Eurasian Stores is an E-Commerce website developed in Wordpress CMS. This is a Multi-vendor e-commerce store supporting multiple shop keepers / vendors to populate thier products, make commissions, calculate taxes, view sale analytics and much more.</p>
							<div class="d-flex my-2">
								<h3>Category</h3>
								<p class="ms-3 fs-5">E-Commerce Website</p>
							</div>
							<div class="d-flex my-2">
								<h3>Skills</h3>
								<p class="ms-3 fs-5">Wordpress CMS</p>
							</div>
							<div class="d-flex my-2">
								<h3>Status</h3>
								<p class="ms-3 fs-5">Under development</p>
							</div>
							<div class="d-flex my-2">
								<h3>Project URL</h3>
								<a href="http://eurasian.jauntsolutions.com/" target="_blank" class="ms-3 fs-5 text-dark">eurasian.jauntsolutions.com</a>
							</div>
						</div>
					</div>
					<div class="section-title">
						<h2>SCREEN SHOTS</h2>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/eurasian01.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/eurasian02.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/eurasian03.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/eurasian04.png" class="rounded ProjectImage" alt="...">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/eurasian05.png" class="rounded ProjectImage" alt="...">
							</div>
						</div><!-- 
						<div class="col-lg-4">
							<div class="text-center">
								<img src="media/images/EurasianStores.png" class="rounded ProjectImage" alt="...">
							</div>
						</div> -->
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