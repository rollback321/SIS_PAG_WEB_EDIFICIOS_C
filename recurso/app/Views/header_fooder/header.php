<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Innovación cholet
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome (iconos) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/index/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/index/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/index/css/style.css" rel="stylesheet">


      <!-- JavaScript Libraries -->
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/index/lib/easing/easing.min.js"></script>
        <script src="<?= base_url() ?>/index/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>/index/lib/tempusdominus/js/moment.min.js"></script>
        <script src="<?= base_url() ?>/index/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="<?= base_url() ?>/index/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="<?= base_url() ?>/index/mail/jqBootstrapValidation.min.js"></script>
        <script src="<?= base_url() ?>/index/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url() ?>/index/js/main.js"></script>
</head>

<body>
    
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-4 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                        <!-- <div class="d-inline-flex align-items-center"> -->
                                <!-- <img  class="img-logo-icon" width="50" height="40" src="/icon_image/gamea_logo.png" alt=""> -->
                        <!-- </div> -->
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-green-title" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-green-title px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-green-title px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-green-title px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-green-title pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-1" style="z-index: 7;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-2 py-lg-0 pl-1 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-red-title"><span class="text-green-title">EDIFICIOS</span>CHOLETS</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collaps navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
    
                        <a href="<?= route_to('inicio') ?>" class="nav-item nav-link active" id = "id_nav_inicio">Inicio</a>
                        <a href="<?= route_to('pestaña_localizacion') ?>" class="nav-item nav-link" id = "id_nav_localizacion_geo">Localización geográfica</a>
                        <a href="<?= route_to('pestaña_noticias') ?>" class="nav-item nav-link" id = "id_nav_noticia">Noticias</a>
                        <a href="<?= route_to('pestaña_galeria') ?>" class="nav-item nav-link" id = "id_nav_galeria">Galeria</a>
                        <a href="<?= route_to('pestaña_institucion') ?>" class="nav-item nav-link" id = "id_nav_institucion">Institución</a>
                        <a href="<?= route_to('pestaña_contactos') ?>" class="nav-item nav-link" id = "id_nav_contactos">Contactos</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->