<?php
header('location:home.php');
// VALEUR de connexion à la base de données
$db_host     = 'localhost';
$db_username = 'root';
$db_password = 'Mike12klkn34';
$db_name     = 'chateauDeCarte';

try{
	$dataBaseConection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
	$dataBaseConection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "DELETE FROM `utilisateur` WHERE `utilisateur`.`id` = :id LIMIT 1";
	$sth = $dataBaseConection->prepare($sql);
	$sth->execute(array(
		':id' => $_GET['id']
	));
}
catch(PDOException $e){
	echo "Erreur : " . $e->getMessage();
}


?>
