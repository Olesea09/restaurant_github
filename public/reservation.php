<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="reservation.css">
    <title>Réservation</title>
</head>

<body>
    <!-- <header>
        <?php
        include("nav1.php");
        ?>
    </header> -->
    <h1>Réservation</h1>
    <form action="traitement_reservation.php" method="post" id="form">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <span id="validernom"></span>
        <br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <span id="validerprenom"></span>

        <br>

        <label for="jour">Jour :</label>
        <input type="date" id="date" name="date" min="" max="" required>
        <br>

        <label for="heure">Heure :</label>
        <input type="time" id="heure" name="heure" required>
        <br>

        <label for="table">Nombre de personnes :</label>
        <input type="number" name="nb_personne" required min="1" max="8">
        <br>

        <label for="table">Numéro de Table :</label>
        <input type="number" name="num_table" required min="115" max="126">
        <br>

        <label for="table">Temps :</label>
        <input type="number" name="nb_heures" required min="1" max="4">
        <br>

        <input type="submit" value="Réserver" name="submit">
        <input type="button" value="Annuler" onclick="window.location.href='index.php';">
    </form>


    <div id="message"></div>

    <div id="liste-attente">
        <!-- La liste d'attente sera affichée ici -->
    </div>

   


    <!-- <?php
    include("footer.php");
    ?> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="reservation.js"></script>

    
</body>

</html>