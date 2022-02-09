<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="estilo_tabelas.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>CADASTRO DE USUÁRIOS</title>
</head>

<body>
  <?php
  //include 'menu.php';
  ?>
  <div class="container mt-3">
    <h1>Cadastro de Usuários</h1>
     <form action="" method="post" enctype="multipart/form-data">
     <div class="mb-3">
      <label class="form-label">Perfil</label>
      <select class="form-control" name="perfil_usuario" id="" autofocus required>
        <option value="" selected>Selecione um perfil</option>
        <?php
        include 'conexao.php';
        $query = "SELECT id_perfil , perfil FROM perfil";
        $resultado = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($resultado)) {
          echo "<option value='$linha[id_perfil]'>
                        $linha[perfil]</option>";
        }
        ?>
      </select><br>

    <div class="input-field col s6">
      <label class="form-label">Nome</label>
      <input type="text" name="nome" autofocus required placeholder="INFORME UM NOME" class="form-control">
    </div>

    <div class="input-field col s6">
      <label class="form-label">Login</label>
      <input type="text" name="login" autofocus required placeholder="INFORME UM LOGIN" class="form-control">
    </div>

    <div class="input-field col s6">
      <label class="form-label">Senha</label>
      <input type="password" name="senha" autofocus required placeholder="INFORME UMA SENHA" class="form-control"> <br>
      <label class="form-label">Confirmação da Senha</label>
      <input type="password" name="conf_senha" class="form-control" placeholder="DIGITE A SENHA NOVAMENTE">
    </div>

    <div class="input-field col s6">
      <label class="form-label">Foto</label>
      <input class="form-control" type="file" name="foto" required>
    </div>

    <div class="col s12">
      <label class="form-label">E-mail</label>
      <input class="form-control" type="email" name="email" required placeholder="DIGITE SEU E-MAIL">
    </div>

    <button type="submit" id="submit" name="button" value="Enviar" class="btn btn-primary">Cadastrar</button>

    </div>
     </form>

  </div>
</body>

</html>

<?php


if (isset($_POST['perfil_usuario']) && isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_FILES['foto']) && isset($_POST['email'])) {
  //var_dump($_POST);
  $nome = $_POST['nome'];
  $login = $_POST['login'];
  $pasta = "img/";
  $pastafoto = $pasta . basename($_FILES['foto']['name']);
  $foto = $_FILES['foto']['name'];
  $email = $_POST['email'];
  $perfil_usuario = $_POST['perfil_usuario'];

  //var_dump($_FILES);

  $file_type = $_FILES['foto']['type'];
  $file_size = $_FILES['foto']['size'];

  if ($_POST['conf_senha'] == $_POST['senha']) {
    if (($file_type == "image/jpeg" or $file_type == "image/png" or $file_type == "image/jpg") && ($file_size <= 1048576)) {
      $resultadofoto = move_uploaded_file($_FILES['foto']['tmp_name'], $pastafoto);

      //Confirmação do envio da foto
      if ($resultadofoto) {
        echo "&nbsp &nbsp  Foto foi enviada com sucesso! <br>";
      }

      $senhalogin = md5($_POST['senha']);
      include 'conexao.php';
      $query = "INSERT INTO usuario VALUE(null,'$perfil_usuario', '$nome', '$login', '$email','$foto','$senhalogin');";

      $resultado = mysqli_query($conexao, $query);
      if ($resultado) {
        echo "&nbsp &nbsp Usuário cadastrado com sucesso!";
      } else {
        echo "&nbsp &nbsp Erro ao cadastrar!" . mysqli_error($conexao);
      }
      mysqli_close($conexao);
    } else {
      echo "&nbsp &nbsp <b>Seu arquivo deve ser nos formatos .jpg ou .png com no máximo 1mb!</b>";
    }
  } else {
    echo "&nbsp &nbsp <b>Os campos de senhas devem ser iguais, favor verificar novamente</b>";
  }
}
