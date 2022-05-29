<?php 
try {
	$bdd = new PDO("mysql:host=localhost:8089;dbname=Aquarelle;charset=utf8", "Toto", "1234");
}

catch(Exception $e) {
	die('erreur :'.$e->getMessage());
}
?>
