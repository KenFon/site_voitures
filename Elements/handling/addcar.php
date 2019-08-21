<?php
require_once '../../class/Database.php';

require_once '../../class/Cars.php';

require_once '../../function/function_car.php';
var_dump($_POST);

$para_cars = [
    $_POST['marque'],
    $_POST['model'],
    $_POST['prix'],
    $_POST['desc'],
    $_POST['garantie'],
    $_POST['nbchevaux'],
    $_POST['km'],
    $_POST['couleur'],
    $_POST['type'],
    $_POST['carburant'],
    $_POST['annee'],
    $_FILES['img'],
];

$car = treatment_cars($para_cars);


$cars = new Cars;
$cars->add_cars($car);

header('Location:../../pages/admin.php');
?>
