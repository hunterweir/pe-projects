
<?php
	$heading = $project['heading'];
	$description = $project['description'];
	$thumbnail = $project['thumbnail'];
?>

<project class='project-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Call to action</a>
	</text-content>
</project>
