<?php 
require_once "db_connect.php";

// Vérification de la validité des informations

// Hachage du mot de passe
$passwordHash = password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO Utilisateurs(nom, prenom, mdp, email) VALUES (:nom, :prenom, :mdp, :email)');
$req->execute([
    ':nom' => $_POST['nom'],
    ':prenom' => $_POST['prenom'],
    ':mdp' => $passwordHash,
    ':email' => $_POST['email']
]);

// Login automatique
$s = 'SELECT prenom, mdp FROM Utilisateurs WHERE email=\''.$_POST['email'].'\'';
$rek = $bdd->query($s);
$resultat = $rek->fetch();

session_start();
$_SESSION['prenom'] = $resultat['prenom'];
header('Location: membre.php');
?>
