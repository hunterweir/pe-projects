<!doctype html>

<html lang='en'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=divice-width, initial-scale=1'>

		<title>Mockup to Code Challenge</title>
		<meta name='description' content='Mockup to code challenge'>
		<meta property='og:image' content='Can you turn a mockup into code?'>

		<link rel='stylesheet' href="styles/site.css">
	</head>

	<body>

		<header id="top">	
			<inner-column>

				<?php include ('modules/mast-head/template.php'); ?>
			</inner-column>
		</header>

	<main>
		<section class='welcome' id='welcome'>
			<inner-column>

				<?php include('modules/graphic-diptych/template.php'); ?>

			</inner-column>
			</section>


			<section class='video' id='video'>
			<inner-column>

				<?php include('modules/video/template.php'); ?>

			</inner-column>
			</section>


			<section class='numbers' id='numbers'>
			<inner-column>

				<?php include('modules/numbers/template.php'); ?>

			</inner-column>
			</section>


			<section class='reviews' id='reviews'>
			<inner-column>

				<?php include('modules/reviews/template.php'); ?>

			</inner-column>
			</section>

			<section class='get-involved' id='get-involved'>
			<inner-column>

				<?php include('modules/call-to-action/template.php'); ?>

			</inner-column>
			</section>

			<section class='faq' id='faq'>
			<inner-column>

				<?php include('modules/faq/template.php'); ?>

			</inner-column>
			</section>

		</main>


		<footer>
		<inner-column>
			
			<?php include('footer.php'); ?>

		</inner-column>
		</footer>

	</body>

</html>