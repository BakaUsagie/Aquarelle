<?php 
require_once "db_connect.php";

// Vérification de la validité des informations

// Hachage du mot de passe
$passwordHash = password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO Utilisateur(nom, prenom, motDePasse, email, telephone) VALUES (:nom, :prenom, :mdp, :email, :telephone)');
$req->execute([
    ':nom' => $_POST['nom'],
    ':prenom' => $_POST['prenom'],
//    ':mdp' => $passwordHash,
    ':mdp' => $_POST['motDePasse'],
    ':email' => $_POST['email'],
    ':telephone' => $_POST['telephone']
]);

// Login automatique
$s = 'SELECT prenom, motDePasse FROM Utilisateur WHERE email=\''.$_POST['email'].'\'';
$rek = $bdd->query($s);
$resultat = $rek->fetch();

session_start();
$_SESSION['prenom'] = $resultat['prenom'];
header('Location: membre.php');
?>
