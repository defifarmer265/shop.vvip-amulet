<?php
$dbc = mysqli_connect("localhost","root","Rampage28092560","TDW_VVIP-Amulet-Shop")
	or die("Error:".mysqli_connect_error());
$dbc->query("set NAMES 'utf8mb4'");

try {
	$pdo = new PDO('mysql:host=localhost; dbname=TDW_VVIP-Amulet-Shop; charset=utf8', 'root', 'Rampage28092560', [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
	]);
} catch (PDOException $e) {
	die('Connection Error: '. $e->getMessage());
}

date_default_timezone_set('Asia/Bangkok');
?>
