<?php

require_once 'Modele/Modele.php';
require_once 'Modele/Chapitre.php';
require_once 'Modele/Admin.php';
require_once 'Vue/Vue.php';



class ControleurAdmin { 
    private $oneChapitre;
    private $commentaire;
    private $admin;

    public function __construct() {
        $this->chapitre = new chapitre();
        $this->commentaire = new commentaire();
        $this->admin = new admin();
    }

    // Fonction Pour generer la vue Acces 
    public function AccesAdmin (){
        $vue = new Vue("acces");    // Generation de la vue Acces 
        $vue->generer(array());
    }


    // Function de connexion Admin   
public function ConnexionAdmin() {   
     if  (   
             ( isset($_POST["login"]) && ($_POST["login"] == "yohann")  &&
              isset($_POST["password"]) && ($_POST["password"] == "durand")  )
              ||
             ( isset($_SESSION["login"]) && ($_SESSION["login"] == "yohann")  &&
               isset($_SESSION["password"]) && ($_SESSION["password"] == "durand")  )
     )

    { 
        $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre 
        
        $vue = new Vue("Admin");    // Generation de la vue Admin 
        $vue->generer(array('chapitre' => $chapitre, ));
    //    $vue->generer(array());

        
        $_SESSION['login'] = 'yohann';  // On stock dans la session 
        $_SESSION['password'] = 'durand'; 
    }
    else {  // si mauvais mots de passe 
        $vue = new Vue("Acces");    // Generation de la vue ACCES
        $vue->generer(array());
    }  
}  // Fin ConnexionAdmin 

public function DeconnexionAdmin()  {
    session_destroy() ;         // On détruit la session et on revien a la vue acces 
    $vue = new Vue("Acces");    // Generation de la vue ACCES
    $vue->generer(array());
}

// Ajoute un chapitre a la base 
public function AdChapitre() {
    // recuperation du formulaire mis dans les variables 
      $TitreChap =  $_POST['TitreChap'];   
      $ContenuChap =  $_POST['ContenuChap'];
      $this->admin->ajouterChapitre($TitreChap, $ContenuChap); 
      // Ajout des info des chapitre pour les avoir la liste acceuil 
      $chapitre = $this->chapitre->getChapitre();
      // rediriger vers la vueAcceuil 
      $vue = new Vue("Accueil");
      $vue->generer(array('chapitre' => $chapitre));
}
/* **************************************************************** */ 

// On affiche la vue de la modifchap de la zone admin 
public function ModificationChapitre()  {   // Modification et suppression 
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre 

    $vue = new Vue("ModifChapitre");    // Generation de la vue ModifChapitre
    $vue->generer(array('chapitre' => $chapitre));
} 




//Modification d'un chapitre dans la base 
public function ModifierChapitree()  { 
    $select_id =  $_POST['SelectChap']; // recupére l'id du champ ( name = select Chap )
    $ModifChapContenu = $_POST['ModifierChapContenu '];   // recup champs contenu modif 
}


/* ************* */ 

public function VoirCommentaire()  {  
    $chapitre = $this->chapitre->getChapitre(); // On ajoute les info du chapitre 
    // ajouter commentaire
    $vue = new Vue("VoirCom");    // Generation de la vue VoirCom
    $vue->generer(array('chapitre' => $chapitre));
} 




/* *************************************** */

/* **************************************** */ 


}  // fin de class controleur admin 



// A faire : 
// Function de deconnexion Admin  




