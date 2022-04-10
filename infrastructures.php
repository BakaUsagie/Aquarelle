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

        <p class="presentation">Venez pousser les portes de la salle du Citron Rose !</p>

        <section class="content">
              <div class="card">
                <div class="card__side card__side--front card__side--front-1">
                  <div class="card__description">
                   <p class="machines">Notre espace machines</p>
                  </div>
                </div>
                <div class="card__side card__side--back card__side--back-1">
                  <div class="arriere_carte">
                      <p>Nous vous proposons un espace avec de nombreuses machines adaptées pour le travail du corps dans son intégralité, ainsi qu'une grande salle allouée aux cours collectifs.</p>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card__side card__side--front card__side--front-2">
                  <div class="card__description">
                    <p class="casiers">Un espace de rangement sécurisé</p>
                  </div>
                </div>
                <div class="card__side card__side--back card__side--back-2">
                  <div class="arriere_carte">
                      <p>Nous avons mis en place dans nos locaux des casiers sécurisés par des clés personnelles, utilisables par nos adhérents. Ils seront idéaux pour stocker vos affaires le temps d'une séance !</p>                    
                    </div>
                </div>
              </div>
        </section>
        <section class="content">
              <div class="card">
                <div class="card__side card__side--front card__side--front-3">
                  <div class="card__description">
                    <p class="vestiaires ">Un espace vestiaires avec <br> cabines privatives</p>
                  </div>
                </div>
                <div class="card__side card__side--back card__side--back-3">
                  <div class="arriere_carte">
                      <p>Découvrez nos cabines privatives, comprenant chacune une serrure pour une intimité garantie. A côté de celles-ci se trouvent lavabo, douches et sèche-cheveux pour une fin de séance en toute sérénité.</p>                   
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card__side card__side--front card__side--front-3">
                  <div class="card__description">
                    <p class="detente">Notre espace détente</p>
                  </div>
                </div>
                <div class="card__side card__side--back card__side--back-3">
                  <div class="arriere_carte">
                      <p>Pour une pause, pour un thé ou pour reposer vos jambes en pleiun travail, n'hésitez pas à passer dans la salle de pause que nous vous proposons. 
                        Vous pourrez y trouver machine à café, produits de nutrition sportive, boissons fraîches ainsi que de quoi vous asseoir.
                      </p>                   
                  </div>
                </div>
              </div>
          </section>

        
            <h2>Et n'oubliez pas de saluer Marie à l'accueil de notre salle à l'entrée du bâtiment !</h2>
            <div class="separateur"></div>
            <img class="image_accueil" src="images/accueil_client.jpg" alt="Accueil de la salle de sport">
        </div>

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