<?php 

require_once '../../class/Database.php';
require_once '../../class/Users.php';


$Nom = htmlspecialchars($_POST['nom']);
$Prenom = htmlspecialchars($_POST['prenom']);
$Adresse = htmlspecialchars($_POST['adresse']);
$Mail = htmlspecialchars($_POST['email']);
$Password = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


$users = new Users;
$message = $users->addCompte($Nom, $Prenom, $Adresse, $Mail, $Password);
 ?>