<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cantina Universitaria</title>
        <link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
        <base href="http://localhost/Cantina/"/>
        <!--Estilos-->
        <link href="lib/bootstrap.min.css" rel="Stylesheet" type="text/css" /> 
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/087ef8a17c.js" crossorigin="anonymous"></script>
        <!--Scripts-->
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link href="/lib/bootstrap.min.js" type="text/javascript"/>
        <script src="lib/bootstrap.bundle.min.js" type="text/javascript"></script>   
    </head>
    
    <body class="Site">
        <!-- Llama al encabezado de la página-->
        <?php
            require_once 'files/secciones/header.php';
        ?>
               
        <!--Contenido del sitio-->
        <main class="Site-content">
            
            
            <h2>Reserva tu menu del día</h2>
            <p>Recorda que podes pedirlo para llevar o para comer en la cantina.</p>

        <!--Tarjetas con imagen + texto -->
        <div class="container col-10" id="tarjeta">
            <div class="row ">
                 <div class="card col-12 col-sm-6 col-md-3" style="width: 18rem;">
                     <img src="img/pasta.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Menú del día</h4>
                  <p class="card-text">Plato para el día de la fecha.</p>
                  <a href="files/menuDia.php" class="btn btn-dark">¡PEDILO!</a>
                </div>
            </div>
            
            <div class="card col-12 col-sm-6 col-md-3" style="width: 18rem;">
                <img src="img/hamburguesa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Menú fijo</h4>
                  <p class="card-text">Menú disponible todos los días.</p>
                  <a href="#" class="btn btn-dark">¡PEDILO!</a>
                </div>
            </div>
           
                <div class="card col-12 col-sm-6 col-md-3" style="width: 18rem;">
                    <img src="img/tarta.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Menú Veggie</h4>
                  <p class="card-text">Menú apto para vegetarianos.</p>
                  <a href="#" class="btn btn-dark">¡PEDILO!</a>
                </div>
            </div>
            </div>
        </div>
    </main>
    <!-- Llama al pie de la página-->
    <?php require_once 'files/secciones/footer.php'; ?>
        
    </body>
</html>
