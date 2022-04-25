<?php
require_once "auth_required.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Le Citron Rose</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Bebas+Neue&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="images/logo1.jpg" />     
    </head>

<body>
    <div>
        <img class="connexion" src="images/logo1.jpg" alt="Logo Aquarelle">
    </div>

    <?php 
        echo ('<p class="membre">Bienvenue chez Aquarelle '. $_SESSION['prenom'].'</p>');
    ?>

</body>

</html>