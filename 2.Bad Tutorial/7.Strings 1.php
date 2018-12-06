<?php
    $first="Good Morning! ";
    $second="Have a nice day!";
    $third=$first;
    echo $third;
    echo "<br />";
    $third .= $second;
    echo "$third<br />";
    // all letters uppercase
    echo strtoupper($third);
    echo "<br />";
    // all the letters sa minimum
    echo strtolower($third);
    echo "<br />";
    // the first letter of each word of the text in upper case
    echo ucwords($third);
    echo "<br />";
    echo $third;
		

?>