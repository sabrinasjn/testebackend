<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="estilo_tabelas.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>CADASTRO DE ANIMAIS</title>
</head>

<?php
//include_once 'menu.php';
?>

<body>
<div class="container mt-3">
    <h1>Cadastro de Animal</h1>
     <form action="" method="post" enctype="multipart/form-data">
     <div class="mb-3">
      <label class="form-label">Classe</label>
      <select class="form-control" name="classe_animal" id="" autofocus required>
        <option value="" selected>Selecione uma Classe</option>
        <?php
        include 'conexao.php';
        $query = "SELECT id_classe , classe FROM classe";
        $resultado = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($resultado)) {
          echo "<option value='$linha[id_classe]'>
                        $linha[classe]</option>";
        }
        ?>
    </select>
    <div class="input-field col s6">
      <label class="form-label">Nome</label>
      <input type="text" name="nome" autofocus required placeholder="INFORME UM NOME" class="form-control">
    </div>
    <div class="input-field col s6">
      <label class="form-label">Peso</label>
      <input type="text" name="peso" autofocus required placeholder="INFORME UM PESO" class="form-control">
    </div>
    <div class="input-field col s6">
      <label class="form-label">Sexo</label>
      <select name="sexo" class="form-control" placeholder="Sexo">
          <option selected value="<?php echo $linha['sexo']; ?>" class="form-control">Selecione o sexo do animal</option>
          <option value="macho">Macho</option>
          <option value="femea">Fêmea</option>
        </select>
        
    </div>
    <div class="input-field col s6">
      <label class="form-label">Data de nascimento</label>
      <input type="date" name="data_de_nascimento" autofocus required placeholder="INFORME UMA DATA" class="form-control">
    </div>
    <div class="input-field col s6">
      <label class="form-label">Foto</label>
      <input type="file" name="foto" autofocus required placeholder="INFORME UMA IMAGEM" class="form-control">
    </div>
      <br>
    <button type="submit" id="submit" name="button" value="Enviar" class="btn btn-primary">Cadastrar</button>

    </div>
     </form>

  </div>
</body>

</html>
  
  <?php

  include_once 'lista-animal.php';

  ?>

</body>

</html>

<?php
if (isset($_POST['classe_animal']) && isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['sexo']) && isset($_POST['data_de_nascimento']) && isset($_FILES['foto'])) {
  
  $pasta = "img/";
  $pastafoto = $pasta . basename($_FILES['foto']['name']);
  $foto = $_FILES['foto']['name'];
  $file_type = $_FILES['foto']['type'];
  $file_size = $_FILES['foto']['size'];
  if ($file_type == "image/jpeg" or $file_type == "image/jpg" or $file_type == "image/png" && ($file_size <= 3145728)) {
    $resultadofoto = move_uploaded_file($_FILES['foto']['tmp_name'], $pastafoto);
  
    $classe_animal  = $_POST['classe_animal'];
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $sexo = $_POST['sexo'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $foto = $_FILES ['foto']['name'];


    include 'conexao.php';
    $queryselect = "select * FROM  animal WHERE  classe_animal='$classe_animal' and nome='$nome' and peso='$peso' and sexo='$sexo' and data_de_nascimento='$data_de_nascimento' and foto='$foto' ";
    $resultadoselect = mysqli_query($conexao, $queryselect);
    $quantidade = mysqli_num_rows($resultadoselect);    
    if($quantidade==0)
    { 
      $query = "INSERT INTO animal VALUES(null, '$classe_animal', '$nome', '$peso', '$sexo', '$data_de_nascimento', '$foto', null)";
    $resultado = mysqli_query($conexao, $query);
    
    if ($resultado) {
      
      echo "Animal cadastrado com sucesso!";
    } else {
      echo "Erro ao cadastrar";
    }
  }
}
}
?>