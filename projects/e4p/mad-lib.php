<?php

	$noun = "";
	$verb = "";
	$adjective = "";
	$adverb = "";


	if (isset($_POST["pressed"]) ) {

		if (isset($_POST["noun"]) ) {
			$noun = $_POST["noun"];
		}	
	
		if (isset($_POST["verb"]) ) {
			$verb = $_POST["verb"];
		}

		if (isset($_POST["adjective"]) ) {
			$adjective = $_POST["adjective"];
		}

		if (isset($_POST["adverb"]) ) {
			$adverb = $_POST["adverb"];
		}
	}
?>


<a href="?">Refresh</a>

<form method="POST">
	<div class='field'>
		<label> Enter a noun</label>
		<input type= "text" name='noun' />
	</div>

	<div class='field'>
		<label> Enter a verb</label>
		<input type= "text" name='verb' />
	</div>

	<div class='field'>
		<label> Enter a adjective</label>
		<input type= "text" name='adjective' />
	</div>

	<div class='field'>
		<label> Enter a adverb</label>
		<input type= "text" name='adverb' />
	</div>

	<button type='submit' name='pressed' /> Push me</button>
</form>


<?php 	if (!empty($noun) ) 
		if (!empty($verb) ) 
		if (!empty($adjective) ) 
		if (!empty($adverb) ) {
 ?>
<output>
	<p> Do you <?=$verb?> your <?=$adjective?> <?=$noun?> <?=$adverb?>? That's hilarious! </p>
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

	div + div {
		margin-top: 10px;
	}

</style>