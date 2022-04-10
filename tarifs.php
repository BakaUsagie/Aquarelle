<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Le Citron Rose</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Bebas+Neue&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/logo2.png" />
    
</head>

    <body>
        <header>
            <a href="index.html"><img  " src="images/logo2.png" alt="Logo du Citron Rose"></a>
        </header>
        
        <?php include("php/Menu.html"); ?>

        <aside><a href="connexion.html" id="espace_membres"><img src="images/membre.png" alt="Espace membres"></a></aside>

        <p class="prezz">Les tarifs pour l'année 2021 :</p>

        <h1>Abonnements mensuels</h1>
        <table border="1px">
            <tr>
                <td>
                    Une séance par semaine :
                </td>
                <td class="prix">
                    50€ par mois
                </td>
            </tr>
            <tr>
                <td>
                    Deux séances par semaine :
                </td>

                <td class="prix">
                    99€ par mois
                </td>
            </tr>
            <tr>
                <td>
                    Trois séances par semaine :
                </td>
                <td class="prix">
                    130€ par mois
                </td>
            </tr>
            <tr>
                <td>
                    Quatre séances par semaine 
                </td>
                <td class="prix">
                    160€ par mois
                </td>
            </tr>
            </table>

            <div class="separateur"></div>
            <h1>Séances individuelles à domicile</h1>

            <table border="1px">
            <tr>
                <td>
                    Une séance :
                </td>
                <td class="prix">
                    16€
                </td>
            </tr>
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

        <div class="separateur"></div>
        


        <footer>
            <div class="reseaux">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/instagram.png" alt="Instagram">
            </div>
            <div class="adresse">
                <p> Le Citron Rose</p>
                <p>12 rue Maréchal Foch</p>
                <p>35000 RENNES</p>
                <p>Tél. : 02.99.35.35.35</p>
                <p>Mail : contact@lecitronrose.bzh</p>
            </div>

            <div class="carteFooter">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.9821020590325!2d-1.6876309845551478!3d48.110580979221254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2d8757945d%3A0x65ab2cd78e788095!2s12%20Place%20Mar%C3%A9chal%20Foch%2C%2035000%20Rennes!5e0!3m2!1sfr!2sfr!4v1616788465541!5m2!1sfr!2sfr" title="Carte" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>


</html>