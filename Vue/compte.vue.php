<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Ressource/mainVue.css">
  <title>Mon compte</title>



</head>
<body>


  <?php include('../Vue/zoneUtilisateurOn.view.php'); ?>
  <?php include('../Vue/menuNav.vue.php') ?>

  <div id="infosCompte">




    <fieldset>
      <legend>Mon compte</legend>
      <div class="info">
        <p>Prenom :</p><p><?php echo $this->prenom; ?></p>
      </div>
      <div class="info">
        <p>Nom : </p><p><?php echo $this->nom; ?></p>
      </div>
      <div class="info">
        <p>Pseudo : </p><p><?php echo $this->pseudoMembre; ?></p>
      </div>
      <div class="info">
        <p>E-mail : </p><p><?php echo $this->adresseMail; ?></p>
      </div>
      <div class="info">
        <p>Telephone : </p><p><?php echo $this->telephone; ?></p>
      </div>


    </fieldset>

      <a id="RetourMain" href="mainControler.controler.php">
        <div class="boutonsLogin">
          <p>Retour</p></div>
        </a>
      </a>
  </div>
</body>
</html>
