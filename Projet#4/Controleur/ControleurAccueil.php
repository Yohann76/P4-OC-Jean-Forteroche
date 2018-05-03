<?php

require_once 'Modele/Modele.php';
require_once 'Modele/Chapitre.php';
require_once 'Modele/Admin.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $oneChapitre;

    public function __construct() {
       $this->chapitre = new chapitre(); // Bonne conscruct de base 
    }

    // Function qui affiche la page d'accueil 
    public function accueil() {
       $chapitre = $this->chapitre->getChapitre();

       $vue = new Vue("Accueil");
       $vue->generer(array('chapitre' => $chapitre));
   //     $vue = new Vue("Accueil");  // BON
   //     $vue->generer(array());  // BON 
    }

    
}
