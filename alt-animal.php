<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Alterar Animal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>



  <?php include 'menu.php'; ?>

  </nav>
</head>

<body>

  <?php

  include 'conexao.php';
  if (isset($_GET['id_animal'])) {
    $id_animal = $_GET['id_animal'];
    $query = "SELECT id_animal, classe_animal, nome, peso, sexo, foto FROM animal WHERE id_animal = $id_animal";
    $result = mysqli_query($conexao, $query);
    $linha = mysqli_fetch_array($result);
  } else {
    header("Location: http://localhost/locadora/erro.php");
    exit;
  }
  mysqli_close($conexao);
  ?>

  <h1>Alteração de Animal</h1>
  <hr>


  <form name="FrmAnimal" method="post" action="confalt-animal.php" class="was-validated" enctype="multipart/form-data">
    
    <div class=" class="container mt-3""> 
    <label for="">Classe:</label>
    <select class="form-control" name="classe_animal" id="" autofocus required>
      <option value="<?php echo $linha['classe_animal']; ?>" selected>Selecione uma Classe</option>
      <?php
      include 'conexao.php';
      $query = "SELECT id_classe , classe FROM classe";
      $resultado = mysqli_query($conexao, $query);
      while ($linhaalt = mysqli_fetch_array($resultado)) {
        echo "<option value='$linhaalt[id_classe]'>
                        $linhaalt[classe]</option>";
      }
      ?>
    </select>
    
    <br>
    <br>
    <div class="form-control">
      <label for="">Nome: </label>
      <input size="31" type="text" name="nome" autofocus required value="<?php echo $linha['nome']; ?>">
    </div>
    <br>
    <br>
    Peso: <input size="31" type="number" name="peso" autofocus required value="<?php echo $linha['peso']; ?>">
    <br>
    <br>
    Sexo:
    <select name="sexo" class="form-control" placeholder="Sexo">
          <option selected value="<?php echo $linha['sexo']; ?>" class="form-control">Selecione o sexo do animal</option>
          <option value="macho">Macho</option>
          <option value="femea">Fêmea</option>
        </select>
    <br>
    <br>
    Data de nascimento: <input type="date" name="data_de_nascimento" autofocus required value="<?php echo $linha['data_de_nascimento']; ?>">
    <br>
    <br>
    <br>Sua foto atual: <br>
    <label for=""><?php echo "<a href='img/$linha[foto]' target='_blank' > <img src='img/$linha[foto]'  width='300' height='300'> </a>" ?></label>
    <br>
    <br>
    Foto: <input type="file" name="foto" value="<?php echo $linha['foto']; ?>">
    <br>
    <br>
    <input type="submit" class="btn btn-primary" value="Alterar" title="Alterar">
    <input type="hidden" name="id_animal" value="<?php echo $linha['id_animal']; ?>">
    <br>
    <hr>
    </div>

  </form>
</body>

</html>