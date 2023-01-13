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
    $requete="SELECT `id`, `nom_du_pokemon`, `taille` ,`prix` FROM `pokepeluche`";
    $Lespokemon = $connexion->query($requete);
    foreach($Lespokemon as $Unepeluche){
        echo "Peluche de ".$Unepeluche['nom_du_pokemon']." ";
        echo $Unepeluche['taille']." cm ";
        echo $Unepeluche['prix']." €"."<br>";
    }
    $connexion->close()
    ?>
    