<?php
$conexao = mysqli_connect('localhost', 'root', '','TCC') or die ("Erro da conexão");
?>

<!DOCTYPE html>
<html>
	<head>
  <link rel="icon" href="assets/css/images/iconin.png">
		<title>Cadastro Usuário</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/cadastrocorp.css">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    
    <!-- Header -->
			<header id="header">
        
        <h2> S.I.A - CADASTRO DE USUÁRIOS</h2>
        
				<nav>
					<ul>
						<li><a href="index.php">Pagina Inicial</a></li>
						<li><a href="cadastrocorp.php">Cadastro Funcionários</a></li>
					
					</ul>
				</nav>
      </header>
      
   

    
	<body class="is-preload">
        <div class="container" >
            <a class="links" id="paracadastro"></a>
            <a class="links" id="paralogin"></a>
            
            <div class="content">      
              <!--FORMULÁRIO DE LOGIN-->
              <form method="post" action="">
              <p>
                <h1>Cadastro</h1> 
                <div class="fields">
                  <div class="field">
                    <label for="name">Nome</label>
                    <input type="text" name="nome" id="name" placeholder="Maria Eduarda"/>
                  </div>

                  <div class="field half">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="exemplo@xxxx.com" />
                  </div>

                  <div class="field half">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf"  name="cpf" inputmode="number" minlength="11" maxlength="14"
                       pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" placeholder="111.222.333-00"
                      required autocomplete="off">
                  
                  </div>

                  <div class="field half">
                    <label for="message">Celular</label>
                    <input type="text" name="celular" id="celular" placeholder="11 91111-2222" />
                  </div>

                  <div class="field half">
                    <label for="pass">Senha</label>
                    <input type="password" id="pass" name="senha" 
                    minlength="8" required> 

                    </div>
                    
                    
                    
                </div>
              <input type="submit" name="Enviar" value="mandar">
              </form>

              </div>
            </div>
          </div> 
          <?php
          
if(isset($_POST['Enviar'])){
  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $cpf=$_POST['cpf'];
  $celular=$_POST['celular'];
  $senha=$_POST['senha'];


 $sql= "INSERT INTO clientes(nome,email,cpf,celular,senha) VALUES('$nome','$email','$cpf','$celular','$senha')";

        mysqli_query($conexao,$sql);
}
?>
<!-- Footer -->
<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Todos os direitos reservados.</li>
					</ul>
				</div>
			</footer>