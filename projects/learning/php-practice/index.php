 <!-- 

 	comment -->

 <?php 

/* Hello */

$guests= 4;
$people= $guests + 1; // Including host
$berries = 15;
$priceBox= 25;
$boxAmt = 26;

// 26 berries per box
// how many boxes will you need
// what is the price per box
// what is the total

$total= $berries * $people;
$boxTotal = $total / $boxAmt;

$condition = $boxTotal < 3;
if ($condition == true) {
	$boxTotal = 3;  
}

$message= "Whoa, I need " . $total . " berries for my " . $guests . " guests! And don't forget the host. That'll be " . $people . " people in total. If there are " . $boxAmt . " berries per box, we will need " . $boxTotal . " boxes.";

echo $message; 
