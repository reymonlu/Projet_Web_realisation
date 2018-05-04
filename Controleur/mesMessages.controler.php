<?php
  session_start();
  //**RECUPERATION DES DONNEES**

  ////////////////////////////////////////////////////////////////////////////////
  /////////////////////////////RECUPERATION DES DONNEES///////////////////////////
  ////////////////////////////////////////////////////////////////////////////////


//Vérification de l'existence du sessionID et passage des paramètre à la vue
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

    $membre = $membreDAO->getMembreById($_SESSION['id']); //on prends le membre de l'id de sessin
    $messagesEnvoyes = $messageDAO->getMessagesEnvoyes($_SESSION['id']); //on passe les listes de
    $messagesRecus=$messageDAO->getMessagesRecus($_SESSION['id']); //ses messages recu et envoyé à la vue

    $tableauPseudoDestinataire = array(array()); //on créé deux listes contenant la liste
    $tableauPseudoExpediteur = array(array()); //des pseudos des destinataires et expediteurs
    $i=0;


    //on remplit les deux tableaux des pseudos
    if($messagesRecus!=null){
      foreach ($messagesRecus as $unMessage) {
        $tableauPseudoExpediteur [$i] = $membreDAO->getMembreById($unMessage->getExpediteur())->getPseudo();  //pseudo de l'expéditeur
        $i++;
      }
    }

    $i=0;

    if($messagesEnvoyes!=null){
      foreach ($messagesEnvoyes as $unMessage) {
        $tableauPseudoDestinataire [$i] = $membreDAO->getMembreById($unMessage->getDestinataire())->getPseudo();  //pseudo de l'expéditeur
        $i++;
      }
    }

    //si erreur existe cela signifie que newMessage_form a retourné une Erreur
    //ce qui signifierait que l'utilisateur a oublié de mettre un destinataire
    //ou a mis un pseudo erroné

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

    $view->show('../Vue/mesMessages.vue.php');
  }
 ?>
