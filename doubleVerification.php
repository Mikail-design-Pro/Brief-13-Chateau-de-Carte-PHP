<?php
try{
	$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
	$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "
	SELECT `username`, COUNT(username) AS username_Double
	FROM `utilisateur`
	WHERE `username` = \"$username\"
	GROUP BY `username`
	HAVING COUNT(*) >= 1
	";

	$sth = $dataBaseConection->prepare($sql);
	$sth -> execute();
	$usernameDoubleArray = $sth->fetch(PDO::FETCH_LAZY);

	// INFORMER L'UTLISATEUR POUR USERNAME DOUBLE
		if(!($usernameDoubleArray['username_Double'] == 0)){
			echo "<p>Ce Nom d'utilisateur est déjà utilisé !</p>";
			$usernameDouble = true;
		}else{
			echo "<p>Ce Nom d'utilisateur n'a jamais été utilisé</p>";
			$usernameDouble=false;
		};
	
	$sth = $dataBaseConection->prepare("
	SELECT `pseudo`, COUNT(pseudo) AS pseudo_Double
	FROM `utilisateur`
	WHERE `pseudo` = \"$pseudo\"
	GROUP BY `pseudo`
	HAVING COUNT(*) >= 1
	");
	$sth -> execute();
	$pseudoDoubleArray = $sth->fetch(PDO::FETCH_LAZY);

	// INFORMER L'UTLISATEUR POUR PSEUDO DOUBLE
	if(!($pseudoDoubleArray['pseudo_Double'] == 0)){
		echo "<p>Ce Pseudo est déjà utilisé !</p>";
		$pseudoDouble = true;
	}else{
		echo "<p>Ce pseudo n'a jamais été utilisé</p>";
		$pseudoDouble=false;
	};

	$sth = $dataBaseConection->prepare("
	SELECT `mail`, COUNT(mail) AS mail_Double
	FROM `utilisateur`
	WHERE `mail` = \"$mail\"
	GROUP BY `mail`
	HAVING COUNT(*) >= 1
	");
	$sth -> execute();
	$mailDoubleArray = $sth->fetch(PDO::FETCH_LAZY);

	// INFORMER L'UTLISATEUR POUR MAIL DOUBLE
		if(!($mailDoubleArray['mail_Double'] == 0)){
			echo "<p>Ce Mail est déjà utilisé !</p>";
			$mailDouble = true;
		}else{
			echo "<p>Ce Mail n'a jamais été utilisé</p>";
			$mailDouble=false;
		};
}
catch(PDOException $e){
	echo "Erreur : " . $e->getMessage();
}

?>
