<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Silverjack</title>

		<link href="css/styles.css" rel="stylesheet" />
        <style>

        </style>

    </head>

    <body>
<?php

$deck = array();

for($i = 0; $i < 52; $i++) {
	$deck[] = $i;
}

shuffle($deck);
//print_r($deck);

echo "<br /><br />";
$lastCard =  array_pop($deck);
$suitArray = array("clubs", "diamonds", "hearts", "spades");

//echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/1.png' />";


echo "<table border = 1>";



echo "<tr>";
echo "<td>";
echo "<img src='avatars/avatar_josh.png' />";
echo "</td>";
$sum1 = 0;
for($i = 0; $i < 6; $i++){
	$lastCard =  array_pop($deck);
	$cardToDisplay = ($lastCard % 13) + 1;
	$sum1 = $sum1 + $cardToDisplay;
	echo "<td>";
	echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
	echo "</td>";
}
echo "<td>".$sum1."</td>";
echo "</tr>";



echo "<tr>";
echo "<td>";
echo "<img src='avatars/avatar_mauro.png' />";
echo "</td>";
$sum2 = 0;
for($i = 0; $i < 4; $i++){
	$lastCard =  array_pop($deck);
	$cardToDisplay = ($lastCard % 13) + 1;
	$sum2 = $sum2 + $cardToDisplay;
	echo "<td>";
	echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
	echo "</td>";
}
echo "<td></td><td></td><td>".$sum2."</td>";
echo "</tr>";





echo "<img src='avatars/avatar_quinn.png' />";
$sum3 = 0;
for($i = 0; $i < 5; $i++){
	$lastCard =  array_pop($deck);
	$cardToDisplay = ($lastCard % 13) + 1;
	$sum3 = $sum3 + $cardToDisplay;
	echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
}
echo "<br />";




echo "<img src='avatars/avatar_stephen.png' />";
$sum4 = 0;
for($i = 0; $i < 6; $i++){
	$lastCard =  array_pop($deck);
	$cardToDisplay = ($lastCard % 13) + 1;
	$sum4 = $sum4 + $cardToDisplay;
	echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
}

echo "</table>";

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
    </body>
</html>
