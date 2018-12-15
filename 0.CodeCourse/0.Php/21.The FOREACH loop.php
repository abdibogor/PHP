<?php
      /* the first example
	  $names = ['alex', 'billy', 'date'];
	  
	  for ($i = 0; $i < count($names); $i++){
	  echo $names[$i], '<br>';
	  }
*/

/* the third example
      $names = ['alex', 'billy', 'date'];
	  
	  foreach($names as $name){
		   echo $name, '<br>';
	  }

*/

/* the fourth example  
    $names = ['alex', 'billy', 'date'];
	  
	  foreach($names as $index => $name){
		   echo $index, ': ', $name, '<br>';
	  }
	  */
	  
	$topics = [
	  [
	      'id' => 1,
		  'title' => 'The best way to learn PHP?',
		  'posts' => [
		       ['body' => 'Pratice a lot!'],
			   ['body' => 'Work on a project.'],
		  ]
	  ], 
	  [
	      'id' => 2,
		  'title' => 'How do I use a foreach loop?',
		  'posts' => [
		       ['body' => 'Just watch this part.'],
		  ]
	  ],
 	];
	
  foreach ($topics as $topic) {
	   //echo $topic['title'], '<br>';
      echo '<h1>' . $topic['title'] . '</h1>';
	  foreach ($topic['posts'] as $post){
	  echo '<p>' . $post['body'] . '</p>';
	  }
  }	  
	  
  
	   
?>