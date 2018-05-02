<table id="tableauResultatRecherche">
  <tr> <th>Ville Départ</th> <th>Ville arrivée</th> <th>Conducteur</th> <th>Description</th> <th>Places Diponibles</th> </tr>
  <?php
    foreach ($this->mesTrajetsVue as $key => $value) {?>

  <tr><td> <?= $value[0] ?></td>
      <td> <?= $value[1] ?></td>
      <td> <?=$value[2]   ?></td>
      <td> <?=$value[3] ?></td>
      <td> <?= $value[4] ?></td>
     </tr>
    <?php } ?>
</table>
