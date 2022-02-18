<!-- définit la classe PersonnagesManager qui
stocke les données et comporte ces fonctionnalités :
○ enregistrer un nouveau personnage ------ addNewCharacter(string)
○ modifier un personnage ------ modifyCharacter(character) ou (character_id)
○ supprimer un personnage ------ deleteCharacter(character) ou (character_id) ou (string)
○ sélectionner un personnage ------ selectCharacter(character)
○ compter le nombre de personnages ------ countCharacter(character)
○ récupérer une liste de plusieurs personnages ------ listCharacters() -> array(character)
○ savoir si un personnage existe. ------ isCreatedCharacter(boolean)-->
<?php
if (isset($_POST['pseudo'])) {
    //connexion bdd 
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=jeux_de_combat;charset=utf8','root','', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (\Throwable $th) {
        die('erreur db');
    }
    // faire la requete
    $pdostmnt = $pdo->prepare('INSERT INTO characters(id,name,classe,genre,race,life) VALUES (?,?,?,?,?,?)');
    $isSuccess =  $pdostmnt->execute(array($_POST['pseudo']));

    if ($isSuccess) {
        header('Location: ../themes.php?success=Le pseudo à bien été ajouté !');    
    } else {
        header('Location: ../login.php?error=Erreur lors de l\'enregistrement du pseudo !');    
    }
    
    //rediriger vers une page
} else {
    header('Location: ../login.php?error=Le formulaire n\'est pas valide !');    
}
?>