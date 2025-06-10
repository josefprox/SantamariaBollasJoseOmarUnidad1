<?php
require_once 'db_conexion.php';
session_start();

$mensaje = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];

    if (!empty($usuario) && !empty($clave) && !empty($nombre)) {
        $query = $cnnPDO->prepare("INSERT INTO usuarios (usuario, clave, nombre, curso) VALUES (:usuario, :clave, :nombre, :curso)");
        $query->bindParam(':usuario', $usuario);
        $query->bindParam(':clave', $clave);
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':curso', $curso);

        if ($query->execute()) {
            $mensaje = "¡Usuario registrado exitosamente!";
            header("Location: form.php");
        } else {
            $mensaje = "Error al registrar usuario.";
        }
    } else {
        $mensaje = "Todos los campos son obligatorios.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title> Cursos Data</title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--
    CSS
    ==================================================
    -->
   <!-- Bootstrap-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Animation-->
   <link rel="stylesheet" href="css/animate.css">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="css/morris.css">
   <!-- FontAwesome-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Icon font-->
   <link rel="stylesheet" href="css/icon-font.css">
   <!-- Owl Carousel-->
   <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- Colorbox-->
   <link rel="stylesheet" href="css/colorbox.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
   <!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
    <style>
      .carousel-inner h2,
      .carousel-inner h3,
      .carousel-inner p {
          color: #000 !important;
      }
  </style>
</head>

<body>

   <div class="body-inner">

      <div class="site-top-2">
         <header class="header nav-down" id="header-2">
            <div class="container">
               <div class="row">
                  <div class="logo-area clearfix">
                     <div class="logo col-lg-3 col-md-12">
                        <a href="index.html">
                           <img src="images/Cursos.png" alt="">
                        </a>
                     </div>
                     <!-- logo end-->
                     <div class="col-lg-9 col-md-12 pull-right">
                        <ul class="top-info unstyled">
                           <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">Respuesta inmediata</p>
                                 <p class="info-subtitle">(+52) 844 256 7560</p>
                              </div>
                           </li>
                           <li><span class="info-icon"><i class="icon icon-envelope"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">Contactanos</p>
                                 <p class="info-subtitle">josiman280@gmail.com</p>
                              </div>
                           </li>
                           
                        </ul>
                     </div>
                     <!-- Col End-->
                  </div>
                  <!-- Logo Area End-->
               </div>
            </div>
            <!-- Container end-->
                        <div class="site-nav-inner site-navigation navigation navdown">
               <div class="container">
                  <nav class="navbar navbar-expand-lg ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
                     <!-- End of Navbar toggler-->
                     <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                           <li class="nav-item dropdown">
                                 <a href="index.html">Inicio</a>
                           </li>
                           
                           
                           <!-- li end-->
                           <li class="nav-item dropdown">
                                 <a href="about.html">Sobre nosotros</a>
                           </li>
                           <!-- li end-->
                        
                           <li class="nav-item dropdown">
                                 <a href="service.html">Servicios</a>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                                 <a href="faq.html">Ayuda</a>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                                 <a href="index-2.html">Mapa del sitio</a>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                                 <a href="contact.html">Contáctanos</a>
                           </li>
                        </ul>
                        <!--Nav ul end-->
                     </div>
                     <a href="index.html" class="top-right-btn btn btn-primary">Regresar al inicio</a>
                  </nav>
                  <!-- Collapse end-->
                    </div>
                     
                     <!-- Top bar btn -->
                  </nav>
                    <div class="body-inner">
<body>
    <section class="quote-area solid-bg" id="quote-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="quote_form">
               <h2 class="column-title"><span>¡Bienvenido a bordo!</span>Regístrate ahora</h2>
               <div class="quote-img">
                  <img class="img-fluid" src="images/curso.webp" alt="img">
               </div>
            </div>
         </div>
         <div class="col-lg-7 qutoe-form-inner-le">
            <form class="contact-form" method="POST">
               <h2 class="column-title"><span>Crea tu cuenta en segundos</span>Formulario de Registro</h2>
               <?php if (!empty($mensaje)): ?>
               <div class="alert alert-danger"><?php echo $mensaje; ?></div>
               <?php endif; ?>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input class="form-control form-name" name="usuario" placeholder="Usuario *" type="text" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input class="form-control form-name" name="clave" placeholder="Clave *" type="password" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input class="form-control form-name" name="nombre" placeholder="Nombre completo *" type="text" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input class="form-control form-name" name="curso" placeholder="Curso preferido (opcional)" type="text">
                     </div>
                  </div>
               </div>
               <div class="text-right">
                  <button class="btn btn-primary tw-mt-30" type="submit" name="registrar">Registrarse</button>
               </div>
               <div class="mt-3">
                  <p>¿Ya tienes cuenta? <a href="form.php">Inicia sesión aquí</a></p>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
   </div>
                  </div>
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container end-->
         </div>
</body>
<!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="copyright-info"><span>Copyright © 2025 a theme by <a>Cursos Data</a></span></div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="footer-social text-right">
                        <ul>
                           <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="https://github.com"><i class="fa fa-github"></i></a></li>
                           <li><a href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- Row end-->
            </div>
            <!-- Container end-->
         </div>
         <!-- Copyright end-->
      </footer>
      <!-- Footer end-->
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->

      <!--
      Javascript Files
      ==================================================
      -->
      <!-- initialize jQuery Library-->
      <script type="text/javascript" src="js/jquery.js"></script>
       
       
      <!-- Bootstrap jQuery-->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- Owl Carousel-->
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <!-- Counter-->
      <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
      <!-- Waypoints-->
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <!-- Color box-->
      <script type="text/javascript" src="js/jquery.colorbox.js"></script>
       
        
      <!-- Template custom-->
      <script type="text/javascript" src="js/custom.js"></script>
   </div>
   <!--Body Inner end-->
</body>

</html>