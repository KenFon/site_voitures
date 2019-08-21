<?php
/*
 * @param array
 * fonction qui traite l'ajout d'une voiture.
 */

function treatment_cars($array){
    $array_treaty = [];
    $treaty_marque = strtoupper($array[0]);
    $treaty_model = ucfirst($array[1]);
    $treaty_prix = floatval($array[2]);
    $treaty_desc = $array[3];
    $treaty_garantie = $array[4];
    $treaty_nbchevaux = $array[5];
    $treaty_km = $array[6];
    $treaty_color=$array[7];
    $treaty_type=$array[8];
    $treaty_carburant= $array[9];
    $treaty_annee=$array[10];
    $treaty_slug = random_string();
    $treaty_img=$array[11];

    $array_treaty = [$treaty_marque, $treaty_model, $treaty_prix, $treaty_desc, $treaty_garantie, $treaty_nbchevaux, $treaty_km, $treaty_color, $treaty_type, $treaty_carburant,
        $treaty_annee, $treaty_slug, $treaty_img];
    return $array_treaty;
}

function random_string($length=10){
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';
    for($i=0; $i<$length; $i++){
        $string .= $chars[rand(0, strlen($chars)-1)];
    }
    return $string;
}


?>