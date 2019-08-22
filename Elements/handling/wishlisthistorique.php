<?php 

session_start();

require_once '../../class/Database.php';
require_once '../../class/Users.php';

$users = new Users;

if (isset($_POST['ajoutWishlistIdVoiture'])) {
	$users->ajoutWishlist($_POST['ajoutWishlistIdVoiture']);
}
else if (isset($_POST['modificationWishlistIdVoiture'])) {
	$users->modificationWishlist($_POST['modificationWishlistIdVoiture']);
}
else if (isset($_POST['suppressionWishlistIdVoiture'])) {
	$users->suppressionWishlist($_POST['suppressionWishlistIdVoiture']);
}
else if (isset($_POST['historiqueIdVoiture'])) {
	$users->historique($_POST['historiqueIdVoiture']);
}

 ?>

