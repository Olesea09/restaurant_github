<?php
include_once "config.php";

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hacher le mot de passe pour une meilleure sécurite

// verfiier si l'utilisateur existe deja
    $sql = "SELECT * FROM utilisateur WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert('L'utilisateeur existe deja'); </script>";
    } else {

        $requete = "INSERT INTO utilisateur (email,nom,prenom,mdp) VALUES (?,?,?,?)";

        // Préparer la requête avec les paramètres
        $stmt = mysqli_prepare($conn, $requete);
        mysqli_stmt_bind_param($stmt, "ssss", $email, $nom, $prenom, $mdp);


        // Exécuter la requête
        if (mysqli_stmt_execute($stmt)) {
            echo "<script> alert('Inscription faite avec succès'); </script>";
            header("Location: connect.php");
        } else {
            echo "Une erreur s'est produite: " . mysqli_error($conn);
        }

        // Fermer la requête
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($conn);
