<!DOCTYPE html>
<html lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

		 <?php
		 		$name="message";
		 		$value="Have a nice day!";
		 		$expire=time() + 60*60*24*7;
		 		setcookie($name, $value, $expire);
		 ?>

</body>
</html> 

