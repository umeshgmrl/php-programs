<?php
//https://www.hackerrank.com/challenges/30-dictionaries-and-maps/problem
$numOfEntries = trim(fgets(STDIN));
$map = array();
for ($i=0; $i < $numOfEntries; $i++) { 
	$entry =  trim(fgets(STDIN));
	$entry = explode(" ", $entry);
	$map[array_shift($entry)] =array_shift($entry);
}
while (1) {
	$searchTerm =  trim(fgets(STDIN));
	if ($searchTerm=="") break;
	if (isset($map[$searchTerm])){
		echo "$searchTerm=$map[$searchTerm]\n";
	}
	else{
		echo "Not found\n";
	}
}