<?php

session_start();
require_once("../Modele/trajetDAO.model.php");

$trajetDAO = new trajetDAO();

if (!empty($_POST['champ_descrip'])) {
  // code...
  $description = $_POST['champ_descrip'];
}

if (!empty($_POST['champ_prix'])) {
  // code...
  $prix = $_POST['champ_prix'];
}

if (!empty($_POST['champ_nbPlaces'])) {
  // code...
  $nbPlaces = $_POST['champ_nbPlaces'];
}

if (!empty($_POST['champ_dateDep'])) {
  // code...
  $dateDep = $_POST['champ_dateDep'];
}

if (!empty($_POST['champ_estimation'])) {
  // code...
  $estimation = $_POST['champ_estimation'];
}

if (!empty($_POST['champ_villeDep'])) {
  // code...
  $villeDepart = $_POST['champ_villeDep'];
}

if (!empty($_POST['champ_villeArr'])) {
  // code...
  $villeArrivee = $_POST['champ_villeArr'];
}

//$conducteur=$_SESSION['id'];
$conducteur=1;

$trajetDAO->addTrajet($description, $prix, $nbPlaces, $dateDep, $estimation, $conducteur, $villeDepart, $villeArrivee);

header('Location:../Controleur/mainControler.controler.php');
?>
