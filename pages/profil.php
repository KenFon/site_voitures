<?php include '../Elements/header.php';

require_once '../class/Database.php';
require_once '../class/Users.php';
session_start();
$users = new Users;
$infoUsers = $users->infoUsers($_SESSION['idUsers']);
?>

<body>
	<div class="row">
		<div class="col s3">
			<div class="menu_profil">
				<li><a href="#infos" class="active">Mes infos</a></li>
				<li><a href="#wishlist">Ma wishlist</a></li>	
				<li><a href="#historique">Mon historique</a></li>
			</div>
		</div>
		<div class="col s8 content active" id="infos">
			<img class="responsive-img" src="<?= $infoUsers['photo']; ?>" >
			<h2><?= $infoUsers['nom']." ".$infoUsers['prenom']; ?></h2>
			<p><?= $infoUsers['adresse']; ?></p>
		</div>
		<div class="col s8 content" id="wishlist">
			<h2>Wishlist</h2>
			<p><?= $infoUsers['wishlist']; ?></p>
		</div>
		<div class="col s8 content" id="historique">
			<h2>Historique</h2>
			<p><?php if (empty($_SESSION['historique'])) { echo 'Aucun historique'; } else { echo $_SESSION['historique']; } ?></p>
		</div>
	</div>

</body>


<script type="text/javascript" src="../javascript/main.js"></script>


