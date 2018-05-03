<?php
require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once('../Modele/villeDAO.model.php');
require_once('../Modele/trajetDAO.model.php');

$view = new View();

$villeDAO = new villeDAO();
$membreDAO = new membreDAO();
$trajetDAO = new trajetDAO();

$lesVilles = $villeDAO->getAllville();
$lesTrajets = $trajetDAO->getTrajetAll();
$lesMembres = $membreDAO->getAllMembres();
$mesMembresSansAdmin = array();;
foreach ($lesMembres as $key => $value) {
  if($value->getID() != 1){
    $mesMembresSansAdmin[] = $value;
  }
}

$view->villes=$lesVilles;
$view->trajets=$lesTrajets;
$view->membres=$mesMembresSansAdmin;

$view->show("../Vue/adminBackOffice.view.php");

?>
