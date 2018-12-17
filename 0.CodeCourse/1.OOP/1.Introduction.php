<?php

// Booleans
// Integers
// Floating point numbers
// Strings
// Arrays
// Objects

/* First example

$object = new stdClass;
$object->name = 'John';

echo $object->name;

*/

$object = new stdClass;
$object->names = ['John', 'Billy', 'Susan', 'Max'];

foreach ($object->names as $name){
    echo $name . '<br>';
}

// Ressources
// Null
// Callbacks
?>