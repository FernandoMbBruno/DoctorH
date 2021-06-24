<?php
require_once './php/classe.php';
$u = new usuario();

?>


<!DOCTYPE html>

<html lang="en">

<head>
	<!--HTML5 -->
	<title> Bem vindo Doctor H</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Importando icones  -->
	<link href="./css/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

	<!--Importando CSS,JS... -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<div>
	<!--Iniciando uma sessão no php, Fazendo a segurança para que o usuario que não esteja cadastrado não entre -->
	<?php

	session_start();
	if (!isset($_SESSION['ID'])) {
		echo '<script type="text/JavaScript"> alert("Você não tem acesso essa pagina");
		window.location.href = "index.html";
		</script>';
	} else {
	}
	?>
</div>







<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<div class="py-1 bg-black top">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span></span></div>
							<span class="text"><?php echo " Seja Bem-Vindo, " . $_SESSION['ID'] . " <br />"; ?></span>
							<!--Fazendo aparecer o Usuario que está logado com $_session['ID'] -->
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">

							<span class="text"></span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
							<p class="mb-0 register-link"><a href="./php/logout.php" class="mr-3">Sair</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Doctor H</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>Sobre</span></a></li>
					<li class="nav-item"><a href="#department-section" class="nav-link"><span>Especialidades</span></a></li>
					<li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Top Médicos</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contato</span></a></li>
					<li class="nav-item cta mr-md-2"><a href="Agendamento.html" class="nav-link">Agendamento</a></li>
					<li class="nav-item cta mr-Fmd-2"><a href="https://video-app-6803-4828-dev.twil.io?passcode=93500568034828" class="nav-link">Telemedicina </a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="hero-wrap js-fullheight" style="background-image: url(images/Doc.png)" data-section="home" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 pt-5 ftco-animate">
					<div class="mt-5">
						<span class="subheading">Bem vindo ao Doctor H</span>
						<h1 class="mb-4">Sua saude<br>em boas mãos</h1>
						<p class="mb-4">A arte da medicina consiste em distrair o paciente enquanto a Naureza cuida da doença.</p>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<h2 class="mb-4">Nos somos <span>Doctor H</span></h2>
								<p>Assim como realmente a medicina em nada beneficia se não liberta dos males do corpo, assim também sucede com a filosofia se não liberta das paixões da alma.</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-7 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5">
							<div class="col-md-12 heading-section ftco-animate">
								<h2 class="mb-3">Nossos serviços</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Presencial</h3>
										<p>Mediante algumas situação nossos medicos poderá ir até sua casa caso queira</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Medicos Qualificados </h3>
										<p>Temos medicos Qualificados para você ter o maximo de segurança </p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Atendimento Online</h3>
										<p>De inicio você irá passar por um atendimento Online para poder avaliar a sua situação</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">24 Horas Online</h3>
										<p>Nossos sites estarão online 24 Horas para um atendimento rápido</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		</div>
	</section>

	<section class="ftco-intro img" style="background-image: url(images/pexels-tima-miroshnichenko-5452186.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<h2>Sua saude e nossa prioridade</h2>
					<br>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-4 d-flex">
					<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);">
					</div>
				</div>

				<div class="col-md-8">
					<div class="row no-gutters">
						<div class="col-md-4">
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-user-nurse"></span>
									</div>
									<h3><a href="#">Enfermagem</a></h3>
									<p></p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-syringe"></span>
									</div>
									<h3><a href="#">Medicação</a></h3>
									<p></p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-bed"></span>
									</div>
									<h3><a href="#">Cuidador de idosos</a></h3>
									<p></p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-crutch"></span>
									</div>
									<h3><a href="#">Fisioterapia</a></h3>
									<p></p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-user-md"></span>
									</div>
									<h3><a href="#">Visita Medica</a></h3>
									<p></p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-comment-medical"></span>
									</div>
									<h3><a href="#">Psicologia</a></h3>
									<p></p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-comments"></span>
									</div>
									<h3><a href="#">Fonoaudiologia</a></h3>
									<p></p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-utensils"></span>
									</div>
									<h3><a href="#">Nutricionista</a></h3>
									<p></p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="fas fa-diagnoses"></span>
									</div>
									<h3><a href="#">Dermatologista</a></h3>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="doctor-section">
		<div class="container-fluid px-5">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Nossos melhores médicos</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Lloyd Wilson</h3>
							<span class="position mb-2">Neurologista</span>
							<div class="faded">
								<p></p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Rachel Parker</h3>
							<span class="position mb-2">Oftalmologista</span>
							<div class="faded">
								<p></p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Ian Smith</h3>
							<span class="position mb-2">Dentista</span>
							<div class="faded">
								<p></p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Alicia Henderson</h3>
							<span class="position mb-2">Pediatra</span>
							<div class="faded">
								<p></p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Read testimonials</span>
					<h2 class="mb-4">Our Patient Says</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/person_2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Jeff Freshman</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section" id="contact-section">

	</section>




	<footer style="
    /* background: black; */
    background: rgb(238 241 246) !important;
	
">
		<div class="container text-center">
			<div class="row">
				<div class="">
					<div class="">
						<a class="teste" href="index.html">Doctor H</a>

						<p class="copyright-text">

							Email: doctorHhomecare@gmail.com <br> <br>

							Copyright © 2021 | DoctorH.
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./style.css" />
	<script src="./index.js"></script>


	<script src="js/main.js"></script>

</body>

</html>