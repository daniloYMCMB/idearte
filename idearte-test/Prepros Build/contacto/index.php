<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../navigation.php';?>

    <!-- Intro Header -->
    <header class="intro-contacto portada-contacto">
        <div class="servicios-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animated fadeInDown">
                        <div class="col-md-12">
                        <h1 class="contenido-destacado-contacto text-center" style="color:white;">Estamos deseosos de atenderlo y convertirnos en su <br><strong>socio estratégico.</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div class="barraflecha">
            <div class="barra-horizontal left"></div>
            <div class="barra-horizontal right"></div>
        </div>
    </header>

    <section class="container-fluid" style="max-height:274px; padding:25px 0;">
            <section id="contact" class="container content-section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 contacto text-center">
                            <img class="contacto-icon" src="http://test.camxim.com/empresaweb/img/contacto/icon-telefono-negro.png">
                            <h3 class="contacto-info" style="color:black;">Teléfono</h3>
                            <p class="contacto-info text-yellow "><a href="tel:5114244329">(+511) 424-4329</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-g-3 contacto text-center">
                            <img class="contacto-icon" src="http://test.camxim.com/empresaweb/img/contacto/icon-mail-negro.png">
                            <h3 class="contacto-info" style="color:black;">Correo Electrónico</h3>
                            <p class="contacto-info text-yellow "><a href="mailto:contacto@empresaweb.com">contacto@empresaweb.com</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 contacto text-center">
                            <img class="contacto-icon" src="http://test.camxim.com/empresaweb/img/contacto/icon-direccion-negro.png"> 
                            <h3 class="contacto-info" style="color:black;">Dirección</h3>
                            <p class="contacto-info text-yellow">Javier Prado Este 6712</p>
                            <p class="contacto-info text-yellow">Oficina 401</p>
                            <p class="contacto-info text-yellow">Lima, Perú</p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 contacto text-center">
                            <img class="contacto-icon" src="http://test.camxim.com/empresaweb/img/contacto/icon-trabaja-negro.png"> 
                            <h3 class="contacto-info" style="color:black;">Trabaja con nosotros</h3>
                            <p class="contacto-info text-yellow"><a href="mailto:talento@empresaweb.com">talento@empresaweb.com</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
    
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
