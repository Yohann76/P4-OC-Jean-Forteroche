<?php $this->titre = "Acceuil"; ?>

<!-- Afficher les listes des chapitre --> 
<?php foreach ($chapitre as $oneChapitre):  // Boucle foreach avec $billets as $billet 
    ?>
    <article>
        <header>
            <div id="TitreChap">
                 <a href="<?= "index.php?action=chapitre&id=" . $oneChapitre['id'] ?>">  <!-- Lien avec info ajouter id billet --> 
                 <h1 class="titreBillet"><?= $oneChapitre['titre'] ?></h1> <!-- Titre du bilet --> 
                 </a>
            </div>

            <div id="DateChap"> 
                <time>
                <?= $oneChapitre['date'] ?> <!-- date du bilet --> 
                </time>
            </div>  

        </header>

        <div id="ContenuChap"> 
            <p>
            <?= $oneChapitre['contenu'] ?> <!-- Contenu du bilet --> 
            </p>
        </div>

    </article>
    <hr />
<?php endforeach; ?>





         
           
          
        
            
               
         







