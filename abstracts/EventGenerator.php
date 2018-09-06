<?php
/*说明：
事件触发抽象类
*/

abstract class EventGenerator{
    private $observers = array();
	private $log_url = '';			//日志文件
	private $event_log_url = '';	//事件存储文件
	private $separator = '=';		//切割字符

    public function __construct(){
		$this->log_url = dirname(__FILE__).DIRECTORY_SEPARATOR .'log.txt';
		$this->event_log_url = dirname(__FILE__).DIRECTORY_SEPARATOR .'event.txt';
	}
	/*函数说明：
	* 添加事件
	* @$observer Object ：对象 Object
	* @$describe String ：事件描述
	* @$event Array ：传参
	*/
    function addObserver(Observer $observer ,$describe = '' ,$condition = []){
		$this->save_log($observer,$describe,$condition);
        $this->observers[]=$observer;
		$observer->mian();
    }

    function notify(){
    	$file_cont = file_get_contents($this->log_url);
		$file_cont = explode($this->separator,rtrim($file_cont,$this->separator));
		var_dump($file_cont);
		$Event = [];
		foreach ($file_cont as $value){
			$Event[] = json_decode($value);
		}
		var_dump($Event);

        /*foreach ($this->observers as $observer){
        	echo dirname(__FILE__);
        	echo get_class($observer);
            $observer->mian();

        }*/
    }

	function save_log($observer,$describe,$condition){
		$Event_array = [
			'time'=>date('Y-m-d H:i:s'),
			'Class_name'=>get_class($observer),
			'describe'=>$describe,
			'condition'=>$condition,
		];
		file_put_contents($this->log_url,json_encode($Event_array).$this->separator,FILE_APPEND);
	}

	function save_event($observer,$describe,$condition){
		$Event_array = [
			'time'=>date('Y-m-d H:i:s'),
			'Class_name'=>get_class($observer),
			'describe'=>$describe,
			'condition'=>$condition,
		];
		file_put_contents($this->event_log_url,json_encode($Event_array).$this->separator,FILE_APPEND);
	}


}
