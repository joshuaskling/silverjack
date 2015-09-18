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
    	<h1>Silverjack</h1>
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

$sum = array();
echo "<table>";



echo "<tr>";
echo "<td>";
echo "<img src='avatars/avatar_josh.png' />";
echo "</td>";
$sum[0] = 0;
$cards = rand(4,6);
for($i = 0; $i < 6; $i++){
	if($i < $cards){
		$lastCard =  array_pop($deck);
		$cardToDisplay = ($lastCard % 13) + 1;
		$sum[0] = $sum[0] + $cardToDisplay;
		echo "<td>";
		echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
		echo "</td>";
	} else{
		echo "<td></td>";
	}

}
echo "<td>".$sum[0]."</td>";
echo "</tr>";



echo "<tr>";
echo "<td>";
echo "<img src='avatars/avatar_mauro.png' />";
echo "</td>";
$sum[1] = 0;
$cards = rand(4,6);
for($i = 0; $i < 6; $i++){
	if($i < $cards){
		$lastCard =  array_pop($deck);
		$cardToDisplay = ($lastCard % 13) + 1;
		$sum[1] = $sum[1] + $cardToDisplay;
		echo "<td>";
		echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
		echo "</td>";
	} else{
		echo "<td></td>";
	}
}
echo "<td>".$sum[1]."</td>";
echo "</tr>";




echo "<tr>";
echo "<td>";
echo "<img src='avatars/avatar_quinn.png' />";
echo "</td>";
$sum[2] = 0;
$cards = rand(4,6);
for($i = 0; $i < 6; $i++){
	if($i < $cards){
		$lastCard =  array_pop($deck);
		$cardToDisplay = ($lastCard % 13) + 1;
		$sum[2] = $sum[2] + $cardToDisplay;
		echo "<td>";
		echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
		echo "</td>";
	} else{
		echo "<td></td>";
	}
}
echo "<td>".$sum[2]."</td>";
echo "</tr>";



echo "<tr>";
echo "<td>";
echo "<img src='avatars/avatar_stephen.png' />";
echo "</td>";
$sum[3] = 0;
$cards = rand(4,6);
for($i = 0; $i < 6; $i++){
	if($i < $cards){
		$lastCard =  array_pop($deck);
		$cardToDisplay = ($lastCard % 13) + 1;
		$sum[3] = $sum[3] + $cardToDisplay;
		echo "<td>";
		echo "<img src='cards/" . $suitArray[floor($lastCard)/13] . "/". $cardToDisplay . ".png' />";
		echo "</td>";
	} else{
		echo "<td></td>";
	}
}
echo "<td>".$sum[3]."</td>";
echo "</tr>";

$maxvalue = -1;

for($i = 0; $i < 4;$i++){
	if($sum[$i] <= 42 && $sum[$i] > $maxvalue){
		$maxvalue = $sum[$i];
	}
}

echo "<tr>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td class=\"buttonPosition\">";
echo "<button type=\"button\" onclick=\"location.href='review.php';\">Play again</button>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "<td>";
echo "</td>";
echo "</tr>";

echo "</table>";

echo "<table>";
echo "<tr>";
echo "<td>";
if($sum[0] == $maxvalue){
	echo "Josh wins";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
if($sum[1] == $maxvalue){
	echo "Mauro wins";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
if($sum[2] == $maxvalue){
	echo "Quinn wins";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
if($sum[3] == $maxvalue){
	echo "Stephen wins";
}
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "</td>";
echo "</tr>";
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
