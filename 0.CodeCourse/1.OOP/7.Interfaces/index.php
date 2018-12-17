<?php

     require 'TalkInterface.php';
     require 'Dog.php';
     require 'Cat.php';

     $dog = new Dog();
     echo $dog = talk();

     echo $cat->talk() . '<br>' . $dog-talk();
?>