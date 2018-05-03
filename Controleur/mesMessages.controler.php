<?php
  session_start();
  //**RECUPERATION DES DONNEES**

  if (!isset($_SESSION['id'])) {
    // code...
    header('Location:../index.php');
  }

  else {
    // code...
    require_once('../Modele/view.class.php');
    require_once('../Modele/membreDAO.model.php');
    require_once("../Modele/messageDAO.model.php");

    $view = new View();

    $membreDAO = new membreDAO();
    $messageDAO = new messageDAO();

    $membre = $membreDAO->getMembreById($_SESSION['id']);
    $messagesEnvoyes = $messageDAO->getMessagesEnvoyes($_SESSION['id']);
    $messagesRecus=$messageDAO->getMessagesRecus($_SESSION['id']);

  //  $tableauMessagesRecus = array(array());
    $tableauPseudoExpediteur = array(array());
    $i=0;

    //on créé un tableau avec le contenu du message et un deuxieme
    //avec le pseudo du destinataire ou de l'expediteur

    if($messagesRecus!=null){
      foreach ($messagesRecus as $unMessage) {
        $tableauPseudoExpediteur [$i] = $membreDAO->getMembreById($unMessage->getExpediteur())->getPseudo();  //pseudo de l'expéditeur
        $i++;
      }
    }

  //  $tableauMessagesEnvoyes = array(array());
    $tableauPseudoDestinataire= array(array());
    $i=0;

    if($messagesEnvoyes!=null){
      foreach ($messagesEnvoyes as $unMessage) {
        $tableauPseudoDestinataire [$i] = $membreDAO->getMembreById($unMessage->getDestinataire())->getPseudo();  //pseudo de l'expéditeur
        $i++;
      }
    }

    if(isset($_GET['erreur'])){
      if($_GET['erreur']==1){
        $view->erreur=1;
      }
      else{
        $view->erreur=2;
      }

    }
    //Paramétrage et affichage de la vue
    $view->messagesRecus = $messagesRecus;
    $view->messagesEnvoyes=$messagesEnvoyes;
    $view->tableauDestinataires=$tableauPseudoDestinataire;
    $view->tableauExpediteurs=$tableauPseudoExpediteur;

    $view->pseudoMembre=$membre->getPseudo();
    $view->avatarMembre=$membre->getAvatar();
    //$view->membre = $membre;
    $view->show('../Vue/mesMessages.vue.php');
  }
 ?>
