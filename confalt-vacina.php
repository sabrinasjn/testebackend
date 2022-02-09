<?php
include 'menu.php';
if(isset($_POST['id_vacina']) && isset($_POST['vacina']))
{
    $id_vacina = $_POST['id_vacina'];
    $vacina = $_POST['vacina'];
    $data_de_validade = $_POST['data_de_validade'];
    $quantidade = $_POST['quantidade'];
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    $databr = date('d/m/Y H:i:s');
    echo "A data atual é: $databr<br>";
    
    include 'conexao.php';
    $query = "UPDATE vacina SET vacina='$vacina', data_de_validade='$data_de_validade', quantidade='$quantidade' WHERE id_vacina=$id_vacina";
    $resultado = mysqli_query($conexao,$query);

    if($resultado)
    {
        echo "<h1>A vacina: $vacina foi alterado com sucesso!</h1>";
    }else{
        echo "<h1>A vacina não pode ser alterada!</h1>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    header("Location: cad-vacina.php");
}
?>