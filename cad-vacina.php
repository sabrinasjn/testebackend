<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="60">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastro de Vacinas</title>
</head>

<?php
include_once 'menu.php';
?>

<body>
    <h1>Cadastro de Vacinas</h1>

    <div class="row">
    <form class="col s12" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="INSIRA O NOME DA VACINA"  name="vacina"  type="text" class="validate">    
        </div>

        <div class="input-field col s6">
          <input type="date" name="data_de_validade" class="validate" required>
          <label >Data de validade</label>
        </div>
      
      
        <div class="input-field col s12">
          <input type="number" name="quantidade" required class="validate" placeholder="Quantidade">
          
        </div>
      </div> 
    <button type="submit" id="submit" name="button" value="Enviar" class="btn btn-primary">Cadastrar</button>

    </form>
  </div>

    
<?php

include_once 'lista-vacina.php';

?>

</body>
</html>

<?php

if (isset($_POST['vacina']) && isset($_POST['data_de_validade']) && isset($_POST['quantidade'])) {
    

$vacina = $_POST['vacina'];
$data_de_validade = $_POST['data_de_validade'];
$quantidade = $_POST['quantidade'];

include 'conexao.php';
$queryselect = "select * FROM  vacina WHERE  vacina='$vacina' and nome='$nome' and data_de_validade='$data_de_validade' and quantidade='$quantidade' ";
    $resultadoselect = mysqli_query($conexao, $queryselect);
    $quantidade = mysqli_num_rows($resultadoselect);    
    if($quantidade==0)
    {
 $query = "INSERT INTO vacina VALUES(null, '$vacina', '$data_de_validade', '$quantidade')";
$resultado = mysqli_query($conexao, $query);
if ($resultado) {
    
    echo "Vacina cadastrada com sucesso";
} else {
    echo "Erro ao cadastrar";
}
}
}


?>