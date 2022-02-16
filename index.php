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
require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");

$merlin->attaque($harry);
if($harry->mort()){
    echo 'Harry est mort! ';
} else {
    echo 'Harry à survécu avec '.$harry->vie;
}

var_dump($merlin);
echo "<br>";
var_dump($harry);
echo "<br>";
    ?>
</body>

</html>