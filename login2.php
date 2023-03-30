<?php
session_start();
include('conexao.php');

if(empty($_POST['email_login_f']) || empty($_POST['senha_login_f'])) {
    header('Location: index.php');
    exit();
}

$usuariof = mysqli_real_escape_string($conexao, $_POST['email_login_f']);
$senhaf = mysqli_real_escape_string($conexao, $_POST['senha_login_f']);

$query = "select email from funcionarios where email ='{$usuariof}' and senha ='{$senhaf}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email_login_f'] = $usuariof;
    header('Location: painel2.php');
    exit();
} 
else {
  $_SESSION['nao_autenticados'] = true;
  header('Location: login-pag2.php');
  exit();
}
