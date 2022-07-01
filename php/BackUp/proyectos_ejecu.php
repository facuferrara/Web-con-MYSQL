<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>inicio</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   
<!----------------HEADER--------------------->
<?php include("../fragmentos_reutilizables/header.php");?>
<!-------------FIN HEADER--------------------->

<!--SECCION INICIO-->

<section class="home-about">

   <div class="image">
      <img src="../images/mercosur-orig.jpg" alt="">
   </div>

   <div class="content">
      <h3>Proyectos en ejecución</h3><br>
      <p>
            <a href="../php/iniciativas_Reg_y_proy_en_ejecucion/escuelas_interactuales.php">.Escuelas Interculturales de Frontera</a><br><br>
            <a href="../php/iniciativas_Reg_y_proy_en_ejecucion/permanencia_terminalidad.php"> .Permanencia y Terminalidad en la Educación Secundaria/Media</a><br><br>
            <a href="../php/iniciativas_Reg_y_proy_en_ejecucion/formacion_docente.php">.Formación Docente en Ciudadanía Regional </a><br><br>
            <a href="../php/iniciativas_Reg_y_proy_en_ejecucion/capacitacion.php">.Capacitación en creatividad, innovación y prototipado del MERCOSUR: Hackathon MERCOSUR</a><br><br><br>
      </p>
   </div>

</section>

<!--SECCION INICIO FIN-->

<!-- FOOTER -->
<?php include("../fragmentos_reutilizables/footer.php");?>
<!--FIN FOOTER -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>