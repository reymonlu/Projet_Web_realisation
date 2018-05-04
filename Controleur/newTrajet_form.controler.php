<?php

session_start();
require_once("../Modele/trajetDAO.model.php");

$trajetDAO = new trajetDAO();//Ouverture de la base pour les trajets


// ** RECUPERATION DES CHAMPS DU FORMULAIRE **

if (!empty($_POST['champ_descrip'])) {

  $description = $_POST['champ_descrip'];
}

if (!empty($_POST['champ_prix'])) {

  $prix = $_POST['champ_prix'];
}

if (!empty($_POST['champ_nbPlaces'])) {

  $nbPlaces = $_POST['champ_nbPlaces'];
}

if (!empty($_POST['champ_dateDep'])) {
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


$conducteur=$_SESSION['id'];

$trajetDAO->addTrajet($description, $prix, $nbPlaces, $dateDep, $estimation, $conducteur, $villeDepart, $villeArrivee); //Ajout d'un trajet

header('Location:../Controleur/mainControler.controler.php');
?>
