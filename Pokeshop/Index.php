<?php
$User="root";
$Password="";
$BDD="pokeshop";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Pokeshop</title>
</head>
<body>
    <?php 
    $connexion=new mysqli("localhost",$User,$Password,$BDD);
    $requete="SELECT `id`, ``, `duree` FROM `film`";
    ?>
    <nav>
        <h1><a href="index.php"><img src="logo.png"></a></h1>
        <div class="onglet"> 
        <a href="booster.php">Produit</a>
        <a href="Peluche.php">Compte</a>
        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
        </div>
    </nav>

    <header>
    <h1>Bienvenue au Pokeshop</h1><br>
    <h2>Vous trouverez ici des peluches Pokemon de qualitée ainsi que des booster de carte divers</h2>
    </header>

<section class="main">
    <div class="imgs">
        <div class="imge">
            <img src="https://m.media-amazon.com/images/I/81aZ0KtrfVL._AC_UL480_FMwebp_QL65_.jpg" alt="">
            <div class="img-head">
                <h4 class="titre">Peluche Pikachu</h4>
                <h4 class="prix">20€</h4>
            </div>
            <div class="descr">
                <p>Peluche du meilleur amis de Sacha</p>
            </div>
        </div>
        <div class="imge">
            <img src="https://www.play-in.com/img/product/l/pokemon_set_de_base_edition_1_booster_dracaufeu_fr.jpg" alt="">
            <div class="img-head">
                <h4 class="titre">Booster Set de Base</h4>
                <h4 class="prix">1500€</h4>
            </div>
            <div class="descr">
                <p>Booster Set de Base - Dracaufeu -</p>
            </div>
        </div>
        <div class="imge">
            <img src="https://i0.wp.com/www.peluchespascheres.com/wp-content/uploads/2020/11/Peluche-Pokemon-Ronflex.webp?fit=2000%2C2000&ssl=1" alt="">
            <div class="img-head">
                <h4 class="titre">Peluche Ronflex</h4>
                <h4 class="prix">35$</h4>
            </div>
            <div class="descr">
                <p>Peluche du pokemon le plus gourmand</p>
            </div>
        </div>
    </div>


</section>


</body>
</html>