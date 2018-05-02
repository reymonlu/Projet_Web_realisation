<?php
require_once('trajet.model.php');

class trajetDAO{
  private $db;
  private $database = "../Modele/data/coVoiturage.db"; //Chemin vers la base de donnée


  function __construct(){
    try{
      $this->db = new PDO("sqlite:$this->database",'','');
    }
    catch(Exception $e){
      die('Erreur : '. $e->getMessage());
    }
  }

  //Fonciton qui retourne un membre en fonction de son pseudo
  function getTrajetbyID($id){
    //Préparation de la requete
    $requete = "SELECT * FROM trajet WHERE numeroTrajet='$id'";

    //Lancement de la requete
     $mesInfos = $this->db->query($requete);

     $mesTrajets = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Trajet');
    return (empty($mesTrajets)) ? null : $mesTrajets[0];
  }

  //Fonciton qui retourne un membre en fonction de son pseudo
  function getTrajetAll(){
    //Préparation de la requete
    $requete = "SELECT * FROM trajet";

    //Lancement de la requete
     $mesInfos = $this->db->query($requete);

     $mesTrajets = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Trajet');
    return (empty($mesTrajets)) ? null : $mesTrajets;
  }

  function getnbrePlaceDispo($numtrajet){
    //On récupère notre trajet
    $monTrajet = $this->getTrajetbyID($numtrajet);
    //On récupèrele nombre max de passager
    $nbrePlaceMax = $monTrajet->getNbrePassagerMax();
    //var_dump($nbrePlaceMax);
    //On fait une requête pour savoir combien de place sont dejà enb statut valide
    $requete = "SELECT COUNT(*) as nb FROM demande WHERE trajet = $numtrajet AND statut ='valide'";

    $resultat = $this->db->query($requete);
    $columns = $resultat->fetchAll(PDO::FETCH_COLUMN);
    $retour = $columns[0];
    return ($nbrePlaceMax - $retour);
  }

  function addTrajet($description, $prix, $nbPlaces, $dateDep, $estimation, $conducteur, $villeDepart, $villeArrivee){
    $requete="INSERT INTO TRAJET(conducteur,description,prix,nombrePassagerMax,estimation,dateDepart,villeDepart,villeArrivee)
                VALUES($conducteur, '$description', $prix, $nbPlaces, $estimation, '$dateDep', $villeDepart, $villeArrivee)";

    try {
      $this->db->query($requete);
    }

    catch (PDOException $e) {
      die("Erreur requête : ".$e->getMessage());
    }
  }
}



















 ?>
