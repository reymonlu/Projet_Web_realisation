<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Ressource/compte.css">
  <title>Mon compte</title>



</head>
  <body>


    <?php include('../Vue/zoneUtilisateurOn.view.php'); ?>




    <fieldset>
      <legend>Mon compte</legend>
        <p>Prenom : <?php echo $this->prenom; ?></p>
        <p>Nom : <?php echo $this->nom; ?></p>
        <p>Pseudo : <?php echo $this->pseudoMembre; ?></p>
        <p>E-mail : <?php echo $this->adresseMail; ?></p>
        <p>Telephone : <?php echo $this->telephone; ?></p>
      </fieldset>
    </body>
</html>
