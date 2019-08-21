<!doctype html>
<html lang='fr'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>

<div class="row">

    <div class="col s3">
        <ul>
            <li><a>Ajouter un véhicule</a></li>
            <li><a>Modifier un véhicule</a></li>
            <li><a>Supprimer un véhicule</a></li>
        </ul>
    </div>


    <div class="col s8 row add_cars">
        <h1>Ajouter un véhicule</h1>
        <form class="col s12" method="POST" action="../elements/handling/addcar.php" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s4">
                    <input placeholder="Marque" id="marque" type="text" class="validate" name="marque">
                    <label for="marque">Marque</label>
                </div>

                <div class="input-field col s4">
                    <input id="model" placeholder="Modéle" type="text" class="validate" name="model">
                    <label for="model">Modele</label>
                </div>

                <div class="input-field col s4">
                    <input placeholder="Prix sans le signe €" id="price" type="text" class="validate" name="prix">
                    <label for="price">Prix</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s8">
                    <textarea id="description" class="materialize-textarea" name="desc"></textarea>
                    <label for="description">Description</label>
                </div>

                <div class="input-field col s4">
                    <input id="km" type="text" placeholder="Kilometrage" class="validate" name="km">
                    <label for="km">Kilometrage</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <select name="garantie">
                        <option value="" disabled selected>Choix de la garantie</option>
                        <option value="0">3 Mois</option>
                        <option value="1">6 Mois</option>
                        <option value="2">9 Mois</option>
                    </select>
                    <label for="garantie">Garantie</label>
                </div>

                <div class="input-field col s4">
                    <input id="nbchevaux"  placeholder="Nombre de chevaux" type="text" class="validate" name="nbchevaux">
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
    </div>

    <div class="col s8 row update_car">

        <h1>Modifier un véhicule</h1>
        <form class="col s12" method="POST" action="../elements/handling/addcar.php" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s4">
                    <input placeholder="Marque" id="marque" type="text" class="validate" name="marque">
                    <label for="marque">Marque</label>
                </div>

                <div class="input-field col s4">
                    <input id="model" placeholder="Modéle" type="text" class="validate" name="model">
                    <label for="model">Modele</label>
                </div>

                <div class="input-field col s4">
                    <input placeholder="Prix sans le signe €" id="price" type="text" class="validate" name="prix">
                    <label for="price">Prix</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s8">
                    <textarea id="description" class="materialize-textarea" name="desc"></textarea>
                    <label for="description">Description</label>
                </div>

                <div class="input-field col s4">
                    <input id="km" type="text" placeholder="Kilometrage" class="validate" name="km">
                    <label for="km">Kilometrage</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <select name="garantie">
                        <option value="" disabled selected>Choix de la garantie</option>
                        <option value="0">3 Mois</option>
                        <option value="1">6 Mois</option>
                        <option value="2">9 Mois</option>
                    </select>
                    <label for="garantie">Garantie</label>
                </div>

                <div class="input-field col s4">
                    <input id="nbchevaux"  placeholder="Nombre de chevaux" type="text" class="validate" name="nbchevaux">
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
                    <select name="carbu">
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
    </div>

    <div class="col s8 row remove_car">
        <h1>Supprimer un véhicule</h1>
        afficher la liste de toute les voitures.

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {});
    });
</script>