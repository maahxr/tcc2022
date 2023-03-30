<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SIA - Serviço Imediato Acessivel</title>
		<link rel="icon" href="assets/css/images/iconin.png">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/estrela.css">


	</head>

	
	<body>

	
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
			<h1>Avalie os serviços</h1>

				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<textarea id="msg" name="mensagem" rows="4" cols="50"></textarea>
				<br>

				<input type="submit" value="Avaliar">
				
			</div>
		</form>
	</body>
</html>


