<?php
require_once('ville.model.php');

class villeDAO{
  private $db;
  private $database = "../Modele/data/coVoiturage.db"; //Chemin vers la base de donnée


  function __construct(){
    try{
      $this->db = new PDO("sqlite:$this->database",'','');
    }
    catch(Exception $e){
      die('Erreur : '. $e->getMessage());
    }
    $this->db->query('PRAGMA foreign_keys = ON');
  }
  //Récupère toutes les ville de la base
  function getAllville(){

    //Préparation de la requete
    $requete = "SELECT * FROM ville";

    //Lancement de la requete
     $mesInfos = $this->db->query($requete);

     $mesVilles = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Ville');
    return (empty($mesVilles)) ? null : $mesVilles;
  }
  //récupère une ville à partir de son code postal
  function getVillebyCode($code){

    //Préparation de la requete
    $requete = "SELECT * FROM ville WHERE codePostal='$code'";

    //Lancement de la requete
    $mesInfos = $this->db->query($requete);

    $mesVilles = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Ville');
    return (empty($mesVilles)) ? null : $mesVilles[0];
  }

  //Ajout d'une ville dans la base
  function addVille($cp, $nom){
    $requete="INSERT INTO ville(codePostal,nom) VALUES('$cp','$nom')";

    try {
      $this->db->query($requete);
    } catch (PDOException $e) {
      die("Erreur requète : ".$e->getMessage());
    }

  }

  //Suppression d'une ville à partir de son code postal
  function deleteVille($cp){
    $requete="DELETE FROM ville WHERE codePostal='$cp'";

    try {
      $this->db->query($requete);
    } catch (PDOException $e) {
      die("Erreur requète : ".$e->getMessage());
    }
  }


}








 ?>
