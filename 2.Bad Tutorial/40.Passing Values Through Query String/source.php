<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
<meta charset="UTF-8">
</head>
<body>

			<?php
				 $name="John";
				 $age=22;
				 $email="john@gmail.com";
				 $str="name={$name}&age={$age}&email={$email}";
			?>
			<a href="destination.php?<?php echo $str; ?>">Destination</a>
</body>
</html> 

