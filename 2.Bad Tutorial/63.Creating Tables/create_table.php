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
			$sql ="CREATE TABLE sports ";
			$sql.= "(id int primary key auto_increment,  ";
			$sql.="name varchar(30), ";
			$sql.="strength int)";
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
			if(!$res)
			{
				die("Query Failed!");
			}
			else
			{
				echo "Table created successfully!";
			}
		?>
</body>
</html> 
  <?php 
  	mysqli_close($conn);
  ?>

