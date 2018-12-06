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
			$sql ="INSERT INTO student_info ".
			"(id, name, dob, gender, email) " .
			"VALUES(3, 'Phil', '1991/06/24', 'male', 'phil@gmail.com')";
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

