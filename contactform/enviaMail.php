<?php 

$para = "info@bloquetecnico.com.ar";
$asunto = "Consulta Desde Bloque Tecnico";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$nombre = $_POST['name'] ;
$email = $_POST['email'] ;
$telefono = $_POST['phone'] ;
$mensaje = $_POST['message'] ;

$correo = '
			<html>
			<head>
				<title></title>
			<body>
				<h2>Has recibido un mensaje através del formulario de contacto  de la pagina Bloque Tecnico</h2>
				<p>'.$nombre.' te envió el siguiente mensaje:</p>
				<p>'.$mensaje.' <br /><br />Podés ponerte en contacto por esta dirección de email: '.$email.'<br/><br/> O este número de telefono: ' .$telefono. '
				</p>
			</body>
			<html>';

mail($para,$asunto,$correo,$headers);
/************************Envio mail de confirmacion********************************************/
$paraConfirmacion = $_POST['email'];
$asuntoConfirmacion = "confirmación de consulta";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$confirmacion = "
			<html>
			<head>
				<title></title>
			<body>
				<h3>¡Gracias por contactarte con Bloque Tecnico!</h3>
				<p>En breve nos pondremos en contacto con vos.</p>
				<img src='http://www.bloquetecnico.com.ar/img/logo_bloque-01.png' alt='logo bloque tecnico' height='200px' >
				</p>
			</body>
			<html>";
mail($paraConfirmacion,$asuntoConfirmacion,$confirmacion,$headers);