<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Alterar Usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include 'menu.php'; ?>

  </nav>
</head>

<body>
                    <!-- alterar o FROM e o WHERE dps de pronto--> <!-- WHERE antigo: WHERE usuario_id = $usuario_id";--> 
  <?php 
  include 'conexao.php';                               
  if (isset($_GET['id_classe'])) {
    $id_classe = $_GET['id_classe'];
    $query = "SELECT id_classe, classe FROM classe WHERE id_classe = $id_classe "; 
    $result = mysqli_query($conexao, $query);
    $linha = mysqli_fetch_array($result);
  } else {
    header("Location:'http://localhost/sistemaagropecuario/erro.php'") ;
    exit;
  }
  mysqli_close($conexao);
  ?>

  <h1>Alteração de Classe</h1>
  <hr>


  <form name="Frm-_-" method="post" action="confalt-classe.php" class="was-validated" enctype="multipart/form-data">
    ID: <input size="31" type="text" readonly name="id_classe" autofocus required value="<?php echo $linha['id_classe']; ?>">
    <br>
    <br>
    Classe: <input size="31" type="text" name="classe" autofocus required value="<?php echo $linha['classe']; ?>">
    <br>
    <br>
    <button type="submit" id="submit" name="button" value="Alterar" title="ALTERAR" class="btn btn-primary">Alterar</button>
    <hr>
  </form>
</body>

</html>