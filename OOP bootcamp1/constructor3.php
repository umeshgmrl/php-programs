<?php 
class MyClass
{
	public $description;
	public $completed= false;
	public function __construct()
	{
		echo "MyClass is is initiated..\n";
	}
	public function isCompleted()
	{
		if ($this->completed==false) {
			echo "It is not completed\n";
		}
		else{
			echo "It is completed";
		}
	}
	public function completeIt()
	{
		$this->completed= true;
	}
}
$mc= new MyClass();
$mc->isCompleted();
$mc->completeIt();
$mc->isCompleted();
