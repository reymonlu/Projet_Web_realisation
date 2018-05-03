<?php
  session_start();
  //**RECUPERATION DES DONNEES**

  if (!isset($_SESSION['id'])) {
    // code...
    header('Location:../index.php');
  }

  else {
    // code...
    require_once("../Modele/villeDAO.model.php");
    require_once('../Modele/view.class.php');
    require_once('../Modele/membreDAO.model.php');
    require_once("../Modele/trajetDAO.model.php");
    require_once("../Modele/messageDAO.model.php");

    $view = new View();

    $villeDAO = new villeDAO();
    $membreDAO = new membreDAO();
    $trajetDAO = new trajetDAO();

    $membre = $membreDAO->getMembreById($_SESSION['id']);
    $lesVilles = $villeDAO->getAllville();


    //Paramétrage et affichage de la vue
    $view->villes = $lesVilles;
    $view->pseudoMembre=$membre->getPseudo();
    $view->avatarMembre=$membre->getAvatar();
    //$view->membre = $membre;
    $view->show('../Vue/newTrajet.vue.php');
  }
 ?>
