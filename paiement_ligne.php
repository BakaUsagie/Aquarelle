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
            <a href="index.html"><img  src="images/logo1.jpg" alt="Logo Aquarelle"></a>
        </header>

        <?php include("php/Menu.html"); ?>

        <p class="prez">Paiement en ligne</p>

        <div class="contact">
            
                <p>Payer en ligne</p>
                <br />
                <img  src="images/carte.jpg" alt="moyens de paiement">
                <br />
                <p>Nom sur la carte</p> 
                    <br><input type="text"/><br />
                <p>Numéro sur la carte</p> 
                    <br><input type="text"/><br />
                <p>Date d'expiration</p> 
                    <br> <input type="text"/><br />
                <p>Cryptogramme visuel</p> 
                    <br> <input type="password"/><br />
            <br><br/>
            <input type="submit" value="Payer" class="form-submit-button"/>
        </form>
            
         
        <div class="separateur"></div>
        <footer>
            <div class="reseaux">
                <img src="images/facebook.png" alt="Facebook">
                <img src="images/instagram.png" alt="Instagram">
            </div>
            <div class="adresse">
            <p> Aquarelle</p>
                <p>15 Av. des Gayeulles</p>
                <p>35700 RENNES</p>
                <p>Tél. : 02.99.24.24.24</p>
                <p>Mail : contact@aquarelle.bzh</p>
            </div>

            <div class="carteFooter">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2663.9821020590325!2d-1.6876309845551478!3d48.110580979221254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede2d8757945d%3A0x65ab2cd78e788095!2s12%20Place%20Mar%C3%A9chal%20Foch%2C%2035000%20Rennes!5e0!3m2!1sfr!2sfr!4v1616788465541!5m2!1sfr!2sfr" 
                title="Carte" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>


</html>