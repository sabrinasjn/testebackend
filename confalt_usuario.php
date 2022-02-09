<?php

//include 'menu.php';
if (isset($_POST['id_usuario']) && isset($_POST['login']) && isset($_POST['nome']) && isset($_POST['perfil_usuario'])) {
    

    $id_usuario = $_POST['id_usuario'];
    $login = $_POST['login'];
    $pasta = "img/";
    $pastafoto = $pasta . basename($_FILES['foto']['name']);
    $foto = $_FILES['foto']['name'];
    $resultadofoto = move_uploaded_file($_FILES['foto']['tmp_name'], $pastafoto);
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $perfil_usuario = $_POST['perfil_usuario'];

    if (!empty($_POST['senhanova'])) {
        var_dump($_POST['senhanova']);
        var_dump($_POST['conf_senhanova']);
        if ($_POST['senhanova'] == $_POST['conf_senhanova']) {
            $senhanova = md5($_POST['senhanova']);
            $querysenha = ",senha= '$senhanova'";
        } else {
        echo "<script>window.location='usuario.php';</script>";
            echo "&nbps &nbps As senhas digitadas não são iguais. Por favor tente novamente.";
        } 
    } else {
        $querysenha = "";
    }


    if (!empty($_POST['fotonova'])) {
        $fotonova = $_POST['fotonova'];
        $queryfoto = ",foto= '$fotonova'";
    } else {
        $queryfoto = "";
    }

    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        $queryemail = ",email= '$email'";
    } else {
        $queryemail = "";
    }

    include 'conexao.php';
    $query = "UPDATE usuario SET perfil_usuario='$perfil_usuario', nome='$nome', login='$login'  $queryemail $queryfoto $querysenha  WHERE  id_usuario=$id_usuario";
    $result = mysqli_query($conexao, $query);
    //echo$query;
    if ($result) {
        echo "O Usuário: $login foi alterado com sucesso!";
    } else {
        echo "O Usuário não pode ser alterado!" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
}else {
    echo 'Favor preencha os campos de Login, Nome e Perfil ';
}
