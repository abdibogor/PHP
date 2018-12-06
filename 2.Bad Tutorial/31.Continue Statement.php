<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

		<?php
				$arr=array(10,15,20,23.56,"Fender",11,"Start");
				foreach($arr as $val)
				{
					if(gettype($val)=="string")
					{
						continue;
					}
					echo $val;
					echo "<br />";
				}
		?>

</body>
</html> 

