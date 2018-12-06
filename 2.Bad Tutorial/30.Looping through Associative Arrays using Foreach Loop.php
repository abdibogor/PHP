<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

			<?php
				 $arr=array(array("Name"=>"Roger Federer", "Country"=>"Switzerland", "Rank"=>3),
				 array("Name"=>"Rafael Nadal", "Country"=>"Spain", "Rank"=>2));
				 foreach($arr as $var)
				 {
				 	foreach($var as $attribute=>$info)
				 	{
				 		echo "<b>{$attribute}</b>: {$info}";
				 		echo "<br />";
				 	}
				 	echo "<br />";
				 }
			?>

</body>
</html> 

