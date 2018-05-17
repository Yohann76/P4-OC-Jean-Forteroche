<?php


 // Classe abstraite Modèle.
 
abstract class Modele {

    private $bdd;
    // Requete PDO 
    // Requete paramétrer donc protéger des injection SQL
    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function getBdd() {
        if ($this->bdd == null) {
        // Création de la connexion
        // Serveur :
        $this->bdd = new PDO('mysql:host=openclasiqyoyo.mysql.db;dbname=openclasiqyoyo;charset=utf8','openclasiqyoyo', 'Alexandre4001',
        // Localhost : 
        // $this->bdd = new PDO('mysql:host=localhost;dbname=chapitre;charset=utf8', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }

}








