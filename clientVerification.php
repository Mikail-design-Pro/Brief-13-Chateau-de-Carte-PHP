<?php
session_start();

// VALEUR de connexion à la base de données
$db_host     = 'localhost';
$db_username = 'root';
$db_password = 'Mike12klkn34';
$db_name     = 'chateauDeCarte';

if(isset($_POST['pseudo']) && isset($_POST['password'])){
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];

	try{
		$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
		$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM `utilisateur`\n"
	
		. "WHERE pseudo = \"$pseudo\" AND password = \"$password\"";
		$sth = $dataBaseConection->prepare($sql);
		$sth->execute();
	
		$resultat = $sth->fetch(PDO::FETCH_ASSOC);
	
		if($pseudo == $resultat['pseudo'] && $password == $resultat['password']){
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['username'] = $resultat['username'];
			$_SESSION['pseudo'] = $resultat['pseudo'];
			$_SESSION['mail'] = $resultat['mail'];
			$_SESSION['date'] = $resultat['date'];
			header('location:mainpage.php');
		}else{
			echo "<p>Mauvais compte utilisateur</p>
			<p>Vous n'etent pas inscrit ? Cliquer içi pour vous inscrire</p><a href=\"index.php\"><button class=\"btn btn-info\" >Inscription</button></a>";
		}
	}
	catch(PDOException $e){
		echo "Erreur : " . $e->getMessage();
	}
};

if(isset($_POST['email']) && isset($_POST['newPassword'])){
	$newPassword = $_POST['newPassword'];
	$mail = $_POST['email'];
	try{
		$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
		$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * \n"
		. "FROM `utilisateur`\n"
		. "WHERE mail = \"$mail\"";
		$sth = $dataBaseConection->prepare($sql);
		$sth->execute();
		$clientMail = $sth->fetch(PDO::FETCH_LAZY);
		
		if($_POST['email'] == $clientMail['mail']){
			$sql = "UPDATE `utilisateur` SET `password` = \"$newPassword\" WHERE `utilisateur`.`mail` = \"$mail\"";
			$dataBaseConection->exec($sql);
		}else{
			echo "Vous n'etent pas un client";
		}
	}
	catch(PDOException $e){
		echo "Erreur : " . $e->getMessage();
	}	
};
?>
