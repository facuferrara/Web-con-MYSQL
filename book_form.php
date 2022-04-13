<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $direccion = $_POST['direccion'];
      $localizacion = $_POST['localizacion'];
      $invitados = $_POST['invitados'];
      $llegadas = $_POST['llegadas'];
      $salidas = $_POST['salidas'];

      $request = " insert into book_form(nombre, email, telefono, direccion, localizacion, invitados, llegadas, salidas) values('$nombre','$email','$telefono','$direccion','$localizacion','$invitados','$llegadas','$salidas') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>