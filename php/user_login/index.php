<!-- llamar a la conexion de la base de datos -->
<?php 
    error_reporting(0);

    include 'includes/database.php'; 
    if(isset($_POST['entrar'])){
        $pass = 'hola123';
        $rUser = $_POST['username'];
        $rPass = $_POST['password'];
        if($user == $rUser && $pass == $rPass){
            $mensaje.= "<div class='alert alert-success' role='alert'>
                            <strong>Bien hecho</strong>Tus Datos son Correctos.
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
        }
        else{
            $mensaje.= "<div class='alert alert-dismissible fade show' role='alert'>
                            <strong>0 noo!</strong>Tus Datos son Incorrectos.
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
        }
    }
?> 

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap-4.2.1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/formulario.css">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo"> Mercosur Educativo.</a>
        <nav class="navbar">
            <a href="home.php" >Inicio</a>   
            <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoContacto')">Nosotros</a> -->
            <!--TODAVIA NO HABILITADO  <a href="./php/correo.php" >Nosotros</a> -->
            <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoOrganismo')" class="btnMenu">Organismo</a>
            <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoDocumentacion')">Documentacion</a>
            <!-- <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('infoseccionAyuda')">Ayuda</a> -->
            <a href="#" onclick="ocultarInnecesarios(), mostrarNecesario('menuProyectos')">  proyectos </a>
            <a href="./php/sector_ayuda.php" >Ayuda</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="contenedor2">
        
        <!-- <nav class="navbar navbar-expand-lg bg-light navbar-nav" style="background:#373433;display:block;"> 
        <div class="">
            <div class=""><a class="navbar-brand text-white-50 navbar-expand-md" href="https://www.argentina.gob.ar/educacion/validez-titulos"><spam style="font-family: 'Encode Sans';" class="textovalidez">Validez Nacional de Títulos y Estudios</spam></a>
            <br><a href="index.php"><spam class="textorenafeju alineartextorenafeju">Sistema Federal de Títulos - ReNaFEJu</spam></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button></div>
        </div>
        </nav> -->
        <main class="d-flex align-items-center py-3 my-2 my-md-5 py-md-0">
            <div class="container align-items-center" style="text-align: center;">
                <div class="card login-card" style="max-width: 500px;">
                    <div class="row cajalog col-md-2">
                        <div class="col-6">
                            <div class="card-body align-items-center">
                                
                                <p class="h2" style="padding:10px;">MERCOSUR</p>
                                
                                <p style="font-size:16px; padding:10px;">Iniciar Sesión</p>
                                
                                <hr >
                                <form action="" class="formulario" name="formulario_registro" method="post" id="formulario_registro">
                                    <div class="form-group">
                                        <label for="username" id="for_user" class="mb-0 mt-0">Usuario:</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Usuario" autocomplete="off" onFocus="this.placeholder=''" onBlur="this.placeholder='Usuario'">
                                        <div class="msg-error" id="error_user"></div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" id="for_pass" class="mb-0">Contraseña:</label>
                                        <input type="text" name="password" id="password" class="password form-control" placeholder="Contraseña" onFocus="this.placeholder=''" onBlur="this.placeholder='Contraseña'"/>
                                        <div class="msg-error" id="error_pass"></div>
                                    </div>
                                    <input type="submit" class="submit btn btn-block login-btn mb-2" name="entrar" id="start" value="Ingresar">
            <!-- 
            <div class="form-group mb-0">
                <div class="lost-password">
                    <a href="#" id="lost_password">¿Has olvidado tu contraseña?</a> 
                </div>
            </div>
            -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
            <div class="modal fade" id="modalRecuperarPass">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- Header Modal -->
                        <header class="modal-header justify-content-center border-0">
                            <h6 class="modal-title text-center">
                                ¿Olvidó su contraseña?
                            </h6>
                        </header>
                        <!-- Body Modal -->
                        <div class="modal-body">
                            <div id="div-exito-recuperar-pass" style="display: none;">
                                <p class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" style="border:none !important; outline: none !important;">&times;</button>
                                    ¡Contraseña enviada correctamente!<br>
                                    No olvide revisar la carpeta SPAM.
                                </p>
                            </div>
                            <div id="div-error-recuperar-pass" style="display: none;">
                                <p class="alert alert-danger text-justify alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" style="border:none !important; outline: none !important;">&times;</button>
                                    Por favor complete los datos faltantes.
                                </p>
                            </div>
                            <input type="text" class="form-control" placeholder="Ingrese Email" id="email_olvido">
                            <div id="test"></div>
                        </div>
                        <footer class="modal-footer justify-content-center border-0">
                            <button type="button" class="btn btn-info w-25" style="background: #EF7103; border-color: #EF7103;" id="recuperar_pass">
                                Recuperar
                            </button>
                            <button type="button" class="btn btn-info w-25" style="background: #EF7103; border-color: #EF7103;" id="cancelar_pass">
                                Cancelar
                            </button>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="../../js/login.js"></script>
    <script src="../../js/jquery.disableAutoFill.min.js"></script>
    <!-- <script src="../../js/validations_index.js"></script> -->
</body>
</html>