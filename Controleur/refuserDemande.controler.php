<?php
  session_start();
  require_once('../Modele/view.class.php');
  require_once('../Modele/membreDAO.model.php');
  require_once('../Modele/villeDAO.model.php');
  require_once('../Modele/trajetDAO.model.php');
    require_once('../Modele/demandeDAO.model.php');
  $monDAO = new membreDAO();  //ouverture de la bse pour les membres
  $villeDAO = new villeDAO(); //ouverture de la base pour les villes
  $trajetDAO = new TrajetDAO(); //ouverture de la base pour les Trajets
  $demandeDAO = new demandeDAO();

  if (isset($_SESSION['id'])) {
    // code...
    if (isset($_GET['trajet']) && isset($_GET['conduteur'])){
      require_once('../Modele/demandeDAO.model.php');

      //On récupère l'id de l'utilisateur
      $idUtilisateur = $monDAO->getMembreByPseudo($_GET['conduteur'])->getID();
      $demandeDAO = new demandeDAO();
      var_dump($_GET['trajet']);
      var_dump($idUtilisateur);

      $demandeDAO->refuserDemande($idUtilisateur,$_GET['trajet']);
      header('Location:mesTrajets.controler.php');

    }
  }

  else {
    header('Location:../Controleur/mainControler.controler.php');
  }

?>
