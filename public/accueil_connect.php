


<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title style="color:red;">Koul's Brunch</title>
</head>

<body>

    <header>
    <nav>
        <div class="logo">Koul's Brunch</div>
        <ul class="nav-links">
            <li><a href="index.php">Accueil</a></li>
            <li class="sub-menu"><a href="menu.php">Menu</a>
                <ul class="sub-menu-items">
                    <li><a href="#">Entrée</a></li>
                    <li><a href="#">Plat</a></li>
                    <li><a href="#">Dessert</a></li>
                </ul>
            </li>
            <li><a href="reservation.php">Réserver</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Connecté</a></li>   
            
        </ul>
    </nav>
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
                    <img src="images1/IMG_5288.JPG" alt="Photo_cafe" width="400">
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
        <div class="row">
            <div class="container-fluid">
                <div class="col-12 col-md-4">
                    <h2 id="sirop">Sirops</h2>
                    <ul class="sirop">
                        <li id="noisette">Noisette</li>
                        <li id="caramel">Caramel</li>
                        <li id="pistache">Pistache</li>
                        <li id="vanille">Vanille</li>
                    </ul>
                </div>

                <div class="col-12 col-md-4">
                    <img src="images1/IMG_8348.jpg" alt="" class="center-image">
                </div>

                <div class="col-12 col-md-4">
                    <h2 id="lait">Laits</h2>
                    <ul class="lait">
                        <li id="amande">Amande</li>
                        <li id="coco">Coco</li>
                        <li id="kamut">Kamut</li>
                        <li id="quinoa">Quinoa</li>
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

