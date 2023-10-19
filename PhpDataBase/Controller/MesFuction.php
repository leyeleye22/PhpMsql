<?php
include('Database.php');
function insertUser($nom, $prenom, $email, $motdepasse, $telephone, $dateInscription)
{
    global $conn;

    $query = "INSERT INTO utilisateurs (nom, prenom, email, motdepasse, telephone, 	dateInscription	) VALUES (:nom, :prenom, :email, :motdepasse, :telephone, :datein)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':motdepasse', $motdepasse);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':datein', $dateInscription);


    if ($stmt->execute()) {
        header("Location:../Model/Inscription.php");
    } else {
        return "Donne non iserr";
    }
}
function MrLeye($email)
{
    global $conn;

    $query = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':email', $email);

    if ($stmt->execute()) {
        return $stmt->fetchAll();
    } else {
        return false;
    }
}
function AfficheP()
{
    global $conn;
    $query = "SELECT * FROM utilisateurs ";
    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {
        return $stmt->fetchAll();
    } else {
        return false;
    }
}
