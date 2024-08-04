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
				<h2 class="text-uppercase">Myers College</h2>
				<p>Have a look at my portfolio and hire me if you are inspired.</p>
			</div>

			<!--  -->
			<div class="d-flex container mx-auto justify-content-center">
				<div class="MediaSection mx-auto">
					<div class="d-flex">
					<video controls>
						<source src="media/vidoes/v1.mp4" type="video/mp4">
						<source src="mov_bbb.ogg" type="video/ogg">
					</video>
					<div class="ms-5 w-50 SideText">
						<h3>Introduction</h3>
						<p>Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque</p>
						<div class="d-flex my-2 align-items-end">
							<h3>Category</h3>
							<h5 class="ms-3">Autem ipsum nam</h5>
						</div>
						<div class="d-flex my-2 align-items-end">
							<h3>Skills</h3>
							<h5 class="ms-3">Autem ipsum nam Autem ipsum nam</h5>
						</div>
						<div class="d-flex my-2 align-items-end">
							<h3>Status</h3>
							<h5 class="ms-3">nam Autem ipsum nam</h5>
						</div>
						<div class="d-flex my-2 align-items-end">
							<h3>Project URL</h3>
							<h5 class="ms-3">nam Autem ipsum nam</h5>
						</div>
					</div>
					</div>
					<div class="row mt-4">
						<div class="col-4">
							<div class="text-center">
								<img width="320" height="320" src="media/images/Myers-College-Website.png" class="rounded" alt="...">
							</div>
						</div>
						<div class="col-4">
							<div class="text-center">
								<img width="320" height="320" src="media/images/Myers-College-Website.png" class="rounded" alt="...">
							</div>
						</div>
						<div class="col-4">
							<div class="text-center">
								<img width="320" height="320" src="media/images/Myers-College-Website.png" class="rounded" alt="...">
							</div>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-4">
							<div class="text-center">
								<img width="320" height="320" src="media/images/Myers-College-Website.png" class="rounded" alt="...">
							</div>
						</div>
						<div class="col-4">
							<div class="text-center">
								<img width="320" height="320" src="media/images/Myers-College-Website.png" class="rounded" alt="...">
							</div>
						</div>
						<div class="col-4">
							<div class="text-center">
								<img width="320" height="320" src="media/images/Myers-College-Website.png" class="rounded" alt="...">
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