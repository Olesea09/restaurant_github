<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="sinscrire.css">
</head>
<body>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Inscription</h2>
            <form id="signupForm" action="traitement_insc.php" method="POST">
                <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                <span id=validerprenom></span>

                <input type="text" id="nom" name="nom" placeholder="Nom" required>
                <span id=validernom></span>
                
                
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required>
                <span id="valideremail"></span>
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>
                <span id=validermdp></span>
                <input type="password" id="cmdpp" name="cmdpp" placeholder="Confirmer le mot de passe" required>
                <span id="cmdp"></span>
                <button type="submit" name="submit">S'inscrire</button>
            </form>
        </div>
    </div>

   <script src="sincrire.js"></script>
</body>
</html>
