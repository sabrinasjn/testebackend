<?php

   session_start();
$login = $_POST['login'];
$senhalogin = md5($_POST['senha']);
include 'conexao.php';
$query = "SELECT  login, senha, foto FROM usuario WHERE login='$login' and senha='$senhalogin'";
$result = mysqli_query($conexao,$query);
//var_dump($query);
$quantidade = mysqli_num_rows($result);
$linha = mysqli_fetch_array($result);


if ($quantidade == 1) {
    $_SESSION['logado'] = true;
    $_SESSION['login'] = $login;
    $_SESSION['foto'] = $linha['foto'];
    echo "Logado";
}else {
    echo"<script>alert('Usuário/senha inválidos!');</script>";
}
echo '<script>window.location.replace("http://10.10.9.162/agrosistema/index.php")</script>';
//header('location: index.php');
