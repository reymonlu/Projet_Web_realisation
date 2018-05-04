<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestion des demandes</title>
    <link rel="stylesheet" href="../Ressource/gestionDemande.css">
  </head>
  <body>
    <table>
      <caption>Mes demande en cours</caption>
      <tr><th>Membre</th> <th>Status</th><th>Accord</th><th>Refus</th>    </tr>
      <?php foreach ($this->mesDemandes as $key => $value){ ?>
        <tr> <td><?= $value->getDemandeur() ?> </td> <td><?= $value->getStatut() ?> </td>
          <td><a href="accepterDemande.controler.php?trajet=<?=$this->monTrajet?>&conduteur=<?=$value->getDemandeur()?>">Accepter</a> </td>
        <td><a href="refuserDemande.controler.php?trajet=<?=$this->monTrajet?>&conduteur=<?=$value->getDemandeur()?>">Refuser</a> </td>

      <?php } ?>
    </table>
  </body>
</html>
