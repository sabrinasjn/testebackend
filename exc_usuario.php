<?php
include 'conexao.php';
$id_usuario = $_GET['id_usuario'];
$query = "DELETE FROM usuario WHERE id_usuario=$id_usuario";
$result = mysqli_query($conexao, $query);
if ($result) {
    echo "Usuário de Id: $id_usuario foi deletado";
} else {
    echo "O usuario não pôde ser deletado" . mysqli_error($conexao);
}
