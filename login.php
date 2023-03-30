<?php
session_start();
include('conexao.php');

if(empty($_POST['email_login']) || empty($_POST['senha_login'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['email_login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_login']);

$query = "select email from clientes where email ='{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email_login'] = $usuario;
    header('Location: painel.php');
    exit();
} 
else {
  $_SESSION['nao_autenticado'] = true;
  header('Location: login_pag.php');
  exit();
}
