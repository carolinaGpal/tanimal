<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> Administrador | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo base_url(); ?>public/crud/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>public/crud/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="<?php echo base_url(); ?>public/crud/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="<?php echo base_url(); ?>public/crud/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="<?php echo base_url(); ?>public/crud/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="<?php echo base_url(); ?>public/crud/lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="<?php echo base_url(); ?>public/crud/js/chartinator.js" ></script>

<!--skycons-icons-->
<script src="<?php echo base_url(); ?>public/crud/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									<img id="logo" src="<?php echo base_url(); ?>public/images/logo.png" alt=""/>
								  </a> 								
							</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="<?php echo base_url(); ?>public/crud/images/p2.png" alt=""> </span> 
												<div class="user-name">
													<p>Pepito Perez</p>
													<span>Administrador</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Configuración</a> </li> 
											<li> <a href="perfilA.html"><i class="fa fa-user"></i> Perfil</a> </li> 
											<li> <a href="../index.html"><i class="fa fa-sign-out"></i> Cerrar Sesión</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
	<div>
	<h1>BIENVENIDO</h1>
	<p><br>En este lugar podrás encontrar toda la información relacionada con Territorio Animal, como las mascotas, dueños, veterinarios, secretarios, servicios, medicamentos.</p>
	</div>
</div>
<!--copy rights start here-->
	<div class="cpyrights">
	 <p>© 2017 Territorio Animal. | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="Administrador.html"><i class="fa fa-home"></i><span>Inicio</span></a></li>
		        <li><a href="crudMA"><i class="fa fa-paw"></i><span>Mascotas</span><span></span></a></li>
		        <li><a href="crudCA"><i class="fa fa-user-plus"></i><span>Clientes</span><span></span></a></li>
		        <li><a href="crudVA"><i class="fa fa-user-md"></i><span>Veterinarios</span><span></span></a></li>
		        <li><a href="crudSA"><i class="fa fa-male"></i><span>Secretarios</span><span></span></a></li>
		        <li><a href="crudMedA"><i class="fa fa-medkit"></i><span>Medicamentos</span><span></span></a></li>
		        <li><a href="#"><i class="fa fa-heartbeat"></i><span>Servicios</span><span class="fa fa-angle-right" style="float:right"></span></a>
		          <ul>
		            <li><a href="crudEnfA"><i class="fa fa-plus-square"></i><span>Enfermedad</span></a></li>
		            <li><a href="crudVacA.html"><i class="fa fa-plus-square"></i><span>Vacunar</span></a></li>
		            <li><a href="crudDesA"><i class="fa fa-plus-square"></i><span>Desparasitar</span></a></li>
		            <li><a href="crudEsA"><i class="fa fa-plus-square"></i><span>Esterilizar</span></a></li>          
		          </ul>
		        </li>
		        <li><a href="index"><i class="fa fa-sign-out"></i><span>Cerrar Sesión</span></a></li>
		        </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>

<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="<?php echo base_url(); ?>public/crud/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url(); ?>public/crud/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url(); ?>public/crud/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     