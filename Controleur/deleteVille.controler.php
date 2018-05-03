<?php
session_start();

if(isset($_SESSION['id'])){
  // code...
  require_once("../Modele/villeDAO.model.php");

  $villeDAO = new villeDAO();
  if (isset($_GET['cp'])) {
    $villeDAO->deleteVille($_GET['cp']);
  }

  header('Location:../Controleur/adminBackOffice.controler.php');
}

else {
  header('Location:mainControler.controler.php');
}

?>
