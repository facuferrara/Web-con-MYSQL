<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mercosul</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/style.css">

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
      <a href="../home.php"  class="es">Español (ES)</a>
      <a href="home.php"  class="pt">Português (pt-BR)</a>

   </div> 

      <!-- <input class="form-control " type="search" placeholder="Buscar" aria-label="search"> -->
   <div class="contenedorInternoHead">
      <a href="https://www.mercosur.int/ " target="blank" class="paises rounded mx-auto d-block "><img
         src="../images/botones_banderas/mercosul.jpg"></a>
      <a href="https://www.argentina.gob.ar/educacion" target="blank" class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/argentina.jpg"></a>
      <a href="https://www.gov.br/mec/pt-br" target="blank" class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/brasil.jpg"></a>
      <a href="https://www.mec.gov.py/cms/" target="blank" class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/paraguai.jpg"></a>
      <a href="https://www.gub.uy/ministerio-educacion-cultura/" target="blank" class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/uruguay.jpg"></a>
      <a href="http://me.gob.ve/" target="blank" class="paises rounded mx-auto d-block"><img src="../images/botones_banderas/venezuela.jpg"
      ></a>
      <a href="https://www.minedu.gob.bo/"target="blank" class="paises rounded mx-auto d-block"><img src="../images/botones_banderas/bolivia.jpg"
      ></a>
      <a href="https://www.mineduc.cl/" target="blank" class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/chile.jpg"></a>
      <a href=" https://www.mineducacion.gov.co/portal/" target="blank" class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/colombia.jpg"></a>   
      <a href="https://educacion.gob.ec/"target="blank"  class="paises rounded mx-auto d-block"><img
         src="../images/botones_banderas/equador.jpg"></a>
      <a href="https://www.gob.pe/minedu"target="blank" class="paises rounded mx-auto d-block"><img src="../images/botones_banderas/peru.jpg"
      ></a>
   </div>

    </form>

</section>

<section class="header">

   <a href="home.php" class="logo">Mercosul Educacional.</a>
   <nav class="navbar">
      <a href="home.php" >Inicio</a>   
      <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoContacto')">Nosotros</a> -->
      <!--TODAVIA NO HABILITADO  <a href="./php/correo.php" >Nosotros</a> -->
      <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoOrganismo')" class="btnMenu">Organismo</a>
      <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')">Documentacion</a>
      <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoseccionAyuda')">Ayuda</a> -->
      <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('menuProyectos')">  Projetos em andamento </a>
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

         <div class="swiper-slide slide btn" style="background:url(images/da_del_MERCOSUR_2022_web.jpg) no-repeat" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta3')">
               <div class="content">
                  <span></span>
                  <h3></h3>
               </div>
         </div>

         <div class="swiper-slide slide btn" style="background:url(images/2022_webinario_NEIES_2.jpg) no-repeat" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta0')">
            <div class="content">
            </div>
         </div>
         <div class="swiper-slide slide btn" style="background:url(images/convocatoria_contenidistas.jpg) no-repeat; " onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta1')"> 
          
         <!-- <div class="content"> -->

               <!-- <input class="form-control " type="search" placeholder="Buscar" aria-label="search"> -->
               <!-- <span>Mercosur</span> -->
               <!-- <h3>PRESIDENCIA PRO TEMPORE PARAGUAY 2022</h3> -->
               <!-- <a href="#" class="btn" onclick="mostrarCarta1()">Descubrir más</a>
            </div> -->
         </div> 

         <div class="swiper-slide slide btn" style="background:url(images/2022_hackathon.jpg) no-repeat" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta2')">
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

   <h1 class="heading-title"> NOSSOS SERVIÇOS</h1>

   <div class="box-container">

      <div class="box" id="btnEstudiarPM" onclick="ocultarInnecesarios(), mostrarNecesario('estudiarPM')">

         <img class="icon" src="../images/estudio.png" alt="">
         
         <a href="#" class="textButona">Estude nos países do Mercosul</a>
      </div>

      <div class="box" id="btnEstudiarIniciativas" onclick="ocultarInnecesarios(), mostrarNecesario('infoIniciativas')">
         <img class="icon" src="../images/programas.png" alt="">
         <a href="#" class="textButona " >iniciativas regionais</a>
      </div>

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoBiblioteca')">
         <img class="icon" src="../images/publicaciones.png" alt="">
         <a href="#" class="textButona " >Biblioteca de recursos</a>
      </div>

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCifras')">
         <img class="icon" src="../images/estadisticas.png" alt="">
         <a href="#" class="textButona " id="btninfoCifras" >Mercosul Educacional em Números</a>

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
      <img src="../images/home-p.jpg" alt="">
   </div> 

   <div class="content" >
      <h3>Setor Educacional do MERCOSUL</h3>
      <p></p>
   <h2>O Setor Educacional do MERCOSUL é um espaço de coordenação de políticas educacionais que reúne os países membros e associados do MERCOSUL, desde dezembro de 1991, quando o Conselho do Mercado Comum (CMC), por meio da Decisão 07/91, criou a Reunião de Ministros da Educação. do MERCOSUL (RME) Ao longo do tempo, a Reunião de Ministros criou outras instâncias de apoio ao Setor.
      </h2>                                           
      <button class="btn" id="btnLeerMas" onclick="ocultarInnecesarios(), mostrarNecesario('infoPaqueteCompleto');" >Consulte Mais informação</button>
   </div>

</section>

<!----------Inico Distintas Secciones ---------------->

<!-- Trae todas las secciones requeridas escondidas.. -->

<?php include("secciones.php");?> 

<!----------Fin Distintas Secciones ---------------->

<!--FIN INFO IMPORTANTE INICIO-->

<!--iNICIO SECCION NOTICIAS-->

<section class="home-packages" id="noticias">

   <h1 class="heading-title">Últimas notícias</h1>

   
   <div class="box-container">

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta3')" style=" cursor: pointer;">
            <div class="image">
               <img src="../images/Slayer/da_del_MERCOSUR_2022_web.jpg" alt="" >
            </div>
            <div class="content">
               <h3>Dia MERCOSUL 2022: "Artesanato. Cerâmica como patrimônio cultural"</h3><br>
               <p>No marco da comemoração do Dia do MERCOSUL em 26 de março de cada ano, a Presidência Pro Tempore do bloco, a cargo do Paraguai no primeiro semestre de 2022, propõe o tema "Artesanato: a cerâmica como patrimônio cultural" e o Abordagem Pedagógica.</p> <br>
            </div>
         </div>

      <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta0')" style=" cursor: pointer;">
            <div class="image">
               <img  src="../images/Slayer/2022_webinario_NEIES_2.jpg" alt="" >
            </div>
            <div class="content">
               <h3>Webinar da Revista Integração e Conhecimento</h3><br>
               <p>A equipe editorial da Revista Integração e Conhecimento convida você para o webinar de apresentação do dossiê "Ensino superior, ciência, tecnologia e inovação em novas alternativas de desenvolvimento" correspondente ao primeiro volume do número 11 daquela publicação.</p><br><br><br>
            </div>
         </div>

         <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta1')" style=" cursor: pointer;">
            <div class="image" >
               <img src="../images/Slayer/convocatoria_hackatlon.jpg" alt="">
            </div>
            <div class="content" >
               <h3>Recrutamento de um consultor e/ou instituição de ensino para a concepção, implementação...</h3> <br>
               <p>Por ocasião do trigésimo aniversário da criação do MERCOSUL, e no âmbito da implementação do “Projeto de Capacitação em Criatividade, Inovação e Prototipagem MERCOSUL – MERCOSUL Hackathon” </p> 
            </div>
         </div>

         <div class="box" onclick="ocultarInnecesarios(), mostrarNecesario('infoCarta2')" style=" cursor: pointer;">
            <div class="image">
               <img src="../images/Slayer/convocatoria_contenidistas.jpg" alt="">
            </div>
            <div class="content">
               <h3>Chamada: Contenidistas para a elaboração de um percurso formativo</h3>
               <p>Por ocasião do 30º aniversário da criação do MERCOSUL, a Comissão da Área de Formação de Professores convoca equipes de conteúdo da Argentina, Brasil, Paraguai e Uruguai para apresentar o projeto de um Curso de Capacitação de Curta Duração sobre Cidadania Regional do MERCOSUL.</p>  
            </div>
         </div>
   </div>

   <!-- <div class="load-more"> <a href="./cartas_php/mas_info.php" class="btn">mas informacion</a> </div> -->

</section>

<!--FIN SECCION NOTICIAS-->


<!--CALENDARIO-->

<section class="reviews " id="calendario">
   
   <h1 class="heading-title" >Cronograma de Reuniões - Próximos Eventos</h1>

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
            <h3>13 de junho</h3>
            <p>CCR - Fundo Educacional CA MERCOSUL</p>
            <span>Reunião conjunta do Comitê Coordenador Regional e do Comitê Assessor do Fundo Educacional do MERCOSUL. Modo virtual.</span>
         </div>

         <div class="swiper-slide slide">
            <h3>23 de Junho</h3>
            <p>Reunião de Ministros da Educação</p>
            <span>LX Reunião de Ministros da Educação do MERCOSUL. Modalidade a definir.</span>
         </div>

         <div class="swiper-slide slide">
            <h3>22 de Junho</h3>
            <p>Comitê de Coordenação Regional</p>
            <span>Reunião da Comissão de Coordenação Regional. Modalidade a definir.</span>
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
         <h3>cardápio</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> começo</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoOrganismo')"> <i class="fas fa-angle-right"></i> organismo</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')"> <i class="fas fa-angle-right"></i> documentação</a>
         <!-- <a href="./php/sector_ayuda.php" ><i class="fas fa-angle-right"></i>Ayuda</a> -->
      </div>

      <div class="box">
         <h3>informe-se</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> mercosul Educação</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoPlanesAccion')"> <i class="fas fa-angle-right " ></i> plano de ação</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoBanco')"> <i class="fas fa-angle-right"></i> banco de dados Terminológicos</a>
         <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')"> <i class="fas fa-angle-right"></i> repositório documental</a>
         <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoProyectosEjecucion')"> <i class="fas fa-angle-right"></i> proyectos en ejecucion</a> -->
      </div>

      <div class="box">
         <h3>informacion del contacto</h3>
         <a href="https://www.whatsapp.com/?lang=es" target="blank"> <i class="fas fa-phone"></i> +598 2412 9024</a>
         <!-- <a href="https://www.altoque.com/sms/personal_claro_movistar_mensajes_gratis.php" target="blank"> <i class="fas fa-phone"></i> +54 11-</a> -->
         <a href="https://office.live.com/start/Outlook.aspx?omkt=es-CL" target="blank"> <i class="fas fa-envelope"></i> secretaria@mercosur.int </a>
         <a href="https://www.google.com/maps/place/Palacio+del+Mercosur/@-34.9141686,-56.1734689,17z/data=!3m1!4b1!4m5!3m4!1s0x959f81bb5feac641:0x77ec8c745bfc8a82!8m2!3d-34.9138417!4d-56.1712253" target="blank"> <i class="fas fa-map"></i> Dr. Luis Piera 1992 Piso 1 - Edificio MERCOSUR, Montevideo, Uruguay </a>
         <a href="./php/formSupport.php" > <i class="fas fa-angle-right"></i>Fale Conosco</a>
      </div>

      <div class="box">
         <h3>redes sociais</h3>
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

   <div class="credit"> SICMERCOSUL © Todos os direitos reservados.</div>
   

</section>

<!-- Footer Fin -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>
<script>scrc="../js/select_lenguaje.js"</script>
<script src="../js/functionsButtonsDiv.js"></script>

</div>
</body>
</html>