<?php

   $connection = mysqli_connect('localhost','root','','formulario_db');

   if(isset($_POST['send'])){
      if(isset($_POST['nombre'],$_POST['email'],$_POST['telefono'], $_POST['direccion'], $_POST['localidad'], $_POST['num_puerta'], $_POST['dias'])!=''){
         
         $nombre = $_POST['nombre'];
         $email = $_POST['email'];
         $telefono = $_POST['telefono'];
         $direccion = $_POST['direccion'];
         $localidad = $_POST['localidad'];
         $num_puerta = $_POST['num_puerta'];
         $dias = $_POST['dias'];

         $request = " insert into datos(nombre, email, telefono, direccion, localidad,num_puerta, dias) values('$nombre','$email','$telefono','$direccion','$localidad','$num_puerta','$dias') "; 
         mysqli_query($connection, $request); 

         header('location: sector_ayuda.php'); 
     
      }
      else{
         echo "Error";
      }
      // $nombre = $_POST['nombre'];
      // $email = $_POST['email'];
      // $telefono = $_POST['telefono'];
      // $direccion = $_POST['direccion'];
      // $localidad = $_POST['localidad'];
      // $num_puerta = $_POST['num_puerta'];
      // $dias = $_POST['dias'];

      /*insertar datos en tal base de datos*/ 
      // $request = " insert into datos(nombre, email, telefono, direccion, localidad,num_puerta, dias) values('$nombre','$email','$telefono','$direccion','$localidad','$num_puerta','$dias') "; 
      // mysqli_query($connection, $request); 

      // header('location: sector_ayuda.php'); 

   }else{
      
      echo 'Algo no funciona!!';
   }

?>