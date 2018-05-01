<?php
require_once('../Modele/view.class.php');
//démarrage de la session
session_start();
$sessionEncours = false;

//RECUPERATION DES DONNEES
//création de la vue à parametrée
$view = new View();
//On veut savoir s'il y a une connexion en cours
//si oui, il faut récupérer certaines information dans la base de donnée

if(isset($_SESSION['id'])){
  $sessionEncours == true;
  $view->sessionEncours = $sessionEncours;
}
else{
  //On affiche la vue avec une possibilité de connexion
  //On met s'il y a une connexion
  $view->sessionEncours = $sessionEncours;
}



//UTILISATION DES DONNEES




//AFFICHAGE DE LA VUE
//On peut lancer la vue parametrée
$view->show('../Vue/mainVue.vue.php');


 ?>
