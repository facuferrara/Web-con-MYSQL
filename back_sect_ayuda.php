<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $direccion = $_POST['direccion'];
      $localidad = $_POST['localidad'];
      $num_puerta = $_POST['num_puerta'];
      $dias = $_POST['dias'];

      /*insertar datos en tal base de datos*/ 
      $request = " insert into book_form(nombre, email, telefono, direccion, localidad, num_puerta, dias) values('$nombre','$email','$telefono','$direccion','$localidad','$num_puerta','$dias') "; 
      mysqli_query($connection, $request); 

      header('location: ./php/sector_ayuda.php'); 

   }else{
      echo 'Algo no funciona!!';
   }

?>