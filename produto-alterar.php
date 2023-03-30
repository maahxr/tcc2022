<?php
include("conexao.php");
include("produto-banco.php");
$id=$_POST['idservico'];
$nome_ser=$_POST['nome_ser'];
$contato_ser=$_POST['contato_ser'];
$servico_of=$_POST['servico_of'];
$preco=$_POST['preco'];

alteraProduto($conexao, $id, $nome, $marca, $preco);
header("Location:produto-lista.php");
?>
