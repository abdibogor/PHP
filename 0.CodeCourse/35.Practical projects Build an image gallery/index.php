<?php

/*
  $directory = opendir('images');

  //var_dump($directory);

  while ($imageFile = readdir($directory)) {
       var_dump($imageFile);
  }
*/

     require 'directoryreader.php';

     $images = directoryreader('images');

 if (!$images){
 	die('could not load files.');
 }

  //var_dump($images);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>

      <?php foreach ($images as $image): ?>

        <img src='<?php echo $image; ?>'>

      <?php endforeach; ?>

</body>
</html> 

