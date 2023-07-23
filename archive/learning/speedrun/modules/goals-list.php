<?php

$goalSections = [
	[
		"name" => "Emd of week",
		"url" => "index.php",
		"goals" => [
			"I am back on track, and feel caught up with where I am supposed to be at this point in the course."
		],
	],
	[
		"name" => "End of month",
		"url" => "about.php",
		"goals" => ["I am starting to feel a sense of reward tied directly to the effort and challenge of completing my coursework, rather than the outcome."
	],
	],
	[
		"name" => "End of course",
		"url" => "contact.php",
		"goals" => ["I am intrinsically motivated to hone my craft, to train myself to manifest my vision. I grasp the fundamentals of how to thrive in web development, and know which direction I want to head and what skills I need to build upon to manifest my 5 year vision. I am becoming skillful in approaching everything from a project-based framework."
	],
	],
	[
		"name" => "5 years",
		"url" => "goals.php",
		"goals" => ["I am a pioneer in the frontier of web-based education. I combine my passion for healthy human development with my knowledge of goal-oriented web development to revolutionize education, creating a cascade towards a healthy civilization."
	],
	],
];

?>

<goals-list>
	
	<?php foreach ($goalSections as $section) { ?>
		<section>
			<h2 class="attention-voice">
				<?=$section["name"]?>
			</h2>

			<ul class='goal-list'>
			<?php foreach ($section["goals"] as $goal) { ?>

				<li class='goal'>
					<p><?=$goal?></p>
				</li>

			<?php } ?>
			</ul> 
		</section>
	<?php } ?>
	
</goals-list>

<style>

	goals-list {
		display: grid;
		gap: 30px;
		padding: 30px 0;
	}

	goals-list :is(li + li);{
		margin-top: 1em;
	}

	goals-list :is(h2 + ul);{
		margin-top: 1em;
	}

</style>