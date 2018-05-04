<?php
require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once('../Modele/villeDAO.model.php');
require_once('../Modele/trajetDAO.model.php');

//création de l'objet vue
$view = new View();

//Objets DAO
$villeDAO = new villeDAO();
$membreDAO = new membreDAO();
$trajetDAO = new trajetDAO();

//Récupération des données
$lesVilles = $villeDAO->getAllville();
$lesTrajets = $trajetDAO->getTrajetAll();
$lesMembres = $membreDAO->getAllMembres();

//liste des membres sans l'administrateur
$mesMembresSansAdmin = array();
foreach ($lesMembres as $key => $value) {
  if($value->getID() != 1){
    $mesMembresSansAdmin[] = $value;
  }
}

//Paramétrage de la vue
$view->villes=$lesVilles;
$view->trajets=$lesTrajets;
$view->membres=$mesMembresSansAdmin;

//affichage de la vue
$view->show("../Vue/adminBackOffice.view.php");

?>
