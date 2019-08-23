<?php include '../Elements/header.php';

$users = new Users;
$infoUsers = $users->infoUsers($_SESSION['idUsers']);
$cars = new Cars;

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
			
			<?php $infoCars = $cars->show_cars(["id_cars" => $infoUsers['wishlist']]);
			foreach ($infoCars as $infocars) :?>
			<img src="../<?= $infocars->photo;?>">
			<p>	Marque : <?= $infocars->marque;?> Model : <?= $infocars->model;?> </p>
			<?php endforeach; ?>
				
			
			
		</div>
		<div class="col s8 content" id="historique">
			<h2>Historique</h2>
			<?php if (empty($_SESSION['historique'])) { echo '<p>Aucun historique</p>'; } 
			else { 
			$infoCars = $cars->show_cars(["id_cars" => $_SESSION['historique']]);
			foreach ($infoCars as $infocars) :?>
			<img src="<?= $infocars->photo;?>">
			<p>	Marque : <?= $infocars->marque;?> Model : <?= $infocars->model;?> </p>
			<?php endforeach; } ?>
		</div>
	</div>

</body>


<script type="text/javascript" src="../javascript/main.js"></script>


