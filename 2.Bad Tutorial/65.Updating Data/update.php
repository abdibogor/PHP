$host="localhost";
$dbuser="admin";
$pass="studentpass";
$dbname="student";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
	die("Connection Failed! " . mysqli_connect_error());
}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>
	   <?php 
			$sql ="UPDATE student_info " .
			"SET name='James' " .
			"WHERE id=3";
			$sql.= "(id int primary key auto_increment,  ";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("query Failed! " . mysqli_error($conn));
			}
			else
			{
				echo "Data inserted successfully!";
			}
		?>
</body>
</html> 
  <?php 
  	mysqli_close($conn);
  ?>

