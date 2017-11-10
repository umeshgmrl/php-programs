<?php
//https://www.hackerrank.com/challenges/30-exceptions-string-to-integer/problem
$num = trim(fgets(STDIN));
$x = (int) $num;
echo "x is $x \n";
$num1 = strval($x);
echo "num is $num \n";
echo  $num1==$num ? $num : "Bad String";
?>