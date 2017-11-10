<?php 
class MyClass
{	
	public $myNumber= "Ok";
	public function __construct($data)
	{
		$this->myNumber= $data;
	}
}
$mc= new MyClass("not ok");
echo ($mc->myNumber);
