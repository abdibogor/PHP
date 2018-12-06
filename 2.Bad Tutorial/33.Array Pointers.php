<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

		<?php
			 $arr=array(11,7,9,5,13,2,16);
			 echo current($arr); echo "<br />";
			 next($arr);

			 echo current($arr); echo "<br />";
			 end($arr);

			 echo current($arr); echo "<br />";
			 reset($arr);

			 echo current($arr); echo "<br />";
			 echo "<br />";

			 while(current($arr)!=null)
			 {
			 	echo current($arr); echo "<br />";
			 	next($arr);
			 }
		?>

</body>
</html> 

