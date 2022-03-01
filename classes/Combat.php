<?php

$manager = new PersonnagesManager($db);

// Si la session perso existe, on restaure l'objet.
if (isset($_SESSION['perso'])) {
$perso = $_SESSION['perso'];
}

// Si on a voulu créer un personnage.
if (isset($_POST['creer']) && isset($_POST['name']) && isset($_POST['class'])) {

  // On crée un nouveau personnage.

switch ($_POST['class'])
{
    case 'Warrior': 
    $perso =  new Warrior (['name'=>$_POST['name'],'class' =>$_POST['class']]); 
    break;

    case 'Mage': 
    $perso =  new Mage (['name'=> $_POST['name'],'class'=>$_POST['class']]); 
    break;

    case 'Rogue': 
    $perso =  new Rogue (['name'=>$_POST['name'],'class'=>$_POST['class']]);
    break;

    case 'Ranger': 
    $perso =  new Ranger (['name'=>$_POST['name'],'class'=>$_POST['class']]);
    break;
}


  // Si le nom est invalide (string vide) on revoit une erreur
if (!$perso->validName()) {
    $message = 'Le nom choisi est invalide.';
    unset($perso);
}
  // Si le nom existe déjà
elseif ($manager->exists($perso->name())) {
    $message = 'Le nom du personnage est déjà pris.';
    unset($perso);
}
  // Sinon on crée un nouveau personnage
else {
    $manager->add($perso);
}
}
// Si on a voulu utiliser un personnage.
elseif (isset($_POST['utiliser']) && isset($_POST['name'])) {
  // Si celui-ci existe.
if ($manager->exists($_POST['name'])) {
    $perso = $manager->get($_POST['name']);
}
else {
    $message = 'Ce personnage n\'existe pas !'; 
}
}
// Si on a cliqué sur un personnage pour le frapper.
elseif (isset($_GET['frapper'])) {
  // S'il n'y a pas de personnage
if (!isset($perso)) {
    $message = 'Merci de créer un personnage ou de vous identifier.';
}

else {
    if (!$manager->exists((int) $_GET['frapper']))
    {
    $message = 'Le personnage que vous voulez frapper n\'existe pas !';
    }
    
    else {
    $persoAFrapper = $manager->get((int) $_GET['frapper']);
    
      // On stocke dans $retour les éventuelles erreurs ou messages que renvoie la méthode frapper.
    $retour = $perso->frapper($persoAFrapper); 

    switch ($retour) {
        case Character::CEST_MOI :
        $message = 'Mais... pourquoi voulez-vous vous frapper ???';
        break;
        
        case Personnage::PERSONNAGE_FRAPPE :
        $message = 'Le personnage a bien été frappé !';
        
        $manager->update($perso);
        $manager->update($persoAFrapper, $perso->strength());
        break;
        
        case Character::PERSONNAGE_TUE :
        $message = 'Vous avez tué ce personnage !';
        
        $manager->update($perso);
        $manager->delete($persoAFrapper);
        
        break;
    }
    }
}
}