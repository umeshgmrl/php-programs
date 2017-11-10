<?php
$count = trim(fgets(STDIN));
for ($i=0; $i < $count; $i++) { 
	$testCase = explode(" ", trim(fgets(STDIN)));
	$N = $testCase[0];
	$K = $testCase[1];
	$resultSet = array();
	$result = 0;
	for ($A = 1; $A <= $N; $A++) {
		for ($B = $A + 1; $B <= $N; $B++) {
			$current = $A & $B;
			if ($current > $result && $current < $K) {
				$result = $current;
			}
		}
	}
	echo $result,PHP_EOL;
}