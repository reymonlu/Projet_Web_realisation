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

  <div id="inscriptionStyle">



    <form action="controleInscription.controler.php" method="post">
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

        </div>

        <div>
          <label for="motDePasse"> </label>
          <input type="password"  placeholder="mot de passe*" name="motDePasse" id="motDePasse" required>


          <label for="verifPass"> </label>
          <input type="password" placeholder="vérification mot de passe**" name="verifPass" id="verifPass" required>
        </div>


        <label for="dateNaiss">Date de Naissance :</label>
        <input type="date" hint="date de naissance*"  name="dateNaiss" id="dateNaiss" required>




        <p>Choisisez un avatar :</p>

        <div id="ImageAvatar">

          <?php foreach ($this->mesAvatar as $key => $value) {?>
            <div class="radioAvatar">

              <input type="radio" name="avatar" value="<?=$value ?>" id ="<?=$value ?>" checked>
              <label for="<?=$value ?>"><img src="../Ressource/avatar/<?=$value ?>" alt="Un jolie avatar"> </label>

            </div>
          <?php } ?>
        </div>

        <input class="boutonsLogin" type="submit" value="Valider" id="valider">
        <p><?php
        if(isset($this->error)){
          echo("<script> alert(\"$this->error\")</script>");
        }
        // (isset($this->error) ? echo("")$this->error : "");
        ?>

      </p>
    </fieldset>

  </form>


</div>



</body>
</html>
