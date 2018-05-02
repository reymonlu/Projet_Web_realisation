<?php
session_start();
require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once('../Modele/villeDAO.model.php');
require_once("../Modele/trajetDAO.model.php");
require_once("../Modele/demandeDAO.model.php");
//////////////////////////////////////////////////////////////////
/////////////////////RECUPERATION DES DONNEES/////////////////////
//////////////////////////////////////////////////////////////////
//Récupération de l'id de l'utilisateur en coiurs
$idUtilisateur = (isset($_SESSION['id'])) ? $_SESSION['id'] : null;

//On récupère le numéro de trajet
$idTrajet = (isset($_POST['numTrajet'])) ? $_POST['numTrajet'] : null;

//Ouverture des DAO
$trajetDAO = new TrajetDAO();
$membreDAO = new membreDAO();
$demandeDAO = new demandeDAO();


//////////////////////////////////////////////////////////////////
/////////////////////TRAITEMENTS//////////////////////////////////
//////////////////////////////////////////////////////////////////
//si on a une variable de session et un id de trajet

if($idUtilisateur != null && ($idTrajet != null && $idUtilisateur != $trajetDAO->getTrajetbyID($idTrajet)->getConducteur())){
  //On vérifie qu'il y a des places disponibles
  if($trajetDAO->getnbrePlaceDispo($idTrajet) > 0){
    //On regarde s'il n'y a pas déjà de demande au même nom
    $maDemande = $demandeDAO->getDemande($idUtilisateur,$idTrajet);
    //Si on ne trouve Rien ET que ce n'est pas le trajet de l'utilisateur
    if($maDemande == null){
      //On fait notre ajout de la demande
      $demandeDAO->addDemande($idUtilisateur,$idTrajet);
      //Et on redirige
      header('Location:../index.php');
    }
    else{
       echo'test';
    }
  }
}

//On redirige sur index une fois que le trajet est validé
header('Location:../index.php');


 ?>
