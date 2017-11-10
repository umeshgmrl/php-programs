<?php
$arr= [0,1,2,3];
var_dump($arr);
$foo= [ 
		100=> "samsung",
		200=> "apple",
		300=> "dell"
		];
var_dump($foo);
$bar= [ 
		"pen"=>5,
		"paper"=>2,
		"eraser"=> 3
		];
var_dump($bar);
$mask= [
		"10"=>"k"
		];
var_dump($mask);
$array = [
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
];
var_dump($array);
$multi= [
			"okay"=>"ok",
			"tk"=>"ok",
			"mul"=>[
						"this"=>"is",
						"it"=>"that"
					],
			"when"=>"then"
			];
var_dump($multi);
$multi["mul"]["it"]= "hehe";
echo "the tk values is $multi[tk]\n";
echo $multi["mul"]["it"];