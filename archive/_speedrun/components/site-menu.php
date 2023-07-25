<?php

$projects = [
	[
		"name" => "home",
		"url" => "index.php",
	],
	[
		"name" => "about",
		"url" => "about.php",
	],
	[
		"name" => "contact",
		"url" => "contact.php",
	],
	[
		"name" => "goals",
		"url" => "goals.php",
	],
];

?>

<nav class='site-menu'>
	<ul> 
		<?php foreach ($projects as $pjct) { ?>

			<li>
					<?=$pjct["name"]?>
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