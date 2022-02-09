<?php

use PHPUnit\Framework\TestCase;

class EqualsTest extends TestCase
{
    public function testFailure()
    {
        include 'conexao.php';
        $id_vacina = 1;
        $query = "SELECT quantidade FROM vacina where id_vacina=$id_vacina";
        $resultado = mysqli_query($conexao, $query);
        $linha = mysqli_fetch_array($resultado);
        //var_dump($linha);
        $quantidade_antiga = $linha['quantidade'] -1;

        $query2 = "update vacina set quantidade=quantidade - 1 where id_vacina='$id_vacina'"; 
        $resultado2 = mysqli_query($conexao, $query2);

        $query = "SELECT quantidade FROM vacina where id_vacina=$id_vacina";
        $resultado = mysqli_query($conexao, $query);
        $linha = mysqli_fetch_array($resultado);
        $quantidade_nova = $linha['quantidade'] ;
        //var_dump((int) $quantidade_antiga);
        $this->assertEquals((int) $quantidade_antiga,(int) $quantidade_nova);
    }
}