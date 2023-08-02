
<?php

	$year = 0;
	$artist = "";
	$album = "";

	$hasYear = false;
	$hasArtist = false;
	$hasAlbum = false;

	$yearError = false;
	$artistError = false;
	$albumError = false;

	if ( isset($_POST["add"]) ) {
		
		if ( isset($_POST["year"]) ) {
			$year = $_POST["year"];

		if ( intval($year) > 0 )	{
			$hasYear = true;
		} else {
			$yearError = "Please enter a year.";
		}
	}
	
	if ( isset($_POST["artist"]) ) {
			$artist = $_POST["artist"];

		if ( strlen($artist) > 0 )	{
			$hasArtist = true;
		} else {
			$artistError = "Please enter an artist.";
		}
	}

	if ( isset($_POST["album"]) ) {
			$album = $_POST["album"];

		if ( strlen($album) > 0 )	{
			$hasAlbum = true;
		} else {
			$albumError = "Please enter an album.";
		}
	}

	if ($hasYear && $hasArtist && $hasAlbum) {
		echo "Submitted";
	}

	}
?>


<section>
	<inner-column>

<h1 class='loud-voice'>Create</h1>

<form method='POST'>
	<field>
		<label>Year</label>
		<input type='number' name='year' value='<?=$year?>'>
		<?php if ($yearError) { ?>
			<p class='error'><?=$yearError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Artist</label>
		<input type='text' name='artist' value='<?=$artist?>'>
		<?php if ($artistError) { ?>
			<p class='error'><?=$artistError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Album</label>
		<input type='text' name='album' value='<?=$album?>'>
		<?php if ($albumError) { ?>
			<p class='error'><?=$albumError?></p>
		<?php } ?>
	</field>

<!--This is all too much, save for later
	<field>
		<label>Year</label>
		<input type='number' name='year'>
	</field>

	<field>
		<label>Price</label>
		<input type='number' name='price'>
	</field>

	<field>
		<label>Picture</label>
		<input type='text' name='pic'>
	</field>
-->
	<button type='submit' name='add'>
		Add Album
	</button>
</form>


