
<?php 
    session_start();
    require_once 'db_connect.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:connexion.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Aquarelle</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/png" href="./images/logo1.jpg" />
</head>

<body>
    <div>
        <img class="connexion" src="./images/logo1.jpg" alt="Logo Aquarelle">
    </div>
    <style>
        body {
        background-image:url("images/piscine.jpg");
        background-size: cover;
        }
        form {
            text-align: center;
        }
    </style>

</body>

</html>