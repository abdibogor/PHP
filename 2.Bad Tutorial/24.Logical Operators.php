<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>
	     <?php
	     		/*There are three operators in PHP, Logical AND, Logical OR & Logical NOT*/
	     		$num=52;
	     		if(($num>0)&&($num%2==0))
	     		{
	     			echo "The number is positive as well as even!";
	     			echo "<br />";
	     		}
	     		if(($num>0)||($num%2==0))
	     		{
	     			echo "The number is positive or even or both!";
	     			echo "<br />";
	     		}
	     		if(!($num<0))
	     		{
	     			echo "The number is positive!";
	     		}
	     ?>
</body>
</html> 

