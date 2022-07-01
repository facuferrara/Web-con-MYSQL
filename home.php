<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mercosur</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="tamaño">
<!------------INICIO HEADER--------------------->
<section class="contenedorSuperior">
   <!-- <div class="box2">
      <input type="text" class="buscador" name="search" placeholder="Buscar" class="src" autocomplete="off"> 
   </div> -->


      
<form class="d-flex ">

 <div class="contenedorLen">
   <a href="home.php"  class="es">Español (ES)</a>
   <a  href="pt/home.php" class="pt">Português</a>
   <!-- onclick ="recargar() " -->

    <!-- <button value="es" class="es" onclick="cambiarIdioma()">Español</button>
    <button value="pt" class="pt" onclick="cambiarIdioma()">Portugues</button> -->
   <!-- <select id="language" name="language" class="selectIdioma" ></select> -->

   </div> 
      <!-- <input class="form-control " type="search" placeholder="Buscar" aria-label="search"> -->
   <div class="contenedorInternoHead">
      <a href="https://www.mercosur.int/ " target="blank" class="paises rounded mx-auto d-block "><img
         src="./images/botones_banderas/mercosul.jpg"></a>
      <a href="https://www.argentina.gob.ar/educacion" target="blank" class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/argentina.jpg"></a>
      <a href="https://www.gov.br/mec/pt-br" target="blank" class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/brasil.jpg"></a>
      <a href="https://www.mec.gov.py/cms/" target="blank" class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/paraguai.jpg"></a>
      <a href="https://www.gub.uy/ministerio-educacion-cultura/" target="blank" class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/uruguay.jpg"></a>
      <a href="http://me.gob.ve/" target="blank" class="paises rounded mx-auto d-block"><img src="./images/botones_banderas/venezuela.jpg"
      ></a>
      <a href="https://www.minedu.gob.bo/"target="blank" class="paises rounded mx-auto d-block"><img src="./images/botones_banderas/bolivia.jpg"
      ></a>
      <a href="https://www.mineduc.cl/" target="blank" class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/chile.jpg"></a>
      <a href=" https://www.mineducacion.gov.co/portal/" target="blank" class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/colombia.jpg"></a>   
      <a href="https://educacion.gob.ec/"target="blank"  class="paises rounded mx-auto d-block"><img
         src="./images/botones_banderas/equador.jpg"></a>
      <a href="https://www.gob.pe/minedu"target="blank" class="paises rounded mx-auto d-block"><img src="./images/botones_banderas/peru.jpg"
      ></a>
   </div>

    </form>

</section>

<section class="header">

   <a href="home.php" class="logo"> Mercosur Educativo.</a>
   <nav class="navbar">
      <a href="home.php" id="ini">Inicio</a>   
      <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoContacto')">Nosotros</a> -->
      <!--TODAVIA NO HABILITADO  <a href="./php/correo.php" >Nosotros</a> -->
      <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoOrganismo')" class="btnMenu">Organismo</a>
      <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')">Documentacion</a>
      <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoseccionAyuda')">Ayuda</a> -->
      <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('menuProyectos')">  proyectos </a>
      <!-- <a href="./php/sector_ayuda.php" >Ayuda</a> -->
      <!-- <a href="./php/formSupport.php" >Soporte</a> -->
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-------------FIN HEADER--------------------->

<!-- INICIO HOME-->

<section class="home">

   <div class="swiper home-slider" id="carrousel">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide btn" style="background:url(images/Slayer/da_del_MERCOSUR_2022_web.jpg) no-repeat" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta3')">
               <div class="content">
                  <span></span>
                  <h3></h3>
               </div>
         </div>

         <div class="swiper-slide slide btn" style="background:url(images/Slayer/2022_webinario_NEIES_2.jpg ) no-repeat" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta0')">
            <div class="content">
            </div>
         </div>
         <div class="swiper-slide slide btn" style="background:url(images/Slayer/convocatoria_contenidistas.jpg) no-repeat; " onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta1')"> 
          
         <!-- <div class="content"> -->

               <!-- <input class="form-control " type="search" placeholder="Buscar" aria-label="search"> -->
               <!-- <span>Mercosur</span> -->
               <!-- <h3>PRESIDENCIA PRO TEMPORE PARAGUAY 2022</h3> -->
               <!-- <a href="#" class="btn" onclick="mostrarCarta1()">Descubrir más</a>
            </div> -->
         </div> 

         <div class="swiper-slide slide btn" style="background:url(images/Slayer/convocatoria_hackatlon.jpg) no-repeat" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta2')">
            <div class="content">
            </div>
         </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- SECCION DE INICIO-->

<!-- SECCION DE SERVICIOS-->

<section class="services" id="servicios">

   <h1 class="heading-title"> Nuestros servicios</h1>

   <div class="box-container">

      <div class="box" id="btnEstudiarPM" onclick="ocultarInnecesarios(), mostrarNecesario('estudiarPM')">

         <img class="icon" src="images/estudio.png" alt="">
         
         <a href="#" class="textButona">Estudiar en los paises del mercosur</a>
      </div>

      <div class="box" id="btnEstudiarIniciativas" onclick="ocultarInnecesarios(), mostrarNecesario('infoIniciativas')">
         <img class="icon" src="images/programas.png" alt="">
         <a href="#" class="textButona " >Iniciativas regionales</a>
      </div>

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoBiblioteca')">
         <img class="icon" src="images/publicaciones.png" alt="">
         <a href="#" class="textButona " >Biblioteca de Recursos</a>
      </div>

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCifras')">
         <img class="icon" src="images/estadisticas.png" alt="">
         <a href="#" class="textButona " id="btninfoCifras" >Mercosur Educativo en Cifras</a>

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

<section class="home-about contenedorInfoPrincipal" id="contenedorInfoPrincipal">

   <div class="image">
      <img src="images/home-p.jpg" alt="">
   </div> 

   <div class="content" >
      <h3>Sector Educativo del MERCOSUR</h3>
      <p></p>
   <h2>El Sector Educativo del MERCOSUR es un espacio de coordinación de las políticas educativas que reúne a los países miembros y asociados del MERCOSUR, desde diciembre de 1991, cuando el Consejo del Mercado Común (CMC), a través de la Decisión 07/91, creó la Reunión de Ministros de Educación del MERCOSUR (RME).Con el tiempo, la Reunión de Ministros creó otras instancias para apoyar el Sector.
      </h2>                                           
      <button class="btn" id="btnLeerMas" onclick="ocultarInnecesarios(), mostrarNecesario('infoPaqueteCompleto');" >Lee Más</button>
   </div>

</section>

<!----------Inico Distintas Secciones ---------------->

<!-- Trae todas las secciones requeridas escondidas.. -->

<?php include("./php/secciones.php");?> 

<!----------Fin Distintas Secciones ---------------->

<!--FIN INFO IMPORTANTE INICIO-->

<!--iNICIO SECCION NOTICIAS-->

<section class="home-packages" id="noticias">

   <h1 class="heading-title">Ultimas Noticias</h1>

   
   <div class="box-container">

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta3')" style=" cursor: pointer;">
            <div class="image">
               <img src="images/Slayer/da_del_MERCOSUR_2022_web.jpg" alt="" >
            </div>
            <div class="content">
               <h3>Día del MERCOSUR 2022: "Artesanía. La cerámica como patrimonio cultural"</h3><br>
               <p>En el marco de la conmemoración del Día del MERCOSUR el 26 de marzo de cada año, la Presidencia Pro Tempore del bloque, a cargo de Paraguay en el primer semestre del año 2022 , Propone El Tema “Artesanía: La Cerámica Como Patrimonio Cultural” Y El Abordaje Pedagógico.</p> <br>
            </div>
         </div>

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta0')" style=" cursor: pointer;">
            <div class="image">
               <img  src="images/Slayer/2022_webinario_NEIES_2.jpg" alt="" >
            </div>
            <div class="content">
               <h3>Webinario de la Revista Integración y Conocimiento</h3><br>
               <p>El equipo editorial de la Revista Integración y Conocimiento invita al webinario de presentación del dossier "Educación superior, ciencia, tecnología e innovación en nuevas alternativas para el desarrollo" correspondiente al primer volumen del número 11 de esa publicación.</p><br><br><br>
            </div>
         </div>

         <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta1')" style=" cursor: pointer;">
            <div class="image" >
               <img src="images/Slayer/convocatoria_hackatlon.jpg" alt="">
            </div>
            <div class="content" >
               <h3>Contratación de consultora y/o institución educativa para el diseño, implementación ..</h3> <br>
               <p>Con motivo del trigésimo aniversario de la creación del MERCOSUR, y en el marco de la implementación del “Proyecto de capacitación en Creatividad, Innovación y Prototipado del MERCOSUR – Hackathon MERCOSUR” </p> 
            </div>
         </div>

         <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta2')" style=" cursor: pointer;">
            <div class="image">
               <img src="images/Slayer/convocatoria_contenidistas.jpg" alt="">
            </div>
            <div class="content">
               <h3>Convocatoria: Contenidistas para la elaboración de un trayecto formativos</h3>
               <p>Con motivo de los 30 años de la creación del MERCOSUR, la Comisión de Área de Formación Docente convoca a equipos de contenidistas de Argentina, Brasil, Paraguay y Uruguay A Presentar El Diseño De Un Trayecto Formativo De Corta Duración Sobre Ciudadanía Regional Del MERCOSUR..</p>  
            </div>
         </div>
   </div>

   <!-- <div class="load-more"> <a href="./cartas_php/mas_info.php" class="btn">mas informacion</a> </div> -->

</section>

<!--FIN SECCION NOTICIAS-->


<!--CALENDARIO-->

<section class="reviews " id="calendario">

   <h1 class="heading-title" > Calendario de Reuniones - Próximos eventos </h1>

   <!-- <div class="swiper reviews-slider"> -->

      <!-- <div class="swiper-wrapper"> -->

      <!-- <div class="swiper-slide slide"> -->
            <!-- <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div> -->
            <!-- <h3>26 Abril</h3>
            <p>Gt Ciudadania Regional</p>
            <span>Mercosur Educativo.</span> -->
            <!-- <img src="images/pic-2.png" alt=""> -->
         <!-- </div>
         <div class="swiper-slide slide">
            <h3>25 Abril</h3>
            <p>Comite Coordinador Regional</p>
            <span>Mercosur Educativo.</span>
         </div>
         <div class="swiper-slide slide">
            <h3>19 Abril</h3>
            <p>CTR Protocolo - CAET - CAFD</p>
            <span>Mercosur Educativo.</span>
         </div>
      </div> -->
   <!-- </div> -->
   <div class="swiper home-slider" id="carrousel">

<div class="swiper-wrapper cursor-pointer">

   <!-- <div class="swiper reviews-slider"> -->

      <!-- <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
      </div> -->

         <div class="swiper-slide slide">
            <h3>13 de Junio</h3>
            <p>CCR - CA Fondo Educativo del MERCOSUR</p>
            <span>Reunión conjunta del Comité Coordinador Regional y el Comité Asesor del Fondo Educativo del MERCOSUR. Modalidad virtual. </span>
         </div>

         <div class="swiper-slide slide">
            <h3>23 de Junio</h3>
            <p>Reunión de Ministros de Educación</p>
            <span>LX Reunión de Ministros de Educación del MERCOSUR. Modalidad a definir.</span>
         </div>

         <div class="swiper-slide slide">
            <h3>22 de Junio</h3>
            <p>Comité Coordinador Regional</p>
            <span>Reunión del Comité Coordinador Regional. Modalidad a definir.</span>
         </div>


      </div> 

    <!-- </div> -->

   
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<!-- Back to top button -->
<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

</div>
   
</section>

<!--CALENDARIO FIN-->


<!-- Footer Inicio   -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>menu</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> inicio</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoOrganismo')"> <i class="fas fa-angle-right"></i> organismo</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')"> <i class="fas fa-angle-right"></i> documentacion</a>
         <!-- <a href="./php/sector_ayuda.php" ><i class="fas fa-angle-right"></i>Ayuda</a> -->
      </div>

      <div class="box">
         <h3>informate</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> mercosur educacion</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoPlanesAccion')"> <i class="fas fa-angle-right " ></i> plan de acción</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoBanco')"> <i class="fas fa-angle-right"></i> banco de datos</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')"> <i class="fas fa-angle-right"></i> repositorio documental</a>
         <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoProyectosEjecucion')"> <i class="fas fa-angle-right"></i> proyectos en ejecucion</a> -->
      </div>

      <div class="box">
         <h3>informacion del contacto</h3>
         <a href="https://www.whatsapp.com/?lang=es" target="blank"> <i class="fas fa-phone"></i> +598 2412 9024</a>
         <!-- <a href="https://www.altoque.com/sms/personal_claro_movistar_mensajes_gratis.php" target="blank"> <i class="fas fa-phone"></i> +54 11-</a> -->
         <a href="https://office.live.com/start/Outlook.aspx?omkt=es-CL" target="blank"> <i class="fas fa-envelope"></i> secretaria@mercosur.int </a>
         <a href="https://www.google.com/maps/place/Palacio+del+Mercosur/@-34.9141686,-56.1734689,17z/data=!3m1!4b1!4m5!3m4!1s0x959f81bb5feac641:0x77ec8c745bfc8a82!8m2!3d-34.9138417!4d-56.1712253" target="blank"> <i class="fas fa-map"></i> Dr. Luis Piera 1992 Piso 1 - Edificio MERCOSUR, Montevideo, Uruguay </a>
         <a href="./php/formSupport.php" > <i class="fas fa-angle-right"></i>Soporte</a>
      </div>

      <div class="box">
         <h3>redes sociales</h3>
         <a href="https://es-la.facebook.com/mercosur1991oficial" target="blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/mercosur?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/mercosurint/?hl=es" target="blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/company/mercosur" target="blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

      <!-- <div class="box">
         <h3>Login</h3>
         <a href="./php/user_login/index.php" target="blank" value="Login" class="buttonLogin"><i class="fas fa-angle-right"></i> logueate </a>
      </div> -->
   </div>

   <div class="credit"> SICMERCOSUL © Todos los derechos reservados.</div>
   

</section>

<!-- Footer Fin -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>scrc="js/select_lenguaje.js"</script>
<script src="js/functionsButtonsDiv.js"> </script>

</div>
</body>
</html>