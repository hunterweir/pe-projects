<?php

$projects = [
	[
		"name" => "One",
		"url" => "index.php",
	],
	[
		"name" => "Two",
		"url" => "about.php",
	],
	[
		"name" => "Three",
		"url" => "contact.php",
	],
	[
		"name" => "Four",
		"url" => "goals.php",
	],
];

?>

<project-list>
	<ul> 
		<?php foreach ($projects as $pjct) { ?>

			<li>
				<project-card>
					<?=$pjct["name"]?>
				</project-card>
			</li>

		<?php } ?>
	</ul>
</project-list>

<style>
	project-list {
		display: block;
	}

	project-list ul {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
		gap: 20px;
	}
</style>