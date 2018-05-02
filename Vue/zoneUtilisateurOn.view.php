<div id="zoneDeconnexion">
  <div>
    <a href="mainControler.controler.php"><img src="./../Ressource/logo.png" alt="Logo du site"></a>
    <h1>Super Blablablablacar du turfu !!! </h1>

  </div>


 <div>
   <img src="<?php echo "../Ressource/avatar/$this->avatarMembre"?>" alt="Avatar du membre">
   <p>Heureux de vous voir <?=$this->pseudoMembre ?></p>
   <a href="deconnexion.controler.php">Déconnexion</a>
   <?php
   if ($this->idMembre==1) {
     // code...
     echo "<a href='../Controleur/adminBackOffice.controler.php'>Administration</a>";
   } ?>

 </div>

</div>
