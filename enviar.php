<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Formulario de contacto - Mensaje enviado</title>
</head>
<body>
	<?php 

$myemail = 'marco1129miranda@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

	<center>
		<h1>CONTACTO</h1>
		<form method="post" action="enviar.php">
			<input type="text" name="nombre" placeholder="NOMBRE"> </br>
			<input type="email" name="email" placeholder="CORREO LOCAL"> </br>
			<input type="email" name="email" placeholder="CORREO"> </br>
			<input type="password" name="password" placeholder="CONTRASEÑA"> </br>
			<input type="submit" value="ENVIAR">
		</form>
	</center>

</body>
</html>