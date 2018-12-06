<?php
		$host="localhost";
		$dbuser="admin";
		$pass="studentpass";
		$dbname="student";
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		if(mysqli_connect_errno())
		{
			die("Connection Failed! " . mysqli_connect_error());
		}
		else
		{
			echo "Connected to database {$dbname}";
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

		<?php
			mysqli_close($conn);
		?>

</body>
</html> 

