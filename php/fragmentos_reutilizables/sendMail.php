<?php

//llamada a la carpeta phpmailer
	include("../phpmailer/mail.php");

	// include("indexCorreo.php");

	$envioEMail = false;

	//$texto_mail = "<br>Estimado/a:...<br>";
	//$email = $_POST["mail"];
	//$email=$email;

	$emailSettings = new SmtpClient();
	$emailSettings->Host = "smtp.office365.com";  // Dominio alternativo brindado en el email de alta 
	$emailSettings->Port = 587;
	$emailSettings->Usuario = "facundo.ferrara@educacion.gob.ar";  // Mi cuenta de correo
	$emailSettings->Clave = "fmF1945598Km$";  // Mi contraseña
	$emailSettings->Alias = "MINISTERIO DE EDUCACION";
	$emailSettings->mailDestinatario =  $email;
	// include("sendMail.php");
	$envioEMail=enviarMail($emailSettings, "Enviado con Exito", $texto_mail);


		//llamada a la funcion enviarMail($emailDestino, $titulo, $cuerpo);
	// $envioEMail=enviarMail($emailSettings, "Enviado con Exito", $texto_mail);

?>
