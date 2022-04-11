<?php 
require_once "db_connect.php";

//  Récupération de l'utilisateur et de son mot de passe hashé
$req = $bdd->query('SELECT prenom, mdp FROM Utilisateurs WHERE email=\''.$_POST['email'].'\'');
$resultat = $req->fetch();

// hash de mdp "test" : $2y$10$xIUQZQLn7rVjrK8yu0gKL.BjorrZ6DL0YTF0/2qeqem/FezfI8pbq
// Pour remettre un mot de passe à "test", exécuter update Utilisateurs set mdp = '$2y$10$xIUQZQLn7rVjrK8yu0gKL.BjorrZ6DL0YTF0/2qeqem/FezfI8pbq' where id = ?;
// en remplaçant ? par l'id de l'utilisateur

// validation du mot de passe hashé
if (password_verify($_POST['motDePasseSaisi'], $resultat['mdp'])) {
    session_start();
    $_SESSION['prenom'] = $resultat['prenom'];
    header('Location: membre.php');
} else {
    echo 'Mauvais identifiant ou mot de passe !';
}
?>