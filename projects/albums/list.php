<?php include ('album-data.php'); ?>


<h1>Albums</h1>


<ul>
	<?php foreach ($album_data as $album) { ?>
		<?php 
			$price = "$" . number_format($album["price"], 2, ".", ",");
		?>
	<li class='album'> 
		<album-card>
			<h2 class='artist'><?=$album["artist"]?></h2>
			<h3 class='title'> <?=$album["title"]?></h3>
			<h4 class='year'><?=$album["year"]?></h4>
			<h5 class='price'><?=$price?></h5>
			<a href='?page=detail&album=<?=$album["id"]?>'>Find out more!</a>
		</album-card>
	</li>
	<?php } ?>
</ul>

