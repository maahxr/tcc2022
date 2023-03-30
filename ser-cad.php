<?php
include("conexao.php");
include("produto-banco.php");

$image=$_FILES['arquivo']['name'];
$nome_ser=$_POST['nome_ser'];
$servico=$_POST['servico'];
$conhecimento=$_POST['conhecimento'];
$contato_ser=$_POST['contato_ser'];
$preco=$_POST['preco'];
$diretorio = "uploads/";
move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$image);

insereProduto($conexao,$image,$nome_ser,$servico,$conhecimento,$contato_ser,$preco);
header("Location:lista-clientes.php");
?>

