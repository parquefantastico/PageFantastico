<!doctype html>
<html class="no-js" lang="zxx">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Parque Fantástico</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">
	<!-- Google font (font-family: 'Lobster', Open+Sans;) -->
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<linkJunior || Child Care & Shop HTML5 Template href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="header" class="jnr__header header--one clearfix">
		<?php include ('header.php') ?>
		</header>
		<!-- //Header -->
<script src='https://www.google.com/recaptcha/api.js'></script>
 <!-- Start Contact Form -->
        <section class="contact__box section-padding--lg bg-image--27">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h1 class="title__line">¡Contáctanos!</h1>
						</div>
					</div>
        		</div>
        		<div class="row mt--80">
        			<div class="col-lg-12">
    				<div class="contact-form-wrap">
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="single-contact-form name">
                                    <input type="text" name="Nombre" placeholder="Nombre">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="text" name="Tel" placeholder="Teléfono">
                                </div>
                                <div class="single-contact-form subject">
                               		<input type="text" name="Asunto" placeholder="Asunto">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="Mensaje"  placeholder="Escriba su mensaje aqui..."></textarea>
                                </div>
                                <div class="contact-btn" >
                                	 <div class="g-recaptcha" callback expired-callback data-sitekey="6Lepoa8UAAAAAEuhoYnUyJKX-QDzh_XvnswD6bwT"></div>
                                	 
                                    <button type="submit" class="dcare__btn">Enviar</button>
                                </div>
                            </form>
                        </div> 
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Contact Form -->

        <section class="page__contact bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<!-- Start Single Address -->
        			<div class="col-md-6 col-sm-6 col-12 col-lg-4">
        				<div class="address location">
        					<div class="ct__icon">
        						<i class="fa fa-home"></i>
        					</div>
							<div class="address__inner">
								<h2>Dirección</h2>
								<p><a href=" https://www.google.com.mx/maps/place/Fantastico/@18.1456382,-94.4300953,17z/data=!3m1!4b1!4m5!3m4!1s0x85e982f0adb7682b:0x2c6de37cc520f9c7!8m2!3d18.1456382!4d-94.4279066">Av. Ignacio de la Llave #1005, Colonia María de la Piedad.
CP 96410, Coatzacoalcos, Veracruz.</p>
							</div>
        				</div>
        			</div>
        			<!-- End Single Address -->
        			<!-- Start Single Address -->
        			<div class="col-md-6 col-sm-6 col-12 col-lg-4 xs-mt-60">
        				<div class="address phone">
        					<div class="ct__icon">
        						<i class="fa fa-phone"></i>
        					</div>
							<div class="address__inner">
								<h2>Whatsapp</h2>
								<ul>
									<li><a href="https://api.whatsapp.com/send?phone=+5219211431803&text=Hola,%20solicito %20mas%20informacion%20sobre%20Fantastico">(COATZA) 9211431803</a></li>
									
								</ul>
							</div>
        				</div>
        			</div>
        			<!-- End Single Address -->
        			<!-- Start Single Address -->
        			<div class="col-md-6 col-sm-6 col-12 col-lg-4 md-mt-60 sm-mt-60">
        				<div class="address email">
        					<div class="ct__icon">
        						<i class="fa fa-envelope"></i>
        					</div>
							<div class="address__inner">
								<h2>Correo electrónico</h2>
								
								<ul>
									<li><a href="mailto:Parquefantastico@gmail.com">Parquefantastico@gmail.com</a></li>
								
								</ul>
							</div>
        				</div>
        			</div>
        			<!-- End Single Address -->
        		</div>
        	</div>
        </section>


			<div class="copyright  bg--theme">
				<div class="container">
					<div class="row align-items-center copyright__wrapper justify-content-center">
						<div class="col-lg-12 col-sm-12 col-md-12">
							<div class="coppy__right__inner text-center">
								<p>Copyright <i class="fa fa-copyright"></i> 2019 <a href="" target="_blank" >Parque Fantástico</a> Todos los derechos reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->


	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>
</html>
