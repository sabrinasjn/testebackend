<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
          <?php include 'menu.php'; ?>  
    </ul>
  </div>

</nav>
    <title>Excluir Classe</title>
</head>
<body>
    
</body>
</html>
<?php

include 'conexao.php';
$id_classe = $_GET['id_classe'];
                        //alterar o "DELETE" se for necessário
 $query = "DELETE FROM classe WHERE id_classe = $id_classe"; 

 $result = mysqli_query($conexao,$query);
if ($result) {
    echo "Classe de código $id_classe foi deletado";

}else {
    echo "A classe não pôde ser deletado".mysqli_error($conexao);
}

mysqli_close($conexao);
header("Location: cad-classe.php");
?>
