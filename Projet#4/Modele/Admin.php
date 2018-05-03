<?php

require_once 'Modele/Modele.php';



class admin extends Modele {
  // Ajoute un chapitre dans la base  
  public function ajouterChapitre($TitreChap,$ContenuChap) {
    $sql = 'insert into T_CHAPITRE(CHA_DATE,CHA_TITRE,CHA_CONTENU)' // enlever Cha_ID
        . ' values(?, ?, ?)';
    $date = date("Y-m-d H:i:s");    // récupére la date courante 
    $this->executerRequete($sql, array($date,$TitreChap,$ContenuChap));
}


  public function ModifierChapitre($TitreChap,$ContenuChap) {
    // Modification d'un chapitre dans la base 
    $sql = '  UPDATE T_COMMENTAIRE  SET COM_SIGNALER = 1      WHERE COM_ID=?  ' ;  
    $this->executerRequete($sql, array($id_com));
}

} // Fin de class 

/*
 Action a réaliser : 
Chapitre : 

Supression de chapitre 
modification de chapitre 

Commentaire : 

Supprimer un commentaire 
Voir les commentaire signaler en prioriter // Voir pour les delete 

*/ 
