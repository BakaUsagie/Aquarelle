<?php 
    session_start();

try {
	$bdd = new PDO('mysql:host=localhost;dbname=projet_html;charset=utf8', 'root', '');
}

catch(Exception $e) {
	die('erreur :'.$e->getMessage());
}


//  Récupération de l'utilisateur et de son pass
$s = 'SELECT prenom, motDePasse FROM membre WHERE email="'.$_POST['email'].'"';
$req = $bdd->query($s);
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base

    if ($_POST['motDePasseSaisi'] == $resultat['motDePasse']) {
        $_SESSION['email'] = $email;
        $_SESSION['prenom'] = $resultat['prenom'];
		header('Location: membre.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }


?>