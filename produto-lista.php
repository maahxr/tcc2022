<?php
include('conexao.php');
include('produto-banco.php');

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
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/barra.css">
        <link rel="stylesheet" href="assets/css/img.css">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

         

            
        <div class="container">
        <h1 align="center">Lista produtos</h1>
        <table class="table table-active table-bordered table-striped">
  <?php
  $produtos=listaProdutos($conexao);
  foreach ($produtos as $produto):
   ?>



	<!-- Table -->
    <section>
								
                                <div class="table-wrapper">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Imagem</th>
                                                <th>Nome</th>
                                                <th>Serviço</th>
                                                <th>Conhecimento</th>
                                                <th>Telefone</th>
                                                <th>Preço</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <td><img src="uploads/<?=$produto['image']?>" height="80" width="80"></td>
                                                <td><?=$produto['idnome']?></td>
                                                <td><?=$produto['servico']?></td>
                                                <td><?=$produto['conhecimento']?></td>
                                                <td><?=$produto['idtelefone']?></td>
                                                <td>R$ <?=$produto['preco']?></td>  


                                               
                                                </div>
                                                <td><form action="produto-excluir.php" method="post">
                    <input type="hidden" name="idservico" value="<?=$produto['idservico']?>">
                    <button class="btn-danger" type="submit" onclick="confirmacao()">Excluir</button>
                    </form>
                </td>
            
                
                
                </td>
            </tr>
 <?php
  endforeach;
 ?>     
        </table>
    
        </div>
       
    </body>
</html>
