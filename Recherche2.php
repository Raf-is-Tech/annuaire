<?php
require 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Version 2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include "menu.php" ?>
    <div class="container">
        <br>
        <div class="card">
            <div class="card-header bg-primary text-white">Rechercher un contact Version1</div>
            <div class="card-body">
                <form action="" method="POST">
                    <label for="">Type de Recherche</label>
                    <br>
                    <input type="radio" name="type" id="" value="nom" required>Par nom <br>
                    <input type="radio" name="type" id="" value="tel" required>Par tel <br>
                    <input type="search" name="recherche" id="" class="form-control" placeholder="Votre Recherche" required>
                    <br>
                    <input type="submit" value="Rechercher" class="btn-primary btn-lg" name=" rechercher">
                </form>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_POST['rechercher'])) {
                    $type = $_POST['type'];
                    $recherche = $_POST['recherche'];
                    if ($type == 'nom') {
                        $q = $bd->prepare("select nom,tel from annuaire where nom like '%$recherche%'");
                        $q->execute();
                        while ($d = $q->fetch()) {
                ?>
                            <tr>
                                <td><?php echo $d['nom']  ?></td>
                                <td><?php echo $d['tel']  ?></td>
                            </tr>
                        <?php
                        }
                    } elseif ($type == 'tel') {
                        $q = $bd->prepare("select nom,tel from annuaire where tel like'%$recherche%'");
                        $q->execute();
                        while ($d = $q->fetch()) {
                        ?>
                            <tr>
                                <td><?php echo $d['nom'] ?></td>
                                <td><?php echo $d['tel'] ?></td>
                            </tr>
                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>