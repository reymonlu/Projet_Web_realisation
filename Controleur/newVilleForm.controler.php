<?php
require_once("../Modele/villeDAO.model.php");

//Récupération des champs du formulaire
if(isset($_POST['champ_cp'])){
  $cp=$_POST['champ_cp'];
}

if(isset($_POST['champ_nom'])){
  $nom=$_POST['champ_nom'];
}

$villeDAO = new villeDAO();//Ouverture de la base pour les villes

$villeDAO->addVille($cp,$nom);//Ajout de ville

header('Location:../Controleur/adminBackOffice.controler.php');

?>
