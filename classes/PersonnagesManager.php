<?php
// définit la classe PersonnagesManager qui stocke les données et comporte ces fonctionnalités :

//○ enregistrer un nouveau personnage ------ addNewCharacter(string)
//○ modifier un personnage ------ modifyCharacter(character) ou (character_id)
//○ supprimer un personnage ------ deleteCharacter(character) ou (character_id) ou (string)
//○ sélectionner un personnage ------ selectCharacter(character)
//○ compter le nombre de personnages ------ countCharacter(character)
//○ récupérer une liste de plusieurs personnages ------ listCharacters() -> array(character)
//○ savoir si un personnage existe. ------ isCreatedCharacter(boolean)-->


class PersonnagesManager
{
  private $db; // Instance de PDO

public function __construct($db)
{
    $this->setDb($db);
}

public function add(Personnage $perso)
{
    $q = $this->db->prepare('INSERT INTO personnages(nom , type) VALUES(:nom , :type)');
    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':type', $perso->type());
    $q->execute();
    
    $perso->hydrate([
    'id' => $this->db->lastInsertId(),
    'degats' => 0,
    'niveau' => 0,
    'experience' => 0,
    'strength' => 0,
    ]);
}

public function count()
{
    return $this->db->query('SELECT COUNT(*) FROM personnages')->fetchColumn();
}

public function delete(Personnage $perso)
{
    $this->db->exec('DELETE FROM personnages WHERE id = '.$perso->id());
}

public function exists($info)
{
    if (is_int($info)) // On veut voir si tel personnage ayant pour id $info existe.
    {
    return (bool) $this->db->query('SELECT COUNT(*) FROM personnages WHERE id = '.$info)->fetchColumn();
    }
    
    // Sinon, c'est qu'on veut vérifier que le nom existe ou pas.
    
    $q = $this->db->prepare('SELECT COUNT(*) FROM personnages WHERE nom = :nom');
    $q->execute([':nom' => $info]);
    
    return (bool) $q->fetchColumn();
}

public function get($info)
{
    if (is_int($info))
    {
    $q = $this->db->query('SELECT id, nom, degats, niveau, experience, strength, type FROM personnages WHERE id = '.$info);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    switch ($donnees['type'])
    {
        case 'Guerrier': return new Guerrier($donnees); 
        break;
        case 'Magicien': return new Magicien($donnees); 
        break;
        case 'Archer': return new Archer($donnees); 
        break;
    }

    }
    else
    {
    $q = $this->db->prepare('SELECT id, nom, degats, niveau, experience, strength, type FROM personnages WHERE nom = :nom');
    $q->execute([':nom' => $info]);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    switch ($donnees['type'])
    {
        case 'Guerrier': return new Guerrier($donnees); break;
        case 'Magicien': return new Magicien($donnees); break;
        case 'Archer': return new Archer($donnees); break;
    }

    }
}

public function getList($nom)
{

    $persos = [];

    $q = $this->db->prepare('SELECT id, nom, degats, niveau, experience, strength, type FROM personnages WHERE nom <> :nom ORDER BY nom');
    $q->execute([':nom' => $nom]);
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
    foreach ($donnees as $donnee) {

    switch ($donnee['type'])
    {
        case 'mage': array_push ($persos, new mage($donnee)); break;
        case 'ranger': array_push ($persos, new ranger($donnee)); break;
        case 'rogue':array_push ($persos, new rogue($donnee)); break;
        case 'warrior':array_push ($persos, new warrior($donnee)); break;
    }
    }

    return $persos;

}
public function update(Personnage $perso)
{
    if($perso->experience() >= 100){
    $perso->setExperience(0);
    $perso->setNiveau(1);
    $perso->setStrength($perso->niveau());
    }
    $q = $this->db->prepare('UPDATE personnages SET degats = :degats, niveau = :niveau, experience = :experience, strength = :strength WHERE id = :id');
    

    $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
    $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);
    $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
    $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
    $q->bindValue(':strength', $perso->strength(), PDO::PARAM_INT);

    $q->execute();
}

public function setDb(PDO $db)
{
    $this->db = $db;
}
}
