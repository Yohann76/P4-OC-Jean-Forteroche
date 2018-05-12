<?php $this->titre = "Supprimerchapitre"; ?>

<nav id="navAdmin">
         <div id="Nav1">      <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a></div>
         <div id="Nav2">      <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a></div>
         <div id="Nav3">      <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a></div>
         <div id="Nav4">      <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a></div>
         <div id="Nav5">      <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   </div>
      </nav>

<div id="ConteneurAdmin">
   
    <!-- ********************* --> 
    
      <div id="ZoneAjouterChap"> 
    
    
         <form method="POST" action="index.php?action=chapitresupr" >
             
         <label for="pays">Veuillez selectionner un chapitre a SUPPRIMER</label><br />
     
         <select name="SelectSuprChap" id="selectionchapitre">

         <?php foreach ($chapitre as $oneChapitre): ?>

             <option value="   <?=$oneChapitre['id'] ?>   "     selected>     <?=  $oneChapitre['titre'] ?>  </option> 
             <!-- Mettre un lien value id --> 

         <?php endforeach; ?>
             
            <input type="submit" value="Supprimer le chapitre" class="bouton_commenter" />
        </select>
          </form>
      </div>
    
    
     <!-- -------------------- --> 
   <?php foreach ($chapitre as $oneChapitre): ?> 
    <article>
        <header>
            
            <div id="TitreChap">
                 <a href="<?= "index.php?action=chapitresupr&id=" . $oneChapitre['id'] ?>">  <!-- Lien avec info du chapitre --> 
                 <h1 class="titreBillet"><?= $oneChapitre['titre'] ?></h1> <!-- Titre du bilet --> 
                 </a>
            </div> 
        </header>
    </article>
    <hr>
<?php endforeach; ?>
<!-- -------------------- --> 
     <hr>


    
</div>  <!-- Fin div conteneur admin --> 





