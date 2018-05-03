<?php

require_once('../Modele/view.class.php');
require_once('../Modele/membreDAO.model.php');

require_once('../Modele/villeDAO.model.php');

require_once('../Modele/trajetDAO.model.php');
//démarrage de la session
session_start();

//////////////////////////////////////////////////////////////////////////////
////////////////////////RECUPERATION DES DONNEES//////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//création de la vue à parametrée
$view = new View();
$view->sessionEncours = false;
//pseudo de l'utilisateur qui se connecte
$view->pseudoMembre ="";
//Error s'il y a eu des error de mdP ou de pseudo
$view->error ="";
//Error s'il a eu des erro dans la recherche

$view->errorRecherche="";
$monDAO = new membreDAO();  //ouverture de la bse pour les membres
$villeDAO = new villeDAO(); //ouverture de la base pour les villes
$trajetDAO = new TrajetDAO(); //ouverture de la base pour les Trajets

//On veux savoir si l'utilisateur vient de tenter de s'incrire
if(isset($_POST['pseudo']) && isset($_POST['motDePasse'])){
  $pseudo = $_POST['pseudo'];
  $motDePasse = $_POST['motDePasse'];
  //il faut regarder l'existence de cette personne dans notre base avec le DAO
  $monMembre = $monDAO->getMembreByPseudo($pseudo);

  //On regarde si le membre existe et que le mot de passe correspondant est le même
  if($monMembre != null && $monMembre->getMotDePasse() === $motDePasse){
    //On met à jour le SESSION ID
    $_SESSION['id'] = $monMembre->getID();
    $_SESSION['avatar'] = $monMembre->getAvatar();
    $view->pseudoMembre = $monMembre->getPseudo();
    $view->avatarMembre = $monMembre->getAvatar();
    $view->idMembre = $_SESSION['id'];
  }
  else{
    $view->error = "Mauvais identifiant/Mot de Passe";
  }
}
//On veut savoir s'il y a une connexion en cours
//si oui, il faut récupérer certaines information dans la base de donnée
//pour afficher les infos de l'utilisateur
if(isset($_SESSION['id'])){
  $view->sessionEncours = true;
  $monMembre = $monDAO->getMembreById($_SESSION['id']);
  $view->idMembre = $_SESSION['id'];
  $view->pseudoMembre = $monMembre->getPseudo();
  $view->avatarMembre = $monMembre->getAvatar();
}
//On récupère toutes les villes de notre base pour les données à la vue
$mesVilles = $villeDAO->getAllville();

//On veut maintenant savoir s'il y a eu une tentative de recherche par un
//utilisateur
$mesTrajetsDispo= array(); //initialisation des trajets qui correspondent à nos critères
$mesTrajetsVue = array(array()); //Initialisation du tableau que notre vue va utiliser
if(isset($_POST['villeDepart']) && isset($_POST['villeArrivee']) && isset($_POST['dateDepart'])){
  //récupération des valeurs

  $villeDepart = $_POST['villeDepart'];
  $villeArrivee = $_POST['villeArrivee'];
  $dateDepart = $_POST['dateDepart'];
  //on boucle sur les trajets de notre base
  $toutLesTrajets = $trajetDAO->getTrajetAll();
  if(!empty($toutLesTrajets)){

    foreach ($trajetDAO->getTrajetAll() as $key => $value) {
      //Si les deux villes correspondent et qu'il y a toujours des places dispos
      if($value->getVilleDepart() == $villeDepart && $value->getVilleArrivee() == $villeArrivee && $trajetDAO->getnbrePlaceDispo($value->getNumTrajet()) > 0){
        //On réupère la date de départ
        $dateTrajet = date_create($value->getDateDepart());
        $dateDemandee = date_create($dateDepart);
        //On ajoute à notre tableau de trajet si c'est un voyage à venir
        if($dateDemandee <= $dateTrajet){
          $mesTrajetsDispo [] = $value;
        }
      }
    }
  }
}
  //On créer un tableau qua la vue va pouvoir utilisée
  $i = 0;
  foreach ($mesTrajetsDispo as $key => $value) {
    $mesTrajetsVue [$i][] = $villeDAO->getVillebyCode($value->getVilleDepart())->getNom();  //Ville départ
    $mesTrajetsVue [$i][] = $villeDAO->getVillebyCode($value->getVilleArrivee())->getNom(); //Ville Arrivée
    $mesTrajetsVue [$i][] = date_create($value->getDateDepart())->format('d-m-Y');          //Date Départ refactoré au bon format
    $mesTrajetsVue [$i][] = $monDAO->getMembreById($value->getConducteur())->getPseudo();   //Pseudo conducteur
    $mesTrajetsVue [$i][] = $value->getDescription();                                       //Description
    $mesTrajetsVue [$i][] = $trajetDAO->getnbrePlaceDispo($value->getNumTrajet());          //Nbre de place disponible
    $mesTrajetsVue [$i][] = $value->getEstimation();                                         //estimation de temps
    $mesTrajetsVue [$i][] = $value->getPrix();                                              //Prix du trajet
    $mesTrajetsVue [$i][] = $value->getNumTrajet();                                         //id du trajet
    $i++;
  }
//AFFICHAGE DE LA VUE
//On peut lancer la vue parametrée

$view->mesTrajetsVue = $mesTrajetsVue;
$view->villes = $mesVilles;
$view->show('../Vue/mainVue.vue.php');
?>
