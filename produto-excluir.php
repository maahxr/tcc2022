<?php
include('conexao.php');
include('produto-banco.php');
$id=$_POST['idservico'];
excluirProduto($conexao, $id);
header("Location:produto-lista.php");
?>

