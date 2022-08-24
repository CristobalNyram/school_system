<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<!--======================================== Boton ir arriba ========================================-->
	<i class="btn-up fa fa-arrow-circle-o-up hidden-xs"></i>
	<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
		<!--======================================== Logo(Nombre INS) ========================================-->
		<div class="full-reset logo">
			<span class="hidden-lg hidden-md">J.D.P.</span>
			<span class="hidden-xs hidden-sm">Juan de Dios Peza</span>
		</div>
		<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="index.html">Inicio</a></li>
				<li><a href="institucion.html">¿Quienes somos?</a></li>
				<li><a href="secretaria.html">Servicios Escolares</a></li>
				<li><a href="#" class="btm-mega-menu">Más &nbsp;<i class="fa fa-caret-down"></i></a></li>
				<li><a href="../index.php">Iniciar sesión</a></li>
			</ul>
		</nav>
		<!--======================================== Mega menu ========================================-->
		<div class="full-reset mega-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<span class="full-reset titles">Información del plantel</span>
						<ul class="list-unstyled full-reset">
							<ul class="list-unstyled full-reset">
								<li><a href="galeria.html" class="open-link-newTab"><i class=""></i>&nbsp; Galeria</a></li>
								<li><a href="bachilleratos.html" class="open-link-newTab"><i class=""></i>&nbsp; Institución</a></li>
							</ul>
					</div>
				</div>
			</div>
			<i class="fa fa-times-circle btm-mega-menu close-mega-menu fa-2x"></i>
		</div>
		<!--======================================== Boton menu mobil ========================================-->
		<a href="#" class=" hidden-sm hidden-md hidden-lg pull-right button-menu-mobile show-close-menu-m"><i class="fa fa-ellipsis-v"></i></a>
	</header>
	<!--======================================== Logo & Lema ========================================-->
	<section class="full-reset font-cover" style="background-image: url(assets/img/font-index1.jpg);">
		<div class="full-reset" style="height: 100%; background-color: rgba(255,255,255,.6); padding: 60px 0;">
			<h1 class="text-center titles">Juan de Dios Peza</h1>
			<figure class="Logo-Ins-Index">
				<img src="assets/img/logo2.jpeg" alt="Logo" class="img-responsive">
			</figure>
			<p class="lead text-center">
				"Construyendo el Futuro"
			</p>
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== carrusel========================================-->
	<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
		<div class="container">
			<h2 class="text-center titles">Información Estudiantil</h2>
			<br><br>
			<!--======================================== Carrusel ========================================-->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-push-6">
					<h3 class="text-center titles"> Instalaciones</h3>
					<p class="lead"> La escuela telesecundaria cuenta actualmente con 3 secciones educativas de las cuales se encuentran divididas de la siguiente forma:
					<br>
						 1er sección para 1° y 2° grado escolar cómo también la dirección de plantel y biblioteca.
						 2a sección para comedor, bodega y sanitarios.<br>
						
						3a sección para 3er grado escolar cómo también algunos laboratorios que aún no están en funcionamiento por la pausa momentánea.
					<a href="galeria.html" class="open-link-newTab">Galeria</a>
					</p>
					<i class="fa fa-picture-o icon-index hidden-xs hidden-sm"></i>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-pull-6">
					<div id="slider-ins" class="carousel slide" data-ride="carousel">
					  <!-- Indicadores -->
					  <ol class="carousel-indicators">
					    <li data-target="#slider-ins" data-slide-to="0" class="active"></li>
					    <li data-target="#slider-ins" data-slide-to="1"></li>
					    <li data-target="#slider-ins" data-slide-to="2"></li>
					  </ol>

					  <!-- Imagenes -->
					  <div class="carousel-inner" role="listbox">
						
						<!-- Primera imagen -->
					    <div class="item active">
					      <img src="assets/gallery/1.jpg" alt="Default">
					      <div class="carousel-caption">
					        
					      </div>
					    </div>
						
						<!-- Segunda imagen -->
					    <div class="item">
					      <img src="assets/gallery/2.jpg" alt="Default">
					      <div class="carousel-caption">
					       
					      </div>
					    </div>
						
						<!-- Tercera imagen -->
					    <div class="item">
					      <img src="assets/gallery/3.jpg" alt="Default">
					      <div class="carousel-caption">
					        
					      </div>
					    </div>
					    
					  </div>

					  <!-- Controles -->
					  <a class="left carousel-control" href="#slider-ins" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Atras</span>
					  </a>
					  <a class="right carousel-control" href="#slider-ins" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Siguiente</span>
					  </a>
					</div>
				</div>
			</div>
			<br>
			<div class="divider-general"></div>
			<br>
			
	<!--======================================== Acontecer institucional ========================================-->
	<section class="events-ins">
		<div class="container-fluid">
			<h2 class="text-center titles">Noticias </h2>
			<br><br>
			<div class="row">
				<!--======================================== Articulo 1 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/benito.jpg" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center">Beca Benito Juárez</h3>
				        <p class="text-justify">Se otorgará a los alumnos con promedio de 9 en adelante</p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver noticia</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 2 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/5.jpg" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center">Puente de vacaniones del mes</h3>
				        <p class="text-justify">Las vacaciones iniciaran de Septiembre a Noviembre en los dias.</p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver noticia</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 3 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/6.jpg" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center">Celebraacion del natalició </h3>
				        <p class="text-justify">Se conmemorá el nacimiento del héroe de la independencia.</p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver noticia</a></p>
				      </div>
				    </div>
				</article>
			</div>
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== Pie de pagina ========================================-->
	<footer class="full-reset footer">
		<div class="full-reset" style="padding: 15px 0;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Aviso de privacidad</h4>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Tratamiento de datos</h4>
					</div>
					<div class="col-xs-12 col-sm-4">
						<h4 class="titles text-center">Calle 3 Poniente No. 21, San Lorenzo Ometepec, Tochtepec, Puebla, C.P. 75617</h4>	
					</div>
					
					<div class="col-xs-12">
						<div class="full-reset footer-copyright"><i class="fa fa-copyright"></i> 2022 Juan de Dios Peza</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>