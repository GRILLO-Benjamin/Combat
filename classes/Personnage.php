<!-- définit la classe Personnage possédant :
○ 2 propriétés :
■ son nom (unique).
■ ses points de vie.
○ 2 méthodes :
■ frapper un autre personnage
■ recevoir des dégâts. -->
<?php 
class Personnage{

    public $vie = 30;
    public  $atk = 20;
    public $nom;

    public function __construct($nom){
        $this->nom = $nom;

    }

    public function regenerer($vie = null){
        if(is_null($vie)){
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
        $this->vie = 100;
    }

    public function mort(){
        return $this->vie <= 0;
    }

    public function attaque ($cible){

        $cible->vie -= $this->atk;
    }

}
