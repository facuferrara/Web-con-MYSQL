<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

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

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <!-- <h1>book now</h1> -->
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Contactatanos</h1>

   <form action="book_form.php" method="post" class="book-form">

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
            <span>localizacion :</span>
            <input type="text" placeholder="place you want to visit" name="localizacion">
         </div>
         <div class="inputBox">
            <span>invitados :</span>
            <input type="number" placeholder="number of guests" name="invitados">
         </div>
         <div class="inputBox">
            <span>llegadas :</span>
            <input type="date" name="llegadas">
         </div>
         <div class="inputBox">
            <span>salidas :</span>
            <input type="date" name="salidas">
         </div>
      </div>

      <input type="submit" value="enviar" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->


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
         <a href="#"> <i class="fas fa-phone"></i> +54 11-3919-4237 </a>
         <a href="#"> <i class="fas fa-phone"></i> +54 11-4627-9701</a>
         <a href="#"> <i class="fas fa-envelope"></i> facuferrara@hotmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> moron, buenos aires - 1708 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
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