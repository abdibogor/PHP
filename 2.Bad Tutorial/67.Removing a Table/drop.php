<?php
		$host="localhost";
		$dbuser="admin";
		$pass="studentpass";
		$dbname="student";
		$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		if(mysqli_connect_errno())
		{
			die("Connected Failed! " . mysqli_connect_error());
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
			$sql="DROP TABLE student_info";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				
			}
		?>

</body>
</html> 

