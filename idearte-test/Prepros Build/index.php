<!DOCTYPE html>
<html lang="es">

    <?php include '../empresaweb/head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../empresaweb/navigation.php';?>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="video_wrapper">
                        <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="0" style="">
                            <source src="./video/video.webm" type="video/webm" id="videoWebm">
                            <source src="./video/video.mp4" type="video/mp4" id="videoMp4">
                        </video>
                        <div id="video_pattern" style="">
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 animated flipInX">
                        <p class="intro-text">
                            <section class="cd-intro">
                                <p class="cd-headline slide">
                                    <span>Lorem ipsum dolor sit amet</span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">consectetur</b>
                                        <b>adipisicing</b>
                                        <b>elit</b>
                                    </span>
                                </p>
                            </section> <!-- cd-intro -->
                        </p>
                        <a data-scroll href="#mensaje" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div> 
            </div>

            <div class="barraflecha">
                <div class="barra-horizontal left"></div>
                <div class="barra-horizontal right"></div>
            </div>

        </div>
    </header>

    <section id="mensaje" class="mensaje-section u-verticalCenter">
        <div class="container-fluid u-verticalContent">
            <div class="container">
                <p class="col-lg-7 centrado text-center">Somos una agencia de <strong>Marketing Digital y 
                    Diseño Web</strong><br>Creamos experiencias digitales únicas utilizando las últimas tendencias en diseño, tecnología y comunicación.
                </p>
            </div>
        </div>
    </section>

    <section id="servicios" class="servicios-section" style="background-color: #f3f3f3;">
        <div class="container text-center" style="padding: 0;">

            <h2 style="text-align:leftM">NUESTROS SERVICIOS</h2>

            <div class="col-sm-4 col-md-4">
                <img class="icono-home" src="../empresaweb/img/iconos/home-diseno.svg">
                <h2>Diseño Web</h2>
                    <p>Diseño adaptable<br>
                    Diseño UI/UX<br>
                    Gestor de contenidos - CMS<br>
                    Comercio electrónico</p>
            </div>

            <div class="col-sm-4 col-md-4">
                <img class="icono-home" src="../empresaweb/img/iconos/home-marketing.svg">
                    <h2>Marketing Digital</h2>
                        <p>Campañas digitales<br>
                        Posicionamiento web - SEO<br>
                        E-mail marketing<br>
                        Redes Sociales</p>
            </div>

            <div class="col-sm-4 col-md-4">
                <img class="icono-home" src="../empresaweb/img/iconos/home-logo.svg">
                <h2>Imagen Corporativa</h2>
                        <p>Logotipo<br>
                        Manual de identidad<br>
                        Papelería</p>
            </div>

        </div>
    </section>



    <section id="otros" class="content-section u-verticalCenter">
        <div class="container section-otros u-verticalContent">
            <div class="container">
                <div class="col-md-4">
                    <a href="../empresaweb/portafolio/camxim">
                    <h3>Último Proyecto</h3>
                    <div style="margin:0 auto;">
                        <img src="../empresaweb/img/portafolio-camxim.jpg">
                    </div>
                    <h4 style="height:44px; margin:30px 0 25px 0; font-weight: bold font-size:20.5px;">Ut enim ad minim veniam</h4>
                     </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>

                <div class="col-md-4">
                    <a href="../empresaweb/blog">
                        <h3>Blog</h3>
                        <div style="margin:0 auto;">
                            <img src="../empresaweb/img/blog-tendencias.jpg">
                        </div>
                        <h4 style="height:44px; margin:30px 0 25px 0; font-weight: bold font-size:20.5px;">5 Tendencias en Diseño Web para el 2015</h4>
                    </a>
                    <p>El diseño web está en constante evolución y es importante mantenerse actualizado con las últimas tendencias para mantener su 
                        página web relevante y atractiva para sus clientes.
                    </p>
                </div>

                <div class="col-md-4">
                    <h3>Contacto</h3>
                    <div style="margin:0 auto;">
                        <img src="../empresaweb/img/post2-cuadrado.jpg">
                    </div>
                    <h4 style="height:44px; margin:30px 0 25px 0; font-weight: bold font-size:20.5px;">Ut enim ad minim veniam</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php include '../empresaweb/footer.php';?>
    
    <script src="js/smooth-scroll.js"></script> <!-- Desplazamiento suave -->
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
    <script src="../empresaweb/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../empresaweb/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../empresaweb/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../empresaweb/js/grayscale.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script src="js/viewportchecker.js"></script> 
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
