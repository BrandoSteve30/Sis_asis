<?php
	require 'basedatos.php';

	$message = '';

	if (!empty($_POST['user']) && !empty($_POST['password'])) {
		$sql = "INSERT INTO tbusuario (user, password) VALUES (:user, :password)";
		$est = $conn->prepare($sql);
		$est->bindParam('user', $_POST['user']);
		$password = ($_POST['password']);
		$est->bindParam(':password', $password);

		if ($est->execute()) {
		$message = 'Se a creado la cuenta';
		} else {
		$message = 'A ocurrido un error al crear la cuenta';
		}
	}
?>

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

	<?php if(! empty($message)): ?>
		<p><?= $message ?> </p>
		<?php endif; ?>

	<h1>REGISTRATE </h1>
	<span>o <a href="inisesion.php">INICIAR SESION</a></span>
		
	<form action="registrar.php" method="POST">
		<input type="text" name="email" placeholder="Ingrese usuario">
		<input type="password" name="password" placeholder="Ingrese contraseña">
		<input type="password" name="password" placeholder="confirma la contraseña">
		<input type="submit" name="ingresar">

	</form>
</body>
</html>