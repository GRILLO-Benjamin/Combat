<!-- définit la classe Personnage possédant :
○ 2 propriétés :
■ son nom (unique).
■ ses points de vie.
○ 2 méthodes :
■ frapper un autre personnage
■ recevoir des dégâts. -->
<?php 

Class Character{
    //ATTRIBUTS
    private $_vie = 100;
    private  $_atk = 40;
    private $_name = "Unknown";
    private $_classe = "Unknown";

    //CONSTRUCTEUR
    public function __construct($name, $vie, $atk, $classe){
        $this->_name = $name;
        $this->_vie = $vie;
        $this->setAttack ($atk);
        $this->setClasse ($classe);
    }

    //METHODES
    public function getAttack (){
    return $this->atk;
    }

    public function setAttack($atk){
    $this->_atk= $atk;
    }


public function setClasse($classe){
    return $this->_classe = $classe;
}

public function getInfo (){
    return "<p>".$this->_name. " a une force de " .$this->_atk. " est de classe ".$this->_classe. ".</p>";
}

public function frapper(Character $character){
return $character->recevoirDegats($this->_atk);
}

public function recevoirDegats($atk){
$this->_vie = $this->_vie - $atk;

if($this->_vie <= 0){
    echo "<p>" .$this->_name." a perdu " .$atk. " points de vie. Il vient de succomber à ses blessures.</p>";
}else {

echo "<p>" .$this->_name." a perdu " .$atk. " points de vie. il lui reste ".$this->_vie. " points.</p>";
}
}

}

$warrior = new Character($vie, 45, "Conan", $classe);
$rogue = new Character($vie, 30, "Lupin", $classe);
$mage = new Character($vie, 35,  "Merlin", $classe);
$ranger = new Character($vie, 40, "Robin", $classe);

