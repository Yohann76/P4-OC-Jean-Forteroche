
<!-- debut doctype html --> 
<!doctype html>
<html lang="fr">
<head>
        <META charset="utf-8" />
        <title><?= $titre ?></title>
        <link rel="icon" href="Contenu/images/favicon1.png" />  
		
        <!-- Javascript ( TinyMCE Cloud-->  
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js? apiKey =lnfchylxlemst3ynxsyi9gn4s46t24w9izko03swk9ioqdhw"></script>
        <script>tinymce.init({ selector:'textarea' });</script>  
        <!-- Script --> 
        <script src="Contenu/js/jquery-3.2.1.js"> </script>       <!-- Bibliotheque JavaScript Jquery   --> 
	    <script src="Contenu/js/Php.Ajax.js">         </script>       <!-- Script Ajax/php --> 

        <!-- Cascading Style Sheets -->
        <link rel="stylesheet" href="Contenu/css/style.css" /> 
        <link rel="stylesheet" href="Contenu/css/style.min.1024.css" /> <!-- Max-Width 1024 --> 
		
        
		<META NAME="keywords" CONTENT="" />
		<META name="description" content="  " />
										
                    
        <!-- FONT AWESOME -->
		<link rel="stylesheet" href="Contenu/font-awesome/css/font-awesome.min.css" />
 </head>





<body class="bg-gray">
	<!-- HEADER --> 
	<header class="visiteur">	
    	<nav class="container">
        	<ul class="menu">
            	<li><img src="Contenu/images/logo-transparent.png"></li>
            	<li class="selected"><a href="index.php">Accueil</a></li>
            	<li ><a href="">Mon histoire</a></li>
            	<li ><a href="/livres">Mes livres</a></li>
            	<li ><a href="/contact">Contact</a></li>   
                <li><a href="index.php?action=chapitre">Chapitre</a></li>           
            </ul>
        </nav>
        
        	<h1 class="titre-page">BILLET SIMPLE POUR L&#039;ALASKA</h1>
            <h2 class="titre-complement">un roman de Jean FORTEROCHE</h2>        
    </header>
	<!-- Contenu --> 
         <?= $contenu ?> <!-- #contenu -->   
	<!-- Fin contenu --> 
    <footer>		
            <div class="container">
                <div class="row link-zone">       
                      <div>
                            <h3>Partie 1 </h3>
                            <p> Bla <br>
                                Bla <br>
                                Bla <br>      
                            </p>
                        </div>
                        <div>
                            <h3>Partie 2 </h3>
                            <p><i class="fa fa-caret-right"></i> <a href="/livres">Bla Bla </a><br>    
                               <i class="fa fa-caret-right"></i> <a href="/livres">Bla Bla</a><br>
                               <i class="fa fa-caret-right"></i> <a href="index.php?action=admin">Admin</a>
                        </div>
                        <div>
                            <h3>Écrivez-moi</h3>
                             <p>Jean FORTEROCHE<br><span>
                              Maison des écrivains et de la littérature<br> 
                              67, bd de Montmorency<br>
                              75016 Paris<br>
                              Tel. 01 55 74 60 90 <br>
                              </span>                          
                        </div>      
                 </div>  
             </div>        
            <div class="copyright">
                <div class="container">
                   <p>&copy; 2017 Jean FORTEROCHE - Billet simple pour l'Alaska - Projet n° 4 - OpenClassrooms DWJ</p>            
                </div>
            </div>
     </footer>


        
    </body>
</html>