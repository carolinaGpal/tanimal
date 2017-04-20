<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Territorio Animal | Inicio :: w3layouts</title>
<link href='<?php echo base_url(); ?>public/css/bootstrap.css' rel='stylesheet' type='text/css'>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>public/js/jquery.min.js" rel="stylesheet"></script>
<!-- Custom Theme files -->
<link href='<?php echo base_url(); ?>public/css/style.css' rel='stylesheet' media='all' type='text/css'>
<!-- Custom Theme files -->
<!-- navigation -->
<link href="<?php echo base_url(); ?>public/css/component.css" rel="stylesheet" type="text/css">
<!-- navigation -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>public/js/responsiveslides.min.js" rel="stylesheet" type="text/css" ></script>

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
					<a href="index.php"><img src="<?php echo base_url(); ?>public/images/logo.png" /></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>
					<nav class="cl-effect-5">
						<li><a class="active" href="../tanimal/index.php/Navegacion/index"><span data-hover="Inicio">Inicio</span></a></li> 
						<li><a href="../tanimal/index.php/Navegacion/acerca"><span data-hover="AcercaDe">Acerca De</span></a></li>
						<li><a href="../tanimal/index.php/Navegacion/servicios"><span data-hover="Servicios">Servicios</span></a></li>  
						<li><a href="../tanimal/index.php/Navegacion/contacto"><span data-hover="Contacto">Contacto</span></a></li>
						<li><a href="../tanimal/index.php/Navegacion/sesion"><span data-hover="IniciarSesión">Iniciar Sesión</span></a></li>
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
	<!-- header-section-ends -->
	<div class="banner">
		
	<div class="slider">	  
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				 <li>
					 <img src="<?php echo base_url(); ?>public/images/3.jpg" alt=""/>
					  <div class="caption">
						<h2>Hasta que no hayas amado a un animal una parte de tu alma permanecerá dormida.</h2>
					  </div>
				 </li>
				 <li>
					 <img src="<?php echo base_url(); ?>public/images/2.jpg" alt=""/>
					  <div class="caption">
						<h2>Un perro es lo único en la Tierra que te ama más que de lo que te amas a tí mismo.</h2>
					  </div>
				 </li>
				 <li>
					 <img src="<?php echo base_url(); ?>public/images/1.jpg" alt=""/>
					  <div class="caption">
						<h2>El dinero puede comprar un buen perro, pero sólo el amor puede hacer que mueva la cola.</h2>
					  </div>
				 </li>
			  </ul>	      
		  </div>
	</div>
	</div>
	<!-- content-section-starts -->
		<div class="content">
			<div class="welcome-section">
				<div class="container">
					<div class="col-md-6 welcome-grid text-center">
						<h3>BIENVENIDO</h3>
						<h5>"La grandeza de una nación y su progreso moral puede ser juzgado por la forma en que sus animales son tratados"</h5>
						<p>En Territorio Animal podrás encontrar todos los servicios y cuidados para tu mascota, con la certeza de que serán tratados
						por los mejores profesionales de la región</p>
					</div>
					<div class="col-md-6 images">
						<div class="img1">
							<img src="<?php echo base_url(); ?>public/images/a1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img2">
						<img img src="<?php echo base_url(); ?>public/images/a2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="about-section text-center">
				<div class="container">
					<h2>ACERCA</h2>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Misión </h4>
						<p>Crear conciencia social para el bienestar animal, fortaleciendo el vínculo emocional que existe entre las personas y sus animales de compañía, mediante la prestación de nuestros servicios médicos veterinarios y complementarios a la comunidad</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Visión </h4>
						<p>Ofrecer y realizar servicios veterinarios de gran calidad y alto nivel técnico y científico, dirigidos a nuestros clientes y a sus mascotas para satisfacer con excelencia sus necesidades.</p>
					</div>
					<div class="clearfix"></div>
					<a href="about.html" class="btn btn-1 btn-1c">Leer más</a>
				</div>
			</div>
			<div class="textimonials-section text-center">
				<div class="container">
					<img src="<?php echo base_url(); ?>public/images/t.png" alt="" />
					<h5>Podemos juzgar el corazón de una persona por la forma en que trata a los animales</h5>
					<p>Immanuel Kant</p>
					
				</div>
			</div>
		</div>
	<!-- content-section-ends -->
	<!--<div class="main-map">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d396369.7968760607!2d-94.5757195!3d39.091919000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0f75eafe99997%3A0x558525e66aaa51a2!2sKansas+City%2C+MO%2C+USA!5e0!3m2!1sen!2sin!4v1416895090472"  frameborder="0" style="border:0"></iframe>
		</div> -->

	<!-- footer-section-starts -->
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
	<!-- footer-section-ends -->
	<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>