<div id="zoneConnexion">
  <div class="enteteLogo">
    <a href="mainControler.controler.php"><img src="./../Ressource/logo.png" alt="Le logo du site"></a>
    <h1>Stud' & Go ! </h1>

  </div>





<form id="conexionInscription" action="mainControler.controler.php" method="post">

  <div class="connexion">

    <!-- <div> -->
      <label for="pseudo"> </label>
      <input type="text" name="pseudo" placeholder="pseudo" id="pseudo" required>

    <!-- </div>

    <div> -->

      <label for="motDePasse"> </label>
      <input type="password" name="motDePasse" placeholder="mot de passe" id="motDePasse" required>

    <!-- </div>

    <div> -->
      <input class="boutonsLogin" id="connectezVous" type="submit" value="Connectez-vous">
      <p><?= isset($this->error) ? $this->error : "" ?> </p>
    <!-- </div> -->

  </div>

  <div class="inscription">


    <a id="inscrivezVous" href="inscription.controler.php">
      <div class="boutonsLogin">
        <p> Inscrivez vous</p></div>
      </a>
    </div>

  </form>

</div>
