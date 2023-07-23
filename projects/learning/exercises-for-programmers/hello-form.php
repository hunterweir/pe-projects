<?php
	
	$name = "";

	if ( isset($_POST["submitted"]) ) {

		if (isset($_POST["val"]) ) {
			$name = $_POST["val"];
		}
	}
?>


<a href="?">Refresh</a>

<form method='POST'>
	<div class='field'>
		<label>What is your name?</label>
		<input type='text' name='val' />
	</div>

	<button type='submit' name='submitted'/>Submit</button>
</form>


<?php if (!empty($name) ) { ?>
<output>
	<p> Hello, <?=$name?>, nice to meet you! </p>
</output>
<?php } ?>


<style>
	form {
		padding: 30px 10;
		Border: 1px solid black;
		margin-top: 20px;
		max-width: 400px;
	}

	form .field{
		display: grid;
		gap: 4px;
	}

	form button {
		margin-top: 10px;
	}

	output {
		display: block;
		background-color: lightgrey;
		padding: 10px;
		max-width: 400px;
	}

</style>