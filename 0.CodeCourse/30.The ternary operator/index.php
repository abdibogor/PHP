<?php

    //echo $_GET['page'];
/*
  $page = 1;

 if (isset($_GET['page'])){

 	 $page = $_GET['page'];
    }
	 
  echo $page;
  */

/*
    $page = isset($_GET['page']) ? $_GET ['page'] : 1;

    echo $page;
*/

/*
    phpinfo();
*/

/*
    $page = $_GET['page'] ?? 1;

    echo $page;
  */

    $balance = 10;

    /*if ($balance === 0){
    	$balance = 'zero';
    }*/

    $availableBalance = $balance ?: 'zero';

   /* echo 'Your available balance is ' . $balance;*/


echo 'Your available balance is ' . $availableBalance;

?>