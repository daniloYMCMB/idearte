<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../navigation.php';?>

    <!-- Intro Header -->
    <header class="intro-servicios portada-branding content-section">
        <div class="servicios-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 animated fadeInDownBig">
                        <h1 class="servicios-heading">Imagen Corporativa</h1>
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

    <div id="servicios" class="servicios-section-titulo">
        <div class="container mensaje-servicios">
            <p>Toda empresa emite continuamente mensajes a su alrededor. Estos mensajes constituyen su identidad 
                y son una referencia visual en el mercado para sus clientes y competencia. En (nombre de empresa) 
                ofrecemos estrategias personalizadas que le permitirán hacer llegar estos mensajes a sus clientes 
                de una manera atractiva, seria y homogénea.</p>
        </div>
    </div>


    <div class="container servicios_iconos">
        <div class="col-sm-4 col-md-4">
            <div class="icono_web">
            <img src="http://test.camxim.com/empresaweb/img/iconos/branding_logo.png" alt="Logotipo">
            <h3>Logotipo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="col-sm-4 col-md-4">
            <div class="icono_web">
            <img src="http://test.camxim.com/empresaweb/img/iconos/branding_manual.png" alt="Manual de Identidad">
            <h3>Manual de Identidad</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="col-sm-4 col-md-4">
            <div class="icono_web">
            <img src="http://test.camxim.com/empresaweb/img/iconos/branding_papeleria.png" alt="Papalería">
            <h3>Papelería</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
