<?php

     echo strlen('alex');
     echo '<br>';

     var_dump (strlen('alex'));
     echo '<br>';

     $name = 'Alex';
     echo strtoupper ($name);
     // Make a string uppercase.
     echo '<br>';

     $name = 'Alex';
     echo strtolower ($name); // Make a string lowercase.
     echo '<br>';  

     $name = '     Alex       ';
     echo strlen(trim($name)); 
     echo '<br>'; // trim strip whitespace  for other (characters) from the beginning and end of a string.


     $name = '     Alex';
     echo rtrim($name); 
     echo '<br>';  


  // substr Return part of a string

      $name = 'billy';
      echo substr($name, 0, 5);
       echo '<br>'; 

      $name = 'billy';
      echo substr($name, 0, ceil(strlen($name) / 2));
      echo '<br>';

      $name = 'Alexander';

      echo substr($name, 0, ceil(strlen($name) / 2));
      echo '<br>';

       $page = $_GET['page'] ?? 1;
    if (empty(trim($page))){
    $page = 1;
    }
       echo $page;

       echo '<br>';

       $number = 5.0025377108839;

       echo number_format($number, 2);

       echo '<br>';

       $number = 1000000000;
       echo number_format($number, 0, '.', '_');
       echo '<br>';

     header('Location: page.php');

?>