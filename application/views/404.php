<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Territorio Animal | Servicios :: w3layouts</title>
<link href="<?php echo base_url(); ?>public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!-- navigation -->
<link href="<?php echo base_url(); ?>public/css/component.css" rel="stylesheet" type="text/css"  />
<!-- navigation -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>public/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <script type="text/javascript" src="<?php echo base_url(); ?>public/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/easing.js"></script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<p class="location"><i class="location"></i>Manzana 3, Casa 39 El barrio</p>
				<p class="phonenum">Teléfono: 1234567890</p>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<a href="index.html"><img src="<?php echo base_url(); ?>public/images/logo.png" alt="" /></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-5">
						<li><a class="active" href="../../index.php/Navegacion/index"><span data-hover="Inicio">Inicio</span></a></li> 
						<li><a href="../../index.php/Navegacion/acerca"><span data-hover="AcercaDe">Acerca De</span></a></li>
						<li><a href="../../index.php/Navegacion/servicios"><span data-hover="Servicios">Servicios</span></a></li>  
						<li><a href="../../index.php/Navegacion/contacto"><span data-hover="Contacto">Contacto</span></a></li>
						<li><a href="../../index.php/Navegacion/sesion"><span data-hover="IniciarSesión">Iniciar Sesión</span></a></li>
					</nav>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!-- footer-section-starts -->
	<div class="about-section text-center">
				<div class="container">
					<h2>Servicios</h2>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Vacunación </h4>
						<p>Es importante la correcta vacunación de su mascota contra las enfermedades más comunes. Visitenos y le informaremos sobre las vacunas más convenientes y las pautas de vacunación que debe seguir.</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Esterilización </h4>
						<p>En nuestro centro veterinario, disponemos de un quirófano, completamente equipado, en el cual se realizan intervenciones quirúrgicas con la máxima asepsia. Los animales son supervisados continuamente desde que se aplica la anestesia hasta que se produce la completa recuperación.</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4><br>Desparacitación </h4>
						<p>Nuestras mascotas forman parte de la familia, por tanto debemos mantenerlas limpias y sanas. Para ello tienen que ser desparasitados y seguir un programa de mantenimiento. Tráiganos a su perro o a su gato y le asignaremos un programa según sus necesidades.</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4><br>Enfermedad </h4>
						<p>Disponemos de laboratorio propio. Esto nos permite obtener los resultados de la mayoría de las pruebas al momento. Con ello conseguimos mayor agilidad a la hora de diagnosticar y asignar el tratamiento veterinario que proceda en cada caso.</p>
					</div>
				</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="col-md-5 contact-section">
				<h4>Forma de Contacto</h4>
					<input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input type="text" class="text" value="Correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<textarea onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='Message';" >Mensaje</textarea>
					<input type="submit" value="ENVIAR">
			</div>
			<div class="col-md-7 follow-us">
				<h4>Siguenos:</h4>
				<div class="social-icons">
					<i class="facebook"></i>
					<i class="twitter"></i>
					<i class="pinterest"></i>
					<i class="googlepluse"></i>
				</div>
				<p>En Territorio Animal buscamos ofrecer el mejor servicio para el cuidado de su mascota</p>
				<div class="copyright">
					<p>Diseñado por <a href="http://w3layouts.com">  W3layouts</a></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</body>
</html>