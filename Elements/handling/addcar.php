<?php
require_once "../function/function_upload.php";

require_once '../../class/Database.php';

require_once '../../class/Cars.php';
        
$para_cars = [$_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], $_POST[''], 
    $_POST[''], $_POST[''], $_POST['']];

$cars = new Cars;
$cars->add_cars($para_cars);

header('Location:../admin.php');
?>
