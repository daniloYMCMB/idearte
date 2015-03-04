<!DOCTYPE html>
<html lang="es">

    <?php include '../head.php';?>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->

    <?php include '../blog/navigation.php';?>

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
                <div class="col-md-3 sidebar-blog">
                    <p><strong>Escrito por:</strong><br>Sergio Rojas</p>
                    <p><strong>Fecha:</strong><br>27 de Enero del 2015</p>
                </div>

                <div class="col-md-9">
                    <h1>5 Tendencias en Diseño Web para el 2015</h1>
                    <p>El diseño web está en constante evolución y es importante mantenerse actualizado con las últimas tendencias para mantener su página web relevante y atractiva para sus clientes.</p>
                    <p>Todos hemos visto páginas desactualizadas en internet con colores muy pobres, mala elección de fuentes, y difícil navegación; y es que la estructura e imágenes utilizadas en una página web hace 5 años simplemente no con los clientes de hoy.</p>
                    <p>Aquí nuestras predicciones en cuanto a diseño web para el 2015:</p>
                    <h2>1. Imágenes  grandes</h2>
                    <img src="http://idearte.pe/blog/img/blog/imagenes-grandes.jpg">
                    <p>En el 2014 observamos un incremento en el uso de imágenes grandes, y debido al incremento en la velocidad de conexión a internet, estas imágenes se han vuelto cada vez de mejor calidad.</p>
                    <p>Los humanos somos criaturas visuales por naturaleza, por lo que esperamos en el 2015 ver imágenes aún más grandes y de mejor calidad.</p>
                    <h2>2. Diseño semi-flat</h2>
                    <img src="http://idearte.pe/blog/img/blog/diseno-semi-flat.jpg">
                    <p>A inicios del 2014 el flat design (diseño plano), que fue impulsado por Microsoft y Apple, obtuvo mucha popularidad. Sin embargo, en muchos casos lo hemos visto evolucionar a un diseño híbrido que combina elementos flat con imágenes del mundo real. Esperamos ver más de esto en el 2015.</p>
                    <h2>3. Desplazarse más (y menos clics)</h2>
                    <img src="http://idearte.pe/blog/img/blog/desplazarse-mas-menos-clics.jpg">
                    <p>El continuo y rápido crecimiento en el uso de dispositivos móviles ha generado que se considere la experiencia móvil en el proceso de diseño web. Desplazarse es la forma natural de navegar en un móvil y la tendencia es simular esta misma experiencia en la web. Desplazarse resulta más intuitivo, más sencillo de usar, ahorra tiempo de carga y permite una interacción más dinámica entre el usuario y la página web, por lo que prevemos que esta tendencia continúe y aumente en el mercado local en el 2015.</p>
                    <h2>4. Mejor tipografía</h2>
                    <img src="http://idearte.pe/blog/img/blog/mejor-tipografia.jpg">
                    <p>Cada vez es mayor el número de páginas web que incluye mejor tipografía en sus diseños. Esperamos mejor jerarquía visual, mayor cantidad fuentes únicas, y mensajes cortos y directos.</p>
                    <h2>5. Videos de fondo</h2>
                    <img src="http://idearte.pe/blog/img/blog/Videos-de-fondo.jpg">
                    <p>Con el aumento de la velocidad de conexión a internet, tiene más sentido agregar elementos antes no usados con el fin de crear una mejor experiencia para el usuario. Un video de fondo crea un ambiente dinámico y una sensación etérea mostrando el alma de la empresa.</p>
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
