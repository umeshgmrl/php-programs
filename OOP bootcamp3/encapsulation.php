<?php 
class Voter
{
	private $name;
	private $age;
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
	public function getAge()
	{
		return $this->age*365;
	}
}
$v= new Voter("Bob");
$v->setAge(23);
//remove below line to make it work
$v->age= 25;
var_dump($v->getAge());
