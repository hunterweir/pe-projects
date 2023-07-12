<?php

$myStuff = [1, "Taco", true, false, "Hunter", "Grace"];

$favorite_thing = $myStuff[5];

echo "<section class='things-i-like'>";
echo "<p>";
echo "My favorite things are ";

$dog = [
	
	"id" => 120,
	"name" => "Boots",
	"alive" => true,
	"breed" => ["corgi", "mutt"],
];

echo $dog["name"];

echo " and ";

echo $favorite_thing;

echo "(s).";

echo "</section>";

?>

<p> My fav thing is <?=$favorite_thing?>.</p>

<p> My fav dog is <?=$dog["name"]?>.</p>


<?php

$candy = [2, "Twix", false, "M&M's", "Skittles", "chocolate"];

$favoriteSweet = $candy[5];

echo "My favorite things are ";
echo $favoriteSweet;
echo " and ";

$drink = [

	"state" => ["liquid", "wet"],
	"name" => "water",
	"food" => false,
	"amount" => 1,
];


echo $drink["name"];

echo ".";

?>

<p> My fav treats are <?=$favoriteSweet?> and <?=$drink['name']?>.</p>

