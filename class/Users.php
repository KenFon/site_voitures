<?php
// namespace App;
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

}
