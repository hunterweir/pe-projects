<?php


$monster = [

	"id" => 10,
	"name" => "Rex",
	"favFood" => "pizza",
	"age" => 2,
	"adopted" => false,
	"pic" => "images/codey.jpg",
];

$dolphin = [

	"id" => 11,
	"name" => "Charles",
	"favFood" => "pasta",
	"age" => 3,
	"adopted" => true,
	"pic" => "images/fragoo.jpg",
];

$vampire = [

	"id" => 12,
	"name" => "Sandy",
	"favFood" => "candy",
	"age" => 4,
	"adopted" => false,
	"pic" => "images/limabean.jpg",
];

$creatures= [$monster, $dolphin, $vampire];

echo "<ul>";

foreach ($creatures as $creature) {
	$id = $creature["id"];
	$name = $creature["name"];
	$story = "My favorite food is " . $creature["favFood"] . " and I am " . $creature["age"] . " years old.";
	$pic= $creature["pic"];
	$adopted = $creature["adopted"];

	//set human readable status message
	if ($adopted == 1) {
		$adopted = "Adopted!";
	} else {
		$adopted = "Needs a home!";
	}
	
	

echo "<li class='creature'>";

echo 
	"<creature-card id='" . $id . "'>" .
		  
			"<img src='" . $pic . "' width='200'>" .
		"<h2 class='name'>" . $name . "</h2>" .

		"<p class='story'>" . $story . "</p>" .
		"<p class='status'>" . $adopted . "</p>" .
	
	"</creature-card>";

echo "</li>";

}

echo "</ul>";

?>