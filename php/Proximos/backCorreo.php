<?php
// $connection = mysqli_connect('localhost','root','','formulario_db');
// $destinatario = 'facuferrara@hotmail.com';
if(!empty($_POST['nombre']) && !empty($_POST['mensaje']) && !empty($_POST['email']) && !empty($_POST['asunto'])   ){
    echo "Ha habido un error. Revisa los campos";
    die();
}

$nombre = $_POST['nombre'];
$texto_mail=$_POST['mensaje'];
$destinatario=$_POST['email'];
$asunto=$_POST['asunto'];
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Prueba Facu <facuferrara1998@hotmail.com>\r\n";

$exito = mail($destinatario, $asunto, $mensaje, $headers );

if($exito){
    echo "Mensaje enviado con éxito";
}
else{
    echo "Ha habido un error";
}




// if(isset($_POST['enviar'])) {
//         if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) && !empty($_POST['email'])   )
//             $nombre = $_POST['nombre'];
//             $asunto = $_POST['asunto'];
//             $mensaje = $_POST['mensaje'];
//             $email = $_POST['email'];

//             $header = "Enviado desde: house@example.com";
            // $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
            // $header.= "From: noreply@example.com" . "\r\n";
            // $header.= "Reply-To: noreply@example.com" . "\r\n";
            // $header.= "X-Mailer: PHP/" . phpversion();
            // $envio = @mail($correo, $asunto, $header);
            
            // mail($destinatario, $asunto, $mensajeCompleto, $header);
            // echo "<script> alert('correo enviado exitosamente') </script>";
            // echo "<script> setTimeout(\"\location.href='correo.php'\", 1000)</script>";

//             $mail = mail($email, $asunto, $mensaje, $header);

//             if($envio) {
//                 echo "<h4> ¡Correo Enviado Exitosamente! <h4>";
//             }

// }
?>