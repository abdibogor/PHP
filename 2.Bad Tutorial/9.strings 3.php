<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

      <?php
          $msg="Have a nice day! ";
          echo $msg;
          echo "<br>";
          //The strstr() function searches for the first occurrence of a string inside another string.
          echo strstr($msg, "nice");
          echo "<br />";
          //The strpos() function finds the position of the first occurrence of a string inside another string.
          echo strpos($msg, "nice");
          echo "<br />";
          //The strchr() function searches for the first occurrence of a string inside another string.
          echo strchr($msg, 'i');

      ?>

</body>
</html> 
