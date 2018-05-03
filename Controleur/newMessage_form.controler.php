<?php

session_start();

require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once("../Modele/messageDAO.model.php");

$messageDAO = new messageDAO();
$membreDAO=new membreDAO();


$membreExpediteur=$membreDAO->getMembreById($_SESSION['id']);
$expediteur=$membreExpediteur->getID();
$signalement=0;

if(isset($_POST['signalement'])){
  $signalement=1;
}

if (!empty($_POST['champ_descriptionMessage'])) {
  // code...
  $description = $_POST['champ_descriptionMessage'];
}


if (!empty($_POST['champ_destinataire'])||$signalement==1) {
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
    $destinataire=$membreDestinataire->getID();
    $messageDAO->addMessage($description,$signalement,$expediteur,$destinataire);
    header('Location:../Controleur/mesMessages.controler.php');
  }
}
else{
  header('Location:../Controleur/mesMessages.controler.php?erreur=2');
}


?>
