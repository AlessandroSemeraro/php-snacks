<!--Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.)--> 

<?php   

class Pokemon {
    public $name;
    public $age;
    public $evolution;
    public $height;
    public $weight;
    public $color;

    public function setWeight($weight){
        if($weight > 50) {
            $this -> weight = 99;
        }
    }

    public function setHeight($height){
        if($height > 120) {
            $this -> height = 121;
        }
    }

    public function badColor($color){
        if($color != "red") {
            $this -> color = "black";
        }
    }

    function __construct($_evolution) {
        $this->evolution = $_evolution;
        }
}








?>