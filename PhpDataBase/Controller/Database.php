<?php
$host = 'localhost';
$dbname = 'taxibokko';
$username = 'root';
$password = '';
// $l= md5($passwo); Crypter le mot de pass;
try {
    $conn  = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connexion à la base de données réussie";
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
