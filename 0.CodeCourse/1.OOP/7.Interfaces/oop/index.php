<?php

require 'Collections.php';

$c = new Collection();
$c->add('foo');
$c->add('bar');

//echo $c->toJson();
//echo count($c);

echo json_encode($c);
?>