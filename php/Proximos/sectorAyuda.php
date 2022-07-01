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
      <a href="#" >Ayuda</a>   
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div> 

</section>
<!-------------FIN HEADER--------------------->

<div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
   <!-- <h1>book now</h1> -->
</div>

<!--SECCION INICIO-->

<section class="booking infoseccionAyuda" id="infoseccionAyuda" >

   <h1 class="heading-title">Contactatanos</h1>

   <form action="backAyuda.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nombre :</span>
            <input type="text" placeholder="Ingrese su nombre" name="nombre" required="">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Ingrese su email" name="email" required="">
         </div>
         <div class="inputBox">
            <span>telefono :</span>
            <input type="number" placeholder="Numero de telefono" name="telefono" required="">
         </div>
         <div class="inputBox">
            <span>direccion :</span>
            <input type="text" placeholder="Direccion" name="direccion" required="">
         </div>

         <div class="inputBox">
            <span>num_puerta :</span>
            <input type="number" placeholder="numero de puerta" name="num_puerta" required="">
         </div>
         
         <div class="inputBox">
            <span>localidad :</span>
            <input type="text" placeholder="Localidad" name="localidad" required="">
         </div>
         
         <div class="inputBox">
            <span>dias:</span>
            <input type="date" name="dias" required="">
         </div>
         <!-- <div class="inputBox">
            <span>salidas :</span>
            <input type="date" name="salidas">
         </div> -->
      </div>

      <input type="submit" value="enviar" class="btn" name="send">

   </form>

</section>

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

</body>
</html>