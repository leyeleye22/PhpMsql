<?php
include_once '../Controller/MesFuction.php';
session_start();

if (empty($_SESSION)) {
    header('location:../Model/Acceuil.php');
}
if (isset($_POST["leye"])) {

    header('location:../Model/Acceuil.php');
}

if (!empty($_POST)) {
    $email = $_POST['email'];
    $pas = $_POST['motdepasse'];

    $max = MrLeye($email);

    if ($max && md5($pas) === $max[0]['motdepasse']) {
        $_SESSION['nom'] = $max[0]["nom"];
        $_SESSION['prenom'] = $max[0]["prenom"];

        echo '<style>body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .background {
            background-image: url("background.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .profile {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        
        .profile h1 {
            margin: 10px 0;
            font-size: 24px;
        }
        
        .profile p {
            font-size: 16px;
            margin: 5px 0;
        }
        .btn-deconnexion {
            background-color: #FF0000; /* Couleur rouge */
            color: #fff; /* Couleur du texte en blanc */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .btn-deconnexion:hover {
            background-color: #FF3333; /* Couleur rouge légèrement plus foncée au survol */
        }
        
        </style>';
        echo '<!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Profil Utilisateur</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
            <div class="background">
              <form method="post">
                <div class="profile">
                    <img src="bla.jpg" alt="">
                    <h1>Hello Nous Somme Ravis De Vous Revoir</h1>
                    <h1>Nom: ' . $_SESSION["nom"] . '</h1>
                    <h1>prenom: ' . $_SESSION["prenom"] . '</h1>
                    
                </div>
                <button class="btn-deconnexion" name="leye">Déconnexion</button>
                </form>
            </div>
        </body>
        </html>
        ';
    } else {
        echo "Bjr Mr Leye2";
    }
}
