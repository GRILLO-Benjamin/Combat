<?php
if (isset($_POST['name'])) {
    //connexion bdd
    $sName = "localhost";
# user name
    $uName = "root";
# password
    $pass= "";

#database name
    $db_name = "jeux_de_combat";


    // faire la requete
    try {
        $conn = new PDO("mysql:host=$sName;dbname=$db_name;charset=utf8", $uName, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur:' . $e->getMessage());
    }
    $pdostmnt = $conn->prepare('INSERT INTO users(name) VALUES (?)');
    $isSuccess =  $pdostmnt->execute(array($_POST['name']));

    if ($isSuccess) {
        header('Location: ./login.php?success=Le pseudo à bien été ajouté !');
    } else {
        header("Location: ./login.php?error=Erreur lors de l'enregistrement du pseudo !");
    }

    //rediriger vers une page
} else {
    header("Location: ../login.php?error=Le formulaire n'est pas valide !");
}
?>