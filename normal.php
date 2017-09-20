<?php  
  
  $suits = array ("clubs", "diamonds", "hearts", "spades");
  $faces = array (
    "Ace" => 1, 
    "2" => 2,
    "3" => 3, 
    "4" => 4, 
    "5" => 5, 
    "6" => 6, 
    "7" => 7,
    "8" => 8, 
    "9" => 9, 
    "10" => 10, 
    "Jack" => 11, 
    "Queen" => 12, 
    "King" => 13
  );

//
//print_r($deal);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="your name here">
        <title>Simple page</title>
    </head>
<body>
    <p>Today is <?php echo date('l jS \of F Y h:i:s A'); ?>.</p>
	<p><?php   
	    	foreach($suits as $suit){
		      	echo "$suit" . "<br />";
				foreach($faces as $face => $suit){
			  		echo "{$face} => {$suit}" . "<br />";
			  		
				};
				print_r($suits);
			};	 		 
		?>
	</p>
</body>
</html>
<!--
NORMAL:
Use two foreach loops to create a master array of all 52 cards in the array $deck, 
each represented as a key value pair in the format ‘face of suit’, 
use the print_r function to print out the contents of the $deck to make sure it is correct.
EX: “King of Spades” should be one of the elements of the array and it should have a value of 13.
-->



  
  
  
  