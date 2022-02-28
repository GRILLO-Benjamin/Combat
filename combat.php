<!-- utilise les classes instanciées et les méthodes souhaitées sur les
objets. (Une instance de PersonnagesManager devra être créée) -->
<!-- $id integer
$player 1 character
$player 2 character
$actif integer ou boolean

method° takeNextTurn()
-->
<?php

require './config/autoload.php';
Autoloader::register();

$rogue = new Rogue("Rogue");
$warrior = new Warrior("Warrior");

$rogue->attaque($warrior);
if($warrior->mort()){
    echo 'Warrior est mort! '.'<br>';
} else {
    echo 'Warrior à survécu avec '.$warrior->vie.'<br>';
}

var_dump($rogue);
echo "<br>";
var_dump($warrior);
echo "<br>";
    ?>