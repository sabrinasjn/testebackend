<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="estilo_tabelas.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>CADASTRO DE CLASSES</title>
</head>

<body>
<?php
include_once 'menu.php';
?>

<div class="container mt-3">
    <h1>Cadastro de Classes</h1>
     <form action="" method="post" enctype="multipart/form-data">
     <div class="mb-3">
        
     <div class="input-field col s6">
      <label class="form-label"></label>
      <input type="text" name="classe" autofocus required placeholder="INFORME UMA CLASSE" class="form-control">
    </div>
    
    <button type="submit" id="submit" name="button" value="Enviar" class="btn btn-primary">Cadastrar</button>

</div>
 </form>

</div>
</body>

</html>
<?php

include_once 'lista-classe.php';

?>

</body>
</html>

<?php

if (isset($_POST['classe'])) {
    

$classe = $_POST['classe'];

include 'conexao.php';
$queryselect = "select * FROM  classe WHERE  classe='$classe' ";
    $resultadoselect = mysqli_query($conexao, $queryselect);
    $quantidade = mysqli_num_rows($resultadoselect);    
    if($quantidade==0)
{
 $query = "INSERT INTO classe VALUES(null, '$classe')";
$resultado = mysqli_query($conexao, $query);
if ($resultado) {
    
    echo "Classe cadastrada com sucesso";
} else {
    echo "Erro ao cadastrar";
}
}
}



?>