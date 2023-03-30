<?php
include("conexao.php");
include("produto-banco.php");
$id=$_POST['id'];
$produto= buscaProduto($conexao, $id);

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Alterar Serviço</h1>
        <form name="f1" method="post" action="produto-alterar.php">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <p> Nome:<input type="text" name="nome_ser" value="<?=$produto['nome_ser']?>"></p>
            <p>Contato:<input type="text" name="contato_ser" value="<?=$produto['contato_ser']?>"></p>
            <p>Serviço:<input type="text" name="servico_of" value="<?=$produto['servico_of']?>"></p>
            <p>Preço:<input type="text" name="preco" value="<?=$produto['preco']?>"></p>

            <p><input type="submit" name="enviar" value="Alterar"></p>
        </form>
            
    </body>
</html>
