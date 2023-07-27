<?php include('components/album-data.php'); ?>

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

	
			<detail-card>
			
				<picture>
					<img src="<?=$detail['pic']?>" alt='$todo'>
				</picture>	

				<h1 class='loud-voice'><?=$detail["artist"]?>- <?=$detail["title"]?></h1>

				
				<p> This album came out in <?=$detail["year"]?> and you can go back to the previous page to see the price for technical reasons I can't disclose!!!</p>
			</detail-card>

<?php } else { ?>

	<h1>No album found.</h1>

	<p>Go here for available albums <a href="?page=list">here</a></p>

<?php } ?>