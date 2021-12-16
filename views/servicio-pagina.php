<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Vendor CSS -->
    <link href="../public/img/logo.png" rel="icon">
    <link href="../public/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="../public/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../public/vendor/aos/aos.css" rel="stylesheet">
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../public/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../public/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../public/css/app.css"> -->
    <!-- <link rel="stylesheet" href="../public/css/util.css">
    <link rel="stylesheet" href="../public/css/crud-user.css">
    <link rel="stylesheet" href="../public/css/hamburgers.css.css"> -->
    <title>Document</title>
</head>
<body>
<?php
    include "layouts/header.php";
?>
<br>
<br>
<br>
<section id="departments" class="departments">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<h2>Servicios</h2>
			<p>
				Brindamos servicios de supervisión y control de calidad en obra en el área de suelos, concreto y asfalto. Así mismo realizamos todas las pruebas para ensayo de materiales en laboratorio. Contamos con amplia experiencia y profesionales calificados en el área de Ingeniería Civil.
			</p>
		</div>
		<div class="row" data-aos="fade-up" data-aos-delay="100">
			<div class="col-lg-3 mb-5 mb-lg-0">
				<ul class="nav nav-tabs flex-column">
					<li class="nav-item">
						<a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
							<h4>GEOTECNIA</h4>
						</a>
					</li>
					<li class="nav-item mt-2">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
							<h4>CONCRETO</h4>
						</a>
					</li>
					<li class="nav-item mt-2">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
							<h4>ASFALTO</h4>
						</a>
					</li>
					<li class="nav-item mt-2">
						<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
							<h4>ALBAÑILERÍA</h4>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-9">
				<div class="tab-content">
					<div class="tab-pane active show" id="tab-1">
						<h3>GEOTECNIA</h3>
						<p class="fst-italic"></p>
						<p>Estudio de suelos</p>
						<p>Ensayos en rocas</p>
						<p>Ensayos químicos</p>
						<!-- <img src="../public/img/servicios/geotecnia/1.jpg" alt="" class="img-fluid"> -->
						<img src="../public/img/servicios/geotecnia/2.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/3.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/4.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/5.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/6.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/7.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/8.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/geotecnia/9.jpg" alt="" class="img-fluid">
					</div>
					<div class="tab-pane" id="tab-2">
						<h3>CONCRETO</h3>
						<p class="fst-italic"></p>
						<p>Control de calidad del concreto en estado freso y en estado endurecido</p>
						<p>Pruebas al concreto en campo y laboratorio</p>
						<p>Ensayo de agregados</p>
						<img src="../public/img/servicios/concreto/1.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/2.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/3.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/4.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/5.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/6.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/7.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/8.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/9.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/10.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/concreto/11.jpg" alt="" class="img-fluid">
                      	<img src="../public/img/servicios/concreto/12.jpg" alt="" class="img-fluid">
					</div>
					<div class="tab-pane" id="tab-3">
						<h3>ASFALTO</h3>
						<p class="fst-italic"></p>
						<p>Diseño de mezcla asfáltica</p>
						<p>Pruebas de calidad en campo y laboratorio</p>
						<img src="../public/img/servicios/asfalto/1.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/asfalto/2.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/asfalto/3.jpg" alt="" class="img-fluid">
					</div>
					<div class="tab-pane" id="tab-4">
						<h3>ALBAÑILERÍA</h3>
						<p class="fst-italic"></p>
						<p>Fabricación de unidades de albañilería con fines de investigación</p>
						<p>Pruebas de control de calidad en unidades de albañilería</p>
						<img src="../public/img/servicios/albanil/1.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/albanil/2.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/albanil/3.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/albanil/4.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/albanil/5.jpg" alt="" class="img-fluid">
						<img src="../public/img/servicios/albanil/6.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
    include "layouts/footer.php";
?>
<script src="../public/vendor/aos/aos.js"></script>
<script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../public/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../public/vendor/php-email-form/validate.js"></script>
<script src="../public/vendor/purecounter/purecounter.js"></script>
<script src="../public/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../public/js/main.js"></script>
<!-- <script src="../public/js/main2.js"></script> -->
</body>
</html>