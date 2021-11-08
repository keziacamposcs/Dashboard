<?php
session_start();
include 'conexao/conexao.php';

$usuario = $_POST['usuario'];
$usuario_senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

#   Busca senha
$dados = mysqli_fetch_array($buscar);
$senhadb = $dados['senha'];

$senhaVerificada = md5($senha);

#   Verifica se existe o usuário
$linha = mysqli_affected_rows($conexao);

if ($linha == 1)
{   
    if ($senhadb == $senhaVerificada)
    {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    }
    else
    {
        header('Location: login.php?id=1');
    }
}
else
{
    header('Location: 404.html');
}
?>