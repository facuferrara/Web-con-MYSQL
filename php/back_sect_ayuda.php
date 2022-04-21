<?php

   $connection = mysqli_connect('localhost','root','','formulario_db');

   if(isset($_POST['send'])){
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $direccion = $_POST['direccion'];
      $num_puerta = $_POST['num_puerta'];
      $localidad = $_POST['localidad'];
      $dias = $_POST['dias'];

      /*insertar datos en tal base de datos*/ 
      $request = " insert into datos(nombre, email, telefono, direccion, num_puerta, localidad, dias) values('$nombre','$email','$telefono','$direccion','$localidad','$num_puerta','$dias') "; 
      mysqli_query($connection, $request); 

      header('location: sector_ayuda.php'); 

   }else{
      echo 'Algo no funciona!!';
   }

?>