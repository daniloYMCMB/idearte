<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->

    <?php include '../navigation.php';?>

    <!-- Intro Header -->
    <header class="intro-servicios portada-disenoweb content-section">
        <div class="servicios-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 animated fadeInDownBig">
                        <h1 class="servicios-heading">Diseño Web</h1>
                        <a href="#" class="action-button shadow animate yellow">Conoce más</a>
                    </div>
                </div>
            </div>
            <div class="arrow-portada">
                <a data-scroll href="#servicios" class="btn btn-circle-portada page-scroll">
                    <i class="fa fa-angle-double-down floating"></i>
                </a>
            </div>
            <div class="barraflecha">
                <div class="barra-horizontal left"></div>
                <div class="barra-horizontal right"></div>
            </div>
        </div>
    </header>

        <!-- Iconos Web Section -->
    <section id="servicios" class="content-section text-center">
        <div class="logos-lenguajes-section">
            <div class="container">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="disenoweb-lenguajes">
                        <img src="http://test.camxim.com/empresaweb/img/logo-lenguajes/lenguajes.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="container-fluid diseno section-fondo responsive">
            <div class="container-fluid u-verticalCenter">
            <div class="container">
                <div class="col-lg-12 disenoweb u-verticalContent">
                    <div class="col-md-7 text-center">
                        <img class="diseno-responsive" src="http://test.camxim.com/empresaweb/img/disenoweb/diseno-responsive.png">
                    </div>
                    <div class="col-md-4 responsive">
                        <h2>Diseño adaptable</h2>
                        <p>Diseñamos páginas web inteligentes que se adaptan al tamaño y forma de todo tipo de dispositivo, incluyendo: PCs, laptops, iPhones, Androids y tablets.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid disenoweb-section section-fondo disenoweb u-verticalCenter">
            <div class="container">
                <div class="col-lg-12 disenoweb u-verticalContent">
                    <div class="col-md-7 u-verticalContent text-center" style="margin:120px 0;">
                        <h2>Experiencia del usuario - UX</h2>
                        <p>Utilizamos una plataforma muy fácil de usar que le permitirá, de ser necesario, administrar el contenido a su sitio web.</p>
                    </div>
                    <div class="col-md-5 text-center">
                        <img class="disenoweb-img" src="http://test.camxim.com/empresaweb/img/disenoweb/diseno-ux.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid disenoweb-section section-fondo disenoweb u-verticalCenter">
            <div class="container">
                                    <div class="col-lg-7 text-center u-verticalContent">
                        <img class="disenoweb-img" src="http://test.camxim.com/empresaweb/img/disenoweb/diseno-wordpress.png">
                    </div>
                <div class="col-lg-5 administrable u-verticalContent">



                <h2>Sitio Web Administrable</h2>
                <p>Utilizamos una plataforma muy fácil de usar que le permitirá, de ser necesario, administrar el contenido a su sitio web.</p>
                </div>



            </div>



        </div>
    </div>



    <!-- Footer -->
<?php include '../footer.php';?>

    <script src="../js/smooth-scroll.js"></script> <!-- Desplazamiento suave -->
    <script>
        
            smoothScroll.init({
                speed: 1000,
                easing: 'easeInOutCubic',
                offset: 0,
                updateURL: true,
                callbackBefore: function ( toggle, anchor ) {},
                callbackAfter: function ( toggle, anchor ) {}
            });
        
    </script>

    <!-- jQuery -->
    <script src="http://test.camxim.com/empresaweb/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://test.camxim.com/empresaweb/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://test.camxim.com/empresaweb/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://test.camxim.com/empresaweb/js/grayscale.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script src="http://test.camxim.com/empresaweb/js/viewportchecker.js"></script> 
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.post').addClass("hidden").viewportChecker({
            classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
            offset: 100    
       });   
    });            
    </script>


</body>

</html>
