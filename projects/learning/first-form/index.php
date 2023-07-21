<style>

	form{
		max-width: 400px;
	}
	.field {
		display: flex;
		flex-direction: column; 
	}
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}
	button[type='submit'], .field + .field {
		margin-top: 10px;
	}

	.feedback {
		color: green;
	}
</style>


<?php

	$first = 0;
	$second = 0;
	
	if ( isset($_POST["submitted"]) ) {
		
		if ( isset($_POST["first"])) {
			if ($_POST['first'] >= 0 ) {
			$first = $_POST["first"];
			}
		}
		if ( isset($_POST["second"])) {
			$second = $_POST["second"];
		}

		$total = floatval($first) * floatval($second); 

		echo "<p class='feedback'>$total</p>";
	}

?>

<form method='POST'>

	<p>Enter some numbers!</p>

	<div class='field'>
		<label>First Number</label>
		<input type='number' name='first' value='<?=$first?>'>
	</div>

	<div class='field'>
		<label>Second Number</label>
		<input type='number' name='second' value='<?=$second?>'>
	</div>


	<button type='submit' name='submitted'>Push here</button>

</form>