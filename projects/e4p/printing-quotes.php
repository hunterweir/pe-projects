<?php

	$quote= "";
	$author= "";
	
	if (isset($_POST["mashed"]) ) {

		if (isset($_POST["quote"]) ) {
			$quote = $_POST["quote"];
		}

		if (isset($_POST["author"]) ) {
			$author = $_POST["author"];
		}
	}

?>

<a href="?">Refresh</a>

<form method="POST">
	<div class='field'>
		<label> What is the quote?</label>
		<input type="quote" name="quote" />
	</div>

	<div class='field'>
		<label> Who said it?</label>
		<input type="text" name="author" />
	</div>

	<button type='submit' name='mashed' /> Click me</button>
</form>

<?php if (!empty($quote) ) 
	if (!empty($author) ) {
 ?>
<output>
	<p> <?=$author?> says, "<?=$quote?>."</p>
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

