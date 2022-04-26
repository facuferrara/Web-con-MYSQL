<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<!----------------HEADER--------------------->
<?php include("../fragmentos_reutilizables/header.php");?>
<!-------------FIN HEADER--------------------->


<div class="heading" style="background:url(../images/header-bg-1.png) no-repeat">
   <h1>Contacto</h1>
</div>

<!--SECCION INICIO-->


<section class="about">

   <div class="image">
      <img src="../images/contac.jpg" alt="">
   </div>

   <div class="content">
      <h3>Contacto</h3>
      <p>Ministerios Asociados.</p>
      <h1>Ministerio de Educación de Argentina Argentina</h1>
      <br><h1>Ministerio de Educación de Argentina Argentina</h1>
      <br><h1>Ministério da Educação do Brasil Brasil</h1>
      <br><h1>Ministerio de Educación de Bolivia Bolivia</h1>
      <br><h1>Ministerio de Educación de Chile Chile</h1>
      <br><h1>Ministerio de Educación de Paraguay Paraguay</h1>
      <br><h1>Ministerio de Educación y Cultura de Uruguay Uruguay</h1>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>informate</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>ahorra tiempo</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span> guia de servicios 24/7 </span>
         </div>
      </div>
   </div>

</section>

<!--SECCION INICIO FIN-->

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

<!-- FOOTER -->
<?php include("../fragmentos_reutilizables/footer.php");?>
<!--FIN FOOTER -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</body>
</html>