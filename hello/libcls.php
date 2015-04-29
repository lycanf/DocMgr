<?php

namespace hello;
class Hello{
	public function __construct($name, $age){
		$this->_name = $name;
		echo 'Construc Hello '.$name.' age is '.$age.'</br>';
		
		Hello::$NUM++;
		echo 'num is '.Hello::$NUM.'</br>';
		if($age> Hello::MAX_NUM){
			echo 'age is too big'.'</br>';
		}
	}
	
	public function sayHello(){
		echo 'hello php'.'</br>';
	}
	
	public static function hi(){
		echo 'hi static php'.'</br>';
	}
	private $_name;
	
	private static $NUM = 0;
	const MAX_NUM = 200;
}

class MyHello extends Hello{
	public function __construct($name){
		parent::__construct($name,0);
	}
		
}
?>