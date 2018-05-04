<?php
  session_start();

//Accès impossible sans la variable session de l'admin
  if (!isset($_SESSION['id'])) {
    header('Location:../index.php');
  }

  else {
    // code...
    require_once("../Modele/villeDAO.model.php");
    require_once('../Modele/view.class.php');
    require_once('../Modele/membreDAO.model.php');
    require_once("../Modele/trajetDAO.model.php");

    $view = new View();

    $villeDAO = new villeDAO(); //Ouverture de la base pour les villes
    $membreDAO = new membreDAO();//Ouverture de la base pour les membres
    $trajetDAO = new trajetDAO();//Ouverture de la base pour les trajets


    $membre = $membreDAO->getMembreById($_SESSION['id']);
    $lesVilles = $villeDAO->getAllville();

    //Paramétrage et affichage de la vue
    $view->villes = $lesVilles;
    $view->pseudoMembre=$membre->getPseudo();
    $view->avatarMembre=$membre->getAvatar();
    $view->idMembre = $_SESSION['id'];
    $view->show('../Vue/newTrajet.vue.php');
  }
 ?>
