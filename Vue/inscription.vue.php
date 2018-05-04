<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Ressource/inscription.css">
  <title>Formulaire d'inscription</title>
</head>
<body>



  <div class="enteteLogo">
    <a href="mainControler.controler.php"><img src="./../Ressource/logo.png" alt="Le logo du site"></a>
    <h1>Stud' & Go ! </h1>

  </div>


<!-- <form name="formInscription" class="formInscription" action="controleInscription.controler.php" method="post" onsubmit="return controlForm()"> -->
  <form name="formInscription" class="formInscription" action="controleInscription.controler.php" method="post" onsubmit="return controlForm()">
    <fieldset>
      <legend>Inscription</legend>
      <div>
        <label for="pseudo"> </label>
        <input type="text" placeholder="pseudo*"  name="pseudo" id="pseudo"required >

      </div>
      <div>


        <label for="nom"> </label>
        <input type="text" placeholder="nom*"  name="nom" id="nom"required >

        <label for="prenom"> </label>
        <input type="text" placeholder="prénom*" name="prenom" id="prenom" required>


      </div>

      <div>


        <label for="telephone"></label>
        <input type="text" placeholder="téléphone*" name="telephone" id="telephone" required>


        <label for="mail"> </label>
        <input type="email" placeholder="e-mail*" name="mail" id="mail"required >

        <p class="error" id="error_tel"></p>
      </div>

      <div>
        <label for="motDePasse"> </label>
        <input type="password"  placeholder="mot de passe*" name="motDePasse" id="motDePasse" required>


        <label for="verifPass"> </label>
        <input type="password" placeholder="vérification mot de passe**" name="verifPass" id="verifPass" required>

        <p class="error" id="error_mdp"></p>
      </div>


        <label for="dateNaiss">Date de Naissance :</label>
        <input type="date" hint="date de naissance*"  name="dateNaiss" id="dateNaiss" required>
        <p class="error" id="error_dateNaiss"></p>



<p>Choisisez un avatar :</p>

      <div id="ImageAvatar">

        <?php foreach ($this->mesAvatar as $key => $value) {?>
          <div class="radioAvatar">

          <input type="radio" name="avatar" value="<?=$value ?>" id ="<?=$value ?>" checked>
          <label for="<?=$value ?>"><img src="../Ressource/avatar/<?=$value ?>" alt="Un jolie avatar"> </label>

        </div>
        <?php } ?>
      </div>

      <input type="submit" value="Valider" id="valider">
    </fieldset>

  </form>
</body>
<script type="text/javascript">
  function controlForm(){
    var toReturn=true;

    var form=document.formInscription;

    var today = new Date();
    var dateDep = new Date(form.dateNaiss.value);

    //Controle du nombre de caractères et des chiffres
    if(form.telephone.value.length!=10 || isNaN(form.telephone.value)) {
      document.getElementById('error_tel').innerText="Le numéro de téléphone doit être contenir DIX CHIFFRES !"; //Modification du message d'erreur
      toReturn=false;
    }
    else {
      document.getElementById('error_tel').innerText="";//Réinitialisation du message d'erreur

    }

    //Controle du nombre de caractère du mot de passe
    if(form.motDePasse.value.length<8){
      document.getElementById('error_mdp').innerText="Le mot de passe doit contenir au minimum 8 caractères !";
      toReturn=false;
    }
    //Vérification de la concordance des mots de passes
    else if(form.motDePasse.value!=form.verifPass.value) {
      document.getElementById('error_mdp').innerText="Les mots de passe ne concordent pas !";
      toReturn=false;
    }
    else {
      document.getElementById('error_mdp').innerText="";
    }

    //Vérification de l'âge
    if(today.getFullYear() - dateDep.getFullYear() < 18){
      toReturn=false;
      document.getElementById('error_dateNaiss').innerText="Vous devez être majeur";
    }
    else {
      document.getElementById('error_dateNaiss').innerText="";
    }

    return toReturn;
  }




</script>


</html>
