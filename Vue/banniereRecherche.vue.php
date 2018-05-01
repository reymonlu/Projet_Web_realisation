<form action="rien.php" method="get">
    <div class="recherche">

      <div>
        <h2>Ville Départ</h2>
        <select name="villeDepart">
          <!-- <optgroup label="Rhone Alpes"> -->
          <option value="paris">Paris</option>
          <option value="lyon">Lyon</option>
          <option value="grenoble" selected>Grenoble</option>
          <!-- </optgroup> -->

        </select>
      </div>

      <div>

        <h2>Ville Arrivée</h2>

        <select name="villeArrivee">
          <!-- <optgroup label="Rhone Alpes"> -->
          <option value="paris">Paris</option>
          <option value="lyon">Lyon</option>
          <option value="grenoble" selected>Grenoble</option>
          <!-- </optgroup> -->

        </select>

      </div>

      <div>
        <h2>Date Départ</h2>

        <!-- <label for="date_depart">Date Départ </label><br> <br> -->
        <input type="date" name="dateDepart" id="date_depart">
      </div>

      <div>
        <br><br>
        <input type="submit" value="Envoyer">
      </div>


    </div>
  </form>
