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
            require_once 'secciones/headerAdmin.php';
        ?>
               
        <!--Contenido del sitio-->
        <main class="Site-content">
            
            <div class="container mt-5 mb-5">
                <div class="row g-0">
                    <div class="col-md-8 border-right">
                        <div class="p-3 bg-white">
                            <div class="d-flex justify-content-between align-items-center">
                               <h6 class="heading1">Recently Sold Items</h6>
                               <div class="d-flex flex-row align-items-center text-muted">
                                   <span class=" days mr-2"></span>
                                   <i class="fa fa-angle-down"></i>

                               </div>
                            </div>
                            <div class="table-responsive">
                            <table class="table table-borderless">
                               <thead>
                                   <th></th>
                                   <th>Item</th>
                                   <th>Size</th>
                                   <th>Date</th>
                                   <th>Price</th>
                                   <th></th>


                               </thead>

                               <tbody>
                                   <tr>
                                    <td><img src="https://i.imgur.com/VMsimw4.jpg" width="35"></td>
                                    <td>Air Jordon 1 Mis Shattered Backboard</td>
                                    <td>US10</td>
                                    <td>1/8/20</td>
                                    <td>$140.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>

                                   <tr><td><img src=" https://i.imgur.com/TsEgUVp.jpg" width="35"></td>
                                    <td>Air Jordon 1 Mis Shattered 'Red hunt'</td>
                                    <td>US10</td>
                                    <td>1/8/20</td>
                                    <td>$240.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>

                                   <tr>
                                    <td><img src="https://i.imgur.com/DssMflK.jpg" width="35"></td>
                                    <td>Nike Sachi x LDWaffle 'Pine Green'</td>
                                    <td>US8</td>
                                    <td>1/6/20</td>
                                    <td>$360.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>
                                   <tr>
                                    <td><img src="https://i.imgur.com/eXYwGQO.jpg" width="35"></td>
                                    <td>Adidas Yazzi Boost 700 'Wave Runner'</td>
                                    <td>US12</td>
                                    <td>1/5/20</td>
                                    <td>$280.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>
                                   <tr>
                                    <td><img src="https://i.imgur.com/jcSV512.jpg" width="35"></td>
                                    <td>Versace Chain Reaction'Black Multi' </td>
                                    <td>US10.5</td>
                                    <td>1/4/20</td>
                                    <td>$1,240.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>
                                   <tr>
                                    <td><img src="https://i.imgur.com/DssMflK.jpg" width="35"></td>
                                    <td>Versace Chain Reaction'Black Multi' </td>
                                    <td>US10.5</td>
                                    <td>1/4/20</td>
                                    <td>$1,240.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>
                                   <tr>
                                    <td><img src="https://i.imgur.com/eXYwGQO.jpg" width="35"></td>
                                    <td>Versace Chain Reaction'Black Multi' </td>
                                    <td>US10.5</td>
                                    <td>1/4/20</td>
                                    <td>$1,240.00</td> 
                                     <td><i class="fa fa-ellipsis-v"></i></td>   
                                   </tr>

                               </tbody>


                            </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white">
                            <h6 class="account">Resumen de Reservas</h6>
                            
                         </div>
                         <div class="border-top border-bottom p-3 bg-white transaction">
                             <span class="money mr-3">Transfer balance</span>
                             <span class="money">View Transaction</span>
                         </div>
                         <div class="p-3 py-4 bg-white">
                            <div class="d-flex justify-content-between">

                                <span class="goal">Goal and Overview</span>
                                <span class="goal">January 2020<i class="fa fa-angle-down ml-2"></i></span>
                            </div>
                            <div class="progress-1 mt-3">

                                <div class="d-flex justify-content-between">
                                    <span class="revenue">Revenue</span>
                                <span class="revenue">$1,000.00/10,000.00</span>

                                </div>

                                <div class="progress mt-1">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                  </div>
                             </div>
                            </div>

                               <div class="progress-2 mt-3">
                                 <div class="d-flex justify-content-between">

                                 <span class="orders">Orders</span>
                                <span class="orders">5/20</span>

                                 </div>
                                   <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>

                               </div>

                               <div class="progress-3 mt-3">
                                 <div class="d-flex justify-content-between">

                                 <span class="customer">Customer Satisfaction</span>
                                <span class="customer">Very Good</span>
                                </div>

                                <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
