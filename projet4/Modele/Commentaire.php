<?php

require_once 'Modele/Modele.php';

class commentaire extends Modele {

    // Renvoie la liste des commentaires associés à un chapitre
    public function getCommentaires($idoneChapitre) {
        $sql = 'select COM_ID as id, COM_DATE as date,'
                . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from t_commentaire'
                . ' where CHA_ID=?';
        $commentaires = $this->executerRequete($sql, array( $idoneChapitre));
        return $commentaires;
    }


    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu,  $idoneChapitre  ) {
        $sql = 'insert into t_commentaire(COM_DATE, COM_AUTEUR, COM_CONTENU,CHA_ID)'
            . ' values(?, ?, ?, ?)';
        $date = date("Y-m-d H:i:s");    // récupére la date courante 
        
        $this->executerRequete($sql, array($date, $auteur, $contenu,  $idoneChapitre ));
    }


    // Signaler un commentaires   // met un commentaire a 1 
    public function SignalerCommentaire($id_com) {
        $sql = '  UPDATE t_commentaire  SET COM_SIGNALER = 1      WHERE COM_ID=?  ' ;  
        $this->executerRequete($sql, array($id_com));
    }
    
}