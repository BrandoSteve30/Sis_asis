<?php
	$server ='localhost';
	$username = 'root';
	$password = ''; #leonardeuler@2022
	$bd = 'bdcolegio';

	try {
		$conn = new PDO("mysql:host=$server;bdname=$bd;",$username, $password);
		
	} catch (PDOException $e) {
		die("Conexion Fallida: ".$e ->getMessage());
		
	}

?>