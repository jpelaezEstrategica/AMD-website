<!DOCTYPE html>
<html lang="en">
<head>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Meta etiquetas ||||||||||||||||||||||||| -->
    <!-- |||||||||||||||||||||||||||||||||||||||| -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title>AMD - Ultimate Connection</title>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- LIBRERIAS CSS ||||||||||||||||||||||||| -->
    <!-- |||||||||||||||||||||||||||||||||||||||| -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.lineicons.com/3.0/lineicons.css"> 
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- LIBRERIAS JS ||||||||||||||||||||||||| -->
    <!-- |||||||||||||||||||||||||||||||||||||||| -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://kit.fontawesome.com/89a2df8a59.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Header ||||||||||||||||||||||||||||||||| -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<header>
		<div class="topbar">
			<div class="container">
				<div class="row align-items-center justify-content-between">
						<div class="col-12 col-md-3 col-lg-3">
							<a href="index.php"><h1 class="main-logo txt2img">AMD Ultimate connection</h1></a>
						</div>
						<div class="col-12 col-md-4 col-lg-4 d-flex justify-content-end" id="login-sec">
							<div class="dropdown">
								<button class="dropdown-toggle lebtn lebtn-w100 btn-login text-center" id="loginDrop" type="button">Bienvenido [user name]</button>
							</div>
							<ul class="dropdown-menu" id="userlog-nav">
							    <li><a class="dropdown-item" href="cp-home.php">Mi perfil</a></li>
							    <li><a class="dropdown-item" href="javascript:;">Mi cuenta</a></li>
							    <li><a class="dropdown-item" href="javascript:;">Recompensas para socios</a></li>
							    <li><a class="dropdown-item" href="javascript:;">Terminos y Condiciones</a></li>
							  </ul>
							&nbsp;&nbsp;|&nbsp;&nbsp; <a href="javascript:;" class="lebtn btn-ghost">Salir <i class="fa-solid fa-right-from-bracket"></i></a>
						</div>
				</div>
			</div>
		</div>
		<!-- |||||||||||||||||||||||||||||||||||||||| -->
		<!-- Navegacion  [↓] ------------------------ -->
		<!-- |||||||||||||||||||||||||||||||||||||||| -->
		<nav class="navbar navbar-light navbar-expand-lg nop" id="mainnav">
		  <div class="container d-flex align-items-center">
		    <!--<a class="navbar-brand" href="#">Navbar</a>-->
		    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavDropdown">
		      <ul class="navbar-nav nop">
		      	<span class="navbar-text">
		      		<a href="https://www.facebook.com/AMD" target="_blank"><i class="fab fa-facebook-f"></i></a>
		      		<a href="https://twitter.com/amd" target="_blank"><i class="fab fa-twitter"></i></a>
		      		<a href="https://www.linkedin.com/company/amd/" target="_blank"><i class="fab fa-linkedin"></i></a>
		      		<a href="https://www.youtube.com/user/amd" target="_blank"><i class="fab fa-youtube"></i></a>
		      	</span>
		        <li class="nav-item">
		          <a class="nav-link current" aria-current="page" href="index.php">Inicio</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="programa-socios.php">Programa para socios de AMD</a>
		        </li>
		         <li class="nav-item dropdown">
		          <a class="nav-link " href="recursos.php">Recursos</a>
		          <!--<ul class="dropdown-menu">
		          	<li><a href="recursos.php#amdarena" class="dropdown-item">AMD Arena </a></li>
		          	<li><a href="recursos.php#meetxpert" class="dropdown-item">Meet the Expert </a></li>
		          	<li><a href="recursos.php#calendario" class="dropdown-item">Eventos </a></li>
		          	<li><a href="recursos.php#news" class="dropdown-item">AMD News </a></li>
		          	<li><a href="recursos.php#assetsmkt" class="dropdown-item">Assets de Marketing </a></li>
		          	<li><a href="recursos.php#selltools" class="dropdown-item">Herramientas de venta</a></li>
		          </ul>-->
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>
	<!-- |||||||||||||||||||||||||||||||||||||||| -->
	<!-- Navegacion  [↑] ------------------------ -->
	<!-- |||||||||||||||||||||||||||||||||||||||| -->

