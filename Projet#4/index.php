<?php
require 'Controleur/Routeur.php';
session_start(); // Start session 
/*
$_SESSION['login'] = ;
$_SESSION['password'] = 'durand';  */




//define('LOGIN','yohann');
//define('PASSWORD','durand');


  // ******************************* */ 
$routeur = new Routeur();
$routeur->routerRequete();


// Egalement initier la session pour maintenir la zone admin 
// Session start, variable existante ? $_SESSION








/*
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['login'] = 'yohann';   
$_SESSION['password'] = 'durand';  




*/


/* 
Tache en priorité : 

-Faire le signalement de commentaire en incrémentation
-Commencer le design de la partit admin avec formulaire etc.. 
-Faire l'apercu sub ctr dans la function 
-Ajouter un bouton deconexion dans la partit admin ( session_destroy() )
-Changer la favicon 

*/

/* Probléme :

Envoie avec Tiny : solution enlever le required ; 

*/ 