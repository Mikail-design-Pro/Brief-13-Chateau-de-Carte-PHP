<?php
// VALEUR de connexion à la base de données
$db_host     = 'localhost';
$db_username = 'root';
$db_password = 'Mike12klkn34';
$db_name     = 'chateauDeCarte';
try{
	$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
	$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT * FROM `utilisateur`";
	$sth = $dataBaseConection->prepare($sql);
	$sth->execute();
	$clientList = $sth->fetchAll(PDO::FETCH_ASSOC);
}
catch(PDOException $e){
	echo "Erreur : " . $e->getMessage();
}
?>
