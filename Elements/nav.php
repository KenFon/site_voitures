
<?php include "header.php" ?>
    <div class="navbar">
      <div class="categorie">
      <form method="POST" action="handling/searchcar.php">
          <select name="marque">
            <?php
    				    $marque= ['Marques ', 'bmw ', 'ford ', 'renault ','citroën '];

    				    for ($i=0; $i<count($marque); $i++){
                  echo "<option value='".$marque[$i]."'>".$marque[$i]."</option>";
}?>
          </select>

          <select name="km">
            <?php
    				    $km= ['Kilomètrage ','- 50 000km ','- 100 000km ','- 150 000km ','- 200 000km '];

    				      for ($i=0; $i<count($km); $i++){
                    echo "<option value='".$km[$i]."'>".$km[$i]."</option>";
}?>
          </select>

          <select name="couleur">
            <?php
              $color= ['Couleurs ','noir ','bleu ','rouge ','gris '];

                for ($i=0; $i<count($color); $i++){
                  echo "<option value='".$color[$i]."'>".$color[$i]."</option>";
}?>
          </select>

          <select name="carburant">
            <?php
              $carbur= ['Carburant ','essence ','diesel ','electrique ','hybride '];

                for ($i=0; $i<count($carbur); $i++){
                  echo "<option value='".$carbur[$i]."'>".$carbur[$i]."</option>";
}?>
          </select>
          <input type="submit" value="Rechercher" />
        </form>
      </div>
    </div>
<?php include "../pages/index.php" ?>
