<?php

	$first = 0;
	$second = 0;
	

	if (isset($_POST["submitted"]) ) {

		if (isset($_POST["first"]) ) {
			$first = $_POST["first"];
		}	
	
		if (isset($_POST["second"]) ) {
			$second = $_POST["second"];
		}

		if ($second > 0){
		$add = floatval($first) + floatval($second);
	
		$sub = floatval($first) - floatval($second);

		$multi = floatval($first) * floatval($second);

		$div = floatval($first) / floatval($second);
	}
}
?>


<a href="?">Refresh</a>

<form method="POST">
	<div class='field'>
		<label> What is the first number?</label>
		<input type= "text" name='first' />
	</div>

	<div class='field'>
		<label> What is the second number?</label>
		<input type= "text" name='second' />
	</div>

	<button type='submit' name='submitted' /> Push me</button>
</form>


<?php 	if ($first > 0) 
		if ($second > 0){  	
 ?>
<output>
	<ul>
		<li> <?=$first?> + <?=$second?> = <?=$add?> </li>
		<li> <?=$first?> - <?=$second?> = <?=$sub?> </li>
		<li> <?=$first?> * <?=$second?> = <?=$multi?> </li>
		<li> <?=$first?> / <?=$second?> = <?=$div?> </li>
	</ul>
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

	form button, div + div {
		margin-top: 10px;
	}

	output {
		display: block;
		background-color: lightgrey;
		padding: 10px;
		max-width: 400px;
	}

	output ul {
		list-style-type: none;
		line-height: 1.3em;
	}

	

</style>