<?php

require_once('demande.model.php');

class demandeDAO{
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

  //Fonciton qui retourne un trajet en fonction du demandeur et du numTrajet
  function getDemande($idUtilisateur,$numTrajet){
  //Préparation de la requete
    $requete = "SELECT * FROM demande WHERE demandeur=$idUtilisateur AND trajet=$numTrajet";
    //Lancement de la requete
    $mesInfos = $this->db->query($requete);
    $mesDemandes = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Demande');
    return (empty($mesDemandes)) ? null : $mesDemandes[0];
  }

  //Fonciton qui retourne toutes les demandes d'un utilisateur
  function getAllDemandeByUtilisateur($idUtilisateur){
  //Préparation de la requete
    $requete = "SELECT * FROM demande WHERE demandeur=$idUtilisateur";
    //Lancement de la requete
    $mesInfos = $this->db->query($requete);
    $mesDemandes = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Demande');
    return (empty($mesDemandes)) ? null : $mesDemandes;
  }

  //Fonciton qui retourne toutes les demandes d'un trajet'
  function getAllDemandeByTrajet($numTrajet){
  //Préparation de la requete
    $requete = "SELECT * FROM demande WHERE trajet=$numTrajet";
    //Lancement de la requete
    $mesInfos = $this->db->query($requete);
    $mesDemandes = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Demande');
    return (empty($mesDemandes)) ? null : $mesDemandes;
  }

  //Fonciton qui retourne toutes les demandes d'un trajet'
  function addDemande($idUtilisateur,$numTrajet){
  //Préparation de la requete
    $requete = "INSERT INTO demande(demandeur,trajet) VALUES ($idUtilisateur,$numTrajet)";

    //Lancement de la requete
    $this->db->exec($requete);
  }


  //Fonction qui renvoie toutes les demandes d'un utilisateurs
  function getDemandeByIdUtilisateur($idUtilisateur){
      //Préparation de la requete
      $requete = "SELECT * FROM demande WHERE demandeur=$idUtilisateur AND statut!='valide'";
      //Lancement de la requete
      $mesInfos = $this->db->query($requete);

      $mesDemandes = $mesInfos->fetchAll(PDO::FETCH_CLASS,'Demande');
      return (empty($mesDemandes)) ? null : $mesDemandes;
  }
}

 ?>
