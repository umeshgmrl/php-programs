<?php
$sum= 0;
for($i=3; $i<1000; $i++){
	if ($i%3==0) {
		$sum+=$i;
	}
	else if ($i%5==0) {
		$sum+=$i;
	}
}
echo $sum;
