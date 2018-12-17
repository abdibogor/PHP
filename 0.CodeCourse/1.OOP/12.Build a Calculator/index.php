<?php
 
 require_once 'classes/Calculator.php';
 require_once 'classes/OperatorInterface.php';
 require_once 'classes/Adder.php';
 require_once 'classes/Substractor.php';
 require_once 'classes/Multiplier.php';
 require_once 'classes/Divider.php';

 $c = new Calculator;

 $c->setOperation(New Adder);
 $c->calculate(20, 30); // 50

 $c->setOperation(new Substractor);
 $c->calculate(5); //20

 $c->setOperation(new Multiplier);
 $c->calculate(5); // 100;

 $c->setOperation(new Divider);
 $c->calculate(2); //25

 echo $c->getResult();

?>