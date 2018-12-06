<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Abdibogoreh</title>
</head>
<body>

			<?php
				  $x=15; $y=10;
				  $op='&';
				  switch($op)
				  {
				  	case '+':
				  	 echo $x+$y;
				  	 break;
				  	 case '-';
				  	  echo $x-$y;
				  	  break;
				  	  case '*';
				  	    echo $x*$y;
				  	    break;
				  	    case '/':
				  	      echo $x/$y;
				  	      break;
				  	      case '%';
				  	        echo $x%$y;
				  	        break;
				  	        default:
				  	     echo "Invalid operator";
				  }
			?>

</body>
</html> 

