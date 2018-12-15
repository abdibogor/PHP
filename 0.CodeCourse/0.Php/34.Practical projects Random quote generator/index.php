<?php 

      $quotes = [
          [
 			'author' => 'Antoine De Saint',
 			'text' => 'A designer knows as he has achieved perfection not when there is nothing left to add , but when there is nothing left to take away.',
          ],
          [
 			'author' => 'Benjamin Franklin',
 			'text' => 'An investment in knowledge always pays the best interest.',
          ],
          [
 			'author' => 'John Updike',
 			'text' => 'Dreams come true. Without that possibility, nature would not incite us to have them.',
          ],
          [
 			'author' => 'Socrates',
 			'text' => 'The life which is unexamined is not worth living.',
          ],
          [
 			'author' => 'Aristotle',
 			'text' => 'We cannot learn without pain.',
          ],
      ];

/*
    $quote = rand(0, 10);
    echo $quote;
 */

$quote = $quotes[array_rand($quotes)];
//var_dump($quote);

 //die();

 $quote = $quotes[rand(0, count($quotes) -1)];
    //var_dump($quote);
$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];  


?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Random Quote</title>
<meta charset="UTF-8">
</head>
<body>

        <blockquote> 
        	<h2> &ldquo; <?php echo $quoteText ?> &ldquo; </h2>

        	<strong>- <?php echo $quoteAuthor; ?></strong>
        </blockquote>

</body>
</html> 

