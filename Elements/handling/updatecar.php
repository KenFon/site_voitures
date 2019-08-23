<?php
require_once '../class/Cars.php';
$voitures = new Cars;
$voiture = $voitures->show_cars(['id' => $_POST['id']]);
require_once '../Elements/header.php'
?>

<h1>Modifier un véhicule</h1>
<form class="col s12" method="POST" action="../../pages/admin.php" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s4">
            <input placeholder="Marque" id="marque" type="text" class="validate" name="marque" value="<?= $voiture->marque?>">
            <label for="marque">Marque</label>
        </div>

        <div class="input-field col s4">
            <input id="model" placeholder="Modéle" type="text" class="validate" name="model" value="<?= $voiture->marque?>">
            <label for="model">Modele</label>
        </div>

        <div class="input-field col s4">
            <input placeholder="Prix sans le signe €" id="price" type="text" class="validate" name="prix" value="<?= $voiture->marque?>">
            <label for="price">Prix</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s8">
            <textarea id="description" class="materialize-textarea" name="desc" value="<?= $voiture->marque?>"></textarea>
            <label for="description">Description</label>
        </div>

        <div class="input-field col s4">
            <input id="km" type="text" placeholder="Kilometrage" class="validate" name="km" value="<?= $voiture->marque?>">
            <label for="km">Kilometrage</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s4">
            <select name="garantie" value="<?= $voiture->marque?>">
                <option value="" disabled selected>Choix de la garantie</option>
                <option value="0">3 Mois</option>
                <option value="1">6 Mois</option>
                <option value="2">9 Mois</option>
            </select>
            <label for="garantie">Garantie</label>
        </div>

        <div class="input-field col s4">
            <input id="nbchevaux"  placeholder="Nombre de chevaux" type="text" class="validate" name="nbchevaux" value="<?= $voiture->marque?>">
            <label for="nbchevaux">Nombre de chevaux</label>
        </div>

        <div class="input-field col s4">
            <input id="type" placeholder="Type" type="text" class="validate" name="type">
            <label for="type">Type</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s4">
            <select name="couleur">
                <option value="" disabled selected>Couleur dominante</option>
                <option value="rouge">Rouge</option>
                <option value='bleu'>Bleu</option>
                <option value="vert">Vert</option>
                <option value="noir">Noir</option>
                <option value="Blanc">Blanc</option>
                <option value="Jaune">Jaune</option>
                <option value="autre">Autre</option>
            </select>
            <label for="color">Couleur</label>
        </div>

        <div class="input-field col s4">
            <select name="carburant">
                <option value="" disabled selected>Choix du carburant</option>
                <option value="0">Diesel</option>
                <option value="1">Essence</option>
                <option value="2">Hybride</option>
            </select>
            <label for="carbu">Carburant</label>
        </div>

        <div class="input-field col s4">
            <input id="annee" placeholder="Année" type="text" class="validate" name="annee">
            <label for="annee">Annee</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
            <input id="img" type="file" class="validate" name="img">
        </div>
    </div>

    <div class="row">
        <button type="submit"><a class="wave-effect waves-light btn">Envoyer</a></button>
    </div>
</form>

<?php require_once '../Elements/footer.php' ?>
