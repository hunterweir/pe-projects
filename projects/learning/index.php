

<html>
	<head>
		<style>
			h1{
				color: red;
			}
			h2 {
				color: green;
			}
		</style>
	</head>

	<body>
		<header>
			Heads up!
		</header>


		<h1> PHP Practice</h1>

		
		<?php

		$happy = true;
		$days = 30;
		$rays = 30;

		if ($happy) {
			echo "The world is okay.";
		} else {
			echo "Everything is wrong.";
		}

		if ($days == true) {
			echo " This must be Sept/April/June/Nov!";
		} else {
			echo " Guess this month has 31 days.";
		}

		if ($rays > $days) {
			echo " Rays are bigger than days.";
		} elseif ($rays == $days) {
			echo " Rays are equal to days.";	
		} else {
			echo " Rays are smaller than days.";
		}


		?>









		<p>_</p>
		<p>_</p>
		<p>_</p>

		<?php 

		$personOne = "Hunter";
		$personTwo = "Grace";
		$hunter = 1;
		$grace = 1;
		$total = $hunter * $grace;
		$link = "https://www.youtube.com/watch?v=ax7krBKzmVI";

		echo "<p>" . $personOne . "(" . $hunter . ") and " . $personTwo . "(" . $grace . ") = " . $total . "</p>";

		echo "<a href>" . $link . "</a>";
		
		?>




<?php


$price = 34;

$tax = $price * .10;

$total = $price + $tax;

echo "<h1>" . $total . "</h1>";

$percent = 30;

echo "<h2> Percent tip: " . $percent . "%</h2>";

if ($percent > 20) {
	echo "Wowza what a tippa!"; 
}

$tip = $total * ($percent/100);

$total = $total + $tip;

echo "<p>The total is: $" . $total . "</p>";

?>

<p>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem <?php echo $total; ?> Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem <?=$total?> Lorem Lorem Lorem</p>





	</body>
</html>