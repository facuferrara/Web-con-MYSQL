<?PHP
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ('../phpmailer/src/Exception.php');
require ('../phpmailer/src/PHPMailer.php');
require ('../phpmailer/src/SMTP.php');

function enviarMail($emailDestino, $titulo, $mensaje) {
//    $smtpHost = "mail.educacion.gob.ar";  // Dominio alternativo brindado en el email de alta 
    $smtpHost = "smtp.office365.com";  // Dominio alternativo brindado en el email de alta 
	$smtpUsuario = "sistema.validez@educacion.gob.ar";  // Mi cuenta de correo
	$smtpClave = "j6*9Q7KAs8k!";  // Mi contraseÃ±a
	#$smtpClave = "C1G:L%F(+yth";  // Mi contraseÃ±a
//    $smtpUsuario = "tram_sec_ext@educacion.gob.ar";  // Mi cuenta de correo
//    $smtpClave = "Finicio7";  // Mi contraseña
//    $smtpUsuario = "creditofiscal@educacion.gob.ar";  // Mi cuenta de correo
//    $smtpClave = "*cfApp01!";  // Mi contraseña

    $mail = new PHPMailer();
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = $smtpHost; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 587; 	// 80;  // TLS only
    #$mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->SMTPAutoTLS = true;
	$mail->IsHTML(true); 
	$mail->CharSet = "utf-8";
    $mail->Username = $smtpUsuario;
    $mail->Password = $smtpClave;
    $mail->setFrom($smtpUsuario, "MINISTERIO DE EDUCACION");
    $mail->addAddress($emailDestino, "");
//	$mail->addAddress("reess@educacion.gob.ar", "");
//	$mail->addAddress("Ana.Bellomo@educacion.gob.ar", "");  

	//Attachments
    //$mail->addAttachment('docs/ddjj.docx');         //Add attachments

    $mail->Subject = $titulo;
    $mail->msgHTML($mensaje); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); 
    $mail->AltBody = $mensaje;
    // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	$estadoEnvio = $mail->Send(); 
	
	$intentos=1; 
   	while((!$estadoEnvio)&&($intentos<3)&&($mail->ErrorInfo!="SMTP Error: Data not accepted")){
	   sleep(5);
     	   //echo $mail->ErrorInfo;
     	   $estadoEnvio = $mail->Send();
     	   $intentos=$intentos+1;				
   	}
	
	if(!$estadoEnvio) {
		
		//echo '<br>El mensaje no pudo ser enviado. <br>';
		//echo 'Error de PHPMailer: ' . $mail->ErrorInfo;
		return false;
	}
	else {
		//echo '<br>El mensaje fue enviado con éxito.<br>';
		return true;
	}
}
?>