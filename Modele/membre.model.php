<?php
class Membre{
  private $id;
  private $nom;
  private $prenom;
  private $pseudo;
  private $dateNaissance;
  private $numeroTel;
  private $motDePasse;
  private $adresseMail;
  private $avatar;
  private $signalement;


  function  __construct(){
  }

  public function getPseudo(){
    return $this->pseudo;
  }

  public function getMotDePasse(){
    return $this->motDePasse;
  }

  public function getID(){
    return $this->id;
  }

  public function getAvatar(){
    return $this->avatar;
  }

  public function getPrenom(){
    return $this->prenom;
  }

  public function getNom(){
    return $this->nom;
  }

  public function getEmail(){
    return $this->adresseMail;
  }

  public function getTelephone(){
    return $this->numeroTel;
  }
}
 ?>
