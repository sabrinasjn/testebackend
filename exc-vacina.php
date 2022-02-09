<?php

include 'conexao.php';

$id_vacina = $_GET['id_vacina'];

$query = "DELETE FROM vacina WHERE id_vacina=$id_vacina";
$result = mysqli_query($conexao,$query);
if ($result) {
    echo "A vacina de código $id_vacina foi deletado";

}else {
    echo "A vacina não pôde ser deletada".mysqli_error($conexao);
}
mysqli_close($conexao);
header("Location: cad-vacina.php");
?>

