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
        <link rel="icon" type="image/png" href="images/logo1.jpg" />     
    </head>

    <body>
        <div>
            <img class="connexion" src="images/logo1.jpg" alt="Logo Aquarelle">
        </div>

        <style>
            form {
                text-align: center;
                }  
            body {
                background-image:url("images/piscine.jpg");
                background-size: cover;
               }
            p {
                text-align: center;
            }
        </style>

        <form action="connexion_donnees.php" method="post">
            
            <p> <b><label for="email">Email</label> : <br><input type="text" name="email" id="email" /><br />
                <label for="motDePasseSaisi">Mot De Passe</label> :  <br><input type="password" name="motDePasseSaisi" id="motDePasseSaisi" /><br />
                <br><br/>
            <input type="submit" class="form-submit-button" value="Envoyer" />
                <br><br/> </b></p> 
	        
        </form>

          <p>Pas encore membre ?<a href="inscription.html"> Inscription</a></p>

    </body>

</html>
