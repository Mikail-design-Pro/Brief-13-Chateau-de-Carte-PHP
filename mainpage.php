<?php 
session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Chateau de Carte</title>
		<meta name="description" content="Chateau de carte main page" />
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
			<h1 class="text-center">Bonjour <?php echo $_SESSION['pseudo']; ?></h1>
		</header>


		<article class="container">
			<section class="my-3">
				<table>
					<h3>Utilisateur Actuel</h3>
					<tr>
						<th>Nom</th>
						<th>Mail</th>
						<th>Date d'inscription</th>
						<th>Modification</th>
					</tr>
					<tr>
						<td><?php echo $_SESSION['username']; ?></td>
						<td><?php echo $_SESSION['mail']; ?></td>
						<td><?php echo $_SESSION['date']; ?></td>
						<td> <a href="delete.php?id=<?php echo $_SESSION['id']?>">Suprimer</a> </td>
					</tr>
				</table>

			</section>

			<section>
				<?php 
				include "listClient.php";
				?>
				<table>
					<h3>Liste de tout les clients</h3>
					<tr>
						<th>Id</th>
						<th>Nom</th>
						<th>Mail</th>
						<th>Date d'inscription</th>
						<th>Modification</th>
					</tr>
					<?php 
					foreach($clientList as $key => $value){
						echo 
						"<tr>
							<td>". $clientList[$key]['id']. "</td>
							<td>". $clientList[$key]['username']. "</td>
							<td>". $clientList[$key]['mail']. "</td>
							<td>". $clientList[$key]['date']. "</td>
							<td> <a href=\"delete.php?id= ". $clientList[$key]['id'] ." \">Suprimer</a> </td>
						</tr>";
						
					};
					?>
				</table>

			</section>
		</article>

		<script src="assets/js/bootstrap.min.js"></script>

	</body>

</html>
