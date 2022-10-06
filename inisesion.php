<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INICIA SESION</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" href="estilos/css.css">
</head>
<body>

	<?php require 'parcial/header.php' ?>
	
	<h1>INICIAR SESION</h1>
	
	<form action="inisesion.php" method="post">
		<input type="text" name="email" placeholder="Ingrese usuario">
		<input type="password" name="password" placeholder="Ingrese contraseña">
		<input type="submit" name="ingresar">

	</form>
</body>
</html>
