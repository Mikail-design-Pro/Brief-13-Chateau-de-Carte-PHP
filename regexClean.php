<?php
session_start();
header('location:login.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(
		!empty($_POST['username']) && 
		!empty($_POST['pseudo']) &&
		!empty($_POST['mail']) &&
		!empty($_POST['password']) &&
		!empty($_POST['repeatPassword'])
	)
	{
		//We Clean the content
		$regexChar ="/^[a-zA-Z\/()_?!:.,'\s-]+$/";
		$regexInt ="/^[\d]+$/";
		$regexVarchar ="/^[\w]+$/";
		$regexUsername ="/^[a-zA-Z]+$/";
		$regexPseudo = "/^[a-zA-Z0-9_-]{3,20}$/";
		$regexMail = "/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/";
		$regexPassword = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/";

		if(preg_match($regexUsername, ($_POST['username'])) && strlen(($_POST['username'])) < 20)
			{
				$username = strip_tags($_POST['username']);
			}else{
				echo "Nom de l'utilisateur invalide. Maximum 20 Caractère <br />";
			};
		
		if(preg_match($regexPseudo, ($_POST['pseudo'])) && strlen(($_POST['pseudo'])) < 20)
			{
				$pseudo = strip_tags($_POST['pseudo']);
			}else{
				echo "Pseudo invalide. Minimum 3 et Maximum 20 Caractère.";
			};

		if(preg_match($regexMail, ($_POST['mail'])) && strlen(($_POST['mail'])) < 50)
			{
				$mail = strip_tags($_POST['mail']);
			}else{
				echo "Mail invalide. Maximum 50 Caractère <br />";
			};

		if(
			($_POST['repeatPassword']) == ($_POST['password'])
		)
		{
			if(preg_match($regexPassword, ($_POST['password'])) && strlen(($_POST['password'])) < 50)
			{
				$password = strip_tags($_POST['password']);
			}else{
				echo "Mots de pass invalide. Minimum 8 Caractère Maximum 50 Caractère <br /><br />Doit contenir au moin une majuscule(A-Z), une minuscule(a-z), un caractère special(@ # etc) et un chiffre(0-9)<br />";
			}
		}else{
			echo "Vous n'avez pas remplis le meme mots de pass <br />";
		};

		echo "<p>Nom: " . $username ."</p>" . "<p>Pseudo: ". $pseudo . "</p>" . "<p>Mail: ".$mail ."</p>" . "<p>Mots de pass: " . $password . "</p>"; 

		if(
			isset($_POST['submit']) &&
			isset($username) &&
			isset($pseudo) &&
			isset($password) &&
			isset($mail) 
		
		){
			// VALEUR de connexion à la base de données
			$db_host     = 'localhost';
			$db_username = 'root';
			$db_password = 'Mike12klkn34';
			$db_name     = 'chateauDeCarte';

			//COMPTE DOUBLE VERIFICATION
			include "doubleVerification.php";

			//INSERT DATABASE
			include "dbinsert.php";

		}else{
			echo"Valeur not set";
		}
	}else{
		echo "Le formulaire na pas toute les valeur remplis";
	}
};



?>
