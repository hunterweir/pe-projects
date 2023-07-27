<?php
	if ( isset($_POST["add"]) ) {
		echo "added";
	}
?>


<h1 class='loud-voice'>Create</h1>

<form method='POST'>
	<field>
		<label>ID</label>
		<input type='number' name='id' required>
	</field>

	<field>
		<label>Artist</label>
		<input type='text' name='artist' required>
	</field>

	<field>
		<label>Album</label>
		<input type='text' name='text' required>
	</field>

	<field>
		<label>Year</label>
		<input type='number' name='year' required>
	</field>

	<field>
		<label>Price</label>
		<input type='number' name='price' required>
	</field>

	<field>
		<label>Picture</label>
		<input type='text' name='pic' required>
	</field>

	<button type='submit' name='add'>
		Add Album
	</button>
</form>



