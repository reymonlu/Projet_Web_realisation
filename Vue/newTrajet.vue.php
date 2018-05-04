<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Nouveau trajet</title>
  <link rel="stylesheet" href="../Ressource/mainVue.css">
</head>
<body>
  <?php include('zoneUtilisateurOn.view.php'); ?>
  <?php include('../Vue/menuNav.vue.php') ?>

  <div id="newTrajetStyle">



    <form name="formNewTrajet" class="formNewTrajet" action="../Controleur/newTrajet_form.controler.php" method="post" onsubmit="return valider()">
      <fieldset>
        <legend>Trajet</legend>

        <label for="champ_villeDep">Ville de départ : </label>
        <select name="champ_villeDep" id="champ_villeDep">
          <?php
          foreach ($this->villes as $uneVille) {
            echo "<option value=".$uneVille->getCodePostal().">".$uneVille->getNom()."</option>";
          }
          ?>
        </select>

        <br>

        <label for="champ_villeArr">Ville d'arrivée : </label>
        <select name="champ_villeArr" id="champ_villeArr">
          <?php
          foreach ($this->villes as $uneVille) {
            echo "<option value=".$uneVille->getCodePostal().">".$uneVille->getNom()."</option>";
          }
          ?>
        </select>

      </fieldset>

      <fieldset>
        <legend>Départ</legend>
        <label for="champ_dateDep">Date de départ : </label>

        <input type="date" name="champ_dateDep" id="champ_dateDep" required>
        <p class="error" id="dateDep_error"></p>

        <br>

        <label for="champ_estimation">Estimation durée du trajet (en minutes): </label>
        <input type="number" name="champ_estimation" id="champ_estimation" required>
        <p class="error" id="estimation_error"></p>

      </fieldset>

      <fieldset>
        <legend>Informations</legend>

        <label for="champ_nbPlaces">Nombre maximum de places : </label>
        <input type="number" name="champ_nbPlaces" id="champ_nbPlaces" required>
        <p class="error" id="places_error"></p>

        <br>

        <label for="champ_prix">Prix (de la forme 0.0): </label>
        <input type="text" name="champ_prix" id="champ_prix" required>
        <p class="error" id="prix_error"></p>

        <br>

        <label for="champ_descip">Description (doit inclure l'heure de départ) : </label>
        <p class="error" id="descrip_error"></p>
        <textarea name="champ_descrip" id="champ_descip" rows="8" cols="80" required></textarea>
        <p class="error" id="desc_error"></p>
      </fieldset>


      <div>
        <input class="boutonsLogin" type="reset" value="Annuler">
        <input class="boutonsLogin" type="submit" value="Valider">
      </div>

    </form>


  </div>

</body>

<script type="text/javascript">

function valider(){
  var toReturn=true;

  var today = new Date();
  var dateDep = new Date(document.formNewTrajet.champ_dateDep.value);

  //vérification de la date (qui doit être supérieure ou égale à la date courante)
  if(dateDep.getTime() < today.getTime()){
    toReturn=false;
    document.getElementById('dateDep_error').innerText="La date de départ ne doit pas être antérieure à la date courante";
  }
  else {
    document.getElementById('dateDep_error').innerText="";
  }

  //Vérification du nombre de place > 0
  if(document.formNewTrajet.champ_nbPlaces.value<= 0){
    toReturn=false;
    document.getElementById('places_error').innerText="Le nombre de place doit être supérieur à 0";
  }
  else {
    document.getElementById('places_error').innerText="";
  }

  //On vérifie que le champ prix contient bien un nombre
  if(isNaN(document.formNewTrajet.champ_prix.value)){
    toReturn=false;
    document.getElementById('prix_error').innerText="Le prix doit être un nombre sous la forme 0.0";
  }
  else {
    document.getElementById('prix_error').innerText="";
  }

  return toReturn;
}
</script>


</html>
