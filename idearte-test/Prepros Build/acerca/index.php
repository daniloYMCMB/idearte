<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../navigation.php';?>

    <!-- Intro Header -->
<header class="intro-servicios portada-about content-section">
    <div class="servicios-body">
        <div class="container-fluid">
            <div class="row">
                <div id="bg">
                    <div class="container12 animated bounceInDown portada">
                        <ul id="scene">
                            <li class="layer" id="breath" data-depth="0.00">
                            <div>
                                <div class="col-lg-9 centrado text-center">
                                    <h1 class="frase-principal">Somos <strong>estrategas</strong> de profesión y <strong>creativos</strong> por naturaleza.</h1>
                                <div>
                            <div>
                            </div>
                            <a href="#" class="action-button shadow animate yellow" style="margin-left:32px;">
                            Conócenos</a>
                            </div>
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>

        <div class="arrow-portada">
            <a data-scroll href="#acerca" class="btn btn-circle-portada page-scroll">
                <i class="fa fa-angle-double-down floating"></i>
            </a>
        </div>

        <div class="barraflecha">
            <div class="barra-horizontal left"></div>
            <div class="barra-horizontal right"></div>
        </div>
    </div>
</header>

        <div class="servicios-section-titulo">
        <div class="container mensaje-servicios">

<div id="acerca" class="col-sm-6 col-md-12 text-center">
    <div class="acerca-concepto">
        <p class="contenido-destacado">Creamos el tipo de experiencias digitales que le permitirán destacar 
        en su industria.
        </p>
    </div>
</div>


<div class="col-sm-6 col-md-6 text-center">
   <div class="acerca-proceso-imagen">
    <img src="http://test.camxim.com/empresaweb/img/acerca/acerca-taza-izq.jpg">
   </div> 
</div>

<div class="col-sm-6 col-md-6">
    <div class="acerca-proceso">
        <h2 style="text-align:left; font-weight:bold;">Nuestro Proceso</h2>
        <h3 class="subtitulo">Investigación y Análisis</h3>
        <p class="acerca">Dedicamos gran parte del tiempo a analizar y entender su negocio y así brindarle la solución más adecuada a sus necesidades.</p>
        <h3 class="subtitulo">Diseño de la Solución</h3>
        <p class="acerca">Nos enfocamos en mejorar la experiencia del usuario con el fin de lograr los objetivos trazados.</p>
        <h3 class="subtitulo">Implementación y Soporte</h3>
        <p class="acerca">Implementamos la solución más apropiada de manera integral, y después de la salida en vivo, le brindaremos el soporte técnico necesario.</p>
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
