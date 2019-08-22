<?php 

session_start();

$_SESSION['idUsers'] = 17;

require_once '../../class/Database.php';
require_once '../../class/Users.php';

$Mail = htmlspecialchars($_POST['email']);
$Password = $_POST['mdp'];

$users = new Users;
$message = $users->verifConnexion($Mail, $Password);

// $users = new Users;
// $users->suppressionWishlist();
// $users->ajoutWishlist(4);
// $users->historique("lool");
 ?>
