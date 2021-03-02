<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Chateaux de carte connexion</title>
		<meta name="description" content="Chateaux de carte connexion" />
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
						Chateau de Carte
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
				<form action="" method="POST" class="row">
					<h1><strong>Formulaire Connexion</strong></h1>
					<fieldset class="d-flex flex-column border border-1 border-dark">
						<legend>Connexion</legend>

						<label for="pseudo"><b>Pseudo</b></label>
						<input type="text" placeholder="Pseudo" name="pseudo" required>

						<label for="password"><b>Mots De Passe</b></label>
						<input type="password" placeholder="PassWord Minimum 8 caractère" name="password" required>

						<label for="submit"><b>Connexion</b></label>
						<input class="btn  btn-success" type="submit" value='Connexion' name="submit">
					</fieldset>
				</form>

			</section>
			<section>
				<h2>Vous n'avez pas de compte ? ou vous avez oublier votre mots de passe ? </h2>
				<a class="btn btn-success" href="index.php">Vous inscrire ?</a>
				<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
					aria-expanded="false" aria-controls="collapseExample">
					Mots de pass oublier ?
				</button>

				<div class="collapse my-3" id="collapseExample">
					<form action="" method="post" class="row">
						<fieldset class="d-flex flex-column border border-1 border-dark">
							<legend>Recuperation mots de pass</legend>
							<label for="email">Email</label>
							<input type="email" name="email">

							<label for="newPassword">Nouveaux mots de pass</label>
							<input type="password" name="newPassword">

							<label for="submit"><b>Changer de mots de pass</b></label>
							<input type="submit" value='Envoyer' name="submit">
						</fieldset>
					</form>
				</div>

			</section>
			<?php include "clientVerification.php"; ?>
		</article>


		<script src="assets/js/bootstrap.min.js"></script>

	</body>

</html>
