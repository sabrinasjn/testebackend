<?php

include 'conexao.php';
$id_vacina = 1;
$query = "SELECT quantidade FROM vacina where id_vacina=$id_vacina";
$resultado = mysqli_query($conexao, $query);
$linha = mysqli_fetch_array($resultado);
$quantidade_antiga = $linha['quantidade'];

$query2 = "update  vacina set quantidade=quantidade - 1 where id_vacina='$id_vacina'"; 
$resultado2 = mysqli_query($conexao, $query2);

$query = "SELECT quantidade FROM vacina where id_vacina=$id_vacina";
$resultado = mysqli_query($conexao, $query);
$linha = mysqli_fetch_array($resultado);
$quantidade_nova = $linha['quantidade'];
if ($quantidade_antiga == $quantidade_nova) {
    echo 'teste com erro';
} else {
    echo 'teste ok';
}
