<?php include ('components/album-data.php'); ?>

<h1 class="loud-voice">Albums</h1>

	<album-list>		
		<ul>
			<?php foreach ($album_data as $album) { ?>
			<?php 
				$price = "$" . number_format($album["price"], 2, ".", ",");
			?>
				<li class='album'> 
					<album-card>
						<picture>
							<img src="<?=$album['pic']?>">

						</picture>
						<h2 class='artist'><?=$album["artist"]?>- <cite><?=$album["title"]?></cite></h2>
						<p class='price'><?=$price?></p>
						<a href='?page=detail&album=<?=$album["id"]?>'>Find out more!</a>
					</album-card>
				</li>
			<?php } ?>
		</ul>
	</album-list>

<style>
	album-list {
		display: block;
	}

	album-list ul {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
		gap: 20px;
	}
</style>