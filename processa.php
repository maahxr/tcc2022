<?php
session_start();
include_once("conexao.php");

if(!empty($_POST['estrela'])){
    $estrela = $_POST['estrela'];
    $mensagem = $_POST['mensagem'];
	
	//Salvar no banco de dados
	$result_avaliacos = "INSERT INTO avaliacao (qnt_estrela, created, mensagem) VALUES ('$estrela', NOW(), '$mensagem')";
	$resultado_avaliacos = mysqli_query($conexao, $result_avaliacos);
	
	if(mysqli_insert_id($conexao)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação";
		header("Location: index.php");
	}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: index.php");
} 