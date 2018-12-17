<?php
/*
 require_once 'classes/Calculator.php';
 require_once 'classes/OperatorInterface.php';
 require_once 'classes/Adder.php';
 require_once 'classes/Substractor.php';
 require_once 'classes/Multiplier.php';
 require_once 'classes/Divider.php';
*/

   spl_autoload_register(function($class) {
 	     //echo $class;
	  require_once "classes/{$class}.php";
   });

?>