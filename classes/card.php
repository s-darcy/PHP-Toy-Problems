    class CardSuitValue 
    {
        public function __construct($suited, $face, $value) 
        {
            $this->suit = $suited;
            $this->face = $face;
            $this->value = $value;

        }

        // public function addCard($suited, $face, $value){
        //     $this->deck[] = array (
        //         "suited" => ucwords($suited);
        //         "face" => $face;
        //         "value" => $value;
        //     );    
        // }

        // public function getAddCard() {
        //     return $this-> $deck;
        // }
    }