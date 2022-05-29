<?php 
try {
	$bdd = new PDO("mysql:host=localhost;dbname=aquarelle;charset=utf8", "Toto", "1234");
}

catch(Exception $e) {
	die('erreur :'.$e->getMessage());
}
?>
