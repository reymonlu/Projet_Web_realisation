<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link rel="stylesheet" href="../Ressource/backOffice.css">
  </head>
  <body>
    <h1>Page d'administration</h1>

    <p>Actions disponibles :</p>

    <ul>
      <li><button type="button" onclick="displayVille()">Gérer les villes</button></li>
      <li> <button type="button" onclick="displayMembre()">Gérer les membres</button></li>
    </ul>

    <div class="hidden" id="villes">
      <h2>Gestion des villes</h2>

      <form action="../Controleur/newVilleForm.controler.php" method="post">
          <fieldset>
            <legend>Ajouter une ville</legend>

            <label for="champ_cp">Code Postal : </label>
            <input type="text" name="champ_cp" id="champ_cp" required/>

            <br>

            <label for="champ_nom">Nom : </label>
            <input type="text" name="champ_nom" id="champ_nom" required/>

            <br>

            <input type="reset" value="Annuler">
            <input type="submit" name="" value="Valider">
          </fieldset>
      </form>

      <table>
        <tr>
          <th>Code Postal</th>
          <th>Nom</th>
          <th></th>
          <th></th>
        </tr>
        <?php
          foreach ($this->villes as $uneVille) {
            // code...
        ?>
          <tr>
            <td><?php echo $uneVille->getCodePostal(); ?></td>
            <td><?php echo $uneVille->getNom();?></td>
            <td><button type="button" name="button" onclick="deleteVille(<?php echo $uneVille->getCodePostal(); ?>)">supprimer</button></td>
          </tr>
        <?php
          }
        ?>
      </table>
    </div>

    <div class="hidden" id="membres">
      <h2>Gestion des membres</h2>
      <table>
        <tr>
          <th>Numéro</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Pseudo</th>
        </tr>
        <?php
          foreach ($this->membres as $unMembre){
        ?>
            <tr>
              <td><?php echo $unMembre->getID(); ?></td>
              <td><?php echo $unMembre->getNom(); ?></td>
              <td><?php echo $unMembre->getPrenom(); ?></td>
              <td><?php echo $unMembre->getPseudo(); ?></td>
              <td> <button type="button" name="button" onclick="deleteMembre(<?php echo $unMembre->getID(); ?>)">Supprimer</button> </td>
            </tr>
        <?php
          }
        ?>
      </table>
    </div>



  </body>

  <script type="text/javascript">

    function displayVille() {
      var div = document.getElementById('villes');

      div.style.display="block";
    }

    function displayMembre() {
      document.getElementById('membres').style.display="block";
    }

    function deleteVille(idVille){
      window.location.replace("../Controleur/deleteVille.controler.php?cp="+idVille);
    }

    function deleteMembre(idMembre){
      window.location.replace("../Controleur/deleteMembre.controler.php?membreID="+idMembre);
    }
  </script>


</html>
