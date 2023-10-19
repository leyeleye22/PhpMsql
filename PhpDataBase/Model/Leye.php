<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription et Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: black !important;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        .form-group2 .half-width {
            width: 48%;
        }

        .form-group input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            width: 100%;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .facebook-button {
            text-align: center;
            margin-top: 20px;
        }

        .facebook-link {
            background-color: #1877f2;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2><b>Inscription</b></h2>
        <form action="" method="post">
            <div class="form-group1">
                <div class="half-width">
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" >
                </div>
                <div class="half-width">
                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" >
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" >
            </div>
            <div class="form-group2">
                <div class="half-width">
                    <label for="motdepasse">Mot de passe:</label>
                    <input type="password" id="motdepasse" name="motdepasse" >
                </div>
                <div class="half-width">
                    <label for="confirmermotdepasse">Confirmer le mot de passe:</label>
                    <input type="password" id="confirmermotdepasse" name="confirmermotdepasse" >
                </div>
            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone:</label>
                <div class="input-group">
                    <span class="input-group-addon">+221:</span>
                    <input type="tel" id="telephone" name="telephone" >
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="S'inscrire" name="envoyer">
            </div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $motdepasse = $_POST['motdepasse'];
            $confirmermotdepasse = $_POST['confirmermotdepasse'];
            $telephone = $_POST['telephone'];

            $erreurs = [];

            if (empty($nom)) {
                $erreurs[] = "Le champ 'Nom' est vide.";
            }

            if (empty($prenom)) {
                $erreurs[] = "Le champ 'Prénom' est vide.";
            }

            if (empty($email)) {
                $erreurs[] = "Le champ 'E-mail' est vide.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erreurs[] = "L'adresse e-mail n'est pas valide.";
            }

            if (empty($motdepasse)) {
                $erreurs[] = "Le champ 'Mot de passe' est vide.";
            }

            if (empty($confirmermotdepasse)) {
                $erreurs[] = "Le champ 'Confirmer le mot de passe' est vide.";
            }

            if (empty($telephone)) {
                $erreurs[] = "Le champ 'Numéro de téléphone' est vide.";
            }

            if (!empty($erreurs)) {
                echo '<div style="color: red;">';
                foreach ($erreurs as $er) {
                    echo $er;
                }
            }
        }
        ?>
    </div>

    <div class="container">
        <h2><b>Connexion</b></h2>
        <h3>Votre chauffeur en un clic!</h3>
        <form action="" method="post">
            <div class="form-group">
                <a href="" target="_blank" class="facebook-button">
                    <i class="fab fa-facebook"></i> Continuer Avec Facebook
                </a>
            </div>
            <div class="container_line">
                <div class="div1"></div>
                <span class="ou">ou</span>
                <div class="div2"></div>
            </div>

            <div class="form-group">
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" required>
            </div>
            <div class="form-group1">
                <button type="submit" class="login-button">
                    <span>Se connecter</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </form>

    </div>
</body>

</html>