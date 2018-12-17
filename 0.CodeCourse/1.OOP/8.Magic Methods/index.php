<?php

require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

$c->baz = 'qux';

//echo json_encode($c);

//echo '<pre>',print_r($c->all());

echo $c->get('baz');

//echo '<pre>' . print_r($c->all(), true);
?>