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
    <nav>
    <h1><a href="index.php"><img src="logo.png"></a></h1>
        <div class="onglet"> 
        <a href="booster.php">Produit</a>
        <a href="Peluche.php">Compte</a>
        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
        </div>
    </nav>
    <form action="peluche2.php" method="post">
        <input type="submit" value="Nos peluche">
    </form>
    <form action="booster2.php" method="post">
        <input type="submit" value="Nos booster">
    </form>

    <br>


</body>
</html>