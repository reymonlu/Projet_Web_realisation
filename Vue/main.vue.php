<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <?php
      session_start();

      if (isset($_SESSION['id'])){
        // code...
        include('../vue/zoneUtilisateurOn.vue.php');
      }

      else {
        include('../vue/zoneUtilisateurOff.vue.php');
      }

      include('../vue/banniereRecherche.vue.php');

      if (isset($_SESSION['id'])){
        // code...
        include('../vue/menuNav.vue.php');
      }

     ?>
  </body>
</html>
