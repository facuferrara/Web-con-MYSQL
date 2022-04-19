<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>inicio</title>
   
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!----------------HEADER--------------------->

<section class="header">

   <a href="home.php" class="logo">Mercosur Educativo.</a>

   <nav class="navbar">
      <a href="home.php">Inicio</a>
      <a href="about.php">Nosotros</a>
      <a href="package.php">Organismo</a>
      <a href="about.php">Contacto</a>
      <a href="book.php">Sector de ayuda</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-------------FIN HEADER--------------------->


<!-- INICIO  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/Slayer/convocatoria_contenidistas.jpg) no-repeat">
            <div class="content">
               <span>Explorar</span>
               <!-- <h3>PRESIDENCIA PRO TEMPORE PARAGUAY 2022</h3> -->
               <a href="package.php" class="btn">Descubrir más</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/Slayer/convocatoria_hackatlon.jpg) no-repeat">
            <div class="content">
               <!-- <span>explore, discover, travel</span> -->
               <!-- <h3>Descubre los nuevos lugares</h3> -->
               <a href="package.php" class="btn">Descubrir más</a>
            </div>
         </div>

         <!-- <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Explorar, Descubrir, Viajar</span>
               <h3>Haz que tu recorrido valga la pena</h3>
               <a href="package.php" class="btn">Descubrir más</a>
            </div>
         </div> -->
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- SECCION DE INICIO-->

<!-- SECCION DE SERVICIOS-->

<section class="services">

   <h1 class="heading-title"> Nuestros servicios</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Estudiar en los paises del mercosur</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Iniciativas Regionales</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Biblioteca de Recursos</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Mercosur Educativo en Cifras</h3>
      </div>

      <!-- <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Señales</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Campamento</h3>
      </div> -->

   </div>

</section>

<!-- FIN DE SECCION DE SERVICIOS -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>Sobre Nosotros</h3>
      <p></p>
      <a href="about.php" class="btn">Lee Más</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title">Nuestros Paquetes</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>La realeza</h3>
            <p></p>
            <a href="book.php" class="btn">Leer mas</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Lugares pocos vistos</h3>
            <p></p>
            <a href="book.php" class="btn">Leer mas</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mares</h3>
            <p></p>
            <a href="book.php" class="btn">Leer Mas</a>
         </div>
      </div>
   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Adquiera nuestros servicios</h3>
      <p></p>
      <a href="book.php" class="btn">Leer mas</a>
   </div>
</section>

<!-- home offer section ends -->


<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> inicio</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> acerca de nosotros</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> paquetes</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> libro</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> consultas</a>
         <a href="#"> <i class="fas fa-angle-right"></i> sobre nosotros</a>
         <a href="#"> <i class="fas fa-angle-right"></i> politica y privacidad</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terminos de uso</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="https://www.whatsapp.com/?lang=es"> <i class="fas fa-phone"></i> +54 11-3919-4237 </a>
         <a href="https://www.altoque.com/sms/personal_claro_movistar_mensajes_gratis.php"> <i class="fas fa-phone"></i> +54 11-4627-9701</a>
         <a href="https://office.live.com/start/Outlook.aspx?omkt=es-CL"> <i class="fas fa-envelope"></i> facuferrara@hotmail.com </a>
         <a href="https://www.google.com/maps/place/Mor%C3%B3n,+Provincia+de+Buenos+Aires/@-34.6692053,-58.6517034,13z/data=!3m1!4b1!4m5!3m4!1s0x95bcc76f57e3be01:0xa488fcdcec5b600f!8m2!3d-34.6558611!4d-58.6167212"> <i class="fas fa-map"></i> moron, buenos aires - 1708 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/?lang=es"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/?hl=es"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://ar.linkedin.com/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> creado por <span>Facundo Ferrara</span> | todos los derechos reservados. </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>