<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="style.css">
    <title style="color:red;">Koul's Brunch</title>
</head>

<body>

    <header>
        <?php
        include("nav1.php") 
        ?>
    </header>

    <section class="section1">
        <h1>Bienvenue au Koul's Brunch</h1>
        <p>Découvrez une expérience culinaire exceptionnelle !</p>
    </section>

    <section class="carousel">
        <div class="carousel-container">
            <div class="slide" id="slide1"></div>
            <div class="slide" id="slide2"></div>
            <div class="slide" id="slide3"></div>
            <div class="slide" id="slide4"></div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">❮</button>
        <button class="next" onclick="changeSlide(1)">❯</button>
    </section>




    <section class="apropos">
        <div class="row">
            <div class="container-fluid">
                <div class="col-12 col-md-4">
                    <img src="image3.JPG" alt="Photo_brunch" width="400">
                </div>



                <div class="col-12 col-md-8">
                    <h2>A propos de nous</h2>

                    <p id="nous">
                        Bienvenue chez Koul's Brunch, l'épicentre du brunch raffiné et de l'ambiance chaleureuse !
                        Explorez notre univers gastronomique où la fraîcheur des ingrédients rencontre la créativité de
                        notre chef, donnant naissance à des mets aussi délicieux que surprenants. Notre menu brunch
                        soigneusement élaboré propose une variété de plats sucrés et salés, comblant tous les appétits.
                        Que vous cherchiez à partager un repas en famille, à retrouver des amis ou à créer des souvenirs
                        romantiques, notre restaurant offre l'endroit idéal. Plongez dans une expérience où chaque
                        bouchée est une célébration du goût, dans un cadre accueillant qui vous invite à vous détendre
                        et à profiter de l'instant présent. Réservez dès maintenant et laissez-vous emporter par une
                        aventure culinaire mémorable chez Koul's Brunch !
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="specialite">
    <h2>Les spécialités de Koul's</h2>
    <div class="row">
        <div class="container-fluid">
            <div class="col-12 col-md-4">
        
        <h2>Sirops</h2>
        <ul class="sirop">
            <li id="chocolat">Chocolat</li>
            <li id="noisette">Noisette</li>
            <li id="caramel">Caramel</li>
            <li id="pistache">Pistache</li>
            <li id="chataigne">Châtaigne</li>
            <li id="pumpkin_pie">Pumpkin pie</li>
            <li id="vanille">Vanille</li>
            <li id="cannelle">Cannelle</li>
            <li id="spéculoos">Spéculoos</li>
            <li id="fruits_rouges">Fruits rouges</li>
            <li id="cookie_chocolat">Cookie chocolat</li>
            <li id="praline">Praline</li>
        </ul>
            </div>
            <div class="col-12 col-md-4">
                <img src="imageCafe.JPG" alt="Photo_caffé">
            </div>
            <div class="col-12 col-md-4">
                <h2>Laits</h2>
                <ul class="lait">
                    <li id="classique">Classique</li>
                    <li id="amande">Amande</li>
                    <li id="amande_grille">Amande grillé</li>
                    <li id="coco">Coconut</li>
                    <li id="banane">Banane</li>
                    <li id="avoine">Avoine</li>
                    <li id="riz">Riz</li>
                    <li id="pois_chiches">Pois chiches</li>
                    <li id="noisette">Noisette</li>
                    <li id="chocolat_noisette">Chocolat noisette</li>
                    <li id="soja">Soja</li>
                    <li id="noix_de_cajou">Noix de cajou</li> 
                </ul>
            </div>
        </div>

    </div>


    </section>
    <!-- le pied de page  -->
    <?php
    include("footer.php");
    ?>

    <script src="script_index.js"></script>
</body>

</html>