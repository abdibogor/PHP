<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
</head>
<body>
			<?php
			/*The first example
				 $msg="Good Morning !";
				 function greeting()
				 {
				 	$msg="Good Night!";
				 }
				 echo "{$msg}<br />";
				 greeting();
				 echo "{$msg}<br />";
			*/

			/* The second example 
			$msg="Good Morning !";
				 function greeting()
				 {
				 	$msg="Good Night!";
				 	echo "{$msg}<br />";
				 }
				 echo "{$msg}<br />";
				 greeting();
			*/

			$msg="Good Morning !";
				 function greeting()
				 {
				 	global $msg;
				 	$msg="Good Night !";
				 }
				 echo "{$msg}<br />";
				 greeting();
				 echo "{$msg}<br />";
			?>
</body>
</html> 

