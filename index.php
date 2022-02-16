<!-- affichant l'interface du mini-jeu de combat
○ Le joueur peut créer un personnage
○ Le joueur peut utiliser un personnage existant -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage Fighter</title>
</head>

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