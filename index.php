<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Chateaux de carte inscription</title>
		<meta name="description" content="Chateau de carte inscription" />
		<meta name="author" content="Mikail" />

		<!-- BOOSTRAP -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="style.css" />


	</head>

	<body>
		<header>
			<nav class="navbar navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="assets/logo2.png" alt="" class="d-inline-block align-top">
					</a>
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a href="#" class="nav-link text-white">Chateau de Carte</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>

		<article class="container">
			<section>
				<h1>Formulaire Inscription</h1>
				<form action="regexClean.php" method="POST">
					<fieldset class="col">
						<div class="test">
							<strong>Deja Inscrit connect toi içi</strong>
							<a href="login.php" class="btn btn-info">Connexion Compte</a>
						</div>
						<legend>Inscription</legend>
						<label for="username"><b>Nom d'utilisateur</b></label>
						<input type="text" placeholder="Username" name="username" required>

						<label for="pseudo"><b>Pseudo</b></label>
						<input type="text" placeholder="Pseudo" name="pseudo" required>

						<label for="username"><b>Mail</b></label>
						<input type="mail" placeholder="exemplemail@gmail.com" name="mail" required>

						<label for="password"><b>Mots De Passe</b></label>
						<input type="password" placeholder="PassWord Minimum 8 caractère" name="password" required>

						<label for="repeatPassword"><b>Repeter Mots De Passe</b></label>
						<input type="password" placeholder="Repeat PassWord" name="repeatPassword" required>

						<label for="submit"><b>Inscription</b></label>
						<input class="btn btn-success" type="submit" value="Inscritption" name="submit">
					</fieldset>
				</form>

			</section>
		</article>

		<script src="assets/js/bootstrap.min.js"></script>

	</body>

</html>
