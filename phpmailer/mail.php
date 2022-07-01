<?PHP
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ('../../phpmailer/src/Exception.php');
require ('../../phpmailer/src/PHPMailer.php');
require ('../../phpmailer/src/SMTP.php');
class SmtpClient{
	public $Host;
	public $Port;
	
	public $Usuario;
	public $Clave;
	public $Alias;
	
	public $mailDestinatario;
}

function enviarMail($emailSettings, $titulo, $mensaje) {

    $mail = new PHPMailer();
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = $emailSettings->Host; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = $emailSettings->Port; // 80;  // TLS only

    $mail->SMTPAuth = true;
    $mail->SMTPAutoTLS = true;
	$mail->IsHTML(true); 
	$mail->CharSet = "utf-8";
    $mail->Username = $emailSettings->Usuario;
    $mail->Password = $emailSettings->Clave;
    $mail->setFrom( $emailSettings->Usuario, $emailSettings->Alias);
    $mail->addAddress($emailSettings->mailDestinatario, "");

	//Attachments
    //$mail->addAttachment('docs/ddjj.docx');         //Add attachments
    // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

    $mail->Subject = $titulo;
    $mail->msgHTML($mensaje); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); 
    $mail->AltBody = $mensaje;
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