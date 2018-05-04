<?php

session_start();

require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once("../Modele/messageDAO.model.php");

////////////////////////////////////////////////////////////////////////////////
/////////////////////////////RECUPERATION DES DONNEES///////////////////////////
////////////////////////////////////////////////////////////////////////////////

$messageDAO = new messageDAO(); //ouverture de la bese pour les messages
$membreDAO=new membreDAO(); //ouverture de la base pour les membres


//l'expediteur est forcement le membre qui est connecté
//on attribut donc son ID à expediteur
$membreExpediteur=$membreDAO->getMembreById($_SESSION['id']);
$expediteur=$membreExpediteur->getID();
$signalement=0;

//si signalement existe cela signifie que la case signalement a été cochée
if(isset($_POST['signalement'])){
  $signalement=1;
}

//on attribut si il existe le contenu du champ_descriptionMessage à description
if (!empty($_POST['champ_descriptionMessage'])) {
  // code...
  $description = $_POST['champ_descriptionMessage'];
}

//si il y a un destinataire ou si le message est un signalement
//on rentre dans la boucle
if (!empty($_POST['champ_destinataire'])||$signalement==1) {
  //(pour un signalement on est pas obligé d'avoir
  //un destinataire, le mesage est automatiquement envoyé à admin)
  if($signalement==1){
    $membreDestinataire=$membreDAO->getMembreById(1);
  }
  else{
    $membreDestinataire =$membreDAO->getMembreByPseudo($_POST['champ_destinataire']);
  }

  if($membreDestinataire==null){
    header('Location:../Controleur/mesMessages.controler.php?erreur=1');
  }
  else{
    //on créé un nouveau message avec tout les paramètres sauf numeromessage qui
    //est incrémenté automatiquement
    $destinataire=$membreDestinataire->getID();
    $messageDAO->addMessage($description,$signalement,$expediteur,$destinataire);
    header('Location:../Controleur/mesMessages.controler.php');
  }
}
else{
  header('Location:../Controleur/mesMessages.controler.php?erreur=2');
}


?>
