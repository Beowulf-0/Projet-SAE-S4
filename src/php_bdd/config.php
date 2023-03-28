<?php
/*
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME', 'sondes');
 
// Connexion à la base de données MySQL 
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($mysqli === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
*/

	$hostname = "localhost";	//ou localhost
	$base= "sondage";
	$loginBD= "root";	//ou "root"
	$passBD="";
	//$pdo = null;

try {

	$pdo = new PDO ("mysql:server=$hostname; dbname=$base", "$loginBD", "$passBD", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//die('OK connexion');
}

catch (PDOException $e) {
	die  ("Echec de connexion : " . utf8_encode($e->getMessage()) . "\n");
}



?>


