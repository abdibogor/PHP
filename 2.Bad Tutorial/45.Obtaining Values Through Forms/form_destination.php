<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

		<?php
				 if(isset($_POST['submit']))
			{
				echo "Name: {$_POST['name']} <br />";
				echo "Age: {$_POST['age']} <br />";
				echo "Gender: {$_POST['gender']} <br />";
				echo "Email: {$_POST['email']} <br />";
			}
			else
			{
				echo "Form was not submitted";
			}
		?>

</body>
</html> 

