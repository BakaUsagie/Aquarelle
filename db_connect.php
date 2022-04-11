<?php 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=u500047569_vividb;charset=utf8', 'u500047569_vivi', '5Hf!34!Ozl>o');
}

catch(Exception $e) {
	die('erreur :'.$e->getMessage());
}
?>
