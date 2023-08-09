
<?php include ('data/project-data.php'); ?>

<projects-intro>
	<heading>
		<h2 class='attention-voice'>Recent Projects</h2>

		<p>See above.</p>
	</heading>

	<project-grid>
		<ul class='project-list'>

			<?php foreach ($projects as $project) { ?>
				<li class='project'>
					<?php include('modules/project-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</project-grid>
</projects-intro>
