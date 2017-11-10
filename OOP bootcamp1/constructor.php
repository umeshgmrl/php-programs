<?php 
class MyClass
{
	function __construct()
	{
		echo "This method was automatically invoked\n";
	}
}
$mc= new MyClass();
class Param
{
	function __construct($name)
	{
		echo "Hello $name";
	}
}
$pm= new Param("Bhumesh");
