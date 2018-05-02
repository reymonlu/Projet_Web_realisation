<?php
session_start();
require_once("../Modele/membreDAO.model.php");
require_once("../Modele/view.class.php");

////////////////////////////////////////////////////////////////////
////////////////////RECUPERATION DES DONNEES////////////////////////
////////////////////////////////////////////////////////////////////
  $error =""; //Variable pour sotoker un probleme dans le formulaire
  //La base de donnée pour regarder si le compte n'existe pas
  $monDAO = new membreDAO();

  //Récupération de toutes les valeurs du formulaire
  $prenom = $_POST['prenom'];
  $pseudo = $_POST['pseudo'];
  $nom = $_POST['nom'];
  $dateNaissance = $_POST['dateNaiss'];
  $telephone = $_POST['telephone'];
  $motDePasse = $_POST['motDePasse'];
  $verifPasse = $_POST['verifPass'];
  $mail = $_POST['mail'];
  $avatar = $_POST['avatar'];


  ////////////////////////////////////////////////////////////////////
  ////////////////////TRAITEMENT DES DONNEES//////////////////////////
  ////////////////////////////////////////////////////////////////////
  //Commencement des vérifications
  //age sur la base de l'année
  $anneeUtilisateur = explode('-',$dateNaissance);
  $anneeNow =date('Y');
  if((intval($anneeNow) - intval($anneeUtilisateur[0])) < 18){
    $error = "Vous devez être majeur";
  }
  //Vérification du pseudo
  else if($monDAO->getMembreByPseudo($pseudo) != null){
    $error = "Ce pseudo est déjà pris";
  }
  //Verification de la longueur du mdP
  else if(strlen($motDePasse) < 8){
    $error = "Votre mot de passe n'est pas assez long";
  }
  //Verification de la longueur du mdP
  else if(strlen($motDePasse) < 8){
    $error = "Votre mot de passe n'est pas assez long";
  }
  //Vérification du téléphone
  else if(!preg_match("/[0-9]{10}$/",$telephone)){
    $error = "Votre téléphone n'est pas au bon format";
  }
  //vérification du mot de passe
  else if($verifPasse != $motDePasse){
    $error = "Vos mots de passe ne sont pas identiques";
  }

  //Sinon, on peut créer le membre et l'insérer dans la base
  else{
      $monDAO->addMembre($nom,$prenom,$pseudo,$dateNaissance,$telephone,$motDePasse,$mail,$avatar);
    //On recherche notre nouveau membre
    $monMembre = $monDAO->getMembreByPseudo($pseudo);
    $_SESSION['id'] = $monMembre->getID();
    $_SESSION['avatar'] = $monMembre->getAvatar();
    header('Location:../index.php');
  }


  ////////////////////////////////////////////////////////////////////
  ////////////////////Lancement de la vue si erreur///////////////////
  ////////////////////////////////////////////////////////////////////

  //Il faut récupérer tous les liens avatars pour les afficher
  $mesAvatar = array();
  if($monDossier = opendir('../Ressource/avatar')){
    //tant que l'on peut lire des valeurs
    while(false != ($fichier = readdir($monDossier)))
    if($fichier != '.' && $fichier != '..'){
      $mesAvatar[] = $fichier;
    }
  }
  else{
    $mesAvatar = null;
  }
  //Si on arrive là, c'est qu'il y a eu un problème donc on relance
  //l'inscription
  $view = new View();
  $view->mesAvatar = $mesAvatar;
  $view->error = $error;
  $view->show('../Vue/inscription.vue.php');


 ?>
