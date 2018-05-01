<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Ressource/inscription.css">
  <title>Formulaire d'inscription</title>
</head>
<body>
  <form action="controleInscription.controler.php" method="post">
    <fieldset>
      <legend>Inscription</legend>
      <div>
        <label for="pseudo">pseudo* :</label>
        <input type="text" name="pseudo" id="pseudo"required >

      </div>
      <div>
        <label for="nom">nom* :</label>
        <input type="text" name="nom" id="nom"required >

      </div>

      <div >

        <label for="prenom">prénom* :</label>
        <input type="text" name="prenom" id="prenom" required>
      </div>

      <div >


        <label for="dateNaiss">date de naissance* : </label>
        <input type="date" name="dateNaiss" id="dateNaiss" required>
      </div>

      <div >


        <label for="telephone">téléphone* : </label>
        <input type="text" name="telephone" id="telephone" required>
      </div>
      <div>


        <label for="motDePasse">mot de passe* : </label>
        <input type="password" name="motDePasse" id="motDePasse" required>
      </div>

      <div>

        <label for="verifPass">vérification mot de passe* : </label>
        <input type="password" name="verifPass" id="verifPass" required>
      </div>
      <div>


        <label for="mail">e-mail* : </label>
        <input type="email" name="mail" id="mail"required >
      </div>
      <div id="ImageAvatar">

        <?php foreach ($this->mesAvatar as $key => $value) {?>
          <input type="radio" name="avatar" value="<?=$value ?>" id ="<?=$value ?>" checked>
          <label for="<?=$value ?>"><img src="../Ressource/avatar/<?=$value ?>" alt="Un jolie avatar"> </label>

        <?php } ?>
      </div>
      <input type="submit" value="Valider" id="valider">
      <p><?= (isset($this->error) ? $this->error : "") ?> </p>
    </fieldset>

  </form>


</body>
</html>
