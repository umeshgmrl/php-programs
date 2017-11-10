<?php 
class Person
{
	public $name;
	public $age;
	function __construct($data)
	{
		$this->name= $data;
	}
}
$p= new Person("John Doe");
$p->age=20;
var_dump($p);
$p->name= "Bhumesh";
$p->age= 23;
var_dump($p);
