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
            require_once 'secciones/headerCorto.php';
        ?>
               
        <!--Contenido del sitio-->
        <main class="Site-content">

        <h2>Comprobante de Compra</h2>
        
        <div class="container col-12" id="tarjeta">
            
            <?php

            $payment = $_GET['payment_id'];
            $status = $_GET['status'];
            $payment_type = $_GET['payment_type'];
            $order_id = $_GET['merchant_order_id'];

            echo '<h3>Pago Exitoso</h3>';

            echo $payment.'<br>';
            echo $status.'<br>';
            echo $payment_type.'<br>';
            echo $order_id.'<br>';

            ?>
            
        </div>
                            
    </main>
    <!-- Llama al pie de la página-->
    <?php require_once 'secciones/footer.php'; ?>
        
    </body>
</html>