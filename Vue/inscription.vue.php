<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Ressource/inscription.css">
  <title>Formulaire d'inscription</title>
</head>
<body>
  <form action="inscription.controler.php" method="post">
    <fieldset>


      <legend>Inscription</legend>
      <div>
        <label for="pseudo">pseudo* :</label>
        <input type="text" name="pseudo" id="pseudo" >

      </div>

      <div>

        <label for="nom">nom* :</label>
        <input type="text" name="nom" id="nom" >

      </div>

      <div >

        <label for="prenom">prenom* :</label>
        <input type="text" name="prenom" id="prenom" >
      </div>

      <div >


        <label for="dateNaiss">date de naissance : </label>
        <input type="text" name="dateNaiss" id="dateNaiss" >
      </div>

      <div >


        <label for="telephone">téléphone* : </label>
        <input type="text" name="telephone" id="telephone" >
      </div>
      <div>


        <label for="motDePasse">mot de passe* : </label>
        <input type="password" name="motDePasse" id="motDePasse" >
      </div>
      <div>


        <label for="mail">e-mail* : </label>
        <input type="mail" name="mail" id="mail" >
      </div>

      <!-- A voir pour les images d'avatars -->

      <input type="submit" value="Valider" id="valider">

    </fieldset>

  </form>


</body>
</html>
