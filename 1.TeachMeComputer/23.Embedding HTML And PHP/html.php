<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Abdibogoreh</title>
</head>
<body>
    

    <?php
     	
     	 //this is the first example
      echo '<b><u>This is a test</u></b>';
      echo '<br>';
      echo '<a href="www.google.com">google</a>';
		
    
         
       $names = array('Tom', 'Bob', 'Jim');

       foreach($names as $person)
       {
       	//echo $person . '<br>';
       	
      

     ?>

   <b><font style="color:red">The name of the person is <?php echo $person; ?></font></b><br>

     <?php
   
      }    


     ?>

</body>
</html>

