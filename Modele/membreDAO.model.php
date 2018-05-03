<?php
require_once('membre.model.php');

class membreDAO{
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

    $this->db->query("PRAGMA foreign_keys=ON");

  }
  //Fonciton qui retourne un membre en fonction de son pseudo
  function getMembreByPseudo($pseudo){
    //Préparation de la requete
    $requete = "SELECT * FROM membre WHERE pseudo='$pseudo'";

    //Lancement de la requete
     $mesInfos = $this->db->query($requete);

     $mesMembres = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Membre');
    return (empty($mesMembres)) ? null : $mesMembres[0];

  }

  //Fonciton qui retourne un membre en fonction de son id
  function getMembreById($id){
    //Préparation de la requete
    $requete = "SELECT * FROM membre WHERE id='$id'";

    //Lancement de la requete
     $mesInfos = $this->db->query($requete);
     //Si les infos sont false, ça veut dire pas de membre


     $mesMembres = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Membre');
     return (empty($mesMembres)) ? null : $mesMembres[0];

  }

  function addMembre($nom,$prenom,$pseudo,$dateNaissance,$numeroTel,$motDePasse,$adresseMail,$avatar){
    //Préparation de la requete
    $requete = "INSERT INTO membre(nom,prenom,pseudo,dateNaissance,adresseMail,numeroTel,motDePasse,avatar)
    VALUES ('$nom','$prenom','$pseudo','$dateNaissance','$adresseMail','$numeroTel','$motDePasse','$avatar')";

    //et envoie
    $this->db->exec($requete);
  }

  function getAllMembres(){
    $requete = "SELECT * FROM membre";

    try {
      $result=$this->db->query($requete);
    } catch (PDOException $e) {
      die("Erreur requête : ".$e->getMessage());
    }

    $mesVilles = $result->fetchAll(PDO::FETCH_CLASS,'Membre');
    return (empty($mesVilles)) ? null : $mesVilles;

  }

  function deleteMembre($membreID){
    $requete="DELETE FROM membre WHERE id='$membreID'";

    try {
      $this->db->query($requete);
    } catch (PDOException $e) {
      die("Erreur requète : ".$e->getMessage());
    }
  }


}







 ?>
