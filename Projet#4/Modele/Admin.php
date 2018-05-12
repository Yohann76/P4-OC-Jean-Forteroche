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

public function AfficherCommentaireSignaler() {
  // Afficher les commentaires signaler 
  // Selectionne tout les com_signaler au dessus de 0 depuis la table T_comentaire
   $sql = ' SELECT *    FROM T_COMMENTAIRE WHERE COM_SIGNALER>0    ';    
  $CommentaireSignaler = $this->executerRequete($sql);
  // Transformation pdo statement en array
  return $CommentaireSignaler->fetchAll();  // Retourne un tableau   
}

public function AfficherCommentaireNonSignaler() {
  //Selectionne tout les com_signaler = a 0 depuis la table T_comentaire
  $sql = ' SELECT *    FROM T_COMMENTAIRE WHERE COM_SIGNALER=0    ';    
  $CommentaireNonSignaler = $this->executerRequete($sql);
  // Transformation pdo statement en array
  return $CommentaireNonSignaler->fetchAll();  // Retourne un tableau   

}

  // Modification d'un chapitre dans la base 
public function ModifierChapitreBase($id_Chap) {
    $sql = '  UPDATE T_CHAPITRE
     SET CHA_TITRE = "'.$_POST['ModifTitreChap'].'"      ,
         CHA_CONTENU = "'.$_POST['ModifContenuChap'].'"   
         WHERE CHA_ID=?  ' ; 
    $this->executerRequete($sql, array($id_Chap));
}

 // Suppression d'un hapitre dans la base  
public function  SupprimerChapitreBase($com_idsupr) { 
    // Supprime la ligne du chapitre selon cha_id 
    $sql = '  DELETE FROM T_COMMENTAIRE WHERE COM_ID=? ' ;     
    $this->executerRequete($sql, array($com_idsupr));
}

// Supprimer un commentaires 
public function SupprimerCommentaireReq($id_comsupr) {
     $sql = '  DELETE FROM  T_COMMENTAIRE      WHERE COM_ID=?  ' ;  
      $this->executerRequete($sql, array($id_comsupr));
}



} // Fin de class admin 
