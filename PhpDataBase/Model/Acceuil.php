<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page d'accueil du covoiturage</title>
</head>
<style>
    /* Styles for the page */
    body {
        margin: 0;
        padding: 0;
        color: #fff;
    }

    .background {

        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }

    main {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;

        padding: 20px;
    }

    .content {
        text-align: center;
    }

    h1 {
        font-size: 34px;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        margin-right: 10px;
        font-weight: bold;
        border-radius: 5px;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        nav ul {
            text-align: center;
        }

        nav ul li {
            display: block;
            margin-bottom: 10px;
        }
    }
</style>

<body>
    <div class="background">
        <header>

        </header>

        <main>
            <div class="content">
                <h1>Bienvenue sur notre service de covoiturage</h1>
                <p>Trouvez des co-voitureurs et partagez vos trajets en toute simplicité.</p>
                <a href="Inscription.php" class="button">S'inscrire</a>
                <a href="Choice.php" class="button">Se connecter</a>
            </div>
        </main>

        <footer>
            <p>&copy; 2023 CoVoiturage.com</p>
        </footer>
    </div>
</body>

</html>