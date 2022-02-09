<?php
//include 'menu.php';
include 'conexao.php';
//var_dump($_GET);
if (isset($_GET['id_usuario'])) {
  //var_dump($_GET);
  $id_usuario = $_GET['id_usuario'];
  $query = "SELECT * FROM usuario WHERE id_usuario=$id_usuario";
  //var_dump($query);
  $result = mysqli_query($conexao, $query);
  //var_dump($result);
  $linha = mysqli_fetch_array($result);
} else {
  echo '<script>window.location.replace("http://localhost/agrosistema/erro.php")</script>';
  //header('Location: http://localhost/locadora/erro.php');
  //exit;
}
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo_cadastro.css">
  <title>ALTERAÇÃO DE USUÁRIOS</title>
</head>

<body>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Imagem Ampliada</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <?php echo "<img data-bs-toggle='modal' data-bs-target='#myModal' src='img/$_SESSION[foto]' width='200' height='200' 
                            class='rounded-circle' title='$_SESSION[login]'>" ?>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
  </div>

  <div class="container mt-3">
    <h1>ALTERAÇÃO DE USUÁRIOS</h1>
    <form name="fromusuario" method="post" action="confalt_usuario.php" class="form-control" enctype="multipart/form-data">
      <!-- O post vai enviar um dados para que ele seja armazenado no Banco de Dados -->
      <div class="mb-3">
        <label class="form-label">Perfil</label>
        <select name="perfil_usuario" id="" autofocus required>
          <option value="" selected>Selecione um perfil</option>
          <?php
          include 'conexao.php';
          $query = "SELECT id_perfil , perfil FROM perfil";
          $resultado = mysqli_query($conexao, $query);
          while ($linhaperfil = mysqli_fetch_array($resultado)) {
            echo "<option value='$linhaperfil[id_perfil]'>
                        $linhaperfil[perfil]</option>";
          }
          ?>
        </select><br>
      </div>
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" autofocus required value="<?php echo $linha['nome']; ?>"> <br>
      </div>
      <div class="mb-3">
        <label class="form-label">Login</label>
        <input type="text" name="login" class="form-control" autofocus required value="<?php echo $linha['login']; ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control" value="<?php echo $linha['senha']; ?>" readonly disabled> <br>
        <label class="form-label">Senha Nova</label>
        <input type="password" name="senhanova" class="form-control" placeholder="DIGITE A NOVA SENHA"> <br>
        <label class="form-label">Confirmação da Senha</label>
        <input type="password" name="conf_senhanova" class="form-control" placeholder="DIGITE A NOVA SENHA NOVAMENTE">

      </div>
      <div class="mb-3">
        <label class="form-label">Foto atual</label>
        <input type="file" name="foto" class="form-control" autofocus required value="<?php echo $_SESSION['foto']; ?>" readonly disabled> <br>
        <label class="form-label"><?php echo "<img data-bs-toggle='modal' data-bs-target='#myModal' src='img/$_SESSION[foto]' width='50' height='50' class='rounded-circle' title='$_SESSION[login]'>" ?></label> <br>
        <label class="form-label">Foto nova</label>
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">E-Mail</label>
        <input type="text" name="email" class="form-control" autofocus required value="<?php echo $linha['email']; ?>"> <br>
      </div>
      <button type="submit" class="btn btn-primary">Alterar</button>
      <input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>">
     <?php
     //var_dump($linha['id_usuario']);
     ?>
    </form>
    
  </div>

</body>

</html>