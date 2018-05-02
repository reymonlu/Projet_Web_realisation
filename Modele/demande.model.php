<?php
class demande {
  private $statut;
  private $demandeur;
  private $trajet;

  function  __construct(){}

  function getNumtrajet(){
    return $this->trajet;
  }

  function getDemandeur(){
    return $this->demandeur;
  }

  function getStatut(){
    return $this->statut;
  }



  }
  ?>
