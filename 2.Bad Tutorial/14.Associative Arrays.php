<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

        <?php
        	$arr=array("name"=>"John", "email"=>"john@gmail.com");
        	echo "Name: " . $arr["name"]; echo "<br />";
        	echo "Email: " . $arr["email"]; echo "<br />";
        	$myarr=array(array("name"=>"John", "email"=>"John@gmail.com")
        		,array("name"=>"Jack", "email"=>"jack@gmail.com"));
        	echo $myarr[0]["name"]; echo  "<br />";
        	echo $myarr[0]["email"]; echo "<br />";
        	echo $myarr[1]["name"]; echo   "<br />";
        	echo $myarr[1]["email"]; echo  "<br />";

        ?> 

</body>
</html> 

