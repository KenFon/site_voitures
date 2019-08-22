
<?php include "header.php" ?>


    <div class="navCat">
      <div class="categorieForm">
      <form class="row valign-wrapper" method="POST" action="handling/searchcar.php">
        <div class="input-field col s2">
          <select name="marque">
            <?php
    				    $marque= ['Marques ', 'bmw ', 'ford ', 'renault ','citroën '];

    				    for ($i=0; $i<count($marque); $i++){
                  echo "<option value='".$marque[$i]."'>".$marque[$i]."</option>";
}?>
          </select>
        </div>

        <div class="input-field col s2">
          <select name="km">
            <?php
    				    $km= ['Kilomètrage ','- 50 000km ','- 100 000km ','- 150 000km ','- 200 000km '];

    				      for ($i=0; $i<count($km); $i++){
                    echo "<option value='".$km[$i]."'>".$km[$i]."</option>";
}?>
          </select>
            </div>
            <div class="input-field col s2">
          <select name="couleur">
            <?php
              $color= ['Couleurs ','noir ','bleu ','rouge ','gris '];

                for ($i=0; $i<count($color); $i++){
                  echo "<option value='".$color[$i]."'>".$color[$i]."</option>";
}?>
          </select>
          </div>
          <div class="input-field col s2">
          <select name="carburant">
            <?php
              $carbur= ['Carburant ','essence ','diesel ','electrique ','hybride '];

                for ($i=0; $i<count($carbur); $i++){
                  echo "<option value='".$carbur[$i]."'>".$carbur[$i]."</option>";
}?>
          </select>
        </div>
        <div class='col s2'>
          <button type="submit"/>Rechercher</button>
        </div>
        </form>

      </div>
    </div>
