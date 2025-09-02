<?php
// Inclure le fichier de connexion à la base de données
include "config.php";

// Vérifier si le formulaire a été soumis
if (isset($_POST["submit"])) {
    // Récupérer les valeurs saisies par l'utilisateur
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $datee = $_POST["date"];
    $heure = $_POST["heure"];

    // Insérer la demande dans la liste d'attente
    $sql_insert_attente = "INSERT INTO liste_attente (nom, prenom, date_reserv, heure_reserv) VALUES (?, ?, ?, ?)";
    $stmt_insert_attente = mysqli_prepare($conn, $sql_insert_attente);
    mysqli_stmt_bind_param($stmt_insert_attente, "ssss", $nom, $prenom, $datee, $heure);

    if (mysqli_stmt_execute($stmt_insert_attente)) {
        echo "Vous avez été ajouté à la liste d'attente. Nous vous informerons lorsque la table sera disponible.";
    } else {
        echo "Une erreur s'est produite : " . mysqli_error($conn);
    }

    // Fermer la requête
    mysqli_stmt_close($stmt_insert_attente);

    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>
