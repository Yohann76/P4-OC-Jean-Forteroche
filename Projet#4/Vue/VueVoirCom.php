<?php $this->titre = "Voircom"; ?>

<nav id="navAdmin">
         <div id="Nav1">      <a href="index.php?action=admin"  class="LienNav">Ajouter un chapitre</a></div>
         <div id="Nav2">      <a href="index.php?action=ModifChapitre"  class="LienNav">Modifier un chapitre</a></div>
         <div id="Nav3">      <a href="index.php?action=SuprChapitre"  class="LienNav">Supprimer un chapitre</a></div>
         <div id="Nav4">      <a href="index.php?action=VoirCom"  class="LienNav">Voir les commentaires</a></div>
         <div id="Nav5">      <a href="index.php?action=Deconnexion"  class="LienNav">Deconnexion</a>   </div>
      </nav>

<div id="ConteneurAdmin">

<!-- Liste des chapitres A retirer  --> 

 <div id="ContenerFlex"> 

      <div id="ContenerDivSignaler1"> 
      <p> Voici les commentaires signalé par les utilisateurs : </p> 
          
          
          <!-- boucle la liste des commentaires -->          
          <!-- Boucle n°1 --> 
          <?php foreach ($ListeCommentaires as $CommentaireSignaler): ?>
              <div id="ComSignaler"> 
                  <?= $CommentaireSignaler['COM_AUTEUR'] ?> a dit : <br/><hr> <?= $CommentaireSignaler['COM_CONTENU'] ?> <br/> 
                  <!-- Test recupération de titre chapitre --> 

                  <?= $CommentaireSignaler['CHA_ID'] ?>      
                          

                  <!-- Selectioner ce commentaire pour le Suprimer -->
                  <form method="post" action="index.php?action=SupprimerCommentaire">
                      <input type="hidden" name="com_id" value=" <?= $CommentaireSignaler['COM_ID'] ?> " />  
                      <input type="hidden" name="idchapsupr" value="<?= $CommentaireSignaler['CHA_ID'] ?>" />
                      <input type="submit" value="Supprimer le commentaire" class="bouton_signaler" />
                      </form>
              </div> 
          <?php endforeach; ?>          
     </div>
     

    <!-- Commentaire non signaler --> 
     <div id="ContenerDivSignaler2"> 
     <p> et Voici le reste des commentaires Non Signaler</p>
          <?php foreach ($ListeCommentairesNonSignaler as $CommentaireNonSignaler): ?>
              <div id="ComSignaler"> 
                  <?= $CommentaireNonSignaler['COM_AUTEUR'] ?> a dit : <?= $CommentaireNonSignaler['COM_CONTENU'] ?> <br/> 
                    <!-- Selectioner ce commentaire pour le Suprimer -->
                      <form method="post" action="index.php?action=SupprimerCommentaire">
                      <input type="hidden" name="com_id" value=" <?= $CommentaireNonSignaler['COM_ID'] ?> " />  
                      <input type="hidden" name="idchapsupr" value="<?= $CommentaireNonSignaler['CHA_ID'] ?>" />
                      <input type="submit" value="Supprimer le commentaire" class="bouton_signaler" />
                      </form>
              </div> 
          <?php endforeach; ?>
     </div>
       
</div> 

      
<p> display chapitre titre </p> 
<?= var_dump( $chapitre['titre'])  ; ?> 


<p> display chapitres titre </p> 
<?= var_dump( $chapitres['titre'])  ; ?> 


<p> display chapitre </p> 
<?= var_dump( $chapitre)  ; ?> 

</div> <!-- Fin de de conteneur admin --> 

