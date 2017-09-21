<?php  
  
  class Card_Suit {
   public $suits = array ("clubs", "diamonds", "hearts", "spades");
  }
  
  class Face_Value {
    public $faces = array (
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

  }
  
	class Deck_Of_Cards {
    public $deck = array();
    // public function shuffleUp(){
  
    // };

    public function EachCard($a,$b){
        return $a . " of " . $b . "<br />";
    }
  } 

//   class Person {
//     private $alive = true;

//     protected $gender = '';
//     protected $genitalOrgan = ''; 
// }

// class Man extends Person {
//     public function __construct(){
//         $this->gender = 'male';
//         $this->genitalOrgan = 'penis';
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="your name here">
        <title>Deck of Cards</title>
    </head>
<body>
    <p>Today is <?php echo date('l jS \of F Y h:i:s A'); ?>.</p>
	<p><?php 
      $suit = new Card_Suit();
      var_dump($suit);
	    	foreach($suits as $suit){
		      	$suitName =  strtoupper("$suit");
				foreach($faces as $face => $suit){
			  		print_r( "$face of $suitName" . "<br />");
			  		array_push($deck, $face);
				};
			};
			print_r($deck);

			//after I get the both elements into the $deck array, use implode() to concatenate the words	 		 
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

<!--MEDIUM:
Let’s bring in the deck code from the past example (your normal challenge).
Create a function that will create a deck of cards, randomize it and then return the deck.
We will now create a function to deal these cards to each user. Modify this function 
so that it returns the number of cards specified for the user. 
Also, it must modify the deck so that those cards are no longer available to be distributed.
 --> 


  
  
  
  