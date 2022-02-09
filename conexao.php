<?php

$usuario = "root";
$senha = "";
$host = "localhost";
$banco = "trabalhofinal";

$conexao = mysqli_connect($host,$usuario,$senha,$banco)
or die(mysqli_error($conexao));

?>