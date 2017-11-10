<?php
$result= 0;
for($i=100; $i<1000; $i++){
	for($j=100; $j<1000; $j++){
		$p= $i*$j;
		$temp= $p;
		$sum= 0;
		while($p>0){
			$rem= $p%10;
			$sum= ($sum*10)+$rem;
			$p= $p/10;
		}
		echo "$sum\n";
		if ($temp==$sum){
			$result= $sum;

		}
	}
}
