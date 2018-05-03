<?php $this->titre = "ModifChapitre"; ?>

      <nav id="navAdmin">
          <div id="Nav1">      <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a></div>
          <div id="Nav2">      <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier/Supprimer un chapitre</a></div>
          <div id="Nav3">      <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a></div>
          <div id="Nav4">      <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   </div>
      </nav>

<div id="ConteneurAdmin">
<!-- Liste des chapitres A retirer  --> 
     <?php foreach ($chapitre as $oneChapitre): ?> 
     <a href="<?= "index.php?action=chapitre&id=" . $oneChapitre['id'] ?>">  <!-- Lien avec info ajouter id billet --> 
     <h1 class="titreBillet"><?= $oneChapitre['titre'] ?></h1> <!-- Titre du bilet --> 
                 </a>
     <?php endforeach; ?>
     <hr>
<!-- Essai liste deroulante pour selectionner le chapitre --> 
    <div id="ZoneAjouterChap">
         <form method="post" action="index.php?action=ModifierChapitre">
         <p>
         <label for="pays">Veuillez selectionner un chapitre</label><br />
     
         <select name="SelectChap" id="selectionchapitre">
         <?php foreach ($chapitre as $oneChapitre): ?>
             <option value="   <?=$oneChapitre['id'] ?>"    >  <?= $oneChapitre['titre'] ?>  </option>
         <?php endforeach; ?>
         </select>
       </br>
<!-- Modifier le titre du chapitre --> 
       <input type="text" name="ModifTitreChap" id="pseudo" value=" <?= $oneChapitre['titre'] ?>"  />  
 <!--Contenu de modification --> 
      
        <textarea name="ModifierChapContenu" id="ameliorer" rows="10" cols="50">
        <?=$oneChapitre['contenu'] ?>
        </textarea>   
        <input type="submit" value="ModifierChapitre" class="bouton_commenter" />
        </div>
       
         </p>


        <hr>
         <p> Veuillez selectioner un chapitre puis cliquer sur
         "supprimer" pour le suprimer </p> 
        </form>
 </div> <!-- Fin de de conteneur admin --> 