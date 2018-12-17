<?php

require 'Foo.php';
require 'Bar.php';

$bar = new Bar;
echo $bar->foobar();

/*
$foo = new Foo();
echo $foo->bar();
*/

?>