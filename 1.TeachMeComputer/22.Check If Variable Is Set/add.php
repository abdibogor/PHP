<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

      <form action="add.php" method="GET">
      	 <input type="number" size="5" name="num1"> + 
      	 <input type="number" size="5" name="num2">
      	 <input type="submit" value="Add">
      </form> 

    <?php
     
    if (isset($_GET['num1']) and isset($_GET['num2'])){

    $num1 =  $_GET['num1'];
    $num2 =  $_GET['num2'];
    $total = $num1 + $num2; 
    echo 'The total is ' . $total;

}
    ?>

</body>
</html> 

