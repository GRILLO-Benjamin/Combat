<!-- affichant l'interface du mini-jeu de combat
○ Le joueur peut créer un personnage
○ Le joueur peut utiliser un personnage existant -->
<?php

include "Utils/Header.php";

?>
<body>
    <?php
//     require 'class/Autoloader.php';
// Autoloader :: register();
// $form = new BootstrapForm($POST);
require './classes/Personnage.php';

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
</body>

</html>