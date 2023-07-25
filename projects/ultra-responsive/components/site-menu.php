<?php

$links = [
	[
		"name" => "Home",
		"url" => "../index.php",
	],
	[
		"name" => "About",
		"url" => "../about.php",
	],
	[
		"name" => "Contact",
		"url" => "../contact.php",
	],
];

?>

<nav class='site-menu'>
	<ul> 
		<?php foreach ($links as $link) { ?>

			<li>
					<?=$link["name"]?>
			</li>

		<?php } ?>
	</ul>
</nav>

<style>
	
	.site-menu ul {
		display: flex;
		flex-direction: row;
		gap: 20px;
	}
	
</style>