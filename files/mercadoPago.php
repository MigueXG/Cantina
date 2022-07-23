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
    
    $preference->save();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mercado Pago</title>
        
        <!--SDK MercadoPago.js V2-->
        <script src="https://sdk.mercadopago.com/js/v2"></script>
    </head>
    <body>
        
        <h3>MERCADO PAGO</h3>
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

    </body>
        
</html>