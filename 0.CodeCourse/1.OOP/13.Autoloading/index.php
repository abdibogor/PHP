<?php
 
 require_once 'init.php';

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