<?php include('album-data.php'); ?>

<?php 
	if ( isset($_GET["album"]) ) {
		$this_album_id = $_GET["album"];
	}

	

	foreach ($album_data as $album) {
		if ($this_album_id == $album["id"] ) {
			$detail = $album;
		} 
	}
?>

<?php if ( isset($detail) ) { ?>


	<h1><?=$detail["artist"]?>- <?=$detail["title"]?></h1>

	<picutre>
		<img src="<?=$detail['pic']?>" alt='$todo'>

	<p> This album came out in <?=$detail["year"]?> and you can own it now for the low low price of <?=$detail["price"]?>!!!</p>

<?php } else { ?>

	<h1>No album found.</h1>

	<p>Go here for available albums <a href="?page=list">here</a></p>

<?php } ?>