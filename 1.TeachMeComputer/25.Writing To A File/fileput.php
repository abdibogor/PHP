<?php

$file = "./lines.txt";
/*$write = "This is line one\n";*/
$write = "This is line three\n";
 
//file_put_contents($file , $write);
file_put_contents($file , $write , FILE_APPEND);

?>