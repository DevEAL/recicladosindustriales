<?php
  # Iniciando la variable de control que permitirá mostrar o no el modal
  $exibirModal = false;
  # Verificando si existe o no la cookie
  if(!isset($_COOKIE["mostrarModal"]))
  {

    $expirar = 43200; //muestra cada 12 horas
    setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
    # Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
    $exibirModal = true;
  }
?>

<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!-- IE Compatibility Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- First Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reciclados Industriales</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/swiper.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/owl.theme.default.min.css"/>
	<link rel="stylesheet" href="css/style.css"/> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
	integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"  crossorigin="anonymous">
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Oswald:400,700" rel="stylesheet">

	<link rel="stylesheet" href="chatWp/floating-wpp.min.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142690761-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-142690761-1');
	</script>

</head>
<body>

	<!-- load-wrapp -->
	<div class="load-wrapp">
		<div id="bm" class="wrap">
			<ul class=dots-box></ul>
		</div>
	</div>
	<!-- end load-wrapp -->

	<!-- header -->
	<header id="main-header" class="header navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="images/logo_reciclad.svg" class="img-responsive pic-1" alt="logo"> 
					<img src="images/logo_reciclad.svg" class="img-responsive pic-2" alt="logo"> 
				</a>
			</div>
			<nav id="myNavbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="nosotros.php">NOSOTROS </a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" type="button" data-toggle="dropdown">PRODUCTOS
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#product">Materiales Granulares</a></li>
							<li><a href="#prefabricados">Prefabricados</a></li>
						</ul>
					</li>
					<li><a href="#ventajas">VENTAJAS</a></li>
					<li><a href="#contact">CONTACTO </a></li>
					<li class="logo-novo">
						<a href="http://novoecoprefabricados.com/">
							<img class="logo_bw" src="images/novo-wg-logo.svg" alt="logo novo ecoprefabricados">
							<img class="logo_color" src="images/logo_novo_gg.svg" alt="logo novo ecoprefabricados">
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- end header -->

	<!-- Swiper-container -->
	<div class="swiper-container" id="home">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image: url(images/welcome2.jpg);background-position: center;    background-position: 50% 50%;">
				<div class="overlay-bg">
					<div class="container">
						<div class="row atention">
							<div class="col-md-offset-4 col-md-8">
								<h2>Usamos sus <span>residuos de construcción</span> para promover el <span>desarrollo de ciudades sostenibles</span></h2>
							</div>
							<div class="col-md-offset-4 col-md-8 btn-cotizar">
								<button class="btn btn-cot-home" role="button" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</button>
							</div>
						</div>
						<div class="scroll">
							<img class="bounce" src="images/scroll.png" alt="">
						</div>
					</div>
				</div>  
			</div>
		</div>
	</div>
	<!-- end swiper-container -->

	<!-- Description-Section -->
	<section class="about" id="fondo_icons">
		<div class="container">

			<div class="row">
				<div class="content_title wow fadeInUp" data-wow-duration="2s">
					<div class="title_about">
						<h1>LO<strong class="title_strong"> HACEMOS BIEN, </strong><br>  LO HACEMOS POR SU BIEN Y EL DEL MEDIO AMBIENTE</h1>
					</div>
				</div>
				<div class="separador wow fadeInUp" data-wow-duration="2s">
					<hr class="wow fadeInUp" data-wow-duration="4s">
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="about_coments wow fadeInUp" data-wow-duration="2s">
						<p><strong class="color-text">reciclados industriales</strong> es la primera compañía de Colombia dedicada al  aprovechamiento de residuos de construcción  y demolición, buscando el cuidado del medio ambiente y  promoviendo procesos de construcción  y desarrollo urbano sostenible.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail wow fadeInUp" data-wow-duration="1s">
						<img src="images/icons2.png" alt="...">
						<div class="caption">
							<h3>Suministro de materiales granulares</h3>
							<p><a href="nosotros.php#conten_about" class="btn btn-3" role="button">Ver más</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail wow fadeInUp" data-wow-duration="2s">
						<img src="images/icons4.png" alt="...">
						<div class="caption">
							<h3>Prefabricados<br><br></h3> 
							<p><a href="#prefabricados" class="btn btn-3" role="button">Ver más</a></p>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail wow fadeInUp" data-wow-duration="3s">
						<img src="images/icons1.png" alt="...">
						<div class="caption">
							<h3>Disposición certificada de RCD<br> y normatividad ambiental</h3>
							<p><a href="nosotros.php#disposicion" class="btn btn-3" role="button">Ver más</a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!--  Materiales -->
	<section id="product">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>MATERIALES</h1>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="owl-1 owl-carousel owl-theme">

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/BASE_GRANULAR_TIPO_A.jpg" alt="">
						<div class="cont_title">
							<h3>BASE GRANULAR<br>TIPO A BG-A</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal5">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/BASE_GRANULAR_TIPO_B.jpg" alt="">
						<div class="cont_title">
							<h3>BASE GRANULAR<br>TIPO B BG-B</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal6">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/BASE_GRANULAR_TIPO_C.jpg" alt="">
						<div class="cont_title">
							<h3>BASE GRANULAR<br>TIPO C BG-C</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal3">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/sub-bases.jpg" alt="">
						<div class="cont_title">
							<h3>SUB BASE GRANULAR<br>TIPO A SBG-A</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal1">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/SUB_BASE_TIPO_B.jpg" alt="">
						<div class="cont_title">
							<h3>SUB BASE GRANULAR<br>TIPO B SBG-B</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal2">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/SUB_BASE_GRANULAR_TIPO_C.jpg" alt="">
						<div class="cont_title">
							<h3>SUB BASE GRANULAR<br>TIPO C SBG-C</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal3">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<!-- Pendientes SUB BASE GRANULAR ASFALTICA -->

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/SUB_BASE_GRANULAR_TIPO_PEA_1.jpg" alt="">
						<div class="cont_title">
							<h3>SUB BASE GRANULAR TIPO PEA</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal4">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4  btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/B_200.jpg" alt="">
						<div class="cont_title">
							<h3>MATERIAL GRANULAR DE MEJORAMIENTO</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal8">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/B_400.jpg" alt="">
						<div class="cont_title">
							<h3>B 400</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal8">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4 btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/B_600.jpg" alt="">
						<div class="cont_title">
							<h3>B 600 </h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal8">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4  btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/arena_de_concreto.jpg" alt="">
						<div class="cont_title">
							<h3>ARENA</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal7">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4  btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/gravas_de_concreto.jpg" alt="">
						<div class="cont_title">
							<h3>GRAVAS-GRAVILLA</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal8">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4  btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/ARENA_ESCOMBRO_RCD.jpg" alt="">
						<div class="cont_title">
							<h3>ARENA ESCOMBRO</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal7">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4  btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

					<!-- Pendiente GRAVA ESCOMBRO -->

					<div class="item">
						<img src="images/IMGS_SLIDER_PRODUCTOS/rajon.jpg" alt="">
						<div class="cont_title">
							<h3>RAJON</h3>
						</div>
						<div class="cont_buttom">
							<p class="btn-text"><a href="" class="btn btn-5 btn-lg" type="button" data-toggle="modal" data-target="#myModal8">Ver Ficha</a></p>
							<p class="btn-text"><a href="" class="btn btn-4  btn-lg" type="button" data-toggle="modal" data-target="#cotizarModalMate">Cotizar</a></p>
						</div>
					</div>

				</div>

				<div class="my-owl-nav">
					<span class="my-prev-button">
						<i class="fas fa-chevron-circle-left" aria-hidden="true"></i>
					</span>
					<span class="my-next-button">
						<i class="fas fa-chevron-circle-right" aria-hidden="true"></i>
					</span>
				</div>

			</div>
		</div>
	</section>

	<section id="ventajas">
		<section class="vent1"></section>
		<div class="container-fluid">
			<div class="row bg_ventajas">
				<div class="col-sm-12 col-md-5 venTitle wow fadeInRight" data-wow-duration="2s">
					<h2>VENTAJAS MEDIOAMBIENTALES</h2>
					<hr>
				</div>
				<div class="col-sm-12 col-md-7 list wow fadeInRight" data-wow-duration="2s">
					<ul> 
						<li><img src="images/icon_list.png" alt=""> Ayudamos en el cumplimiento de la normatividad ambiental en la gestión de escombros y RCD.</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Reducción de la contaminación de humedales y cuencas de ríos.</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Reducción de la explotación de recursos naturales minas y canteras.</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Disminución de la invasión de espacios públicos, vías y lotes con escombros.</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Construcción y desarrollo urbano sostenible</li>
					</ul>
				</div>
			</div>
		</div>
		<section class="vent2"></section>
		<div class="container-fluid">
			<div class="row bg_ventajas">
				<div class="col-sm-12 col-md-5 venTitle wow fadeInLeft" data-wow-duration="2s">
					<h2>VENTAJAS OPERACIONALES</h2>
					<hr>
				</div>
				<div class="col-sm-12 col-md-7 list wow fadeInLeft" data-wow-duration="2s">
					<ul>
						<li><span><img src="images/icon_list.png" alt=""></span> Contamos con 3 plantas ubicadas estratégicamente, más cerca de sus obras</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Ahorros en tiempos de desplazamientos, mayor número de viajes de material al día</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Ahorro en tiempo de cargue del material</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Rápida disposición de los Residuos de construcción y demolición, sin filas ni demoras</li>
						<li><span><img src="images/icon_list.png" alt=""></span> Entrega digital de las certificaciones ambientales</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Prefabricados -->
	<section id="prefabricados">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>prefabricados</h1>
						<div class="separador">
							<hr class="wow fadeInUp" data-wow-duration="4s">
						</div>
					</div>	
				</div>
			</div>

			<div class="row">
  				<div class="col-md-6 texto-novo">
  					<p>Su mejor aliado para el <span>suministro de prefabricados de concreto</span>, producidos con materiales ambientalmente responsables, contribuyendo al cumplimiento de la normatividad y a la construcción de una ciudad más sostenible.</p>
				</div>
  				<div class="col-md-6 logo-novo">
					  <p>Ingresa a nuestra pagina web aquí:</p>
					  <a href="http://novoecoprefabricados.com" target="_blank">
						  <img src="images/logo_novo_gg.svg" alt="">
					  </a>
				</div>
			</div>
		</div>
	</section>

	<!-- Notas de prensa -->
	<section id="prensa">
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>NOTAS DE PRENSA</h1>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="owl-2 owl-carousel owl-theme">
					<!-- Articulo #1 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/la_w.jpg" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>La W &nbsp;</span> [Bogotá, D. C.​​] 
									<br>
									<time>10 / 04 / 2013</time></small>
								</div>
								<h5>"Alejandro Vallejo, habla de su empresa de reciclaje de escombros"</h5>
							</div>
						</div>

						<div>
							<a href="http://www.wradio.com.co/escucha/archivo_de_audio/alejandro-vallejo-habla-de-su-empresa-de-reciclaje-de-escombros/20130410/oir/1875609.aspx" target="_blank"><button class="btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #2 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/dinero.jpg" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>Dinero</span> [Bogotá, D. C.​​]
									<br>
									<time> 10 / 04 / 2013 </time></small>
								</div>
								<h5>"Emprendedores se encargan de mitigar el impacto de los desechos industriales"</h5>
							</div>
						</div>

						<div>
							<a href="https://www.dinero.com/emprendimiento/multimedia/tratamiento-de-los-reciclados-industriales-en-colombia/226350" target="_blank"><button class= "btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #3 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/portafolio.png" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>Portafolio</span>[Bogotá, D. C.​​] 
									<br>
									<time> 05 / 06 / 2015</time></small>
								</div>
								<h5>"Petrolera y recicladores ganaron premio de la CCB "</h5>
							</div>
						</div>

						<div>
							<a href="https://www.portafolio.co/negocios/empresas/petrolera-recicladores-ganaron-premio-ccb-32246" target="_blank"><button class="btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #4 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/aim2.jpg" alt="">
							<div class="descripcion">
								<div class="autor">
									<small>Vergara.Monica.<span>Aim 2 flourish</span>[Cleveland, Ohio]
									<br>
									<time> 10 Marzo 1195</time> </small>
								</div>
								<h5>"Environmental Rubble Management. Reciclados Industriales de Colombia"</h5>
							</div>
						</div>

						<div>
							<a href="https://aim2flourish.com/innovations/environmental-rubble-management" target="_blank"><button class= "btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #5 -->
					<!-- <div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/mprende.jpeg" alt="">
							<div class="descripcion">
								<div class="autor"><small>Nota de Prensa.<span>M Prende</span>[Bogotá, D. C.​​]
									<br>
									<time>11 / 7 / 2017</time></small> 
								</div>
								<h5>"Reciclados Industriales, una compañía responsable"</h5>
							</div>
						</div>

						<div>
							<a href="http://mprende.co/medio-ambiente/reciclados-industriales-una-compa%C3%B1%C3%ADa-responsable" target="_blank" target="_blank"><button class="btn btn-3">Ver más</button></a>
						</div>
					</div> -->

					<!-- Articulo #6 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/CCB.png" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>Camara de Comercio de Bogota</span>[Bogotá, D. C.​​] 
									<br>
									<time> 05 / 06 / 2015</time></small>
								</div>
								<h5>"Reciclados Industriales de Colombia recibio II Premio al Valor Compartido"</h5>
							</div>
						</div>

						<div>
							<a href="https://www.ccb.org.co/Sala-de-prensa/Noticias-CCB/2015/Junio/Independence-Drilling-y-Reciclados-Industriales-de-Colombia-recibieron-II-Premio-al-Valor-Compartido" target="_blank"><button class= "btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #7 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/fbolivard.jpg" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>Fundacion Bolivar Davivienda</span>[Bogotá, D. C.​​]
									<br>
									<time> 05 / 06 / 2015</time></small>
								</div>
								<h5>"Reciclados Industriales convirtió un problema ambiental en un modelo de negocio exitoso."</h5>
							</div>
						</div>

						<div>
							<a href="https://www.fundacionbolivardavivienda.org/casos_de_exito/reciclados-industriales/" target="_blank"><button class="btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #8 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/la_patria.png" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>La Patria</span>[Bogotá, D. C.​​]
									<br>
									<time> 17 / 03 / 2014</time></small>
								</div>
								<h5>"Convierten escombros en materiales de construcción"</h5>
							</div>
						</div>
						<div>
							<a href="http://www.lapatria.com/economia/encontrar-inversionistas-el-reto-de-las-mentes-brillantes-62751" target="_blank"><button class= "btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #9 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/unal.jpg" alt="">
							<div class="descripcion">
								<div class="autor">
									<small><span>Agencia de Noticas UN</span>[Manizales,Caldas]
									<br>
									<time>29 / 07 / 2015</time></small>
								</div>
								<h5>"Cámara de Comercio de Bogotá premió empresa de egresados de la U.N."</h5>
							</div>
						</div>
						<div>
							<a href="http://agenciadenoticias.unal.edu.co/detalle/article/camara-de-comercio-de-bogota-premio-empresa-de-egresados-de-la-un.html" target="_blank"><button class="btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #10 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/el_espectador.jpg" alt="">
							<div class="descripcion">
								<div class="autor">
									<small>Zapata.Ricardo.<span>El Espectador</span>[Bogotá, D. C.​​]
									<br>
									<time> 23 / 08 / 2008</time></small>
								</div>
								<h5>"La reivindicaciónde los escombros. Reconocimiento de la Andi"</h5>
							</div>
						</div>
						<div>
							<a href="https://www.elespectador.com/impreso/negocios/articuloimpreso-reivindicacionde-los-escombros" target="_blank"><button class= "btn btn-3">Ver más</button></a>
						</div>
					</div>

					<!-- Articulo #11 -->
					<div class="thumbnail contenedor">
						<div>
							<img class="img-fluid" src="images/Prensa/logos/caracol.png" alt="">
							<div class="descripcion">
								<div class="autor">
									<small>Gomez.Mauricio.<span>Noticias Caracol</span>[Bogotá, D. C.​​]
									<br>
									<time> 15 / 03 / 2019</time></small>
								</div>
								<h5>"¿Cómo se hace el reciclaje de desechos de construcción?"</h5>
							</div>
						</div>
						<div>
							<a href="https://www.youtube.com/watch?v=Y0wYrrdN48Q&feature=youtu.be" target="_blank"><button class= "btn btn-3">Ver más</button></a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>

	<!-- Seccion CLientes -->
	<section id="clientes">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title">
						<h1>CLIENTES</h1>
							<div class="separador wow fadeInUp"data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
							<hr>
						</div>
					</div>	
				</div>
			</div>
			<div class="owl-clientes owl-carousel owl-theme">
				<div class="item logos">
					<img src="images/Clientes/acueducto_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/amarilo_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/arquiyConc_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/byr_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/cam_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/camacon_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/cca_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/colpatria_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/concrescol_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/conycon_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/csi_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/cusezar_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/dobleA_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/enTuObra_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/g2_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/galias_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/gama_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/grupoYS_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/idrd_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/idu_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/jmv_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/lares_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/paviColombia_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/paviObras_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/planificadas_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/procopal_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/sofan_logo.png" alt="">
				</div>
				<div class="item logos">
					<img src="images/Clientes/yamill_logo.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- video-area -->
	<section id="video">
		<div class="container-fluid">
			<div class="row">
				<div class="videoWrapper videoWrapper169 js-videoWrapper">
					<video id="video-reci" class="video-reci" src="reciclad_video.mp4" controls></video>
					<!-- the poster frame - in the form of a button to make it keyboard accessible -->
					<button class="videoPoster js-videoPoster" style="background-image:url(images/poster_video.jpg);" onclick="document.getElementById('video-reci').play()">Play video</button>
				</div>
			</div>
		</div>
	</section>

  	<!-- Contact-area -->
  	<section id="contact" class="contact-area sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="title ">
						<h1 class="video_contact animated fadeIn slow">CONTACTO</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="contact-form">
						<form name="sentMessage" id="contactForm" novalidate>
							<div class="row">
								<div class="col-md-7">
									<div class="contact_from_text">
										<h2>PÓNGASE EN CONTACTO CON NOSOTROS</h2>
										<p class="text_contact">Un miembro de nuestro equipo se pondrá en contacto con usted lo más pronto posible.</p>
										<h3 class="title_contact">Teléfonos</h3>
										<p class="text_contact">
											Contacto Comercial: +57 (1) 318 215 3129
											<br>
											Contacto técnico de planta: +57 (1) 310 263 3808
											<br>
											Comercial: 875 9047 – 896 6879
										</p>
										<p class="text_email">Email: info@recicladosindustriales.co</p>
										<p class="icon_redes">
											<a href="https://www.facebook.com/Reciclados-Industriales-de-Colombia-210713349097994/" class="fa-stack ico fa-2x" target="_blank">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
											</a>
											<a href="https://www.youtube.com/user/RecicladosIndustrial" class="ico fa-stack fa-2x" target="_blank">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
											</a>
										</p>
									</div>

								</div>
								<!-- Formulario -->
								<form id="contactForm" action="">
									<div class="col-md-5">
										<div class="form-group">
											<input type="text" placeholder="Nombre *" class="form-control" id="name" required data-validation-required-message="Ingrese su nombre">
											<p class="help-block text-danger"></p>
										</div>
										<div class="form-group">
											<input type="email" placeholder="Email  *" class="form-control" id="email" required data-validation-required-message="Ingrese su correo">
											<p class="help-block text-danger"></p>
										</div>

										<div class="form-group">
											<input type="number" minlength="10" maxlength="11"  placeholder="Teléfono *" class="form-control" id="phone" required data-validation-required-message="Ingrese su numero teléfono">
											<p class="help-block text-danger"></p>
										</div>

										<textarea class="form-control" placeholder="Mensaje" rows="6" id="message"></textarea>
										<p class="help-block text-danger"></p>
										<div id="success"></div>
										<div class="alert alert-danger error">Error!  E-mail por favor revisé su correo electrónico</div>
										<div class="alert alert-success success">Su mensaje se ha enviado correctamente</div>
										<input type="submit" value="Enviar" class="btn btn-default btn-esg" />
										<p><br>* Campos Obligatorios </p>
									</div>
								</form>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="maps">
		<div class="container">
			<div class="row content_direccion">
				<div class="col-md-5">
					<h3 class="title_contact"><span><i class="fas fa-map-marker-alt fa-2x wow fadeOutUp" data-wow-duration="1s"></i></span>  PLANTA AGREGADOS CALLE 80</h3>
				</div>
				<div class="col-md-7">
					<p>Km 1.5 - Costado Sur Vía Bogotá - Siberia. <strong>Cota, Cundinamarca.</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1988.0976934102102!2d-74.1350775!3d4.736091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8366215e7abd%3A0xf8b58be3ad13657!2sReciclados%20Industriales%20-%20Calle%2080!5e0!3m2!1sen!2sco!4v1575309353451!5m2!1sen!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>

			<div class="row content_direccion">
				<div class="col-md-5">
					<h3 class="title_contact"><span><i class="fas fa-map-marker-alt fa-2x wow fadeOutUp" data-wow-duration="1s"></i></span>  PLANTA PREFABRICADOS SIBERIA</h3>
				</div>
				<div class="col-md-7">
					<p>Km 1 - Costado Sur Vía Siberia - Tenjo. <strong> Cundinamarca.</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
						<iframe class="estilos_mapa" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7687.698657224499!2d-74.1585732697663!3d4.7627059040373565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e3f83c781077ea9%3A0xd1fdededb116be12!2sBogot%C3%A1+-+Tenjo%2C+Cota%2C+Cundinamarca!3m2!1d4.76867!2d-74.1564768!5e0!3m2!1ses!2sco!4v1559926426931!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="row content_direccion">
				<div class="col-md-5">
					<h3 class="title_contact"><span><i class="fas fa-map-marker-alt fa-2x wow fadeOutUp" data-wow-duration="1s"></i></span>  PLANTA AGREGADOS SUR</h3>
				</div>
				<div class="col-md-7">
					<p>Costado Oriental Vía Avenida Longitudinal de Occidente - Bosa el recreo - Vereda la Victoria - Finca las Juntas. <strong>Mosquera, Cundinamarca.</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-11 col-md-offset-1">
					<iframe class="estilos_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7877231569314!2d-74.22588419631995!3d4.6319248001585445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMzgnMDEuMCJOIDc0wrAxMycxNS4xIlc!5e0!3m2!1ses!2sco!4v1554936160242!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- end contact-area -->

	<!-- Boton WP -->
	<div class="floating-wpp"></div>

	<!-- footer -->
	<img class="footer-separator" src="images/svg/footer-separator.svg" alt="">
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
				<img id="logo-reciclados" class="logo-footer" src="images/svg/reciclados-wg-logo.svg" alt="">
                </div>
                <div class="col-12 footer-menu">
                    <a href="nosostros.php">Nosotros</a>
                    <a href="#prefabricados">Prefabricados</a>
                    <a href="#fondo_icons">Ventajas</a>
                    <a href="#contact">Contacto</a>
                </div>
                <div class="col-12 social">
                    
                    <a href="#"><img class="social-icon" src="images/svg/facebook-icon.svg" alt=""></a>
                
                    <a href="#"><img class="social-icon" src="images/svg/twitter-icon.svg" alt=""></a>
                
                    <a href="#"><img class="social-icon" src="images/svg/instagram-icon.svg" alt=""></a>
                
                    <a class="novo-footer" href="https://recicladosindustriales.co" target="_blank">
						<span></span>
						<img class="logo-footer" src="images/svg/novo-wg-logo.svg" alt="">
                    </a>
                </div>
                <div class="col-12 email">
                    <p><a href="mailto:info@recicladosindustriales.co"><img class="email-icon" src="images/svg/mail-icon.svg" alt=""></a><a href="mailto:info@recicladosindustriales.co">info@recicladosindustriales.co</a></p>
                </div>
            </div>
        </div>
        <div class="eal-copy">
            <p>Copyright © 2019 All Right Reserved. <a href="http://enalgunlugarestudio.com/" target="_blank">Powered By En Algún Lugar</a></p>
        </div>
    </footer>

	<!-- scroll-top -->
	<div id="scroll-top">
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- end scroll-top -->


	<!-- Ventanas modales Materiales-->
	<!-- SUB BASE GRANULAR A -->
	<div id="myModal1" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/11_12_2019_RIC_FICHAS_TECNICAS_V1_SUB_BASE_GRANULAR_A.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SUB BASE GRANULAR B -->
	<div id="myModal2" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/11_12_2019_RIC_FICHAS_TECNICAS_V1_SUB_BASE_GRANULAR_B.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
  	</div>
	<!-- SUB BASE GRANULAR C -->
	<div id="myModal3" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/11_12_2019_RIC_FICHAS_TECNICAS_V1_SUB_BASE_GRANULAR_C.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
  	</div>
	<!-- SUB BASE GRANULAR PEA -->					
	<div id="myModal4" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/11_12_2019_RIC_FICHAS_TECNICAS_V1_SUB_BASE_GRANULAR_PEA.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BASE GRANULAR A -->
	<div id="myModal5" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/11_12_2019_RIC_FT_V1_BASE_GRANULAR_A.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BASE GRANULAR B -->
	<div id="myModal6" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/11_12_2019_RIC_FT_V1_BASE_GRANULAR_B.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ARENA DE TRITURACIÓN -->
	<div id="myModal7" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/arena_trituracion_ri_ft.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- GRAVA DE TRITURACIÓN -->
	<div id="myModal8" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<embed src="pdf/grava_trituracion_ri_ft.pdf" frameborder="0" width="100%" height="600px">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FINAL VENTANAS MODALES MATERIALES -->


	<!--   MODAL COTIZACION GRANULARES	 -->
	<div id="cotizarModalMate" class="modal fade" role="form">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="row">
						<div class="col-md-12" style="background: #231F20;">
							<img src="images/logo_blanco.png" alt="logo">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="title">
								<h1 class="video_contact animated fadeIn slow">COTIZAR</h1>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-body">
					<form name="cotizarFormMate" id="cotizarFormMate" novalidate>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Nombre *" class="form-control" name="name3" id="name3" required data-validation-required-message="Ingrese su nombre">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" placeholder="Email *" class="form-control" name="email3" id="email3" required data-validation-required-message="Ingrese su dirección de correo">
								<p class="help-block text-danger"></p>
							</div>

							<div class="form-group">
								<input type="number" minlength="10" maxlength="11" placeholder="Teléfono *" class="form-control" name="phone3" id="phone3" required data-validation-required-message="Ingrese su numero de teléfono">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group" style="padding-bottom:20px;">
								<label for="select3">Material a cotizar *</label>
								<select name="select3" class="form-control" id="select3">
									<option value="Base Tipo A BG-A">BASE GRANULAR TIPO A BG-A</option>
									<option value="Base Tipo A BG-B">BASE GRANULAR TIPO A BG-B</option>
									<option value="Base Tipo A BG-C">BASE GRANULAR TIPO A BG-C</option>
									<option value="Sub Base Tipo A SBG-A">SUB BASE GRANULAR TIPO A SBG-A</option>
									<option value="Sub Base Tipo A SBG-B">SUB BASE GRANULAR TIPO A SBG-B</option>
									<option value="Sub Base Tipo A SBG-C">SUB BASE GRANULAR TIPO A BG-C</option>
									<option value="Sub Base Tipo PEA1">SUB BASE GRANULAR TIPO PEA</option>
									<option value="B 200">MATERIAL GRANULAR DE MEJORAMIENTO</option>
									<option value="B 400">B 400</option>
									<option value="B 600">B 600</option>
									<option value="Arena">ARENA</option>
									<option value="Gravas-Gravillas">GRAVAS-GRAVILLAS</option>
									<option value="Arena Escombro">ARENA ESCOMBRO</option>
									<option value="Rajon">RAJON</option>
								</select>
							</div>

							<div class="form-group" style="padding-bottom:20px;">
								<label for="select4">Cantidad a cotizar *</label>
								<select name="select4" class="form-control" id="select4">
									<option value="1-250">1 - 250 m3</option>
									<option value="250-500">250 - 500 m3</option>
									<option value="500-1000">500 - 1000 m3</option>
									<option value="1000-5000">1000 - 5000 m3</option>
									<option value=">5000">más de 5000 m3</option>
								</select>
							</div>

							<textarea class="form-control" placeholder="Mensaje" rows="6" name="message3" id="message3" required data-validation-required-message="Ingresa un mensaje"></textarea>

							<p class="help-block text-danger"></p>
							<div id="success"></div>
							<div class="alert alert-danger error">Error!  E-mail por favor revisé su correo electrónico</div>
							<div class="alert alert-success success">El mensaje se ha enviado correctamente, uno de nuestros asesores se contactará con usted lo antes posible</div>
							<input type="submit" value="Cotizar" class="btn btn-default btn-esg" />
							<p><br>* Campos Obligatorios</p>
						</div>
					</form>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- ******--------- Suscribirse	---------****** -->
	<div id="subscribe-modal" class="modal fade" role="form">
		<div class="vertical-alignment-helper">
			<div class="modal-dialog modal-md vertical-align-center">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>

						<div class="row">
							<div class="col-md-12" style="background: #231F20;">
								<img style="width: 120px;" src="images/logo_blanco.png" alt="logo">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="title">
									<p class="animated fadeIn slow">Ingresa tu correo para poder recibir más información y las ultimas noticias sobre Reciclados Industriales.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-body">
						<form name="subscribe" id="subscribe" novalidate>
							<div class="col-md-12">
								<div class="form-group" style="margin-bottom: 1rem;">
									<input type="email" placeholder="Email *" class="form-control" name="email" id="emailSubscribe" required  >
								</div>
								<div id="subs-success" style="display:none;" class="alert alert-success success">
									Su mensaje se ha enviado correctamente
								</div>
								<div id="subs-warning" style="display:none; " class="alert alert-warning warning">
									Escriba su correo electronico
								</div>
								<div id="subs-danger" style="display:none;" class="alert alert-danger danger">
									A sucedido un error, intente más tarde
								</div>
								<div id="subs-warningDos" style="display:none;" class="alert alert-warning warning">
									Escriba un correo valido
								</div>
								<div class="btn-center">
									<input type="submit" value="Enviar" class="btn btn-default btn-esg" />
									<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</form>
						<div class="modal-footer">
							<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/lottie.js"></script>
	<script src="js/index.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>
	<script src="chatWp/floating-wpp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.js"></script>

	<?php if($exibirModal === true) : ?>
	<script>
		$(document).ready(function(){
			setTimeout(() => {
				// id de nuestro modal
				$("#subscribe-modal").modal("show");
			}, 5000);
		});
	</script>
	<?php endif; ?>

	<script>
		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>

</body>
</html>