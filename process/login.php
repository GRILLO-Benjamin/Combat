<?php
if (isset($_POST['name'])) {
    //connexion bdd
  include "../config/db.php";

    $pdostmnt = $conn->prepare('INSERT INTO users(name) VALUES (?)');
    $isSuccess =  $pdostmnt->execute(array($_POST['name']));

    if ($isSuccess) {
        header('Location: ../index.php?success=Le pseudo à bien été ajouté !');
    } else {
        header("Location: ../login.php?error=Erreur lors de l'enregistrement du pseudo !");
    }

    //rediriger vers une page
} else {
    header("Location: ../login.php?error=Le formulaire n'est pas valide !");
}
?>