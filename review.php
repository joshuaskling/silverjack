<?php

$deck = array();

for($i = 0; $i < 52; $i++) {
	$deck[] = $i;
}

shuffle($deck);
print_r($deck);

echo "<br /><br />";
$lastCard =  array_pop($deck);
$suitArray = array("clubs", "diamonds", "hearts", "spades");

echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/1.png' />";

$cardToDisplay = ($lastCard % 13) + 1;
echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";

/*
$prices = array(); //initializes an empty array
$prices = array(550, 200, 600);    

//echo $prices[0];


$prices[] = 100; //adds an item at the end of the array

array_push($prices, 200); //also adds item at the end

$prices[0] = 500; //replaces the value in index 0

print_r($prices); //displays all values in array

echo "<hr>";

for( $i = 0; $i < count($prices); $i++){ //count the size of array
	echo $prices[$i] . "<br />";
}

//Associative Arrays

$prices = array("Apple Watch"=>550, "iPad Mini"=>250); //initialize 
$prices["iPad Air"] = 600;

//echo $prices[0];  //throws an error, index "0" doesn't exist!

print_r($prices);

echo "<br />";


foreach ($prices as $item => $v) {
	
	echo $item . " $" . $v . "<br />";
}

echo "Subtotal: " . array_sum($prices);



echo "<br /><br /> Ordering Values<br />";

array_values($prices);

asort($prices);
ksort($prices);

foreach ($prices as $item => $v) {
	
	echo $item . " $" . $v . "<br />";
}
*/
?>