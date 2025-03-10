<?php
try {
    $bd = new PDO('mysql:host=localhost;dbname=bdannuaire', 'root', '');
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données ");
}
