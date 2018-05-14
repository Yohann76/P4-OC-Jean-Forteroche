<?php $this->titre = "Supprimerchapitre"; ?>
<nav id="navAdmin">
              <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a>
              <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a>
              <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a>
              <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a>
              <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   
      </nav>
    



<div id="ZoneAjouterChap"> 
    
    
    <form method="POST" action="index.php?action=chapitresupr" >
        
    <label for="pays"><h2> Veuillez selectionner un chapitre a SUPPRIMER </h2> </label><br />

    <select name="SelectSuprChap" id="selectionchapitre">

    <?php foreach ($chapitre as $oneChapitre): ?>

        <option value="   <?=$oneChapitre['id'] ?>   "     selected>     <?=  $oneChapitre['titre'] ?>  </option> 
        <!-- Mettre un lien value id --> 

    <?php endforeach; ?>
        
       <input type="submit" value="Supprimer le chapitre" class="bouton_supprimer"    Onsubmit="return attention();" />
   </select>
     </form>
 </div>




<script src="Contenu/js/script.js">         </script>       <!-- Script  --> 
    

   


    






