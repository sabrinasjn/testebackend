<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="estilo_tabelas.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>CADASTRO DE PERFIS</title>
</head>
<body>
    <?php
    //include 'menu.php';
    ?>
    <div class="container mt-3">
        <h1>Cadastro de Perfis</h1>

        <form name="fromusu" method="post" action="" class="form-control" enctype="multipart/form-data">
            <!-- O post vai enviar um dados para que ele seja armazenado no Banco de Dados -->
            <div class="mb-3">
                <label class="form-label">Perfil</label>
                <input type="text" name="perfil" autofocus required placeholder="INFORME UM PERFIL" class="form-control">
            </div>

            <button type="submit" id="submit" name="button" value="Enviar" class="btn btn-primary">Cadastrar</button>
        </form>

    </div>
</body>

</html>

<?php


if (!empty($_POST['perfil'])) {
    //var_dump($_POST);
    $perfil = $_POST['perfil'];
    
     include 'conexao.php';
     $query = "INSERT INTO perfil VALUE(null,'$perfil');";

    $resultado = mysqli_query($conexao, $query);
     if ($resultado) {
         echo "&nbsp &nbsp Perfil cadastrado com sucesso!";
    } else {
        echo "&nbsp &nbsp Erro ao cadastrar!" . mysqli_error($conexao);
    }
      mysqli_close($conexao);
} 
