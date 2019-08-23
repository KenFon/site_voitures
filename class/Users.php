<?php


/**
 * Description of Users
 *
 * @author flavian
 */



class Users extends Database {

	public function addCompte($nom, $prenom, $adresse, $photo, $mail, $password) {
		$prepare = $this->connect();
		$add = $prepare->prepare('INSERT INTO users VALUE (null, :nom, :prenom, :adresse, :photo, :statue, :mail, :password, :whishlist)');
		
		$add->bindValue('nom', $nom, PDO::PARAM_STR_CHAR);
		$add->bindValue('prenom', $prenom, PDO::PARAM_STR_CHAR);
		$add->bindValue('adresse', $adresse, PDO::PARAM_STR_CHAR);
		$add->bindValue('photo', $photo, PDO::PARAM_STR_CHAR);
		$add->bindValue('statue', 1, PDO::PARAM_INT);
		$add->bindValue('mail', $mail, PDO::PARAM_STR_CHAR);
		$add->bindValue('password', $password, PDO::PARAM_STR_CHAR);
		$add->bindValue('whishlist', NULL, PDO::PARAM_INT);

		$message = $this->is_ok($add);

		return $message;
	}

	public function verifConnexion($mail, $password) {
		$usersInfo = $this->infoUsers($mail);
		if ($mail == NULL || $password == NULL) {
			$_SESSION['erreur'] = "champ non remplis";
			header("Location:../../pages/connexion.php");
		}
		else if (empty($usersInfo)) {
			$_SESSION['erreur'] = "email invalide";
			header("Location:../../pages/connexion.php");
		}
		else if (password_verify($password,$usersInfo['password'])) {
			$_SESSION['idUsers'] = $usersInfo['id'];
			$_SESSION['erreur'] = NULL;
			header("Location:../../pages/index.php");
		}
		else {
			$_SESSION['erreur'] = "Mot de passe incorrect";
			header("Location:../../pages/connexion.php");
		}
	}

	public function infoUsers($info) {
		if (preg_match("#^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2,5}$#",$info)) {
			$info = 'mail="'.$info.'"';
		}
		else {
			$info = 'id="'.$info.'"';
		}
		$users = $this->connect();
		$usersInfo = $users->query('SELECT * FROM users WHERE '.$info); 
		$usersInfo = $usersInfo->fetch();
		return $usersInfo;
	}

	public function ajoutWishlist($idVoiture) {
		$id = $_SESSION['idUsers'];
		$usersInfo = $this->infoUsers($id);
		$usersInfo = $usersInfo['wishlist'];
		
		$users = $this->connect();
		$id = $_SESSION['idUsers'];
		if ($usersInfo!=NULL) {
			$idVoiture = $usersInfo .",". $idVoiture;
		}
		$sth = $users->prepare('UPDATE users SET wishlist="'.$idVoiture.'" WHERE id="'.$id.'"');
		$sth->execute();
	}

	/*
	* supprime une voiture de la Wishlist
	*
	*/

	public function modificationWishlist($idVoiture) {
		$id = $_SESSION['idUsers'];
		$usersInfo = $this->infoUsers($id);
		$usersInfo = $usersInfo['wishlist'];
		$wishlist = explode(",", $usersInfo);
		foreach ($wishlist as $value) {
			if ($value == $idVoiture) {
				unset($wishlist[array_search($idVoiture, $wishlist)]);
			}
		}
		$wishlist = implode(",",$wishlist);

		$users = $this->connect();
		$id = $_SESSION['idUsers'];
		$sth = $users->prepare('UPDATE users SET wishlist="'.$wishlist.'" WHERE id="'.$id.'"');
		$sth->execute();
	}

	/*
	* supprime tout la Wishlist
	*
	*/

	public function suppressionWishlist($idVoiture) {
		$id = $_SESSION['idUsers'];
		$users = $this->connect();
		$sth = $users->prepare('UPDATE users SET wishlist=NULL WHERE id="'.$id.'"');
		$sth->execute();
	}

	public function historique($historique) {
		if (empty($_SESSION['historique'])) {
			$_SESSION['historique'] = $historique;
		}
		else {
			$sHistorique = $_SESSION['historique'];
			$tableauHistorique = explode(".", $sHistorique);
			if (count($tableauHistorique)>2) {
				array_shift($tableauHistorique);
				$sHistorique = implode(".", $tableauHistorique);
				$_SESSION['historique'] = $sHistorique.".".$historique;
			}
			else {
				$_SESSION['historique'] = $historique.".".$sHistorique;
			}
		}
	}

}
