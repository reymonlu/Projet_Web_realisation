<?php


  require_once('../Modele/view.class.php');
  require_once('../Modele/membreDAO.model.php');

  require_once('../Modele/villeDAO.model.php');
  require_once('../Modele/demandeDAO.model.php');
  require_once('../Modele/trajetDAO.model.php');
  session_start();
  //////////////////////////////////////////////////////////////////////////////
  ////////////////////////RECUPERATION DES DONNEES//////////////////////////////
  //////////////////////////////////////////////////////////////////////////////
  $monDAO = new membreDAO();  //ouverture de la bse pour les membres
  $villeDAO = new villeDAO(); //ouverture de la base pour les villes
  $trajetDAO = new TrajetDAO(); //ouverture de la base pour les Trajets
  $demandeDAO = new demandeDAO();
  $idTrajet;
  $mesDemandes;

  if(isset($_GET['idTrajet']) && !empty($demandeDAO->getAllDemandeByTrajet($_GET['idTrajet']))){
    $idTrajet = $_GET['idTrajet'];
    //On récupère les demandes de ce trajet
    $mesDemandes = $demandeDAO->getAllDemandeByTrajet($idTrajet);
    //On récupère les prénoms
    foreach ($mesDemandes as $key => $value) {
      $value->setDemandeur( $monDAO->getMembreById($value->getDemandeur())->getPseudo());
    }



  }
  //Sinon on redirige vers l'index
  else{
    header('Location:mesTrajets.controler.php');
  }

  //On crée la vue
  $view = new View();

  $view->mesDemandes = $mesDemandes;
  $view->monTrajet = $idTrajet;


  $view->show('../Vue/gestionDemande.vue.php');
 ?>
