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
          //the number of characters of the text
          echo strlen($msg);
          echo "<br />";
          //replace one text with another
          echo str_replace("nice", "great", $msg);
          echo "<br />";
          //
          echo str_repeat($msg,3);
          echo "<br />";
          echo substr($msg, 5, 16);

      ?>

</body>
</html> 
