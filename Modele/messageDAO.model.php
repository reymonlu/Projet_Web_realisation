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



  function getMessagesEnvoyes($idUtilisateur){
    $requete="SELECT * FROM message WHERE expediteur=$idUtilisateur";
    $mesInfos=$this->db->query($requete);
    $mesMessagesEnvoyes=$mesInfos->fetchAll(PDO::FETCH_CLASS,'Message');
    return (empty($mesMessagesEnvoyes) ? null : $mesMessagesEnvoyes);
  }


  function getMessagesRecus($idUtilisateur){
    $requete="SELECT * FROM message WHERE destinataire=$idUtilisateur;";
    $mesInfos=$this->db->query($requete);
    $mesMessagesRecus=$mesInfos->fetchAll(PDO::FETCH_CLASS,'Message');
    return (empty($mesMessagesRecus) ? null : $mesMessagesRecus);
  }


  function getSignalements($idUtilisateur){
    $requete="SELECT * FROM message WHERE signalement=1";
    $mesInfos=$this->db->query($requete);
    $signalement=$mesInfos->fetchAll(PDO::FETCH_CLASS,'Message');
    return (empty($signalement) ? null : $signalement);
  }

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
