<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../navigation.php';?>

    <!-- Intro Header -->
    <header class="intro-servicios portada-marketing content-section">
        <div class="servicios-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 animated fadeInDownBig">
                        <h1 class="servicios-heading">Marketing Digital</h1>
                        <p class="servicios-text">Diseñamos y tomamos café.</p>
                        <a href="#" class="action-button shadow animate yellow">Conoce más</a>
                    </div>
                </div>
            </div>
            <div class="arrow-portada">
                    <a href="#servicios" class="btn btn-circle-portada page-scroll">
                        <i class="fa fa-angle-double-down floating"></i>
                    </a>
            </div>


            <div class="barraflecha">
                <div class="barra-horizontal left"></div>
                <div class="barra-horizontal right"></div>
            </div>
        </div>
    </header>

    <!-- Especificaciones Diseño Web -->
    <section id="servicios" class="content-section branding descripcion-servicios">

            <div class="disenoweb-section-descripcion">
        <div class="container servicios-section">
        <div class="col-sm-7 col-md-7 text-center">
            <p>(Imagen)</p>
            </div>
            <div class="col-sm-5 col-md-5">
                <h2>Responsive Design</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        </div>


        <div class="disenoweb-section-descripcion">
        <div class="container servicios-section">
            <div class="col-sm-5 col-md-5">
                <h2>HTML5 + CSS3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-sm-7 col-md-7 text-center">
                <p>(Imagen)</p>
            </div>
        </div>
    </div>
        <div class="disenoweb-section-descripcion">
        <div class="container servicios-section">
        <div class="col-sm-7 col-md-7 text-center">
            <p>(Imagen)</p>
            </div>
            <div class="col-sm-5 col-md-5">
                <h2>Optimización Web</h2>
                <p>We take care of everything about an advertising campaign: branding and corporate identity, brochures, catalogs and posters. With a very careful eye on the consistency of the brand across all media channels.</p>
            </div>
        </div>


        </div>
    </section>

    <!-- Proceso Web Section -->
    <section id="download" class="content-section text-center">
        <div class="introduccion-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Nuestro Proceso</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Iconos Web Section -->
    <section id="download" class="content-section text-center">
        <div class="introduccion-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Iconos Web</h2>
                    <p>HTML - CSS3 - JS - jQuery</p>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Footer -->
<?php include '../footer.php';?>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/grayscale.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script src="../js/viewportchecker.js"></script> 
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
