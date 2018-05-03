<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Ressource/mainVue.css">
    <title>Vos Trajets</title>
  </head>
  <body>


      <?php

      include '../Vue/zoneUtilisateurOn.view.php';    //include de la zone connectée
      include '../Vue/menuNav.vue.php';               //Include du menu
      include '../Vue/banniereRecherche.vue.php';     //include de la bannière de recherche

       ?>
       <h2>Mes Demandes</h2>
       <table>
         <tr><th>Ville Départ</th> <th>Ville arrivée</th><th>Date départ</th><th>Description</th> <th>Statut</th> <th>Suppression</th> </tr>

         <?php
          if(!empty($this->demandeUtilisateur[0])){
         foreach($this->demandeUtilisateur as $key => $value){ ?>

           <tr>
                 <td><?= $value[0] ?></td>
                 <td> <?= $value[1] ?></td>
                 <td> <?=$value[2]   ?></td>
                 <td> <?=$value[3] ?></td>
                 <td> <?= $value[4] ?></td>
                 <!-- SUPPRESSION POUR L ADMIN -->
                 <td>
                   <form action="SuppressionDemande.controler.php" method="post">
                     <input type="text"  hidden name="idUtilisateur" value="<?= $value[5] ?>">
                     <input type="text"  hidden name="numTrajet" value="<?= $value[6] ?>">
                     <input type="submit" value="Supprimer">
                   </form>
                 </td>
              </tr>
         <?php }}?>
       </table>



       <h2>Mes Trajets</h2>

       <table>
           <tr> <th>Trajet</th> <th>Ville Départ</th> <th>Ville arrivée</th> <th>Date départ</th><th>Description</th> <th>Places Diponibles</th> <th>Suppression</th></tr>
         <?php if(!empty($this->trajetsConducteur[0])){
          foreach($this->trajetsConducteur as $key => $value){ ?>
           <tr>
                 <td><a href="gestionDemande.controler.php?idTrajet=<?= $value[0] ?>"><?= $value[0] ?></a> </td>
                 <td> <?= $value[1] ?></td>
                 <td> <?=$value[2]   ?></td>
                 <td> <?=$value[3] ?></td>
                 <td> <?= $value[4] ?></td>
                 <td> <?= $value[5] ?></td>
                 <!-- SUPPRESSION POUR L ADMIN -->
                 <td>
                   <form action="SuppressionTrajet.controler.php" method="post">
                     <input type="text"  hidden name="numTrajet" value="<?= $value[6] ?>">
                     <input type="submit" value="Supprimer">
                   </form>
                 </td>
               <?php }} ?>
       </table>
  </body>
</html>
