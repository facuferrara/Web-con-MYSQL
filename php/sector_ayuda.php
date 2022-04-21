<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
<!----------------HEADER--------------------->
<?php include("../fragmentos_reutilizables/header.php");?>
<!-------------FIN HEADER--------------------->

<div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
   <!-- <h1>book now</h1> -->
</div>

<!--SECCION INICIO-->

<section class="booking">

   <h1 class="heading-title">Contactatanos</h1>

   <form action="sector_ayuda" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nombre :</span>
            <input type="text" placeholder="enter your name" name="nombre">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>telefono :</span>
            <input type="number" placeholder="enter your number" name="telefono">
         </div>
         <div class="inputBox">
            <span>direccion :</span>
            <input type="text" placeholder="enter your address" name="direccion">
         </div>
         <div class="inputBox">
            <span>localidad :</span>
            <input type="text" placeholder="place you want to visit" name="localidad">
         </div>
         <div class="inputBox">
            <span>num_puerta :</span>
            <input type="number" placeholder="number of guests" name="num_puerta">
         </div>
         <div class="inputBox">
            <span>dias:</span>
            <input type="date" name="dias">
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
<?php include("../fragmentos_reutilizables/footer.php");?>
<!-------------FIN Footer--------------------->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../js/script.js"></script>

</body>
</html>