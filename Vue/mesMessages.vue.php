<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Mes messages</title>
  <link rel="stylesheet" href="../Ressource/mainVue.css">
</head>
<body>
  <?php include('zoneUtilisateurOn.view.php'); ?>
  <?php include('../Vue/menuNav.vue.php') ?>



  <div id="mesMessageStyle">

    <div class="categorie">

      <!-- si l'erreur existe, cela veut dire qu'un message a été
      entré avec un mauvais pseudo ou sans destinataire-->
      <?php
      if(isset($this->erreur)){
        if($this->erreur==1){
          ?>
          <script type="text/javascript">
          alert("ce pseudo n'existe pas.");
          </script>
          <?php

        }
        else{
          ?>
          <script type="text/javascript">
          alert("Veuillez mettre un destinataire.");
          </script>
          <?php
        }
      }
      ?>


      <h2>Messages Reçus</h2>
      <?php
      //si la liste messagesRecus est vide rien ne se passe, sinon on la parcours
      //en même temps que la liste tableauExpediteurs pour afficher le pseudo de
      //l'expediteur ainsi que le contenu du message
      if(!(empty($this->messagesRecus))){
        $i=0;
        foreach ($this->messagesRecus as $unMessageRecu){

          echo "<div class=\"messageEntier\"><div class=\"infoMessage\"><p>De: </p><p>".$this->tableauExpediteurs[$i]."</p></div>";
          echo "<div class=\"infoMessage\"><p>Message : </p><p>".$unMessageRecu->getDescription()."</p></div></div>";
          $i++;
        }
      }?>
    </div>

    <div class="categorie">


      <h2>Messages Envoyés</h2>
      <?php
      //idem que pour messages recus
      if(!(empty($this->messagesEnvoyes))){
        $i=0;
        foreach ($this->messagesEnvoyes as $unMessageEnvoye){
          echo "<div class=\"messageEntier\"><div class=\"infoMessage\"><p>A :</p><p>".$this->tableauDestinataires[$i]."</p></div>";
          echo "<div class=\"infoMessage\"><p>Message : </p><p>".$unMessageEnvoye->getDescription()."</p></div></div>";
          $i++;
        }
      }?>
    </div>


    <form class="categorie"  name="formNewMessage" class="formNewMessage" action="../Controleur/newMessage_form.controler.php" method="post" >
      <!-- onsubmit="return envoyerMessage()" -->
      <fieldset >
        <legend>Nouveau message</legend>

        <label for="champ_destinataire">Pseudo du destinataire :</label>
        <input type="text" name="champ_destinataire">

        <div class="entreeMessage">
          <label for="champ_descriptionMessage">Message :</label>
          <!-- <input type="textarea" name="champ_descriptionMessage" placeholder="Entrez votre message ici" required> -->
          <textarea name="champ_descriptionMessage" required></textarea>
        </div>
        <br>
        <label for="champ_signalement">Signalement ?</label>
        <input type="checkbox" name="signalement" id="champ_signalement">

        <div>
          <input class="boutonsLogin" type="reset" value="Annuler">
          <input class="boutonsLogin" type="submit" value="Valider">
        </div>

      </form>




    </div>

  </body>


</html>
