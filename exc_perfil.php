<?php
include 'conexao.php';
$id_perfil = $_GET['id_perfil'];
$query = "DELETE FROM perfil WHERE id_perfil=$id_perfil";
$result = mysqli_query($conexao, $query);
if ($result)
{
echo "Perfil de Id: $id_perfil foi deletado";
}else{
    echo "O perfil não pôde ser deletado".mysqli_error
    ($conexao);
}
?>