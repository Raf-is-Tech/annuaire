<?php
if (isset($_POST['connexion'])) {
    $motdepasse = $_POST['motdepasse'];
    if ($motdepasse == "esm") {
        header("Refresh:3; url=listecontact.php");
        echo '<div class="alert alert-success">Mot de passe Coorect , vous serez redirigé dans 3 secondes </div>';
    } else {
        echo '<div class="alert alert-danger">Mot de passe inCorrect, Réessayer</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de ESM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="col"></div>
        <div class="col">
            <br>
            <center>
                <img src="img/annuaire.JPG" alt="" width="200" height="150">
            </center>
            <h1 class="text-center text-white">Mon Annuaire</h1>
            <div class="card">
                <div class="card-header bg-primary text-white">Connexion</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <label for="">Votre mot de passe</label>
                        <input type="password" name="motdepasse" placeholder="Entrer le mot de passe" id="" class="form-control" required>
                        <br>
                        <input type="datetime-local" name="" id="">
                        <input type="submit" name="connexion" value="Se connecter" class="btn btn-success btn-lg">
                    </form>
                </div>
            </div>
        </div>
        <div class="col">

        </div>

        <div class="col"></div>
    </div>
    </div>
</body>

</html