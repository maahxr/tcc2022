<?php
session_start();
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
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

	<header id="header">
				<h2> S.I.A</h2>
				<nav>
					<ul>
						<li><a href="index.php">Pagina Inicial</a></li>
						
					</ul>
				</nav>
			</header>


				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
						
						<?php
						if(isset($_SESSION['nao_autenticado'])):

						?>
						<div class="notification is-danger">
							<p>ERRO: Usuário ou senha inválidos </p>
						</div>
						<?php
						endif;
						unset($_SESSION['nao_autenticado']);
						?>
							
							<div class="split style1">
								<section>
									<form method="post" action="login.php"> 
									<p>
										<h1>Login para usuário</h1> 
										<p> 
										  <label for="email_login">E-mail</label>
										  <input id="email_login" name="email_login" required="required" type="text" placeholder="exemplo@xxxx.com"/>
										</p>
										
										<p> 
										  <label for="senha_login">Senha</label>
										  <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
										</p>
										
									
										<p> 
										  <input type="submit" name="Entrar" value="Entrar">
										</p>
										
										<p class="link">
										  Ainda não tem conta?
										  <p>
										  Cadastre-se como <a href="cadastro.php"> cliente / </a>
										  Cadastre-se como <a href="cadastrocorp.php"> funcionário</a>

										</p>
									  </form>
								</section>
								<section>
									<ul class="contact">
										<li>
                                        <img src="assets/css/images/logotipo.jpg" text-aligh="center" data-position="center center" />

											
								</section>
							</div>
						</div>
					</section>

					
			</div>

		<!-- Footer -->
			

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