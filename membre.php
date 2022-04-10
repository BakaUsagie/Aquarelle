<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Le Citron Rose</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Bebas+Neue&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="images/logo2.png" />     
    </head>

<body>
    <div>
        <img class="connexion" src="images/logo2.png" alt="Logo Le Citron Rose">
    </div>

    <?php 
        if (isset($_SESSION['prenom']))
            {
                echo ('<p class="membre">Bienvenue au Citron Rose '. $_SESSION['prenom'].'</p>');
            }
    ?>

</body>

</html>