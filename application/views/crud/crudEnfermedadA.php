<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> Enfermedad | Home :: w3layouts</title>
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
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="<?php echo base_url(); ?>public/crud/js/chartinator.js" ></script>

<!--skycons-icons-->
<script src="<?php echo base_url(); ?>public/crud/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body oncontextmenu="return false">	
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
<div class="cols-grids panel-widget">
	<section>
	<h2>Enfermedad</h2>
		<div class="search-box">
		<form>
			<input type="text" placeholder="Buscar..." required="">	
			<input type="submit" value="" onclick="buscar()">					
		</form>
		</div>
		<div class="clearfix"> </div>
		<hr>
		<div class="form-group w3l agileinfo wthree w3-agileits w3layouts w3l">
		<form id="formularioE" name="formularioC" method="post" action="agregar">
				<label for="codigo" class="control-label">Código Enfermedad</label>
				<input id="codigo" name="codigo" type="text" class="form-control" data-error="Ingrese un codigo de la enfermedad" required>
				<div class="help-block with-errors"></div>

				<label for="codigoM" class="control-label">Código Mascota</label>
				<input id="codigoM" name="codigoM" type="text" class="form-control" data-error="Ingrese un codigo de la mascota" required>
				<div class="help-block with-errors"></div>

				<label for="tipo" class="control-label">Tipo de Enfermedad</label>
				<div class="select">
						<form name='tipo' id='tipo'>
						<select id="tipo" name='tipo'>
						    <option value="Borreliosis">Borreliosis</option>
						    <option value="Campilobacteriosos">Campilobacteriosos</option>
						    <option value="La Rabia">La Rabia</option>
						    <option value="Sarna Sarcóptica">Sarna Sarcóptica</option>
						    <option value="Hidatidiosis">Hidatidiosis</option>
						    <option value="Toxoplamosis">Toxoplamosis</option>
						    <option value="Microbacteriosis">Microbacteriosis</option>
						    <option value="Psitacosis">Psitacosis</option>
						</select>
						</form>
				</div>
				</form>	

				<label for="fecha" class="control-label">Fecha</label>
				<input id="fecha" name="fecha" type="text" class="form-control" data-error="Ingrese un apellido" required>
				<div class="help-block with-errors"></div>

				<label for="descripcion" class="control-label">Descripción</label>
				<input id="descripcion" name="descripcion" type="text" class="form-control" data-error="Ingrese una descripción" required>
				<div class="help-block with-errors"></div>

				<label for="medicamento" class="control-label">Medicamentos</label>
				<input id="medicamento" name="medicamento" type="text" class="form-control" data-error="Ingrese un medicamento" required>
				<div class="help-block with-errors"></div>

				<label for="estado" class="control-label">Estado</label>
				<div class="select">
						<form name='estado' id='estado'>
						<select id="estado" name='estado'>
						    <option value="Incubación">Incubación</option>
						    <option value="Invasión">Invasión</option>
						    <option value="Crisis">Crisis</option>
						    <option value="Convalecencia">Convalecencia</option>
						    <option value="Curación">Curación</option>
						</select>
						</form>
				</div>
				</form>	

				<label for="fechaSal" class="control-label">Fecha Salida</label>
				<input id="fechaSal" name="fechaSal" type="text" class="form-control" data-error="Ingrese un apellido" required>
				<div class="help-block with-errors"></div>
				</form>	
			</div>
		
		<div id="toolbar" class="form-group">
			<button type="button" class="btn btn-lg" onclick="guardar()"><i class="fa fa-plus-square"></i> Agregar</button>
			<button type="submit" class="btn btn-lg" onclick="guardar()"><i class="fa fa-pencil-square"></i> Editar</button>
			<button type="submit" class="btn btn-lg" onclick="eliminar()"><i class="fa fa-trash"></i> Eliminar</button>
		</div>
	<div class="clearfix"></div>
	<hr>
	<div class="tabla">
	<table id="dg" title="Información Clientes" style="width:1024px;height:250px"
        url="cliente" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="codigo">Código Enfermedad</th>
			    <th field="codigoM">Código Mascota</th>
			    <th field="tipo">Tipo de Enfermedad</th>
			    <th field="fecha">Fecha</th>
			    <th field="descripcion">Descripción</th>
			    <th field="medicamento">Medicamentos</th>
			    <th field="estado">Estado</th>
			    <th field="fechaSal">Fecha Salida</th>
			    <!--<th field="codMascota">Código Mascota</th>-->
	        </tr>
        </thead>		
		<?php foreach($listEnfermedad as $enfermedad): ?>
		<?php
			echo '<tr class="fila"><td class="codigo">'.$enfermedad['codigo'].'</td><td class="codigoM">'.$enfermedad['codigoMascota'].'</td><td class="tipo">'.$enfermedad['tipo'].'</td><td class="fecha">'.$enfermedad['fecha'].'</td><td class="descripcion">'.$enfermedad['descripcion'].'</td><td class="medicamento">'.$enfermedad['codigoMedicamento'].'</td><td class="estado">'.$enfermedad['estado'].'</td><td class="fechaSal">'.$enfermedad['fechaSalida'].'</td></tr>';?>
		<?php endforeach; ?>
    </table>
    </div>
</section>
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
		        <li id="menu-home" ><a href="http://localhost/tanimal/index.php/Navegacion/usuarioAd"><i class="fa fa-home"></i><span>Inicio</span></a></li>
		        <li><a href="../../index.php/MasCd/mascota"><i class="fa fa-paw"></i><span>Mascotas</span><span></span></a></li>
		        <li><a href="../../index.php/ClieCd/cliente"><i class="fa fa-user-plus"></i><span>Clientes</span><span></span></a></li>
		        <li><a href="../../index.php/VetCd/veterinario"><i class="fa fa-user-md"></i><span>Veterinarios</span><span></span></a></li>
		        <li><a href="../../index.php/SeCd/secretario"><i class="fa fa-male"></i><span>Secretarios</span><span></span></a></li>
		        <li><a href="../../index.php/MedCd/medicamento"><i class="fa fa-medkit"></i><span>Medicamentos</span><span></span></a></li>
		        <li><a href="#"><i class="fa fa-heartbeat"></i><span>Servicios</span><span class="fa fa-angle-right" style="float:right"></span></a>
		          <ul>
		            <li><a href="../../index.php/EnfCd/enfermedad"><i class="fa fa-plus-square"></i><span>Enfermedad</span></a></li>
		            <li><a href="../../index.php/VacCd/vacunar"><i class="fa fa-plus-square"></i><span>Vacunar</span></a></li>
		            <li><a href="../../index.php/DesCd/desparasitar"><i class="fa fa-plus-square"></i><span>Desparasitar</span></a></li>
		            <li><a href="../../index.php/EstCd/esterilizar"><i class="fa fa-plus-square"></i><span>Esterilizar</span></a></li>          
		          </ul>
		        </li>
		        <li><a href="../.."><i class="fa fa-sign-out"></i><span>Cerrar Sesión</span></a></li>
		        </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>

<!--scrolling js-->
		<script src="<?php echo base_url(); ?>public/crud/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url(); ?>public/crud/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url(); ?>public/crud/js/bootstrap.js"> </script>
<!-- mother grid end here-->
<script type="text/javascript">

        function guardar(){
        	document.getElementById("formularioE").submit();
         	//document.formularioC.submit();       
        }

        function eliminar(){
            window.location.reload(true);
           $.post( "eliminar", { key: valor=$('#codigo').val() });  
        }

	function buscar(){
		Object.get = function(obj) {
		    var size= new Array(); 
		    res = new Object; var key, i=0;
		    for (key in obj) {
			size[i]={cedula:obj[i].cedula,nombres:obj[i].nombres,apellidos:obj[i].apellidos,telefono:obj[i].telefono,direccion:obj[i].direccion,correo:obj[i].correo};
			i++;
		    }
		    return size;
		};
		$.post( "listarFiltroCliente", { key: valor=$('#cedula').val() })
		  .done(function( data ) {
		  var res = data.split("----");
		  var info = new Object();
		  for(i=0; i<res.length-1; i++){
			var res2 = res[i].split("::::");
			info[i]={"cedula":res2[0],"nombres":res2[1],"apellidos":res2[2],"telefono":res2[3],"direccion":res2[4],"correo":res2[5]};
		  }
		  var data2 = {"total":Object.keys(info).length,"rows":Object.get(info)};
		  $('#dg').datagrid('loadData', data2);
		  });
	}
	//Editar
	$(".fila").click(function(e){ //boton
		 e.preventDefault();
		  var codigo=$(this).find(".codigo").html();
		  var codigoM=$(this).find(".codigoM").html();
		  var tipo=$(this).find(".tipo").html();
		  var fecha=$(this).find(".fecha").html();
		  var descripcion=$(this).find(".descripcion").html();
		  var medicamento=$(this).find(".medicamento").html();
		  var estado=$(this).find(".estado").html();
		  var fechaSal=$(this).find(".fechaSal").html();
		  $('#codigo').val(codigo);
		  $('#codigoM').val(codigoM);
		  $('#tipo').val(tipo); 
		  $('#fecha').val(fecha); 
		  $('#descripcion').val(descripcion); 
		  $('medicamento').val(medicamento); 
		  $('#estado').val(estado);
		  $('#fechaSal').val(fechaSal); 
	});
</script>

</body>
</html>                     