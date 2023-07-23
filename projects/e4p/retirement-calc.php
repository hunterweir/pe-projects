<?php

	$current = 0;
	$retire = 0;
	$currentyear = date("Y");


	if (isset($_POST["submitted"]) ) {

		if (isset($_POST["current"]) ) {
			$current = $_POST["current"];
		}	
	
		if (isset($_POST["retire"]) ) {
			$retire = $_POST["retire"];
		}

		if ($current > 0){
	
		$left = floatval($retire) - floatval($current);

		$futureyear = floatval($currentyear) + floatval($left);
	}
}
?>


<a href="?">Refresh</a>

<form method="POST">
	<div class='field'>
		<label> What is your current age?</label>
		<input type= "text" name='current' />
	</div>

	<div class='field'>
		<label> At what age would you like to retire?</label>
		<input type= "text" name='retire' />
	</div>

	<button type='submit' name='submitted' /> Push me</button>
</form>


<?php 	if ($current > 0) 
		if ($retire > 0){  	
 ?>
<output>
	<ul>
		<li> You have <?=$left?> years left until you retire. </li>
		<li> It's <?=$currentyear?>, so you can retire in <?=$futureyear?>.</li>
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