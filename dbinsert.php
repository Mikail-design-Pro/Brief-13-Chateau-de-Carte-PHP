<?php

if($usernameDouble == false && $pseudoDouble == false && $mailDouble == false){
	try{
		$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
		$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql= "
				INSERT INTO `utilisateur` (username, pseudo, mail, password)
				VALUES (:username, :pseudo, :mail, :password)
		";
		$sth = $dataBaseConection->prepare($sql);	
		$sth->execute(array(
			':username' => $username,
			':pseudo' => $pseudo,
			':mail' => $mail,
			':password' => $password
		));
	}
	catch(PDOException $e){
		echo "Erreur : " . $e->getMessage();
	}
	
}else{
	echo "Vous avez un compte existant!";
	echo "<a href=\"login.php\"><button>Connexion Compte</button></a>";
};

?>
