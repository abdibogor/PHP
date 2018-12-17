<?php

  require 'bird.php';
  require 'Pigeon.php';
  require 'Penguin.php';

  $penguin = new Penguin(false, 2);

  //echo $bird->getLegCount();

 	$penguin->foo();
 
  if ($penguin->canFly()){
  	  // can fly
  }

?>