<?php
//https://www.hackerrank.com/challenges/30-binary-numbers/problem
//solution copied from GeeksforGeeks
$x = trim(fgets(STDIN));
$count = 0;
while ($x!=0){
    $x = ($x & ($x << 1));
    $count++;
}
echo $count;
