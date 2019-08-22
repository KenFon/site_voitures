<?php 

require_once '../../class/Database.php';
require_once '../../class/Users.php';
require_once '../../function/function_img.php';

session_start();

$Nom = htmlspecialchars($_POST['nom']);
$Prenom = htmlspecialchars($_POST['prenom']);
$Photo = $_FILES['photo'];
$Adresse = htmlspecialchars($_POST['adresse']);
$Mail = htmlspecialchars($_POST['email']);
$Password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


var_dump($Photo);

$users = new Users;
$emailVerif = $users->infoUsers($Mail);
if (empty($emailVerif)) {
	$_SESSION['erreur'] = "email déjà utiliser";
	header("Location:../../pages/inscription.php");
}
else {
	$Photo = verif_img($Photo, "../../img/photo_profil/");
	$message = $users->addCompte($Nom, $Prenom, $Adresse, $Photo, $Mail, $Password);
}
 ?>
