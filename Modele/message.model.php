<?php
  class Message{
    private $numeroMessage; //int (clé primaire)
    private $description;  //text
    private $signalement;   //int 1si signalement, 0 sinon
    private $expediteur; //int (clé étrangère)
    private $destinataire; //int (clé étrangère)


    function __construct();
  }

 ?>
