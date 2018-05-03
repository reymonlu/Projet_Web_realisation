<?php
require_once("../Modele/villeDAO.model.php");

if(isset($_POST['champ_cp'])){
  $cp=$_POST['champ_cp'];
}

if(isset($_POST['champ_nom'])){
  $nom=$_POST['champ_nom'];
}

$villeDAO = new villeDAO();

$villeDAO->addVille($cp,$nom);

header('Location:../Controleur/adminBackOffice.controler.php');

?>
