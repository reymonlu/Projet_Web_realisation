<?php
session_start();
//header("Location:../index.php");
//require_once('../Modele/compteView.class.php');



//On veut savoir s'il y a une connexion en cours
//si oui, il faut récupérer certaines information dans la base de donnée
//pour afficher les infos de l'utilisateur
if(isset($_SESSION['id'])){

  require_once('../Modele/view.class.php');
  require_once('../Modele/membreDAO.model.php');

  // include ('../Vue/zoneUtilisateurOn.view.php');
  // include ('../Vue/menuNav.vue.php');

  $membreDAO = new membreDAO();
  $membre = $membreDAO->getMembreById($_SESSION['id']);

  $viewCompte = new View();

  $viewCompte->pseudoMembre=$membre->getPseudo();
  $viewCompte->avatarMembre=$membre->getAvatar();
  $viewCompte->prenom=$membre->getPrenom();
  $viewCompte->nom=$membre->getNom();
  $viewCompte->adresseMail=$membre->getEmail();
  $viewCompte->telephone=$membre->getTelephone();

  $viewCompte->show("../Vue/compte.vue.php");

}
else{
  $view->error = "Vous n'avez pas de compte !";
}

// include ('../Vue/zoneUtilisateurOn.view.php');
// include ('../Vue/menuNav.vue.php');

 ?>
