<?php
require "connexion.php";
if (isset($_POST['supprimer'])) {
    $idannuaire = $_POST['idannuaire'];
    $q = $bd->prepare("delete from annuaire where idannuaire=?");
    $q->execute(array($idannuaire));
    header("refresh:3");
    echo '<div class="alert alert-success">Contact supprimé...</div>';
} elseif (isset($_POST['appliquermodifier'])) {
    $idannuaire = $_POST['idannuaire'];
    $nom = $_POST['nom'];
    $tel = $_POST['tel'];
    $q = $bd->prepare("update annuaire set nom=?,tel=? where idannuaire=?");
    $q->execute(array($nom, $tel, $idannuaire));
    header("refresh:3");
    echo '<div class="alert alert-success">Contact modifié...</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include "menu.php"
    ?>
    <div class="container">
        <p class="lead">Mes contacts</p>
        <?php
        if (isset($_POST["modifier"])) {
            $nom = $_POST['nom'];
            $tel = $_POST['tel'];
            $idannuaire = $_POST['idannuaire'];

        ?>
            <div class="card">
                <div class="card-header">Modification du contact</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="idannuaire" value="<?php echo $idannuaire ?>">
                        <label for="">Nom et Prénom(s)</label>
                        <input type="text" name="nom" id="" value="<?php echo $nom ?>" class="form-control">
                        <label for="">Tel</label>
                        <input type="tel" name="tel" id="" value="<?php echo $tel ?>" class="form-control">
                        <br>
                        <input type="submit" value="MODIFIER" name="appliquermodifier" class="btn btn-warning btn-lg">
                    </form>
                </div>

            </div>
        <?php }
        ?>
        <table class=" table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Tel</th>
                    <th>M</th>
                    <th>S</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cpt = 0;
                $q = $bd->prepare("select idannuaire,nom,tel from  annuaire order by idannuaire asc");
                $q->execute();
                while ($d = $q->fetch()) {
                    $cpt++;

                ?>
                    <tr>
                        <td>
                            <?php echo $d['nom'] ?>
                        </td>
                        <td>
                            <?php echo $d['tel'] ?>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="idannuaire" value="<?php echo $d['idannuaire'] ?>">
                                <input type="hidden" name="nom" value="<?php echo $d['nom'] ?>">
                                <input type="hidden" name="tel" value="<?php echo $d['tel'] ?>">
                                <input type="submit" name="modifier" value="MODIFIER" class="btn btn-warning btn-sm text-white">
                            </form>
                        </td>
                        <td>
                            <form action="" method="POST" onsubmit="return confrim('voulez vous supprimer ce contact ?')">
                                <input type="hidden" name="idannuaire" value="<?php echo $d['idannuaire'] ?>">
                                <input type="submit" name="supprimer" value="SUPPRIMER" class="btn btn-danger btn-sm text-white">
                            </form>
                        </td>
                    </tr>
                <?php }
                if ($cpt == 0) {
                ?>
                    <tr>
                        <td colspan="4">Aucun contact</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>