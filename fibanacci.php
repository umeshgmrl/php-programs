<?php
//By considering the terms in the Fibonacci sequence
//whose values do not exceed four million,
//find the sum of the even-valued terms.
$n1=1;
$n2=2;
$n3= 0;
$bank= 2;
while($n3<4000000){
	if($n3%2==0){
		$bank+= $n3;
	}
	$n3= $n1+$n2;
	$n1 =$n2;
	$n2= $n3;
}
echo "$bank\n";