<?php 
$server="localhost";
$user="root";
$pass="";
$db="mase";

try {
	$conn = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pass);
	$conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<button class='btn btn-success btn-sm'></button>";
} catch (Exception $e) {
	echo "<button class='btn btn-danger btn-sm'></button> ".$e->getmessage();
}

?>