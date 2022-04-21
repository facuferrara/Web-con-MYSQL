<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>inicio</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<!--------INICIO HEADER--------------------->

<section class="header">

   <a href="home.php" class="logo"> Mercosur Educativo.</a>
   <!-- Buscador implementado en header sin boostrap -->
   <!-- <input class="form-control me-2 p-3 " type="search" placeholder="Buscar" aria-label="search"> -->
   <nav class="navbar">
      <a href="home.php" >Inicio</a>
      <a href="./php/nosotros.php">Nosotros</a>
      <a href="./php/organismo.php">Organismo</a>
      <a href="./php/documentacion.php">Documentacion</a>
      <a href="./php/sector_ayuda.php">Sector de ayuda</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-------------FIN HEADER--------------------->

<!-- INICIO HOME-->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/Slayer/convocatoria_contenidistas.jpg) no-repeat">
            <div class="content">

               <input class="form-control " type="search" placeholder="Buscar" aria-label="search">
               <!-- <span>Mercosur</span> -->
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

         <div class="swiper-slide slide" style="background:url(images/Slayer/da_del_MERCOSUR_2022_web.jpg) no-repeat">
            <div class="content">
               <span></span>
               <h3></h3>
               <a href="package.php" class="btn">Descubrir más</a>
            </div>
         </div>
         
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
         <!-- <a href="./php/organismo.php">Organismo</a> -->
         <a class="textButona" href="./php/estudiar_paises.php">Estudiar en los paises del mercosur</a>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <!-- <h3>Iniciativas Regionales</h3> -->
         <a class="textButona" href="./php/iniciativas.php">Iniciativas regionales</a>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <!-- <h3>Biblioteca de Recursos</h3> -->
         <a class="textButona" href="./php/biblioteca.php">Biblioteca de Recursos</a>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <!-- <h3>Mercosur Educativo en Cifras</h3> -->
         <a class="textButona" href="./php/me_cifras.php">Mercosur Educativo en Cifras</a>
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

<!--INICIO INFO IMPORTANTE HOME-->

<section class="home-about">

   <div class="image">
      <img src="images/home-p.jpg" alt="">
   </div>

   <div class="content">
      <h3>Sector Educativo del MERCOSUR</h3>
      <p></p>
      <h2>El Sector Educativo del MERCOSUR es un espacio de coordinación de las políticas educativas que reúne a los países miembros y asociados del MERCOSUR, desde diciembre de 1991, cuando el Consejo del Mercado Común (CMC), a través de la Decisión 07/91, creó la Reunión de Ministros de Educación del MERCOSUR (RME).Con el tiempo, la Reunión de Ministros creó otras instancias para apoyar el Sector.
      </h2>
      <a href="#" class="btn">Lee Más</a>
   </div>

</section>

<!--FIN INFO IMPORTANTE INICIO-->

<!--iNICIO SECCION NOTICIAS-->

<section class="home-packages">

   <h1 class="heading-title">Ultimas Noticias</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/Slayer/convocatoria_hackatlon.jpg" alt="">
         </div>
         <div class="content">
            <h3>Contratación de consultora y/o institución educativa para el diseño, implementación ..</h3>
            <p>Con motivo del trigésimo aniversario de la creación del MERCOSUR, y en el marco de la implementación del “Proyecto de capacitación en Creatividad..</p>
            <a href="./php/sector_ayuda.php" class="btn">Leer mas</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Slayer/convocatoria_contenidistas.jpg" alt="">
         </div>
         <div class="content">
            <h3>Convocatoria: Contenidistas para la elaboración de un trayecto formativos</h3>
            <p>Con motivo de los 30 años de la creación del MERCOSUR, la Comisión de Área de Formación Docente convoca a equipos de contenidistas de Argentina, Brasil, Paraguay y Uruguay..</p>
            <a href="sector_ayuda.php" class="btn">Leer mas</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/Slayer/da_del_MERCOSUR_2022_web.jpg" alt="">
         </div>
         <div class="content">
            <h3>Día del MERCOSUR 2022: "Artesanía. La cerámica como patrimonio cultural"</h3>
            <p>En el marco de la conmemoración del Día del MERCOSUR el 26 de marzo de cada año, la Presidencia Pro Tempore del bloque, a cargo de Paraguay en el primer semestre del año 2022..</p>
            <a href="./php/sector_ayuda.php" class="btn">Leer Mas</a>
         </div>
      </div>
   </div>

   <div class="load-more"> <a href="package.php" class="btn">mas informacion</a> </div>

</section>

<!--FIN SECCION NOTICIAS-->

<!-- Inicio Seccion de servicios -->

<section class="home-offer">
   <div class="content">
      <h3>Adquiera nuestros servicios</h3>
      <p></p>
      <a href="./php/sector_ayuda.php" class="btn">Contacto</a>
   </div>
</section>

<!--Fin Seccion de servicios-->

<!--CALENDARIO-->

<section class="reviews">

   <h1 class="heading-title"> Calendario de Reuniones - Próximos eventos </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

      <div class="swiper-slide slide">
            <!-- <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div> -->
            <h3>26 Abril</h3>
            <p>Gt Ciudadania Regional</p>
            <span>Mercosur Educativo.</span>
            <!-- <img src="images/pic-2.png" alt=""> -->
         </div>
         <div class="swiper-slide slide">
            <!-- <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div> -->
            <h3>25 Abril</h3>
            <p>Comite Coordinador Regional</p>
            <span>Mercosur Educativo.</span>
            <!-- <img src="images/pic-2.png" alt=""> -->
         </div>
         <div class="swiper-slide slide">
            <!-- <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div> -->
            <h3>19 Abril</h3>
            <p>CTR Protocolo - CAET - CAFD</p>
            <span>Mercosur Educativo.</span>
            <!-- <img src="images/pic-2.png" alt=""> -->
         </div>
      </div>
   </div>

</section>

<!--CALENDARIO FIN-->


<!-- Footer Inicio   -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>menu</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> inicio</a>
         <a href="./php/nosotros.php"> <i class="fas fa-angle-right"></i> acerca de nosotros</a>
         <a href="./php/organismo.php"> <i class="fas fa-angle-right"></i> organismo</a>
         <a href="./php/sector_ayuda.php"> <i class="fas fa-angle-right"></i> dudas</a>
      </div>

      <div class="box">
         <h3>informate</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> mercosur educacion</a>
         <a href="./php/plan_accion.php"> <i class="fas fa-angle-right"></i> plan de acción</a>
         <a href="./php/banco_datos.php"> <i class="fas fa-angle-right"></i> banco de datos</a>
         <a href="./php/documentacion.php"> <i class="fas fa-angle-right"></i> repositorio documental</a>
         <a href="./php/proyectos_ejecu.php"> <i class="fas fa-angle-right"></i> proyectos en ejecucion</a>
      </div>

      <div class="box">
         <h3>informacion del contacto</h3>
         <a href="https://www.whatsapp.com/?lang=es" target="blank"> <i class="fas fa-phone"></i> +54 11-3919-4237 </a>
         <a href="https://www.altoque.com/sms/personal_claro_movistar_mensajes_gratis.php" target="blank"> <i class="fas fa-phone"></i> +54 11-4627-9701</a>
         <a href="https://office.live.com/start/Outlook.aspx?omkt=es-CL" target="blank"> <i class="fas fa-envelope"></i> facuferrara@hotmail.com </a>
         <a href="https://www.google.com/maps/place/Mor%C3%B3n,+Provincia+de+Buenos+Aires/@-34.6692053,-58.6517034,13z/data=!3m1!4b1!4m5!3m4!1s0x95bcc76f57e3be01:0xa488fcdcec5b600f!8m2!3d-34.6558611!4d-58.6167212" target="blank"> <i class="fas fa-map"></i> moron, buenos aires - 1708 </a>
      </div>

      <div class="box">
         <h3>redes sociales</h3>
         <a href="https://www.facebook.com/" target="blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/?lang=es" target="blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/?hl=es" target="blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://ar.linkedin.com/" target="blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> SICMERCOSUL © Todos los derechos reservados.</div>


</section>

<!-- Footer Fin -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>