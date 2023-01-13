<?php
$User="root";
$Password="";
$BDD="pokeshop";
$nom = $_GET['name'];
$prenom = $_GET['surname'];
$age = $_GET['Age'];
$mail = $_GET['mail'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
</head>
<body>
<?php
$connexion=new mysqli("localhost",$User,$Password,$BDD);
$add="INSERT into clients (nom, prenom, age, mail) values ('$nom', '$prenom', '$age', '$mail')";
$connexion->query($add);

$requete="SELECT `nom`, `prenom`, `age`, `mail` FROM `clients`";
$LesFilms=$connexion->query($requete);
foreach($LesFilms as $UnTitre)
{echo$UnTitre['nom']."<br>";
    echo$UnTitre['prenom']."<br>";
    echo$UnTitre['age']."<br>";
    echo$UnTitre['mail']."<br>";
    echo "______"."<br>";
}
    $connexion->close();
?>    
</body>
</html>