<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../navigation.php';?>

    <!-- Intro Header -->
    <header class="intro-servicios portada-equipo content-section">
        <div class="servicios-body">
            <div class="container-fluid">
                <div class="row">

                        <div id="bg">
                            <div class="container12 animated bounceInDown portada">
                                <ul id="scene">
                                    <li class="layer" id="breath" data-depth="0.00">
                                    <div>
                                        <div class="col-lg-9 centrado text-center">
                                            <h1 class="frase-principal">Solo un <strong>gran equipo</strong> puede
                                                <br>lograr <strong>grandes resultados.</strong></h1>
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
        <a data-scroll href="#equipo" class="btn btn-circle-portada page-scroll">
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
    <section id="equipo" class="content-section equipo">
        <div class="container equipo-perfil">

            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/francesco.JPG" alt="Francesco">
                <h4>Francesco Saco</h4>
                <p class="equipo-cargo"><strong>Marketing Digital</strong></p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/Rosa.JPG" alt="Lorena">
                <h4>Lorena Salazar</h4>
                <p class="equipo-cargo"><strong>Especilista SEO/SEM</strong></p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/alysa.JPG" alt="Ana">
                <h4>Ximena Wong</h4>
                <p class="equipo-cargo"><strong>Diseñadora UI/UX</strong></p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/diego.JPG" alt="Diego">
                <h4>Diego Verástegui</h4>
                <p class="equipo-cargo"><strong>Diseñador Senior</strong></p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/Robert.JPG" alt="Sebastián">
                <h4>Roberto Ramirez</h4>
                <p class="equipo-cargo"><strong>Ingeniero QA</strong></p>
                </div>
            </div>

                        <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/sergio.JPG" alt="Sergio">
                <h4>Sergio Rojas</h4>
                <p class="equipo-cargo"><strong>Desarrollo Comercial</p>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/Manuel.jpg" alt="Manuel">
                <h4>Manuel Acuña</h4>
                <p class="equipo-cargo"><strong>Programador Senior</p>
                </div>
            </div>


            <div class="col-sm-6 col-md-4">
                <div class="fotoperfil">
                <img src="http://test.camxim.com/empresaweb/img/equipo/danilo.jpg" alt="Danilo">
                <h4>Danilo Viacava</h4>
                <p class="equipo-cargo"><strong>Programador</p>
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
