<?php


/**
 * Description of Users
 *
 * @author flavian
 */



class Users extends Database {

	public function addCompte($nom, $prenom, $adresse, $mail, $password) {
		$prepare = $this->connect();
		$add = $prepare->prepare('INSERT INTO users VALUE (null, :nom, :prenom, :adresse, :photo, :statue, :mail, :password, :whishlist)');
		
		$add->bindValue('nom', $nom, PDO::PARAM_STR_CHAR);
		$add->bindValue('prenom', $prenom, PDO::PARAM_STR_CHAR);
		$add->bindValue('adresse', $adresse, PDO::PARAM_STR_CHAR);
		$add->bindValue('photo', "lol", PDO::PARAM_STR_CHAR);
		$add->bindValue('statue', 1, PDO::PARAM_INT);
		$add->bindValue('mail', $mail, PDO::PARAM_STR_CHAR);
		$add->bindValue('password', $password, PDO::PARAM_STR_CHAR);
		$add->bindValue('whishlist', NULL, PDO::PARAM_INT);

		$message = $this->is_ok($add);

		return $message;
	}

	public function verifConnexion($mail, $password) {
		$mail = 'mail="'.$mail.'"';
		$usersInfo = $this->infoUsers($mail);
		if (empty($usersInfo)) {
			echo 'mauvais email/email non existant';
		}
		else if (password_verify($password,$usersInfo['password'])) {
			echo $usersInfo['password'];
			echo $usersInfo['id'];
			$_SESSION['users'] = $usersInfo['id'];
		}
		else {
			echo "mauvais mot de passe";
		}
	}

	public function infoUsers($info) {
		$users = $this->connect();
		$usersInfo = $users->query('SELECT * FROM users WHERE '.$info); 
		$usersInfo = $usersInfo->fetch();
		return $usersInfo;
	}

	public function ajoutWishlist($idVoiture) {
		$id = 'id="'.$_SESSION['idUsers'].'"';
		$usersInfo = $this->infoUsers($id);
		$usersInfo = $usersInfo['wishlist'];
		
		$users = $this->connect();
		$id = $_SESSION['idUsers'];
		if ($usersInfo!=NULL) {
			$idVoiture = $usersInfo .".". $idVoiture;
			echo 'ok';
			echo $idVoiture;
		}
		$sth = $users->prepare('UPDATE users SET wishlist="'.$idVoiture.'" WHERE id="'.$id.'"');
		$sth->execute();
	}

	public function modificationWishlist($idVoiture) {
		$id = 'id="'.$_SESSION['idUsers'].'"';
		$usersInfo = $this->infoUsers($id);
		$usersInfo = $usersInfo['wishlist'];
		$wishlist = explode(".", $usersInfo);
		foreach ($wishlist as $value) {
			if ($value == $idVoiture) {
				unset($wishlist[array_search($idVoiture, $wishlist)]);
			}
		}
		$wishlist = implode(".",$wishlist);

		$users = $this->connect();
		$id = $_SESSION['idUsers'];
		$sth = $users->prepare('UPDATE users SET wishlist="'.$wishlist.'" WHERE id="'.$id.'"');
		$sth->execute();
	}

	public function suppressionWishlist() {
		$id = $_SESSION['idUsers'];
		$users = $this->connect();
		$sth = $users->prepare('UPDATE users SET wishlist=NULL WHERE id="'.$id.'"');
		$sth->execute();
	}

	public function historique($historique) {

		$_SESSION['historique'] = "1.2.3";
		if (empty($_SESSION['historique'])) {
			$_SESSION['historique'] = $historique;
			echo $_SESSION['historique'];
		}
		else {
			$sHistorique = $_SESSION['historique'];
			$tableauHistorique = explode(".", $sHistorique);
			print_r($tableauHistorique);
			$test = count($tableauHistorique);
			echo $test;
			if (count($tableauHistorique)>2) {
				echo "au dessus de trois";
				array_shift($tableauHistorique);
				print_r($tableauHistorique);
				$sHistorique = implode(".", $tableauHistorique);
				$historique = 1;
				$sHistorique = $sHistorique.".".$historique;
				echo $sHistorique;
			}
			else {
				$sHistorique = $sHistorique.".".$historique;
				echo "en dessous de trois";
			}
		}
	}

}
