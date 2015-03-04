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

<!-- Especificaciones Diseño Web -->
    <section id="servicios" class="content-section branding descripcion-servicios">
        <div class="servicios-section-descripcion" style="height:800px; padding-top: 100px; margin:0;">
            <div class="container servicios-section">
                <div class="col-md-8">
                    <div class="imagen">
                        <img src="http://test.camxim.com/empresaweb/img/marketing/marketing-publicitarias.jpg" alt="marketing-publicitarias">
                    </div>
                </div>
                <div class="col-md-4 responsive">
                    <h2 style="margin-top:85px;">Campañas publicitarias - Google Adwords</h2>
                    <p>Anuncie de forma local o global. Sólo pagará cuando alguien haga clic en su anuncio. Nuestros
                     expertos certificados lograrán el más alto <strong>retorno de inversión (ROI).</strong>.</p>
                </div>
            </div>
        </div>

        <div class="servicios-section-descripcion" style="height:800px; padding-top: 10px; background:white; margin:0; text-align:center; border-top:1px solid rgb(238,230,230);">
            <div class="container servicios-section">
                <div class="col-sm-12 col-md-4" style="margin-top:106px;">
                    <h2 class="text-center" style="margin-bottom:30px;">Posicionamiento Web (SEO)</h2>
                    <p style="width:60%; margin: 0 auto; margin-bottom:20px; margin-top:30px;">Optimizamos el código, contenido y estructura de su página web con el fin de posicionarla 
                        en los primeros lugares de Google, Yahoo, y otros motores de búsqueda de forma natural.</p>
                </div>
                <div class="col-md-8 text-center">
                    <img class="centrar" style="width:400px; height:545px; margin-top:60px;" src="http://test.camxim.com/empresaweb/img/marketing/marketing-redes.jpg" alt="marketing-redes">
                </div>
            </div>
        </div>

        <div class="servicios-section-descripcion" style="height:800px; background:white; margin:0; border-top:1px solid rgb(238,230,230);">
            <div class="container servicios-section">
                <div class="col-sm-12 col-md-12">
                    <h2 class="text-center" style="color:black;">Manejo de Redes Sociales</h2>
                    <p style="color:black;">Creamos una comunidad de clientes potenciales a través de distintas estrategias de publicidad, manejo apropiado de contenidos y mucha creatividad.</p>
                </div>
                <div class="col-sm-6 col-md-6" style="color:black;">
                    <h3>Beneficios de tener presencia en las redes sociales</h3>
                    <ul style="margin:0; list-style:none;">
                        <li><span class="icon-ok"></span> Interactuar en tiempo real con clientes potenciales</li>
                        <li><span class="icon-ok"></span> Recibir sugerencias y recomendaciones (Feedback) sobre sus servicios o productos</li>
                        <li><span class="icon-ok"></span> Posicionar y promover su marca</li>
                        <li><span class="icon-ok"></span> Comunicar características, promociones y noticias sobre sus servicios o productos</li>
                        <li><span class="icon-ok"></span> Mejorar la imagen, percepción y recordación de la marca</li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-6 text-center" style="color:black;">
                    <img src="http://test.camxim.com/empresaweb/img/marketing/marketing-redes.jpg" alt="marketing-redes">
                </div>

            </div>
        </div>
    </section>

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
