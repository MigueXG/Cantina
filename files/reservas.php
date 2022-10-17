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
        <script src="js/Plato.js" type="text/javascript"></script>
        <link href="/lib/bootstrap.min.js" type="text/javascript"/>
        <script src="lib/bootstrap.bundle.min.js" type="text/javascript"></script>  
        
        <style type="text/css">
            .row{
                align-items: flex-start;
            }
        </style>
    </head>
    
    <body class="Site">
        <!-- Llama al encabezado de la página-->
        <?php
            require_once 'secciones/headerAdmin.php';
        ?> 
        <!--Contenido del sitio-->
        <main class="Site-content">
            
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-9 border-right">
                        <div class="p-3 bg-white">
                            <div class="d-flex justify-content-between align-items-center p-2 border-bottom">
                               <h6 class="heading1 ">Reservas de Hoy</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless" id="TablaReservas" name="TablaReservas">
                               <thead>
                                   <th>Legajo</th>
                                   <th>Nombre y Apellido</th>
                                   <th>Plato</th>
                                   <th>Para llevar</th>
                                   <th>Opciones</th>
                               </thead>
                               <tbody id="TbodyTR" name="TbodyTR">
                                    <tr>
                                        <td id="legajo">2005670</td>
                                        <td id="nombre">Air Jordon 1 Mis Shattered </td>
                                        <td id="plato">Backboard</td>
                                        <td id="llevar" >
                                            <input type="checkbox" id="" name="" value="">
                                            <label for="">Llevar</label>
                                        </td> 
                                        <td><a href="" class="entregado btn btn-outline-dark">Entregar</a></td>   
                                    </tr>
                                    <tr>
                                        <td>3900730</td>
                                        <td>Air Jordon 1 Mis Shattered </td>
                                        
                                        <td>'Red hunt'</td>
                                        <td>
                                            <input type="checkbox" id="" name="" value="">
                                            <label for="">Llevar</label>
                                        </td> 
                                        <td><a href="#" class="btn btn-outline-dark">Entregar</a></td>   
                                    </tr>

                                   <tr>
                                        <td>1-20450560/15</td>
                                        <td>Nike Sachi x LDWaffle </td>
                                        <td>'Pine Green'</td>
                                        <td>
                                            <input type="checkbox" id="" name="" value="">
                                            <label for="">Llevar</label>
                                        </td> 
                                         <td><a href="#" class="btn btn-outline-dark">Entregar</a></td>   
                                    </tr>
                                    <tr>
                                        <td>1-35750560/12</td>
                                        <td>Versace Chain Reaction </td>
                                        <td>'Black Multi'</td>
                                        <td>
                                            <input type="checkbox" id="" name="" value="">
                                            <label for="">Llevar</label>
                                        </td> 
                                        <td><a href="#" class="btn btn-outline-dark">Entregar</a></td>   
                                   </tr>

                               </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white border-bottom">
                            <h6 class="account">Resumen de Reservas</h6>
                         </div>
                         <div class="p-3 py-4 bg-white">
                            <div class="progress-2 mt-3">
                                <div class="d-flex justify-content-between">

                                 <span class="orders">Pedidos</span>
                                <span class="orders">1/20</span>

                                 </div>
                                   <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="progress-3 mt-3">
                                <div class="d-flex justify-content-between">
                                    <span class="customer">Satisfaccion</span>
                                    <span class="customer">Very Good</span>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>               
                            </div>
                                 <div class="d-flex justify-content-between mt-3 text-dark">
                                    <i class="fa fa-smile-o"></i>
                                    <i class="fa fa-smile-o"></i> 
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

