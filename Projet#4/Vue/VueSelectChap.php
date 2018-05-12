<?php $this->titre = "ModifunChapitre"; ?>

<nav id="navAdmin">
         <div id="Nav1">      <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a></div>
         <div id="Nav2">      <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a></div>
         <div id="Nav3">      <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a></div>
         <div id="Nav4">      <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a></div>
         <div id="Nav5">      <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   </div>
      </nav>

<div id="ConteneurAdmin">

<p> Vous pouvez modifier votre chapitre </p>  
<div id="ZoneAjouterChap">
        <form method="post" action="index.php?action=XXX">
            <!-- Modifier le titre du chapitre -->  
                <input type="text" name="ModifTitreChap" id="ModifTitre" value=" <?=$chapitre['titre'] ?>   "  /> 

            <!--Contenu de modification --> 
                <textarea name="ModifContenuChap" id="ModifChapitre" rows="10" cols="50">
                <?= $chapitre['contenu'] ?>
                </textarea>   
            
            
                <input type="hidden" name="idChap" id="ModifTitre" value=" <?=$chapitre['id'] ?>   "  /> 
            
            
                <input type="submit" value="Modifier le chapitre" class="bouton_modifier" />
    </form>
<hr>
</div>

  <p> Veuillez selectioner un chapitre puis cliquer sur
  "supprimer" pour le suprimer </p> 
 <hr> 


</div> <!-- Fin de de conteneur admin --> 