<?php
        /* The first example
     $sentence = 'I am enjoying the PHP video tutorials.';
     $parts = explode(' ', $sentence);
     print_r($parts);
     */

     $sentence = 'I am enjoying the PHP video tutorials.';

     $parts = explode('P', $sentence);

     echo $parts[1];

?>