<?php
/*说明：
* 模式主控类
*/

require_once('Application1.php') ;
require_once('EventGenerator.php') ;

class Event extends EventGenerator{
	function triger(){
		echo "Event<br>";
	}
}


class Pattern{






	protected $event;
	function main(){
		$this->event = new Event();
		#佣金划分3个区域奖励
		$all_money = 1000;
		$this->part1_reward = $all_money * 0.5;
		$this->part_1();
		$this->part2_reward = $all_money * 0.2;
		$this->part_2();



	}

	public $part1_reward = 0;
	function part_1(){
		$this->event->addObserver(new Observer1(),'a1',[1,2,3]);
		$this->event->triger();

	}

	public $part2_reward = 0;
	function part_2(){
		$this->event->addObserver(new Observer2(),'a2',[4,5,6]);
		$this->event->triger();

	}

	public $part3_reward = 0;
	function notify(){
		$this->event->notify();
	}


}

$pat = new Pattern();
$pat->main();
