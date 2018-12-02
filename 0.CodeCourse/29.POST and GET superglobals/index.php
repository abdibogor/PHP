<?php

        //var_dump($_GET);
      //echo $_GET['slug'];

   //$page = 1;
   //$searchTerm = 'learn php';
/*
   $page = $_GET['page'];
   $searchTerm = $_GET['search'];
   $pages = 10;

   echo '<h3>Searching for: ' . $searchTerm . '</h3>';
   echo '<p>You are on page ' . $page . '</p>';

   // ///search=learn php&page=1

  for($i = 0; $i <= $pages; $i++){
      echo '<a href="">' . $i . '</a>';
  }
  */

    if (isset($_GET['search'])){
    	$searchTerm = $_GET['search'];
    	echo '<h3>Searching for: ' . $searchTerm . '</h3>';
    }

?>