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

  <div id="mesMessageStyle">
    

  </div>

</body>

<script type="text/javascript">

function valider(){
  var toReturn=true;

  var today = new Date();
  var dateDep = new Date(document.formNewTrajet.champ_dateDep.value);

  if(dateDep.getTime() < today.getTime()){
    toReturn=false;
    document.getElementById('dateDep_error').innerText="La date de départ ne doit pas être antérieure à la date courante";
  }
  else {
    document.getElementById('dateDep_error').innerText="";
  }

  if(document.formNewTrajet.champ_nbPlaces.value<= 0){
    toReturn=false;
    document.getElementById('places_error').innerText="Le nombre de place doit être supérieur à 0";
  }
  else {
    document.getElementById('places_error').innerText="";
  }

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
