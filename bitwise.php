<?php
$count = trim(fgets(STDIN));
for ($i=0; $i < $count; $i++) { 
	$testCase = explode(" ", trim(fgets(STDIN)));
	$n = $testCase[0];
	$k = $testCase[1];
	$resultSet = array();
	for ($j=1; $j < $n; $j++) { 
		for ($m=$j+1; $m < $n+1; $m++) { 
			$bit = $j & $m;
			if ($k==$bit+1) {
				$trunked = $bit;
				break;
			}
			if ($bit>=$k) {
				continue;
			}
			array_push($resultSet, $bit);
		}
	}
	echo isset($trunked) ? $trunked: max($resultSet);
	unset($trunked);
	echo "\n";
}