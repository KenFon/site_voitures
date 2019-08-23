
<?php
$title = 'produit';
require_once "../Elements/nav.php";
require_once "../Elements/header.php";
?>

<?php
$slug =(isset($_GET['slug'])? $_GET['slug'] : false);
// var_dump($slug);

$voiture = $voitures->show_cars(['slug' => $slug]);

?>

  <main class="container main_product">

    <div class="row car">
      <div class="col s12 car">
        <img class="materialboxed center-align" width="650" src="<?=$voiture->model?>">
      </div>
      <div class="col s12">
          <h1><?=$voiture->marque?></h1>
      </div>
      <div class='col s12'>
          <?=$voiture->description?>
      </div>
      <div class=class="striped">
        <table>
        <thead>
          <tr>
              <th>Informations supplémentaires</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Marque</td>
            <td><?=$voiture->marque?></td>
          </tr>
          <tr>
            <td>Modèle</td>
            <td><?=$voiture->model?></td>
          </tr>
          <tr>
            <td>Prix</td>
            <td><?=$voiture->prix?></td>
          </tr>
          <tr>
            <td>Garantie</td>
            <td><?=$voiture->garantie?></td>
          </tr>
          <tr>
            <td>Nombre de chevaux</td>
            <td><?=$voiture->nbchevaux?></td>
          </tr>
          <tr>
            <td>Kilomètrage</td>
            <td><?=$voiture->km?></td>
          </tr>
          <tr>
            <td>Couleur</td>
            <td><?=$voiture->couleur?></td>
          </tr>
          <tr>
            <td>Type</td>
            <td><?=$voiture->type?></td>
          </tr>
          <tr>
            <td>Carburant</td>
            <td><?=$voiture->carburant?></td>
          </tr>
          <tr>
            <td>Année</td>
            <td><?=$voiture->annee?></td>
          </tr>
        </tbody>
      </table>

      </div>

    </div>

</main>

<?php include "../Elements/footer.php"?>

<script>
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.materialboxed');
var instances = M.Materialbox.init(elems,{});
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems,{});
});


</script>
