<?php

$name = $_POST['name'] ?? 'abc';

if (empty(trim($name))){
   header('Location: index.php');
}


 echo "Hi there, {$_POST['name']}!";

//header('Location: index.php');


?>