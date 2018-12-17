<?php

class Foo {
	public $bar = 'foobar';

	   public static function hello(){
	   	//return 'Hello world';
	   	//return $var;
	   	return $this->bar;
	   }
}

?>