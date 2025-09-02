<?php
session_start();
if (isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $erreur = "email ou mot de passe incorrecte !";

    require_once('config.php');
    $sql = "SELECT * FROM utilisateur WHERE email='" . $email . "'";
    $req = mysqli_query($conn, $sql);
    if (mysqli_num_rows($req) == 1) {
        $row = mysqli_fetch_assoc($req);
        if (password_verify($mdp, $row['mdp'])) {
            // Enregistrer les informations de l'utilisateur dans la session
            $_SESSION['email'] = $row['email'];
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['mdp'] = $row['mdp'];

            header("Location: index.php");
            exit();
        } else { // Si le mot de passe ne correspond pas
            echo $erreur;
            header("Location: error.php?message=lesmotsdepassenecorespodnentpas"); // Redirection vers la page d'erreur
            exit();
        }
    } else { // Si aucun utilisateur n'est trouvé avec cet email
        header("Location: error.php?message=emailinexistant");
        exit();
    }
} else {
    header("Location: error.php");
    exit();
}
