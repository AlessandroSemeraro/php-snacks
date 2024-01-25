<!--Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.)--> 

<?php   

class Pokemon {
    public $name;
    public $age;
    public $evolution;
    public $height;
    public $attack = 0;
    public $defense = 0;

    public function setAttack ($_attack){
        if($_attack > 50) {
            $this -> attack = 99;
        }
    }

    public function getAttack (){
       return $this -> attack;
    }

    public function setDefense($_defense){
        if($_defense > 50) {
            $this -> defense = 90;
        }
    }

    public function getDefense(){
        return $this -> defense;
    }

    
}


$pikachu = new Pokemon ();
$pikachu-> setAttack(51);
$pikachu-> setDefense(51);

echo $pikachu-> getAttack();
echo $pikachu-> getDefense();
?>