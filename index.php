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
       <a class="menu" href="index.php"><li>Accueil</li></a> 
       <a class="menu" href="Piscine.php"> <li>Piscines</li></a>
       <a class="menu" href="tarifs.php"><li>Tarifs</li></a> 

    </ul>
</nav>

<aside><a href="connexion.php" id="espace_membres"><img src="images/membre.png" alt="Espace membres"></a></aside>
    <body>
        <header>
            <a id="logo" href="index.html"><img src="images/logo1.jpg" alt="Logo Aquarelle"></a>
        </header>
        
        <?php include("php/Menu.html"); ?>

        <p class="accroche">Aquarelle, le réseau des piscines à Rennes.</p>

        <div class="separateur"></div>

        <div class="presentation">      
            <div class="bienvenue">
                <p class="bienvenue">Bienvenue chez Aquarelle, <br> le site qui répertorie les piscines rennaises</p>
                <p class="bienvenue">Chez nous le sport ou la détente sont accessibles à tous quels que soient vos envies, 
                vos attentes, votre âge ou votre condition physique ! <br>  Convivialité et bienveillance garanties !</p> 
            </div>
        </div>

        <div class="separateur"></div>

        <div class="horaires">
            <h1>Horaires d'ouverture :</h1>
            <p>Du lundi au samedi : 7h - 23h</br>
            Dimanche : 9h - 19h</p>
        </div>


        <div class="presentation2">
            <p>Sur ce site vous trouverez les informations concernant 3 piscines de la région de Rennes.</p>

            <p>Piscine Gayeulles : Bassin de 25 mètres, fosse de plongée de 10 mètres de profondeur, espace détente, hammams, lagune pour les tout- petits et piscine à vagues.</p> 
            <br> 
            <p>Spadium Saint-Grégoire : Bassin sportif, ludique, toboggan, pataugeoire et jacuzzis satisferont le plus grand nombre.
            <p>Un espace détente Spadium Zen sera entièrement dédié au bien-être du corps : Saunas nordiques, Saunas japonnais et hammams.</p>
            <br>
            <p>Piscine de Bréquigny : Équipée de deux bassins de 50 mètres, un à l'intérieur et un bassin "nordique" à l'extérieur, de plongeoirs et d'un petit bassin intérieur</p>  
        </div>
    <nav>
    <ul>
       <a class="menu" href="tarifs.php"><li>Tarifs</li></a> 
       <a class="menu" href="Piscine.php"> <li>Piscines</li></a>
    </ul>
    </nav>

        <div class="carrousel">        
            <h1 class="carrousel">Les avis de nos clients</h1>
        </div>

        <div class="separateur"></div>

        <div class="container">
            <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
             
              <!-- Carrousel -->
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000">
                    <img src="images/avis2.png" alt="avatar">
                  <h1>Anne</h1>
                  <p>Lieu très agréable et très propre avec une équipe accueillante et à l’écoute ! 
                  </br>Rien à redire !</p>
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="images/avis1.png" alt="avatar">
                    <h1>Louis</h1>
                    <p>Top, la piscine des Gayeulles est vraiment bien située avec une bonne ambiance!
                    </br> Une équipe très gentille en plus de ça !</p>                
                </div>
                <div class="carousel-item" data-interval="4000">
                    <img src="images/avis3.png" alt="avatar">
                    <h1>Marion</h1>
                    <p>J'ai connu cette piscine par hasard et j'en suis tombé amoureuse. </br>
                        L'équipe d'animateurs est formidable, toujours à l'écoute et disponible.</p>                
                </div>
              </div>
              
              <!-- Contrôles -->
              <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
              </a>
              <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
              </a>
            </div>
          </div>

          <div class="separateur-footer"></div>

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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.7336753918403!2d-1.6529334843863346!3d48.13465917922325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede89169f282b%3A0x1c7ffa9d532fb075!2sPiscine%20des%20Gayeulles!5e0!3m2!1sfr!2sfr!4v1651062810867!5m2!1sfr!2sfr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>           </div>
        </footer>
        
        <script src="carrousel.js"></script>
        <script>cssSlidy();</script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    </body>


</html>