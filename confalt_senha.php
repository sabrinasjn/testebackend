<?php
include 'conexao.php';
include 'menu.php';
if (isset($_POST['senhanova']) && isset($_POST['conf_senhanova']) && isset($_POST['confirmacao']) && isset($_POST['email'])) {
    $confirmacao = $_POST['confirmacao'];
    $utilizador = $_POST['email'];
    $id_usuario = $_POST['id_usuario'];
    $senhanova = md5($_POST['senhanova']);
    $conf_senha = md5($_POST['conf_senhanova']);
    if ($senhanova == $conf_senha) {
    
        $query2 = "SELECT * FROM recuperacao WHERE confirmacao='$confirmacao' and utilizador='$utilizador'";

        $result2 = mysqli_query($conexao, $query2);
        $quantidade = mysqli_num_rows($result2);
        if ($quantidade == 1) {
            echo $query = "UPDATE usuario SET senha='$senhanova' WHERE  id_usuario=$id_usuario";
            $result = mysqli_query($conexao, $query);
            var_dump($result);
            if ($result) {
                echo " A senha foi redefinida com sucesso!";
                echo "DELETE FROM recuperacao WHERE utilizador = '$utilizador' AND confirmacao = '$confirmacao'";
                $query_delete = mysqli_query($conexao, "DELETE FROM recuperacao WHERE utilizador = '$utilizador' AND confirmacao = '$confirmacao'");
            } else {
                echo "A senha não pode ser redefinida!" . mysqli_error($conexao);
            }
        }
    } else {
        echo mysqli_error($conexao);
    }
}
mysqli_close($conexao);