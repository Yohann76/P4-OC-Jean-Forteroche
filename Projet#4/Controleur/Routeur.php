<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurChapitre.php';
require_once 'Controleur/ControleurAdmin.php';

require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlAccueil;
    private $ctrlChapitre;
    private $ctrlAdmin;

    public function __construct() {
        $this->ctrlAccueil  = new ControleurAccueil();
        $this->ctrlChapitre = new ControleurChapitre();
        $this->ctrlAdmin =    new ControleurAdmin();


    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                // Si l'action chapitre est effectuer 
                if ($_GET['action'] == 'chapitre') {
                    $idoneChapitre = intval($this->getParametre($_GET, 'id'));
                    if ($idoneChapitre != 0) {
                        $this->ctrlChapitre->chapitre($idoneChapitre);
                    }
                    else {
                         throw new Exception("Identifiant de chapitre non valide"); 
                    }
                }
                // Si l'action commenter est effectuer 
                 if  ($_GET['action'] == 'commenter') {
                     $auteur = $this->getParametre($_POST, 'auteur');
                     $contenu = $this->getParametre($_POST, 'contenu');
                     $idoneChapitre = $this->getParametre($_POST, 'id');
                     
                     $this->ctrlChapitre->commenter($auteur, $contenu,  $idoneChapitre);
                }
                //Si l'action signaler est effectuer 
                if  ($_GET['action'] == 'signaler') {
                    $this->ctrlChapitre->signaler();
               }
                 
                      
                // Si l'action admin est effectuer 
                if ($_GET['action'] == 'admin') {  // Si l'action Admin est effectuer alors :
                      $this->ctrlAdmin->ConnexionAdmin();  // Connexion Admin + Session 
                }    

                if ($_GET['action'] == 'Deconnexion') {  // On se deconecte avec l'action Deconnexion 
                    $this->ctrlAdmin->DeconnexionAdmin(); 
                }

                if ($_GET['action'] == 'AjouterChapitre') {  // Ajouter un chapitre a la base 
                $this->ctrlAdmin->AdChapitre(); 
                }

                if ($_GET['action'] == 'ModifChapitre') {  // On affiche la vue admin
                    $this->ctrlAdmin->ModificationChapitre(); 
                }

                if ($_GET['action'] == 'ModifierChapitre') {  // Modifier un chapitre dans la base 
                    $this->ctrlAdmin->ModifierChapitre(); 
                }

                if ($_GET['action'] == 'VoirCom') {  // Si l'action VoirCom est effectuer alors :
                    $this->ctrlAdmin->VoirCommentaire(); 
                }
               

            






            } // Fin du grand grand if 
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }

        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}

  