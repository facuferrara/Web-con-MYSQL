<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ayuda</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   

<section class="header">

   <a href="../home.php" class="logo"> Mercosur Educativo.</a>
   <nav class="navbar">
      <a href="#" >soporte</a>   
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div> 

</section>
<!-------------FIN HEADER--------------------->

<div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
   <!-- <h1>book now</h1> -->
</div>

<!--SECCION INICIO-->


<!-- Seccion formulario correo arg -->
<section class="booking infoCorreo " id="infoCorreo">
      <h1 class="heading-title">Mensajeria Global</h1>
      <!-- <form action="backCorreo.php" method="POST" action="backCorreo.php"> -->
      <form method="POST" id="form-consu">
         <div class="book-form ">
            <div class="flex">
               <div class="inputBox">
                  <span>nombre :</span>
                  <input type="text" placeholder="ingrese su nombre" name="nombre" id="nombre">
               </div>
               <div class="inputBox">
                  <span>apellido :</span>
                  <input type="text" placeholder="ingrese su apellido" name="apellido" id="apellido">
               </div>
               <div class="inputBox">
                  <span>correo Electronico:</span>
                  <input type="email" placeholder="email" name="email" id="email">
               </div>
               <div class="inputBox">
                  <span>asunto :</span>
                  <input type="text" placeholder="asunto" name="asunto" id="asunto">
               </div>
               <div class="inputBox">
                  <span class="textMsg">mensaje :</span>
                  <textarea type="text" placeholder="escriba algo..." name="mensaje" id="mensaje"></textarea>
               </div>
         </div>
            
         </form>
         <input type="submit" value="enviar" class="btn" name="enviar" id="enviar" onclick="enviarMsg()">
      </div>
      <br><br>
      <!-- <div class="content">
         <h3>Tambien podes comunicarte: <br><br></h3>
         <p class="text-center text-size:30px">
            Minsterio de Educación de Argentina:<br><br>
            Minsterio de Educación de Brasil: cgsic@mec.gov.br<br><br>
            Minsterio de Educación de Bolivia: ccamacho@minedu.gob.bo<br><br>
            Minsterio de Educación de Chile: ayudamineduc@mineduc.cl<br><br>
            Minsterio de Educación de Paraguay: marlene.mfrh@gmail.com<br><br>
            Ministerio de Educación y Cultura de Uruguay: mercosur@mec.gub.uy<br><br>
         </p>
      </div> -->
   </section>
   <!--Fin Seccion formulario correo arg -->

<!--SECCION INICIO FIN-->

<!----------------Inicio Footer--------------->
<!-- Footer Inicio   -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>informacion del contacto</h3>
         <a href="https://www.whatsapp.com/?lang=es" target="blank"> <i class="fas fa-phone"></i> +598 2412 9024</a>
         <!-- <a href="https://www.altoque.com/sms/personal_claro_movistar_mensajes_gratis.php" target="blank"> <i class="fas fa-phone"></i> +54 11-</a> -->
         <a href="https://office.live.com/start/Outlook.aspx?omkt=es-CL" target="blank"> <i class="fas fa-envelope"></i> secretaria@mercosur.int </a>
         <a href="https://www.google.com/maps/place/Palacio+del+Mercosur/@-34.9141686,-56.1734689,17z/data=!3m1!4b1!4m5!3m4!1s0x959f81bb5feac641:0x77ec8c745bfc8a82!8m2!3d-34.9138417!4d-56.1712253" target="blank"> <i class="fas fa-map"></i> Dr. Luis Piera 1992 Piso 1 - Edificio MERCOSUR, Montevideo, Uruguay </a>
      </div>

      <div class="box">
         <h3>redes sociales</h3>
         <a href="https://es-la.facebook.com/mercosur1991oficial" target="blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/mercosur?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/mercosurint/?hl=es" target="blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/company/mercosur" target="blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
   </div>

   <div class="credit"> SICMERCOSUL © Todos los derechos reservados.</div>
   

</section>

<!-- Footer Fin -->
<!-------------FIN Footer--------------------->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script src="../js/messenger_Service.js"></script>

</body>
</html>
