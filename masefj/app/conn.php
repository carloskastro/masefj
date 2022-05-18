<?php 
$server="localhost";
$user="root";
$pass="";
$db="mase";

try {
	$conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pass);
	$conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Conexión OK";
} catch (Exception $e) {
	echo "Conexión Falló".$e->getmessage();
}

?>