<?php
require_once('message.model.php');

class messageDAO{
  private $db;
  private $database="../Modele/data/coVoiturage.db";

  function __construct(){
    try{
      $this->db = new PDO("sqlite:$this->database",'','');
    }
    catch(Exception $e){
      die('Erreur : '. $e->getMessage());
    }
  }


//Prends en paramètre l'identifiant du membre et lui retourne une liste de tous les messages
//dont il est l'expéditeur (cad les message qu'il a envoyé)
  function getMessagesEnvoyes($idUtilisateur){
    $requete="SELECT * FROM message WHERE expediteur=$idUtilisateur";
    $mesInfos=$this->db->query($requete);
    $mesMessagesEnvoyes=$mesInfos->fetchAll(PDO::FETCH_CLASS,'Message');
    return (empty($mesMessagesEnvoyes) ? null : $mesMessagesEnvoyes);
  }

  //Prends en paramètre l'identifiant du membre et lui retourne une liste de tous les messages
  //dont il est le destinataire (cad les message qu'il a recu)
  function getMessagesRecus($idUtilisateur){
    $requete="SELECT * FROM message WHERE destinataire=$idUtilisateur";
    $mesInfos=$this->db->query($requete);
    $mesMessagesRecus=$mesInfos->fetchAll(PDO::FETCH_CLASS,'Message');
    return (empty($mesMessagesRecus) ? null : $mesMessagesRecus);
  }


//Créé un nouveau objet message dans la base de donnée en prenant en paramètre tout les
//attribut de Message sauf le numero qui est incrémenté automatiquement
  function addMessage($description,$signalement,$expediteur,$destinataire){
    $requete="INSERT INTO message(description,signalement,expediteur,destinataire) VALUES ('$description',$signalement,$expediteur,$destinataire)";
    $this->db->exec($requete);
  }



}


?>



//  <!-- private $numeroMessage; //int (clé primaire)
  // private $description;  //text
  // private $signalement;   //int 1si signalement, 0 sinon
  // private $expediteur; //int (clé étrangère)
  // private $destinataire; //int (clé étrangère) -->
