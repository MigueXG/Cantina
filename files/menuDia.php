<?php

    require '../vendor/autoload.php'; //Cargar el SDK de MercadoPago
    
    MercadoPago\SDK::setAccessToken('TEST-1452447454686627-072118-ffdfdca7d9a50b63c171b38f77b5fdae-514397065'); //Credenciales de MercadoPago (Access Token)
    
    $preference = new MercadoPago\Preference();
    
    $item = new MercadoPago\Item(); //varibale para cargar el menu que vamos a cobrar
    $item->id = '0001'; //identificación del menu
    $item->title = 'Buseca'; //nombre del menu
    $item->quantity = 1; //cantidad de menu (supongo que va ser 1 siempre)
    $item->unit_price = 350.00; //precio unitario del menu
    
    $preference->items = array($item);
    
    $preference->back_urls = array(
        "success" => "http://localhost/Cantina/files/comprobante.php",
        "fail" => "http://localhost/Cantina/files/fallo.php."
    );
    
    $preference->auto_return = "approved";
    $preference->binary_mode = true;
    
    $preference->save();

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
        <!--SDK MercadoPago.js V2-->
        <script src="https://sdk.mercadopago.com/js/v2"></script>
    </head>
    
    <body class="Site">
        <!-- Llama al encabezado de la página-->
        <?php
            require_once 'secciones/header.php';
        ?>
               
        <!--Contenido del sitio-->
        <main class="Site-content">
            
        <!--Tarjetas con imagen + texto -->
        <h2>Reserva tu menu</h2>
            <p>Recorda que para pedir tenes que ser miembro de la comunidad universitaria y podes pedir un menú al día.</p>
        <div class="container col-12" id="tarjeta">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">Menú del Día</div>
                            <div class="card-body">
                                <div class="row descripcion">
                                    <strong>Usted está encargando: </strong>
                                    <p class="card-title">Buseca - guiso que lleva como ingrediente principal el mondongo.</p>

                                </div>

                                <form action="" method="">
                                    <div class="form-group row">
                                        <label for="legajo" class="col-md-3 col-sm-2 col-12 col-form-label text-md-right">Ingresa tu legajo</label>
                                        <div class="col-md-6 col-sm-2 col-10">
                                            <input type="" id="legajo" class="form-control" name="legajo" required autofocus >
                                        </div>
                                        <a class="col-md-3 col-sm-1 col-2" href=""><i class="fa-solid fa-magnifying-glass"></i></a>

                                    </div>

                                    <div class="form-group row">
                                        <label for="nombre" class="col-md-3 col-form-label text-md-right">Nombre y Apellido</label>
                                        <div class="col-md-9">
                                            <input disabled placeholder="Nombre, Apellido"type="" id="nombre" class="form-control" name="nombre" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nombre" class="col-md-3 col-form-label text-md-right">Claustro</label>
                                        <div class="col-md-3">
                                            <input disabled placeholder="Alumno/Docente"type="" id="nombre" class="form-control" name="nombre" required>
                                        </div>
                                        <label for="nombre" class="col-md-2 col-form-label text-md-right">Precio</label>
                                        <div class="col-md-4">
                                            <input disabled placeholder="$xxx,xx"type="" id="nombre" class="form-control" name="nombre" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> ¿Para llevar?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="checkout-btn"></div>
        
                                    <!-- Inicializa el checkout -->
                                    <script>
                                        const mp = new MercadoPago('TEST-0aca42bf-a74c-4984-8a28-9901d087c45b',{
                                            locale: 'es-AR'
                                        });

                                        mp.checkout({
                                            preference:{
                                                id: '<?php echo $preference->id; ?>'
                                            },
                                            render: {
                                                container: '.checkout-btn',
                                                label: 'BOTON ROJO'
                                            }
                                        })

                                    </script>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            
            </div>
                            
    </main>
    <!-- Llama al pie de la página-->
    <?php require_once 'secciones/footer.php'; ?>
        
    </body>
</html>
