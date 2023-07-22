<?php

$inputString = "";

//input?
if ( isset($_POST) ) {
	$inputString = $_POST["submitted"];
}

?>

<a href="?">Refresh</a>

<form method="POST">
	<div class='field'>
		<label for='s1'>Add a string</label>
	<input 
		id="s1"
		type="text" 
		name="myString" 
	/>
	</div>

	<button type='submit' name='submitted'>Submit</button>
</form>

<?php if (!empty($inputString) ) { ?>
<output>
	<?=$inputString?>
</output>
<?php } ?>


<style>
	form {
		padding: 40px 10;
		border: 1px solid black;
		margin-top: 30px;
		max-width: 300px;
	}

	form .field {
		display: grid;
		gap: 4px;
	}

	form button {
		margin-top: 10px;
	}
	
	output {
		display: block;
		background-color: lightgreen;
		padding: 10px;
	}
</style>