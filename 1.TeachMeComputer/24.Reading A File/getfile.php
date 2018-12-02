<?php

   //$header('Content-Type: text/plain');

   $file = "./document.txt";
   $document = file_get_contents($file);

    /*
   echo $document;
   echo '<br><b>This is bold</b>';
   */

   $lines = explode("\n",$document);

   foreach($lines as $newline) {
   	echo '<b>' . $newline. '</b><br>';
   }
   
?>