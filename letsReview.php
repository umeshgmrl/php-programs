<?php
$numberOfTimes= fgets(STDIN);
for ($i=0; $i < $numberOfTimes; $i++) { 
	$string = trim(fgets(STDIN));
	$wholeArray = str_split($string);
	for ($j=0; $j < sizeof($wholeArray); $j++) { 
		if ($j%2==0) {
			echo $wholeArray[$j];
		}
	}
	echo " ";
	for ($j=0; $j < sizeof($wholeArray); $j++) { 
		if ($j%2!=0) {
			echo $wholeArray[$j];
		}
	}
	echo "\n";
}