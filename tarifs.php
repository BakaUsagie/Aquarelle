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

    <body>
        <header>
            <a href="index.php"><img src="images/logo1.jpg" alt="Logo Aquarelle"></a>
        </header>
        
        <?php include("php/Menu.html"); ?>

        <aside><a href="connexion.php" id="page_connex"><img src="images/membre.png" alt="Page_connexion"></a></aside>
        <br />
            <img  src="images/prix.jpg" alt="Tarifs">
        <br />
        <style>
        body {
            background-image:url("images/piscine.jpg");
            background-size: cover;
        }
        form {
            text-align: center;
        }
    </style>
   <p class="prezz">Les tarifs pour l'année 2022 :</p>

        <h1>Abonnements</h1>
        <table border="1px">
            <tr>
                <td>
                    Abonnement Solo :
                    (10 entrées valables 12 mois)
                </td>
                <td class="prix">
                    50€
                </td>
            </tr>
            <tr>
                <td>
                    Abonnement Duo :
                    (10 entrées pour 2 valables 12 mois)
                    Entrée par 2 uniquement
                </td>

                <td class="prix">
                    80€
                </td>
            </tr>
            </table>

            <div class="separateur"></div>
            <h1>Séances individuelles</h1>

            <table border ="1px">
            <tr>
                <td>
                    Une entrée simple :
                </td>
                <td class="prix">
                    6€
                </td>
            </tr>
            <tr>
                <td>
                    Une séance d'apprentissage de la nage :
                </td>
                <td class="prix">
                    16€
                </td>
            </tr>
            <tr>
                <td>
                Carte de 5 séances :
                </td>
                <td class="prix">
                    70€
                </td>
            </tr>
            <tr>
                <td>
                    Carte de 10 séances : 
                </td>
                <td class="prix">
                    130€
                </td>
            </tr>
        </table>
    <br />
        <div class="presentation2">
            <p>Pour réserver un créneau d'apprentissage de la nage, payer un abonnement, une entrée simple, ou une carte de séances d'apprentissage de la nage</p>             
             <p>merci de vous connecter ou vous inscrire</p>   
        </div>

    <br />
    <nav>
    <ul>
       <a class="menu" href="connexion.php"><li>Se connecter</li></a> 
       <a class="menu" href="inscription.php"> <li>S'inscrire</li></a>
    </ul>
    </nav>

        <div class="separateur"></div>
        


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

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>


</html>