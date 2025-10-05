<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu</title>
    <link rel="stylesheet" href="fichier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
</head>
    <body>
    <main>
    <div class="skills-section active" id="inscrire">
<div>
    <div id="actualiser">
            <form action="" method="POST" class="contact2"><br>
            <img class="logo2" src="http://localhost/portfolio\logoAvicenne.png">
<?php
session_start();

if (!isset($_SESSION['nom'])) {
    header("Location: inscription.php");
    exit();
}
$nom = htmlspecialchars($_SESSION['nom']);
?><h1 class='profil2'>Bienvenue, <?= $nom ?> !</h1><br>
 <br><br> <br><p class="profil3"> Merci de rejoindre la communauté Avicenne ! Connectez-vous dès maintenant pour postuler et faire partie de notre grande famille.</p><BR>
            <br><br>
             <a href="http://localhost/cours/inscription.php" class="inscriree21"> Se connecter</a>
            </form>
    </div>
    </div>
</div>
</div>
</main>
</body>
</html>