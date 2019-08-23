<?php
require_once '../../class/Database.php';

require_once '../../class/Cars.php';

require_once '../../function/function_car.php';

require_once '../../function/function_img.php';

$path_img = verif_img($_FILES['img'], 'img/photo_voiture/');
if($path_img != '../../img/photo_voiture/'.$_FILES['img']['name']){
    echo "echec, l'image existe déjà";
    exit();
}

$para_cars = [
    'marque' => $_POST['marque'],
    'modele' => $_POST['model'],
    'prix' => $_POST['prix'],
    'desc' => $_POST['desc'],
    'garantie' => $_POST['garantie'],
    'nbchevaux' => $_POST['nbchevaux'],
    'km' => $_POST['km'],
    'couleur' => $_POST['couleur'],
    'type' => $_POST['type'],
    'carburant' => $_POST['carburant'],
    'annee' => $_POST['annee'],
    'img' => $path_img,
];

$car = treatment_cars($para_cars);


$cars = new Cars;
$cars->add_cars($car);

header('Location:../../pages/admin.php');
?>
