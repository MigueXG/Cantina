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
        <script src="lib/jquery-3.6.1.min.js" type="text/javascript"></script>
        <script src="lib/jquery-3.6.1.slim.min.js" type="text/javascript"></script>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link href="/lib/bootstrap.min.js" type="text/javascript"/>
        <script src="lib/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/Plato.js" type="text/javascript"></script>
        <!--SDK MercadoPago.js V2-->
        <script src="https://sdk.mercadopago.com/js/v2"></script>
    </head>
    
    <body class="Site">
        <!-- Llama al encabezado de la página-->
        <?php
            require_once 'secciones/headerAdmin.php';
        ?>
               
        <!--Contenido del sitio-->
        <main class="Site-content">
            <!-- div de error de pruebas -->
             <div class="alert alert-danger" id="divError" name="divError" hidden style="padding: 0"></div>
                    <div class="alert alert-success" hidden style="padding: 0" id="divSucces" name="divSucces">
                        <button type="button" class="close" data-dismiss="alert">
                            <span>&times;</span></button>
                        <p class="text-center" style="margin: 0; padding: 0">Alta exitosa</p>
                    </div>
                     <div class="alert alert-danger" id="divError" name="divError" hidden style="padding: 0">
                    </div>
            <h2>Carga de Menú</h2>
            <p>Seleccione el tipo de carga que se va a realizar:</p>
            <!--Botones para el tipo de menu que quiere cargar -->
            <div class="container">
                <div class="row justify-content-center">
                    <button style="margin-right: 20px;" class="btn btn-lg btn-outline-dark" onclick = "menuDiario()">Menú Diario</button>
                    <button class="btn btn-lg btn-outline-dark">Menú Semanal</button>
                </div>
            </div>
            <script>
                //Función para mostrar u ocultar formulario de menu
                function menuDiario() {
                var x = document.getElementById("menuDiario");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                }
                //Función para mostrar plato existente
                function existente() {
                var x = document.getElementById("existente");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            //Función para cargar nuevo plato
            function nuevo() {
                var x = document.getElementById("nuevo");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            
            </script>
        
            <!-- Formulario de carga de menu -->
            <div style="display:none;" class="container col-12" id="menuDiario">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">Seleccionar Menú del Día</div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <button onclick="existente()"style="margin-right: 20px;" class="btn btn-lg btn-outline-dark">Plato Existente</button>
                                            <button onclick="nuevo()"class="btn btn-lg btn-outline-dark">Nuevo Plato</button>
                                        </div>
                                    </div>
                                    
                                    <!-- Formulario de menu existente -->
                                    <div style="display:none;" class="row descripcion" id="existente">
                                    <hr>
                                        <p class="card-title">Selección de menú existente</p>
                                        <form action="" method="">
                                        <div class="form-group row">
                                            <label for="legajo" class="col-md-3 col-sm-3 col-12 col-form-label text-md-right">Plato</label>
                                            <div class="col-md-2 col-sm-2 col-10">
                                                <select type="" id="legajo" class="form-control" name="legajo" required autofocus >
                                                    <option>Menú 1</option>
                                                    <option>Menú 2</option>
                                                    <option>Menú 3</option>
                                                </select>
                                            </div>
                                            <label for="legajo" class="col-md-2 col-sm-2 col-12 col-form-label text-md-right">Cantidad</label>
                                            <div class="col-md-2 col-sm-2 col-10">
                                                <input type="number" id="legajo" class="form-control" name="legajo" required autofocus >
                                            </div>
                                            <a type="button" class="btn btn-outline-primary">Seleccionar</a>
                                        </div>    
                                    </form>
                                    
                                    </div>
                                    
                                    <!-- Formulario de nuevo plato -->
                                    <div id="nuevo"style="display:none;" class="row descripcion">
                                    <hr style="margin-top: 50px">
                                    <p>Carga de nuevo plato</p>
                                    
                                    <form  method="POST" action="" id="formnuevoplato" name="formnuevoplato" onsubmit="return false " enctype="multipart/form-data">
                                        <input type="text" hidden="" value="ALTA" id="ordendealta" name="ordendealta" />
                                        <div class="form-group row">
                                            <label for="nomplato" class="col-md-2 col-sm-2 col-12 col-form-label text-md-right">Nombre</label>
                                                <div class="col-md-3 col-sm-3 col-10">
                                                    <input type="" id="nomplato" class="form-control" name="nomplato" required autofocus >
                                                </div>
                                                <label for="cantplato" class="col-md-2 col-sm-2 col-12 col-form-label text-md-right">Cantidad</label>
                                                <div class="col-md-2 col-sm-2 col-10">
                                                    <input type="number" id="cantplato" class="form-control" name="cantplato" required autofocus >
                                                </div>
                                            </div>  
                                            <div class="form-group row">
                                                <label for="descplato" class="col-md-2 col-sm-2 col-12 col-form-label text-md-right">Descripción</label>
                                                <div class="col-md-3 col-sm-3 col-10">
                                                    <textarea type="" id="descplato" class="form-control" name="descplato" required autofocus ></textarea> 
                                                </div>
                                                <label for="archimagen" class="col-md-2 col-sm-2 col-12 col-form-label text-md-right">Imagen</label>
                                                <input type="file" id="archimagen" name="archimagen">
                                            </div> 
                                        <select id="seltipo" name="seltipo">
                                            <option value="Menu">Diario</option>
                                            <option value="Fijo">Fijo</option>
                                            <option value="Veggie">Vegano</option>
                                        </select>
                                        <a type="button" class="btn btn-outline-primary" onclick="plato.alta()">Alta</a>
                                    </form>
        </div>
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
