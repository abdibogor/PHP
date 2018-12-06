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
			$sql ="SELECT id, name, ";
			$sql.= "datediff(now(), dob)/365 AS age, ";
			$sql.="gender, email ";
			$sql.="FROM student_info";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("Query Failed!");
			} 
			while($row=mysqli_fetch_assoc($res))
			{
				foreach($row as $key=>$val)
				{
					if($key=='age')
					{
						$val=round($val,0);
					}
					echo ucfirst($key) . ": {$val}<br />";
				}
				echo"<br /><hr /><br />";
			}
			mysqli_free_result($res);
		?>
</body>
</html> 

