<?php 
/**
* 
*/
class Voter
{
	public $name;
	public $age;
	public function __construct($name){
		$this->name= $name;
	}
	public function setAge($age){
		if($age<18){
			throw new Exception("User is not eligible", 1);	
		}
		else{
			$this->age= $age;
		}
	}
}
$v= new Voter("Bob");
$v->setAge(17);
var_dump($v);