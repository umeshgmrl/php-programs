<?php
//THIS IS WRITTEN FOR HACKERRANK
//REVERSES AN ARRAY
$arraySize = trim(fgets(STDIN));
$myArray = trim(fgets(STDIN));
$myArray = explode(" ", $myArray);
for ($j= $arraySize-1; $j >= 0; $j--) { 
	echo $myArray[$j]." ";
}
