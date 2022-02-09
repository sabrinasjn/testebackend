<?php
include 'menu.php';
include 'conexao.php';

if (isset($_GET['email']) && $_GET['confirmacao']) {
  $email = $_GET['email'];
  $confirmacao = $_GET['confirmacao'];
  $query = "SELECT * FROM usuario WHERE email='$email'";
  $result = mysqli_query($conexao, $query);
  $linha = mysqli_fetch_array($result);
} else {
  echo '<script>window.location.replace("http://localhost/agrosistema/erro.php")</script>';
  //header('Location: http://localhost/agrosistema/erro.php');
  //exit;
}
//if ($quantidade != 1) {
   // echo '<script>window.location.replace("http://localhost/agrosistema/erro.php?mensagem=Token-expirado")</script>';
  
 // }
$query2 = "SELECT * FROM recuperacao WHERE confirmacao='$confirmacao' and utilizador='$email'";

$result2 = mysqli_query($conexao, $query2);
$quantidade = mysqli_num_rows($result2);


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

  <div class="container mt-3">
    <h1>ALTERAÇÃO DE USUÁRIOS</h1>
    <form name="fromusuario" method="post" action="confalt_senha.php" class="form-control" enctype="multipart/form-data">
      <!-- O post vai enviar um dados para que ele seja armazenado no Banco de Dados -->
      <div class="mb-3">
        <label class="form-label">Senha Nova</label>
        <input type="password" name="senhanova" class="form-control" placeholder="DIGITE A NOVA SENHA"> <br>
        <label class="form-label">Confirmação da Senha</label>
        <input type="password" name="conf_senhanova" class="form-control" placeholder="DIGITE A NOVA SENHA NOVAMENTE">
        <input type="hidden" name="confirmacao" value="<?php echo $_GET['confirmacao']; ?>">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Alterar</button>
      <input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario']; ?>">

    </form>
  </div>

</body>

</html>