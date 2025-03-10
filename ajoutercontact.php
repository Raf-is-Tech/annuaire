<?php
require "connexion.php";
if (isset($_POST["ajouter"])) {
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$q = $bd->prepare("insert into annuaire (nom , tel)values(?,?)");
	$q->execute(array($nom, $tel));
	header("refresh:3; url=listecontact.php");
	echo '<div class="alert alert-info">Le contact a été enregistré avec succès</div>';
}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajouter Contact</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
	<?php include "menu.php" ?>
	<div class="container">

		<div class="card">
			<div class="card-header bg-primary text-white">
				Ajouter un contact
			</div>
			<div class="card-body">

				<form action="" method="POST">
					<label for="">Nom et Prénoms</label>
					<input type="text" name="nom" class="form-control" placeholder="Entrer le nom">
					<label for="">Téléphone</label>
					<input type="tel" name="tel" class="form-control" placeholder="Entrer le téléphone">
					<br>
					<input type="submit" name="ajouter" class="btn btn-warning text-white btn-lg" value="AJOUTER">
				</form>

			</div>
		</div>


	</div>
</body>

</html>