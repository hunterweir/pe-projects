
<!DOCTYPE html>

<?php
	/* router */
	$page = null;
	if (isset($_GET['page']) ){
		$page = $_GET['page']; // url?page=string
	} else {
		$page = "home";
	}
?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<!-- Add meta tags as practice? -->
	</head>

	<body>
		<header>
		<?php include('site-menu.php');?>
		</header>

		<main>
			<?php
				if($page == 'home') {
					include ('home.php');
				}
				if ($page == 'details') {
					include ('details.php');
				}
			?>
		</main>
	</body>
</html>
		

	
