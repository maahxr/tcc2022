<?php
$conexao = mysqli_connect('localhost', 'root', '','TCC') or die ("Erro da conexão");
?>

<!DOCTYPE html>
<html>
	<head>
  <link rel="icon" href="assets/css/images/iconin.png">
		<title>Cadastro Funcionário</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/cadastrocorp.css">

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    

    <!-- Header -->
			<header id="header">
        
        <h2> S.I.A - CADASTRO DE FUNCIONÁRIOS</h2>
        
				<nav>
					<ul>
						<li><a href="index.php">Pagina Inicial</a></li>
						<li><a href="cadastro.php">Cadastro Usuarios</a></li>
					
					</ul>
				</nav>
      </header>
      
   
    <script>
    
      function limpa_formulário_cep() {
              //Limpa valores do formulário de cep.
              document.getElementById('rua').value=("");
              document.getElementById('bairro').value=("");
              document.getElementById('cidade').value=("");
              document.getElementById('uf').value=("");
        
      }
  
      function meu_callback(conteudo) {
          if (!("erro" in conteudo)) {
              //Atualiza os campos com os valores.
              document.getElementById('rua').value=(conteudo.logradouro);
              document.getElementById('bairro').value=(conteudo.bairro);
              document.getElementById('cidade').value=(conteudo.localidade);
              document.getElementById('uf').value=(conteudo.uf);
          
          } //end if.
          else {
              //CEP não Encontrado.
              limpa_formulário_cep();
              alert("CEP não encontrado.");
          }
      }
          
      function pesquisacep(valor) {
  
          //Nova variável "cep" somente com dígitos.
          var cep = valor.replace(/\D/g, '');
  
          //Verifica se campo cep possui valor informado.
          if (cep != "") {
  
              //Expressão regular para validar o CEP.
              var validacep = /^[0-9]{8}$/;
  
              //Valida o formato do CEP.
              if(validacep.test(cep)) {
  
                  //Preenche os campos com "..." enquanto consulta webservice.
                  document.getElementById('rua').value="...";
                  document.getElementById('bairro').value="...";
                  document.getElementById('cidade').value="...";
                  document.getElementById('uf').value="...";
                 
  
                  //Cria um elemento javascript.
                  var script = document.createElement('script');
  
                  //Sincroniza com o callback.
                  script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
  
                  //Insere script no documento e carrega o conteúdo.
                  document.body.appendChild(script);
  
              } //end if.
              else {
                  //cep é inválido.
                  limpa_formulário_cep();
                  alert("Formato de CEP inválido.");
              }
          } //end if.
          else {
              //cep sem valor, limpa formulário.
              limpa_formulário_cep();
          }
      };
  
      </script>
    </head>
    
	<div class="is-preload">
        <div class="container" >
            <a class="links" id="paracadastro"></a>
            <a class="links" id="paralogin"></a>
            
            <div class="content">      
        
        
              <!--FORMULÁRIO DE CADASTRO-->
              <p>
              <h1>Cadastro</h1> 
              <div id="cadastro">
                <form method="post" action="" enctype="multipart/form-data"> 
                 

                 
                  <div class="fields"> 
                      <div class="field ">
                  
                    <label for="nome_cad">Nome</label>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
                  
                  <br>
                    
    <label>Sua foto <input type="file" name="arquivo"></label>
                 
    </div>
    </div>

      
    <div class="fields"> 
    <div class="field ">
                
                    <label for="email">Email</label>
                    <input id="email_cad" name="email_cad" required="required" type="text" placeholder="exemplo@xxxx.com" />
                  
    </div>
    </div>

    <div class="fields"> 
    <div class="field ">
                      
    <label for="cpf">CPF</label>
                    <input type="text" id="cpf_cad"  name="cpf_cad" inputmode="number" minlength="11" maxlength="14"
                       pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" placeholder="111.222.333-00"
                      required autocomplete="off">
    </div>

    </div>
              
              
                  <!--cep--> 
                
                  <form method="get" action=".">
                    
                    <div class="row">
                      <div class="col">
                    <label>CEP
                    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"  placeholder="000000-000"
                           onblur="pesquisacep(this.value);" /></label><br />
                           </div>

            
                    <div class="col">
                    <label>Bairro
                    <input name="bairro" type="text" id="bairro" size="40" readonly  placeholder="Veloso" /></label><br />
                    </div>
                    
                    <div class="col">
                    <label>Cidade
                    <input name="cidade" type="text" id="cidade" size="40" readonly  placeholder="Osasco"/></label><br />
                    </div>
                    
                    <div class="col">
                    <label>Estado
                    <input name="estado" type="text" id="uf" size="2" readonly  placeholder="SP"/></label><br />
                    </div>
                   </div>

                   <label>Rua
                    <input name="rua" type="text" id="rua" size="60" readonly  placeholder="Rua xxxxxxxx"/></label><br />
                 
                  
                  

          <div class="row">

            <div class="col">
              <label>Telefone</label>
              <input type="text" name="telefone" id="telefone" class="form-control" placeholder="3333-3333" aria-label="First name">
            </div>

            <div class="col">
              <p>
              <label>Celular</label>
              <input type="text" name="celular_cad" id="celular" class="form-control" placeholder="11 91111-1111" aria-label="Last name">
            </p>
            </div>

            <div class="col">
            <p>
            <label>Genero</label>
	          <input type="radio" id="sexo-m" name="sexo" value="Masculino">
	          <label for="sexo-m">Masculino</label><br>
	          <input type="radio" id="sexo-f" name="sexo" value="Feminino">
	          <label for="sexo-f">Feminino</label><br>
            <input type="radio" id="outro" name="sexo" value="Outro">
	          <label for="outro">Outro</label>
            </p>
	          <br>
            </div>
                 
                  <p> 
                  <label for="dtnasc">Data de Nascimento</label>
                    <input type='date' id='data' name='data' required="required" >
                  </p>

                 
                  <p> 
                    <label for="senha_cad">Senha</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="12345678"    minlength="8" required/>
                  </p>
                  
                  <br>
                  <p> 
                  <input type="submit" name="Cadastrar" value="Cadastrar">
                  </p>
                </form>
                </form>
              </div>
            </div>
            
          </div> 
          <?php
          
if(isset($_POST['Cadastrar'])){
  $nome_cad=$_POST['nome_cad'];
  $imagem=$_FILES['arquivo']['name'];
  $email_cad=$_POST['email_cad'];
  $cpf_cad=$_POST['cpf_cad'];
  $cep=$_POST['cep'];
  $bairro=$_POST['bairro'];
  $cidade=$_POST['cidade'];
  $estado=$_POST['estado'];
  $rua=$_POST['rua'];
  $telefone=$_POST['telefone'];
  $celular_cad=$_POST['celular_cad'];
  $genero=$_POST['sexo'];
  $data_nasc=$_POST['data'];
  $senha_cad=$_POST['senha_cad'];
  $diretorio = "upload/";
  move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$imagem);


 $sql= "INSERT INTO funcionarios(nome,imagem,email,cpf_cad,cep,bairro,cidade,estado,rua,telefone,celular,genero,data_nasc,senha) VALUES('$nome_cad','$imagem','$email_cad','$cpf_cad','$cep','$bairro','$cidade','$estado','$rua','$telefone','$celular_cad','$genero','$data_nasc','$senha_cad')";

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