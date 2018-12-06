<?php
      $host="localhost";
      $dbuser="root";
      $pass="";
      $dbname="mysite";
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
	   		 if(isset($_POST['submit']))
	   		 {
	   		 	$first=$_POST['first_name'];
	   		 	$last=$_POST['last_name'];
	   		 	$email=$_POST['email'];
	   		 	$year=$_POST['year'];
	   		 	$month=$_POST['month'];
	   		 	$gender=$_POST['gender'];
	   		 	$pass=$_POST['pass'];
	   		 	$day=$_POST['day'];
	   		 	$dob=$year.'/'.$month.'/'.$day;
	   		 	$name=$first.' '.$last;
	   		 	$repass=$_POST['repass'];
	   		 	if(empty($first)||empty($last)||empty($email)||empty($year)||empty($month)||empty($day)||empty(($gender)||empty($pass)||empty($pass))
	   		 	{
	   		 		echo "Oops! can't leave any field blank!";
	   		 	}	   		 }
	   		    elseif($pass!=$repass)
	   		    {
	   		 	echo "Passwords didn't match! Please try again.";
	   		    }
	   		 else
	   		    {
	   		 	$sql="INSERT INTO user (first,last,dob,gender,pass) " . "VALUES('$first','$last','$email','$dob','$gender','$pass')";
	   		 	$res=mysqli_query($conn,$sql);
	   		 	if(!$res)
	   		 	{
	   		 		die("Query Failed! " . mysqli_error($conn));
	   		 	}
	   		 	else
	   		 	{
	   		 		echo "Data inserted successfully!";
	   		 	}
	   		 }
	   		 else
	   		 {
	   		 	echo "Form not submitted Properly!";
	   		 }
	   ?>

</body>
</html> 

