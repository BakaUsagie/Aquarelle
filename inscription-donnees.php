<?php 
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_html;charset=utf8', 'root', '');
}

catch(Exception $e) {
    die('erreur :'.$e->getMessage());
}
// Vérification de la validité des informations

// Hachage du mot de passe

// Insertion
$req = $bdd->prepare('INSERT INTO membre(nom, prenom, motDePasse, email, adresse, telephone, dateDeNaissance) VALUES(?, ?, ?,  ?,  ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['motDePasse'], $_POST['email'], $_POST['telephone'], $_POST['adresse'], $_POST['dateDeNaissance']));
$s = 'SELECT prenom, motDePasse FROM membre WHERE email="'.$_POST['email'].'"';
$rek = $bdd->query($s);
$resultat = $rek->fetch();


$_SESSION['prenom'] = $resultat['prenom'];
header('Location: membre.php');
?>
