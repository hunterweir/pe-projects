<?php

	$name = "";

	if (isset($_POST["pushed"]) ) {

		if (isset($_POST["string"]) ) {
			$name = $_POST["string"];
		}	
	}
?>


<a href="?">Refresh</a>

<form method="POST">
	<div class='field'>
		<label> What is the input string?</label>
		<input type= "text" name='string' />
	</div>

	<button type='submit' name='pushed' /> Push me</button>
</form>


<?php if (!empty($name) ) {
 ?>
<output>
	<p> <?=$name?> has <?=strlen($name)?> characters </p>
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