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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

			<?php
				 $sql="SELECT * FROM student_info";
				 $res=mysqli_query($conn,$sql);
				 if(!$res)
				 {
				 	die("Query Failed!");
				 }
				 While($row=mysqli_fetch_assoc($res))
				 {
				 	foreach($row as $key=>$val)
				 	{
				 		echo "{$key}: " . "{$val}<br />";
				 	}
				 	echo "<br /><hr /><br />";
				 	mysqli_free_result($res);
				 }
			?>

</body>
</html> 

