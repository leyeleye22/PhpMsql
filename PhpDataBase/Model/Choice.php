<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    </head>

    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;

            background-size: cover;
            background-repeat: no-repeat;
            color: white;
        }

        body::before {
            content: "";
            background-color: black;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;

        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        .container_line {
            display: flex;
            text-align: center;
            margin-left: 15%;
        }

        .div1,
        .div2 {
            background-color: gray;
            height: 1px;
            width: 35%;
        }

        .ou {
            margin-top: -11px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 93%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            width: 425px;
        }



        input[type="password"] {
            font-size: 20px;
            font-family: "Lucida Console", Monaco, monospace;

        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .signup-link {
            text-align: center;
            width: 375px;


        }

        .signup-link a {
            color: white;


        }

        .facebook-button {
            background-color: #1877F2;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            position: relative;
            width: 357px;
            text-align: center;
        }

        .facebook-button:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;

            width: 100%;
            height: 1px;

            background-color: #000;

            display: block;
        }

        .facebook-button:hover:after {
            background-color: #000;

        }

        .login-button {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 60%;

        }

        .login-button i {
            margin-left: 5px;

        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Connexion</h2>
        <h3> Votre chauffeur en un clic!</h3>
        <form action="../Controller/ChoiceController.php" method="post">
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
        <div class="signup-link">
            <p>Vous n'avez pas de compte ? <a href="Inscription.php">S'inscrire</a></p>
        </div>
    </div>
</body>

</html>