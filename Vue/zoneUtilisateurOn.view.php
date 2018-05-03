<div id="zoneDeconnexion">
  <div class="enteteLogo">
    <a href="mainControler.controler.php"><img src="./../Ressource/logo.png" alt="Logo du site"></a>
    <h1>Stud' & Go ! </h1>

  </div>


 <div id="messageBienvenue">
   <img src="<?php echo "../Ressource/avatar/$this->avatarMembre"?>" alt="Avatar du membre">
<<<<<<< HEAD
   <p>Heureux de vous voir <?=$this->pseudoMembre ?></p>
   <a href="deconnexion.controler.php">Déconnexion</a>
   <?php
   if ($this->idMembre==1) {
     // code...
     echo "<a href='../Controleur/adminBackOffice.controler.php'>Administration</a>";
   } ?>

=======
   <p>Heureux de vous voir <br> <?=$this->pseudoMembre ?></p>
   <a href="deconnexion.controler.php">
     <div class="boutonsLogin">
       <br>Déconnexion
     </div></a>
>>>>>>> d041412a181d384f6a7077e52479259bf3a209e4
 </div>

</div>
