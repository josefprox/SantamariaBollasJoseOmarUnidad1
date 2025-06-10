<?php
session_start();
require_once 'db_conexion.php';

if (!isset($_SESSION['usuario'])) {
   header("Location: index.html");
   exit();
 }

if (isset($_POST['cerrar_sesion'])) {
    session_destroy();
    header('location: form.php');
    exit();
}
?>
 <script>
        var inactivityTimeout;

        function resetTimer() {
            clearTimeout(inactivityTimeout);
            inactivityTimeout = setTimeout(logout, 15000); 
        }

        function logout() {
            window.location.href = 'form.php'; 
        }

        document.addEventListener('mousemove', resetTimer);
        document.addEventListener('keydown', resetTimer);
    </script>   
<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    Basic Page Needs
    ==================================================
    -->
    <meta charset="utf-8">
   <title>  Logicraft HTML5 Template</title>
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
                                 <p class="info-title">Nombre:</p>
                                 <p class="info-subtitle"><?php echo $_SESSION['nombre'];?></p>
                              </div>
                           </li>
                           <li><span class="info-icon"><i class="icon icon-envelope"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">Usuario:</p>
                                 <p class="info-subtitle"><?php echo $_SESSION['usuario'];?></p>
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
                           <li class="nav-item dropdown active"><a class="nav-link" href="#" data-toggle="dropdown">Inicio<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li class="active"><a href="index.html">Inicio</a></li>
                                 <li><a href="#">Home Two</a></li>
                                 
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Company<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">About Us </a></li>
                                 <li><a href="#">Our Team</a></li>
                                 <li><a href="#">Pricing </a></li>
                                 <li><a href="#">Faq</a></li>
                                 <li><a href="#">Gallery</a></li>
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Projects<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Projects All</a></li>
                                 <li><a href="#">Projects Single</a></li>
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Services<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Services All</a></li>
                                 <li><a href="#">Services Single</a></li>
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown"><a class="nav-link" href="#" data-toggle="dropdown">Features<i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Addons 1</a></li>
                                 <li><a href="#">Addons 2</a></li>
                                 <li><a href="#">Addons 3</a></li>
                                 <li><a href="#">404</a></li>
                                 <li class="dropdown-submenu"><a class="nav-link" href="#" data-toggle="dropdown">Parent Menu</a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">Child Menu 1</a></li>
                                       <li><a href="#">Child Menu 2</a></li>
                                       <li><a href="#">Child Menu 3</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                           <a class="nav-link" href="#" data-toggle="dropdown">
                              News
                              <i class="fa fa-angle-down"></i>
                           </a>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Blog With Right Sidebar</a></li>
                                 <li><a href="#">Blog With Left Sidebar</a></li>
                                 <li><a href="#">Single News</a></li>
                              </ul>
                           </li>
                           <!-- li end-->
                           <li class="nav-item dropdown">
                                 <a href="#">Contact</a>
                           </li>
                        </ul>
                        <!--Nav ul end-->
                     </div>
                     <form method="post" class="form-inline">
                <button type="submit" name="cerrar_sesion" class="top-right-btn btn btn-primary">
                    Cerrar sesion
                </button>
            </form>
                     <!-- Top bar btn -->
                  </nav>
                  <!-- Collapse end-->

                  
                  
               </div>
            </div>
            <!-- Site nav inner end-->
         </header>
         <!-- Header end-->
      </div>

      <?php
if (isset($_SESSION['nombre'])) {
    $query = $cnnPDO->prepare('SELECT * FROM cursos WHERE nombre = :nombre');
    $query->bindParam(':nombre', $_SESSION['nombre']);
    $query->execute();

    echo '<div class="row justify-content-center mt-4 mb-4">';
    echo '<div class="col-md-12">';
    echo '<h2 class="text-center" style="font-size: 30px; margin-bottom: 20px;">Mis Cursos</h2>';
    echo '</div>';

    while ($campo = $query->fetch()) {
        echo '<div class="col-md-4 mb-3">'; 
        echo '<div class="card ts-feature-box mt-3 mb-3">'; 
        echo '<div class="card-body text-center">';
        echo '<h5 class="card-title ts-feature-title" style="font-size: 24px; margin-bottom: 10px;">' . $campo['curso'] . '</h5>';
        echo '<h6 class="card-subtitle mb-3 text-body-secondary" style="margin-bottom: 10px;">' . $_SESSION['nombre'] . '</h6>';
        echo '<a href="#" class="btn btn-primary" style="margin-top: 10px;">Leer más</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';

    echo '<div class="row justify-content-center mt-4 mb-4">';
    echo '<div class="col-md-12">';
    echo '<h2 class="text-center" style="font-size: 30px; margin-bottom: 20px;">Más Cursos</h2>';
    echo '</div>';
    echo '</div>';
}
?>

<div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
         <ol class="carousel-indicators visible-lg visible-md">
            <li class="active" data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
         </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
         <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url(images/slider/bj1.png);">
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light">Cursos para paginas web</h2>
                        <h3 class="slide-sub-title">Javascript, Html5 y CCS</h3>
                        <p class="slider-description lead">Descubre el arte de la creación web y lleva tus ideas al mundo digital. <br/> Explora el diseño interactivo y aprende a cautivar a tus usuarios desde la primera visita.</p>
                        <p><a class="slider btn btn-primary" href="#">Mirar Cursos</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url(images/slider/bj2.jpg);">
               <div class="container">
                  <div class="slider-content text-center">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light">Inteligencia artificial</h2>
                        <h3 class="slide-sub-title">Chatgpt</h3>
                        <p class="slider-description lead">Descubre el poder transformador de la inteligencia artificial y desata nuevas posibilidades en la era digital.</p>
                        <p><a class="slider btn btn-primary" href="#">Mirar Cursos</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 2 end-->
            <div class="carousel-item" style="background-image:url(images/slider/b3.jpg);">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light">Bases de datos</h2>
                        <h3 class="slide-sub-title">MySQL y Oracle</h3>
                        <p class="slider-description lead">Explora el mundo de las bases de datos y descubre cómo organizar la información de manera eficiente.</p>
                        <p><a class="slider btn btn-primary" href="#">Mirar Cursos</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 3 end-->
         </div>
         <!-- Carousel inner end-->
         <!-- Controllers--><a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
      </div>
      <!-- Carousel end-->

         <!-- Footer Main-->
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="copyright-info"><span>Copyright © 2024 a theme by <a>Cursos Data</a></span></div>
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

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
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