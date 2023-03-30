<?php

include('verifica_login.php');
?>


<!DOCTYPE HTML>

<html>
	<head>
	<link rel="icon" href="assets/css/images/iconin.png">
		<title>SIA - Serviço Imediato Acessivel</title>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/cadastrocorp.css">
		<link rel="stylesheet" href="assets/css/index.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					
					<nav>
						<ul>
							<li><a href="#intro">Bem Vindo</a></li>
							<li><a href="#one">Serviços</a></li>
							<li><a href="#three">Informações</a></li>
							<li><a href="lista-cliente.php">Lista De Serviços</a></li>
							<li><a href="logout.php">Sair</a></li>

						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1  fade-up">
						<div class="inner">
							<h1>Bem-Vindo <?php echo $_SESSION['email_login'];?></h2></h1>
							<h2>Serviço Imediato Acessivel</h2>
							<p>Um site de serviços gerais que vai agilizar e facilitar sua vida </p>
							
							<ul class="actions">
										<li><a href="lista-cliente.php" class="button">Serviços aqui</a></li>
									</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/serviçosdomesticos.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Serviços Domésticos</h2>
									
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/Automoveis.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Serviços de Automéveis</h2>
									
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/tecnicodeinformatica.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Serviços de Tecnologia</h2>
									
									
								</div>
							</div>
						</section>
					</section>

				
				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
						
							
							<div class="split style1">
							<section>
									<ul class="contact">
										
										<li>
											<h3>Email</h3>
											<a href="#">sia.services@gmail.com</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(55) 11 1111-1111</span>
										</li>
										
									</ul>
								</section>
								<section>
									<ul class="contact">
									<li>
											<h3>Endereço</h3>
									
											<span>Avenida Exemplo, N° 587 <br />
											São Paulo , 15370-496 <BR>
										    Brasil </span>
										</li>
										<li>
										<h3>Redes Sociais</h3>
											<ul class="icons">
											<li><a href="https://twitter.com/siaservicos_ofc" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="https://www.facebook.com/profile.php?id=100088266216760&mibextid=LQQJ4d" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="https://instagram.com/siaservicos.ofc?igshid=NDk5N2NlZjQ=" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											</ul>
											
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

					
			</div>

			<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Todos os direitos reservados.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body
	>
</html>