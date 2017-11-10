<?php
//https://www.hackerrank.com/challenges/30-recursion/problem
function factorial($num)
{
	if ($num <=1) return $num;
	$num*=factorial($num-1);
	return $num;
}

$num = trim(fgets(STDIN));
echo factorial($num);