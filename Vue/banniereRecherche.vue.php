<form action="mainControler.controler.php" method="POST">
    <div class="recherche">

      <div>
        <h2>Ville Départ</h2>
        <select name="villeDepart">
          <?php foreach ($this->villes as $key => $value) {  ?>
              <option value="<?= $value->getCodePostal() ?>" selected><?= $value->getNom() ?></option>
          <?php } ?>

        </select>
      </div>

      <div>

        <h2>Ville Arrivée</h2>

        <select name="villeArrivee">
          <?php foreach ($this->villes as $key => $value) {  ?>
              <option value="<?= $value->getCodePostal() ?>" selected><?= $value->getNom() ?></option>
          <?php } ?>
        </select>

      </div>

      <div>
        <h2>Date Départ</h2>
        <input type="date" name="dateDepart" id="date_depart">
      </div>

      <div>
        <br><br>
        <input type="submit" value="Envoyer">
        <p><?= (isset($this->errorRecherche)) ? $this->errorRecherche : "" ?> </p>
      </div>


    </div>
  </form>
