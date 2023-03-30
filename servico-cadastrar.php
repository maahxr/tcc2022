<?php
include('conexao.php');

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
        <link rel="stylesheet" href="assets/css/barra.css">


		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


			<header id="header">
				<h2> S.I.A</h2>
				<nav>
					<ul>
					<li><a href="painel2.php">Bem Vindo</a></li>
						
						<li><a href="logout.php">Sair</a></li>
						
					</ul>
				</nav>
			</header>


			<!-- Wrapper -->
			<div id="wrapper">

			

			
		
 <!--FORMULÁRIO DE LOGIN-->
 <form method="post" action="ser-cad.php" enctype="multipart/form-data">
     <p>
     
 <h1>Cadastro De Serviços </h1> 
				<p>
                <div class="fields ">
                  <div class="field ">
				  <label>Sua foto <input type="file" name="arquivo"></label> 
				  <br>

                    <label for="name">Nome</label>
                    <input type="text" name="nome_ser" id="name_ser" placeholder="Maria Eduarda"/>

<br>


</div>

                <div class="field half">
				<div class="col">
				<p>
				<label>Serviço oferecido</label>
				<input type="radio" id="domestico" name="servico" value="Domestico">
				<label for="domestico">Doméstico</label><br>

				<input type="radio" id="tecnologico" name="servico" value="Tecnologico">
				<label for="tecnologico">Tecnológico</label><br>

				<input type="radio" id="automoveis" name="servico" value="Automoveis">
				<label for="automoveis">Automóveis</label>
				</p>
				<br>
				</div>
				</div>

                <div class="field half">
				<div class="col">
				<p>
				<label>Conhecimento</label>
				<input type="radio" id="basico" name="conhecimento" value="Basico">
				<label for="basico">Básico</label><br>

				<input type="radio" id="intermediario" name="conhecimento" value="Intermediario">
				<label for="intermediario">Intermediário</label><br>

				<input type="radio" id="avancado" name="conhecimento" value="Avancado">
				<label for="avancado">Avançado</label>
				</p>
				<br>
				</div>
				</div>

				<div class="field half">
					<label for="email">Celular <img src="assets/css/images/whatslogo.png" /></label> 
                    <input type="text" name="contato_ser" id="contato_ser" placeholder="11 91234-5678" />
                  </div>
			
                  <div class="field half">
                    <label for="message">Preço Médio (Avaliar com o cliente)</label>
                    <input type="text" name="preco" id="preco" data-type="currency" placeholder="R$ 00,00" />
                  </div>
<br>
                </div>

				
				<input type="submit" name="Cadastrar" value="Cadastrar">

              </form>

              </div>
            </div>
          </div> 
          <?php
        
?>
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