<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

		<?php
			$arr=array(15,10,3,19,7,62,8,5,12);
			echo "NO. of elements: " . count($arr); echo "<br>";
			echo "Maximum Value: " . max($arr); echo "<br />";
			echo "Minimum Value: " . min($arr); echo "<br />";
			echo "Sorted: ";
			sort($arr);
			print_r($arr); echo "<br />";
			echo "Reverse Sorted: ";
			rsort($arr);
			print_r($arr);
			echo "<br />";
			echo "implode: ";
			$str=implode('-', $arr);
			echo $str; echo "<br />";
		    $vowels="A E I O U";
		    print_r(explode(" ",$vowels)); echo "<br />";
		    echo in_array(26, $arr); echo "<br />";
		    echo in_array(10, $arr); echo "<br />";
		?>
 
</body>
</html> 

