<?php  
    include "classes/card.php";
    include "classes/deck.php";

    $deck = array();
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

    class CardSuitValue 
    {
        public $suits;
        public $face;
        public $value = '';

        public function setSuit($suits)
        {
            $this->suits = ucwords($suits);
        }

        public function getSuit()
        {
            return $this->suits;
        }

        public function __construct($Suits, $Face, $Value) 
        {
            $this->suits = $Suits;
            $this->face = $Face;
            $this->value = $Value;

        }

        public function eachCard($Face, $Suits)
        {
            return $this->face . " of " . $this->suits . "<br />";
        }
    }

	class DeckOfCards
    {   
        public $suits;
        public $face;
        public $value = '';

        public function addCard ($Suits, $Face, $Value = null)
        {
            return $this->array_push($deck, $suits, $face, $value);
        }

        public function Shuffler (&$deck) 
        {   
            $keys = array_keys($deck);
            shuffle($deck);
            foreach ($keys as $key)
            {
                $new[$key] = $deck[$key]
            }
            $deck = $new;
            return true;
        }
    } 
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
        <p>
        <?php 

            $card = new CardSuitValue("hearts", "2", 2);
            var_dump($card);
            $card->setSuit("hearts");
            echo $card->eachCard("2", "hearts");
            echo $card->getSuit();

                $createCard = new DeckOfCards($Suits, $Face, $Value);             
                print_r($createCard);
                

            foreach($suits as $suit){
                print_r("<br />" . ucwords("$suit") . "<br />");
                foreach($faces as $keys => $value){
                    print_r("$keys" ." of ".  ucwords("$suit") . "<br />");
                    $object = array(
                        'suit' => $suit,
                        'face' => $keys,
                        'value' => $value,
                    );
                    print_r($object);
                    array_push($deck, $object);

                };
            }
            var_dump($deck);
            

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


  
  
  
  