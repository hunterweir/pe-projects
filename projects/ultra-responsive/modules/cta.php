
<?php

$cards = [
	[
		"name" => "This module is a 'call to action'",
		"desc" => "These aren't names you should memorize. We're just making them up. Sometimes things get called something so many times, that it sticks. This is a pretty common pattern.",
		"url" => "link here",
	],
];

?>


	<ul> 
		<?php foreach ($cards as $card) { ?>

			<li>
				<project-card>
					<h1><?=$card["name"]?></h1>
					<p><?=$card["desc"]?></p>
					<p><?=$card["url"]?><p>
				</project-card>
			</li>

		<?php } ?>
	</ul>

