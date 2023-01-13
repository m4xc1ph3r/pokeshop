<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Pokeshop</title>
</head>
<nav>
        <h1><a href="index.php"><img src="logo.png"></a></h1>
        <div class="onglet"> 
        <a href="booster.php">Produit</a>
        <a href="Peluche.php">Compte</a>
        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
        </div>
    </nav>

<?php 
$User="root";
$Password="";
$BDD="pokeshop";

    $connexion=new mysqli("localhost",$User,$Password,$BDD);
    $requete="SELECT `id`, `nom_booster`,`prix` FROM `pokebooster`";
    $LesBooster = $connexion->query($requete);
    foreach($LesBooster as $UnBooster){
        echo "Booster ".$UnBooster['nom_booster']." ";
        echo $UnBooster['prix']." €"."<br>";
    }
    $connexion->close()
    ?>