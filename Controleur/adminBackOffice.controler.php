<?php
require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once('../Modele/villeDAO.model.php');
require_once('../Modele/trajetDAO.model.php');

$view = new View();

$villeDAO = new villeDAO();
$membreDAO = new membreDAO();
$trajetDAO = new trajetDAO();

$lesVilles = $villeDAO.getAllville();
$lesTrajets = $trajetDAO.getTrajetAll();
$lesMembres = $membreDAO.getAllMembres();

$view->villes=$lesVilles;
$view->trajets=$lesTrajets;
$view->membres=$lesMembres;

$view->show("../Vue/adminBackOffice.view.php");

?>
