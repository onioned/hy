<?php


require 'Observer.php';


class Observer1 implements Observer{
	function setting($condition = []){
		echo "setting1<br>";
	}
	function cal($condition = []){
		echo "cal1<br>";
	}
	function sql($condition = []){
		echo "sql1<br>";
	}
	function update($condition = []){
		echo "update1<br>";
	}
    function extend($condition = []){
        echo "extend1<br>";
    }
    function mian($condition = []){
        echo "mian1<br>";
		$this->setting();
		$this->cal();
		$this->sql();
		$this->update();
    }

	function notity($condition = []){
		echo "notity1<br>";
	}
}
class Observer2 implements Observer{
	function setting($condition = []){
		echo "setting2<br>";
	}
	function cal($condition = []){
		echo "cal2<br>";
	}
	function sql($condition = []){
		echo "sql2<br>";
	}
	function update($condition = []){
		echo "update2<br>";
	}
	function extend($condition = []){
		echo "extend2<br>";
	}
	function mian($condition = []){
		echo "mian2<br>";
		$this->setting();
		$this->cal();
		$this->sql();
		$this->update();

	}

	function notity($condition = []){
		echo "notity2<br>";
	}
}

//$event = new Event();
//$event->addObserver(new Observer1());
//$event->addObserver(new Observer2());
//$event->triger();
//$event->notify();