<!DOCTYPE html>
<html lang="es">

    <?php include 'head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include 'navigation.php';?>

    <!-- Intro Header -->
    <header class="intro-blog portada-blog content-section">
        <div class="servicios-body">
            <div class="container-fluid">
            </div>
        </div>
    </header>

    <section id="servicios" class="content-section">
        <div class="servicios-section-descripcion">
            <div class="container blog-section">
                <div class="col-md-4">
                    <p><b>Tipo de proyecto:</b> Inmobiliario</p>
                    <p><b>Cliente:</b> CAMXIM Sociedad Anónima</p>
                    <p><b>Lugar:</b> Lima</p>
                    <p><b>Pagina web:</b> www.camxim.com</p>
                </div>
                <div class="col-md-4">
                    <h4>Oportunidad</h4>
                    <p>Crear una marca profesional, con visión de futuro y diseño a la vanguardia para el mercado local inmobiliario.</p>
                </div>
                <div class="col-md-4">
                    <h4>Resultado</h4>
                    <p>Una página web moderna y con diseño adaptable a todo tipo de dispositivo.</p> 
                    <p>Se mostró claramente las bondades de la marca y su importancia en el mercado inmobiliario local.</p>
                    <p>Se incrementó la tasa de conversión de clientes a través de claras llamadas a la acción (call to action).</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="content-section">
        <div class="servicios-section-descripcion">
            <div class="container blog-section">
                <div class="col-lg-12 text-center">
                    <h1>Imagen Corporativa</h1>
                    <img src="img/camxim-logo.jpg">
                </div>
            </div>
        </div>
    </section>
    <section id="servicios" class="content-section">
        <div class="servicios-section-descripcion">
            <div class="container blog-section">
                <div class="col-md-12 text-center">
                    <h1>Diseño Web</h1>
                    <img src="img/camxim-web.jpg">
                    <img src="img/camxim-ipad-iphone.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php include 'footer.php';?>
    <!-- jQuery -->
    <script src="http://idearte.pe/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://idearte.pe/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://idearte.pe/js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://idearte.pe/js/grayscale.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script src="http://idearte.pe/js/viewportchecker.js"></script> 
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
