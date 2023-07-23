<header style='font-size: 40px'>
<?php

	function monsterGenerator($name, $age, $favFood) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favFood" => $favFood,
		];
		return $monster;
	}
	
	$crunchy = monsterGenerator("Crunchy", 6, "pork rinds");
	$crusty = monsterGenerator("Crusty", 6, "old bread");
	$dusty = monsterGenerator("Dusty", 6, "off-brand cola");
	$chunky = monsterGenerator("Chunky", 6, "corn on the cob");
	$chubby = monsterGenerator("Chubby", 6, "marshmallow");

	$monsters = [$crunchy, $crusty, $dusty, $chunky, $chubby];

	?>

	<?php foreach ($monsters as $m) { ?>
	<li class='monster'>
	<monster-card>
		
		<h2 class='name'><?=$m["name"]?></h2>

		<p class='age'><?=$m["age"]?></p>
		<p class='favFood'><?=$m["favFood"]?></p>	
	</monster-card>
	</li>
<?php } ?>

?>
</header>

<?php include ('styles.php'); ?>
<?php include('monster-factory.php'); ?>

<ol class='monster-list'>

<?php foreach ($monsters as $monster) { ?>
	<?php
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "My favorite food is " . $monster["favFood"] . " and I am " . $monster["age"] . " years old.";
		$pic= $monster["pic"];
		$adopted = $monster["adopted"];

		//set human readable status message
		if ($adopted == 1) {
			$adopted = "Adopted!";
		} else {
			$adopted = "Needs a home!";
		}
	?>
	
	<li class='monster'>
	<monster-card id='<?=$id?>'>
		<picture class='pic'>   
			<img src='<?=$pic?>' width='200'>
		</picture>
		<h2 class='name'><?=$name?></h2>

		<p class='story'><?=$story?></p>
		<p class='adopted'><?=$adopted?></p>	
	</monster-card>
</li>
<?php } ?>
</ol>

