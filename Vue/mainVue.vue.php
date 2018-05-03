<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenue sur BlablaCar des étudiants !</title>
    <link rel="stylesheet" href="../Ressource/mainVue.css">
  </head>
  <body>
    <?php

    if($this->sessionEncours == false){
      //In inclue la banniere avec la demande de connexion ou d'inscription
      include '../Vue/zoneUtilisateurOff.view.php';
    }
    else{
      include '../Vue/zoneUtilisateurOn.view.php';
    }
    //et on affiche le menue naviguant s'il l'uilisateur est connecté
    if($this->sessionEncours == true){
      include '../Vue/menuNav.vue.php';
    }
    //On inclue notre banniere avec la zone de recherche
    include '../Vue/banniereRecherche.vue.php';

    //Si j'ai des trajets à afficher, je lance la vue des trajets

    //Si mon premier tableau est vide, c'est qu'il n'y a pas de recherche
    if(!(empty($this->mesTrajetsVue[0]))){
      //Si l'utilisateur est connecté et si c'est l'admin
      if($this->sessionEncours == true && $this->idMembre == 1){
        include '../Vue/zoneAffichageTrajetAdmin.vue.php';
      }
      else{
        include '../Vue/zoneAffichageTrajet.vue.php';
      }

    }
     ?>
  </body>
</html>
