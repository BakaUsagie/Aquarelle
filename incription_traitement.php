<?php 
    require_once 'db_connect.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['motDePasse']))
    {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $motDePasse = htmlspecialchars($_POST['motDePasse']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom, prenom, email, telephone, motDePasse FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Aftec@gmail.com et aftec@gmail.com soient deux compte différents
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($nom) <= 50){ // On verifie que la longueur du nom <= 50
                if(strlen($prenom) <= 50){ // On verifie que la longueur du prenom <= 50
                    if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                        if(strlen($telephone) <= 10){ // On verifie que la longueur du nom <= 10
                            if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                            
                                // On hash le mot de passe avec Bcrypt, via un coût de 12
                                $cost = ['cost' => 12];
                                $motDePasse = password_hash($motDePasse, PASSWORD_BCRYPT, $cost);
                                
                                // On insère dans la base de données
                                $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, email, telephone, motDePasse, token) VALUES(:nom,, :prenom, :telephone :email, :motDePasse, :token)');
                                $insert->execute(array(
                                    'pseudo' => $pseudo,
                                    'email' => $email,
                                    'telephone' => $telephone,
                                    'motDePasse' => $motDePasse,
                                    'token' => bin2hex(openssl_random_pseudo_bytes(64))
                                ));
                                // On redirige avec le message de succès
                                header('Location:inscription.php?reg_err=success');
                                die();
                            }else{ header('Location: inscription.php?reg_err=email'); die();}
                        }else{ header('Location: inscription.php?reg_err=telephone'); die();}
                    }else{ header('Location: inscription.php?reg_err=email_length'); die();}
                }else{ header('Location: inscription.php?reg_err=prenom'); die();}
            }else{ header('Location: inscription.php?reg_err=nom'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
