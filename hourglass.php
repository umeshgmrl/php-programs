<?php
//https://www.hackerrank.com/challenges/2d-array
$multiArray = array();
for ($i=0; $i < 6; $i++) {
	$input = explode(" ", trim(fgets(STDIN)));
	for ($j=0; $j < 6; $j++) { 
		$multiArray[$i][$j] = $input[$j];
	}
}
$sum = PHP_INT_MIN;
for ($i=0; $i < 4; $i++) { 
	for ($j=0; $j < 4; $j++) { 
		$rowSum = $multiArray[$i][$j] + $multiArray[$i][$j+1] + $multiArray[$i][$j+2];
		$rowSum += $multiArray[$i+1][$j+1];
		$rowSum += $multiArray[$i+2][$j]+$multiArray[$i+2][$j+1]+$multiArray[$i+2][$j+2];
		if ($rowSum>$sum) {
			$sum = $rowSum;
		}
	}
}
echo $sum;