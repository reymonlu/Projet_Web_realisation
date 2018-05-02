<?php

require_once("../Modele/view.class.php");



    //Il faut récupérer tous les liens avatars pour les afficher
    $mesAvatar = array();
    if($monDossier = opendir('../Ressource/avatar')){
      //tant que l'on peut lire des valeurs
      while(false != ($fichier = readdir($monDossier)))
      if($fichier != '.' && $fichier != '..'){
        $mesAvatar[] = $fichier;
      }
    }
    else{
      $mesAvatar = null;
    }
    ////////////////////////////////////////////////////////////////////
    ////////////////////AFFICHAGE DE LA VUE ////////////////////////////
    ////////////////////////////////////////////////////////////////////
    $view = new View();
    $view->mesAvatar = $mesAvatar;

    $view->show("../Vue/inscription.vue.php");
  

 ?>
