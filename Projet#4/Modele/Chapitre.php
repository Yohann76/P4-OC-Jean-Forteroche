<?php

require_once 'Modele/Modele.php';



class chapitre extends Modele {

  // Renvoie la liste des billets du blog
  // Utiliser SubSTR()
  public function getChapitre() {
  $sql = 'select CHA_ID as id, CHA_DATE as date,'
  . ' CHA_TITRE as titre, CHA_CONTENU as contenu       from T_CHAPITRE'
  . ' order by CHA_ID     '; // Si on retire le desk on change l'ordre  // by CHA_ID desc  
    $chapitre = $this->executerRequete($sql);
    return $chapitre;
  }

  // Renvoie les informations sur un chapitre
  public function getOneChapitre($idoneChapitre) {
      $sql = 'select CHA_ID as id, CHA_DATE as date,'
      . ' CHA_TITRE as titre, CHA_CONTENU as contenu  from T_CHAPITRE'
      . ' where CHA_ID=?   ';


    $oneChapitre = $this->executerRequete($sql, array($idoneChapitre));
    if ($oneChapitre->rowCount() == 1)
      return $oneChapitre->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun Chapitre ne correspond à l'identifiant '$idoneChapitre'");
    }
      

}  // Fin de classe chapitre 