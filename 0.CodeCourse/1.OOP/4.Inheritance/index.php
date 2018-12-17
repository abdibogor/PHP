<?php

  require 'bird.php';
  require 'pigeon.php';

  $pigeon = new pigeon(true, 2);

  //echo $bird->getLegCount();

  if ($pigeon->canFly()) {}
  	echo 'Can fly';

?>