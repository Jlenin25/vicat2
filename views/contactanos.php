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
<section id="contact" class="contact">
	<div class="container">
		<div class="section-title">
			<h2>Contáctanos</h2>
			<p>Ponte en contacto con nosotros, obtén una cotización y recibe informes.</p>
		</div>
	</div>
	<div>
		<iframe style="border:0; width: 100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d488.0354206081632!2d-77.0224992!3d-11.8853461!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-11.885067!2d-77.022308!5e0!3m2!1ses!2spe!4v1633020692121!5m2!1ses!2spe" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-md-12">
						<div class="info-box">
							<i class="bx bx-map"></i>
							<h3>Nuestra dirección</h3>
							<p>Villa Esperanza Mz.F Lt.10 Km.18.5 Tupac Amaru - Carabayllo</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="info-box mt-4">
							<i class="bx bx-envelope"></i>
							<h3>Email</h3>
							<p>INFORMES@VICATCONSTRUCCION.COM</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="info-box mt-4">
							<i class="bx bx-phone-call"></i>
							<h3>Telefonos</h3>
							<p>TLF: 787-1039</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<form action=" method="post" role="form" class="php-email-form">
					<div class="row">
						<div class="col form-group mt-3"">
							<input type="text" name="name" class="form-control" id="name" placeholder="Nombres" required>
						</div>
						<div class="col form-group mt-3">
							<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
						</div>
					</div>
					<div class="form-group mt-3">
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
					</div>
					<div class="form-group mt-3">
						<textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required style="resize:none;"></textarea>
					</div>
					<div class="my-3">
						<div class="loading">Cargando</div>
						<div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
						<div class="error-message"></div>
					</div>
					<div class="text-center"><input type="submit" name="enviar"></div>
				</form>
				<?php include "correo.php"; ?>
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