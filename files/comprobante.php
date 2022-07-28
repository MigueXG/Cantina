<?php

    $payment = $_GET['payment_id'];
    $status = $_GET['status'];
    $payment_type = $_GET['payment_type'];
    $order_id = $_GET['merchant_order_id'];
            
?>

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
        <!--Lib PDF-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
        <script src="js/pdf.js" type="text/javascript"></script>
    </head>
    
    <body class="Site">
        <!-- Llama al encabezado de la página-->
        <?php
            require_once 'secciones/headerCorto.php';
        ?>
               
        <!--Contenido del sitio-->
        <main class="Site-content">

        <h2>Comprobante de Compra</h2>
        
        <div class="container col-12">
            <div class="" style="border-style: groove; width:40%; margin: 30px auto" id="tarjeta">
                <div class="logo">
                    <table class="tg">
                        <tr>
                            <th class="tg-us36"> 
                                <span>
                                    <img height="80" src="img/logo.png">       
                                </span>
                            </th>
                            <th class="title_main" colspan="2">
                                BOLETA DE VENTA - <?php echo $payment.'<br>'; ?>
                            </th>
                        </tr>
                    </table>
                </div><hr>
                <table class="tg2">
                    <tr>
                        <td colspan="3">
                            <span class="divider"></span>
                            <h5>NOMBRE:</h5>
                            <p>Lalo Landa</p>
                            <h5>DNI:</h5>
                            <p>387779865</p>
                            <h5 class="title" >Reserva</h5>
                            <span class="divider"></span>
                            <h5>CONCEPTO:</h5>
                            <p>Menú: Buseca</p>
                            <h5>Importe total:</h5>
                            <p>350 pe</p>
                            <p>Estado: <?php echo $status; ?></p>
                            <p>Tipo de Pago: <?php echo $payment_type; ?></p>
                            <p>Orden: <?php echo $order_id; ?></p>
                            <h5>Fecha emision:</h5>
                            <p>22-08-2020</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                </table> 
                <span class="divider"></span>
            </div>
            
            <button class="btn btn-success" onclick="generarPDF();">Descargar</button>
        </div>
                
    </main>
    <!-- Llama al pie de la página-->
    <?php require_once 'secciones/footer.php'; ?>
        
    </body>
</html>