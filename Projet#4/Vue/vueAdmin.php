<?php $this->titre = "Zone admin"; ?>


<!--  Panneau Admin --> 
<nav id="navAdmin">
         <div id="Nav1">      <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a></div>
         <div id="Nav2">      <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a></div>
         <div id="Nav3">      <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a></div>
         <div id="Nav4">      <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a></div>
         <div id="Nav5">      <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   </div>
      </nav>


<div id="ConteneurAdmin">
    <br/>
    <p class="center"> Bienvenue Jean Forteroche </p> 
    <hr>
     <br/>
    <p class="center">  Ajouter un chapitre   </p> 

    <div id="ZoneAjouterChap">
         <form method="post" action="index.php?action=AjouterChapitre">
         <input id="TitreChapitre" name="TitreChap" type="text" placeholder="Titre de votre chapitre"  required />
         <br/>       
         <textarea id="contenuChapitre" name="ContenuChap" rows="4" placeholder="Contenu du chapitre"  >  </textarea>
	     <br/> 
         <input type="submit" value="Ajouter le chapitre" class="bouton_commenter" />
        </form>
    </div>
		
</div> <!-- Fin de de conteneur admin --> 
<!-- 

    Il faut un formulaire pour pouvoir envoyer des info dans la bdd 




arborescance :
page admin
    Chapitre 
        Ajouter un chapitre
        Modifier un chapitre 
        supprimer un chapitre 
        Lire un chapitre




    Commentaire 
        Suprimer un commentaire ( les signaler a droite )
--> 





