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
            .limiter{width: 100%;margin: 0 auto
            }
            .container-login100{
                width: 100%;min-height: 100vh;display: -webkit-box;
                display: -webkit-flex;display: -moz-box;display: -ms-flexbox;
                display: flex;flex-wrap: wrap;justify-content: center;
                align-items: center;padding: 15px;background-repeat: no-repeat;
                background-position: center;background-size: cover;position: relative;z-index: 1
            }
            .container-login100::before{
                content: "";display: block;position: absolute;z-index: -1;
                width: 100%;height: 100%;top: 0;left: 0;background-color: rgba(0,0,0,0.80)
            }
            .login_topimg{
                border-top-left-radius: 5px;border-top-right-radius: 5px;width: 100%;
                min-height: 185px;position: relative;
                background:#91B3D1 url(https://image.freepik.com/free-vector/cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37330.jpg) no-repeat;
                background-size: auto;background-position: center
            }
            .login_topimg img{
                width:100%;height: auto
            }
            .login_topimg .logo_wrap{
                border-radius: 5px;background: #fff;padding: 13px 55px;position: relative;top: -21px;margin: 10px auto;max-width: 255px
            }
            #login .wrap-login100{
                background-color: #fff;padding: 20px 45px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;
                width: 100%
            }
            .login100-form{
                width: 100%;display: -webkit-box;display: -webkit-flex;display: -moz-box;
                display: -ms-flexbox;display: flex;justify-content: space-between;flex-wrap: wrap
            }
            .login100-form-title{
                font-size: 25px;color: #243762;line-height: 1.2;text-transform: uppercase;
                text-align: center;width: 100%;display: block
            }
            .login100-form-subtitle{
                font-size: 16px;color: #243762;line-height: 1.2;text-align: center;width: 100%;
                display: block
            }
            .wrap-input100{
                position: relative;width: 100%;z-index: 1}
            #login input{outline: none;border: none}
            #login label{display: inline-block;margin-bottom: .5rem}
            .input-checkbox100{display: none}input{outline: none;border: none}.wrap-input100{position: relative;width: 100%;z-index: 1}.input100{font-size: 15px;line-height: 1.2;color: #686868;display: block;width: 100%;background: #e6e6e6;height: 45px;border-radius: 3px;padding: 0 30px 0 55px}.focus-input100{display: block;position: absolute;border-radius: 3px;bottom: 0;left: 0;z-index: -1;width: 100%;height: 100%;box-shadow: 0px 0px 0px 0px;color: rgba(211,63,141, 0.6)}.symbol-input100{font-size: 15px;color: #999999;display: -webkit-box;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: flex;align-items: center;position: absolute;border-radius: 25px;bottom: 0;left: 0;width: 100%;height: 100%;padding-left: 23px;padding-bottom: 5px;pointer-events: none;-webkit-transition: all 0.4s;-o-transition: all 0.4s;-moz-transition: all 0.4s;transition: all 0.4s}::-webkit-input-placeholder{opacity: 1;-webkit-transition: opacity .5s;transition: opacity .5s}:-moz-placeholder{opacity: 1;-moz-transition: opacity .5s;transition: opacity .5s}::-moz-placeholder{opacity: 1;-moz-transition: opacity .5s;transition: opacity .5s}:-ms-input-placeholder{opacity: 1;-ms-transition: opacity .5s;transition: opacity .5s}::placeholder{opacity: 1;transition: opacity .5s}*:focus::-webkit-input-placeholder{opacity: 0}*:focus:-moz-placeholder{opacity: 0}*:focus::-moz-placeholder{opacity: 0}*:focus:-ms-input-placeholder{opacity: 0}*:focus::placeholder{opacity: 0}.lnr{speak: none;font-style: normal;font-weight: 400;font-variant: normal;text-transform: none;line-height: 1;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale}.flex-sb-m{display: -webkit-box;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: flex;justify-content: space-between;-ms-align-items: center;align-items: center}.w-full{width: 100%}.p-b-30{padding-bottom: 30px}.input-checkbox100:checked + .label-checkbox100::before{color: #09569B}.label-checkbox100::before{content: "\f00c";font-family: FontAwesome;font-size: 13px;color: transparent;display: -webkit-box;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: flex;justify-content: center;align-items: center;position: absolute;width: 18px;height: 18px;border-radius: 2px;background: #fff;border: 1px solid #e6e6e6;left: 0;top: 50%;-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%)}.label-checkbox100{font-size: 14px;font-weight: normal;color: #999999;line-height: 1.2;display: block;position: relative;padding-left: 26px;cursor: pointer}.m-b-16{margin-bottom: 16px}.p-b-55{padding-bottom: 55px}.container-login100-form-btn{width: 100%;display: -webkit-box;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: flex;flex-wrap: wrap;justify-content: center}.login100-form-btn:hover{background: #333333}.label-checkbox100::before{content: "\f00c";font-family: FontAwesome;font-size: 13px;color: transparent;display: -webkit-box;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: flex;justify-content: center;align-items: center;position: absolute;width: 18px;height: 18px;border-radius: 3px;background: #fff;border: 2px solid #09569B;left: 0;top: 48%;-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%)}#login button:hover{cursor: pointer}.login100-form-btn{font-size: 16px;line-height: 1.5;color: #fff;text-transform: uppercase;width: 100%;height: 45px;border-radius: 3px;background: #09569B;display: -webkit-box;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: flex;justify-content: center;align-items: center;padding: 0 25px;-webkit-transition: all 0.4s;-o-transition: all 0.4s;-moz-transition: all 0.4s;transition: all 0.4s}#login button{outline: none !important;border: none}@media (max-width: 768px){.container{width: 750px}#login .wrap-login100{padding: 27px}.login_topimg .logo_wrap{padding: 5px 55px}}

        </style>
    </head>
    
    <body>
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   
  <body>
  	<div class="mySearchbar" style="display:none" id="mySearchbar">
		<div class="container">
			<form action="/action_page.php">
			  <input type="text" placeholder="Search.." name="search" class="form-control custome-input">
			  <button type="submit" class="btn btn-filter"><i class="fa fa-search"></i></button>
			</form>
			 <button onclick="w3_close()" class="myclosebtn"><i class="fa fa-times"></i></button>
		</div>
	</div>
<div class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 m-auto col-sm-8 col-12">
				<div class="log-box">
					<div class="row">
						<div class="col-xl-5 col-sm-5 col-12 pad-right-0">
							<div class="logo-back">
							</div>
						</div>
						<div class="col-xl-7 col-sm-7 col-12 pad-left-0">
							<div class="log-content">
								<h1>LOGIN </h1>
								<div class="log-body">
								<div class="form-group myr-top">
								<label>Gmail</label>
									<input type="text" class="form-control custom" placeholder="Gmail">
								</div>
								<div class="form-group myr-top">
								<label>Password</label>
									<input type="passowrd" class="form-control custom" placeholder="Password">
								</div>
								<div class="log-btn text-center">
									<a href="#" class="btn btn-theme1">Login</a>
								</div>
								<div class="log-bottom-cotent">
								<p>Creat an account<a href="signup.html">Sign Up</a>
								<a href="forgotpassword.html" class="pull-right">Forgot Password</a>
								</p>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
	 <script src="js/wow.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script>
		// Sticky Header
	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$(".top-nav").addClass("light-header");
		} else {
			$(".top-nav").removeClass("light-header");
		}
	});

	// Year for copy content
	$(function(){
	var theYear = new Date().getFullYear();
	$('#year').html(theYear);
	});
	</script>
	<script>
		function w3_open() {
			document.getElementById("mySearchbar").style.width = "100%";
			document.getElementById("mySearchbar").style.height = "50px";
			document.getElementById("mySearchbar").style.display = "block";
		}
		function w3_close() {
			document.getElementById("mySearchbar").style.display = "none";
		}
	</script>
        
        <div class="limiter" id="login">
        <div class="container-login100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="login_topimg">
                        </div>
                        <div class="wrap-login100">
                            <form class="login100-form validate-form"> <span class="login100-form-title "> Login </span> <span class="login100-form-subtitle m-b-16"> to your account </span>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz"> <input class="input100" type="text" name="Username" placeholder="Username"> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-user"></span> </span> </div>
                                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required"> <input class="input100" type="password" name="pass" placeholder="Password"> <span class="focus-input100"></span> <span class="symbol-input100"> <span class="glyphicon glyphicon-lock"></span> </span> </div>
                                <div class="flex-sb-m w-full p-b-30">
                                    <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                        <label class="label-checkbox100" for="ckb1">
                                            Remember me
                                        </label>
                                    </div>
                                    <div>
                                        <a href="#" class="txt1">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="container-login100-form-btn p-t-25"> <button class="login100-form-btn"> Login </button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
