<div id="zoneConnexion">
  <div>
    <a href="mainControler.controler.php"><img src="./../Ressource/logo.png" alt="Logo du site"></a>
    <h1>Super Blablablablacar du turfu !!! </h1>

  </div>


  <form action="mainControler.controler.php" method="post">
    <div>
      <label for="pseudo">pseudo : </label>
      <input type="text" name="pseudo" id="pseudo" required>

    </div>

    <div>

      <label for="motDePasse">Mot de passe : </label>
      <input type="password" name="motDePasse" id="motDePasse" required>

    </div>
    <input type="submit" value="Connectez-vous !">
    <p><?= isset($this->error) ? $this->error : "" ?> </p>
  <a href="inscription.controler.php">Inscrivez vous</a>
  </form>

</div>
