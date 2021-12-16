<div id="topbar" class="d-flex align-items-center fixed-top">
	<div class="container d-flex align-items-center justify-content-center justify-content-md-between">
		<div class="align-items-center d-none d-md-flex">
			<i class="bi bi-clock"></i> Lunes - Sábado, 8AM a 6PM
		</div>
		<div class="d-flex align-items-center">
			<i class="bi bi-phone"></i> Llámanos ahora 787-1039
		</div>
	</div>
</div>
<header id="header" class="fixed-top">
	<div class="container d-flex align-items-center">
		<a href="http://localhost/vicat/" class="logo me-auto"><img src="public/img/logo-nombre.jpeg" alt=""></a>
		<nav id="navbar" class="navbar order-last order-lg-0">
			<ul>
				<li><a class="nav-link scrollto " href="http://localhost/vicat/">Inicio</a></li>
				<!-- <li><a class="nav-link scrollto" href="#about">Nosotros</a></li> -->
				<!-- <li><a class="nav-link scrollto" href="#equipo">Equipo</a></li> -->
				<!-- <li><a class="nav-link scrollto" href="#services">Servicios</a></li> -->
				<!-- <li><a class="nav-link scrollto" href="#gallery">Gelaría</a></li> -->
				<li class="dropdown"><a href=""><span>Servicios</span><i class="bi bi-chevron-right"></i></a>
                	<ul>
						<li class="dropdown"><a href=""><span>Laboratorio y control de calidad</span><i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">GEOTECNIA</a></li>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">CONCRETO</a></li>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">ASFALTO</a></li>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">ALBAÑILERÍA</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href=""><span>Proyectos de investigación</span><i class="bi bi-chevron-right"></i></a>
							<ul>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">TESIS</a></li>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">CAPACITACIONES</a></li>
								<li><a href="http://localhost/vicat/views/servicio-pagina.php">ASESORÍAS</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a class="nav-link scrollto" href="http://localhost/vicat/views/contactanos.php">Contáctanos</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
		<!-- @if (Route::has('login'))
			@auth
			<a href="{{ route('login') }}" class="appointment-btn scrollto">{{ Auth::user()->name }}</a>
			@else
				<a href="{{ route('register') }}" class="appointment-btn scrollto">Registrarme</a>
				<a href="{{ route('login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Iniciar</span> Sesión</a>
			@endauth
		@endif -->
	</div>
</header>