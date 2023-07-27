<?php
	if ( isset($_POST["add"]) ) {
		echo "added";
	}
?>


<h1 class='loud-voice'>Create</h1>

<form method='POST'>
	<field>
		<label>Type</label>
		<input>
	</field>

	<field>
		<label>Range</label>
		<input type='range' min='1' max='5'>
	</field>

	<field>
		<label>Price</label>
		<input type='number'>
	</field>

	<button type='submit' name='add'>
		Add Album
	</button>
</form>


