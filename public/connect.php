<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="connect.css">
</head>

<body>
    <div class="container">

        <div class="form-container signup-container">
            <h1>Connexion</h1>
            <form id="signupForm" method="post">
                <input type="text" id="email" name="email" placeholder="email" required>
                <input type="password" id="newPassword" placeholder="Mot de passe" required>
                <button type="submit" name="submit">Se connecter</button>
            </form> 
        </div>
        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-right">
                    <h1>Vous êtes nouveau ici ?</h1>
                    <p>Créez un compte et commencez votre voyage avec nous</p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>

    <script src="connect.js"></script>
</body>

</html>
