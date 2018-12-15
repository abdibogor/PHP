<?php
/* the first example
     $names = ['alex', 'billy', 'dale'];

	 foreach ($names as $name){
		 echo $name, '<br>';
		 break;
	 }
	 */
	 
	 /* The second example
	 $users = [
	    ['username' => 'alex'],
		['username' => 'billy'],
		['username' => 'dale'],
		['username' => 'ashley'],
		['username' => 'mabel'],
		['username' => 'josh'],
	 ];
	 
	 $toFind = 'ashley';
	 $result = null;
	 
	 foreach($users as $user){
	 if($user['username'] === $toFind){
			 $result = $user;
			 break;
		 }
	 }
	 
	 var_dump($result);
	 */
	 
	 /* the Third example
	 $users = [
	    ['username' => 'alex'],
		['username' => 'billy'],
		['username' => 'dale'],
		['username' => 'ashley'],
		['username' => 'mabel'],
		['username' => 'josh'],
	 ];
	 
	 $toSkip = 'dale';
	 
	 foreach ($users as $user){
		 if($user['username'] === $toSkip){
			 continue;
		 }
		 
		 echo $user['username'], '<br>';
	 }
	 */
	 
	 $users = [
	     [
		  'username' => 'alex',
		  'likes' => ['cats', 'food'],
		 ], 
		 [
		  'username' => 'billy',
		  'likes' => ['code', 'cats', 'food'],
		 ], 
		 [
		  'username' => 'dale',
		  'likes' => ['code', 'cats', 'music']
		 ], 
	 ];
	 
	 $toFind = 'code';
	 $found = null;
	 
	 foreach ($users as $user){
		 foreach($user['likes'] as $like){
			 if($like === $toFind){
				 $found = $user;
				 break 2;
			 }
		 }
	 }
	 
	 var_dump($found);
	 
?>