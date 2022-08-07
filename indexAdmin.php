<?php 
    
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
        
        <style type="text/css">
            body{
                margin: 0;
                padding: 0;    
               
                font-family: sans-serif;
            }
            .loginbox{
                width: 370px;
                height: 610px;
                background: #fff;
                color: #000 ;
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                padding: 70px 30px;
                border: 1px solid lightseagreen;
            }
            .avatar{
                width: 100px;height: 100px;border-radius: 50%;position: absolute;top: -50px;left: calc(50% - 50px);
            }
            .logo{
                width: 100px;
                border-radius: 5%;
                margin-left: 100px;margin-top: 80px;
            }
            h1{
                margin: 0;padding: 0 0 20px;text-align: center;font-size: 22px;
            }
            .loginbox p{
                margin: 0;padding: 0;font-weight: bold;
            }
            .loginbox input{
                width: 100%;margin-bottom: 20px;
            }
            .loginbox input[type="text"], input[type="password"]{
                border: none;border-bottom: 1px solid #000;
                background: transparent;outline: none;height: 40px;color: #000;font-size: 16px;
            }
            .loginbox input[type="submit"]{
                border: none;outline: none;height: 40px;background: #105955 ;color: #fff;font-size: 18px;border-radius: 20px;
            }
            .loginbox input[type="submit"]:hover{
                cursor: pointer;background: lightseagreen;color: #fff;
            }
            .loginbox a{
                text-decoration: none;font-size: 12px;line-height: 20px;color: darkgrey;
            }
            .loginbox a:hover{
                color: #ffc107;
            }  
        </style>
    </head>
    
    <body class="Site">
        <div class="loginbox rounded shadow"> 
            <img src="img/mountain_icon.png" class="avatar">
            <h1>Cantina Universitaria</h1>
            <br/>
            <form method="post" action="#">
                <p>Usuario</p> 
                <input type="text" name="" placeholder="Enter Username">
                <p>Contraseña</p> 
                <input type="password" name="" placeholder="Enter Password">
                <input type="submit" name="" value="Login"/> 
            </form>
            <img src="img/logo.png" class="logo">
        </div>
    </body>
    
    
    
</html>


