<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>inicio</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- <link rel="stylesheet" href="./boostrap_css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   
<!------------INICIO HEADER--------------------->
<section class="">
   <div class="box2">
      <input type="text" name="search" placeholder="Buscar Documento" class="src" autocomplete="off"> 
   </div>

<div class="box3">
   <select id="languages" name="languages">
      <option value="es">Spanish - español</option>
      <option value="en">English</option>
      <option value="pt">Portuguese - português</option>
   </select>

   </div>
      


</section>

<section class="header">

   <a href="../home.php" class="logo"> Mercosur Educativo.</a>
   <!-- Buscador implementado en header sin boostrap -->
   <!-- <input class="form-control me-2 p-3 " type="search" placeholder="Buscar" aria-label="search"> -->
   <nav class="navbar">
      <a href="../home.php" >Inicio</a>   
      <a href="nosotros.php">Nosotros</a>
      <a href="organismo.php">Organismo</a>
      <a href="documentacion.php">Documentacion</a>
      <a href="sector_ayuda.php">Ayuda</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-------------FIN HEADER--------------------->

<!--iNICIO SECCION NOTICIAS-->

<section class="home-packages" id="infoPaqueteCompleto">

   <h1 class="heading-title">Informacion sobre el mercosur educativo</h1>
   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/Slayer/convocatoria_hackatlon.jpg" alt="">
         </div>
         <div class="content">
            <h3>¿Qué es?</p>
            <p>El Sector Educativo del MERCOSUR es un espacio de coordinación de las políticas educativas que reúne a los países miembros y asociados del MERCOSUR, desde diciembre de 1991, cuando el Consejo del Mercado Común (CMC), a través de la Decisión 07/91, creó la Reunión de Ministros de Educación del MERCOSUR (RME).</p>
            <a href="queEs.php" class="btn" >Leer mas</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Slayer/convocatoria_contenidistas.jpg" alt="">
         </div>
         <div class="content">
            <h3>Funcionamiento</p>
            <p>Frente A La Complejidad De Las Tareas Previstas, Es Necesario Institucionalizar En Los Países Estructuras Permanentes Que Se Especialicen En La Gestión De Los Programas Del Sector Educativo Del MERCOSUR, Colaboren Con La Presidencia Pro Tempore, Se Relaciones Con Sus Contrapartes En Otros Países Y Realicen Tareas De Vinculación, Asesoramiento..</p>
            <a href="Funcionamiento.php" class="btn">Leer mas</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/Slayer/da_del_MERCOSUR_2022_web.jpg" alt="">
         </div>
         <div class="content">
            <h3>Estructura</h3>
            <p>Acceda AQUÍ al Reglamento Interno del Sector Educativo del MERCOSUR</p>
            <a href="instancias.php" class="btn">Leer Mas</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Slayer/da_del_MERCOSUR_2022_web.jpg" alt="">
         </div>
         <div class="content">
            <h3>Comisiones y Grupos de Trabajo</h3>
            <p>

            </p>
            <a href="ComisionesGruposTrabajo.php" class="btn">Leer Mas</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Slayer/da_del_MERCOSUR_2022_web.jpg" alt="">
         </div>
         <div class="content">
            <h3>Quién es quién</h3>
            <p>
            La República Bolivariana de Venezuela se encuentra suspendida de todos los derechos y obligaciones inherentes a su condición de Estado Parte del MERCOSUR, en conformidad con lo dispuesto en el segundo párrafo del artículo 5° del Protocolo de Ushuaia.
            El Estado Plurinacional de Bolivia se encuentra actualmente en proceso de adhesión.
            </p>
            <a href="quienEsQuien.php" class="btn">Leer Mas</a>
         </div>
      </div>
   </div>

   
   <!-- <div class="load-more"> <a href="./cartas_php/mas_info.php" class="btn">mas informacion</a> </div> -->

</section>

<!--FIN SECCION NOTICIAS-->


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
         <a href="../home.php"> <i class="fas fa-angle-right"></i> inicio</a>
         <a href="nosotros.php"> <i class="fas fa-angle-right"></i> acerca de nosotros</a>
         <a href="organismo.php"> <i class="fas fa-angle-right"></i> organismo</a>
         <a href="sector_ayuda.php"> <i class="fas fa-angle-right"></i> ayuda</a>
      </div>

      <div class="box">
         <h3>informate</h3>
         <a href="../home.php"> <i class="fas fa-angle-right"></i> mercosur educacion</a>
         <a href="plan_accion.php"> <i class="fas fa-angle-right"></i> plan de acción</a>
         <a href="banco_datos.php"> <i class="fas fa-angle-right"></i> banco de datos</a>
         <a href="documentacion.php"> <i class="fas fa-angle-right"></i> repositorio documental</a>
         <a href="proyectos_ejecu.php"> <i class="fas fa-angle-right"></i> proyectos en ejecucion</a>
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
   <a href="./php/login.php"><input type="button" value="Login"></a>

</section>

<!-- Footer Fin -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>scrc="js/selectLenguaje.js"</script>
<script>scrc="js/functionsButtonsDiv.js"</script>

</body>
</html>