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

<div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>s
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion_controller.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>
        </body>
    
    </html>