<?php


class Trajet {
  private $numeroTrajet;
  private $description;
  private $prix;
  private $nombrePassagerMax;
  private $dateDepart;
  private $estimation;
  private $conducteur;
  private $villeDepart;
  private $villeArrivee;

  function  __construct(){
  }

  function getConducteur(){
    return $this->conducteur;
  }

  function getNumTrajet(){
    return $this->numeroTrajet;
  }

  function getPrix(){
    return $this->prix;
  }

  function getNbrePassagerMax(){
    return $this->nombrePassagerMax;
  }

  function getDateDepart(){
    return $this->dateDepart;
  }

  function getEstimation(){
    return $this->estimation;
  }

  function getVilleDepart(){
    return $this->villeDepart;
  }
  function getVilleArrivee(){
    return $this->villeArrivee;
  }
  function getDescription(){
    return $this->description;
  }




}















 ?>
