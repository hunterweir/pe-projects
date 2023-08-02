<?php

$projects = [
	[
		"name" => "This is an 'article grid' module. And this is it's heading",
		"desc" => "Again, we totally just made that up. It's a box with boxes in it.",
		"url" => "index.php",
	],
	[
		"name" => "This is an article card",
		"desc" => "It's basically just a mini call to action, right?",
		"url" => "about.php",
	],
	[
		"name" => "This is the title of an article",
		"desc" => "Here's a little info to help you understand if this is an article you want to read.",
		"url" => "contact.php",
	],
	[
		"name" => "This is the title of an article",
		"desc" => "Here's a little info to help you understand if this is an article you want to read.",
		"url" => "link here",
	],
	[
		"name" => "This is the title of an article",
		"desc" => "Here's a little info to help you understand if this is an article you want to read.",
		"url" => "link here",
	],
	[
		"name" => "This is the title of an article",
		"desc" => "Here's a little info to help you understand if this is an article you want to read.",
		"url" => "link here",
	],
	[
		"name" => "This is the title of an article",
		"desc" => "Here's a little info to help you understand if this is an article you want to read.",
		"url" => "link here",
	],
];

?>

<project-list>
	<ul> 
		<?php foreach ($projects as $pjct) { ?>

			<li>
				<project-card>
					<h2 class= 'attention-voice'><?=$pjct["name"]?></h1>
					<p><?=$pjct["desc"]?></p>
					<p><?=$pjct["url"]?><p>
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