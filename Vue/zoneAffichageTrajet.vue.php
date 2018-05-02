<table>
  <tr> <th>Ville Départ</th> <th>Ville arrivée</th> <th>Date départ</th> <th>Conducteur</th> <th>Description</th> <th>Places Diponibles</th><th>Estimation temps(heures)</th> <th>Prix fixé(€)</th> <th>Inscription</th>  </tr>
  <?php
    foreach ($this->mesTrajetsVue as $key => $value) {?>

      <tr>
        <td> <?= $value[0] ?></td>
          <td> <?= $value[1] ?></td>
          <td> <?=$value[2]   ?></td>
          <td> <?=$value[3] ?></td>
          <td> <?= $value[4] ?></td>
          <td> <?= $value[5] ?></td>
          <td> <?= $value[6] ?></td>
          <td> <?= $value[7] ?></td>

      <td>
        <form action="demandeTrajet.controler.php" method="post">
          <input type="text" hidden name="numTrajet" value="<?= $value[8] ?>">
          <input type="submit" value="S'inscrire ?">
        </form>
      </td>
     </tr>

    <?php } ?>



</table>
