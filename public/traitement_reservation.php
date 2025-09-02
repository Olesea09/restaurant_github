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
    $nb_personne = $_POST["nb_personne"];
    $num_table = $_POST["num_table"];
    $nb_heures = $_POST["nb_heures"];

    // Vérifier si la table est déjà réservée
    $sql_check = "SELECT * FROM reservation WHERE num_table = ? AND jour = ? AND heure = ?";
    $stmt_check = mysqli_prepare($conn, $sql_check);
    mysqli_stmt_bind_param($stmt_check, "sss", $num_table, $datee, $heure);
    mysqli_stmt_execute($stmt_check);
    $result_check = mysqli_stmt_get_result($stmt_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Table déjà réservée
        $row = mysqli_fetch_assoc($result_check);
        $fin_reservation = strtotime($row['heure']) + $row['nb_heures'] * 3600; // Heure de fin de la réservation
        $temps_restant = $fin_reservation - strtotime("now"); // Temps restant jusqu'à la fin de la réservation

        // Convertir le temps restant en heures et minutes
        $heures_restantes = floor($temps_restant / 3600);
        $minutes_restantes = floor(($temps_restant % 3600) / 60);

        // Demander à l'utilisateur s'il souhaite être ajouté à la liste d'attente avec le temps restant spécifié
        echo "<script>";
        echo "if (confirm('La table est déjà réservée. Souhaitez-vous être ajouté à la liste d\'attente ? Temps restant : $heures_restantes heures et $minutes_restantes minutes')) {";
        echo "alert('Vous avez été ajouté dans la liste d\'attente.');";
        // Insérer la demande dans la liste d'attente
        $sql_insert_attente = "INSERT INTO liste_attente (nom, prenom, date_reserv, heure_reserv) VALUES (?, ?, ?, ?)";
        $stmt_insert_attente = mysqli_prepare($conn, $sql_insert_attente);
        mysqli_stmt_bind_param($stmt_insert_attente, "ssss", $nom, $prenom, $datee, $heure);

        if (mysqli_stmt_execute($stmt_insert_attente)) {
            echo "window.location.href = 'index.php';";
        } else {
            echo "alert('Une erreur s'est produite : " . mysqli_error($conn) . "');";
            echo "window.location.href = 'reservation.php';";
        }
        echo "} else {";
        echo "alert('Choisissez un autre créneau.');";
        echo "window.location.href = 'reservation.php';";
        echo "}";
        echo "</script>";

    } else {
        // Insérer la réservation dans la base de données
        $sql_insert = "INSERT INTO reservation (nom, prenom, jour, heure, nb_personne, num_table, nb_heures) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = mysqli_prepare($conn, $sql_insert);
        mysqli_stmt_bind_param($stmt_insert, "ssssssi", $nom, $prenom, $datee, $heure, $nb_personne, $num_table, $nb_heures);

        if (mysqli_stmt_execute($stmt_insert)) {
            echo "Réservation effectuée avec succès";
            
        } else {
            echo "Une erreur s'est produite : " . mysqli_error($conn);
        }

        // Fermer la requête
        mysqli_stmt_close($stmt_insert);
    }

    // Fermer la requête de vérification
    mysqli_stmt_close($stmt_check);

    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>