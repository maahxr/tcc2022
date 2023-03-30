<?php

function insereProduto($conexao,$image,$nome_ser,$servico,$conhecimento,$contato_ser,$preco){
$sql="insert into servicos(image,idnome,servico,conhecimento,idtelefone,preco) values('$image','$nome_ser','$servico','$conhecimento','$contato_ser','$preco')";
return mysqli_query($conexao,$sql);
}

function listaProdutos($conexao){
$produtos=array();
$sql="select * from servicos";
$resultados=mysqli_query($conexao,$sql);

while($produto=mysqli_fetch_assoc($resultados)){
   array_push($produtos,$produto);
}
return $produtos;
}//fim lista produto

function excluirProduto($conexao,$id){
    $query="delete from servicos where idservico=$id";
    return mysqli_query($conexao,$query);
}

function alteraProduto($conexao,$nome_ser,$servico_of,$conhecimento,$contato_ser,$preco){
$query="update servicos set nome_ser='$nome_ser', servico_of='$servico_of, conhecimento='$conhecimento,contato_ser='$contato_ser', preco='$preco' where idservico='$id'";
return mysqli_query($conexao,$query);
}
function buscaProduto($conexao,$id){
   $query="select * from servicos where idservico='$id'";
   $resultado=mysqli_query($conexao,$query);
   return mysqli_fetch_assoc($resultado);
}
?>
