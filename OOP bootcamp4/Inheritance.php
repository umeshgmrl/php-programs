<?php
class Worker{
	public function work(){
		echo "Some work\n";
	}
}
class Mechanic extends Worker{
	public function work(){
		echo "Repairing things\n";
	}
}
class Docter extends Worker{
	public function work(){
		echo "Curing patients\n";
	}
}
(new Worker)->work();
(new Mechanic)->work();
(new Docter)->work();