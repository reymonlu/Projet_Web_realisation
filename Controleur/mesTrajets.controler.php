<?php
session_start();
require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');
require_once('../Modele/villeDAO.model.php');
require_once('../Modele/trajetDAO.model.php');
require_once('../Modele/demandeDAO.model.php');

////////////////////////////////////////////////////////////////////////////////
/////////////////////////////RECUPERATION DES DONNEES///////////////////////////
////////////////////////////////////////////////////////////////////////////////
//Création de la vue
$view = new View();
$membreDAO = new membreDAO();  //ouverture de la bse pour les membres
$villeDAO = new villeDAO(); //ouverture de la base pour les villes
$trajetDAO = new TrajetDAO(); //ouverture de la base pour les Trajets
$demandeDAO = new demandeDAO();

//Vérification de l'existence du sessionID et passage des paramètre à la vue
if(isset($_SESSION['id'])){
  $view->avatarMembre = $membreDAO->getMembreById($_SESSION['id'])->getAvatar(); //on passe l'avatar à la vue
  $view->pseudoMembre = $membreDAO->getMembreById($_SESSION['id'])->getPseudo(); //on passe le pseudo à la vue
  $view->villes = $villeDAO->getAllville();                                      //On passe toutes les villes
}
else{
  header("Location:../index.php");
}

//Il faut récupérer tout les trajets de l'utilisateurs et il faut les triés sur les trajets à venir
$trajetsConducteurs = array();
//boucle pour enlevé les trajets passés
foreach ($trajetDAO->getTrajetbyUtilisateur($_SESSION['id']) as $key => $value) {
  //Convertis la date
  $dateTrajet = date_create($value->getDateDepart());
  $dateNow = date_create();
  //si c'est un trajet à venir, on l'enregistre
  if($dateTrajet > $dateNow){
    $trajetsConducteurs[] = $value;
  }
}

//Il faut récupérer tout les trajet où la personne est passagé et que la demande est en attente
$demandeUtilisateur =  $demandeDAO->getDemandeByIdUtilisateur($_SESSION['id']);


//Il faut formater les tableaux pour pouvoir les afficher dans la vue avec VillDep et Ville arrivé et description
$vueTrajetsConducteurs = array(array());
$i = 0;
foreach ($trajetsConducteurs as $key => $value) {
  $vueTrajetsConducteurs [$i][] = $value->getNumTrajet();                                         //On récupère le numéro du trajet
  $vueTrajetsConducteurs [$i][] = $villeDAO->getVillebyCode($value->getVilleDepart())->getNom();  //Ville départ
  $vueTrajetsConducteurs [$i][] = $villeDAO->getVillebyCode($value->getVilleArrivee())->getNom(); //Ville Arrivée
  $vueTrajetsConducteurs [$i][] = date_create($value->getDateDepart())->format('d-m-Y');          //Date Départ refactoré au bon format
  $vueTrajetsConducteurs [$i][] = $value->getDescription();                                       //Description
  $vueTrajetsConducteurs [$i][] = $trajetDAO->getnbrePlaceDispo($value->getNumTrajet());          //Nbre de place disponible
  $vueTrajetsConducteurs [$i][] = $value->getNumTrajet();                                         //REMET LE NUMERO DE TRAJET POUR LE BOUTON
  $i++;
}

$vueDemandeUtilisateur = array(array()); //Tableau de stockage des demandes pour la vue

$j = 0;
foreach ($demandeUtilisateur as $key => $value) {
  $vueDemandeUtilisateur [$j][] = $villeDAO->getVillebyCode($trajetDAO->getTrajetbyID($value->getNumTrajet())->getVilleDepart())->getNom();             //On affiche Ville départ
  $vueDemandeUtilisateur [$j][] = $villeDAO->getVillebyCode($trajetDAO->getTrajetbyID($value->getNumTrajet())->getVilleArrivee())->getNom();            //Ville Arrivée
  $vueDemandeUtilisateur [$j][] = date_create($trajetDAO->getTrajetbyID($value->getNumTrajet())->getDateDepart())->format('d-m-Y');                     //Date Départ refactoré au bon format
  $vueDemandeUtilisateur [$j][] = $trajetDAO->getTrajetbyID($value->getNumTrajet())->getDescription();                                                  //DESCRITPION
  $vueDemandeUtilisateur [$j][] = $value->getStatut();                                                                                                  //STATUT
  $vueDemandeUtilisateur [$j][] = $_SESSION['id'];                                                                                                      //SESSION ID
  $vueDemandeUtilisateur [$j][] = $value->getNumTrajet();                                                                                               //ET LE NUMERO DE TRAJET POUR FAIRE LA SUPPRESSION
  $j++;
}

$lesDemandes = $demandeDAO->getAllDemande();




////////////////////////////////////////////////////////////////////////////////
/////////////////////////////TRAITEMENT DES DONNEES/////////////////////////////
////////////////////////////////////////////////////////////////////////////////





////////////////////////////////////////////////////////////////////////////////
/////////////////////////////AFFICHAGE DE LA VUE////////////////////////////////
////////////////////////////////////////////////////////////////////////////////




//Affichage de la vue
$view->demandeUtilisateur = $vueDemandeUtilisateur;
$view->trajetsConducteur = $vueTrajetsConducteurs;
$view->allDemandes = $lesDemandes;
$view->show('../Vue/mesTrajets.vue.php');
 ?>
