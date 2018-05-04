<?php
session_start();

//Accès impossible sans la variable session de l'admin
if(isset($_SESSION['id'])){
  // code...
  require_once("../Modele/membreDAO.model.php");

  $membreDAO = new membreDAO();
  if (isset($_GET['membreID'])) {
    $membreDAO->deleteMembre($_GET['membreID']);
  }

  header('Location:../Controleur/adminBackOffice.controler.php');
}

else {
  header('Location:mainControler.controler.php');
}

?>
