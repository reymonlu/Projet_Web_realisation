<?php
session_start();

//Accès impossible sans la variable session de l'admin
if(isset($_SESSION['id'])){

  require_once("../Modele/villeDAO.model.php");

//Création d'un objet DAO
  $villeDAO = new villeDAO();

//Récupération du code postal de la ville à supprimer
  if (isset($_GET['cp'])) {
    $villeDAO->deleteVille($_GET['cp']);
  }

  header('Location:../Controleur/adminBackOffice.controler.php');
}

else {
  header('Location:mainControler.controler.php');
}

?>
