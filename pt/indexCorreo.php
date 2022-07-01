<?php
     include("../phpmailer/mail.php");
    
        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']))
        { 

            $name=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $email=$_POST['email'];
            $asunto=$_POST['asunto'];
            $mensaje=$_POST['mensaje'];
            $texto_mail = "<br>
            <br>    
                <br>Solicitud a nombre de:  ".$name." ".$apellido." <br>
                <br>Asunto:  ".$asunto." <br>
                <br>Informacion sobre la consulta: ".$mensaje." <br>
            <br>";

            
            // include("../phpmailer/mail.php");
            // $mail = mail($email, $asunto, $mensaje, $header);
            

            //validaciones =============================

            function email_valido($email8) {
                return !!filter_var($email8, FILTER_VALIDATE_EMAIL);
            }
                

            if ( strlen($email)<4 ){
                //	echo "<div class='alert alert-danger'><strong>Error:</strong> Debe indicar el email</div>";  
                echo "Error: Debe ingresar un email válido";  
                exit;  
            }
 
            if ( email_valido($email) ) {

            } 
            else {
                echo "Error: El email ingresado es incorrecto.";  
                exit;  
            }


            //Envio de Mail ===================
            // include("../phpmailer/mail.php");
            $envioEMail = false;

            $emailSettings = new SmtpClient();
            $emailSettings->Host = "smtp.office365.com";  // Dominio alternativo brindado en el email de alta 
            $emailSettings->Port = 587;
            $emailSettings->Usuario = "facundo.ferrara@educacion.gob.ar";  // Mi cuenta de correo
            $emailSettings->Clave = "fmF1945598Km$";  // Mi contraseña
            $emailSettings->Alias = "MERCOSUR"; 
            $emailSettings->mailDestinatario =  $email;
            
            $envioEMail=enviarMail($emailSettings, "Mercosur Soporte", $texto_mail);
            echo $envioEMail;

            if ( $envioEMail ){
                echo "Mail enviado Exitosamente!".$envioEMail;
                exit;
            }
            else{
                echo "Fallo en el envío de Mail. Correo NO Enviado.".$envioEMail;
                exit;
            }
        }
        
        else {
            echo "Error: Hay campos vacíos.";
            exit;
        }
?>
