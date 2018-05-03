<?php
require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once('../Modele/villeDAO.model.php');
require_once('../Modele/demandeDAO.model.php');
require_once('../Modele/trajetDAO.model.php');
session_start();

//////////////////////////////////////////////////////////////////
/////////////////////RECUPERATION DES DONNEES/////////////////////
//////////////////////////////////////////////////////////////////
//On récupère le numéro de trajet et le SESSION ID en vérifiant qu'ils existent
$membreDAO = new membreDAO();      //ouverture de la bse pour les membres
$villeDAO = new villeDAO();       //ouverture de la base pour les villes
$trajetDAO = new TrajetDAO();     //ouverture de la base pour les Trajets
$demandeDAO = new demandeDAO();

$idUtilisateur;
$numTrajet;
if(isset($_SESSION['id']) && isset($_POST['numTrajet'])){
  $idUtilisateur = $_SESSION['id'];
  $numTrajet = $_POST['numTrajet'];
}
//sinon on redirige vers le main menu
else{
  header('Location:../index.php');
}
//////////////////////////////////////////////////////////////////
/////////////////////TRAITEMENT DES DONNEES///////////////////////
//////////////////////////////////////////////////////////////////
//On supprime la demande !
  $demandeDAO->deleteDemande($idUtilisateur,$numTrajet);
//Et on redirige
header('Location:../index.php');
