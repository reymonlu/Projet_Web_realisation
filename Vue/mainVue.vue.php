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
    //On inclue notre banniere avec la zone de recherche
    include '../Vue/banniereRecherche.vue.php';
    //et on affiche le menue naviguant s'il l'uilisateur est connecté
    if($this->sessionEncours != true){
      include '../Vue/menuNav.vue.php';
    }
     ?>


  </body>
</html>
