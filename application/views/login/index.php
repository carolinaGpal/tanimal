<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Territorio Animal | Iniciar Sesión:: w3layouts</title>
<!-- Custom Theme files -->
<link href='<?php echo base_url(); ?>public/login/css/style.css' rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<!--header start here-->
	<div class="login">
		 <div class="login-main">
		 		<div class="login-top">
		 			<img src="<?php echo base_url(); ?>public/login/images/cred.png" alt=""/>
		 			<h1>Ingresa <span class="anc-color"> a tu cuenta</span> </h1>
		 			<form id='formularioL' name='formularioL' method="post" action="../../index.php/Acceder/ingresar">
		 			<input id="correo" name="correo" type="text" placeholder="Correo Electronico" required="">
		 			<input id="contra" name="contra" type="password" placeholder="Contraseña" required="">
		 					 			<!--<div class="select">
						<form name='mi_Form'>
						<select id="tipo">
						    <option value="">Tipo de usuario:</option>
						    <option value="opcion-1">Cliente</option>
						    <option value="opcion-2">Veterinario/a</option>
						    <option value="opcion-3">Secretario/a</option>
						    <option value="opcion-4">Administrador</option>
						</select>
					</div>-->
		 			<div class="login-bottom">
			 		  <div class="login-para">
			 			<p><a href="#"> ¿Olvidaste tu contraseña? </a></p>
			 		 </div>
			 			<div class="clear"> </div>
		 			</div>
		 			<input type="submit" value="Ingresar">
		 		</form>

		 		</div>
		 		
		 	</div>
  </div> 
  <div class="copyright">
		 <p>Diseñado por <a href="http://w3layouts.com/"> W3layouts </a></p>
	</div>

	<script  language=JavaScript> 

		function ingresar(){
			document.getElementById('formularioL').submit();
			//window.location = "../../index.php/Navegacion/usuarioAd";
		}

		/*function go(){
			var t = document.forms['mi_Form']['tipo'].value;
			if(t == "opcion-1"){
				document.getElementById("correo").submit();
				document.getElementById("contraseña").submit();
				//window.location = "usuarioCl";
			}
			if(t == "opcion-4"){
				
				//document.getElementById("correo","contra").submit();
				window.location = "index.php/Navegacion/usuarioAd";
			}
			if(t == "opcion-2"){
				window.location = "usuarioVe";
			}
			if(t == "opcion-3"){
				window.location = "usuarioSe";
			}
		}*/ 
	</script> 
<!--header end here-->
</body>
</html>