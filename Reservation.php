<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Aquarelle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Bebas+Neue&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/logo1.jpg" />
    
</head>
<nav>
    <ul>
        <a class="menu" href="index.php">
            <li>Accueil</li>
        </a>
        <a class="menu" href="Piscine.php">
            <li>Piscines</li>
        </a>
        <a class="menu" href="tarifs.php">
            <li>Tarifs</li>
        </a>

    </ul>
</nav>

    <body>
        <header>
        <a href="index.html"><img src="images/logo1.jpg" alt="Logo Aquarelle"></a>
        </header>

        <?php include("php/Menu.html"); ?>

        <aside><a href="membre.php" id="page_connex"><img src="images/membre.png" alt="Page_connexion"></a></aside>

        <style>
            body {
            background-image:url("images/piscine.jpg");
            background-size: cover;
            }
            form {
                text-align: center;
            }
        </style>

        <form action= "paiement_ligne.php" method="post">
        <br><div> <label for="Choisir" text-align : center><strong style="color:rgb(0, 0, 0)">Choisir :</strong></label>  <select id="Piscine" size="1" >
            <option value="valeur1"> Piscine de Brequigny </option>
            <option value="valeur2"> Piscine de Gayeulles </option>
            <option value="valeur3"> Piscine de Saint Gregoire </option>
            </select></div></br>

        <br><div><label for="Choisir"><strong style="color:rgb(0, 0, 0)">Choisir :</strong></label>  <select id="Prix" size="1">
            <option value="valeur1"> Ticket </option>
            <option value="valeur2"> Abonnement Solo </option>
            <option value="valeur3"> Abonnement Duo </option>
            </select></div></br>

        <br><div><label for="Choisir"><strong style="color:rgb(0, 0, 0)">Choisir :</strong></label>  <select id="Créneaux" size="1">
            <option value="valeur1"> Mardi matin 10-12h </option>
            <option value="valeur2"> Jeudi matin 10-12h </option>
            <option value="valeur3"> Dimanche matin 10-12h </option>
            </select></div></br>
            

        <br><input type="submit" value="Envoyer" class="form-submit-button"/></br>

        </form>

        <footer>
            <div class="reseaux">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/instagram.png" alt="Instagram">
            </div>
            <div class="adresse">
                <p>Aquarelle</p>
                <p>15 Av. des Gayeulles</p>
                <p>35700 RENNES</p>
                <p>Tél. : 02.99.24.24.24</p>
                <p>Mail : contact@aquarelle.bzh</p>
            </div>

            <div class="carteFooter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.7336753918403!2d-1.6529334843863346!3d48.13465917922325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede89169f282b%3A0x1c7ffa9d532fb075!2sPiscine%20des%20Gayeulles!5e0!3m2!1sfr!2sfr!4v1651062810867!5m2!1sfr!2sfr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </footer>