<?php
/*
    $names = ['alex', 'billy'];
	
	//echo $names[0];
	
	$names[] = 'dale';
	
	var_dump($names);
*/

  $people = [
     'alex' => 26,
	 'billy'=> 21
  ];
  
  echo $people['alex'];
  echo'<br>';
  
  $users = [
		['username' => 'alex'],
		['username' => 'billy']
  ];
  
  //var_dump($users[0]);
  
  echo $users[0]['username'];
  
  echo '<br>';
  
  $users = [
   [
       'username' => 'alex',
	   'email' => 'alex@codecourse.com',
	   'Likes' => ['cats', 'food']
   ],
   
    [
       'username' => 'billy',
	   'email' => 'billy@codecourse.com',
	   'Likes' => ['books', 'food']
     ],
	 [
		'username' => 'alex',
	    'email' => 'alex@codecourse.com',
	    'Likes' => ['reading', 'food']
	]
  ];
    //$users[2] = 'josh';
	//$users[1]['likes'][1] = 'dogs';
	
	$users[1]['about'] = 'I am learning to code';
	
    echo '<pre>', var_dump($users), '</pre>';

	//echo '<pre>', var_dump($users), '</pre>';
	/*
	foreach($users as $user){
		//var_dump($user);
	    echo $user['username'] . '<br>';
	}
	
	$users[] =  [
		'username' => 'alex',
	    'email' => 'alex@codecourse.com',
	    'Likes' => ['reading', 'food']
	];
	
	echo '<pre>', var_dump($users), '</pre>';
	*/
?> 