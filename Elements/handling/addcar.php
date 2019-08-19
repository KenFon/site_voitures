<?php
require_once "../function/function_upload.php";

require_once '../../class/Database.php';
        
$db = new Database;

$db->add($parametre);
header('Location:../admin.php');
?>
